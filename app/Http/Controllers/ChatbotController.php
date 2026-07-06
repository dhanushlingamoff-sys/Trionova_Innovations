<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\ChatMessage;

// class ChatbotController extends Controller
// {
//     private array $faq = [

//         [
//             'keywords' => ['hi', 'hello', 'hey', 'good morning', 'good evening'],
//             'answer' => 'Hello 👋 Welcome to Trionova Technologies. How can I help you today?',
//         ],

//         [
//             'keywords' => ['thanks', 'thank you'],
//             'answer' => 'You’re welcome 😊 Let me know if you need any help with web development, mobile apps, AI solutions, or software services.',
//         ],

//         [
//             'keywords' => ['bye', 'goodbye', 'see you'],
//             'answer' => 'Thank you for visiting Trionova Technologies 🚀 Have a great day!',
//         ],

//         [
//             'keywords' => ['portfolio', 'projects', 'past projects'],
//             'answer' => 'Yes! We have worked on AI platforms, business websites, ERP systems, mobile applications, and automation software. Please contact our team to see our latest portfolio and case studies.',
//         ],

//         [
//             'keywords' => ['start', 'get started', 'how to begin'],
//             'answer' => 'Getting started is simple 😊 Share your requirements with our team, and we will schedule a consultation to discuss features, timeline, and pricing.',
//         ],

//         [
//             'keywords' => ['services', 'what services', 'service'],
//             'answer' => 'Trionova Technology provides Mobile App Development, Web Development, AI Development, SaaS Development, ERP & CRM Systems, UI/UX Design, AI Chatbots, Cloud Deployment, SEO, Digital Marketing, WhatsApp Automation, and complete Digital Transformation solutions. For detailed consultation, please contact our executive team.',
//         ],

//         [
//             'keywords' => ['android', 'ios', 'mobile app'],
//             'answer' => 'Yes, Trionova develops both Android and iOS mobile applications using Flutter, Native Android, and Native iOS technologies. We build scalable, secure, and high-performance applications for startups and enterprises.',
//         ],

//         [
//             'keywords' => ['mobile app cost', 'app development cost', 'price'],
//             'answer' => 'Mobile app development cost depends on features, UI/UX complexity, APIs, AI integrations, scalability, and admin modules. Basic apps may start from ₹80,000 while enterprise AI applications can exceed ₹6,00,000. Contact our executive team for an accurate quotation.',
//         ],

//         [
//             'keywords' => ['timeline', 'how long', 'development time'],
//             'answer' => 'Development timeline depends on features and complexity. Basic apps usually take 3–6 weeks, medium applications 2–4 months, and enterprise AI systems 4–8+ months.',
//         ],

//         [
//             'keywords' => ['ai', 'ai implementation', 'automation'],
//             'answer' => 'AI implementation helps automate business workflows, customer support, analytics, reporting, lead generation, and operations. Trionova develops AI chatbots, AI automation systems, AI agents, and intelligent business solutions.',
//         ],

//         [
//             'keywords' => ['website', 'web development'],
//             'answer' => 'Yes, Trionova develops responsive and scalable websites including business websites, SaaS platforms, eCommerce websites, AI-powered websites, and custom web applications.',
//         ],

//         [
//             'keywords' => ['chatbot', 'ai chatbot'],
//             'answer' => 'Yes, Trionova develops AI-powered chatbots for websites, WhatsApp, customer support, and automation systems with multilingual and CRM integration capabilities.',
//         ],

//         [
//             'keywords' => ['software', 'custom software'],
//             'answer' => 'Yes, we develop custom ERP, CRM, inventory systems, HR software, logistics software, hospital management systems, and AI-powered enterprise solutions.',
//         ],

//         [
//             'keywords' => ['support', 'maintenance'],
//             'answer' => 'Yes, Trionova provides long-term maintenance and support services including bug fixing, monitoring, security updates, feature upgrades, and cloud management.',
//         ],

//         [
//             'keywords' => ['contact', 'consultation'],
//             'answer' => 'For detailed consultation and project discussion, please contact our executive team at https://trionova.in/contact',
//         ],

//         [
//             'keywords' => ['services', 'what services', 'service', 'solutions'],
//             'answer' => 'Trionova Technology provides Mobile App Development, Web Development, AI Development, SaaS Development, ERP & CRM Systems, UI/UX Design, AI Chatbots, Cloud Deployment, SEO, Digital Marketing, WhatsApp Automation, and complete Digital Transformation solutions. For detailed consultation, please contact our executive team.',
//         ],

//         [
//             'keywords' => ['android', 'ios', 'mobile app', 'flutter', 'cross platform'],
//             'answer' => 'Yes, Trionova develops both Android and iOS mobile applications using Flutter, Native Android, and Native iOS technologies. We build scalable, secure, and high-performance applications for startups and enterprises.',
//         ],

//         [
//             'keywords' => ['mobile app cost', 'app development cost', 'price', 'budget'],
//             'answer' => 'Mobile app development cost depends on features, UI/UX complexity, APIs, AI integrations, scalability, and admin modules. Basic apps may start from ₹80,000 while enterprise AI applications can exceed ₹6,00,000. Contact our executive team for an accurate quotation.',
//         ],

//         [
//             'keywords' => ['timeline', 'how long', 'development time', 'weeks', 'months'],
//             'answer' => 'Development timeline depends on features and complexity. Basic apps usually take 3–6 weeks, medium applications 2–4 months, and enterprise AI systems 4–8+ months.',
//         ],

//         [
//             'keywords' => ['ai', 'ai implementation', 'automation', 'business workflows'],
//             'answer' => 'AI implementation helps automate business workflows, customer support, analytics, reporting, lead generation, and operations. Trionova develops AI chatbots, AI automation systems, AI agents, and intelligent business solutions.',
//         ],

//         [
//             'keywords' => ['ai cost', 'ai price', 'ai development cost'],
//             'answer' => 'AI development pricing ranges from ₹1,50,000 – ₹3,00,000 for basic chatbots, ₹3,00,000 – ₹8,00,000 for automation systems, and ₹8,00,000+ for advanced enterprise AI platforms with custom workflows and LLM training.',
//         ],

//         [
//             'keywords' => ['chatbot', 'ai chatbot', 'whatsapp bot', 'support bot'],
//             'answer' => 'Yes, Trionova develops AI-powered chatbots for websites, WhatsApp, customer support, and automation systems with multilingual capabilities and direct CRM/ERP integrations.',
//         ],

//         [
//             'keywords' => ['software', 'custom software', 'erp', 'crm', 'management system'],
//             'answer' => 'Yes, we develop custom ERP, CRM, inventory systems, HR software, logistics software, hospital management systems, and AI-powered enterprise solutions tailored to your operational workflows.',
//         ],

//         [
//             'keywords' => ['support', 'maintenance', 'bug fixing', 'server monitoring'],
//             'answer' => 'Yes, Trionova provides long-term maintenance and support services including bug fixing, performance optimization, security updates, feature upgrades, and cloud management on monthly or annual plans.',
//         ],

//         [
//             'keywords' => ['start', 'get started', 'how to begin', 'project kickoff'],
//             'answer' => 'Getting started is simple 😊 Share your requirements with our team, and we will schedule a consultation to discuss features, timeline, and pricing.',
//         ],

//         [
//             'keywords' => ['website', 'web development', 'ecommerce website', 'saas platform'],
//             'answer' => 'Yes, Trionova develops responsive and scalable websites including business websites, SaaS platforms, eCommerce websites, AI-powered websites, and custom web applications.',
//         ],

//         [
//             'keywords' => ['tech stack', 'technologies', 'programming language', 'framework'],
//             'answer' => 'We use modern, industry-standard stacks: Flutter, Kotlin, and Swift for mobile; React, Next.js, and Node.js for frontend/backend; Python, FastAPI, and Django for AI; AWS and Google Cloud for infrastructure.',
//         ],

//         [
//             'keywords' => ['ui/ux', 'design', 'wireframe', 'prototype', 'figma'],
//             'answer' => 'Yes, Trionova provides premium UI/UX design services, creating wireframes, high-fidelity interfaces, user journeys, and interactive prototypes tailored for conversion and seamless user experiences.',
//         ],

//         [
//             'keywords' => ['redesign', 'upgrade', 'legacy code', 'modernize app'],
//             'answer' => 'Yes, we can completely redesign, modernize, and optimize your existing applications or legacy software to improve UI/UX, performance, security, database architecture, and add AI features.',
//         ],

//         [
//             'keywords' => ['admin panel', 'dashboard', 'backend control', 'management panel'],
//             'answer' => 'Yes, most systems developed by Trionova include customized admin panels featuring real-time analytics, role-based access control, user management, and detailed operational reporting tools.',
//         ],

//         [
//             'keywords' => ['ecommerce', 'online store', 'marketplace', 'multi vendor'],
//             'answer' => 'Yes, we build secure, high-scaling eCommerce mobile apps and web platforms complete with inventory management, cart systems, coupon modules, and popular payment gateways like Razorpay and Stripe.',
//         ],

//         [
//             'keywords' => ['cloud', 'hosting', 'deployment', 'aws', 'server setup'],
//             'answer' => 'Yes, Trionova provides end-to-end cloud deployment and infrastructure management services across AWS, Google Cloud, Azure, and secure VPS environments, ensuring high uptime and automatic scaling.',
//         ],

//         [
//             'keywords' => ['security', 'secure application', 'encryption', 'data safety'],
//             'answer' => 'Security is a top priority. We implement encrypted APIs, secure authentication systems, role-based access controls, database encryption, SSL protocols, and adhere strictly to secure coding practices.',
//         ],

//         [
//             'keywords' => ['nda', 'non disclosure', 'confidentiality', 'protect idea'],
//             'answer' => 'Absolutely. We sign Non-Disclosure Agreements (NDA) before detailed project discussions to ensure full security and absolute confidentiality of your business concepts and intellectual property.',
//         ],

//         [
//             'keywords' => ['startup', 'mvp planning', 'entrepreneur', 'new business'],
//             'answer' => 'Yes, we work extensively with startups. We specialize in transforming early-stage ideas into cost-effective, scalable MVPs and providing continuous strategic tech consultation for product validation.',
//         ],

//         [
//             'keywords' => ['mvp', 'minimum viable product', 'product validation'],
//             'answer' => 'An MVP (Minimum Viable Product) is the first launch version of your software focusing strictly on core features. It allows you to test the market quickly, gather real feedback, and minimize initial investment.',
//         ],

//         [
//             'keywords' => ['software cost', 'custom software pricing', 'erp cost'],
//             'answer' => 'Custom software development generally ranges from ₹1,00,000 – ₹3,00,000 for basic applications, ₹3,00,000 – ₹8,00,000 for mid-level systems, and ₹8,00,000+ for enterprise AI integrations and complex multi-module workflows.',
//         ],

//         [
//             'keywords' => ['post launch', 'after launch support', 'long term maintenance'],
//             'answer' => 'Yes, we offer structured long-term post-launch support. This covers persistent database optimization, security monitoring, server health checks, cloud adjustments, and feature scaling.',
//         ],

//         [
//             'keywords' => ['saas', 'software as a service', 'subscription platform', 'multi tenant'],
//             'answer' => 'Yes, Trionova specializes in engineering robust SaaS platforms. We implement secure multi-tenant architectures, subscription billing integrations, tenant isolation, and custom API delivery networks.',
//         ],

//         [
//             'keywords' => ['api integration', 'integrate gateway', 'third party api', 'whatsapp api'],
//             'answer' => 'Yes, we provide secure API integration services to seamlessly connect your platforms with third-party networks like payment gateways, WhatsApp Business API, CRM tools, shipping aggregates, and SMS networks.',
//         ],

//         [
//             'keywords' => ['voice assistant', 'voice ai', 'conversational voice', 'call automation'],
//             'answer' => 'Yes, we design and implement AI-powered voice assistants and conversational agents capable of automated customer outreach, handling call queries, and managing workflows using natural speech processing.',
//         ],

//         [
//             'keywords' => ['source code', 'code ownership', 'intellectual property', 'ip transfer'],
//             'answer' => 'Yes, 100% source code ownership and intellectual property rights are fully transferred to you upon successful project completion and final payment clearance as per contractual terms.',
//         ],

//         [
//             'keywords' => ['whatsapp automation', 'whatsapp marketing', 'automated replies'],
//             'answer' => 'Yes, Trionova delivers custom WhatsApp automation architectures that enable broadcast updates, instant customer lead qualifications, automated multi-agent routing, and smart AI chat handling.',
//         ],

//         [
//             'keywords' => ['international', 'global client', 'remote collaboration', 'overseas project'],
//             'answer' => 'Yes, we collaborate globally. We offer seamless remote engineering management, multi-currency processing adjustments, localized multi-lingual platforms, and geographically optimized cloud rollouts.',
//         ],

//         [
//             'keywords' => ['why choose us', 'different from others', 'trionova advantage', 'usp'],
//             'answer' => 'Trionova stands out by combining modern architectural engineering with bleeding-edge AI integration, highly responsive UI/UX designs, absolute transparency, and dedicated multi-year technical support structures.',
//         ],

//         [
//             'keywords' => ['contact', 'consultation', 'address', 'phone number', 'email'],
//             'answer' => 'For detailed consultation and project discussion, please contact our executive team at https://trionova.in/contact',
//         ],

//         [
//             'keywords' => ['portfolio', 'projects', 'past projects', 'case study', 'track record'],
//             'answer' => 'Yes! We have worked on AI platforms, business websites, ERP systems, mobile applications, and automation software. Please contact our team to see our latest portfolio and case studies.',
//         ],

//     ];

//     public function chat(Request $request)
//     {
//         $request->validate([
//             'message' => 'required|string|max:1000',
//         ]);

//         $message = strtolower($request->message);

//         foreach ($this->faq as $item) {

//             foreach ($item['keywords'] as $keyword) {

//                 if (str_contains($message, strtolower($keyword))) {

//                     return response()->json([
//                         'reply' => $item['answer'],
//                     ]);
//                 }
//             }
//         }

//         return response()->json([
//             'reply' => '
//         <div class="tn-chat-form-wrap">

//         <h3 class="tn-chat-form-title">Talk to Our Team</h3>

//         <form id="tnLeadForm">

//             <div class="tn-form-group">
//                 <input type="text" name="name" placeholder="Your Name" required>
//             </div>

//             <div class="tn-form-group">
//                 <input type="tel" name="phone" placeholder="Phone Number" required>
//             </div>

//             <div class="tn-form-group">
//                 <input type="email" name="email" placeholder="Email Address" required>
//             </div>

//             <div class="tn-form-group">
//                 <input type="text" name="business" placeholder="Business Name">
//             </div>

//             <div class="tn-form-group">
//                 <textarea name="message" placeholder="Tell us about your project"></textarea>
//             </div>

//             <button type="submit" class="tn-chat-submit-btn">
//                 Submit
//             </button>

//             <div class="tn-chat-success" style="display:none;">
//                 Thank you! Our team will contact you soon.
//             </div>

//         </form>
//     </div>
//     ',
//         ]);
//     }

//     public function voiceToText(Request $request)
//     {
//         $request->validate([
//             'audio' => 'required|file',
//         ]);

//         try {

//             $audio = $request->file('audio');

//             $filename = time().'.webm';

//             $path = storage_path('app/temp/'.$filename);

//             $audio->move(storage_path('app/temp'), $filename);

//             $pythonScript = base_path('python/whisper_transcribe.py');

//             $command = escapeshellcmd("python $pythonScript $path");
//             $output = shell_exec($command);

//             if (! $output) {
//                 throw new \Exception('No response from Whisper');
//             }

//             $result = json_decode($output, true);

//             unlink($path);

//             return response()->json([
//                 'success' => true,
//                 'text' => $result['text'] ?? '',
//             ]);

//         } catch (\Throwable $e) {

//             \Log::error('WHISPER ERROR', [
//                 'message' => $e->getMessage(),
//             ]);

//             return response()->json([
//                 'success' => false,
//                 'message' => $e->getMessage(),
//             ], 500);
//         }
//     }
// }

// <?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    private array $faq = [

        [
            'keywords' => ['hi', 'hello', 'hey', 'good morning', 'good evening'],
            'answer' => 'Hello 👋 Welcome to Trionova Technologies. How can I help you today?',
        ],

        [
            'keywords' => ['thanks', 'thank you'],
            'answer' => 'You’re welcome 😊 Let me know if you need any help with web development, mobile apps, AI solutions, or software services.',
        ],

        [
            'keywords' => ['bye', 'goodbye', 'see you'],
            'answer' => 'Thank you for visiting Trionova Technologies 🚀 Have a great day!',
        ],

        [
            'keywords' => ['portfolio', 'projects', 'past projects'],
            'answer' => 'Yes! We have worked on AI platforms, business websites, ERP systems, mobile applications, and automation software. Please contact our team to see our latest portfolio and case studies.',
        ],

        [
            'keywords' => ['start', 'get started', 'how to begin'],
            'answer' => 'Getting started is simple 😊 Share your requirements with our team, and we will schedule a consultation to discuss features, timeline, and pricing.',
        ],

        [
            'keywords' => ['services', 'what services', 'service'],
            'answer' => 'Trionova Technology provides Mobile App Development, Web Development, AI Development, SaaS Development, ERP & CRM Systems, UI/UX Design, AI Chatbots, Cloud Deployment, SEO, Digital Marketing, WhatsApp Automation, and complete Digital Transformation solutions. For detailed consultation, please contact our executive team.',
        ],

        [
            'keywords' => ['android', 'ios', 'mobile app'],
            'answer' => 'Yes, Trionova develops both Android and iOS mobile applications using Flutter, Native Android, and Native iOS technologies. We build scalable, secure, and high-performance applications for startups and enterprises.',
        ],

        [
            'keywords' => ['mobile app cost', 'app development cost', 'price'],
            'answer' => 'Mobile app development cost depends on features, UI/UX complexity, APIs, AI integrations, scalability, and admin modules. Basic apps may start from ₹80,000 while enterprise AI applications can exceed ₹6,00,000. Contact our executive team for an accurate quotation.',
        ],

        [
            'keywords' => ['timeline', 'how long', 'development time'],
            'answer' => 'Development timeline depends on features and complexity. Basic apps usually take 3–6 weeks, medium applications 2–4 months, and enterprise AI systems 4–8+ months.',
        ],

        [
            'keywords' => ['ai', 'ai implementation', 'automation'],
            'answer' => 'AI implementation helps automate business workflows, customer support, analytics, reporting, lead generation, and operations. Trionova develops AI chatbots, AI automation systems, AI agents, and intelligent business solutions.',
        ],

        [
            'keywords' => ['website', 'web development'],
            'answer' => 'Yes, Trionova develops responsive and scalable websites including business websites, SaaS platforms, eCommerce websites, AI-powered websites, and custom web applications.',
        ],

        [
            'keywords' => ['chatbot', 'ai chatbot'],
            'answer' => 'Yes, Trionova develops AI-powered chatbots for websites, WhatsApp, customer support, and automation systems with multilingual and CRM integration capabilities.',
        ],

        [
            'keywords' => ['software', 'custom software'],
            'answer' => 'Yes, we develop custom ERP, CRM, inventory systems, HR software, logistics software, hospital management systems, and AI-powered enterprise solutions.',
        ],

        [
            'keywords' => ['support', 'maintenance'],
            'answer' => 'Yes, Trionova provides long-term maintenance and support services including bug fixing, monitoring, security updates, feature upgrades, and cloud management.',
        ],

        [
            'keywords' => ['contact', 'consultation'],
            'answer' => 'For detailed consultation and project discussion, please contact our executive team at https://trionova.in/contact',
        ],

        [
            'keywords' => ['services', 'what services', 'service', 'solutions'],
            'answer' => 'Trionova Technology provides Mobile App Development, Web Development, AI Development, SaaS Development, ERP & CRM Systems, UI/UX Design, AI Chatbots, Cloud Deployment, SEO, Digital Marketing, WhatsApp Automation, and complete Digital Transformation solutions. For detailed consultation, please contact our executive team.',
        ],

        [
            'keywords' => ['android', 'ios', 'mobile app', 'flutter', 'cross platform'],
            'answer' => 'Yes, Trionova develops both Android and iOS mobile applications using Flutter, Native Android, and Native iOS technologies. We build scalable, secure, and high-performance applications for startups and enterprises.',
        ],

        [
            'keywords' => ['mobile app cost', 'app development cost', 'price', 'budget'],
            'answer' => 'Mobile app development cost depends on features, UI/UX complexity, APIs, AI integrations, scalability, and admin modules. Basic apps may start from ₹80,000 while enterprise AI applications can exceed ₹6,00,000. Contact our executive team for an accurate quotation.',
        ],

        [
            'keywords' => ['timeline', 'how long', 'development time', 'weeks', 'months'],
            'answer' => 'Development timeline depends on features and complexity. Basic apps usually take 3–6 weeks, medium applications 2–4 months, and enterprise AI systems 4–8+ months.',
        ],

        [
            'keywords' => ['ai', 'ai implementation', 'automation', 'business workflows'],
            'answer' => 'AI implementation helps automate business workflows, customer support, analytics, reporting, lead generation, and operations. Trionova develops AI chatbots, AI automation systems, AI agents, and intelligent business solutions.',
        ],

        [
            'keywords' => ['ai cost', 'ai price', 'ai development cost'],
            'answer' => 'AI development pricing ranges from ₹1,50,000 – ₹3,00,000 for basic chatbots, ₹3,00,000 – ₹8,00,000 for automation systems, and ₹8,00,000+ for advanced enterprise AI platforms with custom workflows and LLM training.',
        ],

        [
            'keywords' => ['chatbot', 'ai chatbot', 'whatsapp bot', 'support bot'],
            'answer' => 'Yes, Trionova develops AI-powered chatbots for websites, WhatsApp, customer support, and automation systems with multilingual capabilities and direct CRM/ERP integrations.',
        ],

        [
            'keywords' => ['software', 'custom software', 'erp', 'crm', 'management system'],
            'answer' => 'Yes, we develop custom ERP, CRM, inventory systems, HR software, logistics software, hospital management systems, and AI-powered enterprise solutions tailored to your operational workflows.',
        ],

        [
            'keywords' => ['support', 'maintenance', 'bug fixing', 'server monitoring'],
            'answer' => 'Yes, Trionova provides long-term maintenance and support services including bug fixing, performance optimization, security updates, feature upgrades, and cloud management on monthly or annual plans.',
        ],

        [
            'keywords' => ['start', 'get started', 'how to begin', 'project kickoff'],
            'answer' => 'Getting started is simple 😊 Share your requirements with our team, and we will schedule a consultation to discuss features, timeline, and pricing.',
        ],

        [
            'keywords' => ['website', 'web development', 'ecommerce website', 'saas platform'],
            'answer' => 'Yes, Trionova develops responsive and scalable websites including business websites, SaaS platforms, eCommerce websites, AI-powered websites, and custom web applications.',
        ],

        [
            'keywords' => ['tech stack', 'technologies', 'programming language', 'framework'],
            'answer' => 'We use modern, industry-standard stacks: Flutter, Kotlin, and Swift for mobile; React, Next.js, and Node.js for frontend/backend; Python, FastAPI, and Django for AI; AWS and Google Cloud for infrastructure.',
        ],

        [
            'keywords' => ['ui/ux', 'design', 'wireframe', 'prototype', 'figma'],
            'answer' => 'Yes, Trionova provides premium UI/UX design services, creating wireframes, high-fidelity interfaces, user journeys, and interactive prototypes tailored for conversion and seamless user experiences.',
        ],

        [
            'keywords' => ['redesign', 'upgrade', 'legacy code', 'modernize app'],
            'answer' => 'Yes, we can completely redesign, modernize, and optimize your existing applications or legacy software to improve UI/UX, performance, security, database architecture, and add AI features.',
        ],

        [
            'keywords' => ['admin panel', 'dashboard', 'backend control', 'management panel'],
            'answer' => 'Yes, most systems developed by Trionova include customized admin panels featuring real-time analytics, role-based access control, user management, and detailed operational reporting tools.',
        ],

        [
            'keywords' => ['ecommerce', 'online store', 'marketplace', 'multi vendor'],
            'answer' => 'Yes, we build secure, high-scaling eCommerce mobile apps and web platforms complete with inventory management, cart systems, coupon modules, and popular payment gateways like Razorpay and Stripe.',
        ],

        [
            'keywords' => ['cloud', 'hosting', 'deployment', 'aws', 'server setup'],
            'answer' => 'Yes, Trionova provides end-to-end cloud deployment and infrastructure management services across AWS, Google Cloud, Azure, and secure VPS environments, ensuring high uptime and automatic scaling.',
        ],

        [
            'keywords' => ['security', 'secure application', 'encryption', 'data safety'],
            'answer' => 'Security is a top priority. We implement encrypted APIs, secure authentication systems, role-based access controls, database encryption, SSL protocols, and adhere strictly to secure coding practices.',
        ],

        [
            'keywords' => ['nda', 'non disclosure', 'confidentiality', 'protect idea'],
            'answer' => 'Absolutely. We sign Non-Disclosure Agreements (NDA) before detailed project discussions to ensure full security and absolute confidentiality of your business concepts and intellectual property.',
        ],

        [
            'keywords' => ['startup', 'mvp planning', 'entrepreneur', 'new business'],
            'answer' => 'Yes, we work extensively with startups. We specialize in transforming early-stage ideas into cost-effective, scalable MVPs and providing continuous strategic tech consultation for product validation.',
        ],

        [
            'keywords' => ['mvp', 'minimum viable product', 'product validation'],
            'answer' => 'An MVP (Minimum Viable Product) is the first launch version of your software focusing strictly on core features. It allows you to test the market quickly, gather real feedback, and minimize initial investment.',
        ],

        [
            'keywords' => ['software cost', 'custom software pricing', 'erp cost'],
            'answer' => 'Custom software development generally ranges from ₹1,00,000 – ₹3,00,000 for basic applications, ₹3,00,000 – ₹8,00,000 for mid-level systems, and ₹8,00,000+ for enterprise AI integrations and complex multi-module workflows.',
        ],

        [
            'keywords' => ['post launch', 'after launch support', 'long term maintenance'],
            'answer' => 'Yes, we offer structured long-term post-launch support. This covers persistent database optimization, security monitoring, server health checks, cloud adjustments, and feature scaling.',
        ],

        [
            'keywords' => ['saas', 'software as a service', 'subscription platform', 'multi tenant'],
            'answer' => 'Yes, Trionova specializes in engineering robust SaaS platforms. We implement secure multi-tenant architectures, subscription billing integrations, tenant isolation, and custom API delivery networks.',
        ],

        [
            'keywords' => ['api integration', 'integrate gateway', 'third party api', 'whatsapp api'],
            'answer' => 'Yes, we provide secure API integration services to seamlessly connect your platforms with third-party networks like payment gateways, WhatsApp Business API, CRM tools, shipping aggregates, and SMS networks.',
        ],

        [
            'keywords' => ['voice assistant', 'voice ai', 'conversational voice', 'call automation'],
            'answer' => 'Yes, we design and implement AI-powered voice assistants and conversational agents capable of automated customer outreach, handling call queries, and managing workflows using natural speech processing.',
        ],

        [
            'keywords' => ['source code', 'code ownership', 'intellectual property', 'ip transfer'],
            'answer' => 'Yes, 100% source code ownership and intellectual property rights are fully transferred to you upon successful project completion and final payment clearance as per contractual terms.',
        ],

        [
            'keywords' => ['whatsapp automation', 'whatsapp marketing', 'automated replies'],
            'answer' => 'Yes, Trionova delivers custom WhatsApp automation architectures that enable broadcast updates, instant customer lead qualifications, automated multi-agent routing, and smart AI chat handling.',
        ],

        [
            'keywords' => ['international', 'global client', 'remote collaboration', 'overseas project'],
            'answer' => 'Yes, we collaborate globally. We offer seamless remote engineering management, multi-currency processing adjustments, localized multi-lingual platforms, and geographically optimized cloud rollouts.',
        ],

        [
            'keywords' => ['why choose us', 'different from others', 'trionova advantage', 'usp'],
            'answer' => 'Trionova stands out by combining modern architectural engineering with bleeding-edge AI integration, highly responsive UI/UX designs, absolute transparency, and dedicated multi-year technical support structures.',
        ],

        [
            'keywords' => ['contact', 'consultation', 'address', 'phone number', 'email'],
            'answer' => 'For detailed consultation and project discussion, please contact our executive team at https://trionova.in/contact',
        ],

        [
            'keywords' => ['portfolio', 'projects', 'past projects', 'case study', 'track record'],
            'answer' => 'Yes! We have worked on AI platforms, business websites, ERP systems, mobile applications, and automation software. Please contact our team to see our latest portfolio and case studies.',
        ],

    ];

    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
            'session_id' => 'required|string',
        ]);

        $message = strtolower($request->message);
        $sessionId = $request->session_id;

        /*
        |------------------------------------------------------
        | 1. STORE USER MESSAGE
        |------------------------------------------------------
        */
        ChatMessage::create([
            'session_id' => $sessionId,
            'role' => 'user',
            'message' => $request->message,
        ]);

        /*
        |------------------------------------------------------
        | LEAD FORM MARKUP (shown for contact intent + fallback)
        |------------------------------------------------------
        */
        $leadForm = '
            <div class="tn-chat-form-wrap">
                <h3 class="tn-chat-form-title">Talk to Our Team</h3>

                <form id="tnLeadForm">
                <div class="tn-form-group">
                <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="tn-form-group">
                <input type="tel" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="tn-form-group">
                <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="tn-form-group">
                <input type="text" name="business" placeholder="Business Name">
                </div>
                <div class="tn-form-group">
                <textarea name="message" placeholder="Tell us about your project"></textarea>
                </div>

                <button type="submit" class="tn-chat-submit-btn">
                Submit
                </button>

                <div class="tn-chat-success" style="display:none;">
                Thank you! Our team will contact you soon.
                </div>

                </form>
            </div>';

        /*
        |------------------------------------------------------
        | 2. CONTACT INTENT → SHOW LEAD FORM
        |------------------------------------------------------
        */
        $contactKeywords = ['contact your team', 'contact team', 'contact us', 'contact', 'talk to team', 'talk to your team'];

        $reply = null;

        foreach ($contactKeywords as $keyword) {
            if (str_contains($message, $keyword)) {
                $reply = $leadForm;
                break;
            }
        }

        /*
        |------------------------------------------------------
        | 3. FIND FAQ REPLY
        |------------------------------------------------------
        */
        if (! $reply) {
            foreach ($this->faq as $item) {
                foreach ($item['keywords'] as $keyword) {
                    if (str_contains($message, strtolower($keyword))) {
                        $reply = $item['answer'];
                        break 2;
                    }
                }
            }
        }

        /*
        |------------------------------------------------------
        | 4. FALLBACK RESPONSE
        |------------------------------------------------------
        */
        if (! $reply) {
            $reply = $leadForm;
        }

        /*
        |------------------------------------------------------
        | 4. STORE BOT RESPONSE
        |------------------------------------------------------
        */
        ChatMessage::create([
            'session_id' => $sessionId,
            'role' => 'assistant',
            'message' => is_string($reply) ? strip_tags($reply) : $reply,
        ]);

        /*
        |------------------------------------------------------
        | 5. RETURN RESPONSE
        |------------------------------------------------------
        */
        return response()->json([
            'reply' => $reply,
        ]);
    }

    public function voiceToText(Request $request)
    {
        $request->validate([
            'audio' => 'required|file',
        ]);

        try {

            $audio = $request->file('audio');
            $filename = time().'.webm';

            $path = storage_path('app/temp/'.$filename);

            $audio->move(storage_path('app/temp'), $filename);

            $pythonScript = base_path('python/whisper_transcribe.py');

            $command = escapeshellcmd("python $pythonScript $path");
            $output = shell_exec($command);

            if (! $output) {
                throw new \Exception('No response from Whisper');
            }

            $result = json_decode($output, true);

            unlink($path);

            return response()->json([
                'success' => true,
                'text' => $result['text'] ?? '',
            ]);

        } catch (\Throwable $e) {

            \Log::error('WHISPER ERROR', [
                'message' => $e->getMessage(),
            ]);

            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
