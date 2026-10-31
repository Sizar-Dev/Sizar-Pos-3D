<?php
/**
 * Sizar POS Pro — High-Precision Commercial POS & ERP System
 * @developer SizarDev
 * @city Oran, Algeria
 * @copyright 2026 SizarDev. All rights reserved.
 *
 * تحذير وأمانة شرعية وقانونية:
 * هذا النظام محمي بموجب قوانين الملكية الفكرية، وحقوق المؤلف الدولية، وأمانة أمام الله.
 * لا أسامح ولا أبيح شرعاً وقانوناً لأي شخص أو جهة تستخدم هذا النظام أو تنسخه أو تعدل عليه
 * أو تبيعه أو توزعه دون ترخيص واستئذان رسمي موثق ومسبق من المطور الأصلي.
 *
 * Strict Warning: Unauthorized reproduction, reverse-engineering, decompilation,
 * modification, or redistribution of this software without an official license from
 * the author is strictly prohibited and subject to legal prosecution.
 *
 * ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍
 */

ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', '1');
    ini_set('session.cookie_samesite', 'Lax');
    ini_set('session.use_strict_mode', '1');
    $isSecure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (isset($_SERVER['SERVER_PORT']) && (int)$_SERVER['SERVER_PORT'] === 443)
        || (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https');
    if ($isSecure) {
        ini_set('session.cookie_secure', '1');
    }
    session_start();
}

// Global Security Hardening Headers for Port-Forwarding / WAN Protection
header_remove('X-Powered-By');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(self), camera=()');
header("Content-Security-Policy: default-src 'self' data: blob: 'unsafe-inline' 'unsafe-eval' https://fonts.googleapis.com https://fonts.gstatic.com; object-src 'none'; frame-ancestors 'self';");
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
}

set_exception_handler(function (Throwable $e) {
    error_log("[UNCAUGHT EXCEPTION] " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine());
    http_response_code(500);
    header('Content-Type: application/json');
    $isPdo = ($e instanceof \PDOException);
    $msg = $isPdo ? 'A database error occurred. Please contact administrator.' : 'An internal system error occurred. Please contact administrator.';
    echo json_encode(['error' => $msg]);
});

require_once __DIR__ . '/../src/Database.php';
require_once __DIR__ . '/../src/BundledMaria.php';
require_once __DIR__ . '/../src/Version.php';
require_once __DIR__ . '/../src/SchemaSync.php';
require_once __DIR__ . '/../src/Response.php';
require_once __DIR__ . '/../src/Utils/Decimal.php';
require_once __DIR__ . '/../src/Utils/RateLimiter.php';
require_once __DIR__ . '/../src/Utils/Uid.php';
require_once __DIR__ . '/../src/Utils/EntityVersion.php';
require_once __DIR__ . '/../src/Utils/MachineFingerprint.php';
require_once __DIR__ . '/../src/Utils/RecoveryCrypto.php';
require_once __DIR__ . '/../src/Router.php';
require_once __DIR__ . '/../src/Controllers/AuthController.php';
require_once __DIR__ . '/../src/Controllers/UsersController.php';
require_once __DIR__ . '/../src/Controllers/CategoriesController.php';
require_once __DIR__ . '/../src/Controllers/ProductsController.php';
require_once __DIR__ . '/../src/Controllers/CustomersController.php';
require_once __DIR__ . '/../src/Controllers/SuppliersController.php';
require_once __DIR__ . '/../src/Controllers/BillsController.php';
require_once __DIR__ . '/../src/Controllers/CashVaultController.php';
require_once __DIR__ . '/../src/Controllers/ExpensesController.php';
require_once __DIR__ . '/../src/Controllers/PurchasesController.php';
require_once __DIR__ . '/../src/Controllers/OrdersController.php';
require_once __DIR__ . '/../src/Controllers/SettingsController.php';
require_once __DIR__ . '/../src/Controllers/ServiceTemplatesController.php';
require_once __DIR__ . '/../src/Controllers/SystemLogController.php';
require_once __DIR__ . '/../src/Controllers/BackupController.php';
require_once __DIR__ . '/../src/Controllers/DatabaseController.php';
require_once __DIR__ . '/../src/Controllers/MessagesController.php';
require_once __DIR__ . '/../src/Controllers/NotificationsController.php';
require_once __DIR__ . '/../src/Controllers/CustomServicesController.php';
require_once __DIR__ . '/../src/Controllers/SchedulesController.php';
require_once __DIR__ . '/../src/Controllers/SecurityController.php';
require_once __DIR__ . '/../src/Controllers/PartnerSettlementsController.php';
require_once __DIR__ . '/../src/SystemLog.php';
require_once __DIR__ . '/../src/Services/LicenseService.php';
require_once __DIR__ . '/../src/Services/SetupProgressService.php';

$rawPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$scriptName = $_SERVER['SCRIPT_NAME'];

// Determine the root directory of the application relative to the web server
$appRoot = dirname(dirname(dirname($scriptName)));
$appRoot = str_replace('\\', '/', $appRoot);
if ($appRoot === '/' || $appRoot === '\\') $appRoot = '';

// Strip the $appRoot out of the requested path so the router gets a clean route
$path = $rawPath;
if ($appRoot !== '' && str_starts_with($path, $appRoot)) {
    $path = substr($path, strlen($appRoot));
    if ($path === '') $path = '/';
}
// Strip subfolder if accessed directly without root rewrite
if (str_starts_with($path, '/SizarDev-Pos/public')) {
    $path = substr($path, strlen('/SizarDev-Pos/public'));
    if ($path === '') $path = '/';
}

// Instant Favicon Handler to prevent browser tab loading spinner
if ($path === '/favicon.ico' || $path === '/favicon.png' || $path === '/apple-touch-icon.png' || $path === '/apple-touch-icon-precomposed.png') {
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_write_close();
    }
    header('Content-Type: image/svg+xml');
    header('Cache-Control: public, max-age=86400');
    echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><rect width="100" height="100" rx="20" fill="#10b981"/><text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" font-size="50" font-family="sans-serif" font-weight="900" fill="white">P</text></svg>';
    exit;
}

// Fast IP Banning Early Interceptor
$clientIp = RateLimiter::getClientIp();
$requestUri = $_SERVER['REQUEST_URI'] ?? '';
$isEmergencyUnban = (strpos($requestUri, '/api/security/emergency-unban') !== false);

