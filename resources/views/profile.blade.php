@extends('layouts.main_template')

@section('content')
        <!-- Begin .page-heading -->
        <div class="page-heading">
            <div class="media clearfix">
              <div class="media-left pr30">
                <a href="#">
                  <img class="media-object mw150" src="assets/img/avatars/profile_avatar.jpg" alt="...">
                </a>
              </div>                      
              <div class="media-body va-m">
                <h2 class="media-heading">
                	{{ Auth::user()->name }}
                </h2>
                <p class="lead">Lorem ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt</p>
                <div class="media-links">
                  <ul class="list-inline list-unstyled">
                    <li>
                      <a href="#" title="facebook link">
                        <span class="fa fa-facebook-square fs35 text-primary"></span>
                      </a>
                    </li>
                    <li>
                      <a href="#" title="twitter link">
                        <span class="fa fa-twitter-square fs35 text-info"></span>
                      </a>
                    </li>
                    <li>
                      <a href="#" title="google plus link">
                        <span class="fa fa-google-plus-square fs35 text-danger"></span>
                      </a>
                    </li>
                    <li class="hidden">
                      <a href="#" title="behance link">
                        <span class="fa fa-behance-square fs35 text-primary"></span>
                      </a>
                    </li>
                    <li class="hidden">
                      <a href="#" title="pinterest link">
                        <span class="fa fa-pinterest-square fs35 text-danger-light"></span>
                      </a>
                    </li>
                    <li class="hidden">
                      <a href="#" title="linkedin link">
                        <span class="fa fa-linkedin-square fs35 text-info"></span>
                      </a>
                    </li>
                    <li class="hidden">
                      <a href="#" title="github link">
                        <span class="fa fa-github-square fs35 text-dark"></span>
                      </a>
                    </li>
                    <li class="">
                      <a href="#" title="phone link">
                        <span class="fa fa-phone-square fs35 text-system"></span>
                      </a>
                    </li>
                    <li>
                      <a href="#" title="email link">
                        <span class="fa fa-envelope-square fs35 text-muted"></span>
                      </a>
                    </li>
                    <li class="hidden">
                      <a href="#" title="external link">
                        <span class="fa fa-external-link-square fs35 text-muted"></span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
@endsection