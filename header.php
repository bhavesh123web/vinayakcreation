<?php
include_once('config.php');
$current_url='';
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $current_url = "https://";   
    else  
         $current_url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $current_url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $current_url.= $_SERVER['REQUEST_URI'];    
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $title; ?></title>
  <meta content="<?php echo $keywords; ?>" name="keywords">
  <meta content="<?php echo $description; ?>" name="description">
  
    <meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:url" content="<?php echo $current_url; ?>" />
	<meta property="og:description" content="<?php echo $description; ?>" />
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/img/logo.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="<?php echo $title; ?>" />

	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?php echo $title; ?>" />
	<meta name="twitter:url" content="<?php echo $current_url; ?>" />
	<meta name="twitter:description" content="<?php echo $description; ?>" />
	<meta name="twitter:image" content="<?php echo BASE_URL; ?>assets/img/logo.png" />
	<meta name="twitter:image:alt" content="<?php echo $title; ?>" />
	<meta name="twitter:site" content="@vinayakcreation" />
	<meta name="twitter:creator" content="@vinayakcreation" />


  <!-- Favicons -->
  <link href="<?php echo BASE_URL; ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo BASE_URL; ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo BASE_URL; ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet">
  

  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  
 
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GPWW634Q29"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GPWW634Q29');
</script>
 		


		 
  
  
</head>

<body>



<script type='application/ld+json'> 
{
"@context": "http://www.schema.org",
"@type": "ProfessionalService",
"name": "<?php echo $title; ?>",
"url": "<?php echo $current_url; ?>",
"logo": "<?php echo BASE_URL; ?>assets/img/logo.png",
"image": "<?php echo BASE_URL; ?>assets/img/logo.png",
"description": "<?php echo $description; ?>",
"priceRange":"INR",
"aggregateRating": {
"@type": "AggregateRating",
"ratingValue": "4.8/5",
"reviewCount": "295"
},
"address": {
"@type": "PostalAddress",
"streetAddress": "104, Golden Plaza, Raipur Ahmedabad",
"addressLocality": "Ahmedabad",
"addressRegion": "Gujarat",
"postalCode": "380001",
"addressCountry": "India"
},
"telephone":"99240-47027",
"geo": {
"@type": "GeoCoordinates",
"latitude": "23.039547",
"longitude": "72.563569"
},
"openingHours": "Mo, Tu, We, Th, Fr, Sa 10.00:00-19:00",
"contactPoint": [{
"@type": "ContactPoint",
"telephone": "+91-99240-47027",
"contactType": "customer support",
"areaServed" : ["IN"],
"availableLanguage" : ["Hindi","Gujarati","English"]
},
{
"@type" : "ContactPoint",
"telephone" : "+91-99240-47027",
"contactType" : "technical support",
"areaServed" : ["IN"],
"availableLanguage" : ["Hindi","Gujarati","English"]
}],
"sameAs" : [
"https://www.facebook.com/vinayakcreationahmedabad",
"https://twitter.com/vinayak_creation",
"https://in.pinterest.com/vinayak/",
"https://www.linkedin.com/company/vinayak-creation",
"https://www.instagram.com/vinayakcreationahmedabad",
"https://www.youtube.com/channel/UCOshaUOSkpCoaA3u9HO8hOQ"]
}
</script>



		
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://vinayakcreation.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "About Us",
    "item": "https://vinayakcreation.com/about"  
  }]
}
</script>