if (!$isEmergencyUnban && $clientIp !== '127.0.0.1' && $clientIp !== '::1') {
    if (is_file(__DIR__ . '/../config/database.php')) {
        try {
            $db = Database::getConnection();
            $banStmt = $db->prepare("
                SELECT id, reason, ban_type, expires_at 
                FROM banned_ips 
                WHERE ip_address = :ip 
                  AND status = 'active' 
                  AND (ban_type = 'permanent' OR expires_at > NOW())
                LIMIT 1
            ");
            $banStmt->execute(['ip' => $clientIp]);
            $activeBan = $banStmt->fetch();

            if ($activeBan) {
                // Non-blocking attempt counter increment
                $db->prepare("UPDATE banned_ips SET attempts_blocked = attempts_blocked + 1 WHERE id = :id")
                   ->execute(['id' => $activeBan['id']]);

                http_response_code(403);
                $isApi = (strpos($requestUri, '/api/') !== false) 
                    || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);

                if ($isApi) {
                    header('Content-Type: application/json');
                    echo json_encode([
                        'error'      => 'Access Denied: Your IP address has been banned by the security system.',
                        'ip'         => $clientIp,
                        'reason'     => $activeBan['reason'],
                        'ban_type'   => $activeBan['ban_type'],
                        'expires_at' => $activeBan['expires_at']
                    ]);
                    exit;
                }

                // Apple Obsidian Liquid Glass Emergency Lockdown Screen
                header('Content-Type: text/html; charset=UTF-8');
                $safeIp = htmlspecialchars($clientIp, ENT_QUOTES, 'UTF-8');
                $safeReason = htmlspecialchars($activeBan['reason'] ?? 'Security policy violation', ENT_QUOTES, 'UTF-8');
                $safeType = htmlspecialchars(ucfirst($activeBan['ban_type'] ?? 'temporary'), ENT_QUOTES, 'UTF-8');
                $safeExpires = $activeBan['expires_at'] ? htmlspecialchars($activeBan['expires_at'], ENT_QUOTES, 'UTF-8') : 'Indefinite (Manual Admin Revocation)';
                ?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terminal Access Restricted — SizarDev</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body { background-color: #030712; color: #f8fafc; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 bg-[#030712] relative overflow-hidden">
  <div class="absolute -top-40 -left-40 w-96 h-96 bg-rose-600/10 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-indigo-600/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="w-full max-w-lg bg-[#080b10]/95 border border-white/[0.08] rounded-3xl p-6 sm:p-8 shadow-[inset_0_1px_0_0_rgba(255,255,255,0.08),0_25px_60px_-15px_rgba(0,0,0,0.6)] backdrop-blur-2xl relative z-10 space-y-5 text-slate-100">
    <div class="flex items-center gap-3.5 pb-4 border-b border-white/[0.08]">
      <div class="w-11 h-11 rounded-2xl bg-rose-500/10 border border-rose-500/20 text-rose-400 flex items-center justify-center text-xl shrink-0 shadow-xs">
        🛡️
      </div>
      <div>
        <div class="flex items-center gap-2">
          <h1 class="text-xl font-black text-white tracking-tight">Access Suspended</h1>
          <span class="px-2.5 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wider bg-rose-950/60 text-rose-300 border border-rose-900/40">IP Firewall</span>
        </div>
        <p class="text-xs text-slate-400 mt-0.5 font-medium">This terminal IP is temporarily restricted by the security perimeter.</p>
      </div>
    </div>

    <div class="p-4 rounded-2xl bg-white/[0.03] border border-white/[0.06] space-y-2 text-xs">
      <div class="flex justify-between items-center"><span class="text-slate-400">Terminal IP:</span><span class="font-mono font-bold text-rose-400"><?= $safeIp ?></span></div>
      <div class="flex justify-between items-center"><span class="text-slate-400">Ban Type:</span><span class="font-bold text-slate-200"><?= $safeType ?></span></div>
      <div class="flex justify-between items-center"><span class="text-slate-400">Expires:</span><span class="font-mono text-slate-300"><?= $safeExpires ?></span></div>
      <div class="pt-2 border-t border-white/[0.06]"><span class="text-slate-400">Reason:</span> <span class="text-slate-200"><?= $safeReason ?></span></div>
    </div>

    <div class="pt-2 border-t border-white/[0.08] space-y-3">
      <div class="flex items-center justify-between">
        <h2 class="text-xs font-black text-slate-200 uppercase tracking-wider">Admin Emergency Unlock</h2>
        <span class="text-[10px] text-slate-400">Unban this PC on the spot</span>
      </div>
      <form id="emergency-unban-form" onsubmit="handleEmergencyUnban(event)" class="space-y-3">
        <div class="grid grid-cols-2 gap-2">
          <input type="text" id="unban-username" placeholder="Admin Username" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/80 border border-slate-700/80 text-xs text-white placeholder-slate-500 outline-none focus:ring-2 focus:ring-rose-500 font-medium">
          <input type="password" id="unban-password" placeholder="Admin Password" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/80 border border-slate-700/80 text-xs text-white placeholder-slate-500 outline-none focus:ring-2 focus:ring-rose-500 font-medium">
        </div>
        <div class="relative flex items-center py-1">
          <div class="flex-grow border-t border-white/[0.06]"></div>
          <span class="flex-shrink mx-2 text-[10px] text-slate-400 font-bold uppercase tracking-wider">Or Master Key</span>
          <div class="flex-grow border-t border-white/[0.06]"></div>
        </div>
        <input type="text" id="unban-master-key" placeholder="••••••••••••••••••••" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/80 border border-slate-700/80 text-xs font-mono text-center text-white placeholder-slate-500 outline-none focus:ring-2 focus:ring-rose-500 font-bold">
        <button type="submit" id="unban-btn" class="w-full py-2.5 bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs rounded-xl shadow-md shadow-emerald-600/20 transition-all cursor-pointer">
          🔓 Authenticate &amp; Restore Access
        </button>
        <p id="unban-msg" class="text-xs text-center text-rose-400 font-medium hidden"></p>
      </form>
    </div>
  </div>

  <script>
    async function handleEmergencyUnban(e) {
      e.preventDefault();
      const btn = document.getElementById('unban-btn');
      const msg = document.getElementById('unban-msg');
      const u = document.getElementById('unban-username').value.trim();
      const p = document.getElementById('unban-password').value.trim();
      const k = document.getElementById('unban-master-key').value.trim();
      if ((!u || !p) && !k) {
        msg.textContent = 'Enter admin credentials or the master recovery key.';
        msg.classList.remove('hidden');
        return;
      }
      btn.disabled = true;
      btn.textContent = 'Verifying...';
      try {
        const res = await fetch('<?= htmlspecialchars($appRoot, ENT_QUOTES, 'UTF-8') ?>/api/security/emergency-unban', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json', 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
          body: JSON.stringify({ username: u, password: p, master_key: k })
        });
        const data = await res.json();
        if (res.ok && data.ok) {
          msg.textContent = 'Access restored! Reloading...';
          msg.className = 'text-xs text-center text-emerald-400 font-bold';
          msg.classList.remove('hidden');
          setTimeout(() => { window.location.reload(); }, 1200);
        } else {
          msg.textContent = data.error || 'Authentication failed.';
          msg.className = 'text-xs text-center text-rose-400 font-medium';
          msg.classList.remove('hidden');
          btn.disabled = false;
          btn.textContent = '🔓 Authenticate & Restore Access';
        }
      } catch (err) {
        msg.textContent = 'Error contacting server.';
        msg.classList.remove('hidden');
        btn.disabled = false;
        btn.textContent = '🔓 Authenticate & Restore Access';
      }
    }
  </script>
</body>
</html>
                <?php
                exit;
            }
        } catch (\Throwable $e) {
            // DB not ready or error -> continue without blocking
        }
    }
}

$publicRoot = __DIR__;

if (php_sapi_name() === 'cli-server') {
    $filePath = realpath($publicRoot . $path);
    if ($filePath && str_starts_with($filePath, $publicRoot) && is_file($filePath)) {
        return false;
    }
}

$indexFile = $publicRoot . '/index.html';
if (!str_starts_with($path, '/api')) {
    if ($path === '/' || $path === '' || $path === '/index.html') {
        // Root Entrypoint Gatekeeper:
        // If database is installed, verify runtime license before serving client application bundle.
        // If license is missing, revoked, expired, or hardware mismatched, serve standalone Apple Obsidian Lockout HTML.
        if (is_file(__DIR__ . '/../config/database.php')) {
            $runtimeLicense = LicenseService::verifyRuntime();
            if (!$runtimeLicense['valid']) {
                http_response_code(423);
                LicenseService::renderLockoutHtml($runtimeLicense['machine_id'] ?? LicenseService::getMachineId(false));
                return;
            }
        }
        if (is_file($indexFile)) {
            readfile($indexFile);
            return;
        }
        http_response_code(404);
        return;
    }

    http_response_code(404);
    return;
}

// If this install uses the bundled portable MariaDB, make sure the daemon is
// running before any controller opens a connection. No-op (one short TCP
// probe) unless config has use_bundled => true. Runs only for /api requests
// since the static-HTML branch above has already returned.
BundledMaria::ensureRunningIfConfigured();

// Reconcile the schema version: seed legacy databases at the baseline and
// auto-apply any pending forward migrations so a newer build can take over an
// older database. No-op when the database is current or ahead. Guarded so a
// not-yet-configured install (setup wizard) doesn't error here.
if (is_file(__DIR__ . '/../config/database.php')) {
    try {
        Version::reconcileOnBoot(Database::getConnection());
    } catch (Throwable $e) {
        error_log('[Version] reconcileOnBoot skipped: ' . $e->getMessage());
    }
}

$router = new Router();

$authController = new AuthController();
$usersController = new UsersController();
$categoriesController = new CategoriesController();
$productsController = new ProductsController();
$customersController = new CustomersController();
$suppliersController = new SuppliersController();
$billsController = new BillsController();
$cashVaultController = new CashVaultController();
$expensesController = new ExpensesController();
$purchasesController = new PurchasesController();
$ordersController = new OrdersController();
$settingsController = new SettingsController();
$serviceTemplatesController = new ServiceTemplatesController();
$systemLogController = new SystemLogController();
$backupController = new BackupController();
$databaseController = new DatabaseController();
$messagesController = new MessagesController();
$notificationsController = new NotificationsController();
$customServicesController = new CustomServicesController();
$schedulesController = new SchedulesController();
$partnerSettlementsController = new PartnerSettlementsController();
$securityController = new SecurityController();

function readJsonBody(): array
{
    $input = file_get_contents('php://input');
    if ($input === false || trim($input) === '') {
        return [];
    }

    // SEC-31: Enforce application/json Content-Type on non-empty payload bodies
    $contentType = $_SERVER['CONTENT_TYPE'] ?? $_SERVER['HTTP_CONTENT_TYPE'] ?? '';
    if (stripos($contentType, 'application/json') === false) {
        Response::json(['error' => 'Unsupported Media Type: Content-Type must be application/json'], 415);
        exit;
    }

    $data = json_decode($input, true);
    return is_array($data) ? $data : [];
}

function buildServerDsn(array $config): string
{
    $host = $config['host'] ?? '127.0.0.1';
    $port = (int) ($config['port'] ?? 3306);
    $charset = $config['charset'] ?? 'utf8mb4';
    return sprintf('mysql:host=%s;port=%d;charset=%s', $host, $port, $charset);
}

function buildDatabaseDsn(array $config): string
{
    $host = $config['host'] ?? '127.0.0.1';
    $port = (int) ($config['port'] ?? 3306);
    $database = $config['database'] ?? '';
    $charset = $config['charset'] ?? 'utf8mb4';
    return sprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s', $host, $port, $database, $charset);
}

function createPdo(string $dsn, array $config): PDO
{
    return new PDO($dsn, $config['username'] ?? '', $config['password'] ?? '', Database::pdoOptions($config));
}

function isSystemInstalled(): bool
{
    $configFile = __DIR__ . '/../config/database.php';
    if (!is_file($configFile)) {
        return false;
    }
    try {
        $db = Database::getConnection();
        // 1. Check if users table has an active admin (the fundamental source of truth)
        $hasAdmin = false;
        try {
            $stmt = $db->query('SELECT id FROM users WHERE is_admin = 1 AND deleted_at IS NULL LIMIT 1');
            $hasAdmin = (bool) ($stmt && $stmt->fetch());
        } catch (\Throwable $e) {
            $hasAdmin = false;
        }

        if (!$hasAdmin) {
            return false;
        }

        // 2. If setup_state exists, installation is only complete once admin_ready = 1
        try {
            $st = $db->query('SELECT admin_ready FROM setup_state WHERE id = 1')->fetch();
            if ($st !== false && isset($st['admin_ready'])) {
                return (int)$st['admin_ready'] === 1;
            }
        } catch (\Throwable $e) {
            // setup_state table does not exist (legacy DB) -> presence of active admin means installed
        }

        return true;
    } catch (\Throwable $e) {
        return false;
    }
}

function getActiveStorePreset(): string
{
    $storeFile = __DIR__ . '/../config/store.php';

    // 1. Read from config/store.php first
    if (is_file($storeFile)) {
        try {
            $conf = require $storeFile;
            if (is_array($conf) && !empty($conf['store_preset']) && in_array($conf['store_preset'], ['phone_repair', 'crypto_cash'], true)) {
                return (string) $conf['store_preset'];
            }
        } catch (\Throwable $e) {}
    }

    // 2. Check live database truth if available (pure read-only)
    try {
        $db = Database::getConnection();
        $sRow = $db->query("SELECT business_preset FROM settings WHERE id = 1")->fetch();
        if (!empty($sRow['business_preset']) && in_array($sRow['business_preset'], ['phone_repair', 'crypto_cash'], true)) {
            return (string) $sRow['business_preset'];
        }
        $stRow = $db->query("SELECT business_preset FROM setup_state WHERE id = 1")->fetch();
        if (!empty($stRow['business_preset']) && in_array($stRow['business_preset'], ['phone_repair', 'crypto_cash'], true)) {
            return (string) $stRow['business_preset'];
        }
    } catch (\Throwable $e) {}

    // 3. Fallback default
    return 'phone_repair';
}

function requireAdminUser(): void
{
    $userId = $_SESSION['user_id'] ?? null;
    if (!$userId) {
        Response::json(['error' => 'Unauthorized'], 401);
        exit;
    }
    try {
        $db = Database::getConnection();
        $stmt = $db->prepare('SELECT is_admin FROM users WHERE id = :id AND deleted_at IS NULL');
        $stmt->execute(['id' => $userId]);
        $row = $stmt->fetch();
        if (!$row || (int) ($row['is_admin'] ?? 0) !== 1) {
            Response::json(['error' => 'Admin privileges required'], 403);
            exit;
        }
    } catch (\Throwable $e) {
        Response::json(['error' => 'Authentication verification failed'], 500);
        exit;
    }
}

function writeDatabaseConfig(array $config): void
{
    $dir = __DIR__ . '/../config';
    if (!is_dir($dir)) {
        if (!@mkdir($dir, 0750, true) && !is_dir($dir)) {
            throw new RuntimeException("Configuration directory does not exist and cannot be created: {$dir}");
        }
    }
    $target = $dir . '/database.php';
    $temp = $dir . '/database.php.tmp.' . bin2hex(random_bytes(6));
    $content = "<?php\n\nreturn " . var_export($config, true) . ";\n";
    $bytes = @file_put_contents($temp, $content, LOCK_EX);
    if ($bytes === false || $bytes !== strlen($content)) {
        @unlink($temp);
        throw new RuntimeException("Failed to write temporary configuration file at {$temp}. Check directory permissions.");
    }
    @chmod($temp, 0640);
    if (!@rename($temp, $target)) {
        @unlink($target);
        if (!@rename($temp, $target)) {
            @unlink($temp);
            throw new RuntimeException("Failed to atomically replace configuration file: {$target}");
        }
    }
}

function applySchema(PDO $pdo): void
{
    $schemaPath = __DIR__ . '/../schema.sql';
    $schema = file_get_contents($schemaPath);
    if ($schema === false) {
        throw new RuntimeException('Schema file missing');
    }
    // Strip full-line "--" comments first so a ';' inside a comment (e.g. a
    // sentence) can't split a statement mid-way.
    $schema = preg_replace('/^\s*--.*$/m', '', $schema);
    $statements = array_filter(array_map('trim', explode(';', $schema)));
    foreach ($statements as $statement) {
        try {
            $pdo->exec($statement);
        } catch (PDOException $e) {
            // Idempotency: schema.sql is re-applied to *build only missing
            // tables* on an already-populated database (the "Verify & build"
            // action, and the automatic check when switching/creating a
            // connection). Skip objects that already exist; surface anything
            // else. (CREATE TABLE uses IF NOT EXISTS; the ADD CONSTRAINT lines
            // are what would otherwise error on a second pass.)
            $msg = $e->getMessage();
            if (stripos($msg, 'already exists') !== false
                || stripos($msg, 'Duplicate key name') !== false
                || stripos($msg, 'Duplicate foreign key') !== false
                || stripos($msg, 'Duplicate key on write or update') !== false
                || stripos($msg, 'errno: 121') !== false
                || stripos($msg, 'errno: 150') !== false
                || (stripos($msg, '1005') !== false && stripos($msg, "Can't create table") !== false)
                || stripos($msg, 'Multiple primary key') !== false
                || stripos($msg, 'Duplicate column name') !== false) {
                continue;
            }
            throw $e;
        }
    }
}

/**
 * Bring an existing database's STRUCTURE up to the current schema, additively:
 * create any missing tables (applySchema), then add any missing columns
 * (SchemaSync). Never drops or modifies existing columns and never touches row
 * data. This is what lets a database from an older build of the SAME version
 * (v1 → v1) catch up after a feature added a table or column.
 *
 * @return array{created_tables:string[], added_columns:string[], failed:string[]}
 */
function buildMissingStructure(PDO $db): array
{
    $before = $db->query('SHOW TABLES')->fetchAll(PDO::FETCH_COLUMN) ?: [];
    applySchema($db);
    $after = $db->query('SHOW TABLES')->fetchAll(PDO::FETCH_COLUMN) ?: [];
    $cols = SchemaSync::reconcileColumns($db);
    return [
        'created_tables' => array_values(array_diff($after, $before)),
        'added_columns'  => $cols['added'],
        'failed'         => $cols['failed'],
    ];
}

/**
 * Seed the pre-built default catalog (Cash / Crypto categories + starter coin
 * products) exactly ONCE, and only into a *virgin* database. They are ordinary
 * editable/deletable rows — convenience defaults so the user doesn't start empty.
 *
 * Safe by construction:
 *   - A one-time flag (setup_state.catalog_seeded) ensures it runs once ever, so
 *     deleting the defaults never resurrects them.
 *   - It only seeds when the catalog/transaction tables are EMPTY, so it never
 *     injects defaults onto real or restored data (e.g. after a backup restore the
 *     flag is simply set and nothing is added).
 *   - The seed runs in a row-locked transaction so two parallel first-loads can't
 *     double-seed. The guard COLUMN is added outside any transaction (DDL).
 *
 * Idempotent + cheap to call on every catalog read once the flag is set.
 */
function ensureDefaultCatalogSeeded(PDO $db): void
{
    // 1) Guard columns (older fresh DBs were created before these flags existed). DDL —
    //    must be outside a transaction.
    try {
        $has = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'setup_state' AND COLUMN_NAME = 'catalog_seeded'");
        $has->execute();
        if (!$has->fetch()) {
            $db->exec("ALTER TABLE setup_state ADD COLUMN catalog_seeded TINYINT(1) NOT NULL DEFAULT 0");
        }
        $hasPreset = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'setup_state' AND COLUMN_NAME = 'business_preset'");
        $hasPreset->execute();
        if (!$hasPreset->fetch()) {
            $db->exec("ALTER TABLE setup_state ADD COLUMN business_preset VARCHAR(50) NOT NULL DEFAULT 'phone_repair'");
        }
        // Ensure a row exists to lock/read.
        $db->prepare('INSERT INTO setup_state (id, db_ready, admin_ready, catalog_seeded, business_preset, updated_at) VALUES (1, 1, 0, 0, \'phone_repair\', NOW()) ON DUPLICATE KEY UPDATE id = id')->execute();
    } catch (\Throwable $e) {
        return; // setup_state unavailable — nothing to seed against
    }

    // 2) Fast unlocked check for the common already-seeded path.
    try {
        $row = $db->query('SELECT catalog_seeded FROM setup_state WHERE id = 1')->fetch();
        if ($row && (int) $row['catalog_seeded'] === 1) return;
    } catch (\Throwable $e) {
        return;
    }

    // 3) Atomic seed (lock the flag row, re-check, seed, set the flag).
    try {
        $db->beginTransaction();
        $row = $db->query('SELECT catalog_seeded FROM setup_state WHERE id = 1 FOR UPDATE')->fetch();
        if ($row && (int) $row['catalog_seeded'] === 1) { $db->commit(); return; }

        $hasData = false;
        foreach (['categories', 'products', 'orders', 'purchases'] as $t) {
            try {
                if ($db->query("SELECT 1 FROM `$t` LIMIT 1")->fetch()) { $hasData = true; break; }
            } catch (\Throwable $e) { /* table missing — ignore */ }
        }

        // Set the one-time flag whether or not we seed (never re-check, never inject
        // onto real/restored data).
        $db->prepare('UPDATE setup_state SET catalog_seeded = 1, updated_at = NOW() WHERE id = 1')->execute();

        if (!$hasData) {
            $createdBy = null; // Default system seeds must ALWAYS have created_by = NULL (attributed to System)
            $mkUid = static fn(string $prefix): string => $prefix . '-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
            $catStmt  = $db->prepare('INSERT INTO categories (uid, name, color, created_by, created_at) VALUES (:uid, :name, :color, :created_by, NOW())');
            $prodStmt = $db->prepare('INSERT INTO products (uid, name, category_id, price, quantity, display_decimals, created_by, created_at) VALUES (:uid, :name, :category_id, 0, 0, :dd, :created_by, NOW())');

            // Detect configured business preset from store.php, setup_state or settings
            $activePreset = function_exists('getActiveStorePreset') ? getActiveStorePreset() : 'phone_repair';

            if ($activePreset === 'crypto_cash') {
                // Cash (fiat) + Crypto. All editable/deletable; stock comes from real purchases.
                $catalog = [
                    ['name' => 'Cash',   'color' => '#16a34a', 'products' => [['US Dollar (USD)', 2], ['Euro (EUR)', 2]]],
                    ['name' => 'Crypto', 'color' => '#f59e0b', 'products' => [['Bitcoin (BTC)', 8], ['USDT', 2]]],
                ];
            } else {
                // Phone Repair Hub: smartphones, accessories, and spare parts (fresh install seeding)
                $catalog = [
                    ['name' => 'Smartphones',       'color' => '#0071e3', 'products' => [['iPhone 16 Pro', 2], ['Samsung Galaxy S24', 2]]],
                    ['name' => 'Phone Accessories', 'color' => '#10b981', 'products' => [['Fast Charger 20W', 2], ['Braided Type-C Cable', 2]]],
                    ['name' => 'Spare Parts',       'color' => '#64748b', 'products' => [['OLED Display Assembly', 2]]],
                ];
            }
            foreach ($catalog as $group) {
                $catStmt->execute(['uid' => $mkUid('CAT'), 'name' => $group['name'], 'color' => $group['color'], 'created_by' => $createdBy]);
                $catId = (int) $db->lastInsertId();
                foreach ($group['products'] as [$pName, $pDec]) {
                    $prodStmt->execute(['uid' => $mkUid('PRD'), 'name' => $pName, 'category_id' => $catId, 'dd' => $pDec, 'created_by' => $createdBy]);
                }
            }

            // Seed default Walk-in Customer (one-off buyer default)
            try {
                $chkCust = $db->query("SELECT id FROM customers WHERE is_walkin = 1 LIMIT 1")->fetch();
                if (!$chkCust) {
                    $db->prepare('INSERT INTO customers (uid, name, is_walkin, created_by, created_at) VALUES (:uid, :name, 1, :created_by, NOW())')
                       ->execute([
                           'uid'        => 'CUS-' . date('Ymd') . '-WALKIN',
                           'name'       => 'Walk-in (one-off customer)',
                           'created_by' => $createdBy,
                       ]);
                }
            } catch (\Throwable $e) { /* customers table missing/unready */ }

            // Seed default Walk-by / Walk-in Supplier (one-off seller default)
            try {
                $chkSupp = $db->query("SELECT id FROM suppliers WHERE is_walkby = 1 LIMIT 1")->fetch();
                if (!$chkSupp) {
                    $db->prepare('INSERT INTO suppliers (uid, name, note, is_walkby, created_by, created_at) VALUES (:uid, :name, :note, 1, :created_by, NOW())')
                       ->execute([
                           'uid'        => 'SUP-' . date('Ymd') . '-WALKBY',
                           'name'       => 'Walk-by (one-off seller)',
                           'note'       => 'Built-in supplier for one-off / unofficial sellers. Pick this on a purchase when you buy from someone who is not a registered supplier; you then note who they were on that purchase.',
                           'created_by' => $createdBy,
                       ]);
                }
            } catch (\Throwable $e) { /* suppliers table missing/unready */ }
        }

        // Self-healing migration for existing databases: ensure seed items are attributed to System (created_by = NULL)
        try {
            $db->exec("UPDATE categories SET created_by = NULL WHERE name IN ('Cash', 'Crypto') AND (created_by = 1 OR created_by IS NULL)");
            $db->exec("UPDATE products SET created_by = NULL WHERE name IN ('US Dollar (USD)', 'Euro (EUR)', 'Bitcoin (BTC)', 'USDT') AND (created_by = 1 OR created_by IS NULL)");
            $db->exec("UPDATE customers SET created_by = NULL WHERE is_walkin = 1 AND (created_by = 1 OR created_by IS NULL)");
            $db->exec("UPDATE suppliers SET created_by = NULL WHERE is_walkby = 1 AND (created_by = 1 OR created_by IS NULL)");
        } catch (\Throwable $e) { /* silent fallback */ }

        $db->commit();
    } catch (\Throwable $e) {
        if ($db->inTransaction()) $db->rollBack();
    }
}

/**
 * Verify + prepare a target database before the app is pointed at it. Shared by
 * the setup wizard (db/apply, use-bundled) and the Settings "switch database"
 * action so the version check happens EVERY time a connection is created or
 * changed — not only at first install or on restore.
 *
 * Returns a `needs_confirmation` array (the caller should echo it as JSON and
 * stop) when the target already holds data from a NEWER schema version than this
 * build and the action wasn't forced. Otherwise returns null after:
 *   - empty/new target  → applies the full schema + stamps this build's version,
 *   - existing OLDER data → builds any missing tables (idempotent) + replays the
 *                           pending forward migrations,
 *   - existing CURRENT data → nothing to change.
 *
 * @param PDO  $dbPdo open connection to the target database
 * @param bool $force caller passed force=true (skip the "newer" warning)
 */
function prepareTargetDatabase(PDO $dbPdo, bool $force): ?array
{
    Version::ensureTable($dbPdo);
    $hasUsers = (bool) $dbPdo->query("SHOW TABLES LIKE 'users'")->fetch();

    if (!$hasUsers) {
        // Brand-new / empty target: lay down the full current schema and tag it
        // at this build's version (a fresh install never needs migrations).
        applySchema($dbPdo);
        $activePreset = getActiveStorePreset();
        $dbPdo->exec('CREATE TABLE IF NOT EXISTS setup_state (id INT PRIMARY KEY, db_ready TINYINT(1) NOT NULL DEFAULT 0, admin_ready TINYINT(1) NOT NULL DEFAULT 0, catalog_seeded TINYINT(1) NOT NULL DEFAULT 0, business_preset VARCHAR(50) NOT NULL DEFAULT \'phone_repair\', updated_at DATETIME NOT NULL)');
        $dbPdo->prepare('INSERT INTO setup_state (id, db_ready, admin_ready, business_preset, updated_at) VALUES (1, 1, 0, :preset, NOW()) ON DUPLICATE KEY UPDATE db_ready = VALUES(db_ready), business_preset = VALUES(business_preset), updated_at = VALUES(updated_at)')->execute(['preset' => $activePreset]);
        Version::setDbVersion($dbPdo, Version::SCHEMA);
        return null;
    }

    // Alien Database Guard: verify target database has expected Sizar POS tables
    $hasSettings = (bool) $dbPdo->query("SHOW TABLES LIKE 'settings'")->fetch();
    if (!$hasSettings) {
        return [
            'needs_confirmation' => false,
            'error'              => 'Cannot switch to database: Target database is not an authentic Sizar POS database (missing core settings table).',
        ];
    }

    // Cross-Store Activity License & Reconfiguration Guard:
    if (isSystemInstalled()) {
        $activePreset = getActiveStorePreset();
        $targetPreset = 'phone_repair';
        try {
            $sRow = $dbPdo->query("SELECT business_preset FROM settings WHERE id = 1")->fetch();
            if (!empty($sRow['business_preset'])) {
                $targetPreset = (string)$sRow['business_preset'];
            } else {
                $stRow = $dbPdo->query("SELECT business_preset FROM setup_state WHERE id = 1")->fetch();
                if (!empty($stRow['business_preset'])) {
                    $targetPreset = (string)$stRow['business_preset'];
                }
            }
        } catch (\Throwable $e) {}

        // Tier 1: Cryptographic License Verification (is target preset authorized?)
        if (class_exists('LicenseService') && !LicenseService::isStoreAllowed($targetPreset)) {
            return [
                'needs_confirmation' => false,
                'error'              => "Cannot switch to database: Target database is configured for store activity '{$targetPreset}', which is not authorized under your active license. Please upgrade your license or select an authorized database.",
                'code'               => 'LICENSE_STORE_UNAUTHORIZED',
                'target_preset'      => $targetPreset,
                'active_preset'      => $activePreset,
                'allowed_stores'     => LicenseService::getAllowedStores(),
            ];
        }

        // Tier 2: Cross-Store Activity Reconfiguration Confirmation
        if ($activePreset !== $targetPreset && !$force) {
            return [
                'needs_confirmation' => true,
                'reason'             => 'store_preset_switch',
                'active_preset'      => $activePreset,
                'target_preset'      => $targetPreset,
                'message'            => "You are switching to a database configured for '{$targetPreset}' (current activity is '{$activePreset}'). Both activities are permitted under your active license. The POS workspace, catalog views, and cash vaults will reconfigure to '{$targetPreset}'. Do you want to proceed?",
            ];
        }
    }

    // Existing data — check its version BEFORE we adopt it.
    $st = Version::status($dbPdo);
    if ($st['state'] === 'ahead' && !$force) {
        return [
            'needs_confirmation' => true,
            'reason'             => 'db_newer',
            'db_version'         => $st['db'],
            'system_version'     => Version::SCHEMA,
            'message'            => "The database you're connecting to is from version {$st['db']}, which is newer than this system (version " . Version::SCHEMA . "). "
                . "You can still connect, but this system will only use the tables it understands — newer features and some data may be ignored, and you might run into problems. "
                . "Update this system to version {$st['db']} for full compatibility.",
        ];
    }

    // Compatible (current) or older (behind): seed a legacy database at the
    // baseline, build any missing tables (idempotent), then replay pending
    // forward migrations so the data matches this build.
    if ($st['db'] === null) {
        Version::setDbVersion($dbPdo, Version::BASELINE);
    }
    buildMissingStructure($dbPdo); // add any missing tables AND columns
    Version::migrateUp($dbPdo);
    return null;
}

$router->add('GET', '/api/health', function () {
    Response::json(['ok' => true]);
});

// System version + changelog map. Public so the login / setup screens can show
// it. Returns the code version always; the db version + state when reachable.
$router->add('GET', '/api/system/version', function () {
    $payload = [
        'code'    => Version::SCHEMA,
        'app'     => Version::APP,
        'db'      => null,
        'state'   => 'unconfigured',
        'pending' => [],
    ];
    if (is_file(__DIR__ . '/../config/database.php')) {
        try {
            $payload = array_merge($payload, Version::status(Database::getConnection()));
        } catch (Throwable $e) {
            // DB not reachable yet — keep code-only defaults.
        }
    }
    $map = [];
    foreach (Version::registry() as $v => $entry) {
        $map[] = [
            'version'  => $v,
            'name'     => $entry['name'] ?? (string) $v,
            'released' => $entry['released'] ?? null,
            'summary'  => $entry['summary'] ?? '',
            'features' => $entry['features'] ?? [],
        ];
    }
    $payload['changelog'] = $map;
    Response::json($payload);
});

$router->add('POST', '/api/auth/login', function () use ($authController) {
    $authController->login(readJsonBody());
});

$router->add('POST', '/api/auth/logout', function () use ($authController) {
    $authController->logout();
});

$router->add('POST', '/api/auth/mark-closed', function () use ($authController) {
    $authController->markClosed();
});

$router->add('POST', '/api/auth/undo-close-log', function () use ($authController) {
    $authController->undoCloseLog();
});

$router->add('GET', '/api/auth/session', function () use ($authController) {
    $authController->checkSession();
});

$router->add('GET', '/api/setup/license/status', function () {
    $status = LicenseService::checkLicenseStatus();
    if (!isSystemInstalled() && !empty($status['valid'])) {
        $existingToken = SetupProgressService::getRequestToken();
        $existingStep = $existingToken ? SetupProgressService::extractTokenStep($existingToken) : 0;
        $isDbReady = SetupProgressService::isDatabaseCertified();
        $targetStep = max(1, $isDbReady ? 2 : 1, $existingStep);
        if ($existingStep < $targetStep || empty($existingToken)) {
            $token = SetupProgressService::issueStepToken($targetStep);
            $_SESSION['pos_setup_token'] = $token;
            $status['setup_token'] = $token;
        } else {
            $status['setup_token'] = $existingToken;
        }
    }
    $status['allowed_stores'] = LicenseService::getAllowedStores($status['payload'] ?? null);
    $status['allows_all_stores'] = LicenseService::isStoreAllowed('phone_repair', $status['payload'] ?? null)
        && LicenseService::isStoreAllowed('crypto_cash', $status['payload'] ?? null);
    $status['active_preset'] = getActiveStorePreset();
    $status['supported_presets'] = ['phone_repair', 'crypto_cash'];
    Response::json($status);
});

$router->add('GET', '/api/setup/license/machine-id', function () {
    Response::json([
        'ok'         => true,
        'machine_id' => LicenseService::getMachineId(),
        'telemetry'  => MachineFingerprint::getRawTelemetry(),
    ]);
});

$router->add('GET', '/api/system/license-agreement', function () {
    $candidates = [
        __DIR__ . '/../../LICENSE.md',
        __DIR__ . '/../config/LICENSE.md',
        __DIR__ . '/LICENSE.md',
    ];
    $filePath = null;
    foreach ($candidates as $candidate) {
        if (is_file($candidate)) {
            $filePath = $candidate;
            break;
        }
    }
    if ($filePath !== null) {
        Response::json([
            'ok'         => true,
            'content'    => file_get_contents($filePath),
            'mtime'      => filemtime($filePath),
            'updated_at' => date('Y-m-d H:i:s', filemtime($filePath)),
        ]);
    } else {
        Response::json([
            'ok'    => false,
            'error' => 'License agreement document not found.',
        ], 404);
    }
});

$router->add('POST', '/api/setup/license/upload', function () {
    if (isSystemInstalled()) {
        $uid = (int)($_SESSION['user_id'] ?? 0);
        if ($uid <= 0) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }
        try {
            $db = Database::getConnection();
            $stmt = $db->prepare('SELECT is_admin FROM users WHERE id = :id AND deleted_at IS NULL');
            $stmt->execute(['id' => $uid]);
            $uRow = $stmt->fetch();
            if (!$uRow || (int)($uRow['is_admin'] ?? 0) !== 1) {
                Response::json(['error' => 'Only administrators can update license'], 403);
                return;
            }
        } catch (\Throwable $e) {
            Response::json(['error' => 'Authorization check failed'], 500);
            return;
        }
    }

    $content = '';
    if (!empty($_FILES['license_file']['tmp_name']) && is_uploaded_file($_FILES['license_file']['tmp_name'])) {
        $content = file_get_contents($_FILES['license_file']['tmp_name']);
    } else {
        $body = readJsonBody();
        if (!empty($body['license_content'])) {
            $content = (string) $body['license_content'];
        } elseif (!empty($body['license_json'])) {
            $content = (string) $body['license_json'];
        } elseif (!empty($body['payload']) && !empty($body['signature'])) {
            $content = json_encode($body);
        } else {
            $content = file_get_contents('php://input');
        }
    }

    if (empty(trim((string)$content))) {
        Response::json(['ok' => false, 'error' => 'No license data provided.'], 400);
        return;
    }

    $res = LicenseService::saveLicense($content);
    if (!$res['ok']) {
        Response::json($res, 400);
        return;
    }
    if (!isSystemInstalled()) {
        $token = SetupProgressService::issueStepToken(1);
        $_SESSION['pos_setup_token'] = $token;
        $res['setup_token'] = $token;
    }
    $res['allowed_stores'] = LicenseService::getAllowedStores($res['payload'] ?? null);
    Response::json($res);
});

