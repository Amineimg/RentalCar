<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->

<url>
  <loc>https://www.jacarandacar.com/</loc>
  <lastmod>2021-01-20T16:06:12+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://www.jacarandacar.com/location-voiture-marrakech</loc>
  <lastmod>2021-01-20T16:06:12+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.jacarandacar.com/general-conditions</loc>
  <lastmod>2021-01-20T16:06:12+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.jacarandacar.com/contactez-nous</loc>
  <lastmod>2021-01-20T16:06:12+00:00</lastmod>
  <priority>0.80</priority>
</url>
    
    @foreach ($cars as $car)
        <url>
            <loc>{{ route('car_details',[$car->id, $car->alias]) }}</loc>
            <lastmod>2020-09-15T09:08:54+00:00</lastmod>
            <priority>0.64</priority>
        </url>
    @endforeach

</urlset>