<script type="application/ld+json">{
   "@context":"https://schema.org",
   "@graph":[
      {
         "@type":"WebSite",
         "@id":"https://vinayakcreation.com/#website",
         "url":"https://vinayakcreation.com/",
         "name":"vinayakcreation",
         "description":"vinayakcreation 50% Off on Unlimited Punjabi and Gujarati Thali",
         "potentialAction":[
            {
               "@type":"SearchAction",
               "target":{
                  "@type":"EntryPoint",
                  "urlTemplate":"https://vinayakcreation.com/?s={search_term_string}"
               },
               "query-input":"required name=search_term_string"
            }
         ],
         "inLanguage":"en-US"
      },
      {
         "@type":"ImageObject",
         "inLanguage":"en-US",
         "@id":"https://vinayakcreation.com/#primaryimage",
         "url":"https://vinayakcreation.com/assets/img/logo.png",
         "contentUrl":"https://vinayakcreation.com/assets/img/logo.png",
         "width":49,
         "height":50
      },
      {
         "@type":"WebPage",
         "@id":"https://vinayakcreation.com/#webpage",
         "url":"https://vinayakcreation.com/",
         "name":"vinayakcreation 50% Off on Unlimited Punjabi and Gujarati Thali",
         "isPartOf":{
            "@id":"https://vinayakcreation.com/#website"
         },
         "primaryImageOfPage":{
            "@id":"https://vinayakcreation.com/#primaryimage"
         },
         "datePublished":"2014-12-11T08:30:16+00:00",
         "dateModified":"2022-11-18T14:19:35+00:00",
         "description":"Great Offers on on Unlimited Punjabi and Gujarati Thali (Get 50% Off)",
         "inLanguage":"en-US",
         "potentialAction":[
            {
               "@type":"ReadAction",
               "target":[
                  "https://vinayakcreation.com/"
               ]
            }
         ]
      }
   ]
}
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://vinayakcreation.com/blog/"
  },
  "headline": "Food offers and coupons for punjabi thali , gujarati thali",
  "description": "This Website provides best offers on food like punjabi thali and gujarati thali.",
  "image": "https://vinayakcreation.com/assets/img/logo.png",  
  "author": {
    "@type": "Organization",
    "name": "Nidhi Shah",
    "url": "https://www.vinayakcreation.com"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "Harshil",
    "logo": {
      "@type": "ImageObject",
      "url": "https://vinayakcreation.com/assets/img/logo.png"
    }
  },
  "datePublished": "2022-12-12",
  "dateModified": "2022-12-13"
}
</script>



<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "vinayakcreation",
  "url": "https://www.vinayakcreation.com",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.vinayakcreation.com/?search=q{search_term_string}punjabi",
    "query-input": "required name=search_term_string"
  }
}
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "vinayakcreation Punjabi Thali & Gujarati Thali",
  "image": "https://vinayakcreation.com/assets/img/logo.png",
  "@id": "facebook.com/vahivatvale/",
  "url": "https://www.vinayakcreation.com/",
  "telephone": "+91 966-286-1910",
  "priceRange": "100",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Ambawadi Nehrunager",
    "addressLocality": "Ahmedabad",
    "postalCode": "3800015",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 23.017124,
    "longitude": 72.53305329999999
  },
  "openingHoursSpecification": [{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Monday",
    "opens": "10:00",
    "closes": "07:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Tuesday",
    "opens": "10:00",
    "closes": "07:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Wednesday",
    "opens": "10:00",
    "closes": "07:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Thursday",
    "opens": "10:00",
    "closes": "07:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Friday",
    "opens": "10:00",
    "closes": "07:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Saturday",
    "opens": "10:00",
    "closes": "07:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Sunday",
    "opens": "10:00",
    "closes": "07:00"
  }] 
}
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product", 
  "name": "Vinayak CRM",
  "image": "https://vinayakcreation.com/assets/uploads/category/9644_9355_9812_09102022112931.jpg",
  "description": "We offers Punjabi Thali Just @100",
  "brand": {
    "@type": "Brand",
    "name": "vinayakcreation"
  },
  "sku": "1111",
  "offers": {
    "@type": "Offer",
    "url": "https://vinayakcreation.com",
    "priceCurrency": "INR",
    "price": "100",
    "priceValidUntil": "2025-08-27",
    "availability": "https://schema.org/InStock",
    "itemCondition": "https://schema.org/NewCondition"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "5",
    "ratingCount": "1",
    "reviewCount": "1"
  },
  "review": {
    "@type": "Review",
    "name": "Nidhi Shah",
    "reviewBody": "Yeah, Service is too good.",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": "5",
      "bestRating": "5",
      "worstRating": "5"
    },
    "datePublished": "2022-12-12",
    "author": {"@type": "Person", "name": "Krishna Shah"},
    "publisher": {"@type": "Organization", "name": "vinayakcreation"}
  }
}
</script>



