<?php
/**
 * SEO title/description ported verbatim from the live site
 * (mollurahairtransplant.com), one entry per page slug in
 * mollura_page_registry(). Seeded into Rank Math post meta by
 * mollura_provision_seo() in inc/seo-provision.php.
 *
 * Ported as-is for parity with the live site: most descriptions here are
 * the live site's own auto-generated fallbacks (a short all-caps heading,
 * or a content excerpt truncated with a trailing "[...]") rather than
 * hand-written meta descriptions -- only a handful of pages have real ones.
 * Rewriting them is a separate content task, not part of this port.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mollura_homepage_seo() {
	return array(
		'title'       => 'Mollura Hair - Mollura Medical Hair Restoration',
		'description' => 'Mollura Medical Hair Restoration is one of Long Island’s top clinics for surgical and non-surgical hair loss treatments including FUE, FUT, supplemental PRP, hair loss medications, and more. Our knowledgeable team will help you regain the hair you deserve.',
	);
}

function mollura_seo_registry() {
	return array(
		'2-session-norwood-hair-loss-class-3-fut-hair-transplant' => array( 'title' => '2 Session Norwood Hair Loss Class 3 FUT Hair Transplant - Mollura Medical Hair Restoration', 'description' => 'A 49-year-old male patient underwent two hair transplant procedures performed 15 months apart at Mollura Medical Hair Restoration. The first transplant involved 1,656 grafts transplanted using the FUT method. Subsequently, the patient received a second transplant, transplanting 1,850 grafts with the FUE technique. […]' ),
		'2200-hair-graft-hair-transplant-case-study-norwood-class-5' => array( 'title' => '2,200 Hair Graft Hair Transplant Case Study – Norwood Class 5 - Mollura Medical Hair Restoration', 'description' => 'A 25 year old male patient consulted with Dr. Mollura after experiencing significant hair loss for such young man. The patient was a Norwood Hair Loss Classification 5 with minimal vellus hair throughout the top of his scalp. [...]' ),
		'2320-hair-grafts-transplanted-to-restore-hairline' => array( 'title' => '2,320 Hair Grafts Transplanted to Restore Hairline - Mollura Medical Hair Restoration', 'description' => 'This 52-year-old male underwent an FUT hair transplant with Dr. Mollura to add density to his hair line and mid-scalp. The patient had 2,320 grafts transplanted. The patient had been taking a daily dose of Finasteride before seeing us [...]' ),
		'about-us' => array( 'title' => 'About Us - Mollura Medical Hair Restoration', 'description' => 'Experienced Hair Surgeon' ),
		'african-american-hair-restoration' => array( 'title' => 'African American Hair Restoration - Mollura Medical Hair Restoration', 'description' => 'AFRICAN AMERICAN HAIR RESTORATION' ),
		'african-american-hair-transplant-results' => array( 'title' => 'African American Hair Transplant Results - Mollura Medical Hair Restoration', 'description' => 'A 41-year-old male patient underwent two hair transplant procedures performed 5 years apart at Mollura Medical Hair Restoration. He presented himself to Dr. Mollura as a mature Norwood hair loss 6 classification. [...]' ),
		'alopecia-types-and-hair-transplant-considerations' => array( 'title' => 'Alopecia: Types and Hair Transplant Considerations - Mollura Medical Hair Restoration', 'description' => 'HAIR LOSS SOLUTIONS' ),
		'book-a-consultation' => array( 'title' => 'Book a Consultation - Mollura Medical Hair Restoration', 'description' => 'MOLLURA MEDICAL HAIR RESTORATION' ),
		'case-studies' => array( 'title' => 'Case Studies - Mollura Medical Hair Restoration', 'description' => 'TESTIMONIALS' ),
		'causes-of-hair-loss' => array( 'title' => 'Causes of Hair Loss - Mollura Medical Hair Restoration', 'description' => 'Causes of Hair' ),
		'contact' => array( 'title' => 'Contact - Mollura Medical Hair Restoration', 'description' => 'MOLLURA MEDICAL HAIR RESTORATION' ),
		'cookie-policy' => array( 'title' => 'Cookie Policy - Mollura Medical Hair Restoration', 'description' => 'This Cookie Policy explains how Mollura Medical Hair Restoration (“we”, “us” and “ours”) uses cookies and similar technologies to recognize you when you visit' ),
		'crown-hair-transplant' => array( 'title' => 'Crown Hair Transplant - Mollura Medical Hair Restoration', 'description' => 'Crown hair transplants require precise graft angulation to match the scalp\'s natural spiral pattern. Learn how Dr. Mollura approaches vertex restoration and schedule a consultation.' ),
		'directions' => array( 'title' => 'Directions - Mollura Medical Hair Restoration', 'description' => 'MOLLURA MEDICAL HAIR RESTORATION' ),
		'eyebrow-hair-restoration' => array( 'title' => 'Eyebrow Hair Restoration - Mollura Medical Hair Restoration', 'description' => 'HAIR LOSS SOLUTIONS' ),
		'eyebrow-hair-transplant-before-and-after' => array( 'title' => 'Eyebrow Hair Transplant Before and After - Mollura Medical Hair Restoration', 'description' => 'MOLLURA MEDICAL HAIR RESTORATION' ),
		'facial-hair-transplants' => array( 'title' => 'Facial Hair Transplants - Mollura Medical Hair Restoration', 'description' => 'FACIAL HAIR TRANSPLANT' ),
		'fda-approved-medications-for-hair-loss' => array( 'title' => 'FDA Approved Medications For Hair Loss - Mollura Medical Hair Restoration', 'description' => 'MEDICATIONS FOR HAIR LOSS' ),
		'female-hair-loss-treatment' => array( 'title' => 'Female Hair Loss Treatment - Mollura Medical Hair Restoration', 'description' => 'Hair loss for women can be treated with both surgical and non-surgical treatments. Hair Transplants are the most effective option for adding significant hair' ),
		'female-hair-transplant-before-and-after' => array( 'title' => 'Female Hair Transplant Before and After - Mollura Medical Hair Restoration', 'description' => 'MOLLURA MEDICAL HAIR RESTORATION' ),
		'financing' => array( 'title' => 'Financing - Mollura Medical Hair Restoration', 'description' => 'FINANCING' ),
		'frontal-hairline-restoration-with-fue-hair-transplant-prp' => array( 'title' => 'Frontal Hairline Restoration with FUE Hair Transplant + PRP - Mollura Medical Hair Restoration', 'description' => 'This 49-year-old male came to Mollura Medical Hair Restoration for consultation with Dr. Mollura with significant Norwood class 4 hair loss. He was diagnosed with male androgenetic alopecia (MAA), and Dr. Mollura recommended the FUE hair transplant procedure [...]' ),
		'fue-hair-transplant' => array( 'title' => 'FUE Hair Transplant on Long Island | Mollura Medical', 'description' => 'FUE hair transplant on Long Island at Mollura Medical — minimally invasive follicular unit extraction. Schedule a consultation.' ),
		'fue-hair-transplant-before-and-after' => array( 'title' => 'FUE Hair Transplant Before and After - Mollura Medical Hair Restoration', 'description' => 'MOLLURA MEDICAL HAIR RESTORATION' ),
		'fue-hair-transplant-to-fill-temporal-hairline' => array( 'title' => 'FUE Hair Transplant To Fill Temporal Hairline - Mollura Medical Hair Restoration', 'description' => 'This 48-year-old male was experiencing frontal hair loss in the temporal zones (Norwood Class 3). He came to our Long Island, NY, offices for a consultation about how best to treat his genetic hair loss. [...]' ),
		'fue-vs-fut' => array( 'title' => 'FUE vs FUT - Mollura Medical Hair Restoration', 'description' => 'MOLLURA MEDICAL HAIR RESTORATION' ),
		'fut-hair-transplant' => array( 'title' => 'FUT Hair Transplant Long Island | Mollura Hair Restoration', 'description' => 'Considering FUT hair transplant? Mollura\'s Long Island specialists offer natural results. Schedule your consultation today.' ),
		'fut-hair-transplant-before-and-after' => array( 'title' => 'FUT Hair Transplant Before and After - Mollura Medical Hair Restoration', 'description' => 'MOLLURA MEDICAL HAIR RESTORATION' ),
		'hair-restoration-journey' => array( 'title' => 'Hair Restoration Journey - Mollura Medical Hair Restoration', 'description' => 'CASE STUDIES' ),
		'hair-restoration-services' => array( 'title' => 'Hair Restoration Services - Mollura Medical Hair Restoration', 'description' => 'OUR SERVICES' ),
		'hair-restored-along-the-edges-from-traction-alopecia' => array( 'title' => 'Hair Restored Along the Edges from Traction Alopecia - Mollura Medical Hair Restoration', 'description' => 'A 37-year-old female diagnosed with traction alopecia underwent a FUT hair transplant procedure with Dr. Mollura. She received 2,032 grafts to address her temporal zones and hairline. Nine months post-procedure, the patient returned to us for a follow-up review. [...]' ),
		'hair-transplant-faqs' => array( 'title' => 'Hair Transplant FAQ’s - Mollura Medical Hair Restoration', 'description' => 'At your initial consultation with Mollura Medical Hair Restoration, you’ll review the cause of your hair loss, your age, and your expectations. Then you will' ),
		'hair-transplant-repair-corrective-surgery' => array( 'title' => 'Hair Transplant Repair (Corrective Surgery) - Mollura Medical Hair Restoration', 'description' => 'CORRECTIVE SURGERY' ),
		'hairline-design' => array( 'title' => 'Hairline Design - Mollura Medical Hair Restoration', 'description' => 'MOLLURA MEDICAL HAIR RESTORATION' ),
		'laser-hair-therapy-device' => array( 'title' => 'Laser Hair Therapy Device - Mollura Medical Hair Restoration', 'description' => 'LASER HAIR THERAPY' ),
		'male-hair-transplant-before-and-after' => array( 'title' => 'Male Hair Transplant Before and After - Mollura Medical Hair Restoration', 'description' => 'MOLLURA MEDICAL HAIR RESTORATION' ),
		'medical-disclaimer' => array( 'title' => 'Medical Disclaimer - Mollura Medical Hair Restoration', 'description' => 'The content on this website, including text, images, videos, and other materials, is provided for informational purposes only. It is not intended to be, and' ),
		'meet-the-team' => array( 'title' => 'Meet the Team - Mollura Medical Hair Restoration', 'description' => 'MEET THE TEAM' ),
		'non-surgical-hair-restoration' => array( 'title' => 'Non-Surgical Hair Restoration - Mollura Medical Hair Restoration', 'description' => 'FUE HAIR TRANSPLANT' ),
		'norwood-class-5-hair-transplant-with-3900-hair-grafts' => array( 'title' => 'Norwood Class 5 Hair Transplant with 3,900 Hair Grafts - Mollura Medical Hair Restoration', 'description' => 'This 35-year-old male patient had severe hair loss for his age. He was forthcoming about how his hair loss had negatively affected his self-confidence and image. He underwent a large FUT hair transplant with Dr. Mollura to add density from his hairline back [...]' ),
		'patient-video-testimonial' => array( 'title' => 'Patient Video Testimonial - Mollura Medical Hair Restoration', 'description' => 'This 56-year-old patient was a Norwood Hair Loss Classification 5a. When he came to Dr. Mollura for a consultation he was very unhappy with his appearance. His hair loss had impacted his self-confidence. [...]' ),
		'privacy-policy' => array( 'title' => 'Privacy Policy - Mollura Medical Hair Restoration', 'description' => 'Thank you for choosing to be part of our community at Mollura Medical Hair Restoration. (“company”, “we”, “us”, or “our”). We are committed to protecting your' ),
		'prp-therapy' => array( 'title' => 'PRP Therapy - Mollura Medical Hair Restoration', 'description' => 'PRP THERAPY' ),
		'scalp-micropigmentation-smp' => array( 'title' => 'Scalp Micropigmentation (SMP) - Mollura Medical Hair Restoration', 'description' => 'SMP' ),
		'scar-repair' => array( 'title' => 'Scar Repair - Mollura Medical Hair Restoration', 'description' => 'HAIR LOSS SOLUTIONS' ),
		'short-hair-hair-transplant-with-fue-procedure' => array( 'title' => 'Short Hair Hair Transplant with FUE Procedure - Mollura Medical Hair Restoration', 'description' => 'This 40-year-old male patient had a FUE hair transplant with Dr. Mollura to rebuild his hairline. Dr. Mollura recommended an FUE transplant because the patient likes to wear short hair. [...]' ),
		'sitemap' => array( 'title' => 'Sitemap - Mollura Medical Hair Restoration', 'description' => null ),
		'terms-of-service' => array( 'title' => 'Terms of Service - Mollura Medical Hair Restoration', 'description' => 'Last updated 6/24/2026' ),
		'testimonials' => array( 'title' => 'Testimonials - Mollura Medical Hair Restoration', 'description' => 'MOLLURA MEDICAL HAIR RESTORATION' ),
		'topical-hair-loss-serum' => array( 'title' => 'Topical Hair Loss Serum - Mollura Medical Hair Restoration', 'description' => 'HAIR LOSS SERUM' ),
		'transplant-restoration-video-faqs' => array( 'title' => 'Transplant & Restoration Video FAQs - Mollura Medical Hair Restoration', 'description' => null ),
		'tricomin-clinical' => array( 'title' => 'TRICOMIN CLINICAL - Mollura Medical Hair Restoration', 'description' => 'MOLLURA MEDICAL HAIR RESTORATION' ),
	);
}
