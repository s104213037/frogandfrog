function list_Photo(){
  console.log('list_Photo');
		$.ajax({
		  type: 'GET',
      url: "http://localhost/frog/show.php",
      success : function(data){
      $('#about').html(
        `"<div class="col-md-7">
        <h2>data.frogphotos.filepic</h2>
        <h2>data.frogdata.name</h2>
        <h2>data.frogdata.type</h2>
        <h2>data.frogdata.introduce</h2>
        </div>"`
      )
    }
  });
}
$('#frogbutton').on("click",function(){
    list_Photo(data);
    console.log("success!");
});
