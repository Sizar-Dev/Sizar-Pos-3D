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

class BundledMaria
{
    /** Database name used by the bundled server. */
    public const DB_NAME = 'pos25';

    /** Port scan window — preferred range before falling back to ephemeral. */
    private const PORT_MIN = 13306;
    private const PORT_MAX = 13316;

    /** Guards against spawning twice within a single PHP request. */
    private static bool $ensuredThisRequest = false;

    // ─────────────────────────────────────────────────────────────
    // Path resolution
    // ─────────────────────────────────────────────────────────────

    /**
     * Root folder holding the bundled binaries + runtime data.
     * Override with the POS25_BUNDLED_MARIA_DIR env var (absolute path) for
     * CI / tests; otherwise defaults to backend/bundled_maria/.
     */
    public static function rootDir(): string
    {
        $env = getenv('POS25_BUNDLED_MARIA_DIR');
        if (is_string($env) && $env !== '' && is_dir($env)) {
            return rtrim(str_replace('\\', '/', $env), '/');
        }
        return str_replace('\\', '/', realpath(__DIR__ . '/../bundled_maria') ?: __DIR__ . '/../bundled_maria');
    }

    public static function binDir(): string
    {
        return self::rootDir() . '/bin';
    }

    /** Runtime dir (datadir + my.cnf + logs). Created on demand. */
    public static function runtimeDir(): string
    {
        $dir = self::rootDir() . '/runtime';
        if (!is_dir($dir)) {
            @mkdir($dir, 0755, true);
        }
        return $dir;
    }

    private static function exeName(string $base): string
    {
        // The whole stack is Windows (Apache24 on Windows). Keep a graceful
        // fallback for the off chance this is exercised on a POSIX box.
        return self::isWindows() ? $base . '.exe' : $base;
    }

    private static function isWindows(): bool
    {
        return strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
    }

    public static function mariadbdPath(): string
    {
        return self::binDir() . '/' . self::exeName('mariadbd');
    }

    private static function installDbPath(): string
    {
        return self::binDir() . '/' . self::exeName('mariadb-install-db');
    }

    private static function adminPath(): ?string
    {
        $candidates = ['mariadb-admin', 'mysqladmin'];
        foreach ($candidates as $c) {
            $p = self::binDir() . '/' . self::exeName($c);
            if (is_file($p)) {
                return $p;
            }
        }
        return null;
    }

    /**
     * Path to the dump tool shipped with the bundle (mariadb-dump / mysqldump),
     * or null if none is present. Used by BackupController in bundled mode.
     */
    public static function dumpBinary(): ?string
    {
        foreach (['mariadb-dump', 'mysqldump'] as $c) {
            $p = self::binDir() . '/' . self::exeName($c);
            if (is_file($p)) {
                return $p;
            }
        }
        return null;
    }

    /**
     * Path to the client tool shipped with the bundle (mariadb / mysql), or
     * null if none is present. Used by BackupController in bundled mode.
     */
    public static function clientBinary(): ?string
    {
        foreach (['mariadb', 'mysql'] as $c) {
            $p = self::binDir() . '/' . self::exeName($c);
            if (is_file($p)) {
                return $p;
            }
        }
        return null;
    }

    private static ?string $lastStartupError = null;

    public static function lastStartupError(): ?string
    {
        return self::$lastStartupError;
    }

    /** True when bin/mariadbd.exe, system tables or installer, and error messages are present. */
    public static function binariesAvailable(): bool
    {
        $hasDaemon = is_file(self::mariadbdPath());
        $hasMessages = is_file(self::rootDir() . '/share/english/errmsg.sys');
        $hasDataOrInstaller = is_dir(self::runtimeDir() . '/data/mysql') || is_file(self::installDbPath());
        return $hasDaemon && $hasMessages && $hasDataOrInstaller;
    }

    // ─────────────────────────────────────────────────────────────
    // Public lifecycle
    // ─────────────────────────────────────────────────────────────