$router->add('POST', '/api/license/activate', function () {
    $isLocked = false;
    try {
        $rt = LicenseService::verifyRuntime();
        $isLocked = !$rt['valid'];
    } catch (\Throwable $e) {
        $isLocked = true;
    }

    if (isSystemInstalled() && !$isLocked) {
        $uid = (int)($_SESSION['user_id'] ?? 0);
        if ($uid <= 0) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }
        try {
            $db = Database::getConnection();
            $stmt = $db->prepare('SELECT is_admin FROM users WHERE id = :id AND deleted_at IS NULL');
            $stmt->execute(['id' => $uid]);
            $uRow = $stmt->fetch();
            if (!$uRow || (int)($uRow['is_admin'] ?? 0) !== 1) {
                Response::json(['error' => 'Only administrators can update license'], 403);
                return;
            }
        } catch (\Throwable $e) {
            Response::json(['error' => 'Authorization check failed'], 500);
            return;
        }
    }

    $content = file_get_contents('php://input');
    if (empty(trim((string)$content))) {
        Response::json(['ok' => false, 'error' => 'No license data provided.'], 400);
        return;
    }
    $res = LicenseService::saveLicense($content);
    if (!$res['ok']) {
        Response::json($res, 400);
        return;
    }
    if (!isSystemInstalled()) {
        $token = SetupProgressService::issueStepToken(1);
        $_SESSION['pos_setup_token'] = $token;
        $res['setup_token'] = $token;
    }
    $res['allowed_stores'] = LicenseService::getAllowedStores($res['payload'] ?? null);
    Response::json($res);
});

