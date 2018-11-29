<?php if (isset($_SESSION['is_login'])){ ?>
    
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-sm-5 ">
             <div class="form-group">
            <label for="thumbnail"> Thumbnail </label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
            
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label>Genre</label>
            <select>
                 <option value="audi">Pilih</option>
                <option value="volvo">Romantis</option>
                <option value="saab">Horror</option>
                <option value="opel">Comedy</option>
                <option value="audi">Action</option>
            </select>
            </div>
            <div class="form-group">
            <label>Judul Serial</label>
            
            <textarea rows="4" cols="80" >
                    
            </textarea>
            </div>
            <br>
            <a class="btn btn-primary" href="<?php echo BASE_URL ?>/Episode"> Next</a>
        </div>
    </div>
</div>

<?php } else { ?>
    <div class="container py-5">
        <div class=" row justify-content-center ">
            <div class="col-sm-5">
            <h5 style="justify ='center"> Silahkan Login terlebih dahulu</h5>
                
            <a class="btn btn-primary" href="<?php echo BASE_URL ?>/sign-in">LOGIN</a>
            </div>
        </div>
        
        </div>
<?php } ?> 
    
