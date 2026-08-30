<?php
/**
 * Content for individual case-study detail pages, keyed by page slug.
 * Copy, images, and video embeds ported verbatim from the live site
 * (mollurahairtransplant.com/case-study/{slug}/) -- rendered by
 * patterns/case-study-detail.php via the shared "Case Study" page
 * template, same data-driven mechanism as Service Detail / Gallery / Legal.
 * Banner images reuse the existing case-studies index thumbnails.
 *
 * 'stats' is a "Patient Snapshot" summary rendered as a strip of callouts
 * under the banner -- every value is lifted directly from this same
 * verbatim copy (or the case title itself), never invented. A stat is
 * omitted entirely for a case where the source copy doesn't state it
 * (e.g. no Norwood classification given) rather than guessing.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mollura_case_study_data( $slug ) {
	$studies = array(

		'2200-hair-graft-hair-transplant-case-study-norwood-class-5' => array(
			'banner_title' => '2,200 Hair Graft Hair Transplant Case Study &ndash; Norwood Class 5',
			'banner_image' => 'learn/case-study-1.png',
			'intro_image'  => 'case-studies/2200-hair-graft-hair-transplant-case-study-norwood-class-5-a.png',
			'stats'        => array(
				array( 'label' => 'Age', 'value' => '25' ),
				array( 'label' => 'Classification', 'value' => 'Norwood 5' ),
				array( 'label' => 'Grafts', 'value' => '2,200' ),
				array( 'label' => 'Technique', 'value' => 'FUT' ),
			),
			'intro_body'   => array(
				'A 25 year old male patient consulted with Dr. Mollura after experiencing significant hair loss for such young man.',
			),
			'rows'         => array(
				array(
					'text'  => array(
						'The patient was a Norwood Hair Loss Classification 5 with minimal vellus hair throughout the top of his scalp. After consultation with Dr. Mollura they determined that Dr. Mollura would transplant 2,200 hair grafts using FUT linear strip harvesting. The donor tissue was dissected under microscope to assure that each graft was not transected and then the grafts were sorted by the number of hairs in each graft.',
						'The donor excision site was closed using trichophytic donor closure. Trichophytic donor closure technique is a type of &#8220;overlapping&#8221; technique that makes it possible for your surgical wound&#8217;s edges to overlap each other. This results in hair growing directly through the linear donor scar, which can dramatically improve coverage of the donor scar in those with short hair.',
					),
					'image' => 'case-studies/2200-hair-graft-hair-transplant-case-study-norwood-class-5-b.png',
				),
				array(
					'text'  => array(
						'The patient was very pleased with the result and Dr. Mollura prescribed hair loss maintenance medication.',
					),
					'image' => 'case-studies/2200-hair-graft-hair-transplant-case-study-norwood-class-5-c.png',
				),
			),
		),

		'patient-video-testimonial' => array(
			'banner_title' => 'Patient Video Testimonial',
			'banner_image' => 'learn/case-study-2.png',
			'intro_video'  => 'https://www.youtube.com/embed/vXyZYl4GIf4',
			'stats'        => array(
				array( 'label' => 'Age', 'value' => '56' ),
				array( 'label' => 'Classification', 'value' => 'Norwood 5A' ),
				array( 'label' => 'Grafts', 'value' => '2,855' ),
				array( 'label' => 'Technique', 'value' => 'FUT' ),
			),
			'intro_body'   => array(
				'This 56-year-old patient was a Norwood Hair Loss Classification 5a. When he came to Dr. Mollura for a consultation he was very unhappy with his appearance. His hair loss had impacted his self-confidence. Dr. Mollura performed a FUT strip harvest hair transplant procedure. He transplanted 2,855 hair grafts.',
				'He is so happy with his result that he wants to share his experience and results with others.',
			),
			'rows'         => array(),
		),

		'hair-restored-along-the-edges-from-traction-alopecia' => array(
			'banner_title' => 'Hair Restored Along the Edges from Traction Alopecia',
			'banner_image' => 'learn/case-study-3.png',
			'intro_image'  => 'case-studies/hair-restored-along-the-edges-from-traction-alopecia-a.png',
			'stats'        => array(
				array( 'label' => 'Age', 'value' => '37' ),
				array( 'label' => 'Condition', 'value' => 'Traction Alopecia' ),
				array( 'label' => 'Grafts', 'value' => '2,032' ),
				array( 'label' => 'Technique', 'value' => 'FUT' ),
			),
			'intro_body'   => array(
				'A 37-year-old female diagnosed with traction alopecia underwent a FUT hair transplant procedure with Dr. Mollura. She received 2,032 grafts to address her temporal zones and hairline. Nine months post-procedure, the patient returned to us for a follow-up review.',
			),
			'rows'         => array(
				array(
					'text'  => array(
						'The after photos show significant improvement, and she has discontinued hair braiding. She is very satisfied with the results of her hair transplant and does not require hair loss maintenance medication.',
					),
					'image' => 'case-studies/hair-restored-along-the-edges-from-traction-alopecia-b.png',
				),
			),
		),

		'frontal-hairline-restoration-with-fue-hair-transplant-prp' => array(
			'banner_title' => 'Frontal Hairline Restoration with FUE Hair Transplant + PRP',
			'banner_image' => 'learn/case-study-4.png',
			'intro_image'  => 'case-studies/frontal-hairline-restoration-with-fue-hair-transplant-prp-a.png',
			'stats'        => array(
				array( 'label' => 'Age', 'value' => '49' ),
				array( 'label' => 'Classification', 'value' => 'Norwood 4' ),
				array( 'label' => 'Grafts', 'value' => '2,419' ),
				array( 'label' => 'Technique', 'value' => 'FUE + PRP' ),
			),
			'intro_body'   => array(
				'This 49-year-old male came to Mollura Medical Hair Restoration for consultation with Dr. Mollura with significant Norwood class 4 hair loss. He was diagnosed with male androgenetic alopecia (MAA), and Dr. Mollura recommended the FUE hair transplant procedure since the patient desired a short haircut on the sides and back. Dr. Mollura harvested 2,419 grafts via FUE to restore his hairline and temporal zones.',
			),
			'rows'         => array(
				array(
					'text' => array(
						'Twelve months after the procedure, the patient returned for a follow-up review. The after photo shown here was taken at that time.',
						'The patient experienced significant improvement in his hairline and mid-scalp density. In the months following his procedure, he also had 3 PRP (Platelet-Rich Plasma) Treatments with Dr. Mollura and was prescribed finasteride to maintain his hair density.',
					),
				),
			),
		),

		'2320-hair-grafts-transplanted-to-restore-hairline' => array(
			'banner_title' => '2,320 Hair Grafts Transplanted to Restore Hairline',
			'banner_image' => 'learn/case-study-5.png',
			'intro_image'  => 'case-studies/2320-hair-grafts-transplanted-to-restore-hairline-a.png',
			'stats'        => array(
				array( 'label' => 'Age', 'value' => '52' ),
				array( 'label' => 'Grafts', 'value' => '2,320' ),
				array( 'label' => 'Technique', 'value' => 'FUT' ),
			),
			'intro_body'   => array(
				'This 52-year-old male underwent an FUT hair transplant with Dr. Mollura to add density to his hair line and mid-scalp. The patient had 2,320 grafts transplanted. The patient had been taking a daily dose of Finasteride before seeing us and continues to take it for hair maintenance. The after photo was taken 15 months after the procedure.',
			),
			'rows'         => array(
				array(
					'text'  => array(),
					'quote' => array(
						'text'        => 'Hi everybody I just wanted to leave a review about the awesome job Dr. Mollura did on my head. Yes, hair transplants work. Service and price were on point and now I have a full head of hair! Thank you for your help.',
						'attribution' => 'Patient Review',
					),
				),
			),
		),

		'norwood-class-5-hair-transplant-with-3900-hair-grafts' => array(
			'banner_title' => 'Norwood Class 5 Hair Transplant with 3,900 Hair Grafts',
			'banner_image' => 'learn/case-study-6.png',
			'intro_image'  => 'case-studies/norwood-class-5-hair-transplant-with-3900-hair-grafts-a.png',
			'stats'        => array(
				array( 'label' => 'Age', 'value' => '35' ),
				array( 'label' => 'Classification', 'value' => 'Norwood 5' ),
				array( 'label' => 'Grafts', 'value' => '3,900' ),
				array( 'label' => 'Technique', 'value' => 'FUT' ),
			),
			'intro_body'   => array(
				'This 35-year-old male patient had severe hair loss for his age. He was forthcoming about how his hair loss had negatively affected his self-confidence and image. He underwent a large FUT hair transplant with Dr. Mollura to add density from his hairline back through the crown.',
			),
			'rows'         => array(
				array(
					'text' => array(
						'The patient had very good density in his donor area. As a result, Dr. Mollura transplanted about 3,900 grafts. The patient returns to us twice per year for PRP treatments and continues to take Finasteride for preventative hair maintenance. The after photo was taken 14 months after the procedure.',
					),
				),
			),
		),

		'short-hair-hair-transplant-with-fue-procedure' => array(
			'banner_title' => 'Short Hair Hair Transplant with FUE Procedure',
			'banner_image' => 'learn/case-study-7.png',
			'intro_image'  => 'case-studies/short-hair-hair-transplant-with-fue-procedure-a.png',
			'stats'        => array(
				array( 'label' => 'Age', 'value' => '40' ),
				array( 'label' => 'Grafts', 'value' => '1,212' ),
				array( 'label' => 'Technique', 'value' => 'FUE' ),
			),
			'intro_body'   => array(
				'This 40-year-old male patient had a FUE hair transplant with Dr. Mollura to rebuild his hairline. Dr. Mollura recommended an FUE transplant because the patient likes to wear short hair. The advantage of the FUE procedure is that there is no linear scar in the donor area.',
			),
			'rows'         => array(
				array(
					'text'  => array(
						'This allowed the patient to wear his hair short without worrying about a linear scar appearing visible. Dr. Mollura transplanted 1,212 grafts. Follow-up pictures were taken 11 months after the procedure.',
					),
					'image' => 'case-studies/short-hair-hair-transplant-with-fue-procedure-b.png',
				),
			),
		),

		'2-session-norwood-hair-loss-class-3-fut-hair-transplant' => array(
			'banner_title' => '2 Session Norwood Hair Loss Class 3 FUT Hair Transplant',
			'banner_image' => 'learn/case-study-8.png',
			'intro_image'  => 'case-studies/2-session-norwood-hair-loss-class-3-fut-hair-transplant-a.png',
			'stats'        => array(
				array( 'label' => 'Age', 'value' => '49' ),
				array( 'label' => 'Classification', 'value' => 'Norwood 3' ),
				array( 'label' => 'Grafts', 'value' => '1,656 + 1,850' ),
				array( 'label' => 'Technique', 'value' => 'FUT + FUE' ),
			),
			'intro_body'   => array(
				'A 49-year-old male patient underwent two hair transplant procedures performed 15 months apart at Mollura Medical Hair Restoration. The first transplant involved 1,656 grafts transplanted using the FUT method.',
			),
			'rows'         => array(
				array(
					'text'  => array(
						'Subsequently, the patient received a second transplant, transplanting 1,850 grafts with the FUE technique. Follow-up pictures taken 8 months after the second procedure revealed significant improvement to hair density and coverage in the temporal zones, hairline, mid-scalp, and crown.',
						'Patients achieve full results from the FUE about 12 months after the procedure. The patient uses Finasteride and Mollura Medical&#8217;s Laser Cap therapy device every day to help maintain his hair density. He also returns to our clinic twice a year for PRP treatment.',
					),
					'image' => 'case-studies/2-session-norwood-hair-loss-class-3-fut-hair-transplant-b.png',
				),
			),
		),

		'african-american-hair-transplant-results' => array(
			'banner_title' => 'African American Hair Transplant Results',
			'banner_image' => 'learn/case-study-9.png',
			'intro_image'  => 'case-studies/african-american-hair-transplant-results-a.png',
			'stats'        => array(
				array( 'label' => 'Age', 'value' => '41' ),
				array( 'label' => 'Classification', 'value' => 'Norwood 6' ),
				array( 'label' => 'Grafts', 'value' => '2,689 + 2,528' ),
				array( 'label' => 'Technique', 'value' => 'FUT + FUE' ),
			),
			'intro_body'   => array(
				'A 41-year-old male patient underwent two hair transplant procedures performed 5 years apart at Mollura Medical Hair Restoration. He presented himself to Dr. Mollura as a mature Norwood hair loss 6 classification. Dr. Mollura recommended starting with the front half of his scalp and creating a natural hairline. The first transplant involved 2,689 grafts transplanted using the FUT method.',
			),
			'rows'         => array(
				array(
					'text'  => array(
						'Subsequently, the patient received a second transplant, transplanting 2,528 grafts with the FUE technique to add density to the mid-scalp and crown. Follow-up pictures taken 12 months after the second procedure revealed significant improvement in hair density and coverage in the hairline, mid-scalp, and crown.',
						'Typically, patients achieve full results from the transplant about 12 months after the procedure. To help maintain his hair density, the patient uses oral Finasteride every day and receives 2 PRP Treatments per year.',
					),
					'image' => 'case-studies/african-american-hair-transplant-results-b.png',
				),
			),
		),

		'fue-hair-transplant-to-fill-temporal-hairline' => array(
			'banner_title' => 'FUE Hair Transplant To Fill Temporal Hairline',
			'banner_image' => 'learn/case-study-10.png',
			'intro_image'  => 'case-studies/fue-hair-transplant-to-fill-temporal-hairline-a.png',
			'stats'        => array(
				array( 'label' => 'Age', 'value' => '48' ),
				array( 'label' => 'Classification', 'value' => 'Norwood 3' ),
				array( 'label' => 'Grafts', 'value' => '1,065 + 1,114' ),
				array( 'label' => 'Technique', 'value' => 'FUE' ),
			),
			'intro_body'   => array(
				'This 48-year-old male was experiencing frontal hair loss in the temporal zones (Norwood Class 3). He came to our Long Island, NY, offices for a consultation about how best to treat his genetic hair loss. During his consultation, Dr. Mollura prescribed oral finasteride to help minimize future hair loss and performed an FUE donor harvest hair transplant of 1,065 hair grafts to reestablish his more youthful hairline. Over the next few years, the patient also had 4 platelet-rich plasma (PRP) Treatments to improve healing from the first procedure and maintain his existing hair density and health.',
			),
			'rows'         => array(
				array(
					'text'  => array(
						'Subsequently, the patient received a second FUE transplant, transplanting 1,114 grafts to add more density to the temporal zones. Follow-up pictures taken 8 months after the second procedure revealed significant hair density and coverage improvement. Patients typically achieve total hair growth results from a hair transplant procedure 12 months post-op.',
						'He continues to use finasteride daily and is very satisfied with his full and natural results. Because he had a FUE procedure, he could also maintain a very short haircut along the sides and back of his scalp with no evidence of having a procedure.',
					),
					'image' => 'case-studies/fue-hair-transplant-to-fill-temporal-hairline-b.png',
				),
			),
		),

		'hair-restoration-journey' => array(
			'banner_title' => 'Hair Restoration Journey',
			'banner_image' => 'learn/case-study-11.png',
			'intro_image'  => 'case-studies/hair-restoration-journey-a.png',
			'stats'        => array(
				array( 'label' => 'Age', 'value' => '49 &rarr; 62' ),
				array( 'label' => 'Classification', 'value' => 'Norwood 5A' ),
				array( 'label' => 'Grafts', 'value' => '2,000 + 2,416' ),
				array( 'label' => 'Technique', 'value' => 'FUT' ),
			),
			'intro_body'   => array(
				'This patient, at the age of 49, initially sought treatment for hair loss with Dr. Mollura in 2009. The patient was a 5A on the Norwood hair loss scale. At the time, the patient opted for a Follicular Unit Transplantation (FUT). Dr. Mollura transplanted approximately 2,000 grafts to address his hair loss concerns.',
				'During the patient&#8217;s initial evaluation, Dr. Mollura discussed the importance of hair loss maintenance. As a result, the patient started a daily regimen of finasteride to manage his hair loss, a practice he has maintained to the present day.',
			),
			'rows'         => array(
				array(
					'text'  => array(
						'In January 2022, at 62, the patient visited Mollura Medical Hair Restoration for his second procedure, once again under the expertise of Dr. Mollura. The patient underwent another FUT procedure that targeted his hairline and crown area.',
						'Dr. Mollura transplanted 2,416 grafts to add density and enhance his natural-looking hair.',
					),
					'image' => 'case-studies/hair-restoration-journey-b.png',
				),
				array(
					'text'  => array(
						'Throughout his treatment journey, this patient has remained dedicated to maintaining his hair health, utilizing finasteride as a key component of his hair loss maintenance regimen.',
						'With each procedure, he has witnessed remarkable progress in restoring his hairline and overall hair density. He has achieved results that continue to positively impact his confidence and quality of life.',
					),
					'image' => 'case-studies/hair-restoration-journey-c.png',
				),
				array(
					'text'  => array(
						'Watch the patient describe his hair restoration experience in his own words.',
					),
					'video' => 'https://www.youtube.com/embed/hFAJ-hN8u38',
				),
			),
		),

	);
	return $studies[ $slug ] ?? null;
}
