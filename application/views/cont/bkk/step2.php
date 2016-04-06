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
  <body style="background-color: #ecf0f1">
    <div class="ui grid fluid computer large monitor desktop tablet only padded divided middle aligned center aligned grid" style="min-height: 100%;margin-bottom: 1%;margin-top: 1%;">
      <div class="eleven wide column">
        <div class="ui attached segment">
          <div class="ui form">
            <div class="inline fields">
              <div class="four wide field">
                <img src="{base_url}public/image/image.png" alt="" class="ui image">
              </div>
              <div class="ten wide field">
                <label>
                  <a class="ui button"><i class="photo icon"></i>Ganti Foto Profile</a>
                  <input type="file" name="" style="display: none;">
                </label>
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label>No. Identitas</label>
              </div>
              <div class="ten wide field">
                <input type="text" name="" placeholder="No. Identias (KTP/SIM/PASSPOR)">
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label>Ket. Identitas</label>
              </div>
              <div class="ten wide field">
                <select class="ui dropdown fluid">
                  <option value="">-- Keterangan Identitas --</option>
                  <option value="0">KTP</option>
                  <option value="1">SIM</option>
                  <option value="2">PASSPOR</option>
                </select>
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label for="jkel">Jenis Kelamin</label>
              </div>
              <div class="field">
                <div class="ui radio checkbox">
                  <input class="hidden" tabindex="0" name="jkel" checked="" type="radio">
                  <label>Laki - laki</label>
                </div>
              </div>
              <div class="field">
                <div class="ui radio checkbox">
                  <input class="hidden" tabindex="0" name="jkel" type="radio">
                  <label>Perempuan</label>
                </div>
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label>Agama</label>
              </div>
              <div class="ten wide field">
                <select class="ui dropdown fluid">
                  <option value="">-- Agama --</option>
                  <option value="0">Islam</option>
                  <option value="1">Kristen</option>
                  <option value="2">Protestan</option>
                  <option value="2">Budha</option>
                  <option value="2">Hindu</option>
                  <option value="2">Konghucu</option>
                </select>
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label>Tempat, Tanggal Lahir</label>
              </div>
              <div class="four wide field">
                <input type="text" name="" placeholder="Tempat lahir">
              </div>
              <div class="one wide field">
                <label>&nbsp;,</label>
              </div>
              <div class="five wide field">
                <input type="date" name="" placeholder="Tanggal Lahir">
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label>Provinsi</label>
              </div>
              <div class="ten wide field">
                <select class="ui dropdown fluid">
                  <option value="">-- Pilih Provinsi --</option>
                  <option value="0">Aceh</option>
                  <option value="1">Sumatra Utara</option>
                  <option value="2">Sumatra Barat</option>
                  <option value="2">Sumatra Selatan</option>
                  <option value="2">Riau</option>
                  <option value="2">Kep. Riau</option>
                </select>
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label>Kabupaten / Kota</label>
              </div>
              <div class="ten wide field">
                <select class="ui dropdown fluid">
                  <option value="">-- Pilih Kabupaten / Kota --</option>
                  <option value="0">Aceh</option>
                  <option value="1">Medan</option>
                  <option value="2">Padang</option>
                  <option value="2">Palembang</option>
                  <option value="2">Ujung Pandang</option>
                  <option value="2">Riau</option>
                </select>
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label>Kecamatan</label>
              </div>
              <div class="ten wide field">
                <select class="ui dropdown fluid">
                  <option value="">-- Pilih Kecamatan --</option>
                  <option value="0">Aceh</option>
                  <option value="1">Medan</option>
                  <option value="2">Padang</option>
                  <option value="2">Palembang</option>
                  <option value="2">Ujung Pandang</option>
                  <option value="2">Riau</option>
                </select>
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label>Keluruhan</label>
              </div>
              <div class="ten wide field">
                <select class="ui dropdown fluid">
                  <option value="">-- Pilih Kelurahan --</option>
                  <option value="0">Aceh</option>
                  <option value="1">Medan</option>
                  <option value="2">Padang</option>
                  <option value="2">Palembang</option>
                  <option value="2">Ujung Pandang</option>
                  <option value="2">Riau</option>
                </select>
              </div>
            </div>
            <div class="inline fields">
              <div class="four wide field">
                <label for="">Alamat</label>
              </div>
              <div class="ten wide field">
                <textarea rows="2"></textarea>
              </div>
            </div>
          </div>
          <a href="#" class="ui teal button"><i class="left arrow icon"></i>Sebelumnya</a>
          <a href="#" class="ui teal button">Selanjutnya<i class="right arrow icon"></i></a>
        </div>
        <div class="ui bottom attached stacked segment">
          <div class="ui steps">
            <div class="step">
              <i class="student icon"></i>
              <div class="content">
                <div class="title">Data Tamatan</div>
                <!-- <div class="description">Lengkapi data diri anda</div> -->
              </div>
            </div>
            <div class="active step">
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