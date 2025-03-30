---
title: I tried Vibe Coding for 4 hours, this is much bigger than I previously thought
description: Vibe Coding, as the name suggests. Takes a more holistic look at software development, where specialists are not required to dig deep into a skill or tech stack in order to perform their work and have a final product
date: 2025-03-30
duration: 12min
---

<!-- @layout-blog-post -->

# I tried Vibe Coding for 4 hours, this is much bigger than I previously thought

## What is Vibe Coding?

*Vibe Coding*, as the name suggests. Takes a more holistic look at software development, where specialists are not required to dig deep into a skill or tech stack in order to perform their work and have a final product. As someone who have worked more than half of his career switching between BA, PM, UX and Dev roles, it's for me the sweet spot where design, development, and product thinking merge by using AI to speed up and cover for more fine-grained skills, allowing people to create with flow rather than friction. 

Instead of having to endure endless courses online to have deep expert knowledge of every role you're gonna perform during the development of an application, vibe coding brings:

- **LLM-powered Rapid brainstorming and app concept idealisation**
- **Automatic UX Designing which enables quicker Prototyping**
- **AI-assisted code generation based on design files**
- **Manual adjustments on the codebase**

## My Case Study: A Horoscope app in react-native: This is how far I got in a timeframe of 4 hours

**Quick disclaimer:** I have already worked on the creation of multiple apps from discovery until first launch and late support, so for me the steps to create such an app were very clear. The speed can always vary depending on the people trying this out and how much effort you want to put on a particular step.

I wanted to use my prior knowledge on the lifecycle for an app development to be conceived until its' release, leverage it with Vibe Coding, in order to have a better perspective on its' potential. **As I was doing this on my free time on a Sunday, I didn't want to spend more than 4 hours**, so I have limited my time to this slot and to see how far I would've gotten with it. This is how it went:

### Step 1: Brainstorming and concept idealisation (10 minutes)

