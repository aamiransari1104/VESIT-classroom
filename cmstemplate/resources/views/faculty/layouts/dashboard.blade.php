@extends('layouts.plane')
@section('body')

@include('faculty.layouts.cms_roles')

 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('/staff/home') }}">
                    <img src="{{ URL::to('images/cms-brand.png') }}" alt="brand logo">
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <!-- To be added later when notifications are enabled -->
                {{-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                     <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                               <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li> --}}

                <!-- /.dropdown -->
                

                <!-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-adjust fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="/theme/red">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Red
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/theme/blue">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Blue
                                </div>
                            </a>
                        </li>
                    </ul>
                </li> -->


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a><big><i class="fa fa-user fa-fw"></i> {{session('first_name')}} {{session('last_name')}}</big></a>
                            <a>&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i><small> EID - {{session('e_id')}}</small></a>
                            <a>&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i><small> {{session('email')}}</small></a>
                        </li> 
                        <li data-toggle="modal" data-target="#myModal">
                            <a><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                            
                                <input type="text" class="form-control" placeholder="Search Student.." name="q" id="q">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="Search">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li {{ (Request::is('/staff/home') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/staff/home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li >
                            <a href="#"><i class="fa  fa-user fa-fw "></i> Personal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('/staff/attendance/faculty') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('/staff/attendance/faculty' ) }}"><i class="fa fa-pencil-square-o"></i> My Attendance</a>
                                </li>
                            </ul>
                            
                        </li>
                        
                        <li >
                            <a href="#"><i class="fa  fa-user fa-fw "></i><Placeholder>XYZ</Placeholder></span></a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Logout Confirmation</h4>
                </div>
                <div class="modal-body">
                    <a
                        class="btn btn-primary"
                        onclick='document.location.href = "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://cms.com/logout";'>
                        <i class="fa fa-sign-out fa-fw"></i>
                        Logout from Google and CMS
                    </a>
                    <a
                        class="btn btn-primary"
                        href="/logout">
                        <i class="fa fa-sign-out fa-fw"></i>
                        Logout from CMS
                    </a>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
             
            </div>
        </div>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                   
                    <div id="page-heading"></div>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">
                   
				@yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop