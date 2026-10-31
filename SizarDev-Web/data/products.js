/* ==========================================================================
   Sizar Phones — Store Configuration, Bilingual Dictionary, Categories,
   16 Mock Products (with Dark SVG Hardware Tiles) & Repair Services
   ========================================================================== */

window.AUTH_ENABLED = false;

window.SIZAR_CONFIG = {
  storeName: {
    en: "Sizar Phones",
    ar: "سيزار فونز"
  },
  tagline: {
    en: "Precision repair. Considered devices.",
    ar: "صيانة دقيقة. أجهزة مختارة بعناية."
  },
  currency: "DZD",
  contactUrl: "https://wa.me/213550000000",
  defaultLang: "en"
};

/**
 * Generates a refined dark placeholder SVG data-URI tile (gradient + hardware glyph).
 * Because it lives behind product.image / product.gallery, real .webp/.jpg paths
 * can replace these strings directly without changing any template code.
 */
function createHardwareTile(type, accentHex, labelText, angleDeg) {
  const angle = angleDeg || 135;
  const glyphs = {
    phone: `<rect x="195" y="95" width="150" height="310" rx="28" fill="#141417" stroke="${accentHex}" stroke-width="2.5"/>
            <rect x="245" y="112" width="50" height="14" rx="7" fill="#09090b"/>
            <circle cx="270" cy="378" r="18" fill="none" stroke="rgba(255,255,255,0.12)" stroke-width="1.5"/>`,
    phonePro: `<rect x="190" y="90" width="160" height="320" rx="30" fill="#151519" stroke="${accentHex}" stroke-width="2.5"/>
               <rect x="206" y="106" width="66" height="66" rx="16" fill="#1d1d22" stroke="rgba(255,255,255,0.16)" stroke-width="1.5"/>
               <circle cx="224" cy="124" r="11" fill="#0b0b0d" stroke="${accentHex}" stroke-width="1.5"/>
               <circle cx="224" cy="152" r="11" fill="#0b0b0d" stroke="${accentHex}" stroke-width="1.5"/>
               <circle cx="252" cy="138" r="11" fill="#0b0b0d" stroke="${accentHex}" stroke-width="1.5"/>`,
    tablet: `<rect x="145" y="95" width="250" height="310" rx="24" fill="#141418" stroke="${accentHex}" stroke-width="2.5"/>
             <rect x="162" y="112" width="216" height="276" rx="14" fill="#0c0c0e" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
             <circle cx="270" cy="104" r="3" fill="${accentHex}"/>`,
    charger: `<rect x="200" y="155" width="140" height="165" rx="28" fill="#16161a" stroke="${accentHex}" stroke-width="2.5"/>
              <path d="M242 155 v-36 M298 155 v-36" stroke="rgba(255,255,255,0.65)" stroke-width="7" stroke-linecap="round"/>
              <path d="M276 208 l-18 32 h24 l-14 34" fill="none" stroke="${accentHex}" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>`,
    powerbank: `<rect x="195" y="115" width="150" height="270" rx="26" fill="#151519" stroke="${accentHex}" stroke-width="2.5"/>
                <circle cx="270" cy="235" r="42" fill="none" stroke="${accentHex}" stroke-width="2" stroke-dasharray="6 4"/>
                <path d="M270 212 v46 M247 235 h46" stroke="rgba(255,255,255,0.35)" stroke-width="2" stroke-linecap="round"/>`,
    cable: `<path d="M175 340 C175 210, 365 290, 365 160" fill="none" stroke="${accentHex}" stroke-width="8" stroke-linecap="round"/>
            <rect x="157" y="330" width="36" height="52" rx="8" fill="#1d1d22" stroke="rgba(255,255,255,0.4)" stroke-width="2"/>
            <rect x="347" y="112" width="36" height="52" rx="8" fill="#1d1d22" stroke="rgba(255,255,255,0.4)" stroke-width="2"/>`,
    case: `<rect x="192" y="92" width="156" height="316" rx="30" fill="#16161b" stroke="${accentHex}" stroke-width="3"/>
           <circle cx="270" cy="260" r="38" fill="none" stroke="${accentHex}" stroke-width="2.5"/>
           <rect x="262" y="312" width="16" height="34" rx="8" fill="none" stroke="${accentHex}" stroke-width="2"/>`,
    glass: `<rect x="205" y="105" width="140" height="295" rx="26" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.28)" stroke-width="2"/>
            <rect x="185" y="90" width="140" height="295" rx="26" fill="rgba(41,151,255,0.07)" stroke="${accentHex}" stroke-width="2.5"/>`,
    audio: `<path d="M185 265 a85 85 0 0 1 170 0" fill="none" stroke="${accentHex}" stroke-width="8" stroke-linecap="round"/>
            <rect x="168" y="250" width="42" height="78" rx="21" fill="#19191f" stroke="rgba(255,255,255,0.35)" stroke-width="2"/>
            <rect x="330" y="250" width="42" height="78" rx="21" fill="#19191f" stroke="rgba(255,255,255,0.35)" stroke-width="2"/>`
  };
  const svg = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 540 500" width="540" height="500">
    <defs>
      <radialGradient id="g" cx="50%" cy="38%" r="65%">
        <stop offset="0%" stop-color="#232329"/>
        <stop offset="55%" stop-color="#121215"/>
        <stop offset="100%" stop-color="#09090b"/>
      </radialGradient>
    </defs>
    <rect width="540" height="500" fill="none"/>
    <circle cx="270" cy="240" r="150" fill="${accentHex}" opacity="0.06"/>
    ${glyphs[type] || glyphs.phone}
    <text x="270" y="458" text-anchor="middle" fill="#86868b" font-family="-apple-system, Inter, sans-serif" font-size="13" font-weight="500" letter-spacing="0.5">${labelText}</text>
  </svg>`;
  return "data:image/svg+xml;utf8," + encodeURIComponent(svg);
}

window.SIZAR_CATEGORIES = [
  {
    id: "phones",
    name: { en: "Phones", ar: "الهواتف الذكية" },
    subtitle: {
      en: "Flagship devices, inspected and warrantied.",
      ar: "هواتف رائدة مفحوصة ومضمونة."
    },
    icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="3"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>`
  },
  {
    id: "tablets",
    name: { en: "Tablets", ar: "الأجهزة اللوحية" },
    subtitle: {
      en: "Portable canvases for work, study, and studio.",
      ar: "شاشات محمولة للعمل والدراسة والإبداع."
    },
    icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2.5"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>`
  },
  {
    id: "chargers",
    name: { en: "Chargers & Power", ar: "الشواحن والطاقة" },
    subtitle: {
      en: "GaN fast adapters, MagSafe docks, and high-density cells.",
      ar: "شواحن GaN السريعة وبطاريات متنقلة عالية السعة."
    },
    icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>`
  },
  {
    id: "cables",
    name: { en: "Cables", ar: "الكابلات" },
    subtitle: {
      en: "Braided USB-C, Thunderbolt, and Kevlar-reinforced leads.",
      ar: "كابلات مضفرة فائقة المتانة للشحن ونقل البيانات."
    },
    icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M4 9h4v4H4zM16 11h4v4h-4z"/><path d="M8 11h4a2 2 0 0 1 2 2v0a2 2 0 0 0 2 2"/></svg>`
  },
  {
    id: "cases",
    name: { en: "Cases & Protection", ar: "الأغطية والحماية" },
    subtitle: {
      en: "Aramid shells, sapphire lens rings, and optical glass.",
      ar: "أغطية أراميد نحيفة وزجاج حماية بمعايير بصرية."
    },
    icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>`
  },
  {
    id: "audio",
    name: { en: "Audio", ar: "الصوتيات" },
    subtitle: {
      en: "Lossless wireless earbuds and reference studio headphones.",
      ar: "سماعات لاسلكية بعزل ضوضاء وصوت نقي."
    },
    icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>`
  }
];

