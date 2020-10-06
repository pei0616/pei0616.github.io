//利用ajax不刷新頁面取得資料

$('#block_home').submit(function(e){
e.preventDefault();
var $title=$('input[name="title"]');
var $date=$('input[name="date"]');
var $item=$('.item');
var record=[];
 $.each($item,function(i){
     record.push({title:$title[i].value,date:$date[i].value});
})
console.log(record);
$.ajax({
    type:'POST',
    url:'upload.php',
    dataType:'json',
    data:{
        record:record
    },
    success:function(data){
        if( !$('.item_title').hasClass('cancel-input') || !$('.item_date').hasClass('cancel-input')){
            $('#msg').html('<p class="ajax-alert">請完成修改後再儲存</p>');
        }else if(data.title===null){
            $('#msg').html('<p class="ajax-alert">'+data.errorMsg+'</p>');
        }else{
            $.each(data,function(index,value){
            console.log(value);
            //{title: "qqq", date: "09/17/2020"}
            //{title: "aaa", date: "09/23/2020"}
            $('#msg').html('<p class="ajax-success">upload successfully</p>');
            })
        }
    },
    error:function(jqXHR){
        $('#msg').html('<p class="ajax-alert">'+jqXHR.status+'</p>');
    } 
})
})



