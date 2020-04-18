</main>

<footer>
      <p>
        &copy; Aaron Price 2020 |
        <a
          href="https://medium.com/aaron-price-portfolio/bio-and-resume-573344137a4b"
          target="_blank"
          >aaron-price-portfolio</a
        >
      </p>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"
    ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
    <script>
      $(document).ready(function() {
        $(".mySlider").slick({
          autoplay: true,
          dots: true,
          arrows: false,
          cssEase: "ease-out",
          speed: 2000,
          autoplaySpeed: 10000
        });
      });
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script type="<?php echo get_template_directory_uri(); ?>/application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "TravelAgency",
        "name": "Cabot Cruises NASA",
        "description": "Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.",
        "openingHours": "Mo-Fr 09:00-16:00",
        "telephone": "+18005985899",
        "faxNumber": "+18005985899",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "3100 E Street SW",
          "addressLocality": "Washington",
          "addressRegion": "D.C."
        },
        "image": "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.forbes.com%2Fsites%2Fquora%2F2018%2F10%2F24%2Fhow-difficult-is-it-to-keep-the-space-station-warm%2F&psig=AOvVaw0zZayRXDM_LfDQZLABpV0F&ust=1582785347627000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMDblobN7ucCFQAAAAAdAAAAABAD",
        "priceRange": "$50000 to $1.2M"
      }
    </script>
  </body>
</html>


