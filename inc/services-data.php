<?php
/**
 * Content for individual service detail pages, keyed by page slug.
 * Copy and image sourcing ported verbatim from the live site
 * (mollurahairtransplant.com/{slug}/) -- see project memory. Rendered by
 * patterns/service-detail.php via the shared "Service Detail" page template.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mollura_service_data( $slug ) {
	$services = array(

		'fue-hair-transplant' => array(
			'banner_title'      => 'FUE Hair Transplant',
			'banner_image'      => 'services/fue-hair-transplant-banner.png',
			'intro_eyebrow'     => 'FUE Hair Transplant',
			'intro_heading'     => 'What is an FUE Hair Transplant?',
			'intro_image'       => 'services/fue-hair-transplant-intro.png',
			'intro_image_alt'   => 'Diagram of the FUE hair transplant process: punch incision, extraction of follicular units, harvesting of the grafts, and implantation of the grafts',
			'intro_body'        => array(
				'Follicular Unit Extraction (FUE) is a process of extracting donor hair for a follicular unit hair transplant. With this method, each individual follicular unit is extracted directly from the scalp.',
			),
			'benefits_eyebrow'  => 'Benefits',
			'benefits_heading'  => 'Why Choose an FUE Hair Transplant?',
			'benefits_image'    => 'services/fue-hair-transplant-benefits.png',
			'benefits_image_alt'=> 'Surgical instrument used in an FUE hair transplant procedure',
			'benefits_list'     => array(
				'Single-Day Procedure',
				'Permanant Results and Natural Appearance',
				'Minimally Invasive',
				'Virtually Painless',
				'Indiscernible Scarring and No Stitches',
				'Minimal Downtime',
			),
			'faqs'              => array(
				array(
					'q' => 'Am I a good candidate for a FUE hair transplant?',
					'a' => 'Candidates typically have stable hair loss patterns, sufficient donor hair density, and realistic expectations. A consultation with Mollura Medical will determine if FUE is right for you.',
				),
				array(
					'q' => 'What is the recovery time after a FUE Hair Transplant?',
					'a' => 'Recovery is relatively quick, with most patients returning to normal activities within 2-3 days. Minor redness and scabbing in the transplanted area typically resolve within a week or two.',
				),
				array(
					'q' => 'Will the transplanted hair look natural?',
					'a' => 'Yes, FUE transplants produce natural-looking results. The hairline design, density, and placement of follicles are carefully planned to match your natural growth pattern.',
				),
				array(
					'q' => 'How long will it take to see the results?',
					'a' => 'New growth begins around 3-4 months, with noticeable results at 6-9 months and full results at 12-14 months.',
				),
				array(
					'q' => 'Is FUE a permanent solution for hair loss?',
					'a' => 'Yes, the transplanted hair is resistant to the hormone (DHT) responsible for hair loss and should grow permanently in the new area.',
				),
				array(
					'q' => 'What is the cost of an FUE Hair Transplant',
					'a' => 'The transplant cost will be determined during your consultation. The price can range based on the amount of hair (grafts) the patient needs to achieve the desired results. Financing options are available.',
				),
			),
		),

		'fut-hair-transplant' => array(
			'banner_title'      => 'FUT Hair Transplant',
			'banner_image'      => 'services/fut-hair-transplant-banner.png',
			'intro_eyebrow'     => 'FUT Hair Transplant',
			'intro_heading'     => 'What is an FUT Hair Transplant?',
			'intro_image'       => 'services/fut-hair-transplant-intro.png',
			'intro_image_alt'   => 'Diagram of the FUT hair transplant process: strip harvesting, strip slivering, grafts dissection, and grafts insertion',
			'intro_body'        => array(
				'In Follicular Unit Transplantation (FUT) procedures, commonly referred to as the Strip Method, a strip of hair-bearing tissue is removed from the donor area. The donor area is then closed, leaving a thin, linear scar. The strip is dissected under high-powered microscopes to separate naturally occurring follicular units and then transplanted into the areas of need.',
			),
			'benefits_eyebrow'  => 'Benefits',
			'benefits_heading'  => 'Why Choose an FUT Hair Transplant?',
			'benefits_image'    => 'services/fut-hair-transplant-benefits.png',
			'benefits_image_alt'=> 'Surgeon marking the donor area before an FUT hair transplant procedure',
			'benefits_list'     => array(
				'Single-Day Procedure',
				'Long-Lasting Results and Natural Appearance',
				'No Need to Shave Donor Area',
				'Same Linear Scar Can Be Used For Multiple Procedures',
				'Donor Area Maintains Original Density',
				'More Affordable Option',
			),
			'faqs'              => array(
				array(
					'q' => 'How is FUT different from FUE Hair Transplants',
					'a' => 'The primary difference is the method of extracting hair follicles. FUT involves harvesting a strip of scalp, leaving a linear scar, whereas FUE extracts individual follicles, leaving tiny, dot-like scars.',
				),
				array(
					'q' => 'Am I a good candidate for a FUT Hair Transplant?',
					'a' => 'FUT is ideal for patients with significant hair loss who require many grafts and have sufficient donor hair in the back of the scalp. It is also suitable for those looking for the most cost-effective solution.',
				),
				array(
					'q' => 'What is the recovery time after a FUT Hair Transplant',
					'a' => 'Recovery may take slightly longer than with FUE due to the linear incision in the donor area. Stitches are typically removed after 10-14 days, and most patients resume normal activities within 1-2 weeks.',
				),
				array(
					'q' => 'Will the transplanted hair look natural?',
					'a' => 'Yes, FUT transplants produce natural-looking results. The hairline design, density, and placement of follicles are carefully planned to match your natural growth pattern.',
				),
				array(
					'q' => 'Is FUT a permanent solution for hair loss?',
					'a' => 'FUT transplants use donor hair that is naturally resistant to DHT, the hormone associated with hair loss, which is why results are designed to be long-lasting.',
				),
				array(
					'q' => 'What is the cost of an FUT Hair Transplant',
					'a' => 'The transplant cost will be determined during your consultation. The price can range based on the amount of hair (grafts) the patient needs to achieve the desired results. Financing options are available.',
				),
			),
		),

		'facial-hair-transplants' => array(
			'banner_title'      => 'Facial Hair Transplants',
			'banner_image'      => 'services/facial-hair-transplants-banner.png',
			'intro_eyebrow'     => 'Facial Hair Transplant',
			'intro_heading'     => 'What is a Facial Hair Transplant?',
			'intro_image'       => 'services/facial-hair-transplants-intro.png',
			'intro_image_alt'   => 'Surgeon marking the beard area before a facial hair transplant procedure',
			'intro_body'        => array(
				'A facial hair transplant is a cosmetic procedure that can enhance facial hair growth in areas such as the beard, eyebrows, or sideburns. It involves transplanting hair follicles from the donor area in the back of the head to the desired facial region, creating a denser, natural looking appearance.',
			),
			'benefits_eyebrow'  => 'Benefits',
			'benefits_heading'  => 'Why Choose a Facial Hair Transplant',
			'benefits_image'    => 'services/facial-hair-transplants-benefits.png',
			'benefits_image_alt'=> 'Portrait of a man with a full, natural-looking beard',
			'benefits_list'     => array(
				'Natural Results',
				'Permanent Solutions',
				'Customizable',
				'Minimal Downtime',
			),
			'faqs'              => array(
				array(
					'q' => 'Who is a good candidate?',
					'a' => 'Individuals with patchy or sparse facial hair growth. Those seeking to enhance the appearance of their beard, eyebrows, or sideburns',
				),
				array(
					'q' => 'Is a Facial Hair Transplant Permanent?',
					'a' => 'Yes, the transplanted hair is permanent.',
				),
				array(
					'q' => 'When will I see the results?',
					'a' => 'New growth typically begins within 3 to 4 months. Full results are visible after 12-14 months.',
				),
				array(
					'q' => 'Is a Facial Hair Transplant painful?',
					'a' => 'No. Patients are under local anesthesia and will not feel any pain during the procedure.',
				),
			),
		),

		'eyebrow-hair-restoration' => array(
			'banner_title'      => 'Eyebrow Hair Restoration',
			'banner_image'      => 'services/eyebrow-hair-restoration-banner.png',
			'intro_eyebrow'     => 'Hair Loss Solutions',
			'intro_heading'     => 'Eyebrow Hair Restoration',
			'intro_image'       => 'services/eyebrow-hair-restoration-intro.png',
			'intro_image_alt'   => '',
			'intro_body'        => array(
				'Loss of eyebrow hair can make an individual feel self-conscious about his or her appearance, and new hair transplantation techniques can often restore eyebrows. You often do not realize the full impact that eyebrows can make on the total facial appearance until you see a person without them.',
				'Eyebrow hair transplantation can successfully correct the loss or thinning of eyebrows with natural-growing hair and appearance. The surgery can correct complete or partial eyebrow hair loss and cover scars of one or both eyebrows, with results that are often amazing and aesthetically pleasing. The surgery can be performed on women or men and usually takes a morning or afternoon session.',
			),
			'secondary_eyebrow' => 'Hair Loss Solutions',
			'secondary_heading' => 'Restoring Your Eyebrows',
			'secondary_body'    => array(
				'Eyebrow hair restoration involves a special skill set to achieve the most natural results possible. The type of donor hair used and the angle of the incision to replicate the original eyebrow pattern are critical to achieving a completely natural result. For that reason, we approach eyebrow transplantation with the same customization and precision as our other offerings. Dr. Mollura applies the most advanced surgical and artistic techniques to recreate the natural growth and appearance of the eyebrow.',
			),
			'gallery_heading'   => 'Click Images to Enlarge',
			'gallery_images'    => array(
				array( 'src' => 'services/eyebrow-hair-restoration-gallery-1.png', 'alt' => 'Before and after eyebrow hair transplant result, 28 year old male, 710 grafts transplanted, FUT eyebrow hair transplant' ),
				array( 'src' => 'services/eyebrow-hair-restoration-gallery-2.png', 'alt' => 'Before and after eyebrow hair transplant result, 38 year old female, 624 grafts transplanted, FUT eyebrow hair transplant' ),
			),
		),

		'african-american-hair-restoration' => array(
			'banner_title'      => 'African American Hair Restoration',
			'banner_image'      => 'services/african-american-hair-restoration-banner.png',
			'intro_eyebrow'     => 'African American Hair Restoration',
			'intro_heading'     => 'What is African American Hair Restoration',
			'intro_image'       => 'services/african-american-hair-restoration-intro.png',
			'intro_image_alt'   => 'Man examining his curly hair and hairline',
			'intro_body'        => array(
				'It is the same technique as an FUE or FUT hair transplant. The difference being that physiologically, the hair follicle in this hair type is curled rather than angled in the scalp. This requires a surgeon with years of experience to properly extract the hair follicles safely. At Mollura Medical Hair Restoration, we&rsquo;ve helped hundreds of individuals with this type of hair.',
			),
			'benefits_eyebrow'  => 'Benefits',
			'benefits_heading'  => 'Why Choose Mollura Medical Hair Restoration',
			'benefits_image'    => 'services/african-american-hair-restoration-benefits.png',
			'benefits_image_alt'=> 'Portrait of a man with natural-looking, healthy hair',
			'benefits_list'     => array(
				'Permanent Results',
				'Natural Hairline Design',
				'Advanced Techniques',
				'Proficiency with Donor Hair',
				'Understanding of Hair Texture',
			),
			'faqs'              => array(
				array(
					'q' => 'Are Hair Transplants effective for African American Hair?',
					'a' => 'Yes, they are highly effective when performed by an experienced surgeon that is familiar with the unique characteristics of curly and coiled hair follicles.',
				),
				array(
					'q' => 'What challenges are unique to African American Hair Transplants?',
					'a' => 'The hair follicle in this hair type is curled rather than angled in the scalp. This requires a surgeon with specialized tools and years of experience to properly extract the hair follicles safely. There is also a much higher tendency for Keloid scarring.',
				),
				array(
					'q' => 'Which hair transplant method is best for African American patients?',
					'a' => 'Both FUE and FUT Hair Transplants can be effective for African American patients. The best method will be recommended during consultation after a review of the patient&rsquo;s goals, hair characteristics, and donor area density.',
				),
				array(
					'q' => 'Will the transplanted hair match my natural texture?',
					'a' => 'Yes, the transplanted hair will match your natural texture because it comes from your own donor area. An experienced surgeon ensures that the direction, density, and curl pattern blend seamlessly with your existing hair.',
				),
				array(
					'q' => 'Can a hair transplant fix traction alopecia?',
					'a' => 'Yes, hair transplants are a common solution for traction alopecia caused by tight hairstyles.',
				),
				array(
					'q' => 'When will I see the results?',
					'a' => 'Like with any FUE or FUT Hair Transplant, new hair growth typically starts around 3-4 months, with full results visible after 12-14 months.',
				),
			),
		),

		'female-hair-loss-treatment' => array(
			'banner_title'      => 'Female Hair Loss Treatment',
			'banner_image'      => 'services/female-hair-loss-treatment-banner.png',
			'intro_image'       => 'services/female-hair-loss-treatment-intro.png',
			'intro_image_alt'   => 'Illustration of a woman examining hair loss with a comb',
			'intro_body'        => array(
				'Hair loss for women can be treated with both surgical and non-surgical treatments. Hair Transplants are the most effective option for adding significant hair density. Other options for treating women&rsquo;s hair loss include Oral or Topical Medication, PRP Therapy, and Laser Cap devices. Which treatments are best for you will depend on your specific goals. During a consultation, Dr. Mollura can recommend various combinations of treatments based on your goals for hair restoration.',
				'Contrary to popular belief, female hair loss is relatively common. Approximately 30% of women will experience at least some degree of thinning. The differences between female hair loss and male pattern baldness are vast, beginning with the visual variance. While men tend to get bald spots, often beginning with a receding hairline, women rarely have either. Instead, they tend to experience thinning throughout, all over the head. Women can also experience the partial or total loss of their eyebrows and eyelashes. Although women generally conceal hair loss with styling techniques &amp; cosmetic enhancements, they often suffer more than their male counterparts from the psychological impact of the condition and the societal belief that thinning hair is normal for men but unheard of for women.',
			),
		),

	);

	return isset( $services[ $slug ] ) ? $services[ $slug ] : null;
}