window.SIZAR_PRODUCTS = [
  {
    id: "iphone-16-pro",
    name: { en: "iPhone 16 Pro", ar: "آيفون 16 برو" },
    category: "phones",
    price: 248000,
    stock: 9,
    description: {
      en: "Grade-5 titanium enclosure, A18 Pro silicon, and 120Hz ProMotion Super Retina XDR display. Factory unlocked with full Sizar hardware warranty.",
      ar: "هيكل من التيتانيوم، شريحة A18 Pro، وشاشة Super Retina XDR بتردد 120Hz. مفتوح رسمياً مع ضمان سيزار الشامل."
    },
    specs: [
      { k: { en: "Display", ar: "الشاشة" }, v: { en: "6.3-inch Super Retina XDR OLED", ar: "6.3 بوصة Super Retina XDR OLED" } },
      { k: { en: "Chip", ar: "المعالج" }, v: { en: "A18 Pro (6-core GPU)", ar: "A18 Pro سداسي النوى" } },
      { k: { en: "Camera", ar: "الكاميرا" }, v: { en: "48MP Fusion + 5x Telephoto", ar: "48 ميجابكسل + تقريب بصري 5x" } },
      { k: { en: "Warranty", ar: "الضمان" }, v: { en: "12 Months Sizar Care", ar: "12 شهراً ضمان سيزار" } }
    ],
    variants: {
      colors: [
        { en: "Black Titanium", ar: "تيتانيوم أسود" },
        { en: "Natural Titanium", ar: "تيتانيوم طبيعي" },
        { en: "Desert Titanium", ar: "تيتانيوم صحراوي" }
      ],
      storage: ["128 GB", "256 GB", "512 GB"]
    },
    image: createHardwareTile("phonePro", "#2997ff", "iPhone 16 Pro · Titanium"),
    gallery: [
      createHardwareTile("phonePro", "#2997ff", "iPhone 16 Pro · Back Enclosure"),
      createHardwareTile("phone", "#0071e3", "iPhone 16 Pro · Super Retina XDR"),
      createHardwareTile("phonePro", "#86868b", "iPhone 16 Pro · Triple Camera System")
    ]
  },
  {
    id: "iphone-16",
    name: { en: "iPhone 16", ar: "آيفون 16" },
    category: "phones",
    price: 189000,
    stock: 14,
    description: {
      en: "Aerospace-grade aluminum with color-infused glass back, Action button, Camera Control, and A18 chip efficiency.",
      ar: "ألمنيوم بمعايير الطيران مع زجاج خلفي مصقول، زر الإجراءات، والتحكم بالكاميرا مع معالج A18."
    },
    specs: [
      { k: { en: "Display", ar: "الشاشة" }, v: { en: "6.1-inch OLED 2000 nits peak", ar: "6.1 بوصة OLED سطوع 2000 شمعة" } },
      { k: { en: "Chip", ar: "المعالج" }, v: { en: "A18 Bionic", ar: "معالج A18" } },
      { k: { en: "Connector", ar: "المنفذ" }, v: { en: "USB-C + MagSafe", ar: "USB-C مع دعم MagSafe" } }
    ],
    variants: {
      colors: [
        { en: "Obsidian Black", ar: "أسود داكن" },
        { en: "Ultramarine", ar: "أزرق فائق" },
        { en: "White", ar: "أبيض" }
      ],
      storage: ["128 GB", "256 GB"]
    },
    image: createHardwareTile("phone", "#0071e3", "iPhone 16 · A18"),
    gallery: [
      createHardwareTile("phone", "#0071e3", "iPhone 16 · Profile"),
      createHardwareTile("phonePro", "#2997ff", "iPhone 16 · Dual 48MP Camera")
    ]
  },
  {
    id: "galaxy-s24-ultra",
    name: { en: "Samsung Galaxy S24 Ultra", ar: "سامسونج جالاكسي S24 ألترا" },
    category: "phones",
    price: 229000,
    stock: 7,
    description: {
      en: "Flat Corning Gorilla Armor anti-reflective display, built-in S Pen precision, and Snapdragon 8 Gen 3 performance.",
      ar: "شاشة مسطحة مضادة للانعكاس مع قلم S Pen المدمج ومعالج Snapdragon 8 Gen 3."
    },
    specs: [
      { k: { en: "Display", ar: "الشاشة" }, v: { en: "6.8-inch Dynamic AMOLED 2X", ar: "6.8 بوصة Dynamic AMOLED 2X" } },
      { k: { en: "Camera", ar: "الكاميرا" }, v: { en: "200MP Quad Tele System", ar: "200 ميجابكسل رباعية العدسات" } },
      { k: { en: "Battery", ar: "البطارية" }, v: { en: "5000 mAh · 45W Fast Charge", ar: "5000 مللي أمبير · شحن 45 واط" } }
    ],
    variants: {
      colors: [
        { en: "Titanium Black", ar: "تيتانيوم أسود" },
        { en: "Titanium Gray", ar: "تيتانيوم رمادي" }
      ],
      storage: ["256 GB", "512 GB"]
    },
    image: createHardwareTile("phonePro", "#5e5ce6", "Galaxy S24 Ultra · S Pen"),
    gallery: [
      createHardwareTile("phonePro", "#5e5ce6", "Galaxy S24 Ultra · Titanium Frame"),
      createHardwareTile("phone", "#2997ff", "Galaxy S24 Ultra · Anti-Reflective Display")
    ]
  },
  {
    id: "pixel-9-pro",
    name: { en: "Google Pixel 9 Pro", ar: "جوجل بكسل 9 برو" },
    category: "phones",
    price: 196000,
    stock: 5,
    description: {
      en: "Super Actua LTPO display, sculpted matte glass back, and computational photography calibrated for natural skin tones and low light.",
      ar: "شاشة Super Actua LTPO، ظهر زجاجي غير لامع، وتصوير احترافي فائق الدقة في الإضاءة المنخفضة."
    },
    specs: [
      { k: { en: "Display", ar: "الشاشة" }, v: { en: "6.3-inch LTPO OLED 1-120Hz", ar: "6.3 بوصة LTPO OLED 120Hz" } },
      { k: { en: "Memory", ar: "الذاكرة" }, v: { en: "16 GB RAM", ar: "16 جيجابايت رام" } },
      { k: { en: "Optics", ar: "العدسات" }, v: { en: "50MP Main + 48MP Ultrawide + 48MP 5x", ar: "نظام كاميرات ثلاثي 50MP" } }
    ],
    variants: {
      colors: [
        { en: "Obsidian", ar: "أسود أوبسيديان" },
        { en: "Hazel", ar: "رمادي زيتوني" }
      ],
      storage: ["128 GB", "256 GB"]
    },
    image: createHardwareTile("phone", "#30d158", "Pixel 9 Pro · Super Actua"),
    gallery: [
      createHardwareTile("phone", "#30d158", "Pixel 9 Pro · Camera Bar"),
      createHardwareTile("phonePro", "#2997ff", "Pixel 9 Pro · Matte Glass")
    ]
  },
  {
    id: "ipad-pro-m4",
    name: { en: "iPad Pro 11″ (M4)", ar: "آيباد برو 11 بوصة (M4)" },
    category: "tablets",
    price: 235000,
    stock: 6,
    description: {
      en: "Ultra Retina XDR tandem OLED display in an impossibly thin 5.3 mm aluminum chassis powered by the M4 chip.",
      ar: "شاشة Ultra Retina XDR بطبقتين OLED في هيكل فائق النحافة بسماكة 5.3 ملم مع شريحة M4."
    },
    specs: [
      { k: { en: "Display", ar: "الشاشة" }, v: { en: "11-inch Tandem OLED ProMotion", ar: "11 بوصة Tandem OLED ProMotion" } },
      { k: { en: "Thickness", ar: "السماكة" }, v: { en: "5.3 mm · 444 grams", ar: "5.3 ملم · 444 غرام" } },
      { k: { en: "Port", ar: "المنفذ" }, v: { en: "Thunderbolt / USB 4", ar: "منفذ Thunderbolt / USB 4" } }
    ],
    variants: {
      colors: [
        { en: "Space Black", ar: "أسود فلكي" },
        { en: "Silver", ar: "فضي" }
      ],
      storage: ["256 GB", "512 GB", "1 TB"]
    },
    image: createHardwareTile("tablet", "#2997ff", "iPad Pro 11″ · Tandem OLED"),
    gallery: [
      createHardwareTile("tablet", "#2997ff", "iPad Pro 11″ · 5.3mm Profile"),
      createHardwareTile("tablet", "#0071e3", "iPad Pro 11″ · M4 Architecture")
    ]
  },
  {
    id: "ipad-air-m2",
    name: { en: "iPad Air 11″ (M2)", ar: "آيباد إير 11 بوصة (M2)" },
    category: "tablets",
    price: 142000,
    stock: 11,
    description: {
      en: "Liquid Retina display with P3 wide color, landscape stereo audio, and Apple M2 performance for multitasking.",
      ar: "شاشة Liquid Retina بألوان P3 الواسعة وصوت ستيريو أفقي مع أداء شريحة M2."
    },
    specs: [
      { k: { en: "Display", ar: "الشاشة" }, v: { en: "11-inch Liquid Retina True Tone", ar: "11 بوصة Liquid Retina" } },
      { k: { en: "Chip", ar: "المعالج" }, v: { en: "Apple M2 (8-core CPU)", ar: "شريحة Apple M2" } },
      { k: { en: "Compatibility", ar: "التوافق" }, v: { en: "Apple Pencil Pro & Magic Keyboard", ar: "يدعم Apple Pencil Pro" } }
    ],
    variants: {
      colors: [
        { en: "Space Gray", ar: "رمادي فلكي" },
        { en: "Starlight", ar: "ضوء النجوم" }
      ],
      storage: ["128 GB", "256 GB"]
    },
    image: createHardwareTile("tablet", "#0071e3", "iPad Air 11″ · M2"),
    gallery: [
      createHardwareTile("tablet", "#0071e3", "iPad Air · Liquid Retina"),
      createHardwareTile("tablet", "#86868b", "iPad Air · Unibody")
    ]
  },
  {
    id: "galaxy-tab-s9",
    name: { en: "Galaxy Tab S9 11″", ar: "جالاكسي تاب S9 حجم 11 بوصة" },
    category: "tablets",
    price: 158000,
    stock: 8,
    description: {
      en: "Dynamic AMOLED 2X display, IP68 water and dust resistance, and inbox S Pen for note-taking and sketching.",
      ar: "شاشة Dynamic AMOLED 2X، مقاومة الماء والغبار IP68، مع قلم S Pen مرفق في العلبة."
    },
    specs: [
      { k: { en: "Display", ar: "الشاشة" }, v: { en: "11-inch Dynamic AMOLED 2X 120Hz", ar: "11 بوصة AMOLED 2X 120Hz" } },
      { k: { en: "Protection", ar: "الحماية" }, v: { en: "IP68 Armor Aluminum", ar: "مقاومة IP68 وهيكل ألمنيوم" } },
      { k: { en: "Audio", ar: "الصوت" }, v: { en: "Quad AKG Speakers", ar: "4 مكبرات صوت AKG" } }
    ],
    variants: {
      colors: [
        { en: "Graphite", ar: "غرافيت" },
        { en: "Beige", ar: "بيج" }
      ],
      storage: ["128 GB", "256 GB"]
    },
    image: createHardwareTile("tablet", "#5e5ce6", "Galaxy Tab S9 · AMOLED 2X"),
    gallery: [
      createHardwareTile("tablet", "#5e5ce6", "Galaxy Tab S9 · Front"),
      createHardwareTile("tablet", "#2997ff", "Galaxy Tab S9 · S Pen Included")
    ]
  },
  {
    id: "sizar-gan-67w",
    name: { en: "Sizar 67W Dual USB-C GaN Charger", ar: "شاحن GaN ثنائي المنافذ بقدرة 67 واط" },
    category: "chargers",
    price: 6900,
    stock: 28,
    description: {
      en: "Gallium Nitride thermal architecture delivers 67W Power Delivery across two USB-C ports with continuous temperature monitoring.",
      ar: "تقنية نيتريد الغاليوم GaN توفر شحناً سريعاً بقدرة 67 واط عبر منفذي USB-C مع مراقبة حرارية مستمرة."
    },
    specs: [
      { k: { en: "Output", ar: "القدرة" }, v: { en: "67W Max (PD 3.0 + PPS)", ar: "67 واط كحد أقصى (PD 3.0 + PPS)" } },
      { k: { en: "Ports", ar: "المنافذ" }, v: { en: "2× USB-C + 1× USB-A", ar: "منفذا USB-C + منفذ USB-A" } },
      { k: { en: "Plug", ar: "القابس" }, v: { en: "EU Two-Pin (Algeria Standard)", ar: "قابس أوروبي ثنائي (معيار الجزائر)" } }
    ],
    variants: {
      colors: [
        { en: "Matte Black", ar: "أسود مطفي" },
        { en: "Titanium Gray", ar: "رمادي تيتانيوم" }
      ],
      storage: []
    },
    image: createHardwareTile("charger", "#2997ff", "67W GaN · Dual USB-C"),
    gallery: [
      createHardwareTile("charger", "#2997ff", "67W GaN · Compact Block"),
      createHardwareTile("charger", "#0071e3", "67W GaN · Port Array")
    ]
  },
  {
    id: "magsafe-3in1-stand",
    name: { en: "Qi2 15W Magnetic 3-in-1 Stand", ar: "قاعدة شحن مغناطيسية ثلاثية Qi2 بقدرة 15 واط" },
    category: "chargers",
    price: 14500,
    stock: 12,
    description: {
      en: "Weighted anodized aluminum desk stand charges phone, earbuds, and watch simultaneously with certified 15W Qi2 magnetic alignment.",
      ar: "قاعدة مكتبية من الألمنيوم المؤكسد تشحن الهاتف والسماعات والساعة في آن واحد بقدرة 15 واط Qi2."
    },
    specs: [
      { k: { en: "Wireless Output", ar: "الشحن اللاسلكي" }, v: { en: "15W Qi2 Magnetic + 5W Watch + 5W Audio", ar: "15 واط Qi2 مغناطيسي + 5 واط + 5 واط" } },
      { k: { en: "Material", ar: "الخامة" }, v: { en: "CNC Anodized Aluminum + Soft Silicone", ar: "ألمنيوم مؤكسد مع سيليكون ناعم" } }
    ],
    variants: {
      colors: [
        { en: "Space Black", ar: "أسود فلكي" }
      ],
      storage: []
    },
    image: createHardwareTile("charger", "#0071e3", "Qi2 15W · 3-in-1 Stand"),
    gallery: [
      createHardwareTile("charger", "#0071e3", "Qi2 3-in-1 · Standby View")
    ]
  },
  {
    id: "powerbank-10k-mag",
    name: { en: "Slim 10,000mAh Magnetic Power Bank", ar: "بطارية متنقلة مغناطيسية نحيفة 10,000 مللي أمبير" },
    category: "chargers",
    price: 9800,
    stock: 19,
    description: {
      en: "Snaps magnetically onto MagSafe phones with 15W wireless charging and a bidirectional 30W USB-C port for rapid wired top-ups.",
      ar: "تلتصق مغناطيسياً بهواتف MagSafe مع شحن لاسلكي 15 واط ومنفذ USB-C ثنائي الاتجاه بقدرة 30 واط."
    },
    specs: [
      { k: { en: "Capacity", ar: "السعة" }, v: { en: "10,000 mAh / 38.5 Wh", ar: "10,000 مللي أمبير (38.5 واط ساعي)" } },
      { k: { en: "Wired I/O", ar: "الشحن السلكي" }, v: { en: "30W USB-C PD In/Out", ar: "30 واط USB-C إدخال وإخراج" } },
      { k: { en: "Thickness", ar: "السماكة" }, v: { en: "12.8 mm Aluminum Shell", ar: "12.8 ملم هيكل ألمنيوم" } }
    ],
    variants: {
      colors: [
        { en: "Graphite", ar: "غرافيت" },
        { en: "Midnight Blue", ar: "أزرق ليلي" }
      ],
      storage: []
    },
    image: createHardwareTile("powerbank", "#2997ff", "10,000mAh · MagSafe Pack"),
    gallery: [
      createHardwareTile("powerbank", "#2997ff", "10,000mAh · Magnetic Ring"),
      createHardwareTile("powerbank", "#30d158", "10,000mAh · 30W USB-C")
    ]
  },
  {
    id: "cable-usbc-240w",
    name: { en: "Braided USB-C to USB-C 240W Cable (2m)", ar: "كابل USB-C مضفر بقدرة 240 واط (2 متر)" },
    category: "cables",
    price: 2900,
    stock: 45,
    description: {
      en: "E-Marker smart chip regulates up to 240W USB Power Delivery 3.1 inside a tangle-free woven nylon jacket tested to 25,000 bends.",
      ar: "مزود بشريحة E-Marker الذكية لدعم شحن يصل إلى 240 واط بغلاف مضفر مقاوم للانثناء حتى 25,000 مرة."
    },
    specs: [
      { k: { en: "Power Rating", ar: "قدرة الشحن" }, v: { en: "240W (48V / 5A) USB-PD 3.1", ar: "240 واط بمعيار USB-PD 3.1" } },
      { k: { en: "Length", ar: "الطول" }, v: { en: "2.0 Meters", ar: "2.0 متر" } },
      { k: { en: "Jacket", ar: "الغلاف" }, v: { en: "Ballistic Woven Nylon", ar: "نايلون منسوج عالي الكثافة" } }
    ],
    variants: {
      colors: [
        { en: "Carbon Black", ar: "أسود كربوني" },
        { en: "Storm Gray", ar: "رمادي داكن" }
      ],
      storage: ["1 m", "2 m"]
    },
    image: createHardwareTile("cable", "#2997ff", "USB-C 240W · Woven 2m"),
    gallery: [
      createHardwareTile("cable", "#2997ff", "USB-C 240W · Anodized Heads")
    ]
  },
  {
    id: "cable-usbc-lightning-mfi",
    name: { en: "MFi USB-C to Lightning Fast Cable", ar: "كابل USB-C إلى Lightning معتمد MFi" },
    category: "cables",
    price: 3400,
    stock: 32,
    description: {
      en: "Apple MFi certified C94 terminal ensures zero warning prompts and rapid 50% charge in 28 minutes for legacy iPhone and iPad models.",
      ar: "موصل C94 معتمد رسمياً من أبل MFi لشحن سريع وآمن بنسبة 50% خلال 28 دقيقة."
    },
    specs: [
      { k: { en: "Certification", ar: "الاعتماد" }, v: { en: "Official Apple MFi (C94)", ar: "معتمد رسمياً MFi C94" } },
      { k: { en: "Length", ar: "الطول" }, v: { en: "1.2 Meters", ar: "1.2 متر" } }
    ],
    variants: {
      colors: [
        { en: "Matte Black", ar: "أسود مطفي" },
        { en: "White", ar: "أبيض" }
      ],
      storage: []
    },
    image: createHardwareTile("cable", "#0071e3", "MFi C94 · USB-C to Lightning"),
    gallery: [
      createHardwareTile("cable", "#0071e3", "MFi C94 · Reinforced Strain Relief")
    ]
  },
  {
    id: "case-aramid-mag",
    name: { en: "600D Aramid Fiber MagSafe Case", ar: "غطاء ألياف الأراميد 600D المتوافق مع MagSafe" },
    category: "cases",
    price: 6400,
    stock: 22,
    description: {
      en: "Woven from aerospace 600D aramid fiber at just 0.95 mm thin with a CNC aluminum camera lip and embedded N52 magnet array.",
      ar: "منسوج من ألياف الأراميد 600D بسماكة 0.95 ملم فقط مع حافة كاميرا من الألمنيوم ومغناطيس N52 مدمج."
    },
    specs: [
      { k: { en: "Thickness", ar: "السماكة" }, v: { en: "0.95 mm · 19 grams", ar: "0.95 ملم · وزن 19 غرام" } },
      { k: { en: "Magnets", ar: "المغناطيس" }, v: { en: "Integrated N52 MagSafe Ring", ar: "حلقة MagSafe مدمجة N52" } },
      { k: { en: "Models", ar: "التوافق" }, v: { en: "iPhone 16 Pro / 16 / 15 Pro", ar: "آيفون 16 برو / 16 / 15 برو" } }
    ],
    variants: {
      colors: [
        { en: "Twill Carbon", ar: "كربون مطفي" }
      ],
      storage: ["iPhone 16 Pro", "iPhone 16", "Galaxy S24 Ultra"]
    },
    image: createHardwareTile("case", "#2997ff", "600D Aramid · 0.95mm Case"),
    gallery: [
      createHardwareTile("case", "#2997ff", "600D Aramid · MagSafe Array"),
      createHardwareTile("case", "#86868b", "600D Aramid · CNC Camera Bezel")
    ]
  },
  {
    id: "glass-sapphire-shield",
    name: { en: "9H Anti-Reflective Tempered Glass (2-Pack)", ar: "زجاج حماية 9H مضاد للانعكاس (عبوة قطعتين)" },
    category: "cases",
    price: 2800,
    stock: 40,
    description: {
      en: "Ion-exchanged aluminosilicate glass with oleophobic coating and a dust-free alignment tray for bubble-free installation in 15 seconds.",
      ar: "زجاج ألومينوسيليكات مقسى بطبقة مقاومة للبصمات مع قالب تركيب دقيق خالٍ من الغبار والفقاعات."
    },
    specs: [
      { k: { en: "Hardness", ar: "الصلابة" }, v: { en: "9H Micro-polished Edge", ar: "صلابة 9H بحواف مصقولة" } },
      { k: { en: "In the Box", ar: "محتويات العلبة" }, v: { en: "2× Glass + Auto-Align Tray", ar: "قطعتان + قالب تركيب تلقائي" } }
    ],
    variants: {
      colors: [
        { en: "Optical Clear", ar: "شفاف فائق الوضوح" },
        { en: "Privacy 28°", ar: "خصوصية 28 درجة" }
      ],
      storage: ["iPhone 16 Pro", "iPhone 16", "iPhone 15 Pro"]
    },
    image: createHardwareTile("glass", "#0071e3", "9H Optical Glass · 2-Pack"),
    gallery: [
      createHardwareTile("glass", "#0071e3", "9H Glass · Auto-Align Tray")
    ]
  },
  {
    id: "airpods-pro-2-usbc",
    name: { en: "AirPods Pro (2nd Gen, USB-C)", ar: "إيربودز برو (الجيل الثاني، USB-C)" },
    category: "audio",
    price: 54000,
    stock: 15,
    description: {
      en: "H2 headphone chip delivers 2x Active Noise Cancellation, Adaptive Audio, Conversation Awareness, and IP54 MagSafe USB-C charging case.",
      ar: "شريحة H2 توفر ضعف عزل الضوضاء النشط، الصوت التكيفي، وعلبة شحن MagSafe بمنفذ USB-C مقاومة للغبار IP54."
    },
    specs: [
      { k: { en: "Chip", ar: "الشريحة" }, v: { en: "Apple H2 + U1 in Case", ar: "شريحة H2 مع U1 في العلبة" } },
      { k: { en: "Battery Life", ar: "البطارية" }, v: { en: "6 hrs listening (30 hrs with case)", ar: "6 ساعات (30 ساعة مع العلبة)" } },
      { k: { en: "Case", ar: "علبة الشحن" }, v: { en: "MagSafe + USB-C + Speaker", ar: "MagSafe و USB-C ومكبر صوت" } }
    ],
    variants: {
      colors: [
        { en: "White", ar: "أبيض" }
      ],
      storage: []
    },
    image: createHardwareTile("audio", "#2997ff", "AirPods Pro 2 · USB-C"),
    gallery: [
      createHardwareTile("audio", "#2997ff", "AirPods Pro 2 · H2 Acoustic System"),
      createHardwareTile("audio", "#0071e3", "AirPods Pro 2 · MagSafe Case")
    ]
  },
  {
    id: "studio-anc-overear",
    name: { en: "Sizar Reference ANC Studio Headphones", ar: "سماعات الرأس الاحترافية بعزل ضوضاء نشط" },
    category: "audio",
    price: 38500,
    stock: 10,
    description: {
      en: "40mm custom beryllium-coated dynamic drivers, memory-foam lambskin ear cushions, USB-C lossless DAC mode, and 45-hour battery life.",
      ar: "محركات صوتية 40 ملم مع وسائد مريحة، وضع صوت غير مضغوط عبر USB-C، وبطارية تدوم 45 ساعة."
    },
    specs: [
      { k: { en: "Drivers", ar: "المحركات" }, v: { en: "40mm Dynamic · 24-bit/96kHz USB-C", ar: "40 ملم ديناميكية · صوت عالي الدقة" } },
      { k: { en: "ANC", ar: "عزل الضوضاء" }, v: { en: "Hybrid 6-Mic (-42 dB)", ar: "عزل هجين بـ 6 ميكروفونات" } },
      { k: { en: "Battery", ar: "البطارية" }, v: { en: "45 Hours with ANC on", ar: "45 ساعة مع تفعيل العزل" } }
    ],
    variants: {
      colors: [
        { en: "Obsidian Black", ar: "أسود أوبسيديان" },
        { en: "Silver Aluminum", ar: "فضي ألمنيوم" }
      ],
      storage: []
    },
    image: createHardwareTile("audio", "#5e5ce6", "Studio ANC · 40mm Lossless"),
    gallery: [
      createHardwareTile("audio", "#5e5ce6", "Studio ANC · Anodized Yoke"),
      createHardwareTile("audio", "#2997ff", "Studio ANC · USB-C DAC Mode")
    ]
  }
];

