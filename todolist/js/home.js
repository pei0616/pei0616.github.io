var addBtn = document.getElementsByClassName('addBtn')[0];
var save = document.getElementById('save');
save.style.visibility='hidden';

//新增代辦事項
addBtn.onclick=function(){
    var addTitle = document.getElementsByClassName('input_text')[0].value;
    var addDate = document.getElementsByClassName('input_date')[0].value;
    var birthdayReg=new RegExp(/^\d{4}\/(0[1-9]|1[02])\/(0[1-9]|[12][0-9]|3[01])$/);
    
    //RegExp方法test
    var reg = birthdayReg.test(addDate);
    console.log(reg);
    if(addTitle!=='' && addDate!=='' && reg===true){
        addItem(addTitle,addDate);
        //讓input的值清除
        document.getElementsByClassName('input_text')[0].value="";
        document.getElementsByClassName('input_date')[0].value="";
    }else if(addTitle==='' || addDate===''){
        alert('請輸入項目');
    }else if(reg===false){
        alert('請輸入日期形式 ex.yyyy/mm/dd');
    }
}

function addItem(input_item,input_date){
    //li建立
    var addText= document.getElementsByClassName('input_text').value;
    var addDate = document.getElementsByClassName('input_date').value;
    var myList = document.querySelector('ul');
    var li = document.createElement('li');
    var t = document.createElement('div');
    var status = document.createElement('div');
    var title = document.createElement('input');
    var date = document.createElement('input');
    var img1 = document.createElement('img');
    var img2 = document.createElement('img');
    var msg = document.getElementById('msg');
    //className
    t.className='item';
    status.className='itemStatus';
    title.classList.add('item_title','cancel-input');
    date.classList.add('item_date','cancel-input');
    img1.className='revise';
    img2.className='delete';
    title.setAttribute('name','title');
    date.setAttribute('name','date');
    //src
    img1.src='images/pencil.png';
    img2.src='images/cross.png';
    //輸入項目
    title.setAttribute('value',input_item);
    date.setAttribute('value',input_date);
    //取消input的編輯
    title.setAttribute('readonly','readonly');
    date.setAttribute('readonly','readonly');
    //append
    t.appendChild(title);
    t.appendChild(date);
    status.appendChild(img1);
    status.appendChild(img2);
    li.appendChild(t);
    li.appendChild(status);
    myList.appendChild(li);
    save.style.visibility='visible';
    
    //滾輪
    liNum = document.getElementsByTagName('LI');
    var liH = liNum.length*50;
    if(liH>myList.offsetHeight){
        myList.style.overflowY='scroll';
    }
    //delete
    img2.onclick=function(){
        myList.removeChild(img2.parentNode.parentNode); 
        liH=liH-50;
        if(liH<myList.offsetHeight){
            myList.style.overflowY='hidden';
        }
    }

    //revise
    //增加修改方法
    img1.onclick=function(e){
        e=window.event||e;
        e.stopImmediatePropagation?e.stopImmediatePropagation():e.cancelBubble=true;
       
        //將此LI元素長度變高
        this.parentNode.previousSibling.style.paddingTop="0px";
        this.parentNode.parentNode.style.height="56px";

        //把事項變成輸入框可修改，輸入框原本內容跟之前一樣
        var titleBefore = title.getAttribute('value');
        var dateBefore = date.getAttribute('value');
        title.classList.remove('cancel-input');
        title.removeAttribute('readonly');
        date.removeAttribute('readonly');
        date.classList.remove('cancel-input');
        title.value=titleBefore;
        date.value=dateBefore;
        title.onblur=function(){
            t.style.paddingTop="5px";
            title.setAttribute('readonly','readonly'); 
            title.classList.add('cancel-input');
            
        }
        date.onblur=function(){
            li.style.height="50px";
            date.setAttribute('readonly','readonly'); 
            date.classList.add('cancel-input');
            
        } 
        
        window.addEventListener('click',e =>{
            msg.innerHTML='';
        })
       
    }
    
    //是否完成
    li.addEventListener('click',function(e){
        e.target.classList.toggle('checked');
    })
 
};

