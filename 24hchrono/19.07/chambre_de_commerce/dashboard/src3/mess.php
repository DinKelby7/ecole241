<?php  
// header+navbar
include "partials/_header.php";
  include "partials/_aside.php";
?>

<div class="content-wrapper" style="min-height: 1750.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Messagerie
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Messagerie</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-12">
          <a href="comp.html" class="btn btn-success btn-block btn-shadow margin-bottom p-15">Nouveau message</a>

          <div class="box">
            <div class="box-body no-padding mailbox-nav">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0)"><i class="fa fa-envelope"></i> non-lus
                  <span class="label label-success pull-right">12</span></a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fa fa-paper-plane"></i> Envoyes</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fa fa-envelope-open"></i> lus</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fa fa-close"></i>  Supprimes <span class="label label-warning pull-right">14</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fa fa-trash"></i> corbeille</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-lg-9 col-12">
          <div class="box box-solid bg-black">
            <div class="box-header with-border">
              <h3 class="box-title">Boite de reception</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Rechercher un message">
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-check"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <div class="btn-group">
          <div class="btn-group">
          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-flag margin-r-5"></i>
            <span class="caret"></span>
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
          </div>
          <div class="btn-group">
          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-folder margin-r-5"></i>
            <span class="caret"></span>
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
          </div>
        </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
              <div class="mailbox-messages">
        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <tbody>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
            <td class="mailbox-name">MONDO Ali</td>
            <td class="mailbox-subject"><a href="read.php"><b>Merci</b> - Je tiens personnellement a vous ...</a>
            </td>
            <td class="mailbox-attachment"></td>
            <td class="mailbox-date">3 mins ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
            <td class="mailbox-name">Genelia OBIANG</td>
            <td class="mailbox-subject"><a href="read.html"><b>Appel</b> - Bsr Mr Obame j'ai tente plusieurs fois...</a>
            </td>
            <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
            <td class="mailbox-date">14 mins ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
            <td class="mailbox-name">Don Roy</td>
            <td class="mailbox-subject"><a href="read.html"><b>Averda</b> - Bjr n'oubliez pas de nous recontacter...</a>
            </td>
            <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
            <td class="mailbox-date">15 hours ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
            <td class="mailbox-name">Akshay Kumar</td>
            <td class="mailbox-subject"><a href="read.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
            </td>
            <td class="mailbox-attachment"></td>
            <td class="mailbox-date">25 hours ago</td>
            </tr>
           <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
            <td class="mailbox-name">Salman Dada</td>
            <td class="mailbox-subject"><a href="read.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
            </td>
            <td class="mailbox-attachment"></td>
            <td class="mailbox-date">3 mins ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
            <td class="mailbox-name">Rucha Gandhi</td>
            <td class="mailbox-subject"><a href="read.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
            </td>
            <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
            <td class="mailbox-date">14 mins ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
            <td class="mailbox-name">Patil Bhw</td>
            <td class="mailbox-subject"><a href="read.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
            </td>
            <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
            <td class="mailbox-date">15 hours ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
            <td class="mailbox-name">Tapan Jio</td>
            <td class="mailbox-subject"><a href="read.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
            </td>
            <td class="mailbox-attachment"></td>
            <td class="mailbox-date">25 hours ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
            <td class="mailbox-name">Milin Khan</td>
            <td class="mailbox-subject"><a href="read.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
            </td>
            <td class="mailbox-attachment"></td>
            <td class="mailbox-date">3 mins ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
            <td class="mailbox-name">Kajal SEO</td>
            <td class="mailbox-subject"><a href="read.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
            </td>
            <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
            <td class="mailbox-date">14 mins ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
            <td class="mailbox-name">Ruchit Khhana</td>
            <td class="mailbox-subject"><a href="read.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
            </td>
            <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
            <td class="mailbox-date">15 hours ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
            <td class="mailbox-name">Manoj Kumar</td>
            <td class="mailbox-subject"><a href="read.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
            </td>
            <td class="mailbox-attachment"></td>
            <td class="mailbox-date">25 hours ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
            <td class="mailbox-name">Akshar Gandhi</td>
            <td class="mailbox-subject"><a href="read.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
            </td>
            <td class="mailbox-attachment"></td>
            <td class="mailbox-date">3 mins ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
            <td class="mailbox-name">vipul Patel</td>
            <td class="mailbox-subject"><a href="read.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
            </td>
            <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
            <td class="mailbox-date">14 mins ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
            <td class="mailbox-name">Amitabh Boss</td>
            <td class="mailbox-subject"><a href="read.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
            </td>
            <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
            <td class="mailbox-date">15 hours ago</td>
            </tr>
            <tr>
            <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
            <td class="mailbox-name">Rajni Ana</td>
            <td class="mailbox-subject"><a href="read.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
            </td>
            <td class="mailbox-attachment"></td>
            <td class="mailbox-date">25 hours ago</td>
            </tr>
            </tbody>
          </table>
                <!-- /.table -->
        </div>
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-trash-a"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <div class="btn-group">
                  <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <i class="ion ion-flag margin-r-5"></i>
                    <span class="caret"></span>
                  </button>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                  </div>
                  <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <i class="ion ion-folder margin-r-5"></i>
                    <span class="caret"></span>
                  </button>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                  </div>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
<?php  include "partials/_footer.php";?>