<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "vinayakcreation Offers",
  "alternateName": "vinayakcreation Offers",
  "url": "https://www.vinayakcreation.com/",
  "logo": "https://vinayakcreation.com/assets/img/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 966-286-1910",
    "contactType": "technical support",
    "contactOption": "TollFree",
    "areaServed": "IN",
    "availableLanguage": "Gujarati"
  },
  "sameAs": [
    "https://www.facebook.com/vinayakcreation365/",
    "https://www.instagram.com/vinayakcreation/"
  ]
}
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Nidhi Shah",
  "url": "https://www.vinayakcreation.com/",
  "image": "https://vinayakcreation.com/assets/img/logo.png",
  "sameAs": [
    "https://www.facebook.com/vinayakcreation365/",
    "https://www.instagram.com/vinayakcreation/"
  ],
  "jobTitle": "Marketing Person",
  "worksFor": {
    "@type": "Organization",
    "name": "Food Service"
  }  
}
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "vinayakcreation Grand Party",
  "description": "vinayakcreation is hosting a grand party on opening. All the restaurants owner are invited to join party.",
  "image": "https://vinayakcreation.com/assets/uploads/category/9211_3798_8237_09102022112955.jpg",
  "startDate": "2022-12-12T12:00",
  "endDate": "2022-12-13T07:00",
  "eventStatus": "https://schema.org/EventMovedOnline",
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "location": {		
    "@type": "Place",
    "name": "City Corner Resturant",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Panjrapole",
      "addressLocality": "Ahmedabad",
      "postalCode": "380007",
      "addressCountry": ""
    }
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Nidhi Shah"
  }
}
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "JobPosting",
  "title": "Opening For Marketing Person",
  "description": "We are looking for marketing person for our company.Job Role and Responsibilities- Marketing & Sales Management- Training & Development- Client/Customer Servicing- Managing a team of 5-7 marketing associates- Lead the process, meet prospective clients and give product presentation- Visit businesses and corporates for presentations and demonstrations- Be the first point of contact for all marketing-related queries and communication- Develop Strategies for new plans and growth.For appointment, kindly WhatsApp your resumes.",
  "identifier": {
    "@type": "PropertyValue",
    "name": "vinayakcreation",
    "value": "Job"
  },
  "hiringOrganization" : {
    "@type": "Organization",
    "name": "vinayakcreation",
    "sameAs": "https://www.vinayakcreation.com/",
    "logo": "https://vinayakcreation.com/assets/img/logo.png"
  },
  "industry": "Food",
  "employmentType": "FULL_TIME",
  "workHours": "8am-5pm",
  "datePosted": "2022-12-13",
  "validThrough": "2025-01-28",
  "jobLocation": {
    "@type": "Place",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "AAAAA",
      "addressLocality": "Ahmedabad",
      "postalCode": "380007",
      "addressCountry": "IN"
    }
  },
  "baseSalary": {
    "@type": "MonetaryAmount",
    "currency": "INR",
    "value": {
      "@type": "QuantitativeValue",
      "minValue": 50000,
      "maxValue": 60000,
      "unitText": "MONTH"
    }
  },
  "responsibilities": "Sales Marketing",
  "skills": "Sales",
  "qualifications": "Graduate",
  "educationRequirements": "MBA",
  "experienceRequirements": "10 Years"
}
</script>