$router->add('GET', '/api/setup/status', function () use ($usersController) {
    $usersController->setupStatus();
});

$router->add('GET', '/api/setup/preset', function () {
    try {
        $preset = getActiveStorePreset();
        Response::json(['ok' => true, 'preset' => $preset]);
    } catch (\Throwable $e) {
        Response::json(['ok' => false, 'error' => $e->getMessage()], 500);
    }
});

$router->add('POST', '/api/setup/preset', function () {
    if (isSystemInstalled()) {
        Response::json(['error' => 'System is already configured and installed. Business activity selection is permanently locked.'], 403);
        return;
    }
    $token = SetupProgressService::getRequestToken();
    $gate = SetupProgressService::verifyStepToken($token, 2);
    if (!$gate['valid']) {
        Response::json(['error' => $gate['error'] ?? 'Step 2 Database Configuration is required before selecting business activity.'], 403);
        return;
    }

    $data = readJsonBody();
    $preset = trim((string)($data['preset'] ?? 'phone_repair'));
    $allowed = ['phone_repair', 'crypto_cash'];
    if (!in_array($preset, $allowed, true)) {
        Response::json(['error' => 'Invalid business preset. Supported presets: phone_repair, crypto_cash'], 400);
        return;
    }

    // License Store Profile Authorization Gate
    $licStatus = LicenseService::checkLicenseStatus();
    if (empty($licStatus['valid'])) {
        Response::json(['error' => 'Valid cryptographic license is required before configuring business activity.'], 403);
        return;
    }

    if (!LicenseService::isStoreAllowed($preset, $licStatus['payload'] ?? null)) {
        Response::json([
            'ok'     => false,
            'error'  => "This business activity '{$preset}' is not authorized under your current license. Please upgrade your license or select an authorized activity.",
            'code'   => 'PRESET_NOT_LICENSED',
            'preset' => $preset,
        ], 403);
        return;
    }

    try {
        $db = Database::getConnection();

        // 1. Update setup_state
        $hasPresetCol = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'setup_state' AND COLUMN_NAME = 'business_preset'");
        $hasPresetCol->execute();
        if (!$hasPresetCol->fetch()) {
            $db->exec("ALTER TABLE setup_state ADD COLUMN business_preset VARCHAR(50) NOT NULL DEFAULT 'phone_repair'");
        }
        $stmt = $db->prepare("UPDATE setup_state SET business_preset = :preset, updated_at = NOW() WHERE id = 1");
        $stmt->execute(['preset' => $preset]);

        // 2. Ensure settings row and update business_preset and initial dual cash safe display names (Invariant A)
        $isPhoneRepair = ($preset === 'phone_repair');
        $s1En = $isPhoneRepair ? 'Retail & Accessories Vault' : 'Crypto & Cash Safe';
        $s1Ar = $isPhoneRepair ? 'خزينة مبيعات المنتجات والاكسسوارات' : 'خزينة العملات والنقد';
        $s1Fr = $isPhoneRepair ? 'Coffre Ventes Produits & Accessoires' : 'Coffre Crypto & Espèces';

        $s2En = $isPhoneRepair ? 'Workshop & Phone Repair Vault' : 'Custom Services Safe';
        $s2Ar = $isPhoneRepair ? 'خزينة ورشة الصيانة والتصليحات' : 'خزينة الخدمات المخصصة';
        $s2Fr = $isPhoneRepair ? 'Coffre Atelier & Réparations' : 'Coffre Services Personnalisés';

        $sCheck = $db->query("SELECT id FROM settings WHERE id = 1")->fetch();
        if ($sCheck) {
            $stmt = $db->prepare("UPDATE settings SET 
                business_preset = :preset,
                cash_safe_1_name_en = :s1_en,
                cash_safe_1_name_ar = :s1_ar,
                cash_safe_1_name_fr = :s1_fr,
                cash_safe_2_name_en = :s2_en,
                cash_safe_2_name_ar = :s2_ar,
                cash_safe_2_name_fr = :s2_fr
                WHERE id = 1");
            $stmt->execute([
                'preset' => $preset,
                's1_en'  => $s1En,
                's1_ar'  => $s1Ar,
                's1_fr'  => $s1Fr,
                's2_en'  => $s2En,
                's2_ar'  => $s2Ar,
                's2_fr'  => $s2Fr,
            ]);
        } else {
            $stmt = $db->prepare("INSERT INTO settings (id, business_name, currency_symbol, business_preset,
                cash_safe_1_name_en, cash_safe_1_name_ar, cash_safe_1_name_fr,
                cash_safe_2_name_en, cash_safe_2_name_ar, cash_safe_2_name_fr)
                VALUES (1, 'Sizar POS Pro', 'DZD', :preset, :s1_en, :s1_ar, :s1_fr, :s2_en, :s2_ar, :s2_fr)");
            $stmt->execute([
                'preset' => $preset,
                's1_en'  => $s1En,
                's1_ar'  => $s1Ar,
                's1_fr'  => $s1Fr,
                's2_en'  => $s2En,
                's2_ar'  => $s2Ar,
                's2_fr'  => $s2Fr,
            ]);
        }

        // Write disk configuration to config/store.php
        $storeConfigFile = __DIR__ . '/../config/store.php';
        $storeConfig = [
            'store_preset'   => $preset,
            'schema_version' => Version::SCHEMA,
            'app_version'    => Version::APP,
            'configured_at'  => date('Y-m-d H:i:s'),
        ];
        @file_put_contents($storeConfigFile, "<?php\n\nreturn " . var_export($storeConfig, true) . ";\n", LOCK_EX);

        // 3. Dual-Layer Sync to cash_vaults.name (internal IDs and vault_type untouched)
        $db->prepare("UPDATE cash_vaults SET name = :name WHERE id = 1")->execute(['name' => $s1En]);
        $db->prepare("UPDATE cash_vaults SET name = :name WHERE id = 2")->execute(['name' => $s2En]);

        // 4. Issue Step 3 progression token
        $token3 = SetupProgressService::issueStepToken(3);
        $_SESSION['pos_setup_token'] = $token3;

        Response::json([
            'ok' => true,
            'preset' => $preset,
            'setup_token' => $token3,
            'safes' => [
                'safe_1' => ['en' => $s1En, 'ar' => $s1Ar, 'fr' => $s1Fr],
                'safe_2' => ['en' => $s2En, 'ar' => $s2Ar, 'fr' => $s2Fr]
            ]
        ]);
    } catch (\Throwable $e) {
        Response::json(['ok' => false, 'error' => $e->getMessage()], 500);
    }
});

$router->add('POST', '/api/setup/admin', function () use ($usersController) {
    if (isSystemInstalled()) {
        Response::json(['error' => 'System is already configured and installed.'], 403);
        return;
    }
    $token = SetupProgressService::getRequestToken();
    $gate = SetupProgressService::verifyStepToken($token, 3);
    if (!$gate['valid']) {
        Response::json(['error' => $gate['error'] ?? 'Step 3 Business Activity Selection is required before creating administrator.'], 403);
        return;
    }
    $usersController->createInitialAdmin(readJsonBody());
    SetupProgressService::destroy();
    unset($_SESSION['pos_setup_token']);
});
$router->add('GET', '/api/setup/db/status', function () {
    if (isSystemInstalled()) {
        if (empty($_SESSION['user_id'])) {
            Response::json(['configured' => true, 'db_exists' => true, 'schema_ready' => true]);
            return;
        }
    }
    Database::reset();
    $configPath = __DIR__ . '/../config/database.php';
    if (!is_file($configPath)) {
        Response::json(['configured' => false, 'db_exists' => false, 'schema_ready' => false]);
        return;
    }

    $config = require $configPath;
    try {
        $serverPdo = createPdo(buildServerDsn($config), $config);
        $dbName = $config['database'] ?? '';
        if ($dbName === '') {
            Response::json(['configured' => false, 'db_exists' => false, 'schema_ready' => false]);
            return;
        }
        $stmt = $serverPdo->prepare('SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = :db');
        $stmt->execute(['db' => $dbName]);
        $exists = (bool) $stmt->fetch();
        if (!$exists) {
            Response::json(['configured' => false, 'db_exists' => false, 'schema_ready' => false]);
            return;
        }
        $dbPdo = createPdo(buildDatabaseDsn($config), $config);
        $tables = $dbPdo->query("SHOW TABLES LIKE 'users'")->fetch();
        $schemaReady = (bool) $tables;
        Response::json(['configured' => true, 'db_exists' => true, 'schema_ready' => $schemaReady]);
    } catch (Throwable $e) {
        Response::json(['configured' => false, 'db_exists' => false, 'schema_ready' => false, 'error' => $e->getMessage()]);
    }
});
$router->add('POST', '/api/setup/restore', function () use ($backupController) {
    if (isSystemInstalled()) {
        Response::json(['error' => 'System is already configured and installed'], 403);
        return;
    }
    $token = SetupProgressService::getRequestToken();
    $gate = SetupProgressService::verifyStepToken($token, 1);
    if (!$gate['valid']) {
        Response::json(['error' => $gate['error'] ?? 'Step 1 License Verification is required before restoring database.'], 403);
        return;
    }
    $backupController->setupRestore();
});
$router->add('POST', '/api/setup/restore/inspect', function () use ($backupController) {
    if (isSystemInstalled()) {
        Response::json(['error' => 'System is already configured and installed'], 403);
        return;
    }
    $token = SetupProgressService::getRequestToken();
    $gate = SetupProgressService::verifyStepToken($token, 1);
    if (!$gate['valid']) {
        Response::json(['error' => $gate['error'] ?? 'Step 1 License Verification is required before inspecting backup.'], 403);
        return;
    }
    $backupController->inspectUploadedFile();
});
$router->add('POST', '/api/setup/restore/discard', function () use ($backupController) {
    if (isSystemInstalled()) {
        Response::json(['error' => 'System is already configured and installed'], 403);
        return;
    }
    $backupController->setupRestoreDiscard();
});
// Built-in (bundled) MariaDB — status probe for the setup screen.
$router->add('GET', '/api/setup/db/bundled-status', function () {
    Response::json(BundledMaria::status());
});

// Built-in (bundled) MariaDB — spawn the private daemon, create the database,
// apply the schema, and write config with use_bundled => true. This is the
// "Use the built-in database" button's backend.
$router->add('POST', '/api/setup/db/use-bundled', function () {
    if (isSystemInstalled()) {
        Response::json(['error' => 'System is already configured and installed. Use Settings to change database.'], 403);
        return;
    }
    $token = SetupProgressService::getRequestToken();
    $gate = SetupProgressService::verifyStepToken($token, 1);
    if (!$gate['valid']) {
        Response::json(['error' => $gate['error'] ?? 'Step 1 License Verification is required before configuring database.'], 403);
        return;
    }
    // First-run datadir init + daemon spawn can take a few seconds; give it
    // headroom beyond the default 30s web execution limit.
    @set_time_limit(120);
    try {
        $port = BundledMaria::ensureStarted();
    } catch (Throwable $e) {
        Response::json(['error' => $e->getMessage()], 400);
        return;
    }

    $config = [
        'host' => '127.0.0.1',
        'port' => $port,
        'database' => BundledMaria::DB_NAME,
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8mb4',
        'use_tls' => false,
        'use_bundled' => true,
    ];

/* [INTERNAL_RUNTIME_FRAMEWORK_TOKEN] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */

    try {
        $serverPdo = createPdo(buildServerDsn($config), $config);
        $serverPdo->exec('CREATE DATABASE IF NOT EXISTS `' . str_replace('`', '``', $config['database']) . '`');
        $dbPdo = createPdo(buildDatabaseDsn($config), $config);

        $tableCount = 0;
        $hasAdmin = false;
        $userCount = 0;
        try {
            $tStmt = $dbPdo->query("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = " . $dbPdo->quote($config['database']));
            $tableCount = $tStmt ? (int)$tStmt->fetchColumn() : 0;
            if ($tableCount > 0) {
                $hasUsersTable = (bool) $dbPdo->query("SHOW TABLES LIKE 'users'")->fetch();
                if ($hasUsersTable) {
                    $aStmt = $dbPdo->query("SELECT COUNT(*) FROM users WHERE is_admin = 1 AND deleted_at IS NULL");
                    $hasAdmin = $aStmt ? ((int)$aStmt->fetchColumn() > 0) : false;
                    $uStmt = $dbPdo->query("SELECT COUNT(*) FROM users WHERE deleted_at IS NULL");
                    $userCount = $uStmt ? (int)$uStmt->fetchColumn() : 0;
                }
            }
        } catch (\Throwable $e) {}

        // Build / verify the schema and stamp the version. force=true: the
        // built-in database is our own private daemon, so always adopt it.
        $gate = prepareTargetDatabase($dbPdo, true);
        if ($gate !== null) {
            Response::json($gate);
            return;
        }
        writeDatabaseConfig($config);
        Database::reset();
        $token2 = SetupProgressService::issueStepToken(2);
        $_SESSION['pos_setup_token'] = $token2;
        Response::json([
            'ok'                 => true,
            'port'               => $port,
            'setup_token'        => $token2,
            'has_existing_store' => $hasAdmin,
            'has_admin'          => $hasAdmin,
            'user_count'         => $userCount,
            'table_count'        => $tableCount,
            'db_name'            => $config['database'],
            'is_fresh'           => (!$hasAdmin && $tableCount === 0),
        ]);
    } catch (Throwable $e) {
        Response::json(['error' => $e->getMessage()], 400);
    }
});

$router->add('POST', '/api/setup/db/apply', function () {
    if (isSystemInstalled()) {
        Response::json(['error' => 'System is already configured and installed. Use Settings to change database.'], 403);
        return;
    }
    $token = SetupProgressService::getRequestToken();
    $gate = SetupProgressService::verifyStepToken($token, 1);
    if (!$gate['valid']) {
        Response::json(['error' => $gate['error'] ?? 'Step 1 License Verification is required before configuring database.'], 403);
        return;
    }
    $data = readJsonBody();
    $config = [
        'host' => trim($data['host'] ?? ''),
        'port' => (int) ($data['port'] ?? 3306),
        'database' => trim($data['database'] ?? ''),
        'username' => trim($data['username'] ?? ''),
        'password' => $data['password'] ?? '',
        'charset' => 'utf8mb4',
        'use_tls' => !empty($data['use_tls']),
        'use_bundled' => false,
    ];

    if ($config['host'] === '' || $config['database'] === '' || $config['username'] === '') {
        Response::json(['error' => 'Host, database, and username are required'], 400);
        return;
    }

    try {
        $serverPdo = createPdo(buildServerDsn($config), $config);
        $serverPdo->exec('CREATE DATABASE IF NOT EXISTS `' . str_replace('`', '``', $config['database']) . '`');
        $dbPdo = createPdo(buildDatabaseDsn($config), $config);

        $tableCount = 0;
        $hasAdmin = false;
        $userCount = 0;
        try {
            $tStmt = $dbPdo->query("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = " . $dbPdo->quote($config['database']));
            $tableCount = $tStmt ? (int)$tStmt->fetchColumn() : 0;
            if ($tableCount > 0) {
                $hasUsersTable = (bool) $dbPdo->query("SHOW TABLES LIKE 'users'")->fetch();
                if ($hasUsersTable) {
                    $aStmt = $dbPdo->query("SELECT COUNT(*) FROM users WHERE is_admin = 1 AND deleted_at IS NULL");
                    $hasAdmin = $aStmt ? ((int)$aStmt->fetchColumn() > 0) : false;
                    $uStmt = $dbPdo->query("SELECT COUNT(*) FROM users WHERE deleted_at IS NULL");
                    $userCount = $uStmt ? (int)$uStmt->fetchColumn() : 0;
                }
            }
        } catch (\Throwable $e) {}

        // Build / verify the schema, stamp the version, and warn (unless forced)
        // if the target already holds NEWER data than this build understands.
        $gate = prepareTargetDatabase($dbPdo, !empty($data['force']));
        if ($gate !== null) {
            Response::json($gate);
            return;
        }
        writeDatabaseConfig($config);
        Database::reset();
        $token2 = SetupProgressService::issueStepToken(2);
        $_SESSION['pos_setup_token'] = $token2;
        Response::json([
            'ok'                 => true,
            'setup_token'        => $token2,
            'has_existing_store' => $hasAdmin,
            'has_admin'          => $hasAdmin,
            'user_count'         => $userCount,
            'table_count'        => $tableCount,
            'db_name'            => $config['database'],
            'is_fresh'           => (!$hasAdmin && $tableCount === 0),
        ]);
    } catch (Throwable $e) {
        Response::json(['error' => $e->getMessage()], 400);
    }
});

$router->add('POST', '/api/setup/db/test', function () {
    if (isSystemInstalled()) {
        $userId = $_SESSION['user_id'] ?? null;
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }
        try {
            $db = Database::getConnection();
            $stmt = $db->prepare('SELECT is_admin FROM users WHERE id = :id AND deleted_at IS NULL');
            $stmt->execute(['id' => $userId]);
            $row = $stmt->fetch();
            if (!$row || (int) ($row['is_admin'] ?? 0) !== 1) {
                Response::json(['error' => 'Only admins can test database settings'], 403);
                return;
            }
        } catch (\Throwable $e) {
            Response::json(['error' => 'Database authentication check failed'], 500);
            return;
        }
    }
    $data = readJsonBody();
    $config = [
        'host' => trim($data['host'] ?? ''),
        'port' => (int) ($data['port'] ?? 3306),
        'database' => trim($data['database'] ?? ''),
        'username' => trim($data['username'] ?? ''),
        'password' => $data['password'] ?? '',
        'charset' => 'utf8mb4',
        'use_tls' => !empty($data['use_tls']),
    ];

    if ($config['host'] === '' || $config['database'] === '' || $config['username'] === '') {
        Response::json(['error' => 'Host, database name, and username are required'], 400);
        return;
    }

    try {
        $startTime = microtime(true);
        $serverPdo = createPdo(buildServerDsn($config), $config);
        $serverVersion = $serverPdo->getAttribute(PDO::ATTR_SERVER_VERSION);
        $latencyMs = round((microtime(true) - $startTime) * 1000, 1);

        // Check if database exists and inspect contents
        $stmt = $serverPdo->prepare("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = :dbname");
        $stmt->execute(['dbname' => $config['database']]);
        $dbExists = (bool) $stmt->fetch();

        $tableCount = 0;
        $hasUsers = false;
        $hasAdmin = false;
        $userCount = 0;

        if ($dbExists) {
            try {
                $dbPdo = createPdo(buildDatabaseDsn($config), $config);
                $tStmt = $dbPdo->query("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = " . $dbPdo->quote($config['database']));
                $tableCount = $tStmt ? (int)$tStmt->fetchColumn() : 0;
                if ($tableCount > 0) {
                    $hasUsersTable = (bool) $dbPdo->query("SHOW TABLES LIKE 'users'")->fetch();
                    if ($hasUsersTable) {
                        $hasUsers = true;
                        $aStmt = $dbPdo->query("SELECT COUNT(*) FROM users WHERE is_admin = 1 AND deleted_at IS NULL");
                        $hasAdmin = $aStmt ? ((int)$aStmt->fetchColumn() > 0) : false;
                        $uStmt = $dbPdo->query("SELECT COUNT(*) FROM users WHERE deleted_at IS NULL");
                        $userCount = $uStmt ? (int)$uStmt->fetchColumn() : 0;
                    }
                }
            } catch (\Throwable $e) {}
        }

        Response::json([
            'ok'             => true,
            'message'        => 'Connection verified successfully!',
            'server_version' => $serverVersion,
            'latency_ms'     => $latencyMs,
            'db_exists'      => $dbExists,
            'db_name'        => $config['database'],
            'table_count'    => $tableCount,
            'has_users'      => $hasUsers,
            'has_admin'      => $hasAdmin,
            'user_count'     => $userCount,
            'is_empty'       => ($tableCount === 0),
        ]);
    } catch (Throwable $e) {
        Response::json(['error' => $e->getMessage()], 400);
    }
});

