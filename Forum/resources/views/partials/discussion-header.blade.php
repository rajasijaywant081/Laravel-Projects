<div class="card-header">
                
                <div class="d-flex justify-content-between">
         
                   <div>
                        
                         <span><strong>{{$discussion->author->name}}</strong></span>
                </div>
          
                <div>
                           <a href="{{ route('discussions.show', $discussion->slug)}}" class="btn btn-success btn-sm">View</a>
                           <a href="{{ url('discussions')}}" class="btn btn-success btn-sm">Home</a>
               </div>
           </div>
           </div>