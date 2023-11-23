@extends('layouts.app')



@section('content')


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- css styles -->

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ mix('css/project.css') }}">
</head>
<body>


    <h1 class="text-center  text-red-500   mb-10 text-3xl">My<span class="text-black">-projects<span></h1>

    


  <div class='wrap'> 
  <div class='grid grid-cols-1 lg:grid-cols-3  gap-2'>
  

<div class="tile  p-4">
  <img src='https://i.ibb.co/LdSjDVn/Captdure.png'/>
  <div class="text">
  <h1 class='text-white font-bold  text-2xl'> Sports Academy</h1>
  <h2 class="animate-text">
 A personalized dashboard for students, Instructors, and Admin.
Students enrolled in courses. make payment, see the payment history, and confirm email.Admin can give feedback and approve classes and Users. Instructors add and manage classes.   </h2>

  
<div class='flex gap-10'>
  <a to="https://sports-academie.firebaseapp.com/"><p  className="animate-text text-red-200"> Live link  </p></a>
  <a to="https://github.com/RezoanulHasan/sports--academy-client"> <p  className="animate-text text-yellow-200 "> Git Client </p></a>
  <a to="https://github.com/RezoanulHasan/sports-academy--server"> <p  className="animate-text text-green-200 "> Git Server </p></a>
  </div>
<div className="dots">
  <h1></h1>
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>


 <div class="tile p-4">
  <img src='https://i.ibb.co/xzZLD9k/Captufre.png'/>
  <div class="text">
  <h1 class='text-white font-bold  text-2xl'>lawyer-client</h1>
  <h2 class="animate-text">
  A personalized dashboard for users, lawyers, and Admin.Users can see services, lawyer lists, book lawyers, see booking list, and Use chat options.
Admin can manage services and users .lawyers can manage their info.


  </h2>
 <div class='flex gap-10'>
  <Link to="https://lawyer-hiring-bcca9.web.app"><p  className="animate-text text-red-200"> Live link  </p></Link>
  <Link to="https://github.com/RezoanulHasan/lawyer-client"> <p  className="animate-text text-yellow-200 "> Git Client </p></Link>
  <Link to="https://github.com/RezoanulHasan/lawyer-server"> <p  className="animate-text text-green-200 "> Git Server </p></Link>
  </div>
<div class="dots">
  <h1></h1>
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>







 <div class="tile ">
  <img src='https://i.ibb.co/zH4pvGy/Captufre.png'/>
  <div class="text">
  <h1 class='text-red-800 font-bold  text-2xl'> Hero Toys</h1>
  <h2 class="animate-text">
 Responsive for mobile and desktop devices.Add toy and Booking toy function, search toy my name, and show price ascending and deciding.My Toys Page with an update and delete functionality, Sorting System on a page based on the price.  </h2>

<div class='flex gap-10'>
  <Link to="https://toys-shop-57e84.web.app/"><p  className="animate-text text-red-200"> Live link  </p></Link>
  <Link to="https://github.com/RezoanulHasan/hero-toys-client"> <p  className="animate-text text-yellow-200 "> Git Client </p></Link>
  <Link to="https://github.com/RezoanulHasan/hero-toys-server"> <p  className="animate-text text-green-200 "> Git Server </p></Link>
  </div>
<div class="dots">
  <h1></h1>
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>


      
 <div class="tile">
  <img src="https://i.ibb.co/gvQJtm0/Capffture.png"/>
  <div class="text">
  <h1 class=' text-yellow-300 font-bold  text-2xl'> Chef Recipe</h1>
  <h2 class="animate-text">
  Chef section with cards, pictures, name, years of experience, number of recipes, and likes.View Recipes button redirects to the Chef Recipes page and shows the 3 best recipes.Chose a favorite recipe option and use Environment variables for secure configuration.  </h2>

<div class='flex gap-10'>
  <Link to="https://working-firebase-64b24.web.app/"><p  className="animate-text text-red-200"> Live link  </p></Link>
  <Link to="https://github.com/RezoanulHasan/chef-repics-client"> <p  className="animate-text text-yellow-200 "> Git Client </p></Link>
  <Link to="https://github.com/RezoanulHasan/chef-repics-server"> <p  className="animate-text text-green-200 "> Git Server </p></Link>
  </div>