<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "vinayakcreation Food and offers",
  "description": "we are providing best offers on punjabi thali and gujarati thali.",
  "thumbnailUrl": [
    "https://vinayakcreation.com/assets/uploads/category/9211_3798_8237_09102022112955.jpg",
    "https://vinayakcreation.com/assets/uploads/category/9211_3798_8237_09102022112955.jpg"
  ],
  "uploadDate": "2022-12-12",
  "duration": "PT10M5S",
  "contentUrl": "https://www.vinayakcreation.com",
  "embedUrl": "https://youtu.be/AL2fDmHOhks"
}
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Recipe", 
  "name": "Punjabi Thali",
  "image": "https://vinayakcreation.com/assets/uploads/category/9211_3798_8237_09102022112955.jpg",
  "description": "We are providing offers on Punjabi Thali.",
  "keywords": "Punjabi Thali",
  "author": {
    "@type": "Person",
    "name": "Nidhi Shah"
  },
  "datePublished": "2022-12-13",
  "prepTime": "PT5M",
  "cookTime": "PT10M", 
  "totalTime": "PT15M", 
  "recipeCategory": "appetizer", 
  "recipeCuisine": "Indian", 
  "recipeYield": "50", 
  "nutrition": {
    "@type": "NutritionInformation",
    "servingSize": "Protine",
    "calories": "150 cal",
    "fatContent": "10 g"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "5",
    "ratingCount": "1",
    "reviewCount": "1"
  },
  "review": {
    "@type": "Review",
    "name": "Jigisha Gami",
    "reviewBody": "It was a nice teast.I like this to cook at home.",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": "5",
      "bestRating": "5",
      "worstRating": "5"
    },
    "datePublished": "2022-12-08",
    "author": {"@type": "Person", "name": "Ronak Patel"},
    "publisher": {"@type": "Organization", "name": "Rajvi Sharma"}
  },
  "video": {
    "@type": "VideoObject",
    "name": "Punjabi Thali",
    "description": "We are providing offers on Punjabi Thali.",
    "thumbnailUrl": "https://vinayakcreation.com/assets/uploads/category/9211_3798_8237_09102022112955.jpg",
    "uploadDate": "2022-12-13", 
    "contentUrl": "https://vinayakcreation.com",
    "embedUrl": "https://youtu.be/AL2fDmHOhks"
  }  
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Is any offers available for punjabi thali?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. There are offers are there. There is 50% off on Punjabi thali. Please login to our portal. https://vinayakcreation.com"
    }
  },{
    "@type": "Question",
    "name": "How to purchase CRM software?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Simple. Go to https://vinayakcreation.com. From the menu click on customer register. fill all the details and click on register."
    }
  }]
}
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "HowTo", 
  "name": "How to register in vahiwatwale",
  "description": "Simple. Go to https://vinayakcreation.com. From the menu click on customer register. fill all the details and click on register.",
  "image": "https://vinayakcreation.com/assets/img/logo.png",
  "totalTime": "PT10M",
  "estimatedCost": {
    "@type": "MonetaryAmount",
    "currency": "INR",
    "value": "10"
  },
  "supply": [{
    "@type": "HowToSupply",
    "name": "Keyboard"
  },{
    "@type": "HowToSupply",
    "name": "Mouse"
  }],
  "tool": [{
    "@type": "HowToTool",
    "name": "Monitor"
  },{
    "@type": "HowToTool",
    "name": "CPU"
  }],
  "step": [{
    "@type": "HowToStep",
    "text": "Open the Browser. Type www.vinayakcreation.com",
    "image": "https://vinayakcreation.com/assets/img/logo.png",
    "name": "Working",
    "url": "https://vinayakcreation.com"
  },{
    "@type": "HowToStep",
    "text": "Click On Customer Register",
    "image": "https://vinayakcreation.com/assets/img/logo.png",
    "name": "Register",
    "url": "https://vinayakcreation.com"
  }]    
}
</script>


<!--
<div class="loader_bg">
      <div class="loader"></div>
</div>
<script>
      setTimeout(function() {
        $('.loader_bg').fadeToggle();
      }, 1500);
</script>
 <div class="overlay"></div>

   <style>
   
   
      .loader_bg {
        position: fixed;
        z-index: 999999;
        background: #fff;
        width: 100%;
        height: 100%;
      }

      .loader {
        border: 0 soild transparent;
        border-radius: 50%;
        width: 150px;
        height: 150px;
        position: absolute;
        top: calc(50vh - 75px);
        left: calc(50vw - 75px);
      }

      .loader:before,
      .loader:after {
        content: '';
        border: 1em solid #0866c6;
        border-radius: 50%;
        width: inherit;
        height: inherit;
        position: absolute;
        top: 0;
        left: 0;
        animation: loader 2s linear infinite;
        opacity: 0;
      }

      .loader:before {
        animation-delay: .5s;
      }

      @keyframes loader {
        0% {
          transform: scale(0);
          opacity: 0;
        }

        50% {
          opacity: 1;
        }

        100% {
          transform: scale(1);
          opacity: 0;
        }
      }
	</style>
