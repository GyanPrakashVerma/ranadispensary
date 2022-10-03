
      @include('backend.include.header')

@php
//  $blog = \App\Models\Blog::where('delete_status',0)->count();   
 $service = \App\Models\Service::where('delete_status',0)->count();   
 $consult = \App\Models\Consult::where('delete_status',0)->count();   
 $faq = \App\Models\Faq::where('delete_status',0)->count();   
 $enquiry = \App\Models\Enquiry::where('delete_status',0)->count();   
 $app = \App\Models\Appointment::where('delete_status',0)->orderBy('id','desc')->paginate(10);   
@endphp
   <div class="wrapper">
     
      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>Dashboard</h4>
               </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="row dashboard-header">
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Services</span>
                     <h2 class="dashboard-total-products">{{$service}}</h2>
                     <span class="label label-warning">Service</span>
                     <div class="side-box">
                        <i class="fa-solid text-warning-color fa-blog"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Consults</span>
                     <h2 class="dashboard-total-products">{{$consult}}</h2>
                     <span class="label label-primary">Consults</span>Today consult
                     <div class="side-box ">
                        <i class="fa-solid fa-stethoscope"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Faq</span>
                     <h2 class="dashboard-total-products">{{$faq}}</h2>
                     <span class="label label-success">FAQ</span>views faqs
                     <div class="side-box">
                        <i class="fa-solid text-success-color fa-camera"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Enquiry</span>
                     <h2 class="dashboard-total-products">{{$enquiry}}</h2>
                     <span class="label label-danger">Enquiry</span>Reviews people
                     <div class="side-box">
                        <i class="fa-solid text-danger-color fa-calendar-check"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="card" >
               <div class="main-header">
                  <h6>Appointments</h6>
               </div>
               <div class="card-block">
                  <div class="row">
                      <div class="col-sm-6 table-responsive">
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Name</th>
                                      <th>Age</th>
                                      <th>Mobile</th>
                                      <th>Email</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @php
                                      $i = 1;
                                  @endphp
                                  @foreach ($app as $apps)
                                      <tr class="justify-content-center text-align-center align-items">
                                          <td>{{ $i++ }}</td>
                                          <td>{{ $apps->name }}</td>
                                          <td>{{ $apps->age }}</td>
                                          <td>{{ $apps->mobile }}</td>
                                          <td>{{ $apps->email }}</td>
                                    
                                          {{-- <td>
                                              <form action="{{ route('gallery.destroy', $apps->id) }}" method="POST">
                                                  @csrf
                                                  @method('Delete')
                                                  <a href="{{ route('gallery.edit', $apps->id) }}" class="btn btn-success"><i
                                                          class="fa-solid fa-pen-to-square"></i></a>
      
                                                  <button type="submit" class="btn btn-dark"><i
                                                          class="fa-solid fa-trash-can"></i></button>
                                              </form>
      
                                          </td> --}}
                                      </tr>
                                  @endforeach
                              </tbody>
                              
                          </table>
                         {{$app->render()}}
                      </div>
                  </div>
              </div>
            </div>

            
            
            
               
               @include('backend.include.footer')