<div class="dots">
  <h1></h1>
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>
 
 
 
   <div class="tile">
  <img src="https://i.ibb.co/3phrN1N/Caepture.png"/>
  <div class="text"> 
  <h1 class=' text-blue-700 font-bold  text-2xl'> Interactive    </h1>
  <h2 class="animate-text">
  Front-End Project (geometry-calculation) </h2>
  
  <h2 class="animate-text  text-yellow-500 ">
Technological Uses: java-scprite,Html5,CSS(tailwind ).
  </h2>
<div class='flex gap-10 mt-10'>
  <Link to="https://heroic-piroshki-a52ea6.netlify.app/"><p  className="animate-text text-red-200"> Live link  </p></Link>
  <Link to="https://github.com/RezoanulHasan/geometry-calculation"> <p  className="animate-text text-yellow-200 "> Git  </p></Link>

  </div>
<div class="dots">
  <h1></h1>
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>
 
 

 <div class="tile">
 <img src="https://i.ibb.co/fQ2VfFJ/Captggure.png"/>
  <div class="text"> 
  
  <h1 class=' text-green-700 font-bold  text-2xl'>   Knowledge Cafe  </h1>
  <h2 class="animate-text">
  when clicking the bookmark icon button, The article saves localstores, showing the article name and writer name on the sidebar. 
when clicking Mark as read button reading time shows the sidebar. click again this button times is increasing again.
 </h2>

<div class='flex gap-10'>
  <Link to="https://jazzy-mousse-49c4ca.netlify.app/"><p  className="animate-text text-red-200"> Live link  </p></Link>
  <Link to="https://github.com/RezoanulHasan/Knowledge-Cafe/tree/main"> <p  className="animate-text text-yellow-200 "> Git  </p></Link>

  </div>
<div class="dots">
  <h1></h1>
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>




 
    <div class="tile">

  <img src="https://i.ibb.co/nQyFmJJ/Captggure.png"/>

  <div class="text"> 
  
  <h1 class=' text-white font-bold  text-2xl'>Weather-app   </h1>
  <h2 class="animate-text text-yellow-500   ">
  Search options by City name.
weather details.
Hourly Weather Forecast
temperature for the bar chart.
rain probability for doughnut chart.
wind speed for radar chart.
humidity for polar area chart.
pressure for line chart.
the feels like for bar chart.
 </h2>

<div class='flex gap-10'>
  <Link to="https://rezoanulhasan.github.io/weather-app/"><p  className="animate-text text-red-200"> Live link  </p></Link>
  <Link to="https://github.com/RezoanulHasan/weather-app"> <p  className="animate-text text-yellow-200 "> Git  </p></Link>

  </div>
<div class="dots">
  <h1></h1>
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>
 
 
 <div class="tile">
  <img src="https://i.ibb.co/ZmFV4yZ/Captgure.png"/>
  <div class="text"> 
  
  <h1 class=' text- font-bold text-blue-700  text-2xl'>ThrillTourism</h1>
  <h2 class="animate-text">
  Front-End Project  </h2>
  <h2 class="animate-text  text-yellow-500 ">
  Technological Uses:Html5,CSS(tailwindcss),js.
  </h2>


<div class='flex gap-10 mt-20'>
  <Link to="https://rezoanulhasan.github.io/thrilltourism-/"><p  className="animate-text text-red-200"> Live link  </p></Link>
  <Link to="https://github.com/RezoanulHasan/thrilltourism-"> <p  className="animate-text text-yellow-200 "> Git  </p></Link>

  </div>
<div class="dots">
  <h1></h1>
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>



 
  <div class="tile">
  <img src="https://i.ibb.co/hdkXQJj/Capaature.png"/>
  <div class="text">
  <h1 class=' text-blue-700 font-bold  text-2xl'> Justice</h1>
  <h2 class="animate-text">
  Front-End Project  </h2>
  <h2 class="animate-text  text-yellow-500 ">
Technological Uses:Html5,CSS(bootstrap ).
  </h2>
<div class='flex gap-10 mt-20'>
  <Link to="https://tranquil-cannoli-c2ce8b.netlify.app/"><p  className="animate-text text-red-200"> Live link  </p></Link>
  <Link to="https://github.com/RezoanulHasan/Justice"> <p  className="animate-text text-yellow-200 "> Git  </p></Link>

  </div>
<div class="dots">
  <h1></h1>
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>



</div>

</body>
</html>

@endsection