I have quickly chatted with (OpenAI's ChatGPT)[https://chatgpt.com/] per voice and explained that I wanted to create a horoscope app that was simple and intuitive to look and interact with, where an user could pick their zodiac sign and see quickly what the app had to tell them about it.

```text
That sounds like a fun project! For a horoscope app that's simple and intuitive, here are a few design tips:
1. Clean Layout: Use a clean, minimalistic design with plenty of white space. This will make the app feel welcoming and easy to navigate.
2. Zodiac Selection: Provide a simple way for users to select their zodiac sign, like a dropdown menu or a set of icons representing each sign.
3. Personalized Content: Once a sign is selected, display the horoscope clearly, with sections for daily, weekly, or monthly predictions.
4. Visual Aesthetics: Choose a color palette that reflects the mystical and celestial nature of horoscopes. Soft blues, purples, and golds can be great choices.
5. User-Friendly Navigation: Keep navigation simple, with a clear back button and easily accessible settings.
Do you have any specific features or elements in mind that you want to include?
```

Great start for a brainstorming, I already have some UX defaults I should strive for, coloring suggestions, layout suggestions and even feature suggestions that might be interesting to the user. For me the idea of having a grid for the zodiac signs sounded pretty good, so I expressed that in my response and asked it to generate a wireframe for the UI for me.

This was the final result of our interaction, not too bad, I would've removed the top dropdown element, but as I wanted to design it myself, I can easily just ignore that it's there. As I also wanted to have the horoscope in a separate page, I also would prefer to have the grid as 3x4 instead of 4x3 and the horoscope text in a separate page.

[<img src="/public/images/2025-03-30-blog-1.png" style="width: 100%; max-width: 400px; display: block; margin: auto;"/>](image.png)

### Step 2: Designing in Figma (2 Hours)

With the wireframe on my hand, I have started designing views on Figma. I took extra time here to make sure that components were being properly prototyped, and that the design actually looked good. I'm sure that this step could've been made quicker with another AI-powered tool or feature, but I wanted to make sure the design had a very good look and feel, as well as proper prototyping. (also it was super fun to reconnect with my designing skills, so I got a bit carried away here).

During this step I have done a few prompts on ChatGPT again to ask for its' opinion on the color pallete and the overall "feel" of the design, it sounded very positive and it suggested me fun changes to achieve a cooler design. It was a bit like having a UX-sparring buddy.

This was the end result:

![Figma screenshot](/public/images/2025-03-30-blog-2.png "Figma screenshot")

### Step 3: Generating the Code with Vercel's AI (20 minutes)

Once I had the Figma file ready I went to (Vercel’s v0)[https://v0.dev/] to generate a first code structure. I wanted to give it a very simple explanation only to tell it the tech stack, just to test how smart It would actually be. This was the prompt:

```text
Please recreate the UI shown in the attached Figma URL as accurately as possible.

To implement it: use react-native, expo and typescript.
```

The result was a codebase with 12 files, I wasn't able to deploy it directly to a GitHub repo, so I needed to copy-paste them manually into a new project, that process took me a bit of more time than it would've taken someone with a paid plan. This allowed me also to have a brief look at the files I was copying, and so far the quality was pretty good, the code was readable, the Figma prototypes were correctly identified as reusable components and the actions to navigate to another screen was also implemented.

This was the first version of the app after I installed all dependencies and ran `npm run web`:

![First result from v0](/public/images/2025-03-30-blog-3.png "First result from v0")

The icon design was pretty different from the design, also the bottom navigation bar was not sticking to the bottom of the screen once a different one was opened. Which is ok, I wasn't too aware that on figma it was possible to anchor elements to the bottom, so probably v0 didn't understand that it was a bottom navbar by itself.

The Vibe Coder here could definitely write follow-up queries to the chat and ask it to fix its' mistakes, but I was too eager to dive a bit deeper into the code and see what was happening, I gues old habits die hard.

Which brings us to the last step.

### Step 4: Manual fixes (1 Hour and 20 minutes)
Now it was time to interact with (GitHub's co-pilot)[https://github.com/features/copilot] and try to fix and address some of the contrasts that the app had form the design. This process required some manual SVG icon imports and recoloring.

Once my 4-hour timer went off, this was the current state of my horoscope app:

(IMAGE FINAL)

## My key takeaway for people working in big teams
Overall the way I see it, the usual roles will become less defined and will start overlapping. We might see new roles for: "Devs who can do UX prototyping" or "BAs with coding skills" in the future. In other words, it might be not required to have a team full of speciallists in different topics, but a team composed by many "Jacks of all trades" with overlapping skills who would differ from each other by a more nuanced extra knowledge in a particular area.

- **What does it mean for PMs and BA people?** You might not need to have a dev to code your idea, but you might need to learn some code principles as well. Refinement ceremonies might be replaced by interactions with a chat tool such as (Vercel’s v0)[https://v0.dev/] until it codes what you have previously proposed. On more premium account tiers, it would even enable you to deploy your own applications. But in order to optimise its' outputs and avoid uneccessary back-and-forth, you'll need to be able to understand the issue in the code.
- **What does it mean for UX people?** Your design and prototyping skills are key to optimising the code-generation with these tools, it's worth digging into how you can optimise your Figma file structure, components and anchors to optimise AI interpretation. Understanding better also tech requirements will be also key for you to proactively adapt your designs and requirements to work with AI. Similar to PMs and BAs, you'll need to get in touch with some code principles, even if it's only in a language-agnostic way.
- **What does it mean for Dev people?** This will be the ultimate push to break the bubble of learning endless tech stacks and becoming masters of only a particular language. Business and PM skills as well as design/prototyping skills will be required of you more than ever if you're to adapt into the new needs of the IT industry. Code skills are definitely necessary in order to understand and dig deeper into the output and manually fix outputs (or empower a new output by giving a detailed prompt about where the error is coming from), but what we call the "soft skills" of software development will help you adapt into the potential new requirements coming up.

## Final thought: Are we moving into a more democratic IT industry?
This quick experiment was crucial for me to see how much this changes the current dynamic of developing a new app. A process that would normally take me days (if not weeks) and lots of prior knowledge in different areas to finish, was covered in just a few hours. This also enables more independent creators to develop their own product much faster and in a much more autonomous way.

It's becoming easier for the average person to code and launch their own application or create their own tools, this is a huge potential for people to strive for more self-determination in their lives and depend less on specialists to create what they want. I would not be surprised if we see more Tech startups being founded without a single dev involved, or a single dev launching a very sleek-designed, complex business application without the involvement of a any deisgner or stakeholders.

As people have the potential to become more autonomous without much struggle, how will big companies be able to maintain their workforce and keep their jobs interesting?