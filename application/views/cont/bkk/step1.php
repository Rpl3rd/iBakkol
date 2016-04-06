<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>iBakkol</title>
    <link rel="stylesheet" type="text/css" href="{base_url}public/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="{base_url}public/css/home.css">
    <script src="{base_url}public/plugin/jquery.min.js"></script>
    <script src="{base_url}public/semantic.min.js"></script>
  </head>
  <body>
    <div class="ui middle aligned center aligned grid" style="min-height: 100%">
      <div class="eleven wide column">
        <div class="ui attached segment">
          <div class="ui form">
            <div class="inline fields">
              <div class="four wide field">
                <label>Nama Sekolah</label>
              </div>
              <div class="ten wide disabled field">
                <input type="text" name="" value="SMK Taruna Bhakti">
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label>Nama Lengkap</label>
              </div>
              <div class="five wide field">
                <input type="text" name="" value="" placeholder="Nama Depan">
              </div>
              <div class="five wide field">
                <input type="text" name="" value="" placeholder="Nama Belakang">
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label>Kompetensi Keahlian</label>
              </div>
              <div class="ten wide field">
                <select class="ui dropdown fluid">
                  <option value="">-- Kompetensi Keahlian --</option>
                  <option value="0">Rekayasa Perangkat Lunak</option>
                  <option value="1">Teknik Komputer Jaringan</option>
                  <option value="2">Multimedia</option>
                </select>
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label>Status Tamatan</label>
              </div>
              <div class="ten wide field">
                <select class="ui dropdown fluid">
                  <option value="">-- Status Tamatan --</option>
                  <option value="0">Pencaker</option>
                  <option value="1">Melanjutkan Sekolah</option>
                  <option value="2">Bekerja</option>
                  <option value="2">Menunggu</option>
                  <option value="2">Bekerja Non Formal</option>
                </select>
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label>No. Ijazah</label>
              </div>
              <div class="ten wide field">
              <input type="text" name="" placeholder="No. Ijazah">
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label>Tahun Lulus</label>
              </div>
              <div class="ten wide field">
              <input type="text" name="" placeholder="Tahun Lulus">
              </div>
            </div>
          </div>
          <a href="{base_url}home/tamatan_step2" class="ui teal button">Selanjutnya</a>
        </div>
        <div class="ui bottom attached stacked segment">
          <div class="ui steps">
            <div class="active step">
              <i class="student icon"></i>
              <div class="content">
                <div class="title">Data Tamatan</div>
                <!-- <div class="description">Lengkapi data diri anda</div> -->
              </div>
            </div>
            <div class="disabled step">
              <i class="user icon"></i>
              <div class="content">
                <div class="title">Biodata</div>
                <!-- <div class="description">Enter billing information</div> -->
              </div>
            </div>
            <div class="disabled step">
              <i class="checkmark icon"></i>
              <div class="content">
                <div class="title">Selesai</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ui inverted vertical footer segment">
        <div class="ui container">
          <div class="ui stackable inverted divided equal height stackable grid">
            <div class="three wide column">
              <h4 class="ui inverted header">About</h4>
              <div class="ui inverted link list">
                <a href="#" class="item">Sitemap</a>
                <a href="#" class="item">Contact Us</a>
                <a href="#" class="item">Religious Ceremonies</a>
                <a href="#" class="item">Gazebo Plans</a>
              </div>
            </div>
            <div class="three wide column">
              <h4 class="ui inverted header">Services</h4>
              <div class="ui inverted link list">
                <a href="#" class="item">Banana Pre-Order</a>
                <a href="#" class="item">DNA FAQ</a>
                <a href="#" class="item">How To Access</a>
                <a href="#" class="item">Favorite X-Men</a>
              </div>
            </div>
            <div class="seven wide column">
              <h4 class="ui inverted header">Footer Header</h4>
              <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
            </div>
          </div>
        </div>
      </div>
    <script type="text/javascript" src="{base_url}public/js/main.js"></script>
  </body>
</html>