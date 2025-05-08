<!DOCTYPE html>
<html lang="th">

<head>

  <?php include('./inc/inc-meta.php'); ?>

</head>

<body>

  <!-- begin header -->
  <?php include('./inc/inc-header.php'); ?>
  <!-- end header -->

  <!-- begin #content -->
  <div id="content" class="content">

    <section class="box-list py-5">
      <div class="container" style="max-width: 1900px;">
        <div class="row">
          <div class="col-12">
            <h1 class="text-uppercase font-weight-light" data-aos="fade">Museum Map</h1>
          </div>
          <div class="col-md">
            <ul class="--tab" data-aos="fade">
              <li class="active">
                <a href="#">ทั้งหมด</a>
              </li>
              <li>
                <a href="#">เจริญกรุง - ตลาดน้อย</a>
              </li>
              <li>
                <a href="#">พระนคร</a>
              </li>
              <li>
                <a href="#">ปากคลองตลาด</a>
              </li>
              <li>
                <a href="#">เยาวราช</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row box-iframe-map">
          <div class="--iframe-map col-lg-6 pr-lg-0">
            <div class="--map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10786.847311849602!2d100.46328934595672!3d13.777823136008914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29991fdf760c9%3A0x1633d9b3074c0486!2z4Liq4Lin4LiZ4LmA4LiJ4Lil4Li04Lih4Lie4Lij4Liw4LmA4LiB4Li14Lii4Lij4LiV4Li0IDgwIOC4nuC4o-C4o-C4qeC4siDguJ7guKPguLDguJrguLLguJfguKrguKHguYDguJTguYfguIjguJ7guKPguLDguYDguIjguYnguLLguK3guKLguLnguYjguKvguLHguKc!5e0!3m2!1sth!2sth!4v1746524862558!5m2!1sth!2sth"></iframe>
              <div class="box-popup active">
                <span class="btn-close material-icons" onclick="$(this).closest('.box-popup').removeClass('active')">close</span>
                <img src="https://placehold.co/500x400" alt="Card image cap">
                <div class="p-2 w-100">
                  <h5 class="card-title text-line1">มิวเซียมสยาม</h5>
                  <p class="m-0 text-muted text-line1" style="font-size: 12px;">ประเภทพิพิธภัณฑ์ / ศิลปะ</p>
                  <div class="d-flex align-items-center mt-4">
                    <a href="#" class="btn btn-primary">โปรแกรมทั้งหมด</a>
                    <a href="#" class="px-3 text-dark"><u>โปรแกรมทั้งหมด</u></a>
                  </div>
                </div>
              </div>
            </div>

            <button type="button" class="a-link" onclick="$('.box-iframe-map').attr('data-show', 'list');">
              <img src="./public/images/icon-map.png" alt="">
            </button>
          </div>
          <div class="--list-map col-lg-6 m-0 row p-sm-3">

            <div class="col-md-6 px-3 pt-3" data-aos="fade-up">
              <a href="detail.php" class="text-dark">
                <div class="card h-100">
                  <div class="card-img-top">
                    <img src="https://placehold.co/500x400" alt="Card image cap">
                  </div>
                  <div class="card-body">
                    <div class="b--view">
                      <div class="--location">เจริญกรุง - ตลาดน้อย</div>
                      <div class="--view">300</div>
                    </div>
                    <h5 class="card-title text-line2">มิวเซียมสยาม</h5>
                  </div>
                  <div class="card-footer">
                    <p class="m-0 text-muted text-line1">ประเภทพิพิธภัณฑ์ / ศิลปะ</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 px-3 pt-3" data-aos="fade-up">
              <a href="detail.php" class="text-dark">
                <div class="card h-100">
                  <div class="card-img-top">
                    <img src="https://placehold.co/500x400" alt="Card image cap">
                  </div>
                  <div class="card-body">
                    <div class="b--view">
                      <div class="--location">เจริญกรุง - ตลาดน้อย</div>
                      <div class="--view">300</div>
                    </div>
                    <h5 class="card-title text-line2">มิวเซียมสยาม</h5>
                  </div>
                  <div class="card-footer">
                    <p class="m-0 text-muted text-line1">ประเภทพิพิธภัณฑ์ / ศิลปะ</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 px-3 pt-3" data-aos="fade-up">
              <a href="detail.php" class="text-dark">
                <div class="card h-100">
                  <div class="card-img-top">
                    <img src="https://placehold.co/500x400" alt="Card image cap">
                  </div>
                  <div class="card-body">
                    <div class="b--view">
                      <div class="--location">เจริญกรุง - ตลาดน้อย</div>
                      <div class="--view">300</div>
                    </div>
                    <h5 class="card-title text-line2">มิวเซียมสยาม</h5>
                  </div>
                  <div class="card-footer">
                    <p class="m-0 text-muted text-line1">ประเภทพิพิธภัณฑ์ / ศิลปะ</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 px-3 pt-3" data-aos="fade-up">
              <a href="detail.php" class="text-dark">
                <div class="card h-100">
                  <div class="card-img-top">
                    <img src="https://placehold.co/500x400" alt="Card image cap">
                  </div>
                  <div class="card-body">
                    <div class="b--view">
                      <div class="--location">เจริญกรุง - ตลาดน้อย</div>
                      <div class="--view">300</div>
                    </div>
                    <h5 class="card-title text-line2">มิวเซียมสยาม</h5>
                  </div>
                  <div class="card-footer">
                    <p class="m-0 text-muted text-line1">ประเภทพิพิธภัณฑ์ / ศิลปะ</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 px-3 pt-3" data-aos="fade-up">
              <a href="detail.php" class="text-dark">
                <div class="card h-100">
                  <div class="card-img-top">
                    <img src="https://placehold.co/500x400" alt="Card image cap">
                  </div>
                  <div class="card-body">
                    <div class="b--view">
                      <div class="--location">เจริญกรุง - ตลาดน้อย</div>
                      <div class="--view">300</div>
                    </div>
                    <h5 class="card-title text-line2">มิวเซียมสยาม</h5>
                  </div>
                  <div class="card-footer">
                    <p class="m-0 text-muted text-line1">ประเภทพิพิธภัณฑ์ / ศิลปะ</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 px-3 pt-3" data-aos="fade-up">
              <a href="detail.php" class="text-dark">
                <div class="card h-100">
                  <div class="card-img-top">
                    <img src="https://placehold.co/500x400" alt="Card image cap">
                  </div>
                  <div class="card-body">
                    <div class="b--view">
                      <div class="--location">เจริญกรุง - ตลาดน้อย</div>
                      <div class="--view">300</div>
                    </div>
                    <h5 class="card-title text-line2">มิวเซียมสยาม</h5>
                  </div>
                  <div class="card-footer">
                    <p class="m-0 text-muted text-line1">ประเภทพิพิธภัณฑ์ / ศิลปะ</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 px-3 pt-3" data-aos="fade-up">
              <a href="detail.php" class="text-dark">
                <div class="card h-100">
                  <div class="card-img-top">
                    <img src="https://placehold.co/500x400" alt="Card image cap">
                  </div>
                  <div class="card-body">
                    <div class="b--view">
                      <div class="--location">เจริญกรุง - ตลาดน้อย</div>
                      <div class="--view">300</div>
                    </div>
                    <h5 class="card-title text-line2">มิวเซียมสยาม</h5>
                  </div>
                  <div class="card-footer">
                    <p class="m-0 text-muted text-line1">ประเภทพิพิธภัณฑ์ / ศิลปะ</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 px-3 pt-3" data-aos="fade-up">
              <a href="detail.php" class="text-dark">
                <div class="card h-100">
                  <div class="card-img-top">
                    <img src="https://placehold.co/500x400" alt="Card image cap">
                  </div>
                  <div class="card-body">
                    <div class="b--view">
                      <div class="--location">เจริญกรุง - ตลาดน้อย</div>
                      <div class="--view">300</div>
                    </div>
                    <h5 class="card-title text-line2">มิวเซียมสยาม</h5>
                  </div>
                  <div class="card-footer">
                    <p class="m-0 text-muted text-line1">ประเภทพิพิธภัณฑ์ / ศิลปะ</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 px-3 pt-3" data-aos="fade-up">
              <a href="detail.php" class="text-dark">
                <div class="card h-100">
                  <div class="card-img-top">
                    <img src="https://placehold.co/500x400" alt="Card image cap">
                  </div>
                  <div class="card-body">
                    <div class="b--view">
                      <div class="--location">เจริญกรุง - ตลาดน้อย</div>
                      <div class="--view">300</div>
                    </div>
                    <h5 class="card-title text-line2">มิวเซียมสยาม</h5>
                  </div>
                  <div class="card-footer">
                    <p class="m-0 text-muted text-line1">ประเภทพิพิธภัณฑ์ / ศิลปะ</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 px-3 pt-3" data-aos="fade-up">
              <a href="detail.php" class="text-dark">
                <div class="card h-100">
                  <div class="card-img-top">
                    <img src="https://placehold.co/500x400" alt="Card image cap">
                  </div>
                  <div class="card-body">
                    <div class="b--view">
                      <div class="--location">เจริญกรุง - ตลาดน้อย</div>
                      <div class="--view">300</div>
                    </div>
                    <h5 class="card-title text-line2">มิวเซียมสยาม</h5>
                  </div>
                  <div class="card-footer">
                    <p class="m-0 text-muted text-line1">ประเภทพิพิธภัณฑ์ / ศิลปะ</p>
                  </div>
                </div>
              </a>
            </div>

            <button type="button" class="a-link" onclick="$('.box-iframe-map').removeAttr('data-show');">
              <img src="./public/images/icon-list.png" alt="">
            </button>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end #content -->

  <!-- begin footer -->
  <?php include('./inc/inc-footer.php'); ?>
  <!-- end footer -->

  <?php include('./inc/inc-script.php'); ?>
</body>

</html>