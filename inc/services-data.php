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

		'hair-transplant-repair-corrective-surgery' => array(
			'banner_title'      => 'Hair Transplant Repair (Corrective Surgery)',
			'banner_image'      => 'services/hair-transplant-repair-corrective-surgery-banner.png',
			'intro_eyebrow'     => 'Corrective Surgery',
			'intro_heading'     => 'What is a Hair Transplant Repair?',
			'intro_image'       => 'services/hair-transplant-repair-corrective-surgery-intro.png',
			'intro_image_alt'   => '',
			'intro_body'        => array(
				'A Hair Transplant Repair is a procedure designed to address and improve unsatisfactory results from a previous hair transplant. This can often occur when a Hair Transplant is performed by an inexperienced Doctor.',
			),
			'benefits_eyebrow'  => 'Benefits',
			'benefits_heading'  => 'Why Choose a Hair Transplant Repair',
			'benefits_image'    => 'services/hair-transplant-repair-corrective-surgery-benefits.png',
			'benefits_image_alt'=> 'Patient consultation for hair transplant repair',
			'benefits_list'     => array(
				'Correct Unsatisfactory Work',
				'More Aesthetically Pleasing Result',
				'Boosted Confidence',
				'Customized Solutions',
			),
			'faqs'              => array(
				array(
					'q' => 'Why might someone need a Hair Transplant Repair?',
					'a' => 'Undesirable results can include unnatural looking hairlines, insufficient coverage, poor growth, and visible scarring.',
				),
				array(
					'q' => 'How long after an unsatisfactory hair transplant can I get a repair?',
					'a' => 'It is recommended to wait at least 12 months after the initial procedure to allow full healing and assess the final results.',
				),
				array(
					'q' => 'Can a bad hairline design be fixed?',
					'a' => 'Yes, Dr. Mollura is renowned for his natural-looking hairline design.',
				),
				array(
					'q' => 'Will a hair transplant repair require another donor area?',
					'a' => 'In most cases, additional donor hair is needed.',
				),
				array(
					'q' => 'Can scars from previous hair transplants be fixed?',
					'a' => 'Yes, scars from FUT procedures can often be improved with new follicular unit grafts or using scar revision techniques.',
				),
			),
		),

		'prp-therapy' => array(
			'banner_title'      => 'PRP Therapy',
			'banner_image'      => 'services/prp-therapy-banner.png',
			'intro_eyebrow'     => 'PRP Therapy',
			'intro_heading'     => 'What is PRP Therapy',
			'intro_image'       => 'services/prp-therapy-intro.png',
			'intro_image_alt'   => 'Diagram of the PRP process: blood collection, centrifugation, and PRP injection',
			'intro_body'        => array(
				'Platelet-rich plasma (PRP) therapy is a non-surgical treatment that has been used to promote hair growth and hair health in individuals with hair loss. PRP is a concentrated solution of platelets derived from the patient&rsquo;s own blood, which contains growth factors that can stimulate hair follicles and improve hair growth.',
				'<strong>PRP with ACell Treatment</strong><br>Stem cells and cellular regeneration are at the cutting edge of hair restoration science. PRP with ACell treatment offers a new way to treat hair loss, strengthen weaker hairs, and possibly stimulate new hair growth without surgery. While no treatment currently exists that can replicate the results of a professional hair transplant, PRP with ACell shows promising results for total hair health. As a leader in innovation in the Hair Restoration industry for over 25 years, Dr. Anthony Mollura uses PRP with ACell treatments in conjunction with other non-surgical treatments to offer a fully customizable treatment plan for each individual patient.',
			),
			'secondary_body'    => array(
				'<strong>What is PRP with ACell Treatment</strong><br>PRP with ACell is a non-surgical treatment for hair thinning and hair loss that uses your own blood to stimulate growth. It is a quick 60 minute in-office treatment with little to no downtime. Platelet-rich plasma (PRP) therapy is a concentrated solution of platelets derived from the patient&rsquo;s own blood, which contains growth factors. The growth factors signal your tissue to regenerate. ACell is an FDA-cleared, naturally-occurring extracellular matrix used in regenerative medicine to repair tissues, close wounds, and stimulate hair follicle regeneration. It acts as a scaffold that recruits stem cells to damaged areas. This treatment is appropriate for both men and women that are experiencing pattern hair loss and other forms of hair loss.',
			),
			'benefits_eyebrow'  => 'Benefits',
			'benefits_heading'  => 'Why Choose PRP Therapy',
			'benefits_image'    => 'services/prp-therapy-benefits.png',
			'benefits_image_alt'=> 'Patient receiving PRP therapy treatment',
			'benefits_list'     => array(
				'Non-Surgical and Minimally Invasive',
				'Quick 60-minute Procedure With No Downtime',
				'Can Be Combined with Other Treatments',
				'Improves Hair Thickness and Density',
			),
			'faqs'              => array(
				array(
					'q' => 'How does PRP work to restore hair?',
					'a' => 'PRP contains growth factors that help repair and rejuvenate damaged hair follicles. These growth factors stimulate blood flow, encourage cell repair, and support the natural growth cycle of your hair.',
				),
				array(
					'q' => 'How many sessions of PRP are needed for noticeable results?',
					'a' => 'Most patients require an initial series of 3 treatments spaced 4 weeks apart with a 4th treatment 6 months after. Maintenance treatments every 4-6 months are recommended to sustain results.',
				),
				array(
					'q' => 'Does PRP therapy hurt?',
					'a' => 'The procedure involves minimal discomfort. A numbing agent may be applied to the scalp before the injections to ensure your comfort during the treatment.',
				),
				array(
					'q' => 'How soon can I expect to see results?',
					'a' => 'Patients often notice improvements in hair texture and thickness within 3-6 months. Full results typically become apparent after a year of consistent treatment.',
				),
				array(
					'q' => 'Can PRP be combined with other hair loss treatments?',
					'a' => 'Yes, PRP can enhance the results of other treatments such as hair transplants, topical solutions like minoxidil, or oral medications like finasteride.',
				),
				array(
					'q' => 'Am I a good candidate for PRP hair loss treatments?',
					'a' => 'PRP is ideal for individuals experiencing thinning hair or mild-to-moderate hair loss. It&rsquo;s most effective for patients with active hair follicles. A consultation will determine if PRP is right for you.',
				),
			),
		),

		'scalp-micropigmentation-smp' => array(
			'banner_title'      => 'Scalp Micropigmentation (SMP)',
			'banner_image'      => 'services/scalp-micropigmentation-smp-banner.png',
			'intro_eyebrow'     => 'SMP',
			'intro_heading'     => 'What is a Scalp Micropigmentation',
			'intro_image'       => 'services/scalp-micropigmentation-smp-intro.png',
			'intro_image_alt'   => '',
			'intro_body'        => array(
				'Scalp Micropigmentation (SMP) is a non-surgical cosmetic procedure designed to create the appearance of a fuller head of hair by applying specialized pigments to the scalp. It is often referred to as a &ldquo;hair tattoo&rdquo; but is far more precise and detailed than traditional tattooing.',
			),
			'benefits_eyebrow'  => 'Benefits',
			'benefits_heading'  => 'Why Choose Scalp Micropigmentation',
			'benefits_image'    => 'services/scalp-micropigmentation-smp-benefits.png',
			'benefits_image_alt'=> '',
			'benefits_list'     => array(
				'Non-Invasive',
				'Immediate Results',
				'Long-Lasting',
				'Long-Lasting',
				'Customizable',
			),
			'faqs'              => array(
				array(
					'q' => 'How Does SMP Work?',
					'a' => 'SMP involves depositing tiny, layered dots of pigment into the scalp using microneedles to mimic the appearance of hair follicles. This technique creates the illusion of hair density for individuals with thinning hair or complete hair loss. SMP can also camouflage scars from hair transplant surgeries or injuries.',
				),
				array(
					'q' => 'Who Benefits from SMP?',
					'a' => 'SMP is suitable for a wide range of individuals, including patients with Male Pattern Baldness, scars, Women with hair loss, and thinning hair.',
				),
				array(
					'q' => 'Does SMP look natural?',
					'a' => 'Yes, when performed by a skilled professional, SMP mimics natural hair follicles and seamlessly blends with your existing hair, creating a realistic appearance.',
				),
				array(
					'q' => 'How long does SMP last?',
					'a' => 'SMP results typically last 3-5 years. Over time, the pigments may fade slightly, requiring a touch-up to maintain the appearance.',
				),
				array(
					'q' => 'How many sessions are required?',
					'a' => 'SMP usually requires 3 or more sessions, spaced several weeks apart, to build the desired density and achieve a natural look.',
				),
			),
		),

	);

	return isset( $services[ $slug ] ) ? $services[ $slug ] : null;
}