window.SIZAR_SERVICES = [
  {
    id: "screen",
    title: { en: "Display & Glass Replacement", ar: "استبدال الشاشة والزجاج الأصلي" },
    turnaround: { en: "45–90 min · True Tone & ProMotion calibrated", ar: "45–90 دقيقة · مع برمجة True Tone والألوان" },
    description: {
      en: "OEM-grade OLED and LCD assemblies installed with factory waterproof perimeter adhesives and True Tone serial calibration.",
      ar: "تركيب شاشات OLED و LCD أصلية مع استعادة اللواصق العازلة للماء وبرمجة حساسات الإضاءة True Tone."
    },
    priceFrom: 12500,
    icon: `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2.5"/><path d="M9 7l6 6M15 7l-6 6"/></svg>`
  },
  {
    id: "battery",
    title: { en: "Battery Health Restoration", ar: "تجديد البطارية واستعادة الأداء" },
    turnaround: { en: "30–45 min · Zero-cycle cobalt cells", ar: "30–45 دقيقة · خلايا جديدة بدورة شحن صفرية" },
    description: {
      en: "Fresh zero-cycle cells tested for internal resistance and thermal stability, complete with fresh pull-tabs and frame seals.",
      ar: "بطاريات جديدة مفحوصة حرارياً وكهربائياً لاستعادة عمر التشغيل الكامل وأداء المعالج."
    },
    priceFrom: 6800,
    icon: `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="16" height="10" rx="2"/><line x1="22" y1="11" x2="22" y2="13"/><path d="M11 10l-2 2h3l-2 2"/></svg>`
  },
  {
    id: "charging-port",
    title: { en: "Charging Port & USB-C Repair", ar: "إصلاح منفذ الشحن ودائرة الطاقة" },
    turnaround: { en: "60 min · Flex replacement or micro-soldering", ar: "60 دقيقة · تنظيف مجهري أو استبدال المنفذ" },
    description: {
      en: "Microscope pin inspection, ultrasonic contact cleaning, or complete charging flex and Tristar/Hydra IC replacement.",
      ar: "فحص مجهري للدبابيس، تنظيف بالموجات فوق الصوتية، أو استبدال كامل لفلاتة الشحن وآيسي الطاقة."
    },
    priceFrom: 4500,
    icon: `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v6M9 4v4M15 4v4"/><rect x="7" y="8" width="10" height="7" rx="2"/><path d="M12 15v7"/></svg>`
  },
  {
    id: "camera",
    title: { en: "Camera Module & Sapphire Lens", ar: "صيانة الكاميرا وعدسات الياقوت" },
    turnaround: { en: "60–90 min · Dust-free optical bench", ar: "60–90 دقيقة · بيئة خالية من الغبار" },
    description: {
      en: "Fixes OIS focus shudder, cracked sapphire lens covers, or Face ID dot-projector alignment without dust contamination.",
      ar: "إصلاح اهتزاز المثبت البصري OIS، استبدال زجاج العدسة المكسور، وصيانة حساس Face ID بدقة."
    },
    priceFrom: 9200,
    icon: `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>`
  },
  {
    id: "water-damage",
    title: { en: "Liquid Damage & Logic Board Recovery", ar: "معالجة أضرار السوائل واللوحة الأم" },
    turnaround: { en: "24–48 hrs · Component-level diagnostics", ar: "24–48 ساعة · تشخيص وإصلاح على مستوى المكونات" },
    description: {
      en: "Immediate board isolation, ultrasonic corrosion bath, and schematic-guided micro-soldering to save both device and data.",
      ar: "عزل فوري للوحة الأم، تنظيف الأكسدة بالموجات فوق الصوتية، ولحام مجهري لإنقاذ الجهاز والبيانات."
    },
    priceFrom: 8000,
    icon: `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>`
  },
  {
    id: "software",
    title: { en: "Software Restore & Data Transfer", ar: "استعادة النظام ونقل البيانات الآمن" },
    turnaround: { en: "45 min · Encrypted local migration", ar: "45 دقيقة · نقل مشفر ومباشر للبيانات" },
    description: {
      en: "Boot-loop recovery, clean iOS/Android firmware flashing, WhatsApp cross-platform migration, and full encrypted backup.",
      ar: "حل مشكلة التعليق على الشعار، تحديث النظام، ونقل كامل ومشفر للصور والمحادثات بين الأجهزة."
    },
    priceFrom: 2500,
    icon: `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 16 12 12 8 16"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"/></svg>`
  }
];

