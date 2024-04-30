<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>sent email</title>
</head>
<body>
    <div class="container">
        <div class="row mx-0 justify-content-center">
          <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
            <form
              method="POST"
              class="w-100 rounded-1 p-4 border bg-white"
              action="{{route('contact.send')}}"
            >
            
              <label class="d-block mb-4">
                <span class="form-label d-block">Your name</span>
                <input
                  name="name"
                  type="text"
                  class="form-control"
                  placeholder="Joe Bloggs"
                />
              </label>
      
              <label class="d-block mb-4">
                <span class="form-label d-block">Email address</span>
                <input
                  name="email"
                  type="email"
                  class="form-control"
                  placeholder="joe.bloggs@example.com"
                  required
                />
              </label>
      
              <label class="d-block mb-4">
                <span class="form-label d-block">Message</span>
                <textarea
                  name="message"
                  class="form-control"
                  rows="3"
                  placeholder="Tell us what you're thinking about..."
                  required
                ></textarea>
              </label>
      
              <div class="mb-3">
                <button type="submit" class="btn btn-primary px-3 rounded-3">
                  Contact Us
                </button>
              </div>
      
              <div class="d-block text-end">
                <div class="small">
                  by
                  <a
                    href="https://herotofu.com"
                    class="text-dark text-decoration-none"
                    target="_blank"
                    >HeroTofu</a
                  >
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
</body>
</html>