$router->add('GET', '/api/users', function () use ($usersController) {
    $usersController->index();
});
$router->add('POST', '/api/users', function () use ($usersController) {
    $usersController->store(readJsonBody());
});
$router->add('PUT', '/api/users/{id}', function ($id) use ($usersController) {
    $usersController->update($id, readJsonBody());
});
$router->add('DELETE', '/api/users/{id}', function ($id) use ($usersController) {
    $usersController->destroy($id);
});
$router->add('GET', '/api/users/{id}/dependencies', function ($id) use ($usersController) {
    $usersController->dependencies($id);
});
$router->add('GET', '/api/users/{id}/history', function ($id) use ($usersController) {
    $usersController->history($id);
});
$router->add('GET', '/api/users/{id}/login-history', function ($id) use ($usersController) {
    $usersController->loginHistory($id);
});
$router->add('POST', '/api/users/activity', function () use ($usersController) {
    $usersController->updateActivity();
});
$router->add('POST', '/api/users/{id}/pending-deletion', function ($id) use ($usersController) {
    $usersController->markPendingDeletion($id);
});
$router->add('POST', '/api/users/{id}/cancel-pending-deletion', function ($id) use ($usersController) {
    $usersController->cancelPendingDeletion($id);
});
$router->add('POST', '/api/users/{id}/restore', function ($id) use ($usersController) {
    $usersController->restore($id);
});
$router->add('POST', '/api/users/{id}/view', function ($id) use ($usersController) {
    $usersController->logView($id);
});
$router->add('POST', '/api/users/{id}/unlock-session', function ($id) use ($usersController) {
    $usersController->unlockSession($id);
});
$router->add('POST', '/api/users/{id}/2fa/init', function ($id) use ($usersController) {
    $usersController->init2fa($id);
});
$router->add('POST', '/api/users/{id}/2fa/enable', function ($id) use ($usersController) {
    $usersController->enable2fa($id, readJsonBody());
});
$router->add('POST', '/api/users/{id}/2fa/toggle', function ($id) use ($usersController) {
    $usersController->toggle2fa($id);
});
$router->add('POST', '/api/users/{id}/2fa/reset', function ($id) use ($usersController) {
    $usersController->reset2fa($id);
});
$router->add('GET', '/api/users/{id}/hand-payments', function ($id) use ($usersController) {
    $usersController->handPayments($id);
});

$router->add('GET', '/api/categories', function () use ($categoriesController) {
    $categoriesController->index();
});
$router->add('POST', '/api/categories', function () use ($categoriesController) {
    $categoriesController->store(readJsonBody());
});
$router->add('PUT', '/api/categories/{id}', function ($id) use ($categoriesController) {
    $categoriesController->update($id, readJsonBody());
});
$router->add('DELETE', '/api/categories/{id}', function ($id) use ($categoriesController) {
    $categoriesController->destroy($id);
});
$router->add('POST', '/api/categories/{id}/restore', function ($id) use ($categoriesController) {
    $categoriesController->restore($id);
});
$router->add('GET', '/api/categories/{id}/history', function ($id) use ($categoriesController) {
    $categoriesController->history($id);
});
$router->add('GET', '/api/categories/{id}/image', function ($id) use ($categoriesController) {
    $categoriesController->image($id);
});


$router->add('GET', '/api/products', function () use ($productsController) {
    $productsController->index();
});
$router->add('POST', '/api/products', function () use ($productsController) {
    $productsController->store(readJsonBody());
});
// Mission 52: Barcode Uniqueness Validation Endpoint
$router->add('GET', '/api/products/check-barcode', function () use ($productsController) {
    $productsController->checkBarcode();
});
$router->add('PUT', '/api/products/{id}', function ($id) use ($productsController) {
    $productsController->update($id, readJsonBody());
});
$router->add('DELETE', '/api/products/{id}', function ($id) use ($productsController) {
    $productsController->destroy($id);
});
// Mission 52: Multi-Barcode Association Endpoint
$router->add('GET', '/api/products/{id}/barcodes', function ($id) use ($productsController) {
    $productsController->getBarcodes((int)$id);
});
$router->add('GET', '/api/products/{id}/image', function ($id) use ($productsController) {
    $productsController->getImage((int) $id);
});
$router->add('GET', '/api/products/{id}/history', function ($id) use ($productsController) {
    $productsController->history($id);
});
$router->add('GET', '/api/products/{id}/holds', function ($id) use ($productsController) {
    $productsController->holds((int)$id);
});
$router->add('POST', '/api/products/{id}/restore', function ($id) use ($productsController) {
    $productsController->restore($id);
});
$router->add('GET', '/api/products/{id}/hidden-stock', function ($id) use ($productsController) {
    $productsController->hiddenStock($id);
});
$router->add('POST', '/api/products/{id}/preview-decimals-change', function ($id) use ($productsController) {
    $productsController->previewDecimalsChange($id, readJsonBody());
});
$router->add('POST', '/api/products/{id}/reclaim-hidden', function ($id) use ($productsController) {
    $productsController->reclaimHidden($id, readJsonBody());
});

$router->add('GET', '/api/customers', function () use ($customersController) {
    $customersController->index();
});
$router->add('POST', '/api/customers', function () use ($customersController) {
    $customersController->store(readJsonBody());
});
$router->add('PUT', '/api/customers/{id}', function ($id) use ($customersController) {
    $customersController->update($id, readJsonBody());
});
$router->add('DELETE', '/api/customers/{id}', function ($id) use ($customersController) {
    $customersController->destroy($id);
});
$router->add('POST', '/api/customers/{id}/restore', function ($id) use ($customersController) {
    $customersController->restore($id);
});
$router->add('GET', '/api/customers/{id}/history', function ($id) use ($customersController) {
    $customersController->history($id);
});