    /**
     * Status snapshot for the setup screen.
     * @return array{available:bool, running:bool, port:int|null, root:string}
     */
    public static function status(): array
    {
        $port = self::readPort();
        return [
            'available' => self::binariesAvailable(),
            'running'   => $port !== null && self::isPortListening($port),
            'port'      => $port,
            'root'      => self::rootDir(),
        ];
    }

    /**
     * Spawns the private MariaDB daemon (idempotent) and returns the port it
     * is listening on. Initialises the datadir on first call.
     *
     * @throws RuntimeException with the server.err tail when the daemon refuses
     *         to start or the binaries are missing.
     */
    public static function ensureStarted(): int
    {
        if (!self::binariesAvailable()) {
            throw new RuntimeException(
                'Built-in database is not bundled in this build. Drop the MariaDB ' .
                '"Windows ZIP (without installer)" contents into SizarDev-Pos/bundled_maria/ ' .
                '(so bin/mariadbd.exe exists) and try again. See bundled_maria/README.md.'
            );
        }

        $runtime = self::runtimeDir();
        $dataDir = $runtime . '/data';
        $myCnf   = $runtime . '/my.cnf';
        $logErr  = $runtime . '/server.err';

        // Serialise initialization & spawning so concurrent requests do not race
        $lockHandle = fopen($runtime . '/spawn.lock', 'c');
        if ($lockHandle) {
            flock($lockHandle, LOCK_EX);
        }
        try {
            // First-run init: build the datadir if the mysql system tables are missing
            $mysqlDir = $dataDir . '/mysql';
            $needsInit = !is_dir($mysqlDir)
                || !is_file($mysqlDir . '/db.frm')
                || !is_file($mysqlDir . '/user.frm');

            if ($needsInit) {
                // Stop any running daemon first so data files unlock
                try {
                    self::shutdown();
                } catch (\Throwable $e) {
                    // ignore
                }
                usleep(200000); // 200ms

                // Zero Data Loss Guard: if datadir holds the store database, NEVER purge without backup!
                if (is_dir($dataDir . '/' . self::DB_NAME)) {
                    $backupDir = $runtime . '/data_backup_' . date('Ymd_His');
                    if (!@rename($dataDir, $backupDir)) {
                        throw new RuntimeException("Data directory needs repair but contains existing store data. Could not create backup at {$backupDir}. Halting to prevent data loss.");
                    }
                } elseif (is_dir($dataDir)) {
                    self::rrmdir($dataDir);
                }
                @mkdir($dataDir, 0755, true);
                self::runInstallDb($dataDir);
            }

            // Prefer the previously-used port so restarts don't shuffle the config.
            $preferred = self::readPort();
            if ($preferred !== null && self::isMariaDbListening($preferred)) {
                // Already up (survived from an earlier request and verified via protocol handshake).
                return $preferred;
            }
            $port = self::pickFreePort($preferred);

            self::writeMyCnf($myCnf, $dataDir, $port, $logErr);

            // Re-check inside the lock: a sibling request may have started it.
            if (self::isMariaDbListening($port)) {
                self::writePort($port);
                return $port;
            }

            self::spawnDetached($myCnf);
            self::writePort($port);

            if (!self::waitForReady($port, 25)) {
                throw new RuntimeException(
                    "Built-in database did not become ready within 25 seconds.\n\n" .
                    "server.err (last lines):\n" . self::logTail(40)
                );
            }
            return $port;
        } finally {
            if ($lockHandle) {
                flock($lockHandle, LOCK_UN);
                fclose($lockHandle);
            }
        }
    }