-->



  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="https://vinayakcreation.com/" class="logo d-flex align-items-center">
        <img src="<?php echo BASE_URL; ?>assets/img/logo.png" alt="">
      </a>

     <nav id="navbar" class="navbar">
        <ul>
        

		  <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo BASE_URL; ?>about-us/company-profile.php">Company Profile</a></li>
              <!--<li><a href="#">Our Team</a></li>-->
              <li><a href="<?php echo BASE_URL; ?>about-us/mission-and-vision.php">Mission and Vision</a></li>
			  <li><a href="<?php echo BASE_URL; ?>about-us/our-values.php">Our Values</a></li>
			  <li><a href="<?php echo BASE_URL; ?>about-us/our-portfolio.php">Our Portfolio</a></li>
			  <li><a href="<?php echo BASE_URL; ?>about-us/corporate-facts.php">Corporate Facts</a></li>
			  <li><a href="<?php echo BASE_URL; ?>about-us/global-presence.php">Global Presence</a></li>
			  <li><a href="<?php echo BASE_URL; ?>about-us/company-events.php">Company Events</a></li>
			  <li><a href="<?php echo BASE_URL; ?>about-us/partnership.php">Partnership</a></li> 
			  <li><a href="<?php echo BASE_URL; ?>about-us/company-policy.php">Company Policy</a></li>
			  <li><a href="<?php echo BASE_URL; ?>about-us/company-awards.php">Company Awards</a></li>
			
            </ul>
          </li>
		  <li class="dropdown"><a href="#">
		  <span>Election</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo BASE_URL; ?>ui-ux/logo-design.php">Election Campaign Management</a></li>
			  <li><a href="<?php echo BASE_URL; ?>ui-ux/banner-design.php">Opinion poll & Election Surveys</a></li>
              <li><a href="<?php echo BASE_URL; ?>ui-ux/flyer-design.php">Digital Marketing for Political Campaign</a></li>
              <li><a href="<?php echo BASE_URL; ?>ui-ux/social-media-post-design.php">•	Social Media Management for Election</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#">
		  <span>Web Design</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo BASE_URL; ?>web-design/static-website-design.php">Static Website Design</a></li>
			  <li><a href="<?php echo BASE_URL; ?>web-design/dynamic-website-design.php">Dynamic Website Design</a></li>
              <li><a href="<?php echo BASE_URL; ?>web-design/e-commerce-website-design.php">E-Commerce Website Design</a></li>
              <li><a href="<?php echo BASE_URL; ?>web-design/web-portal-design.php">Web Portal Design</a></li>
            </ul>
          </li>
		  <li class="dropdown"><a href="#">
		  <span>App Development</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
			  <li><a href="<?php echo BASE_URL; ?>app-development/wordpress-development.php">Wordpress Development </a></li>
              <li><a href="<?php echo BASE_URL; ?>app-development/php-development.php">PHP Development</a></li>
			  <li><a href="<?php echo BASE_URL; ?>app-development/dotnet-development.php">DotNET Development</a></li>
			  <li><a href="<?php echo BASE_URL; ?>app-development/shopify-development.php">Shopify Development </a></li>
			  <li><a href="<?php echo BASE_URL; ?>app-development/e-commerce-development.php">E-commerce Development </a></li>
              <li><a href="<?php echo BASE_URL; ?>app-development/android-app-development.php">Android App Development</a></li>
			  <li><a href="<?php echo BASE_URL; ?>app-development/ios-app-development.php">iOS App Development</a></li>
			  <li><a href="<?php echo BASE_URL; ?>app-development/customized-software-development.php">Customized Software Development</a></li>
			  <li><a href="<?php echo BASE_URL; ?>app-development/crm-software-development.php">CRM Software Development</a></li>
			  <li><a href="<?php echo BASE_URL; ?>app-development/erp-software-development.php">ERP Software Development</a></li>
            </ul>
          </li>
		  
		  
		  
		  <li class="dropdown"><a href="#">
		  <span>Digital Marketing</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
			 <li><a href="<?php echo BASE_URL; ?>digital-marketing/social-media-marketing.php">Social Media Marketing</a></li>
			  <li><a href="<?php echo BASE_URL; ?>digital-marketing/google-adwords.php">Google AdWords</a></li>
			  <li><a href="<?php echo BASE_URL; ?>digital-marketing/youtube-video-marketing.php">Youtube Video Marketing</a></li>
              <li><a href="<?php echo BASE_URL; ?>digital-marketing/facebook-marketing.php">Facebook Marketing</a></li>
			  <li><a href="<?php echo BASE_URL; ?>digital-marketing/instagram-marketing.php">Instagram Marketing</a></li>
			  <li><a href="<?php echo BASE_URL; ?>digital-marketing/linkedin-marketing.php">Linkedin Marketing</a></li>
              <li><a href="<?php echo BASE_URL; ?>digital-marketing/mobile-app-marketing.php">Mobile App Marketing</a></li>
			  <li><a href="<?php echo BASE_URL; ?>digital-marketing/blog-promotion.php">Blog Promotion</a></li>
			  <li><a href="<?php echo BASE_URL; ?>digital-marketing/bulk-sms-marketing.php">Bulk SMS Marketing</a></li>
			  <li><a href="<?php echo BASE_URL; ?>digital-marketing/bulk-whatsapp-marketing.php">Bulk WhatsApp Marketing</a></li>
			  <li><a href="<?php echo BASE_URL; ?>digital-marketing/bulk-email-marketing.php">Bulk Email Marketing</a></li>
            </ul>
          </li>
		  
		  <li class="dropdown"><a href="#">
		  <span>SEO</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo BASE_URL; ?>seo/keywords-analysis-and-research.php">Keywords Analysis and Research</a></li>
			  <li><a href="<?php echo BASE_URL; ?>seo/content-writing.php">Content Writing</a></li>
			  <li><a href="<?php echo BASE_URL; ?>seo/page-optimization.php">Page Optimization</a></li>
              <li><a href="<?php echo BASE_URL; ?>seo/link-building.php">Link Building</a></li>
              <li><a href="<?php echo BASE_URL; ?>seo/reporting-and-analysis.php">Reporting and Analysis</a></li>
            </ul>
          </li>
		
		  <li class="dropdown"><a href="#">
		  <span>Hire Expert</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo BASE_URL; ?>hire-expert/hire-php-developer.php">Hire PHP Developer</a></li>
			  <li><a href="<?php echo BASE_URL; ?>hire-expert/hire-wordpress-developer.php">Hire Wordpress Developer</a></li>
			  <li><a href="<?php echo BASE_URL; ?>hire-expert/hire-magento-developer.php">Hire Magento Developer</a></li>
              <li><a href="<?php echo BASE_URL; ?>hire-expert/hire-android-developer.php">Hire Android Developer</a></li>
              <li><a href="<?php echo BASE_URL; ?>hire-expert/hire-ios-developer.php">Hire IOS Developer</a></li>
			  <li><a href="<?php echo BASE_URL; ?>hire-expert/hire-seo-expert.php">Hire SEO Expert</a></li>
			  <li><a href="<?php echo BASE_URL; ?>hire-expert/hire-content-writer.php">Hire Content Writer</a></li>
			  <li><a href="<?php echo BASE_URL; ?>hire-expert/hire-digital-marketing-expert.php">Hire Digital Marketing Expert</a></li>
			  <li><a href="<?php echo BASE_URL; ?>hire-expert/hire-graphic-designer.php">Hire Graphic Designer</a></li>
			  <li><a href="<?php echo BASE_URL; ?>hire-expert/hire-web-designer.php">Hire Web Designer</a></li>
            </ul>
          </li>
		  <!--<li><a href="blog.html">Blog</a></li>-->
		  <!--<li><a class="nav-link scrollto" href="#contact">Career</a></li>-->
          <!--<li><a class="nav-link scrollto" href="#contact">Contact</a></li>-->
          <li><a class="getstarted scrollto" href="<?php echo BASE_URL; ?>contact-us.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
