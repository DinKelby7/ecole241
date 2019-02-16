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
        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item">messagerie</li>
        <li class="breadcrumb-item active">message</li>
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

              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border clearfix">                
                <div class="left-float">
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                  <i class="fa fa-print"></i></button>
                </div>
                <div class="right-float">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Supprimer">
                    <i class="fa fa-trash"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                    <i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                    <i class="fa fa-share"></i></button>
                </div>
                </div>
                <!-- /.btn-group -->
                
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p>Bonjour Mr Obame,</p>

                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>

                <p>enean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar.</p>

                <p>Je vous remerci,<br>Jane</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <h5><i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments <span>(3)</span></h5>
              <ul class="mailbox-attachments clearfix">
                <li>
                  <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Mag.pdf</a>
                        <span class="mailbox-attachment-size">
                          5,215 KB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
                <li>
                  <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Documents.docx</a>
                        <span class="mailbox-attachment-size">
                          2,145 KB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-success"><i class="fa fa-reply"></i> Repondre</button>
                <button type="button" class="btn btn-info"><i class="fa fa-share"></i> Suivant</button>
              </div>
              <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Supprimer</button>
              <button type="button" class="btn btn-warning"><i class="fa fa-print"></i> Imprimer</button>
            </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-check"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
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
  
  <?php include "partials/_footer.php";?>
