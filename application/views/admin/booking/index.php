<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="content-wrapper">
    <section class="content-header">
        <?php echo $pagetitle; ?>
        <?php echo $breadcrumb; ?>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-4" >
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">New Costumer</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="<?= site_url('admin/booking/book_costumer'); ?>" method='post'>
                        <div class="box-body">

                            <!-- radio -->
                            <div class="col-md-4" >
                                <h5>Services</h5>

                                <div class="form-group">
                                    <label>
                                        <input type="radio" name="service" value="housing" class="minimal" checked/> Housing
                                    </label>
                                    <label>
                                        <input type="radio" name="service" value="benefits" class="minimal"/> Benefits
                                    </label>
                                    <label>
                                        <input type="radio" name="service" value="council" class="minimal"/> Council Tax
                                    </label>
                                    <label>
                                        <input type="radio" name="service" value="flytipping" class="minimal"/> Fly-tipping
                                    </label>
                                    <label>
                                        <input type="radio" name="service" value="bin" class="minimal"/> Missed Bin
                                    </label>
                                </div>



                            </div>
                            <div class="btn-group"  id="test" data-toggle="buttons">
                                <label class="btn btn-primary">
                                    <input type="radio" name="type" value="citizen"  class="option1" autocomplete="off" checked > Citizen
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="type" value="organisation" class="option2" autocomplete="off"> Organisation
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="type" value="anonymous" class="option3" autocomplete="off"> Anonymous
                                </label>
                            </div>
                            <div  id="citizen" class="col-md-12" >
                                <br />
                                <!-- select -->
                                <div class="form-group">
                                    <label>Title</label>
                                    <select  name="title" class="form-control">
                                        <option value=""> Select Title</option>
                                        <option value="Mr."> Mr.</option>
                                        <option value="Mrs."> Mrs.</option>
                                        <option value="Miss"> Miss</option>
                                        <option value="Ms."> Ms.</option>
                                        <option value="Dr."> Dr.</option>
                                    </select>
                                </div>

                                <!-- text input -->
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="fname" placeholder="Enter First Name..."/>
                                </div>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name..."/>
                                </div>
                            </div>
                            <div id="organisation" class="col-md-12" style="display: none;" >
                                <!-- text input -->
                                <br />

                                <div class="form-group">
                                    <label>Organisation Name</label>
                                    <input type="text" class="form-control" name="oname" placeholder="Enter Name..."/>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div><!-- /.box-body -->

                </div>
            </form>

            </div><!-- /.box -->
            
        </div>
                        <div class="col-md-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Queue</h3>
                  <div class="box-tools">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Type</th>
                      <th>Name</th>
                      <th>Service</th>
                      <th>Queued at</th>
                    </tr>
                    <?php foreach($que as $info){?>

                    <tr>
                      <td><?php echo $info->id;?></td>
                      <td><?php echo ucfirst($info->type);?></td>
                      <td><?php echo "{$info->title} {$info->fname} {$info->lname}";?></td>
                      <td><?php echo ucfirst($info->service);?></td>
                      <td><?php echo $info->time;?></td>
                    </tr>
                  
                         <?php }?>  

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              
            </div><!-- /.col -->

    </section>
</div>
