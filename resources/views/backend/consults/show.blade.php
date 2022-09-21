@extends('layouts.new_app')
@section('new_content')
<div class="card" style="overflow:scroll">
    <div class="card-header">
        
    </div>
    <div class="card-block">
        <h4 class="card-header-text">    </h4>
        <div class="row">
            <div class="col-sm-12 table-responsive">
                <table class="table table-striped bordered   text-center">
                    <tr>
                    <th>Name  :  </th>
                    <td>{{$list->name}} </td>
                    </tr>
                    <tr>
                        <th>Gender  :  </th>
                        <td>{{$list->gender}} </td>
                        </tr>
                        <tr>
                            <th>Martial Status  :  </th>
                            <td>{{$list->m_status}} </td>
                            </tr>
                <tr>
                    <th>Age   :</th>
                    <td>{{$list->age}}</td>

                </tr>
                <tr>
                    <th>Height   :</th>
                    <td>{{$list->height}}</td>

                </tr>
                <tr>
                    <th>Weight   :</th>
                    <td>{{$list->weight}}</td>

                </tr>
                <tr>
                    <th>Phone   :</th>
                    <td>{{$list->phone}}</td>

                </tr>
                <tr>
                    <th>Email   :</th>
                    <td>{{$list->email}}</td>

                </tr>
                
                <tr>
                    <th>City   :</th>
                    <td>{{$list->city}}</td>

                </tr>
                <tr>
                    <th>Country   :</th>
                    <td>{{$list->country}}</td>

                </tr>
                <tr>
                    <th>Type of food that you eat   :</th>
                    <td><div class="col ">

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Veg" @if ($list->foodtype == "Veg")
                                  checked 
                                @endif >
                            <label class="form-check-label" for="inlineRadio1">Veg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Non Veg" @if ($list->foodtype == "Non Veg")
                                checked 
                              @endif >
                            <label class="form-check-label" for="inlineRadio1">Non Veg</label>
                        </div>

                    </div></td>

                </tr>
                <tr>
                    <th>How is your appetite?   :</th>
                    <td><div class="col ">

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Yes" @if ($list->appetite == "Yes")
                                checked 
                              @endif >
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="No" @if ($list->appetite == "No")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>

                    </div></td>

                </tr>
                <tr>
                    <th>How is your physique?   :</th>
                    <td><div class="col ">

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Yes" @if ($list->physique == "Yes")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="No"  @if ($list->physique == "No")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>

                    </div></td>

                </tr>
                <tr>
                    <th>Do you have constipation?   :</th>
                    <td> <div class="col ">

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Yes"  @if ($list->constipation == "Yes")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="No" @if ($list->constipation == "No")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>

                    </div></td>

                </tr>
                <tr>
                    <th>Do you have sleeplessness?   :</th>
                    <td><div class="col ">

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Yes" @if ($list->sleeplessness == "Yes")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="No" @if ($list->sleeplessness == "No")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>

                    </div></td>

                </tr>
                <tr>
                    <th>Do you have hypertension?   :</th>
                    <td><div class="col ">

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Yes" @if ($list->hypertension == "Yes")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="No" @if ($list->hypertension == "No")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>

                    </div></td>

                </tr>
                <tr>
                    <th>Do you have diabetic?   :</th>
                    <td><div class="col ">

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Yes" @if ($list->diabetic == "Yes")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="No"  @if ($list->diabetic == "No")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>

                    </div></td>

                </tr>
                <tr>
                    <th>Do you suffer from excessive urination?   :</th>
                    <td><div class="col ">

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Yes"  @if ($list->ex_urination == "Yes")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="No" @if ($list->ex_urination == "No")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>

                    </div></td>

                </tr>
                <tr>
                    <th>Do you have nocturnal emission?   :</th>
                    <td><div class="col ">

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Yes" @if ($list->noc_emission == "Yes")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="No" @if ($list->noc_emission == "No")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>

                    </div></td>

                </tr>
                <tr>
                    <th>Do you have premature ejaculation?   :</th>
                    <td><div class="col ">

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Yes" @if ($list->premature_ejaculation == "Yes")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="No" @if ($list->premature_ejaculation == "No")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>

                    </div></td>

                </tr>
                <tr>
                    <th>Do you have sexual weakness?  :</th>
                    <td><div class="col ">

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Yes" @if ($list->s_weakness == "Yes")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="No" @if ($list->s_weakness == "No")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>

                    </div></td>

                </tr>
                <tr>
                    <th>Have you ever suffered from venereal diseases?  :</th>
                    <td><div class="col ">

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Yes" @if ($list->v_diseases == "Yes")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="No" @if ($list->v_diseases == "No")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>

                    </div></td>

                </tr>
                <tr>
                    <th>Are you addicted to any other intoxicant?   :</th>
                    <td><div class="col ">

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="Yes" @if ($list->intoxicant == "Yes")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender"
                                id="inlineRadio1" value="No"  @if ($list->intoxicant == "No")
                                checked 
                              @endif>
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>

                    </div></td>

                </tr>
                <tr>
                    <th>Message :</th>
                    <td>{{$list->message}}</td>
                </tr>

                </table>
            </div>
        </div>
    </div>
</div>



@endsection