<footer>
    <div class="container">
      <div class="mb-2 d-flex align-items-center justify-content-center">
        <img src="Libs/Images/logo_crims.png" alt="Logo" width="30" class="me-2">
        <strong>CRIMS</strong>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae justo quis dolor bibendum tempor.</p>
      <div class="footer-links mb-2">
        <a href="#">Contact Us</a>
        <a href="#">Inquiry</a>
        <a href="#">Privacy Policy</a>
      </div>
      <div>© 2025 Crime Reporting and Investigation Monitoring System. All rights reserved.</div>
    </div>
  </footer>

  <!-- JavaScript for Dynamic Sections -->
  <script>
    const newsItems = [
      { title: "Facebook Live: Community Crime Watch", content: "Streaming now from official CRIMS FB page." },
      { title: "Recent Theft Incident Resolved", content: "Local police apprehended suspects in just 24 hours." },
    ];
    const programItems = [
      { title: "Barangay Patrol Support Program", content: "CRIMS helps monitor local patrols with better visibility." },
      { title: "Youth Awareness Drive", content: "Ongoing campaign educating teens on crime prevention." },
    ];

    function renderCards(items, targetId) {
      const container = document.getElementById(targetId);
      container.innerHTML = `
        <div class="col-md-8">
          <div class="main-card p-3">${items[0].title}<br><small>${items[0].content}</small></div>
        </div>
        <div class="col-md-4">
          <div class="small-card p-2">${items[1].title}<br><small>${items[1].content}</small></div>
          <div class="small-card p-2">More updates coming soon</div>
        </div>`;
    }

    renderCards(newsItems, "news-section");
    renderCards(programItems, "program-section");
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" 
  src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0" 
  nonce="abc123">
</script>
<script src="feed.js"></script>

</body>
</html>