@extends('layouts.app')
@section('content')
<div id="accordion" >
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Some details about me.
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
             My name is Antonij Djajkoski. I was born in Ohrid, but I currently live in Skopje. I'm currently attending the Faculty for Electrical Engineering and Information Technologies. Currently working as a web developer intern at Artisoft.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Skills
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <h1>Some of my skills include:</h1> 
              <p>HTML, CSS, Bootstrap, JavaScript, jQuery, React.js, PHP Laravel</p>
                <p> C#, MySQL, Eloquent ORM </p>
                <p>GitHub, Jenkins, Mercurial</p>
                <p>Knowledge of MVC design patterns</p>
                <p>RESTful services and JSON files and requests </p>
                <p>Languages: Macedonian, English, German </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Experience
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              <h2>SAASPASS Skopje </h2>
                <p>Internship. January 2017 - March 2017. Manual QA engineer, Java intern.</p>
                <h2>Artisoft Skopje </h2>
                <p>Internship. February 2019 - ongoing. Full stack web developer intern (PHP Laravel, Bootstrap, React, MySQL)</p>
             </div>
          </div>
        </div>
      </div>
@endsection