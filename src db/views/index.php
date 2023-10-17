<!-- <h1><?=$this->params['foo']?></h1> -->

<!-- <h1><?=$this->foo?></h1> -->

<!-- we got access because in View.php got   
 foreach($this->params as $key =>$value){
            $$key = $value;
        } -->
<!-- <h1><?=$foo?></h1> -->

<!-- we got in View.php - extract($this->params); -->
<h1><?=$foo?></h1> 


<form action="/upload" method="post" enctype="multipart/form-data">
    <input type="file" name ="receipt"/>
    <button type="submit">Upload</button>
</form>