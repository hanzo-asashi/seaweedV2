<h1 class="margin-bottom">Settings</h1>
<ol class="breadcrumb 2">
  <li>
    <a href="<?= $this->baseUrl; ?>"><i class="entypo-home"></i>Home</a>
  </li>
  <li class="active">
    <strong>
      <?= 'Settings'; ?>
    </strong>
  </li>
</ol>

<br />

<form role="form" method="post" class="form-horizontal form-groups-bordered validate" action="">

  <div class="row">
    <div class="col-md-12">

      <div class="panel panel-primary" data-collapsed="0">

        <div class="panel-heading">
          <div class="panel-title">
            Account Setting
          </div>

          <div class="panel-options">
            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
            <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
          </div>
        </div>

        <div class="panel-body">

          <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label">Site title</label>

            <div class="col-sm-5">
              <input type="text" class="form-control" id="field-1" value="Neon">
            </div>
          </div>

          <div class="form-group">
            <label for="field-2" class="col-sm-3 control-label">Tagline</label>

            <div class="col-sm-5">
              <input type="text" class="form-control" id="field-2" value="Bootstrap Admin Theme">
              <span class="description">Few words that will describe your site.</span>
            </div>
          </div>

          <div class="form-group">
            <label for="field-3" class="col-sm-3 control-label">Site URL</label>

            <div class="col-sm-5">
              <input type="text" class="form-control" name="site-url" id="field-3" data-validate="required,url" value="http://exampledomain.com/neon">
            </div>
          </div>

          <div class="form-group">
            <label for="field-4" class="col-sm-3 control-label">Email address</label>

            <div class="col-sm-5">
              <input type="text" class="form-control" name="email" id="field-4" data-validate="required,email" value="john@doe.com">
              <span class="description">Here you will receive site notifications.</span>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>



  <div class="row">
    <div class="col-md-6">

      <div class="panel panel-primary" data-collapsed="0">

        <div class="panel-heading">
          <div class="panel-title">
            Members
          </div>

          <div class="panel-options">
            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
            <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
          </div>
        </div>

        <div class="panel-body">


          <div class="form-group">
            <label class="col-sm-5 control-label">Anyone can register</label>

            <div class="col-sm-5">

              <div class="checkbox checkbox-replace">
                <input type="checkbox" id="chk-1" checked>
              </div>

            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-5 control-label">Default user role</label>

            <div class="col-sm-5">

              <select class="form-control">
                <option>Subscriber</option>
                <option>Author</option>
                <option>Editor</option>
                <option>Administrator</option>
              </select>

            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-5 control-label">New users</label>

            <div class="col-sm-5">

              <select class="form-control">
                <option>Will have to activate their account (via email)</option>
                <option>Account is automatically activated</option>
              </select>

            </div>
          </div>

          <div class="form-group">
            <label for="field-5" class="col-sm-5 control-label">Maximum login attempts</label>

            <div class="col-sm-5">

              <input type="text" name="max_attempts" id="field-5" class="form-control" data-validate="required,number" value="5" />

            </div>
          </div>

        </div>

      </div>

    </div>


    <div class="col-md-6">

      <div class="panel panel-primary" data-collapsed="0">

        <div class="panel-heading">
          <div class="panel-title">
            Date and Time
          </div>

          <div class="panel-options">
            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
            <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
          </div>
        </div>

        <div class="panel-body">

          <div class="form-group">
            <label for="field-3" class="col-sm-5 control-label">Date format</label>

            <div class="col-sm-5">

              <div class="radio radio-replace">
                <input type="radio" id="rd-1" name="radio1" checked>
                <label>March 27, 2014</label>
              </div>

              <div class="radio radio-replace">
                <input type="radio" id="rd-2" name="radio1">
                <label>03/27/2014</label>
              </div>

              <div class="radio radio-replace">
                <input type="radio" id="rd-3" name="radio1">
                <label>2014/03/27</label>
              </div>

              <div class="radio radio-replace">
                <input type="radio" id="rd-4" name="radio1">
                <label>
                  Custom format:
                  <input type="text" class="form-control input-sm form-inline" value="d-m-Y" style="width: 70px; display: inline-block;" />
                  <p class="description">Read more about <a href="http://php.net/date" target="_blank">date format</a></p>
                </label>
              </div>

            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="form-group default-padding">
    <button type="submit" class="btn btn-success">Save Changes</button>
    <button type="reset" class="btn">Reset Previous</button>
  </div>
</form>