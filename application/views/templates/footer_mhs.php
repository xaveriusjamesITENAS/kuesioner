<footer class="footer">
    <div class=" container-fluid ">
        <nav>
            <ul>
                <li>
                    <a href="https://www.itenas.ac.id">
                        Institut Teknologi Nasional, Bandung
                    </a>
                </li>
                <!-- <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li> -->
            </ul>
        </nav>
        <!-- <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">UPT-TIK Itenas</a>.
          </div> -->
        <div class="copyright" id="copyright">
            &copy; <script>
                document.getElementById('copyright').appendChild(document.createTextNode(<?= date('Y'); ?>))
            </script>, <a href="https://tik.itenas.ac.id" target="_blank">UPT-TIK Itenas</a>.
        </div>
    </div>
</footer>
</div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda Yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" jika anda yakin akan keluar dari sesi ini.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout_mhs'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
</body>

</html>