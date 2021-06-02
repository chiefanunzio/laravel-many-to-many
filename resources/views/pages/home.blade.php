@extends('layouts.main-layout')
@section('content')
       
<body>
       
    <h2>Employee generator</h2>      
        
        <ul>
            @foreach ($employees as $employee)      
            <li>
                  <p>firstname = {{$employee -> firstname}} ==>   
                    lastname = {{$employee -> lastname}} <br>    
                    state = {{$employee -> location -> state }} ==>     
                    street =  {{$employee -> location -> street }} ==>
                     tasks n = {{$employee -> tasks -> count()   }}
                    </p> 

                    <ol>
                        @foreach ($employee -> tasks as $task)      
                                 
                            <li>      
                                <p>task = {{$task -> name}}</p>
                            </li>
                        @endforeach   
                    </ol>    
   
            </li>            
            @endforeach                    
        </ul>                                  
</body>                           