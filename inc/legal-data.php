<?php
/**
 * Data for the legal pages (Cookie Policy, Privacy Policy, Medical
 * Disclaimer). Body copy ported verbatim from the live site, stored as
 * raw trusted markup (nowdoc) and rendered as-is by patterns/legal.php
 * -- no per-page pattern files needed, same data-driven mechanism as
 * Service Detail / Gallery.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mollura_legal_data( $slug ) {
	$pages = array(
		'cookie-policy' => array(
			'banner_title' => 'Cookie Policy',
			'banner_image' => 'legal-banner-1.png',
			'body'         => <<<'MOLBODY'
<p>This Cookie Policy explains how Mollura Medical Hair Restoration (“we”, “us” and “ours”) uses cookies and similar technologies to recognize you when you visit our websites at (“<a href="https://www.mollurahairtransplant.com">https://www.mollurahairtransplant.com</a>”). It explains what these technologies are and why we use them, as well as your rights to control our use of them.</p>
<p>In some cases, we may use cookies to collect personal information, or that becomes personal information if we combine it with other information.</p>
<span class="mol-eyebrow">COOKIE POLICY</span>
<h2 class="mol-h2">What are cookies?</h2>
<p>Cookies are small data files that are placed on your computer or mobile device when you visit a website. Cookies are widely used by website owners in order to make their websites work, or to work more efficiently, as well as to provide reporting information.</p>
<p>Cookies set by the website owner (in this case, <a href="https://www.mollurahairtransplant.com">https://www.mollurahairtransplant.com</a>) are called “first party cookies”. Cookies set by parties other than the website owner are called “third party cookies”. Third-party cookies enable third party features or functionality to be provided on or through the website (e.g. like advertising, interactive content and analytics). The parties that set these third party cookies can recognize your computer both when it visits the website in question and also when it visits certain other websites.</p>
<h3 class="mol-h3">Why do we use cookies?</h3>
<p>We use first and third party cookies for several reasons. Some cookies are required for technical reasons in order for our Websites to operate, and we refer to these as “essential” or “strictly necessary” cookies. Other cookies also enable us to track and target the interests of our users to enhance the experience on our Online Properties. Third parties serve cookies through our Websites for advertising, analytics and other purposes. This is described in more detail below.</p>
<p>The specific types of first and third party cookies served through our Websites and the purposes they perform are described below (please note that the specific cookies served may vary depending upon the specific Online Properties you visit):</p>
<h3 class="mol-h3">Analytics and customization cookies:</h3>
<p>These cookies collect information that is used either in aggregate form to help us understand how our Websites are being used or how effective our marketing campaigns are, or to help us customize our Websites for you.</p>
<p>Who serves these cookies: Google Analytics.</p>
<p>How to refuse: To refuse these cookies, please follow the instructions below under the heading “How can I control cookies?”</p>
<h3 class="mol-h3">Advertising cookies:</h3>
<p>These cookies are used to make advertising messages more relevant to you. They perform functions like preventing the same ad from continuously reappearing, ensuring that ads are properly displayed for advertisers, and in some cases selecting advertisements that are based on your interests.</p>
<p>Who serves these cookies: Google.</p>
<p>How to refuse: To refuse these cookies, please follow the instructions below under the heading “How can I control cookies?”</p>
<h3 class="mol-h3">What about other tracking technologies, like web beacons?</h3>
<p>Cookies are not the only way to recognize or track visitors to a website. We may use other, similar technologies from time to time, like web beacons (sometimes called ‘tracking pixels” or “clear gifs”). These are tiny graphics files that contain a unique identifier that enable us to recognize when someone has visited our Websites or opened an e-mail that we have sent them. This allows us, for example, to monitor the traffic patterns of users from one page within our Websites to another, to deliver or communicate with cookies, to understand whether you have come to our Websites from an online advertisement displayed on a third-party website, to improve site performance, and to measure the success of e-mail marketing campaigns. In many instances, these technologies are reliant on cookies to function properly, and hence declining cookies will impair their functioning.</p>
<h3 class="mol-h3">Do you use Flash cookies or Local Shared Objects?</h3>
<p>Our Websites may also use so-called “Flash Cookies” (also known as Local Shared Objects or “LSOs”) to, among other things, collect and store information about your use of our services, fraud prevention and for other site operations.</p>
<p>If you do not want Flash Cookies stored on your computer, you can adjust the settings of your Flash player to block Flash Cookies storage using the tools contained in the Website Storage Settings Panel. You can also control Flash Cookies by going to the Global Storage Settings Panel and following the instructions (which may include instructions that explain, for example, how to delete existing Flash Cookies (referred to “information” on the Macromedia site), to prevent Flash LSOs from being placed on your computer without you being asked, and (For Flash Player 8 and later) how to block Flash Cookies that are not being delivered by the operator of the page you are on at the time).</p>
<p>Please note that setting the Flash Player to restrict or limit acceptance of Flash Cookies may reduce or impede the functionality of some Flash applications, including, potentially, Flash applications used in connection with our services or online content.</p>
<h3 class="mol-h3">Do you serve targeted advertising?</h3>
<p>Third parties may serve cookies on your computer or mobile device to serve advertising through our Websites. These companies may use information about your visits to this and other websites in order to provide relevant advertisements about goods and services that you may be interested in. They may also employ technology that is used to measure the effectiveness of advertisements. This can be accomplished by them using cookies or web beacons to collect information about your visits to this and other sites in order to provide relevant advertisements about goods and services of potential interest to you. The information collected through this process does not enable us or them to identify your name, contact details or other details that directly identify you unless you choose to provide these.</p>
<h3 class="mol-h3">How can I control cookies?</h3>
<p>You have the right to decide whether to accept or reject cookies. You can set or amend your web browser controls to accept or refuse cookies. If you choose to reject cookies, you may still use our website though your access to some functionality and areas of our website may be restricted. As the means by which you&nbsp; refuse cookies through your web browser controls vary from browser-to-browser, you should visit your browser’s help menu for more information.&nbsp;</p>
<p>In addition, most advertising networks offer you a way to opt out of targeted advertising. If you would like to find out more information, please visit <a href="http://www.aboutads.info/choices/" target="_blank" rel="noreferrer noopener">http://www.aboutads.info/choices/</a> or <a href="http://www.youronlinechoices.com." target="_blank" rel="noreferrer noopener">http://www.youronlinechoices.com.</a></p>
<h3 class="mol-h3">How often will you update this Cookie Policy?</h3>
<p>We may update this Cookie Policy from time to time in order to reflect, for example, changes to the cookies we use or for other operational, legal or regulatory reasons. Please therefore re-visit this Cookie Policy regularly to stay informed about our use of cookies and related technologies.</p>
<p>The date at the top of this Cookie Policy indicates when it was last updated.</p>
<h3 class="mol-h3">Where can I get further information?</h3>
<p>For more information on our data policies, see our <a href="/privacy-policy/">Privacy Policy</a>.</p>
<p>If you have any questions about our use of cookies or other technologies, please email us at <a href="mailto:Hairsurg@mollurahairtransplant.com">Hairsurg@mollurahairtransplant.com</a><br>or by post to:</p>
<p>Address: 393 Franklin Avenue, Suite 105, Franklin Square, NY 11010</p>
MOLBODY
		),
		'privacy-policy' => array(
			'banner_title' => 'Privacy Policy',
			'banner_image' => 'privacy-policy-banner.png',
			'body'         => <<<'MOLBODY'
<p>Thank you for choosing to be part of our community at Mollura Medical Hair Restoration. (“company”, “we”, “us”, or “our”). We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about our policy, or our practices with regards to your personal information, please contact us at <a href="mailto:Hairsurg@mollurahairtransplant.com">Hairsurg@mollurahairtransplant.com</a>.</p>
<p>When you visit our website<a href=" http://www.mollurahairtransplant.com"> http://www.mollurahairtransplant.com</a> and use our services, you trust us with your personal information. We take your privacy very seriously. In this privacy notice, we describe our privacy policy. We seek to explain to you in the clearest way possible what information we collect, how we use it and what rights you have in relation to it. We hope you take some time to read through it carefully, as it is important. If there are any terms in this privacy policy that you do not agree with, please discontinue use of our websites and our services.</p>
<p>This privacy policy applies to all information collected through our website (such as <a href="http://www.mollurahairtransplant.com">http://www.mollurahairtransplant.com</a> and/or any related services, sales, marketing or events (we refer to them collectively in this privacy policy as the &#8220;Websites&#8221;).</p>
<p><strong>Please read this privacy policy carefully as it will help you make informed decisions about sharing your personal information with us.</strong></p>
<span class="mol-eyebrow">PRIVACY POLICY</span>
<h2 class="mol-h2">TABLE OF CONTENTS</h2>
<ol>
<li>WHAT INFORMATION DO WE COLLECT?</li>
<li>HOW DO WE USE YOUR INFORMATION?</li>
<li>WILL YOUR INFORMATION BE SHARED WITH ANYONE?&nbsp; &nbsp;&nbsp;&nbsp;</li>
<li>DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li>HOW LONG DO WE KEEP YOUR INFORMATION?</li>
<li>HOW DO WE KEEP YOUR INFORMATION SAFE?&nbsp;&nbsp;</li>
<li>DO WE COLLECT INFORMATION FROM MINORS?&nbsp;&nbsp;</li>
<li>WHAT ARE YOUR PRIVACY RIGHTS?</li>
<li>DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?&nbsp;</li>
<li>DO WE MAKE UPDATES TO THIS POLICY?</li>
<li>HOW CAN YOU CONTACT US ABOUT THIS POLICY?</li>
</ol>
<h3 class="mol-h3">1. WHAT INFORMATION DO WE COLLECT?</h3>
<p><strong>Personal information you disclose to us</strong></p>
<p><strong><em>In Short:</em></strong> We collect personal information that you provide to us such as name, address, contact information, passwords and security data, and payment information.</p>
<p>We collect personal information that you voluntarily provide to us when&nbsp;expressing an interest in obtaining information about us or our products and services, when participating in activities on the&nbsp;Websites&nbsp;or otherwise contacting us.</p>
<p>The personal information that we collect depends on the context of your interactions with the Websites, the choices you make and us and the products and features you use. The personal information we collect can include the following:</p>
<p><strong>Name and Contact Data</strong>. We may collect your first and last name, email address, postal address, phone number, and other similar contact data.</p>
<p><strong>Credentials</strong>. When needed, we collect passwords, password hints, and similar security information used for authentication and account access.</p>
<p><strong>Payment Data.</strong> We collect data necessary to process your payment if you make purchases, such as your payment instrument number (such as a credit card number), and the security code associated with your payment instrument. All payment data is stored by the payment processor and you should review its privacy policies and contact the payment processor directly to respond to your questions.</p>
<p>All personal information that you provide to us must be true, complete and accurate, and you must notify us of any changes to such personal information.</p>
<p><strong>Information collected from other sources</strong></p>
<p><strong><em>In Short</em></strong>:&nbsp;We may collect limited data from public databases, marketing partners,&nbsp;and other outside sources.</p>
<p>We may obtain information about you from other sources, such as public databases, joint marketing partners,&nbsp;as well as from other third parties. Examples of the information we receive from other sources include: social media profile information; marketing leads and search results and links, including paid listings (such as sponsored links).</p>
<h3 class="mol-h3">2. HOW DO WE USE YOUR INFORMATION?</h3>
<p><strong><em>In Short:</em></strong> We process your information for purposes based on legitimate business interests, the fulfillment of our contract with you, compliance with our legal obligations, and/or your consent.</p>
<p>We use personal information collected via our&nbsp;Websites&nbsp;for a variety of business purposes described below. We process your personal information for these purposes in reliance on our legitimate business interests (&#8220;Business Purposes&#8221;), in order to enter into or perform a contract with you (&#8220;Contractual&#8221;), with your consent (&#8220;Consent&#8221;), and/or for compliance with our legal obligations (&#8220;Legal Reasons&#8221;). We indicate the specific processing grounds we rely on next to each purpose listed below.</p>
<p>We use the information we collect or receive:</p>
<p><strong>Fulfill and manage your orders&nbsp;for Contractual reasons</strong>. We may use your information to fulfill and manage your orders, payments, returns, and exchanges made through the&nbsp;Websites.</p>
<p><strong>For other Business Purposes</strong>.&nbsp;We may use your information for other Business Purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our&nbsp;Websites, products, services, marketing and your experience.</p>
<h3 class="mol-h3">3. WILL YOUR INFORMATION BE SHARED WITH ANYONE?</h3>
<p><strong><em>In Short</em></strong>: We only share information with your consent, to comply with laws, to protect your rights, or to fulfill business obligations.</p>
<p>We only share and disclose your information in the following situations:</p>
<p><strong>Compliance with Laws.</strong>&nbsp;We may disclose your information where we are legally required to do so in order to comply with applicable law, governmental requests, a judicial proceeding, court order, or legal process, such as in response to a court order or a subpoena (including in response to public authorities to meet national security or law enforcement requirements).</p>
<p><strong>Vital Interests and Legal Rights.</strong>&nbsp;We may disclose your information where we believe it is necessary to investigate, prevent, or take action regarding potential violations of our policies, suspected fraud, situations involving potential threats to the safety of any person and illegal activities, or as evidence in litigation in which we are involved.</p>
<p><strong>Vendors, Consultants and Other Third-Party Service Providers</strong>.&nbsp;We may share your data with third party vendors, service providers, contractors or agents who perform services for us or on our behalf and require access to such information to do that work. Examples include: payment processing, data analysis, email delivery, hosting services, customer service and marketing efforts. We may allow selected third parties to use tracking technology on the&nbsp;Websites, which will enable them to collect data about how you interact with the&nbsp;Websites&nbsp;over time. This information may be used to, among other things, analyze and track data, determine the popularity of certain content and better understand online activity. Unless described in this Policy, we do not share, sell, rent or trade any of your information with third parties for their promotional purposes.</p>
<p><strong>Business Transfers</strong>.&nbsp;We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</p>
<p><strong>With your Consent.</strong>&nbsp;We may disclose your personal information for any other purpose with your consent.</p>
<h3 class="mol-h3">4. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</h3>
<p><strong><em>In Short:</em></strong> We may use cookies and other tracking technologies to collect and store your information.</p>
<p>We may use cookies and similar tracking technologies (like web beacons and pixels) to access or store information. Specific information about how we use such technologies and how you can refuse certain cookies is set out in our Cookie Policy.</p>
<h3 class="mol-h3">5. HOW LONG DO WE KEEP YOUR INFORMATION?</h3>
<p><strong><em>In Short:</em></strong> We keep your information for as long as necessary to fulfill the purposes outlined in this privacy policy unless otherwise required by law.</p>
<p>We will only keep your personal information for as long as it is necessary for the purposes set out in this privacy policy, unless a longer retention period is required or permitted by law (such as tax, accounting or other legal requirements).&nbsp;</p>
<p>When we have no ongoing legitimate business need to process your personal information, we will either delete or anonymize it, or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.</p>
<h3 class="mol-h3">6. HOW DO WE KEEP YOUR INFORMATION SAFE?</h3>
<p><strong><em>In Short: </em></strong>We aim to protect your personal information through a system of organizational and technical security measures.</p>
<p>We have implemented appropriate technical and organizational security measures designed to protect the security of any personal information we process. However, please also remember that we cannot guarantee that the Internet itself is 100 percent secure. Although we will do our best to protect your personal information, transmission of personal information to and from our&nbsp;Websites&nbsp;is at your own risk. You should only access the services within a secure environment.</p>
<h3 class="mol-h3">7. DO WE COLLECT INFORMATION FROM MINORS?</h3>
<p><strong><em>In Short:</em></strong> We do not knowingly collect data from or market to children under 18 years of age.</p>
<p>We do not knowingly solicit data from or market to children under 18 years of age. By using the Websites, you represent that you are at least 18 or that you are the parent or guardian of such a minor and consent to such minor dependent’s use of the&nbsp;Websites. If we learn that personal information from users less than 18 years of age has been collected, we will deactivate the account and take reasonable measures to promptly delete such data from our records. If you become aware of any data we have collected from children under age 18, please contact us at Hairsurg@mollurahairtransplant.com.</p>
<h3 class="mol-h3">8. WHAT ARE YOUR PRIVACY RIGHTS?</h3>
<p><strong><em>In Short: </em></strong>You may review, change, or terminate your account at any time.</p>
<p>If you are resident in the European Economic Area, and you believe we are unlawfully processing your personal information, you also have the right to complain to your local data protection supervisory authority. You also have the right to request access to your data, correction of your data and for your data to be removed. In the event of a data breach, you will be notified within 72 hours of the time the data breach is detected. You can find the European Economic Area contact details here:&nbsp;http://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm</p>
<p>Cookies and similar technologies: Most Web browsers are set to accept cookies by default. If you prefer, you can usually choose to set your browser to remove cookies and to reject cookies. If you choose to remove cookies or reject cookies, this could affect certain features or services of our Websites. To opt-out of interest-based advertising by advertisers on our Websites visit http://www.aboutads.info/choices/. For more details, see our Cookie Policy.</p>
<h3 class="mol-h3">9. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</h3>
<p><strong><em>In Short:</em></strong> Yes, if you are a resident of California, you are granted specific rights regarding access to your personal information.</p>
<p>California Civil Code Section 1798.83, also known as the “Shine The Light” law, permits our users who are California residents to request and obtain from us, once a year and free of charge, information about categories of personal information (if any) we disclosed to third parties for direct marketing purposes and the names and addresses of all third parties with which we shared personal information in the immediately preceding calendar year. If you are a California resident and would like to make such a request, please submit your request in writing to us using the contact information provided below.</p>
<p>If you are under 18 years of age, reside in California, and have a registered account with the&nbsp;Websites, you have the right to request removal of unwanted data that you publicly post on the&nbsp;Websites. To request removal of such data, please contact us using the contact information provided below, and include the email address associated with your account and a statement that you reside in California. We will make sure the data is not publicly displayed on the&nbsp;Websites, but please be aware that the data may not be completely or comprehensively removed from our systems.</p>
<h3 class="mol-h3">10. DO WE MAKE UPDATES TO THIS POLICY?</h3>
<p><strong><em>In Short:</em></strong> Yes, we will update this policy as necessary to stay compliant with relevant laws.</p>
<p>We may update this privacy policy from time to time. The updated version will be indicated by an updated “Revised” date and the updated version will be effective as soon as it is accessible. If we make material changes to this privacy policy, we may notify you either by prominently posting a notice of such changes or by directly sending you a notification. We encourage you to review this privacy policy frequently to be informed of how we are protecting your information.</p>
<h4 class="mol-h3">11. HOW CAN YOU CONTACT US ABOUT THIS POLICY?</h4>
<p>If you have questions or comments about this policy or any further questions or comments about us or our policies, you may&nbsp;email us at Hairsurg@mollurahairtransplant.com<br>&nbsp;or by post to:</p>
<p>Mollura Medical Hair Restoration<br>393 Franklin Avenue, Suite 105<br>Franklin Square, NY 11010<br>United States&nbsp;&nbsp;&nbsp;<br><a href="tel:5163543876">516-354-3876</a></p>
<h2 class="mol-h2">PERSONAL DATA MANAGEMENT</h2>
<p>According to the Privacy Policy, you agree to share your personal data with our service. However, you still have the right to update, transfer or delete it from us at any time. If you need further management for your data, please contact us at Hairsurg@mollurahairtransplant.com.&nbsp;</p>
MOLBODY
		),
		'medical-disclaimer' => array(
			'banner_title' => 'Medical Disclaimer',
			'banner_image' => 'legal-banner-1.png',
			'body'         => <<<'MOLBODY'
<p>The content on this website, including text, images, videos, and other materials, is provided for informational purposes only. It is not intended to be, and should not be interpreted as, medical advice, diagnosis, or a recommendation for any specific treatment or procedure.</p>
<p>Individual results from hair restoration procedures vary based on a number of factors including degree of hair loss, donor hair density, age, overall health, and adherence to post-procedure care instructions. Before-and-after photos shown on this site represent actual patients of Mollura Medical Hair Restoration but are not a guarantee of results. All surgical procedures carry inherent risks.</p>
<p>The information on this site does not replace a thorough in-person evaluation and consultation with a licensed physician. If you are experiencing hair loss or any related medical condition, consult a qualified healthcare provider before pursuing any course of treatment. Mollura Medical Hair Restoration surgical procedures are performed by Dr. Anthony Mollura, MD. Use of this website does not establish a physician-patient relationship. For personalized medical guidance, please schedule a consultation at our Woodbury, NY office.</p>
MOLBODY
		),
	);
	return $pages[ $slug ] ?? null;
}
