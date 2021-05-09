
<style>
    .btn {
        margin-right: 1px;
        margin-top: 2px;
    }
    .hidden
    {
        display: none;
    }
</style>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Uploaded File</h3>
              </div>
              <div class="card-body">
              <div class="container">
                <div class="form">
                    <div class="file-upload-wrapper" data-text="Select your file!">                    
                    <div class="row">
                        <div class="col-md-6">
                            <input name="fileupload" type="file" class="btn btn-file" value="">
                        </div> 
                        <div class="col-md-6">
                            <button class="btn btn-info" id="btn_uploadfile" onclick="uploadFile()"> Upload now</button>
                        </div>   
                    </div>  
                    </div>
                </div>
                
                </div> <br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-6">File Name: </div>  
                            <div class="col-lg-6">
                                <input id="filename" class="form-control" disabled>
                            </div>  
                        </div>
                        <div class="col-lg-6">
                        <div class="col-lg-6"> File type:</div>  
                            <div class="col-lg-6">
                                <input id="filetype" class="form-control" disabled>
                            </div> 
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-6"> File size:</div>  
                            <div class="col-lg-6">
                                <input id="filesize" class="form-control" disabled>
                            </div> 
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-6"> File extension:</div>  
                            <div class="col-lg-6">
                                <input id="fileextension" class="form-control" disabled>
                            </div> 
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-6"> File status:</div>  
                            <div class="col-lg-6">
                                <input id="filestatus" class="form-control" disabled>
                            </div> 
                        </div><br>
                                  
                        <div class="col-lg-12">
                            <div class="col-lg-6"> File Description:</div>  
                            <div class="col-lg-12">
                                <textarea id="filedescription" class="form-control"></textarea>
                            </div> 
                        </div>             
                    </div>
                </div>
                <br>
                <div class="container hidden">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-6">Shared Link: </div>  
                            <div class="col-lg-12">
                                <input id="fileSharedLink" class="form-control" disabled>
                            </div>  
                        </div>                                 
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script >

function uploadFile()
{
    alert("asdasdas");
}
</script>