    /**
     * Bootstrap hook called once per request from index.php. No-op unless the
     * active config has `use_bundled => true`. Cheap when the daemon is already
     * up (single short TCP probe); re-spawns it otherwise.
     */
    public static function ensureRunningIfConfigured(): void
    {
        if (self::$ensuredThisRequest) {
            return;
        }
        self::$ensuredThisRequest = true;

        $configPath = __DIR__ . '/../config/database.php';
        if (!is_file($configPath)) {
            return;
        }
        $config = @require $configPath;
        if (!is_array($config) || empty($config['use_bundled'])) {
            return;
        }

        $port = (int) ($config['port'] ?? 0);
        if ($port > 0 && self::isPortListening($port)) {
            return; // already running on the configured port
        }

        try {
            $started = self::ensureStarted();
            // If the daemon came up on a different port than the config records
            // (e.g. the old one was taken), rewrite the config so PDO connects.
            if ($started !== $port) {
                $config['port'] = $started;
                self::writeConfig($config);
            }
        } catch (\Throwable $e) {
            self::$lastStartupError = $e->getMessage();
            error_log('[BundledMaria] ensureRunningIfConfigured failed: ' . $e->getMessage());
        }
    }

    /**
     * Sends `mariadb-admin shutdown` so the data files flush cleanly. Safe to
     * call when nothing is running. Best-effort — returns true on clean
     * shutdown, false otherwise.
     */
    public static function shutdown(): bool
    {
        $port = self::readPort();
        if ($port === null || !self::isPortListening($port)) {
            return true;
        }
        $admin = self::adminPath();
        if ($admin === null) {
            return false;
        }
        $cmd = sprintf(
            '"%s" --host=127.0.0.1 --port=%d --user=root shutdown 2>&1',
            $admin,
            $port
        );
        $out = [];
        $code = 0;
        exec($cmd, $out, $code);
        if ($code !== 0) {
            return false;

/* [INTERNAL_RUNTIME_FRAMEWORK_TOKEN] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
        }
        // Wait up to 5 seconds for daemon to release file handles on Windows
        $deadline = microtime(true) + 5.0;
        while (microtime(true) < $deadline) {
            if (!self::isPortListening($port)) {
                usleep(300000); // 300ms buffer for OS file locks
                return true;
            }
            usleep(150000);
        }
        return !self::isPortListening($port);
    }

    // ─────────────────────────────────────────────────────────────
    // Internals
    // ─────────────────────────────────────────────────────────────

    /** Initialises a fresh datadir via mariadb-install-db (or --initialize). */
    private static function runInstallDb(string $dataDir): void
    {
        if (!is_dir($dataDir)) {
            @mkdir($dataDir, 0755, true);
        }

        $installer = self::installDbPath();
        if (is_file($installer)) {
            // The Windows mariadb-install-db.exe auto-detects its basedir from
            // its own binary path (bin/ → parent dir → share/). It does NOT
            // accept --basedir as a flag (unlike the Linux shell script).
            //
            // --allow-remote-root-access creates a root@'%' account (blank
            // password) so PDO can authenticate over TCP to 127.0.0.1 even with
            // skip-name-resolve on. The daemon binds to loopback only, so '%'
            // is not actually reachable off-box.
            $slashDataDir = self::isWindows() ? str_replace('/', '\\', $dataDir) : $dataDir;
            $cmd = sprintf(
                '"%s" --datadir="%s" --allow-remote-root-access 2>&1',
                $installer,
                $slashDataDir
            );
            $out = [];
            $code = 0;
            exec($cmd, $out, $code);
            if ($code !== 0) {
                throw new RuntimeException(
                    'mariadb-install-db failed (exit ' . $code . "):\n" . implode("\n", $out)
                );
            }

            // Post-init sanity: verify the system tables were actually created.
            $mysqlDir = $dataDir . '/mysql';
            if (!is_dir($mysqlDir) || !is_file($mysqlDir . '/db.frm')) {
                throw new RuntimeException(
                    'mariadb-install-db exited successfully but the mysql system ' .
                    'tables were not created. Check that share/ exists under ' .
                    "the bundled_maria root directory.\n\nInstaller output:\n" . implode("\n", $out)
                );
            }
            return;
        }

        // Fallback for minimal bundles without install-db: let mariadbd
        // initialise the datadir itself (MariaDB uses --bootstrap, not the
        // MySQL-only --initialize-insecure). mariadbd.exe DOES accept --basedir.
        $baseDir = self::isWindows() ? str_replace('/', '\\', self::rootDir()) : self::rootDir();
        $slashDataDir = self::isWindows() ? str_replace('/', '\\', $dataDir) : $dataDir;
        $nullDev = self::isWindows() ? 'NUL' : '/dev/null';
        $cmd = sprintf(
            '"%s" --no-defaults --basedir="%s" --datadir="%s" --bootstrap < %s 2>&1',
            self::mariadbdPath(),
            $baseDir,
            $slashDataDir,
            $nullDev
        );
        $out = [];
        $code = 0;
        exec($cmd, $out, $code);
        if ($code !== 0) {
            throw new RuntimeException(
                'mariadbd --bootstrap failed (exit ' . $code . "):\n" . implode("\n", $out)
            );
        }
    }

    private static function writeMyCnf(string $file, string $dataDir, int $port, string $logErr): void
    {
        // Forward slashes are valid inside my.cnf on Windows and avoid escaping.
        $base = str_replace('\\', '/', self::rootDir());
        $data = str_replace('\\', '/', $dataDir);
        $log  = str_replace('\\', '/', $logErr);
        $lines = [
            '[mysqld]',
            'basedir=' . $base,
            'datadir=' . $data,
            'port=' . $port,
            'bind-address=127.0.0.1',
            'skip-name-resolve',
            'log-error=' . $log,
            'max_connections=128',
            'max_allowed_packet=512M',
            'innodb_buffer_pool_size=256M',
            'character-set-server=utf8mb4',
            'collation-server=utf8mb4_unicode_ci',
            '',
            '[client]',
            'max_allowed_packet=512M',
            '',
        ];
        file_put_contents($file, implode("\n", $lines));
    }

    /**
     * Launches mariadbd as a detached background process that survives the end
     * of this PHP request. On Windows, `start "" /B` hands the child off to the
     * OS so Apache exiting the request doesn't tear it down; mariadbd writes its
     * own output to the log-error file configured in my.cnf.
     */
    private static function spawnDetached(string $defaultsFile): void
    {
        $exe = self::mariadbdPath();
        if (self::isWindows()) {
            // The empty "" is the (mandatory) window title for `start`.
            $cmd = 'start "" /B "' . str_replace('/', '\\', $exe) . '" --defaults-file="' .
                str_replace('/', '\\', $defaultsFile) . '"';
            $handle = popen($cmd, 'r');
            if (is_resource($handle)) {
                pclose($handle);
            }
            return;
        }
        // POSIX fallback (not the primary target).
        $cmd = sprintf('"%s" --defaults-file="%s" > /dev/null 2>&1 &', $exe, $defaultsFile);
        exec($cmd);
    }

    private static function pickFreePort(?int $preferred): int
    {
        $candidates = [];
        if ($preferred !== null && $preferred > 0) {
            $candidates[] = $preferred;
        }
        for ($p = self::PORT_MIN; $p < self::PORT_MAX; $p++) {
            $candidates[] = $p;
        }
        foreach (array_unique($candidates) as $port) {
            if (self::isPortFree($port)) {
                return $port;
            }
        }
        // Last resort: let the OS hand us an ephemeral port.
        $sock = @stream_socket_server('tcp://127.0.0.1:0', $errno, $errstr);
        if ($sock) {
            $name = stream_socket_get_name($sock, false);
            fclose($sock);
            $parts = explode(':', $name);
            $port = (int) end($parts);
            if ($port > 0) {
                return $port;
            }
        }
        return self::PORT_MIN;
    }

    /** True when nothing is bound to the port (we can bind a listener). */
    private static function isPortFree(int $port): bool
    {
        // On Windows Winsock, stream_socket_server sets SO_REUSEADDR by default,
        // allowing binding even when the port is occupied. Checking isPortListening
        // first ensures an actively occupied port is properly detected as not free.
        if (self::isPortListening($port)) {
            return false;
        }
        $sock = @stream_socket_server('tcp://127.0.0.1:' . $port, $errno, $errstr);
        if ($sock) {
            fclose($sock);
            return true;
        }
        return false;
    }

    /** True when something is accepting connections on the port. */
    private static function isPortListening(int $port): bool
    {
        $conn = @fsockopen('127.0.0.1', $port, $errno, $errstr, 0.4);
        if ($conn) {
            fclose($conn);
            return true;
        }
        return false;
    }

    /** True when the port responds specifically with the MariaDB/MySQL protocol handshake. */
    public static function isMariaDbListening(int $port): bool
    {
        $conn = @fsockopen('127.0.0.1', $port, $errno, $errstr, 0.4);
        if (!$conn) {
            return false;
        }
        stream_set_timeout($conn, 0, 500000); // 500ms
        $greeting = fread($conn, 128);
        fclose($conn);
        return strlen($greeting) > 5 && ord($greeting[4]) === 0x0a;
    }

    private static function waitForReady(int $port, int $timeoutSeconds): bool
    {
        $deadline = microtime(true) + $timeoutSeconds;
        $errFile = self::runtimeDir() . '/server.err';
        while (microtime(true) < $deadline) {
            if (self::isPortListening($port)) {
                return true;
            }
            if (is_file($errFile) && filesize($errFile) > 0) {
                $tail = self::logTail(10);
                if (stripos($tail, 'Aborting') !== false || stripos($tail, 'Fatal error') !== false) {
                    return false; // Process failed immediately on startup
                }
            }
            usleep(250000); // 250ms
        }
        return false;
    }

    private static function readPort(): ?int
    {
        $file = self::runtimeDir() . '/port.txt';
        if (!is_file($file)) {
            return null;
        }
        $raw = trim((string) file_get_contents($file));
        return ctype_digit($raw) ? (int) $raw : null;
    }

    private static function writePort(int $port): void
    {
        file_put_contents(self::runtimeDir() . '/port.txt', (string) $port);
    }

    public static function logTail(int $lines = 40): string
    {
        $file = self::runtimeDir() . '/server.err';
        if (!is_file($file)) {
            return '(server.err does not exist)';
        }
        $raw = (string) file_get_contents($file);
        if ($raw === '') {
            return '(server.err is empty)';
        }
        $all = preg_split('/\r\n|\r|\n/', $raw);
        $slice = array_slice($all, max(0, count($all) - $lines));
        return implode("\n", $slice);
    }

    /** Writes config/database.php atomically. */
    private static function writeConfig(array $config): void
    {
        $dir = __DIR__ . '/../config';
        if (!is_dir($dir)) {
            if (!@mkdir($dir, 0750, true) && !is_dir($dir)) {
                throw new \RuntimeException("Configuration directory does not exist and cannot be created: {$dir}");
            }
        }
        $target = $dir . '/database.php';
        $temp = $dir . '/database.php.tmp.' . bin2hex(random_bytes(6));
        $content = "<?php\n\nreturn " . var_export($config, true) . ";\n";
        $bytes = @file_put_contents($temp, $content, LOCK_EX);
        if ($bytes === false || $bytes !== strlen($content)) {
            @unlink($temp);
            throw new \RuntimeException("Failed to write temporary configuration file at {$temp}. Check directory permissions.");
        }
        @chmod($temp, 0640);
        if (!@rename($temp, $target)) {
            @unlink($target);
            if (!@rename($temp, $target)) {
                @unlink($temp);
                throw new \RuntimeException("Failed to atomically replace configuration file: {$target}");
            }
        }
    }

    /** Recursively delete a directory (best-effort; ignores locked files). */
    public static function rrmdir(string $dir): void
    {
        if (!is_dir($dir)) {
            return;
        }
        foreach (scandir($dir) ?: [] as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }
            $path = $dir . DIRECTORY_SEPARATOR . $item;
            if (is_dir($path)) {
                self::rrmdir($path);
            } else {
                @unlink($path);
            }
        }
        @rmdir($dir);
    }
}

/* [END_OF_MODULE_SECURITY_SEAL] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