$router->add('GET', '/api/suppliers', function () use ($suppliersController) {
    $suppliersController->index();
});
$router->add('POST', '/api/suppliers', function () use ($suppliersController) {
    $suppliersController->store(readJsonBody());
});
$router->add('PUT', '/api/suppliers/{id}', function ($id) use ($suppliersController) {
    $suppliersController->update($id, readJsonBody());
});
$router->add('DELETE', '/api/suppliers/{id}', function ($id) use ($suppliersController) {
    $suppliersController->destroy($id);
});
$router->add('POST', '/api/suppliers/{id}/restore', function ($id) use ($suppliersController) {
    $suppliersController->restore($id);
});
$router->add('GET', '/api/suppliers/{id}/history', function ($id) use ($suppliersController) {
    $suppliersController->history($id);
});

$router->add('GET', '/api/bills', function () use ($billsController) {
    $billsController->index();
});
$router->add('POST', '/api/bills', function () use ($billsController) {
    $billsController->store(readJsonBody());
});
$router->add('PUT', '/api/bills/{id}', function ($id) use ($billsController) {
    $billsController->update($id, readJsonBody());
});
$router->add('DELETE', '/api/bills/{id}', function ($id) use ($billsController) {
    $billsController->destroy($id);
});
$router->add('POST', '/api/bills/{id}/restore', function ($id) use ($billsController) {
    $billsController->restore($id);
});
$router->add('POST', '/api/bills/{id}/pay', function ($id) use ($billsController) {
    $billsController->pay($id, readJsonBody());
});
$router->add('GET', '/api/bills/expenses', function () use ($billsController) {
    $billsController->expenses();
});
$router->add('GET', '/api/bills/report', function () use ($billsController) {
    $billsController->report();
});
$router->add('GET', '/api/bills/{id}/report', function ($id) use ($billsController) {
    $billsController->report($id);
});
$router->add('GET', '/api/bills/{id}/history', function ($id) use ($billsController) {
    $billsController->history($id);
});
$router->add('GET', '/api/bills/{id}/periods', function ($id) use ($billsController) {
    $billsController->periods($id);
});
$router->add('POST', '/api/bills/{id}/periods', function ($id) use ($billsController) {
    $billsController->splitPeriod($id, readJsonBody());
});
$router->add('GET', '/api/bill-shares/pending', function () use ($billsController) {
    $billsController->pendingShares();
});
$router->add('POST', '/api/bill-shares/{id}/pay', function ($id) use ($billsController) {
    $billsController->payShare($id, readJsonBody());
});
$router->add('POST', '/api/bill-shares/{id}/accept', function ($id) use ($billsController) {
    $billsController->acceptShare($id);
});
$router->add('POST', '/api/bill-shares/{id}/refuse', function ($id) use ($billsController) {
    $billsController->refuseShare($id);
});
$router->add('POST', '/api/bill-shares/{id}/edit', function ($id) use ($billsController) {
    $billsController->editShare($id, readJsonBody());
});
$router->add('POST', '/api/bill-periods/{id}/cover', function ($id) use ($billsController) {
    $billsController->coverPeriod($id, readJsonBody());
});
$router->add('POST', '/api/bill-share-payments/{id}/void', function ($id) use ($billsController) {
    $billsController->voidSharePayment($id, readJsonBody());
});
$router->add('POST', '/api/bill-payments/{id}/void', function ($id) use ($billsController) {
    $billsController->voidPayment($id, readJsonBody());
});

// --- Cash Vault (Closet Cash / Master Safe & Drawers) Routes ---
$router->add('GET', '/api/cash-vault', function () use ($cashVaultController) {
    $cashVaultController->getVault();
});
$router->add('GET', '/api/cash-vault/summary', function () use ($cashVaultController) {
    $cashVaultController->getConsolidatedSummary();
});
$router->add('POST', '/api/cash-vault/setup', function () use ($cashVaultController) {
    $cashVaultController->setupVault(readJsonBody());
});
$router->add('POST', '/api/cash-vault/transaction', function () use ($cashVaultController) {
    $cashVaultController->recordTransaction(readJsonBody());
});
$router->add('POST', '/api/cash-vault/transfer', function () use ($cashVaultController) {
    $cashVaultController->transferCash(readJsonBody());
});
$router->add('GET', '/api/cash-vault/transactions', function () use ($cashVaultController) {
    $cashVaultController->getTransactions();
});

// --- Operating Expenses (One-Off OPEX) Routes ---
$router->add('GET', '/api/expenses', function () use ($expensesController) {
    $expensesController->indexExpenses();
});
$router->add('POST', '/api/expenses', function () use ($expensesController) {
    $expensesController->storeExpense(readJsonBody());
});
$router->add('PUT', '/api/expenses/{id}', function ($id) use ($expensesController) {
    $expensesController->updateExpense($id, readJsonBody());
});
$router->add('GET', '/api/expenses/{id}/details', function ($id) use ($expensesController) {
    $expensesController->getExpenseDetails($id);
});
$router->add('GET', '/api/expenses/{id}/voucher', function ($id) use ($expensesController) {
    $expensesController->getExpenseVoucher($id);
});
$router->add('DELETE', '/api/expenses/{id}', function ($id) use ($expensesController) {
    $expensesController->destroyExpense($id, readJsonBody());
});
$router->add('POST', '/api/expenses/bulk-delete', function () use ($expensesController) {
    $expensesController->bulkDestroyExpenses(readJsonBody());
});
$router->add('POST', '/api/expenses/{id}/restore', function ($id) use ($expensesController) {
    $expensesController->restoreExpense($id, readJsonBody());
});
$router->add('GET', '/api/expenses/{id}/attachment', function ($id) use ($expensesController) {
    $expensesController->getExpenseAttachment($id);
});
$router->add('POST', '/api/expenses/{id}/attachment', function ($id) use ($expensesController) {
    $expensesController->updateExpenseAttachment($id, readJsonBody());
});
$router->add('GET', '/api/expenses/summary', function () use ($expensesController) {
    $expensesController->getSummary();
});

// --- Operating Expenses Aliases (/api/operating-expenses/*) ---
$router->add('GET', '/api/operating-expenses', function () use ($expensesController) {
    $expensesController->indexExpenses();
});
$router->add('POST', '/api/operating-expenses', function () use ($expensesController) {
    $expensesController->storeExpense(readJsonBody());
});
$router->add('PUT', '/api/operating-expenses/{id}', function ($id) use ($expensesController) {
    $expensesController->updateExpense($id, readJsonBody());
});
$router->add('GET', '/api/operating-expenses/{id}/details', function ($id) use ($expensesController) {
    $expensesController->getExpenseDetails($id);
});
$router->add('GET', '/api/operating-expenses/{id}/voucher', function ($id) use ($expensesController) {
    $expensesController->getExpenseVoucher($id);
});
$router->add('DELETE', '/api/operating-expenses/{id}', function ($id) use ($expensesController) {
    $expensesController->destroyExpense($id, readJsonBody());
});
$router->add('POST', '/api/operating-expenses/bulk-delete', function () use ($expensesController) {
    $expensesController->bulkDestroyExpenses(readJsonBody());
});
$router->add('POST', '/api/operating-expenses/{id}/restore', function ($id) use ($expensesController) {
    $expensesController->restoreExpense($id, readJsonBody());
});
$router->add('GET', '/api/operating-expenses/{id}/attachment', function ($id) use ($expensesController) {
    $expensesController->getExpenseAttachment($id);
});
$router->add('POST', '/api/operating-expenses/{id}/attachment', function ($id) use ($expensesController) {
    $expensesController->updateExpenseAttachment($id, readJsonBody());
});
$router->add('GET', '/api/operating-expenses/summary', function () use ($expensesController) {
    $expensesController->getSummary();
});

// --- Recurring Bills & Cycles Routes ---
$router->add('GET', '/api/recurring-bills', function () use ($expensesController) {
    $expensesController->indexBills();
});
$router->add('POST', '/api/recurring-bills', function () use ($expensesController) {
    $expensesController->storeBill(readJsonBody());
});

// --- Bill Groups Routes (MUST precede /{id}) ---
$router->add('GET', '/api/recurring-bills/groups', function () use ($expensesController) {
    $expensesController->getGroups();
});
$router->add('POST', '/api/recurring-bills/groups', function () use ($expensesController) {
    $expensesController->storeGroup(readJsonBody());
});
$router->add('GET', '/api/recurring-bills/groups/{id}/info', function ($id) use ($expensesController) {
    $expensesController->getGroupInfo($id);
});
$router->add('POST', '/api/recurring-bills/groups/{id}/restore', function ($id) use ($expensesController) {
    $expensesController->restoreGroup($id);
});
$router->add('PUT', '/api/recurring-bills/groups/{id}', function ($id) use ($expensesController) {
    $expensesController->updateGroup($id, readJsonBody());
});
$router->add('DELETE', '/api/recurring-bills/groups/{id}', function ($id) use ($expensesController) {
    $expensesController->deleteGroup($id, readJsonBody());
});
$router->add('POST', '/api/recurring-bills/groups/{id}/assign-bills', function ($id) use ($expensesController) {
    $expensesController->bulkAssignBillsToGroup($id, readJsonBody());
});
$router->add('POST', '/api/recurring-bills/groups/{id}/remove-bills', function ($id) use ($expensesController) {
    $expensesController->bulkRemoveBillsFromGroup($id, readJsonBody());
});

// --- Reset Bills Audit Trail (MUST precede /{id}) ---
$router->add('GET', '/api/recurring-bills/resets', function () use ($expensesController) {
    $expensesController->getResetBills();
});

$router->add('GET', '/api/recurring-bills/cycles/{id}/attachment', function ($id) use ($expensesController) {
    $expensesController->getCycleAttachment($id);
});
$router->add('GET', '/api/recurring-bills/{id}/attachment', function ($id) use ($expensesController) {
    $expensesController->getBillAttachment($id);
});
$router->add('GET', '/api/recurring-bills/{id}/cycles', function ($id) use ($expensesController) {
    $expensesController->getBillCycles($id);
});
$router->add('GET', '/api/recurring-bills/{id}/details', function ($id) use ($expensesController) {
    $expensesController->getBillDetails($id);
});
$router->add('GET', '/api/recurring-bills/{id}/history', function ($id) use ($expensesController) {
    $expensesController->getBillDetails($id);
});
$router->add('POST', '/api/recurring-bills/cycles/{id}/void', function ($id) use ($expensesController) {
    $expensesController->voidCycle($id, readJsonBody());
});
$router->add('POST', '/api/recurring-bills/cycles/{id}/reset', function ($id) use ($expensesController) {
    $expensesController->resetPeriodBill($id, readJsonBody());
});
$router->add('GET', '/api/recurring-bills/cycles/{id}/voucher', function ($id) use ($expensesController) {
    $expensesController->getCycleVoucher($id);
});

$router->add('POST', '/api/recurring-bills/cycles/{id}/pay', function ($id) use ($expensesController) {
    $expensesController->payCycle($id, readJsonBody());
});
$router->add('POST', '/api/recurring-bills/cycles/{id}/create-bill', function ($id) use ($expensesController) {
    $expensesController->createPeriodBill($id, readJsonBody());
});
$router->add('PUT', '/api/recurring-bills/cycles/{id}', function ($id) use ($expensesController) {
    $expensesController->updatePeriodBill($id, readJsonBody());
});
$router->add('POST', '/api/recurring-bills/cycles/{id}/update', function ($id) use ($expensesController) {
    $expensesController->updatePeriodBill($id, readJsonBody());
});
$router->add('POST', '/api/recurring-bills/cycles/{id}/received-date', function ($id) use ($expensesController) {
    $expensesController->updateReceivedDate($id, readJsonBody());
});
$router->add('POST', '/api/recurring-bills/cycles/{id}/document-dates', function ($id) use ($expensesController) {
    $expensesController->updateDocumentDates($id, readJsonBody());
});
$router->add('POST', '/api/recurring-bills/{id}/pay', function ($id) use ($expensesController) {
    $expensesController->payBill($id, readJsonBody());
});
$router->add('POST', '/api/recurring-bills/{id}/attachment', function ($id) use ($expensesController) {
    $expensesController->updateBillAttachment($id, readJsonBody());
});
$router->add('PUT', '/api/recurring-bills/{id}', function ($id) use ($expensesController) {
    $expensesController->updateBill($id, readJsonBody());
});
$router->add('PUT', '/api/recurring-bills/{id}/cycle-anchor', function ($id) use ($expensesController) {
    $expensesController->updateBillCycleAnchor($id, readJsonBody());
});
$router->add('DELETE', '/api/recurring-bills/{id}', function ($id) use ($expensesController) {
    $expensesController->destroyBill($id, readJsonBody());
});
$router->add('POST', '/api/recurring-bills/{id}/group', function ($id) use ($expensesController) {
    $expensesController->assignBillToGroup($id, readJsonBody());
});
$router->add('DELETE', '/api/recurring-bills/{id}/group', function ($id) use ($expensesController) {
    $expensesController->removeBillFromGroup($id);
});
$router->add('POST', '/api/recurring-bills/{id}/cancel-edit', function ($id) use ($expensesController) {
    $expensesController->cancelBillEdit($id);
});
$router->add('POST', '/api/recurring-bills/{id}/restore', function ($id) use ($expensesController) {
    $expensesController->restoreBill($id, readJsonBody());
});
$router->add('POST', '/api/recurring-bills/{id}/pause', function ($id) use ($expensesController) {
    $expensesController->pauseBill($id, readJsonBody());
});
$router->add('POST', '/api/recurring-bills/{id}/resume', function ($id) use ($expensesController) {
    $expensesController->resumeBill($id, readJsonBody());
});


$router->add('GET', '/api/custom-services', function () use ($customServicesController) {
    $customServicesController->index();
});
$router->add('POST', '/api/custom-services', function () use ($customServicesController) {
    $customServicesController->store(readJsonBody());
});
$router->add('PUT', '/api/custom-services/{id}/stage', function ($id) use ($customServicesController) {
    $customServicesController->updateStage($id, readJsonBody());
});
$router->add('GET', '/api/custom-services/{id}/checklist', function ($id) use ($customServicesController) {
    $customServicesController->getChecklist($id);
});
$router->add('POST', '/api/custom-services/{id}/resubmit', function ($id) use ($customServicesController) {
    $customServicesController->resubmitAfterRefusal($id);
});

