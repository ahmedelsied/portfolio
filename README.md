# Ahmed's Personal Portfolio Website

A modern, responsive personal portfolio website built with Next.js, TypeScript, and Tailwind CSS.

## 🚀 Features

- **Modern Design**: Clean, minimal design with smooth animations
- **Responsive**: Mobile-first approach with responsive design
- **Performance**: Optimized with Next.js Image component and lazy loading
- **SEO Optimized**: Proper meta tags and semantic HTML
- **Accessibility**: WCAG compliant with proper ARIA labels
- **TypeScript**: Full type safety throughout the application
- **Animations**: Smooth scroll animations using Framer Motion

## 🛠️ Tech Stack

- **Framework**: Next.js 14
- **Language**: TypeScript
- **Styling**: Tailwind CSS
- **Animations**: Framer Motion
- **Icons**: Heroicons
- **Deployment**: Vercel

## 📁 Project Structure

```
├── components/          # Reusable React components
│   ├── Hero.tsx        # Hero section component
│   ├── About.tsx       # About section component
│   ├── Projects.tsx    # Projects showcase component
│   ├── BlogPreview.tsx # Blog posts preview component
│   ├── Contact.tsx     # Contact form component
│   └── Footer.tsx      # Footer component
├── pages/              # Next.js pages
│   ├── _app.tsx        # App wrapper
│   └── index.tsx       # Home page
├── styles/             # Global styles
│   └── globals.css     # Tailwind CSS imports
├── public/             # Static assets
└── config files        # Configuration files
```

## 🚀 Getting Started

### Prerequisites

- Node.js 18+ 
- npm or yarn

### Installation

1. Clone the repository:
```bash
git clone https://github.com/ahmed/portfolio-website.git
cd portfolio-website
```

2. Install dependencies:
```bash
npm install
```

3. Copy environment variables:
```bash
cp .env.local.example .env.local
```

4. Update the environment variables in `.env.local` with your information.

5. Run the development server:
```bash
npm run dev
```

6. Open [http://localhost:3000](http://localhost:3000) in your browser.

## 🎨 Customization

### Personal Information

Update the following files with your personal information:

- `components/Hero.tsx` - Hero section content
- `components/About.tsx` - About section and skills
- `components/Projects.tsx` - Project showcase
- `components/BlogPreview.tsx` - Blog posts
- `components/Contact.tsx` - Contact information
- `components/Footer.tsx` - Footer content

### Styling

The project uses Tailwind CSS for styling. You can customize:

- Colors in `tailwind.config.js`
- Global styles in `styles/globals.css`
- Component-specific styles in individual component files

### Content

Replace placeholder content with your actual:

- Project information and links
- Blog post data
- Contact information
- Social media links
- Professional photo

## 📱 Responsive Design

The website is fully responsive and optimized for:

- Mobile devices (320px+)
- Tablets (768px+)
- Desktop (1024px+)
- Large screens (1280px+)

## 🚀 Deployment

### Vercel (Recommended)

1. Push your code to GitHub
2. Connect your repository to Vercel
3. Set up environment variables in Vercel dashboard
4. Deploy automatically on every push to main branch

### Manual Deployment

1. Build the project:
```bash
npm run build
```

2. Start the production server:
```bash
npm start
```

## 🔧 Available Scripts

- `npm run dev` - Start development server
- `npm run build` - Build for production
- `npm run start` - Start production server
- `npm run lint` - Run ESLint

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! Feel free to check the [issues page](https://github.com/ahmed/portfolio-website/issues).

## 📞 Contact

Ahmed - [@ahmed_dev](https://twitter.com/ahmed_dev) - ahmed@example.com

Project Link: [https://github.com/ahmed/portfolio-website](https://github.com/ahmed/portfolio-website)