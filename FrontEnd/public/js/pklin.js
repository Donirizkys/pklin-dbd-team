(function () {
  // Jam berjalan (WIB)
  var clock = document.getElementById('clock');
  if (clock) {
    var tick = function () {
      var d = new Date();
      var wib = new Date(d.getTime() + d.getTimezoneOffset() * 60000 + 7 * 3600000);
      var p = function (n) { return String(n).padStart(2, '0'); };
      clock.textContent = p(wib.getHours()) + ':' + p(wib.getMinutes()) + ':' + p(wib.getSeconds());
    };
    tick(); setInterval(tick, 1000);
  }

  // Tombol muat ulang
  var rf = document.querySelector('[data-refresh]');
  if (rf) rf.addEventListener('click', function () { location.reload(); });

  // Toast untuk fitur yang belum tersedia
  var toast = document.getElementById('toast'), tt;
  document.addEventListener('click', function (ev) {
    var el = ev.target.closest('[data-soon]');
    if (!el || !toast) return;
    ev.preventDefault();
    toast.textContent = 'Fitur ini belum tersedia (akan dikembangkan berikutnya).';
    toast.classList.add('show');
    clearTimeout(tt); tt = setTimeout(function () { toast.classList.remove('show'); }, 2200);
  });

  // Tampilkan / sembunyikan kata sandi
  var btn = document.getElementById('pwToggle'), pw = document.getElementById('password');
  if (btn && pw) {
    btn.addEventListener('click', function () {
      var show = pw.type === 'password';
      pw.type = show ? 'text' : 'password';
      btn.querySelector('[data-eye]').hidden = show;
      btn.querySelector('[data-eye-off]').hidden = !show;
      btn.setAttribute('aria-label', show ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
    });
  }
})();
