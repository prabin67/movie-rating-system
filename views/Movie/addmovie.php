<div class="container mx-auto">

<main class="mx-auto">
    <div class="row">
    <div class="col-md-6 min-vh-100 d-flex flex-column justify-content-center">
        <div class="card rounded shadow shadow-sm">
            <div class="card-header">
                <h3 class="mb-0">Movie Upload</h3>
            </div>
            <div class="card-body">

            <form class="mt-3" method="POST" role="form" autocomplete="off" action="/movie/Movie/MovieRegistration">
                       <div class="row">
                            <div class="col">
                                <label for="photo"></label><br>
                                <img class="img w-25 mb-25 rounded" src="/movie/images/movies/" alt="">
                                <input type="file" class="form-control-file is-valid" id="image" name="image"  />
                            </div>
                 </div>
               
                <br>
                <br>


                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="firstname">Movie Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="movie title" required=""
                                id="fullname" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="firstname">Stars<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="actor" placeholder="actor name" required=""
                                id="fullname" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="firstname">Movie Director<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="director" placeholder="director name" required=""
                                id="fullname" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="firstname">Movie Writer<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="writer" placeholder="writer name" required=""
                                id="fullname" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="firstname">Movie Plot<span class="text-danger">*</span></label>
                            <input type="textarea" class="form-control" name="plot" placeholder="plot" required=""
                                id="fullname" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            
                           <label for="">Genre<span class="text-danger">*</span></label>
                           <select name="rating" id="rating" style="width:20%; height:40;>
                            <option value="1"></option>
                            <option value="2">Crime</option>
                            <option value="3">Action</option>
                            <option value="4">Comedy</option>
                            <option value="5">Horror</option>
                             
                           </select>
            
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="firstname">Released year<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="year" placeholder="release year" required=""
                                id="fullname" />
                        </div>
                    </div>
                </div>



                 
                <div class="row">
                    <div class="col">
                        <input type="submit" name="insert" value="uplode" class="btn btn-primary" />
                       
                    </div>

                </div>
            </form>
        </div>
        </div>
    </div>
</div>
</main>

</div>