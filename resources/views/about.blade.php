@extends('layouts.app')

@section('content')
    <h1>About Me</h1>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <ul class="steps flex justify-center">
        <li data-content="?" class="step step-neutral"></li>
        <li data-content="!" class="step step-neutral"></li>
        <li data-content="✓" class="step step-neutral"></li>
        <li data-content="✕" class="step step-neutral"></li>
        <li data-content="★" class="step step-neutral"></li>
        <li data-content="!" class="step step-neutral"></li>
        <li data-content="●" class="step step-neutral"></li>
    </ul>

    <div class='font-bold  font-mono text-xl mt-4'>
        <p class='bg-green-300  text-black'> Expertise:: React-js, HTML5, CSS3, Bootstrap, Tailwinds, DaisyUI, ES6, Rest API, React Router </p>

        <p class='bg-yellow-300 text-black '>Comfortable: Express-js, MongoDB, Firebase, Stripe, JSON, React hook, React Query </p>

        <p class='bg-red-300 text-black ' >Familiar: Nodejs, Redux.</p>

        <p class='bg-blue-300  text-black ' >Tools: GitHub, Chrome Dev-Tools, VS- Code, NPM, Netlify, Figma, Vercel, MS Office.
        </p>

        <p class='bg-gray-300   text-black'>Programming Language: C, Java-script. </p>
    </div>


    "
    <h1>Personal Strengths & Skills"</h1>


<div class='flex gap-5 justify-center align-center'>
    <div class='mt-10'>
        <div class="grid w-full h-20 rounded bg-primary text-primary-content place-content-center">Good leadership</div>
        <div class="grid w-full h-20 rounded bg-accent text-accent-content place-content-center">Self-motivated</div>
        <div class="grid w-full h-20 rounded bg-secondary text-secondary-content place-content-center">Hard working</div>
        <div class="grid w-full h-20 rounded bg-warning text-warning-content place-content-center">Time management</div>
    </div>

    <div class='mt-10'>
        <div class="grid w-full h-20 rounded bg-warning text-warning-content place-content-center">Creativity</div>
        <div class="grid w-full h-20 rounded bg-primary text-primary-content place-content-center">Attention details</div>
        <div class="grid w-full h-20 rounded bg-accent text-accent-content place-content-center">Positive attitude</div>
        <div class="grid w-full h-20 rounded bg-secondary text-secondary-content place-content-center">Critical thinking</div>
    </div>

    <div class='mt-10'>
        <div class="grid w-full h-20 rounded bg-secondary text-secondary-content place-content-center">Critical thinking</div>
        <div class="grid w-full h-20 rounded bg-warning text-warning-content place-content-center">Problem-solving</div>
        <div class="grid w-full h-20 rounded bg-primary text-primary-content place-content-center">Multitasking</div>
        <div class="grid w-full h-20 rounded bg-accent text-accent-content place-content-center">Negotiation skills</div>
    </div>
</div>



@endsection