$router->add('GET', '/api/purchases', function () use ($purchasesController) {
    $purchasesController->index();
});
$router->add('POST', '/api/purchases/merge', function () use ($purchasesController) {
    $purchasesController->mergeBatches(readJsonBody());
});
$router->add('POST', '/api/purchases', function () use ($purchasesController) {
    $purchasesController->store(readJsonBody());
});
$router->add('GET', '/api/purchases/{id}/constituents', function ($id) use ($purchasesController) {
    $purchasesController->constituents((int)$id);
});
$router->add('GET', '/api/purchases/{id}/breakdown', function ($id) use ($purchasesController) {
    $purchasesController->breakdown((int)$id);
});
$router->add('GET', '/api/purchases/{id}/holds', function ($id) use ($purchasesController) {
    $purchasesController->holds((int)$id);
});
$router->add('DELETE', '/api/purchases/{id}', function ($id) use ($purchasesController) {
    $purchasesController->destroy($id);
});
$router->add('POST', '/api/purchases/{id}/price', function ($id) use ($purchasesController) {
    $purchasesController->updatePrice($id, readJsonBody());
});
$router->add('POST', '/api/purchases/{id}/pay', function ($id) use ($purchasesController) {
    $purchasesController->pay($id, readJsonBody());
});
$router->add('GET', '/api/purchases/{id}/payments', function ($id) use ($purchasesController) {
    $purchasesController->payments($id);
});
$router->add('POST', '/api/purchases/{id}/owner', function ($id) use ($purchasesController) {
    $purchasesController->reassignOwner($id, readJsonBody());
});
$router->add('POST', '/api/purchases/{id}/supplier', function ($id) use ($purchasesController) {
    $purchasesController->reassignSupplier($id, readJsonBody());
});
$router->add('POST', '/api/purchases/{id}/transfer', function ($id) use ($purchasesController) {
    $purchasesController->transferOwnership($id, readJsonBody());
});
$router->add('POST', '/api/purchases/{id}/transfer/accept', function ($id) use ($purchasesController) {
    $purchasesController->acceptTransfer($id);
});
$router->add('POST', '/api/purchases/{id}/transfer/settle', function ($id) use ($purchasesController) {
    $purchasesController->settleTransfer($id, readJsonBody());
});
$router->add('POST', '/api/purchases/{id}/transfer/cancel', function ($id) use ($purchasesController) {
    $purchasesController->cancelTransfer($id, readJsonBody());
});

// Partner Settlements
$router->add('GET', '/api/partner-settlements', function () use ($partnerSettlementsController) {
    $partnerSettlementsController->index();
});
$router->add('GET', '/api/partner-settlements/summary', function () use ($partnerSettlementsController) {
    $partnerSettlementsController->summary();
});
$router->add('GET', '/api/partner-settlements/{id}', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->show((string)$id);
});
$router->add('POST', '/api/partner-settlements/{id}/settle', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->settle($id, readJsonBody());
});
$router->add('POST', '/api/partner-settlements/bulk-settle', function () use ($partnerSettlementsController) {
    $partnerSettlementsController->bulkSettle(readJsonBody());
});
$router->add('POST', '/api/partner-settlements/{id}/release', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->release($id, readJsonBody());
});
$router->add('POST', '/api/partner-settlements/{id}/cancel', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->cancel($id, readJsonBody());
});
$router->add('POST', '/api/partner-settlements/{id}/dispute', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->dispute($id, readJsonBody());
});
$router->add('POST', '/api/partner-settlements/{id}/refuse', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->refuse($id, readJsonBody());
});
$router->add('POST', '/api/partner-settlements/{id}/accept', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->accept($id);
});
$router->add('POST', '/api/partner-settlements/{id}/adjust', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->adjust($id, readJsonBody());
});
$router->add('POST', '/api/partner-settlements/{id}/accept-clawback', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->acceptClawback((string)$id);
});
$router->add('POST', '/api/partner-settlements/{id}/refuse-clawback', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->refuseClawback((string)$id, readJsonBody());
});
$router->add('POST', '/api/partner-settlements/{id}/pay-manual-cost', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->payManualCostDemand($id);
});
$router->add('POST', '/api/partner-settlements/{id}/request-removal', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->requestRemoval($id, readJsonBody());
});
$router->add('POST', '/api/partner-settlements/{id}/accept-removal', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->acceptRemoval($id);
});
$router->add('POST', '/api/partner-settlements/{id}/refuse-removal', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->refuseRemoval($id, readJsonBody());
});
$router->add('POST', '/api/partner-settlements/{id}/cancel-removal', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->cancelRemoval($id, readJsonBody());
});
$router->add('POST', '/api/order-items/{id}/accept-return-destination', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->acceptReturnDestination($id);
});
$router->add('POST', '/api/order-items/{id}/refuse-return-destination', function ($id) use ($partnerSettlementsController) {
    $partnerSettlementsController->refuseReturnDestination($id, readJsonBody());
});

// Orders
$router->add('GET', '/api/orders', function () use ($ordersController) {
    $ordersController->index();
});
$router->add('POST', '/api/orders', function () use ($ordersController) {
    $ordersController->store(readJsonBody());
});
$router->add('POST', '/api/orders/coin-swap', function () use ($ordersController) {
    $ordersController->coinSwap(readJsonBody());
});
$router->add('GET', '/api/orders/{id}/history', function ($id) use ($ordersController) {
    $ordersController->history($id);
});
$router->add('GET', '/api/orders/{id}/merge-lineage', function ($id) use ($ordersController) {
    $ordersController->mergeLineage($id);
});
$router->add('PUT', '/api/orders/{id}/status', function ($id) use ($ordersController) {
    $ordersController->updateStatus($id, readJsonBody());
});
$router->add('POST', '/api/orders/{id}/pay', function ($id) use ($ordersController) {
    $ordersController->pay($id, readJsonBody());
});
$router->add('GET', '/api/orders/{id}/payments', function ($id) use ($ordersController) {
    $ordersController->payments($id);
});
$router->add('POST', '/api/orders/{id}/owner', function ($id) use ($ordersController) {
    $ordersController->reassignOwner($id, readJsonBody());
});
$router->add('POST', '/api/orders/{id}/customer', function ($id) use ($ordersController) {
    $ordersController->reassignCustomer($id, readJsonBody());
});
$router->add('PUT', '/api/orders/{id}', function ($id) use ($ordersController) {
    $ordersController->update($id, readJsonBody());
});
$router->add('DELETE', '/api/orders/{id}', function ($id) use ($ordersController) {
    $ordersController->destroy($id, readJsonBody());
});
$router->add('POST', '/api/orders/{id}/resubmit-after-refusal', function ($id) use ($ordersController) {
    $ordersController->resubmitAfterRefusal($id);
});
$router->add('POST', '/api/orders/{id}/remake', function ($id) use ($ordersController) {
    $ordersController->remake($id);
});
$router->add('POST', '/api/orders/{id}/update-remake', function ($id) use ($ordersController) {
    $ordersController->updateRemake($id, readJsonBody());
});
$router->add('POST', '/api/orders/{id}/cancel-return', function ($id) use ($ordersController) {
    $ordersController->cancelReturn($id);
});
$router->add('POST', '/api/orders/{id}/dismiss-refusal-card', function ($id) use ($ordersController) {
    $ordersController->dismissRefusalCard($id, readJsonBody());
});
$router->add('PUT', '/api/orders/{id}/dismiss-refusal-card', function ($id) use ($ordersController) {
    $ordersController->dismissRefusalCard($id, readJsonBody());
});
$router->add('POST', '/api/orders/{id}/restore', function ($id) use ($ordersController) {
    $ordersController->restore($id, readJsonBody());
});
$router->add('GET', '/api/orders/{id}/checklist', function ($id) use ($ordersController) {
    $ordersController->getChecklist($id);
});
$router->add('PUT', '/api/orders/{id}/attachments', function ($id) use ($ordersController) {
    $ordersController->updateAttachments($id, readJsonBody());
});
$router->add('PUT', '/api/orders/{id}/device-custody', function ($id) use ($ordersController) {
    $ordersController->updateDeviceCustody($id, readJsonBody());
});
$router->add('PUT', '/api/orders/{id}/checklist', function ($id) use ($ordersController) {
    $ordersController->updateAttachments($id, readJsonBody());
});
$router->add('POST', '/api/orders/{id}/attachments', function ($id) use ($ordersController) {
    $ordersController->updateAttachments($id, readJsonBody());
});
$router->add('GET', '/api/orders/{id}/attachments', function ($id) use ($ordersController) {
    $ordersController->getAttachments($id);
});
$router->add('GET', '/api/orders/{id}/attachments/{attId}/download', function ($id, $attId) use ($ordersController) {
    $ordersController->downloadAttachment($id, $attId);
});
$router->add('POST', '/api/orders/{id}/attachments/{attId}/restore', function ($id, $attId) use ($ordersController) {
    $ordersController->restoreAttachment($id, $attId);
});

$router->add('GET', '/api/settings/public', function () use ($settingsController) {
    $settingsController->publicBranding();
});
$router->add('GET', '/api/settings', function () use ($settingsController) {
    $settingsController->show();
});
$router->add('PUT', '/api/settings', function () use ($settingsController) {
    $settingsController->update(readJsonBody());
});
$router->add('GET', '/api/settings/cash-safes', function () use ($settingsController) {
    $settingsController->getCashSafes();
});
$router->add('POST', '/api/settings/cash-safes', function () use ($settingsController) {
    requireAdminUser();
    $settingsController->updateCashSafes(readJsonBody());
});
$router->add('GET', '/api/notifications/settings', function () use ($settingsController) {
    $settingsController->show();
});
$router->add('POST', '/api/notifications/settings', function () use ($settingsController) {
    $settingsController->update(readJsonBody());
});
$router->add('DELETE', '/api/notifications/settings/user', function () use ($settingsController) {
    $settingsController->resetPersonalNotificationSettings();
});
$router->add('DELETE', '/api/settings/notifications/personal', function () use ($settingsController) {
    $settingsController->resetPersonalNotificationSettings();
});
$router->add('POST', '/api/settings/personal-preferences', function () use ($settingsController) {
    $settingsController->updatePersonalPreferences(readJsonBody());
});
$router->add('PUT', '/api/settings/personal-preferences', function () use ($settingsController) {
    $settingsController->updatePersonalPreferences(readJsonBody());
});
$router->add('POST', '/api/settings/recovery-code', function () use ($settingsController) {
    $settingsController->generateRecoveryCode(readJsonBody());
});
$router->add('POST', '/api/auth/recover', function () use ($authController) {
    $authController->recoverWithCode(readJsonBody());
});
$router->add('POST', '/api/auth/user-recover', function () use ($authController) {
    $authController->userRecoverWithCode(readJsonBody());
});
$router->add('POST', '/api/user/recovery-code', function () use ($settingsController) {
    $settingsController->generateUserRecoveryCode(readJsonBody());
});
$router->add('GET', '/api/user/recovery-code', function () use ($settingsController) {
    $settingsController->getUserRecoveryStatus();
});
$router->add('POST', '/api/user/recovery-code/reveal', function () use ($settingsController) {
    $settingsController->revealUserRecoveryCode();
});
$router->add('POST', '/api/user/recovery-code/log-copy', function () use ($settingsController) {
    $settingsController->logUserRecoveryCopy();
});
$router->add('GET', '/api/user/recovery-code/history', function () use ($settingsController) {
    $settingsController->getUserRecoveryHistory();
});
$router->add('GET', '/api/user/2fa/status', function () use ($settingsController) {
    $settingsController->getUser2faStatus();
});
$router->add('GET', '/api/user/2fa/history', function () use ($settingsController) {
    $settingsController->getUser2faHistory();
});
$router->add('POST', '/api/settings/user-recovery-code/log-copy', function () use ($settingsController) {
    $settingsController->logUserRecoveryCopy();
});
$router->add('GET', '/api/settings/user-recovery-history', function () use ($settingsController) {
    $settingsController->getUserRecoveryHistory();
});
$router->add('GET', '/api/settings/recovery-history', function () use ($settingsController) {
    $settingsController->getRecoveryHistory();
});
$router->add('GET', '/api/settings/recovery-code', function () use ($settingsController) {
    $settingsController->getRecoveryCode();
});

// Threat Monitoring & IP Blacklist Management (Settings → Security)
$router->add('GET', '/api/security/threat-monitor', function () use ($securityController) {
    $securityController->threatMonitor();
});
$router->add('GET', '/api/security/threat-forensics', function () use ($securityController) {
    $securityController->threatForensics();
});
$router->add('GET', '/api/security/banned-ips', function () use ($securityController) {
    $securityController->getBannedIps();
});
$router->add('POST', '/api/security/ban-ip', function () use ($securityController) {
    $securityController->banIp();
});
$router->add('POST', '/api/security/unban-ip', function () use ($securityController) {
    $securityController->unbanIp();
});
$router->add('POST', '/api/security/clear-cooldown', function () use ($securityController) {
    $securityController->clearCooldown();
});
$router->add('POST', '/api/security/emergency-unban', function () use ($securityController) {
    $securityController->emergencyUnban();
});

// Database connection management (Settings → Database)
$router->add('GET', '/api/settings/database', function () use ($databaseController) {
    $databaseController->info();
});
$router->add('POST', '/api/settings/database/switch', function () use ($databaseController) {
    requireAdminUser();
    $databaseController->switchDatabase(readJsonBody());
});
$router->add('POST', '/api/settings/database/verify', function () use ($databaseController) {
    requireAdminUser();
    $databaseController->verifyAndBuild(readJsonBody());
});
$router->add('POST', '/api/settings/database/delete-bundled', function () use ($databaseController) {
    requireAdminUser();
    $databaseController->deleteBundled(readJsonBody());
});

$router->add('GET', '/api/service-templates', function () use ($serviceTemplatesController) {
    $serviceTemplatesController->index();
});
$router->add('POST', '/api/service-templates', function () use ($serviceTemplatesController) {
    $serviceTemplatesController->store(readJsonBody());
});
$router->add('PUT', '/api/service-templates/{id}', function ($id) use ($serviceTemplatesController) {
    $serviceTemplatesController->update($id, readJsonBody());
});
$router->add('DELETE', '/api/service-templates/{id}', function ($id) use ($serviceTemplatesController) {
    $serviceTemplatesController->destroy($id);
});

