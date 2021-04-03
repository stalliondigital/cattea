<div style="margin: 3rem; max-width: 50%; font-family: Sans-serif;">
    <h2>Hi Tanita, you've received a message on your contact form at <a style="color:coral; text-decoration: none;"
            href="https://cattea.ca">cattea.ca</a></h2>

    <div style="padding: 1rem; border-radius: 0.25rem; background-color: rgb(237, 237, 237);">
        <h3>From: {{ $name }}</h3>
        <h3>Sender Details:</h3>
        <p>Email: {{ $email }}</p>
        <p>Phone: {{ $phone }}</p>
        <p>Photography Type: {{ $type }}</p>
        <h3>Message:</h3>
        <p>{{ $messages }}</p>
    </div>
</div>