window.SIZAR_I18N = {
  en: {
    navProducts: "Products",
    navCategories: "Categories",
    navServices: "Services",
    navShop3D: "Shop in 3D",
    navSignIn: "Sign in",
    navCartLabel: "Shopping bag",
    navMenuLabel: "Menu",
    navCloseLabel: "Close",
    skipToContent: "Skip to content",

    // Home stages
    stage0Eyebrow: "Precision Repair · Devices & Accessories",
    stage0Title: "Sizar Phones",
    stage0Scroll: "Scroll to inspect inside",
    stage1Title: "Look closer.",
    stage2Title: "Every layer, understood.",
    stage2Sub: "Component-level diagnostics, calibrated displays, and clean-room micro-soldering.",
    stage3Title: "Phones. Repairs. Everything in between.",

    // Home closing
    closingEyebrow: "Sizar Studio · Oran & Nationwide",
    closingTitle: "Engineered care for the devices you rely on every day.",
    ctaDiscoverProducts: "Discover our products",
    ctaExploreServices: "Explore our services",
    ctaBrowseCategories: "Browse categories",

    // Categories page
    catEyebrow: "Store Directory",
    catTitle: "Browse by category.",
    catSub: "Curated flagships, tablets, GaN power systems, and optical protection.",
    itemsCountSuffix: "products",

    // Products page
    prodEyebrow: "Catalog",
    prodTitle: "All hardware & accessories.",
    filterAll: "All",
    sortLabel: "Sort by",
    sortFeatured: "Featured",
    sortPriceAsc: "Price: Low to High",
    sortPriceDesc: "Price: High to Low",
    sortNameAsc: "Name: A–Z",
    addToCart: "Add to cart",
    addedToast: "Added to bag",
    viewDetails: "View details",

    // Product detail page
    pdpBackToCatalog: "Back to products",
    pdpColorLabel: "Finish",
    pdpStorageLabel: "Option",
    pdpQtyLabel: "Quantity",
    pdpSpecsHeading: "Technical Specifications",
    pdpRelatedHeading: "Considered pairings.",
    pdpInStock: "In stock · Ready for pickup or courier",

    // Services page
    srvEyebrow: "Sizar Repair Lab",
    srvTitle: "Component-level repair.",
    srvSub: "Every device is opened under ESD protection, torqued to factory spec, and sealed with fresh perimeter adhesive.",
    srvFrom: "From",
    srvContactBtn: "Book diagnostic",
    srvContactToast: "Opening repair desk contact…",

    // Cart drawer & page
    cartTitle: "Your Bag",
    cartPageEyebrow: "Bag Summary",
    cartPageTitle: "Review your bag.",
    cartEmptyTitle: "Your bag is empty.",
    cartEmptySub: "Explore phones, tablets, or precision accessories to get started.",
    cartSubtotal: "Subtotal",
    cartShippingLabel: "Courier delivery",
    cartShippingVal: "Calculated at checkout",
    cartCheckoutBtn: "Proceed to checkout",
    cartViewFullBag: "View full bag",
    cartRemove: "Remove",
    cartDisabledToast: "Checkout is disabled in this prototype.",

    // Account page
    authEyebrow: "Sizar ID",
    authTitle: "Sign in or create account",
    authSub: "Track repair tickets, warranty serials, and saved orders in one place.",
    authGoogle: "Continue with Google",
    authApple: "Continue with Apple",
    authDivider: "or",
    authInputLabel: "Email or phone number",
    authInputPlaceholder: "name@example.com or +213…",
    authContinueBtn: "Continue",
    authDisabledToast: "Accounts are disabled in this prototype.",
    authFootnote: "Protected by hardware-key session verification. Prototype mode active.",

    // Footer
    footerCopy: "© 2026 Sizar Phones. Precision repair & curated hardware."
  },
  ar: {
    navProducts: "المنتجات",
    navCategories: "الفئات",
    navServices: "الصيانة",
    navShop3D: "تسوّق 3D",
    navSignIn: "تسجيل الدخول",
    navCartLabel: "حقيبة التسوق",
    navMenuLabel: "القائمة",
    navCloseLabel: "إغلاق",
    skipToContent: "تخطي إلى المحتوى",

    // Home stages
    stage0Eyebrow: "صيانة دقيقة · أجهزة وإكسسوارات أصلية",
    stage0Title: "سيزار فونز",
    stage0Scroll: "مرّر لاكتشاف التفاصيل الداخلية",
    stage1Title: "اقترب أكثر.",
    stage2Title: "كل طبقة، مفهومة.",
    stage2Sub: "تشخيص دقيق على مستوى المكونات، معايرة أصلية للشاشات، ولحام مجهري احترافي.",
    stage3Title: "هواتف. صيانة. وكل ما بينهما.",

    // Home closing
    closingEyebrow: "مختبر سيزار · عناية فائقة بالأجهزة",
    closingTitle: "عناية هندسية دقيقة بالأجهزة التي تعتمد عليها كل يوم.",
    ctaDiscoverProducts: "اكتشف منتجاتنا",
    ctaExploreServices: "استكشف خدمات الصيانة",
    ctaBrowseCategories: "تصفح الفئات",

    // Categories page
    catEyebrow: "دليل المتجر",
    catTitle: "تصفح حسب الفئة.",
    catSub: "هواتف رائدة، أجهزة لوحية، شواحن GaN فائقة السرعة، وحماية بصرية.",
    itemsCountSuffix: "منتجات",

    // Products page
    prodEyebrow: "الكتالوج",
    prodTitle: "جميع الأجهزة والإكسسوارات.",
    filterAll: "الكل",
    sortLabel: "ترتيب حسب",
    sortFeatured: "المميزة",
    sortPriceAsc: "السعر: من الأقل إلى الأعلى",
    sortPriceDesc: "السعر: من الأعلى إلى الأقل",
    sortNameAsc: "الاسم: أ–ي",
    addToCart: "أضف إلى الحقيبة",
    addedToast: "تمت الإضافة إلى الحقيبة",
    viewDetails: "عرض التفاصيل",

    // Product detail page
    pdpBackToCatalog: "العودة إلى المنتجات",
    pdpColorLabel: "اللون",
    pdpStorageLabel: "الخيار",
    pdpQtyLabel: "الكمية",
    pdpSpecsHeading: "المواصفات التقنية",
    pdpRelatedHeading: "ملحقات مقترحة.",
    pdpInStock: "متوفر · جاهز للاستلام أو التوصيل",

    // Services page
    srvEyebrow: "مختبر صيانة سيزار",
    srvTitle: "صيانة دقيقة على مستوى المكونات.",
    srvSub: "يتم فحص كل جهاز تحت حماية ضد الشحنات الساكنة وإعادة إغلاقه بلواصق المصنع العازلة.",
    srvFrom: "ابتداءً من",
    srvContactBtn: "احجز فحصاً",
    srvContactToast: "جاري فتح نافذة التواصل مع قسم الصيانة…",

    // Cart drawer & page
    cartTitle: "حقيبة التسوق",
    cartPageEyebrow: "ملخص الحقيبة",
    cartPageTitle: "مراجعة حقيبة التسوق.",
    cartEmptyTitle: "حقيبة التسوق فارغة.",
    cartEmptySub: "استكشف الهواتف أو الأجهزة اللوحية أو الإكسسوارات للبدء.",
    cartSubtotal: "المجموع الفرعي",
    cartShippingLabel: "خدمة التوصيل",
    cartShippingVal: "تُحسب عند إتمام الطلب",
    cartCheckoutBtn: "إتمام الطلب",
    cartViewFullBag: "عرض الحقيبة الكاملة",
    cartRemove: "حذف",
    cartDisabledToast: "Checkout is disabled in this prototype. · إتمام الطلب معطل في هذه النسخة التجريبية.",

    // Account page
    authEyebrow: "هوية سيزار",
    authTitle: "تسجيل الدخول أو إنشاء حساب",
    authSub: "تابع طلبات الصيانة، أرقام الضمان التسلسلية، ومشترياتك في مكان واحد.",
    authGoogle: "المتابعة باستخدام Google",
    authApple: "المتابعة باستخدام Apple",
    authDivider: "أو",
    authInputLabel: "البريد الإلكتروني أو رقم الهاتف",
    authInputPlaceholder: "name@example.com أو +213…",
    authContinueBtn: "متابعة",
    authDisabledToast: "Accounts are disabled in this prototype. · الحسابات معطلة في هذه النسخة التجريبية.",
    authFootnote: "محمي بتوثيق الجلسات الآمن. وضع النسخة التجريبية نشط.",

    // Footer
    footerCopy: "© 2026 سيزار فونز (Sizar Phones). صيانة دقيقة وأجهزة مختارة."
  }
};
