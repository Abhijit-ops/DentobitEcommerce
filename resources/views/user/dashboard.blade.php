@extends('layouts.main')

@section('css')
    <style>
        .table thead>tr>td {
            border-bottom: none !important;
        }
    </style>
    @endsection
@section('contents')
    <section id="contact-section" class="contact-section sec-ptb-60 clearfix">


        <div class="dashboard">
            <div class="container">
              <div class="row">
                  <div class="col-md-3 col-sm-12">
                      <ul class="list-group">
                          <li class="list-group-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                          <li class="list-group-item"><a href="{{route('user.orders')}}">Orders</a></li>
                          <li class="list-group-item"><a href="{{route('user.updateProfileForm')}}">Update Profile</a></li>
                          <li class="list-group-item"><a href="#">Logout</a></li>

                      </ul>
                  </div>
                  <div class="col-md-9 col-sm-12">
                      <ul class="list-group">

                          <li class="list-group-item" >
                             <p class="text-right active"> <a href="{{route('user.updateProfileForm')}}" class="color-green">Edit</a></p>
                              <table class="table mb-30">
                                  <tbody>
                                      <tr>
                                          <th>Name</th>
                                          <td class="text-left">
                                              <span>{{Auth::user()->name}}</span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th>UserName</th>
                                          <td class="text-left" colspan="2">
                                              <span>{{Auth::user()->username}}</span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th>Email</th>
                                          <td class="text-left" colspan="2">
                                              <span>{{Auth::user()->email}}</span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th>Phone</th>
                                          <td class="text-left" colspan="2">
                                              <span>{{Auth::user()->phone}}</span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th>Post Code</th>
                                          <td class="text-left" colspan="2">
                                              <span>{{Auth::user()->post_code}}</span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th>Address</th>
                                          <td class="text-left" colspan="2">
                                              <span>{{Auth::user()->billing_address}}</span>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </li>
                      </ul>
                  </div>
              </div>
            </div>
        </div>

    </section>

    @endsection