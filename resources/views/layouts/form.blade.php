
    <form class="form-control" method="POST" action="{{route('apply')}}" enctype="multipart/form-data">
      @csrf
        <div class="mb-3" >
            <label for="name" class="form-label">Full Name</label>
            <input name ="name" id="name" type="text" class="form-control" >
              @error("name")<i class="error-class">{{$message}}</i>@enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name ="email" id="email" class="form-control"  aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error("email")<i class="error-class">{{$message}}</i>@enderror
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" name ="phone_number" id="phone_number"">
                @error("phone_number")<i class="error-class">{{$message}}</i>@enderror
        </div>
        <div class="input-group mb-3">
        <label class="input-group-text" for="title">Title</label>
        <select class="form-select" name ="title" id="title">
            <option value="Frontend Developer">Frontend Developer</option>
              <option value="Product Designer">Product Designer</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" name ="location" id="location">
                @error("location")<i class="error-class">{{$message}}</i>@enderror
        </div>
        <div class="input-group">
        <input type="file" class="form-control" name ="file" id="file">
        <label class="input-group-text" for="file">Upload</label>
        </div>
         <div mb-3 >
           @error("file")<i class="error-class">{{$message}}</i>@enderror
         </div>
         <div class="mt-3">
        <button type="submit" class="btn btn-primary ">Submit</button>
         </div>
        </form> 