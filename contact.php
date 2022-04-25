<!Doctype html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>
       <div class="w-50 m-auto">
         <form action="info.php" method="post">
             <div class="form-group">
                 <label>Username</label>
                 <input type="text" name="user" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
                 <label>Email Address</label>
                 <input type="text" name="email" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
                 <label>Contact Number</label>
                 <input type="text" name="mobile" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
                 <label>Comments</label>
                 <textarea class="form-control" name="comments"> 
                 </textarea>
             </div>
             <button type="submit" class="btn btn-success">Submit</button>
         </form>
       </div>

</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">HimalayanWatchesCO.</p>
</footer>
</body>

</html>