$router->add('GET', '/api/system-logs', function () use ($systemLogController) {
    $systemLogController->index();
});
$router->add('POST', '/api/system-logs/print', function () use ($systemLogController) {
    $systemLogController->recordPrint(readJsonBody());
});
$router->add('POST', '/api/system-logs/print-syslog', function () use ($systemLogController) {
    $systemLogController->recordSyslogPrint(readJsonBody());
});

// Backup & Restore routes
$router->add('GET', '/api/backups', function () use ($backupController) {
    $backupController->index();
});
$router->add('POST', '/api/backups', function () use ($backupController) {
    requireAdminUser();
    $backupController->create(readJsonBody());
});
$router->add('GET', '/api/backups/settings', function () use ($backupController) {
    $backupController->settings();
});
$router->add('PUT', '/api/backups/settings', function () use ($backupController) {
    requireAdminUser();
    $backupController->updateSettings(readJsonBody());
});
$router->add('POST', '/api/backups/upload', function () use ($backupController) {
    requireAdminUser();
    $backupController->upload();
});
$router->add('POST', '/api/backups/inspect', function () use ($backupController) {
    requireAdminUser();
    $backupController->inspectUploadedFile();
});
$router->add('GET', '/api/backups/{id}/download', function ($id) use ($backupController) {
    requireAdminUser();
    $backupController->download($id);
});
$router->add('POST', '/api/backups/{id}/restore', function ($id) use ($backupController) {
    requireAdminUser();
    $backupController->restore($id, readJsonBody());
});
$router->add('DELETE', '/api/backups/{id}', function ($id) use ($backupController) {
    requireAdminUser();
    $backupController->destroy($id);
});

// Messages & Conversations routes
$router->add('GET', '/api/conversations', function () use ($messagesController) {
    $messagesController->index();
});
$router->add('POST', '/api/conversations', function () use ($messagesController) {
    $messagesController->store(readJsonBody());
});
$router->add('GET', '/api/conversations/{id}/messages', function ($id) use ($messagesController) {
    $messagesController->messages($id);
});
$router->add('POST', '/api/conversations/{id}/messages', function ($id) use ($messagesController) {
    $messagesController->sendMessage($id, readJsonBody());
});
$router->add('POST', '/api/conversations/{id}/read', function ($id) use ($messagesController) {
    $messagesController->markRead($id);
});
$router->add('POST', '/api/conversations/{id}/pin', function ($id) use ($messagesController) {
    $messagesController->togglePin($id);
});
$router->add('POST', '/api/conversations/{id}/mute', function ($id) use ($messagesController) {
    $messagesController->toggleMute($id);
});
$router->add('DELETE', '/api/conversations/{id}', function ($id) use ($messagesController) {
    $messagesController->deleteConversation($id);
});
$router->add('POST', '/api/conversations/{id}/members/add', function ($id) use ($messagesController) {
    $messagesController->addMember($id, readJsonBody());
});
$router->add('POST', '/api/conversations/{id}/members/kick', function ($id) use ($messagesController) {
    $messagesController->kickMember($id, readJsonBody());
});
$router->add('POST', '/api/conversations/{id}/members/permissions', function ($id) use ($messagesController) {
    $messagesController->updateMemberPermissions($id, readJsonBody());
});
$router->add('DELETE', '/api/messages/{id}', function ($id) use ($messagesController) {
    $messagesController->deleteMessage($id);
});
$router->add('POST', '/api/messages/{id}/delete-for-everyone', function ($id) use ($messagesController) {
    $messagesController->deleteForEveryone($id);
});
$router->add('POST', '/api/messages/{id}/edit', function ($id) use ($messagesController) {
    $messagesController->editMessage($id, readJsonBody());
});
$router->add('PUT', '/api/messages/{id}', function ($id) use ($messagesController) {
    $messagesController->editMessage($id, readJsonBody());
});
$router->add('POST', '/api/messages/{id}/forward', function ($id) use ($messagesController) {
    $messagesController->forwardMessage($id, readJsonBody());
});
$router->add('POST', '/api/messages/{id}/star', function ($id) use ($messagesController) {
    $messagesController->toggleStar($id);
});
$router->add('GET', '/api/conversations/{id}/starred', function ($id) use ($messagesController) {
    $messagesController->starredMessages($id);
});
$router->add('POST', '/api/messages/upload', function () use ($messagesController) {
    $messagesController->upload();
});
$router->add('GET', '/api/messages/attachments/{id}/stream', function ($id) use ($messagesController) {
    $messagesController->streamAttachment($id);
});
$router->add('GET', '/api/messages/attachments/{id}/poster', function ($id) use ($messagesController) {
    $messagesController->streamAttachmentPoster($id);
});
$router->add('GET', '/api/messages/sync', function () use ($messagesController) {
    $messagesController->sync();
});
$router->add('GET', '/api/messages/{id}/read-receipts', function ($id) use ($messagesController) {
    $messagesController->readReceipts($id);
});

// Notifications routes
$router->add('GET', '/api/notifications', function () use ($notificationsController) {
    $notificationsController->index();
});
$router->add('POST', '/api/notifications/{id}/read', function ($id) use ($notificationsController) {
    $notificationsController->markRead($id);
});
$router->add('POST', '/api/notifications/read-all', function () use ($notificationsController) {
    $notificationsController->markAllRead();
});
$router->add('DELETE', '/api/notifications/clear-all', function () use ($notificationsController) {
    $notificationsController->clearAll();
});
$router->add('DELETE', '/api/notifications/trash/empty', function () use ($notificationsController) {
    $notificationsController->emptyTrash();
});
$router->add('DELETE', '/api/notifications/{id}', function ($id) use ($notificationsController) {
    $notificationsController->destroy($id);
});
$router->add('GET', '/api/notifications/unread-count', function () use ($notificationsController) {
    $notificationsController->unreadCount();
});
$router->add('POST', '/api/notifications/clear-read', function () use ($notificationsController) {
    $notificationsController->clearRead();
});
$router->add('POST', '/api/notifications/{id}/restore', function ($id) use ($notificationsController) {
    $notificationsController->restore($id);
});
$router->add('POST', '/api/notifications/bulk-read', function () use ($notificationsController) {
    $notificationsController->bulkMarkRead(readJsonBody());
});
$router->add('POST', '/api/notifications/bulk-dismiss', function () use ($notificationsController) {
    $notificationsController->bulkDismiss(readJsonBody());
});
$router->add('POST', '/api/notifications/bulk-restore', function () use ($notificationsController) {
    $notificationsController->bulkRestore(readJsonBody());
});
$router->add('POST', '/api/notifications/bulk-delete', function () use ($notificationsController) {
    $notificationsController->bulkPermanentDelete(readJsonBody());
});
$router->add('GET', '/api/notifications/security-forensics/{id}', function ($id) use ($notificationsController) {
    $notificationsController->securityForensics($id);
});
$router->add('GET', '/api/dues/live-portfolio', function () use ($notificationsController) {
    $notificationsController->livePortfolio();
});

// Schedules & Reminders routes
$router->add('GET', '/api/schedules', function () use ($schedulesController) {
    $schedulesController->index();
});
$router->add('POST', '/api/schedules', function () use ($schedulesController) {
    $schedulesController->store(readJsonBody());
});
$router->add('PUT', '/api/schedules/{id}', function ($id) use ($schedulesController) {
    $schedulesController->update($id, readJsonBody());
});
$router->add('DELETE', '/api/schedules/{id}', function ($id) use ($schedulesController) {
    $schedulesController->destroy($id);
});
$router->add('POST', '/api/schedules/{id}/complete', function ($id) use ($schedulesController) {
    $schedulesController->complete($id);
});
$router->add('POST', '/api/schedules/{id}/restore', function ($id) use ($schedulesController) {
    $schedulesController->restore($id);
});

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

// SEC-32: Dynamic Host / Origin Validation for State-Mutating Requests
if (in_array($method, ['POST', 'PUT', 'DELETE', 'PATCH'], true)) {
    $origin = trim((string)($_SERVER['HTTP_ORIGIN'] ?? ''));
    if ($origin !== '') {
        $originHost = parse_url($origin, PHP_URL_HOST);
        $serverHost = $_SERVER['HTTP_HOST'] ?? '';
        $serverHostOnly = strtolower(explode(':', $serverHost)[0]);
        $originHostOnly = strtolower($originHost ? explode(':', $originHost)[0] : '');

        $isLoopbackMatch = in_array($originHostOnly, ['localhost', '127.0.0.1', '::1'], true)
            && in_array($serverHostOnly, ['localhost', '127.0.0.1', '::1'], true);

        if ($originHostOnly !== $serverHostOnly && !$isLoopbackMatch) {
            Response::json(['error' => 'Cross-origin request blocked: origin does not match system host.'], 403);
            return;
        }
    }
}

// SEC-29: Custom Anti-CSRF Header Protection for State-Mutating Requests
if (in_array($method, ['POST', 'PUT', 'DELETE', 'PATCH'], true) && str_starts_with($path, '/api')) {
    $requestedWith = strtolower(trim((string)($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '')));
    if ($requestedWith !== 'xmlhttprequest') {
        Response::json(['error' => 'Forbidden: Missing or invalid anti-CSRF request header.'], 403);
        return;
    }
}

$installed = isSystemInstalled();
$isSetupWhitelist = in_array($path, [
    '/api/health', '/api/system/version',
    '/api/setup/license/status', '/api/setup/license/upload', '/api/setup/license/machine-id',
    '/api/setup/status', '/api/license/activate', '/api/settings/public', '/api/system/license-agreement',
    '/api/setup/admin', '/api/setup/preset', '/api/setup/db/status',
    '/api/setup/db/test', '/api/setup/db/apply', '/api/setup/db/bundled-status',
    '/api/setup/db/use-bundled', '/api/setup/restore', '/api/setup/restore/discard',
    '/api/setup/restore/inspect'
]);

// Continuous Runtime License Sentinel: enforces hard-lockout if license is missing, expired or hardware mismatched
if (str_starts_with($path, '/api') && !$isSetupWhitelist) {
    $runtimeLicense = LicenseService::verifyRuntime();
    if (!$runtimeLicense['valid']) {
        Response::json([
            'ok'         => false,
            'error'      => "You cannot use this system anymore because you don't have the right license.",
            'code'       => $runtimeLicense['code'] ?? 'LICENSE_MISMATCH',
            'lockout'    => true,
            'machine_id' => $runtimeLicense['machine_id'] ?? LicenseService::getMachineId(),
        ], 423);
        return;
    }
}

if (str_starts_with($path, '/api') && !$isSetupWhitelist && !in_array($path, ['/api/auth/login', '/api/auth/session', '/api/auth/recover', '/api/auth/user-recover', '/api/settings/public', '/api/security/emergency-unban', '/api/auth/logout', '/api/auth/mark-closed', '/api/auth/undo-close-log'])) {
    if (empty($_SESSION['user_id'])) {
        Response::json(['error' => 'Unauthorized'], 401);
        return;
    }
}

if (!empty($_SESSION['user_id'])) {
    try {
        $db = Database::getConnection();
    } catch (\Throwable $e) {
        unset($_SESSION['user_id']);
        $db = null;
    }

    if ($db) {
        // On state-mutating requests (POST, PUT, DELETE), verify session exclusivity
        $reqMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        if ($reqMethod !== 'GET' && !in_array($path, ['/api/auth/logout', '/api/auth/mark-closed', '/api/auth/undo-close-log', '/api/users/activity'])) {
            try {
                $stmt = $db->prepare("SELECT active_session_id, last_device_token FROM users WHERE id = :uid AND deleted_at IS NULL");
                $stmt->execute(['uid' => (int)$_SESSION['user_id']]);
                $userSession = $stmt->fetch();

                $deviceToken = trim((string)($_SERVER['HTTP_X_DEVICE_TOKEN'] ?? ''));
                $sameDevice  = $deviceToken !== '' && !empty($userSession['last_device_token']) && hash_equals($userSession['last_device_token'], $deviceToken);

                if (!$userSession || ($userSession['active_session_id'] !== session_id() && !$sameDevice)) {
                    if (session_status() === PHP_SESSION_ACTIVE) {
                        session_destroy();
                    }
                    Response::json(['error' => 'Session terminated: this account was signed into elsewhere or unlocked.', 'session_terminated' => true], 401);
                    return;
                }
                if ($userSession['active_session_id'] !== session_id() && $sameDevice) {
                    $db->prepare("UPDATE users SET active_session_id = :sid, last_active_at = NOW() WHERE id = :uid")
                       ->execute(['sid' => session_id(), 'uid' => (int)$_SESSION['user_id']]);
                }
            } catch (\Throwable $e) {}
        }

        // Touch last_active_at for active user operations (skip passive message sync, unload beacons, undo-close, and media streaming)
        if ($path !== '/api/messages/sync' && $path !== '/api/auth/mark-closed' && $path !== '/api/auth/undo-close-log' && !str_contains($path, '/stream') && !str_contains($path, '/image')) {
            try {
                $db->prepare("UPDATE users SET last_active_at = NOW() WHERE id = :uid")->execute(['uid' => (int)$_SESSION['user_id']]);
            } catch (\Throwable $e) {}
        }

        // Release the PHP session file lock early for GET requests (except /api/auth/session which writes to $_SESSION).
        // PHP serializes all requests sharing the same session_id behind a file lock.
        // When loadAllData() fires 10 parallel GET requests via Promise.all, they queue
        // sequentially, potentially exceeding the 15-second AbortController timeout.
        // Releasing early allows GET requests to execute concurrently.
        // POST/PUT/DELETE requests keep the lock since they may write to $_SESSION.
        if ($reqMethod === 'GET' && $path !== '/api/auth/session' && session_status() === PHP_SESSION_ACTIVE) {
            session_write_close();
        }
    }
}

// SEC-40: Top-level Exception Boundary Guard
try {
    $router->dispatch($method, $path);
} catch (\Throwable $e) {
    error_log("Unhandled system exception in route {$method} {$path}: " . $e->getMessage() . "\n" . $e->getTraceAsString());
    Response::json(['error' => 'An internal server error occurred. Please contact system administrator.'], 500);
}

/* [END_OF_MODULE_SECURITY_SEAL] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
