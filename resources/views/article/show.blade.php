{{-- resources/views/article.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold mb-6 text-center">Article Details</h1>

        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-3xl font-semibold mb-4">{{ $article->title }}</h2>
            <p class="text-sm text-gray-500 mb-4">Created on: {{ $article->created_at->format('F j, Y') }}</p>
            <p class="text-gray-700 mb-4">{{ $article->content }}</p>
            <p class="font-semibold">Category: <span class="text-gray-700">{{ $article->category->name }}</span></p>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <p class="font-semibold">Tags:</p>
            <p class="text-gray-700">
                @foreach($article->tags as $tag)
                    <a href="{{ route('tag.show', $tag->slug) }}" class="text-blue-600 hover:underline">{{ $tag->name }}</a>{{ !$loop->last ? ', ' : '' }}
                @endforeach
            </p>
        </div>

        @php
            $sections = [
                "Top 5 Software of 2024" => [
                    "Overview" => "In this article, we review the top five software applications of 2024 that are transforming industries and enhancing productivity.",
                    "Asana" => "Asana is a comprehensive project management tool that integrates seamlessly with various platforms.",
                    "Tableau" => "Tableau offers powerful data analysis tools that help businesses make informed decisions.",
                    "Salesforce" => "Salesforce is a versatile CRM solution that allows businesses to manage customer relationships effectively.",
                    "Zoom" => "Zoom provides tools for video conferencing, document sharing, and virtual collaboration.",
                    "Norton Security" => "Norton Security focuses on cybersecurity, offering robust protection against threats."
                ],
                "Latest Hardware Innovations" => [
                    "Overview" => "Exploring the newest hardware technologies in 2024, including advancements in CPUs, GPUs, and IoT devices.",
                    "Advanced CPUs" => "New architectures are being introduced that enhance performance while reducing power consumption.",
                    "Cutting-Edge GPUs" => "Revolutionary graphics processing units that support AI and real-time rendering.",
                    "Next-Gen Storage Solutions" => "The latest SSDs offer unprecedented read/write speeds, significantly improving load times.",
                    "IoT Devices" => "Innovations in Internet of Things technology are making smart homes smarter.",
                    "Wearable Technology" => "Wearable devices are becoming more sophisticated, offering health tracking and fitness monitoring."
                ],
                "Opinions on Emerging Tech" => [
                    "Overview" => "Thoughts on the future of technology and its impact on society, economy, and daily life.",
                    "AI Advancements" => "The rise of AI brings both opportunities and challenges.",
                    "Blockchain Innovations" => "The transformative power of blockchain in various industries.",
                    "The Role of Tech in Education" => "How technology is reshaping education through online learning platforms.",
                    "Cybersecurity Challenges" => "Discussing the importance of robust cybersecurity measures."
                ],
                "The Future of Tech" => [
                    "Overview" => "An in-depth look at upcoming technologies that will shape our future.",
                    "Quantum Computing" => "Explaining how quantum computing could revolutionize data processing.",
                    "5G Technology" => "The rollout of 5G promises faster and more reliable internet connections.",
                    "Renewable Energy Tech" => "Innovations in renewable energy technology are crucial for sustainable development.",
                    "Augmented Reality" => "How augmented reality is changing user interaction in various fields.",
                    "Advanced Robotics" => "The role of advanced robotics in automation and their potential to revolutionize industries."
                ]
            ];
        @endphp

        @if(array_key_exists($article->title, $sections))
            @foreach($sections[$article->title] as $sectionTitle => $sectionContent)
                <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                    <h3 class="text-2xl font-semibold mb-4">{{ $sectionTitle }}</h3>
                    <p class="text-gray-700 mb-4">{{ $sectionContent }}</p>
                </div>
            @endforeach
        @else
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                <p class="text-gray-700 mb-4">No additional content available for this article.</p>
            </div>
        @endif

    </div>
</body>
</html>
