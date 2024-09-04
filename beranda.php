<?php
include 'header.php';
?>
<div class="container">
  <div class="brand">
    <h1 class="mt-3 mb-3">
      Selamat Datang di- <br />
      Pengenalan Gedung Pemerintahan dan Penyediaan Informasi Kabupaten Kubu Raya
    </h1>
  </div>
  <section class="row">
    <div class="col-12 col-md-6 mb-3">
      <div class="bg">
        <div class="row-left">
          <h1 class="mt-5">Informasi Mengenai Sistem</h1>
          <p>
            Selamat datang di website resmi "Pengenalan Gedung Pemerintahan dan Penyediaan Informasi Kabupaten Kubu Raya". <br />
            Kami adalah sumber informasi terpercaya yang bertujuan untuk memberikan pemahaman mendalam tentang gedung-gedung pemerintahan yang ada di Kabupaten Kubu Raya, serta menyediakan informasi yang relevan dan bermanfaat bagi
            masyarakat.
          </p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 mb-3">
      <div id="map"></div>
    </div>
  </section>
</div>
<script>
  (g => {
    var h, a, k, p = "The Google Maps JavaScript API",
      c = "google",
      l = "importLibrary",
      q = "__ib__",
      m = document,
      b = window;
    b = b[c] || (b[c] = {});
    var d = b.maps || (b.maps = {}),
      r = new Set,
      e = new URLSearchParams,
      u = () => h || (h = new Promise(async (f, n) => {
        await (a = m.createElement("script"));
        e.set("libraries", [...r] + "");
        for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
        e.set("callback", c + ".maps." + q);
        a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
        d[q] = f;
        a.onerror = () => h = n(Error(p + " could not load."));
        a.nonce = m.querySelector("script[nonce]")?.nonce || "";
        m.head.append(a)
      }));
    d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
  })
  ({
    key: "AIzaSyAgGBjlEnlrlO2KdsQMFL70E_Ppo3GmFPs",
    v: "weekly"
  });
</script>
<?php
include 'footer.php';
?>