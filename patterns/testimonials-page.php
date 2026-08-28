<?php
/**
 * "Testimonials" page. Copy and images ported verbatim from the live
 * site (mollurahairtransplant.com/testimonials/) -- the full list of
 * 13 real patient reviews, distinct from the 4-quote scrolling wall
 * reused on other pages (template-parts/testimonials.php).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$img = get_template_directory_uri() . '/assets/images/about/';

$mollura_reviews = array(
	array( 'quote' => 'I have two words for you, "No Hat!" Thanks so much for all your efforts and support in helping my husband achieve a wonderful and luxurious head of hair. Not only are you exceptional in your field of hair transplantation you are also so encouraging with your very personal approach in achieving your patients desired goals.', 'name' => 'Linda C' ),
	array( 'quote' => 'I would like to take the opportunity to thank you both professionally and personally for the mannerisms in which you and your staff members handled my hair transplant procedure today. The results of the work you have done is remarkable and very gratifying to me.', 'name' => 'James A' ),
	array( 'quote' => "Dr. Mollura is a true pro. Had a transplant done two years ago and the work he did on my hairline was masterful. He was very communicative through the whole procedure and there for me after the procedure as well. Such a good job, people can't even tell I had anything done. Highly Recommend.", 'name' => 'Frank L.' ),
	array( 'quote' => 'Over the past six years, I&rsquo;ve undergone two procedures with Dr. Mollura&mdash;one focusing on the front and the other on the back&mdash;and I couldn&rsquo;t be happier with the results. The outcome has been so transformative, and I truly appreciate the ongoing care and support he provides. If you&rsquo;re considering hair restoration or any kind of treatment plan, Dr. Mollura is the person you can trust to deliver exceptional results.', 'name' => 'John F.' ),
	array( 'quote' => 'I was completely satisfied with my results. I appreciated the professionalism and efficiency of everyone in this office. I felt Dr Mullora put time and care into delivering the best results in a very safe way. I healed faster than I expected and I appreciate his experience in making good decisions. The technicians were fantastic, fast and thorough!! The facility was clean. I highly recommend!', 'name' => 'Michael A' ),
	array( 'quote' => "Dr Mollura and his staff were wonderful. He made me feel very comfortable on every visit to his office. I'm very impressed with his surgical skills, compassion, caring and professionalism. I feel fortunate to have met him. Thank you.", 'name' => 'Albert M.' ),
	array( 'quote' => 'Dr. Mollura is a great doctor who explains the process thoroughly, and makes it his mission to give you the best treatment for your specific circumstance.', 'name' => 'Daniel' ),
	array( 'quote' => "I am rarely moved in a positive way that I feel compelled to go online and write a review- either positive or negative. However, I can't say enough great things about the experience I had at Mollura Medical. From the entire staff to Dr. Mollura, everyone was fantastic. Dr. Mollura was incredibly helpful in discussing my procedure and providing me with all of the information I needed to make a informed decision. His bedside manner is the best I have ever experienced - and his work is even better. His follow-up, I highly recommend him and his work.", 'name' => 'A Woz.' ),
	array( 'quote' => 'I met Dr. Mollura 14 years ago. After researching many doctors, I determined that Dr. Mollura was the best. The surgery was a huge success- so I definitely made the right choice in doctors! It came out great! Last year, I decided to do a bit of a touch up, and was absolutely thrilled that Dr. Mollura was still in practice. The second surgery was also amazing. Dr. Mollura is the best hair restoration surgeon in the business. If you are looking to possibly have a hair restoration procedure done-you simply must give Dr. Mollura a call and make a consultation with him. He will explain the entire procedure with absolutely no pressure. He is truly an artist. He also is a board certified surgeon, at most places, they are just technicians. So like I said before, do yourself a favor and give the good doctor a call. You won&rsquo;t be disappointed.', 'name' => 'Bill B.' ),
	array( 'quote' => "Dr. Tony is the best hands down!! During consultation, he gave me a direct, honest and easy to understand breakdown of my hair issues and treatment options. No pressure to undertake any expensive procedure.....Just plain straightforward analysis. Honestly, after my consultation, I felt like working for Dr. Tony free of charge. I wanted to give him a hug like a big brother. Rarely these days do you come across a most caring and honest professional who genuinely cares about their client. I can&rsquo;t sing his praises enough. I highly recommend Dr. Tony Mollura!", 'name' => 'Trish O' ),
	array( 'quote' => 'Hi everybody I just wanted to leave a review about the awesome job Dr. Mollura did on my head. Yes hair transplants work. Service and price were on point and now I have a full head of hair. Thank you for your help.', 'name' => 'Matt W.' ),
	array( 'quote' => "I just had a hair transplant procedure with Dr. Mollura and I honesty cant say enough about him, his staff and his magical hands. He is professional, caring and honest - and his staff is top notch! If you are thinking of doing it look no further than Mollura Hair Tranplant!", 'name' => 'Barbie S.' ),
	array( 'quote' => 'My journey to seek hair treatment was a long one, and I consulted with two other hair transplant companies before finally connecting with Dr. Mollura. From our first conversation, his friendly demeanor and honest approach made all the difference. He clearly explained what to expect, and it was evident that I was dealing with someone with a lifetime of expertise in his field.', 'name' => 'Anonymous' ),
);
?>
<main id="main">

	<?php
	get_template_part( 'template-parts/inner-banner', null, array(
		'eyebrow'   => 'Mollura Medical Hair Restoration',
		'title'     => 'Testimonials',
		'image'     => $img . 'testimonials-banner.png',
		'image_alt' => '',
		'cta_text'  => 'Contact Us',
		'cta_href'  => '/contact/',
	) );
	?>

	<!-- Intro -->
	<section class="mol-content-section">
		<div class="mol-container mol-split">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'testimonials-intro.png' ); ?>" alt="">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">Mollura Medical Hair Restoration</span>
				<h2 class="mol-h2">Testimonials</h2>
				<p>We value patient feedback and knowing that our patients are happy and satisfied with both their experience and results, and we know you appreciate it too. A lot goes into making the decision to get a <strong>hair restoration procedure</strong> and hearing others&rsquo; objective thoughts about our practice and results can help with the decision process.<br>If you haven&rsquo;t already, we also invite you to check out our before-and-after galleries as well. Both our <strong>testimonials</strong> and before-and-after images illustrate the results and experience you will receive from Mollura Medical Hair Restoration.</p>
				<p>We look forward to meeting you and helping you in your hair restoration journey. To get started, contact us today.</p>
			</div>
		</div>
	</section>

	<!-- Full testimonials list -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<div class="mol-testimonial-grid">
				<?php foreach ( $mollura_reviews as $mollura_review ) : ?>
					<blockquote class="mol-tcard mol-tcard--light">
						<p class="mol-tcard__quote"><?php echo wp_kses_post( $mollura_review['quote'] ); ?></p>
						<cite class="mol-tcard__name">&mdash; <?php echo esc_html( $mollura_review['name'] ); ?></cite>
					</blockquote>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
