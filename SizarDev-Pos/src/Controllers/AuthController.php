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

require_once __DIR__ . '/../Response.php';
require_once __DIR__ . '/../SystemLog.php';
require_once __DIR__ . '/../Utils/RateLimiter.php';
require_once __DIR__ . '/../Utils/Totp.php';

use SizarDev\Utils\Totp;

class AuthController
{
    public function __construct()
    {
        try {
            $db = Database::getConnection();

            // Auto-migrate: add active_session_id column if missing
            $stmt = $db->prepare("SELECT COUNT(*) as count FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'users' AND COLUMN_NAME = 'active_session_id'");
            $stmt->execute();
            if ($stmt->fetch()['count'] == 0) {
                $db->exec("ALTER TABLE users ADD COLUMN active_session_id VARCHAR(128) NULL AFTER last_active_at");
            }

            // Auto-migrate: add last_device_token column if missing
            $stmt3 = $db->prepare("SELECT COUNT(*) as count FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'users' AND COLUMN_NAME = 'last_device_token'");
            $stmt3->execute();
            if ($stmt3->fetch()['count'] == 0) {
                $db->exec("ALTER TABLE users ADD COLUMN last_device_token VARCHAR(128) NULL AFTER active_session_id");
            }

            // Auto-migrate: add two_factor_last_slice column if missing (RFC 6238 Anti-Replay)
            $stmt4 = $db->prepare("SELECT COUNT(*) as count FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'users' AND COLUMN_NAME = 'two_factor_last_slice'");
            $stmt4->execute();
            if ($stmt4->fetch()['count'] == 0) {
                $db->exec("ALTER TABLE users ADD COLUMN two_factor_last_slice INT UNSIGNED NULL AFTER two_factor_updated_at");
            }

            // Auto-migrate: expand login_history.event_type to VARCHAR
            $stmt2 = $db->prepare("SELECT DATA_TYPE FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'login_history' AND COLUMN_NAME = 'event_type'");
            $stmt2->execute();
            $typeInfo = $stmt2->fetch();
            if ($typeInfo && strtolower($typeInfo['DATA_TYPE']) === 'enum') {
                $db->exec("ALTER TABLE login_history MODIFY COLUMN event_type VARCHAR(50) NOT NULL");
            }

            // Rule 88: Ensure created_at index on login_history for rolling retention
            $existingLhIndexes = $db->query("SHOW INDEX FROM login_history")->fetchAll(\PDO::FETCH_ASSOC);
            $lhIdxNames = array_column($existingLhIndexes, 'Key_name');
            if (!in_array('idx_lh_created_at', $lhIdxNames, true)) {
                $db->exec("CREATE INDEX idx_lh_created_at ON login_history (created_at)");
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
    }

    public function login(array $data): void
    {
        $identifier  = trim($data['identifier'] ?? '');
        $password    = $data['password'] ?? '';
        $deviceToken = trim($data['device_token'] ?? '');
        if ($deviceToken === '' && !empty($_SERVER['HTTP_X_DEVICE_TOKEN'])) {
            $deviceToken = trim($_SERVER['HTTP_X_DEVICE_TOKEN']);
        }
        $forceLogin  = !empty($data['force_login']) || !empty($data['takeover']);

        if ($identifier === '' || $password === '') {
            Response::json(['error' => 'Identifier and password required'], 400);
            return;
        }

        $db = Database::getConnection();
        $ip = RateLimiter::getClientIp();

        $settings = $db->query('SELECT login_max_attempts, login_lockout_seconds, recovery_max_attempts, recovery_lockout_seconds FROM settings LIMIT 1')->fetch();
        $loginMaxAttempts = $settings && !empty($settings['login_max_attempts']) ? (int)$settings['login_max_attempts'] : 5;
        $loginLockoutSecs = $settings && !empty($settings['login_lockout_seconds']) ? (int)$settings['login_lockout_seconds'] : 60;
        $recMaxAttempts   = $settings && !empty($settings['recovery_max_attempts']) ? (int)$settings['recovery_max_attempts'] : 5;
        $recLockoutSecs   = $settings && !empty($settings['recovery_lockout_seconds']) ? (int)$settings['recovery_lockout_seconds'] : 120;

        // 1. Check if user/IP is currently locked out
        $lock = RateLimiter::checkLock($db, 'login', $identifier, $ip);
        if ($lock !== null) {
            http_response_code(429);
            header('Retry-After: ' . $lock['remaining_seconds']);
            Response::json([
                'error'             => "Too many failed login attempts. Temporarily locked for {$lock['remaining_seconds']} seconds.",
                'locked_until'      => $lock['locked_until'],
                'remaining_seconds' => $lock['remaining_seconds'],
                'failed_attempts'   => $lock['failed_attempts'],
                'max_attempts'      => $loginMaxAttempts
            ], 429);
            return;
        }

        $stmt = $db->prepare('SELECT * FROM users WHERE (username = :id OR email = :id OR phone = :id) AND deleted_at IS NULL LIMIT 1');
        $stmt->execute(['id' => $identifier]);
        $user = $stmt->fetch();

        if (!$user) {
            // SEC-07: Constant-time Bcrypt verification against a pre-computed 60-character dummy hash (cost 12)
            // Equalizes calculation duration (~210ms) to defeat side-channel network timing enumeration
            password_verify($password, '$2y$12$chxnVgAal7UTSHhWVDUxFOb2TWab8k38PyK68VERp0XrH6uyM/uX.');

            $failIdentifier = RateLimiter::isLocalhost($ip) ? $identifier : '';
            $failRes = RateLimiter::recordFailure($db, 'login', $failIdentifier, $ip, $loginMaxAttempts, $loginLockoutSecs);
            SystemLog::write('auth', 'login_failed', null, 'anonymous', json_encode(['reason' => 'Account identifier not found', 'ip' => $ip]));
            if ($failRes['is_locked']) {
                http_response_code(429);
                header('Retry-After: ' . $failRes['remaining_seconds']);
                Response::json([
                    'error'             => "Too many failed login attempts. Account temporarily locked for {$failRes['remaining_seconds']} seconds.",
                    'locked_until'      => $failRes['locked_until'],
                    'remaining_seconds' => $failRes['remaining_seconds'],
                    'failed_attempts'   => $failRes['failed_attempts'],
                    'max_attempts'      => $failRes['max_attempts']
                ], 429);
                return;
            }
            Response::json([
                'error'              => 'Invalid credentials or account deactivated',
                'remaining_attempts' => $failRes['remaining_attempts'],
                'failed_attempts'    => $failRes['failed_attempts'],
                'max_attempts'       => $failRes['max_attempts']
            ], 401);
            return;
        }

        $isValid = false;
        if (password_verify($password, $user['password_hash'])) {
            $isValid = true;
        } else {
            // Manual plaintext update detected (e.g., via phpMyAdmin) - auto-hash it
            // Only permit fallback if the stored value is genuinely unhashed (unknown algo)
            // to prevent using an existing bcrypt hash directly as the password (Pass-the-Hash).
            $storedHashInfo = password_get_info($user['password_hash']);
            if (($storedHashInfo['algoName'] === 'unknown' || empty($storedHashInfo['algo'])) && hash_equals($user['password_hash'], $password)) {
                $newHash = password_hash($password, PASSWORD_DEFAULT);
                $db->prepare('UPDATE users SET password_hash = :hash WHERE id = :id')
                   ->execute(['hash' => $newHash, 'id' => $user['id']]);
                $user['password_hash'] = $newHash;
                $isValid = true;
            }
        }

        if (!$isValid) {
            $this->trackEvent($user['id'], 'login_failed');
            $failRes = RateLimiter::recordFailure($db, 'login', $identifier, $ip, $loginMaxAttempts, $loginLockoutSecs, $user['id']);
            SystemLog::write('auth', 'login_failed', $user['id'], $user['username'], json_encode(['reason' => 'Invalid password provided', 'identifier' => $identifier]));
            if ($failRes['is_locked']) {
                http_response_code(429);
                header('Retry-After: ' . $failRes['remaining_seconds']);
                Response::json([
                    'error'             => "Too many failed login attempts. Account temporarily locked for {$failRes['remaining_seconds']} seconds.",
                    'locked_until'      => $failRes['locked_until'],
                    'remaining_seconds' => $failRes['remaining_seconds'],
                    'failed_attempts'   => $failRes['failed_attempts'],
                    'max_attempts'      => $failRes['max_attempts']
                ], 429);
                return;
            }
            Response::json([
                'error'              => 'Invalid credentials or account deactivated',
                'remaining_attempts' => $failRes['remaining_attempts'],
                'failed_attempts'    => $failRes['failed_attempts'],
                'max_attempts'       => $failRes['max_attempts']
            ], 401);
            return;
        }

        // Authentication succeeded: reset rate limit attempts for this user/IP
        RateLimiter::reset($db, 'login', $identifier, $ip);

        // Dual login prevention (Security feature: blocks simultaneous access from different devices)
        // Rule 17 & 18: If credentials are valid, check collision BEFORE prompting 2FA or establishing session.
        if ($user['active_session_id'] !== null && $user['active_session_id'] !== session_id()) {
            $deviceBypasses = $deviceToken !== ''
                && $user['last_device_token'] !== null
                && $user['last_device_token'] !== ''
                && hash_equals($user['last_device_token'], $deviceToken);

            if (!$deviceBypasses) {
                $settingsRow = $db->query('SELECT auto_logout_minutes FROM settings LIMIT 1')->fetch();
                $autoLogoutMinutes = $settingsRow ? (float)$settingsRow['auto_logout_minutes'] : 10;
                $staleThresholdSecs = $autoLogoutMinutes > 0 ? (int)(($autoLogoutMinutes + 2) * 60) : 86400;

                $isStale = true;
                if ($user['last_active_at']) {
                    $stmt2 = $db->prepare('SELECT TIMESTAMPDIFF(SECOND, last_active_at, NOW()) as seconds_ago FROM users WHERE id = :id');
                    $stmt2->execute(['id' => $user['id']]);
                    $diff = $stmt2->fetch();
                    if ($diff && $diff['seconds_ago'] !== null && $diff['seconds_ago'] < $staleThresholdSecs) {
                        $isStale = false;
                    }
                }

                if (!$isStale) {
                    $this->trackEvent($user['id'], 'blocked_attempt');
                    SystemLog::write('auth', 'blocked_attempt', $user['id'], $user['username'], json_encode([
                        'reason' => 'Account already online from another device',
                        'attempted_ip' => $ip
                    ]));
                    Response::json([
                        'error' => 'This account is already online. Please logout from the other device first.',
                        'collision' => true
                    ], 403);
                    return;
                }
            }
        }

        // Two-Step Verification (TOTP - RFC 6238) Gatekeeper
        $is2faEnabled = !empty($user['two_factor_enabled']) && !empty($user['two_factor_secret']);
        if ($is2faEnabled) {
            // Check active 2FA rate-limiting lockout
            $twoFactorLock = RateLimiter::checkLock($db, 'two_factor', $user['username'], $ip);
            if ($twoFactorLock !== null) {
                http_response_code(429);
                header('Retry-After: ' . $twoFactorLock['remaining_seconds']);
                Response::json([
                    'error'             => "Too many failed 2FA verification attempts. Temporarily locked for {$twoFactorLock['remaining_seconds']} seconds.",
                    'locked_until'      => $twoFactorLock['locked_until'],
                    'remaining_seconds' => $twoFactorLock['remaining_seconds'],
                    'failed_attempts'   => $twoFactorLock['failed_attempts'],
                    'max_attempts'      => $recMaxAttempts,
                    'is_2fa_locked'     => true
                ], 429);
                return;
            }

            $totpCode = trim((string)($data['totp_code'] ?? $data['two_factor_code'] ?? ''));
            if ($totpCode === '') {
                // Step 1 passed! Prompt client for 6-digit TOTP code
                Response::json([
                    'requires_2fa'       => true,
                    'username'           => $user['username'],
                    'max_attempts'       => $recMaxAttempts,
                    'remaining_attempts' => $recMaxAttempts,
                    'lockout_seconds'    => $recLockoutSecs
                ], 200);
                return;
            }

            // Verify TOTP code against decrypted secret (discrepancy 2 = ±60s clock tolerance for client phone clocks)
            $matchedSlice = null;
            $plainSecret = Totp::decryptSecret($user['two_factor_secret']);
            $isCodeValid = ($plainSecret !== null && Totp::verify($plainSecret, $totpCode, 2, $matchedSlice));

            if ($isCodeValid && $user['two_factor_last_slice'] !== null && $matchedSlice !== null && (int)$user['two_factor_last_slice'] >= $matchedSlice) {
                // Code from this 30s window or earlier was already consumed!
                Response::json([
                    'error'              => 'This verification code has already been used. Please wait for the next code on your authenticator app.',
                    'requires_2fa'       => true,
                    'remaining_attempts' => $recMaxAttempts,
                    'max_attempts'       => $recMaxAttempts
                ], 401);
                return;
            }

            if (!$isCodeValid) {
                $failRes = RateLimiter::recordFailure($db, 'two_factor', $user['username'], $ip, $recMaxAttempts, $recLockoutSecs, $user['id']);
                SystemLog::write('auth', 'login_2fa_failed', $user['id'], $user['username'], json_encode([
                    'reason'     => 'Invalid 2FA PIN provided',
                    'identifier' => $identifier,
                    'ip'         => $ip
                ]));

                if ($failRes['is_locked']) {
                    http_response_code(429);
                    header('Retry-After: ' . $failRes['remaining_seconds']);
                    Response::json([
                        'error'             => "Too many failed 2FA verification attempts. Temporarily locked for {$failRes['remaining_seconds']} seconds.",
                        'locked_until'      => $failRes['locked_until'],
                        'remaining_seconds' => $failRes['remaining_seconds'],
                        'failed_attempts'   => $failRes['failed_attempts'],
                        'max_attempts'      => $failRes['max_attempts'],
                        'is_2fa_locked'     => true
                    ], 429);
                    return;
                }

                Response::json([
                    'error'              => 'Invalid 6-digit verification code. Please check your authenticator app.',
                    'requires_2fa'       => true,
                    'remaining_attempts' => $failRes['remaining_attempts'],
                    'failed_attempts'    => $failRes['failed_attempts'],
                    'max_attempts'       => $failRes['max_attempts']
                ], 401);
                return;
            }

            // 2FA code verified: reset rate limits for 2FA
            RateLimiter::reset($db, 'two_factor', $user['username'], $ip);

            // Persist the consumed slice to block replay within same window (RFC 6238 Anti-Replay)
            if ($matchedSlice !== null) {
                try {
                    $db->prepare('UPDATE users SET two_factor_last_slice = :slice WHERE id = :id')
                       ->execute(['slice' => $matchedSlice, 'id' => $user['id']]);
                } catch (\Throwable $e) {
                    error_log("Failed to update two_factor_last_slice: " . $e->getMessage());
                }
            }

            // Record verified event in user_two_factor_history
            try {
                $hStmt = $db->prepare('INSERT INTO user_two_factor_history (user_id, action, reason, ip_address, user_agent, created_at) VALUES (:uid, :act, :reason, :ip, :ua, NOW())');
                $hStmt->execute([
                    'uid' => $user['id'],
                    'act' => 'verified',
                    'reason' => 'Successful Two-Step Verification (TOTP) at sign-in',
                    'ip' => $ip,
                    'ua' => $_SERVER['HTTP_USER_AGENT'] ?? null
                ]);

                // Dual-log to SystemLog for security SOC compliance
                SystemLog::write('security', '2fa_verified', $user['id'], $user['username'], json_encode([
                    'action' => 'Successful Two-Step Verification (TOTP) at sign-in',
                    'ip'     => $ip
                ]));
            } catch (\Throwable $e) {}
        }

        // Dual login prevention (Security feature: blocks simultaneous access from different devices)
        // active_session_id = NULL → cleanly logged out → always allow
        // active_session_id set + same session → refresh on same tab → allow
        // active_session_id set + different session → check device token then stale window
        if ($user['active_session_id'] !== null && $user['active_session_id'] !== session_id()) {

            // Device-token bypass: same browser re-logging in after accidental close
            $deviceBypasses = $deviceToken !== ''
                && $user['last_device_token'] !== null
                && $user['last_device_token'] !== ''
                && hash_equals($user['last_device_token'], $deviceToken);

            if (!$deviceBypasses) {
                // Use configured auto-logout timeout for stale detection
                $settingsRow = $db->query('SELECT auto_logout_minutes FROM settings LIMIT 1')->fetch();
                $autoLogoutMinutes = $settingsRow ? (float)$settingsRow['auto_logout_minutes'] : 10;
                $staleThresholdSecs = $autoLogoutMinutes > 0 ? (int)(($autoLogoutMinutes + 2) * 60) : 86400;

                $isStale = true;
                if ($user['last_active_at']) {
                    $stmt2 = $db->prepare('SELECT TIMESTAMPDIFF(SECOND, last_active_at, NOW()) as seconds_ago FROM users WHERE id = :id');
                    $stmt2->execute(['id' => $user['id']]);
                    $diff = $stmt2->fetch();
                    if ($diff && $diff['seconds_ago'] !== null && $diff['seconds_ago'] < $staleThresholdSecs) {
                        $isStale = false;
                    }
                }

                if (!$isStale) {
                    $this->trackEvent($user['id'], 'blocked_attempt');
                    SystemLog::write('auth', 'blocked_attempt', $user['id'], $user['username'], json_encode([
                        'reason' => 'Account already online from another device',
                        'attempted_ip' => $ip
                    ]));
                    // Rule 17 & 18: Account is actively online from another device. Return 403 to trigger dedicated collision warning.
                    Response::json([
                        'error' => 'This account is already online. Please logout from the other device first.',
                        'collision' => true
                    ], 403);
                    return;
                }
            }
        }

        $prevUserId = !empty($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : 0;
        $prevSid = session_id();
        if ($prevUserId > 0 && $prevUserId !== (int)$user['id']) {
            $db->prepare('UPDATE users SET active_session_id = NULL, last_active_at = NULL WHERE id = :prev_id')
               ->execute(['prev_id' => $prevUserId]);
        }
        if ($prevSid !== '') {
            $db->prepare('UPDATE users SET active_session_id = NULL, last_active_at = NULL WHERE active_session_id = :prev_sid AND id != :new_id')
               ->execute(['prev_sid' => $prevSid, 'new_id' => $user['id']]);
        }
        if ($deviceToken !== '') {
            $db->prepare('UPDATE users SET active_session_id = NULL, last_active_at = NULL WHERE last_device_token = :dt AND id != :new_id')
               ->execute(['dt' => $deviceToken, 'new_id' => $user['id']]);
        }

        if (session_status() === PHP_SESSION_ACTIVE) {
            session_regenerate_id(true);
        }
        $_SESSION['user_id']  = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['is_admin'] = (bool) $user['is_admin'];
        unset($_SESSION['recovery_session'], $_SESSION['recovery_login_type'], $_SESSION['can_set_password_once'], $_SESSION['last_session_check_at']);

        if ($deviceToken !== '') {
            $db->prepare('UPDATE users SET last_login = NOW(), last_active_at = NOW(), active_session_id = :sid, last_device_token = :dt WHERE id = :id')
               ->execute(['id' => $user['id'], 'sid' => session_id(), 'dt' => $deviceToken]);
        } else {
            $db->prepare('UPDATE users SET last_login = NOW(), last_active_at = NOW(), active_session_id = :sid WHERE id = :id')
               ->execute(['id' => $user['id'], 'sid' => session_id()]);
        }

        $this->trackEvent($user['id'], 'login');
        SystemLog::write('auth', 'login', $user['id'], $user['username']);

        $user['user_language'] = 'en';
        $user['user_hidden_pages'] = '[]';
        $user['filter_privacy'] = '{}';
        try {
            $prefStmt = $db->prepare('SELECT user_language, user_hidden_pages, filter_privacy FROM user_notification_settings WHERE user_id = :uid LIMIT 1');
            $prefStmt->execute(['uid' => $user['id']]);
            $pref = $prefStmt->fetch();
            if ($pref) {
                if (!empty($pref['user_language'])) $user['user_language'] = $pref['user_language'];
                if (!empty($pref['user_hidden_pages'])) $user['user_hidden_pages'] = $pref['user_hidden_pages'];
                if (!empty($pref['filter_privacy'])) $user['filter_privacy'] = $pref['filter_privacy'];
            }
        } catch (\Throwable $e) {}

        $superAdminId = (int) $db->query('SELECT id FROM users WHERE is_admin = 1 AND deleted_at IS NULL ORDER BY id ASC LIMIT 1')->fetchColumn();
        $user['is_super_admin'] = ((int)$user['id'] === 1 || (int)$user['id'] === $superAdminId);
        $user['role'] = $user['is_super_admin'] ? 'super_admin' : (!empty($user['is_admin']) ? 'admin' : 'staff');
        $_SESSION['is_super_admin'] = (bool) $user['is_super_admin'];
        $_SESSION['role'] = $user['role'];

        unset($user['password_hash'], $user['recovery_code_plain'], $user['recovery_code_hash']);
        Response::json(['user' => $user]);
    }

    public function logout(): void
    {
        if (!empty($_SESSION['user_id'])) {
            $db = Database::getConnection();
            $db->prepare('UPDATE users SET last_active_at = NULL, active_session_id = NULL, last_device_token = NULL WHERE id = :id')
               ->execute(['id' => $_SESSION['user_id']]);

            // Distinguish manual logout from auto-logout (inactivity)
            $input = json_decode(file_get_contents('php://input'), true);
            $reason = trim($input['reason'] ?? '');
            $eventType = ($reason === 'inactivity') ? 'auto_logout' : 'logout';

            $this->trackEvent($_SESSION['user_id'], $eventType);
            $logUser = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
            $logUser->execute(['id' => $_SESSION['user_id']]);
            $logRow = $logUser->fetch();
            SystemLog::write('auth', $eventType, $_SESSION['user_id'], $logRow ? $logRow['username'] : null);
        } else {
            // Fallback: If session expired in PHP memory, clear stale active session for matching device token
            $deviceToken = trim((string)($_SERVER['HTTP_X_DEVICE_TOKEN'] ?? ''));
            if ($deviceToken !== '') {
                try {
                    $db = Database::getConnection();
                    $db->prepare('UPDATE users SET last_active_at = NULL, active_session_id = NULL WHERE last_device_token = :dt AND active_session_id IS NOT NULL')
                       ->execute(['dt' => $deviceToken]);
                } catch (\Throwable $e) {}
            }
        }
        // SEC-11: Complete session teardown on logout
        $this->destroySessionGracefully();
        Response::json(['ok' => true]);
    }

    // Called via sendBeacon / keepalive fetch when browser/tab is closed.
    // Clears last_active_at + active_session_id so re-login is allowed, but does NOT
    // clear last_device_token (device identity survives close so token bypass works on reopen)
    // and does NOT destroy the PHP session (refresh still works).
    //
    // RACE GUARD: On rapid F5 refresh, the beacon from the OLD page can arrive AFTER
    // the new page has already called checkSession() and re-claimed active_session_id.
    // We guard against this using $_SESSION['last_session_check_at'] which is set ONLY
    // inside checkSession() (never by mouse/API activity), so real browser closes always
    // clear active_session_id immediately even if the user just moved the mouse.
    public function markClosed(): void
    {
        if (!empty($_SESSION['user_id'])) {
            $uid = (int)$_SESSION['user_id'];
            $sid = session_id();
            $lastCheckAt = isset($_SESSION['last_session_check_at']) ? (float)$_SESSION['last_session_check_at'] : 0.0;
            unset($_SESSION['last_session_check_at']);
            if (session_status() === PHP_SESSION_ACTIVE) {
                session_write_close();
            }

            // If checkSession() ran within the last 2.5 seconds on this exact PHP session,
            // the refreshed page has already booted and re-claimed the session — skip this late beacon.
            if ($lastCheckAt > 0.0 && (microtime(true) - $lastCheckAt) < 2.5) {
                Response::json(['ok' => true]);
                return;
            }

            $db = Database::getConnection();
            $guard = $db->prepare('SELECT active_session_id FROM users WHERE id = :id LIMIT 1');
            $guard->execute(['id' => $uid]);

/* [INTERNAL_RUNTIME_FRAMEWORK_TOKEN] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
            $row = $guard->fetch();

            if ($row && $row['active_session_id'] && $row['active_session_id'] !== $sid) {
                // Another session took over — do not interfere
                Response::json(['ok' => true]);
                return;
            }

            $db->prepare('UPDATE users SET last_active_at = NULL, active_session_id = NULL WHERE id = :id AND (active_session_id = :sid OR active_session_id IS NULL)')
               ->execute(['id' => $uid, 'sid' => $sid]);

            // Deduplicate: multiple tabs closing at once all fire this endpoint.
            // Only write the log once — skip if already logged within the last 10 seconds.
            try {
                $dup = $db->prepare("SELECT 1 FROM system_logs WHERE user_id = :uid AND action = 'logout_browser_close' AND created_at >= NOW() - INTERVAL 10 SECOND LIMIT 1");
                $dup->execute(['uid' => $uid]);
                if ($dup->fetch()) {
                    Response::json(['ok' => true]);
                    return;
                }
            } catch (\Throwable $e) {
                error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
            }

            $this->trackEvent($uid, 'logout_browser_close');
            $logUser = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
            $logUser->execute(['id' => $uid]);
            $logRow = $logUser->fetch();
            SystemLog::write('auth', 'logout_browser_close', $uid, $logRow ? $logRow['username'] : null);
        }
        Response::json(['ok' => true]);
    }

    /**
     * Called after a page refresh to remove the false logout_browser_close log
     * that was created by pagehide (which fires on both close AND refresh).
     */
    public function undoCloseLog(): void
    {
        if (!empty($_SESSION['user_id'])) {
            $uid = $_SESSION['user_id'];
            $db = Database::getConnection();
            try {
                $db->prepare("DELETE FROM login_history WHERE user_id = :uid AND event_type = 'logout_browser_close' AND created_at >= NOW() - INTERVAL 30 SECOND")
                   ->execute(['uid' => $uid]);
                $db->prepare("DELETE FROM system_logs WHERE user_id = :uid AND action = 'logout_browser_close' AND created_at >= NOW() - INTERVAL 30 SECOND")
                   ->execute(['uid' => $uid]);
            } catch (\Throwable $e) {
                error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
            }
        }
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_write_close();
        }
        Response::json(['ok' => true]);
    }

    public function checkSession(): void
    {
        if (empty($_SESSION['user_id'])) {
            Response::json(['authenticated' => false]);
            return;
        }

        $db = Database::getConnection();
        $stmt = $db->prepare('SELECT * FROM users WHERE id = :id AND deleted_at IS NULL LIMIT 1');
        $stmt->execute(['id' => $_SESSION['user_id']]);
        $user = $stmt->fetch();

        if (!$user) {
            $this->destroySessionGracefully();
            Response::json(['authenticated' => false]);
            return;
        }

        $deviceToken = trim($_SERVER['HTTP_X_DEVICE_TOKEN'] ?? $_GET['device_token'] ?? '');
        $sameDevice = $deviceToken !== '' && !empty($user['last_device_token']) && hash_equals($user['last_device_token'], $deviceToken);

        // If another session has taken over this account from a DIFFERENT device, or an Admin unlocked the session (clearing active_session_id and last_device_token), kick this session out
        if (($user['active_session_id'] && $user['active_session_id'] !== session_id() && !$sameDevice)
            || (empty($user['active_session_id']) && !empty($deviceToken) && empty($user['last_device_token']))) {
            $this->destroySessionGracefully();
            Response::json(['authenticated' => false]);
            return;
        }

        // Re-claim session (also covers case where mark-closed ran before a refresh)
        $db->prepare('UPDATE users SET last_active_at = NOW(), active_session_id = :sid WHERE id = :id')
           ->execute(['id' => $_SESSION['user_id'], 'sid' => session_id()]);

        $user['user_language'] = 'en';
        $user['user_hidden_pages'] = '[]';
        $user['filter_privacy'] = '{}';
        try {
            $prefStmt = $db->prepare('SELECT user_language, user_hidden_pages, filter_privacy FROM user_notification_settings WHERE user_id = :uid LIMIT 1');
            $prefStmt->execute(['uid' => $user['id']]);
            $pref = $prefStmt->fetch();
            if ($pref) {
                if (!empty($pref['user_language'])) $user['user_language'] = $pref['user_language'];
                if (!empty($pref['user_hidden_pages'])) $user['user_hidden_pages'] = $pref['user_hidden_pages'];
                if (!empty($pref['filter_privacy'])) $user['filter_privacy'] = $pref['filter_privacy'];
            }
        } catch (\Throwable $e) {}

        $superAdminId = (int) $db->query('SELECT id FROM users WHERE is_admin = 1 AND deleted_at IS NULL ORDER BY id ASC LIMIT 1')->fetchColumn();
        $user['is_super_admin'] = ((int)$user['id'] === 1 || (int)$user['id'] === $superAdminId);
        $user['role'] = $user['is_super_admin'] ? 'super_admin' : (!empty($user['is_admin']) ? 'admin' : 'staff');
        $_SESSION['is_super_admin'] = (bool) $user['is_super_admin'];
        $_SESSION['role'] = $user['role'];

        unset($user['password_hash'], $user['recovery_code_plain'], $user['recovery_code_hash']);
        $recoverySession = !empty($_SESSION['recovery_session']);
        $canSetPasswordOnce = !empty($_SESSION['can_set_password_once']);
        $recoveryLoginType = $_SESSION['recovery_login_type'] ?? null;

        $_SESSION['username'] = $user['username'];
        $_SESSION['is_admin'] = (bool) $user['is_admin'];
        $_SESSION['is_super_admin'] = (bool) $user['is_super_admin'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['last_session_check_at'] = microtime(true);

        if (session_status() === PHP_SESSION_ACTIVE) {
            session_write_close();
        }
        Response::json([
            'authenticated'         => true,
            'user'                  => $user,
            'recovery_session'      => $recoverySession,
            'can_set_password_once' => $canSetPasswordOnce,
            'recovery_login_type'   => $recoveryLoginType
        ]);
    }

    public function recoverWithCode(array $data): void
    {
        $code        = trim($data['code'] ?? '');
        $deviceToken = trim($data['device_token'] ?? '');

        if ($code === '') {
            Response::json(['error' => 'Recovery code required'], 400);
            return;
        }

        $db = Database::getConnection();
        $ip = RateLimiter::getClientIp();

        $settings = $db->query('SELECT recovery_code_hash, recovery_max_attempts, recovery_lockout_seconds FROM settings LIMIT 1')->fetch();
        $recMaxAttempts = $settings && !empty($settings['recovery_max_attempts']) ? (int)$settings['recovery_max_attempts'] : 5;
        $recLockoutSecs = $settings && !empty($settings['recovery_lockout_seconds']) ? (int)$settings['recovery_lockout_seconds'] : 120;

        // 1. Check if IP/action is currently locked out
        $lock = RateLimiter::checkLock($db, 'master_recovery', 'master_admin', $ip);
        if ($lock !== null) {
            http_response_code(429);
            header('Retry-After: ' . $lock['remaining_seconds']);
            Response::json([
                'error'             => "Too many failed recovery attempts. Temporarily locked for {$lock['remaining_seconds']} seconds.",
                'locked_until'      => $lock['locked_until'],
                'remaining_seconds' => $lock['remaining_seconds'],
                'failed_attempts'   => $lock['failed_attempts'],
                'max_attempts'      => $recMaxAttempts
            ], 429);
            return;
        }

        if (!$settings || !$settings['recovery_code_hash']) {
            Response::json(['error' => 'No recovery code has been generated'], 404);
            return;
        }

        $isValid = password_verify($code, $settings['recovery_code_hash']) || password_verify(strtoupper($code), $settings['recovery_code_hash']);

        if (!$isValid) {
            $failRes = RateLimiter::recordFailure($db, 'master_recovery', 'master_admin', $ip, $recMaxAttempts, $recLockoutSecs);
            SystemLog::write('security', 'master_recovery_failed', null, 'Master Recovery', json_encode(['reason' => 'Invalid master recovery code attempt', 'ip' => $ip]));
            if ($failRes['is_locked']) {
                http_response_code(429);
                header('Retry-After: ' . $failRes['remaining_seconds']);
                Response::json([
                    'error'             => "Too many failed recovery attempts. Master recovery temporarily locked for {$failRes['remaining_seconds']} seconds.",
                    'locked_until'      => $failRes['locked_until'],
                    'remaining_seconds' => $failRes['remaining_seconds'],
                    'failed_attempts'   => $failRes['failed_attempts'],
                    'max_attempts'      => $failRes['max_attempts']
                ], 429);
                return;
            }
            Response::json([
                'error'              => 'Invalid recovery credentials',
                'remaining_attempts' => $failRes['remaining_attempts'],
                'failed_attempts'    => $failRes['failed_attempts'],
                'max_attempts'       => $failRes['max_attempts']
            ], 401);
            return;
        }

        // Reset rate limiter on success
        RateLimiter::reset($db, 'master_recovery', 'master_admin', $ip);

        $stmt = $db->prepare('SELECT * FROM users WHERE is_admin = 1 AND deleted_at IS NULL ORDER BY id ASC LIMIT 1');
        $stmt->execute();
        $admin = $stmt->fetch();

        if (!$admin) {
            Response::json(['error' => 'Admin user not found'], 404);
            return;
        }

        if ($admin['active_session_id'] !== null) {
            SystemLog::write('auth', 'session_taken_over', $admin['id'], $admin['username'], json_encode([
                'reason' => 'Session superseded by root master recovery login',
                'ip'     => $ip
            ]));
        }

        $prevUserId = !empty($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : 0;
        $prevSid = session_id();
        if ($prevUserId > 0 && $prevUserId !== (int)$admin['id']) {
            $db->prepare('UPDATE users SET active_session_id = NULL, last_active_at = NULL WHERE id = :prev_id')
               ->execute(['prev_id' => $prevUserId]);
        }
        if ($prevSid !== '') {
            $db->prepare('UPDATE users SET active_session_id = NULL, last_active_at = NULL WHERE active_session_id = :prev_sid AND id != :new_id')
               ->execute(['prev_sid' => $prevSid, 'new_id' => $admin['id']]);
        }
        if ($deviceToken !== '') {
            $db->prepare('UPDATE users SET active_session_id = NULL, last_active_at = NULL WHERE last_device_token = :dt AND id != :new_id')
               ->execute(['dt' => $deviceToken, 'new_id' => $admin['id']]);
        }

        if (session_status() === PHP_SESSION_ACTIVE) {
            session_regenerate_id(true);
        }
        $_SESSION['user_id'] = $admin['id'];
        $_SESSION['username'] = $admin['username'];
        $_SESSION['is_admin'] = (bool) $admin['is_admin'];
        $_SESSION['is_super_admin'] = true;
        $_SESSION['role'] = 'super_admin';
        $_SESSION['recovery_session'] = true;
        $_SESSION['recovery_login_type'] = 'master_recovery';
        $_SESSION['can_set_password_once'] = true;

        if ($deviceToken !== '') {
            $db->prepare('UPDATE users SET last_login = NOW(), last_active_at = NOW(), active_session_id = :sid, last_device_token = :dt WHERE id = :id')
               ->execute(['id' => $admin['id'], 'sid' => session_id(), 'dt' => $deviceToken]);
        } else {
            $db->prepare('UPDATE users SET last_login = NOW(), last_active_at = NOW(), active_session_id = :sid WHERE id = :id')
               ->execute(['id' => $admin['id'], 'sid' => session_id()]);
        }

        // SEC-02: Enforce single-use invalidation tombstone for Master Recovery Code
        $db->exec('UPDATE settings SET recovery_code_hash = NULL, recovery_code_plain = NULL, recovery_code_last_used_at = NOW()');

        $this->trackEvent((int)$admin['id'], 'master_recovery');

        $ip = RateLimiter::getClientIp();
        $stmt = $db->prepare('INSERT INTO recovery_code_history (admin_id, action, reason, ip_address, created_at) VALUES (:admin_id, "used", "Super Admin root master recovery login", :ip, NOW())');
        $stmt->execute([
            'admin_id' => $admin['id'],
            'ip'       => $ip
        ]);

        SystemLog::write('auth', 'recovery_login', $admin['id'], $admin['username'], json_encode(['method' => 'master_recovery', 'note' => 'Super Admin logged in via Root Master Recovery Key']));

        unset($admin['password_hash'], $admin['recovery_code_plain'], $admin['recovery_code_hash']);
        Response::json([
            'user'                  => $admin,
            'recovery_type'         => 'master',
            'recovery_session'      => true,
            'can_set_password_once' => true,
            'message'               => 'Master access restored! Please set a new password and rotate the recovery key.'
        ]);
    }

    /**
     * Recover an individual user account using identifier (username/email/phone) + personal recovery code.
     */
    public function userRecoverWithCode(array $data): void
    {
        $identifier  = trim($data['identifier'] ?? '');
        $code        = trim($data['code'] ?? '');
        $deviceToken = trim($data['device_token'] ?? '');

        if ($identifier === '' || $code === '') {
            Response::json(['error' => 'Identifier and recovery code required'], 400);
            return;
        }

        $db = Database::getConnection();
        $ip = RateLimiter::getClientIp();

        $settings = $db->query('SELECT recovery_max_attempts, recovery_lockout_seconds FROM settings LIMIT 1')->fetch();
        $recMaxAttempts = $settings && !empty($settings['recovery_max_attempts']) ? (int)$settings['recovery_max_attempts'] : 5;
        $recLockoutSecs = $settings && !empty($settings['recovery_lockout_seconds']) ? (int)$settings['recovery_lockout_seconds'] : 120;

        // 1. Check if user/IP is currently locked out
        $lock = RateLimiter::checkLock($db, 'user_recovery', $identifier, $ip);
        if ($lock !== null) {
            http_response_code(429);
            header('Retry-After: ' . $lock['remaining_seconds']);
            Response::json([
                'error'             => "Too many failed recovery attempts. Temporarily locked for {$lock['remaining_seconds']} seconds.",
                'locked_until'      => $lock['locked_until'],
                'remaining_seconds' => $lock['remaining_seconds'],
                'failed_attempts'   => $lock['failed_attempts'],
                'max_attempts'      => $recMaxAttempts
            ], 429);
            return;
        }

        $stmt = $db->prepare('SELECT * FROM users WHERE (username = :id OR email = :id OR phone = :id) AND deleted_at IS NULL LIMIT 1');
        $stmt->execute(['id' => $identifier]);
        $user = $stmt->fetch();

        if (!$user || empty($user['recovery_code_hash'])) {
            // SEC-07: Constant-time Bcrypt verification to prevent recovery account enumeration
            password_verify($code, '$2y$12$chxnVgAal7UTSHhWVDUxFOb2TWab8k38PyK68VERp0XrH6uyM/uX.');

            $failRes = RateLimiter::recordFailure($db, 'user_recovery', $identifier, $ip, $recMaxAttempts, $recLockoutSecs);
            SystemLog::write('security', 'user_recovery_failed', null, $identifier, json_encode(['reason' => 'No recovery code configured or user not found', 'ip' => $ip]));
            if ($failRes['is_locked']) {
                http_response_code(429);
                header('Retry-After: ' . $failRes['remaining_seconds']);
                Response::json([
                    'error'             => "Too many failed recovery attempts. Account temporarily locked for {$failRes['remaining_seconds']} seconds.",
                    'locked_until'      => $failRes['locked_until'],
                    'remaining_seconds' => $failRes['remaining_seconds'],
                    'failed_attempts'   => $failRes['failed_attempts'],
                    'max_attempts'      => $failRes['max_attempts']
                ], 429);
                return;
            }
            Response::json([
                'error'              => 'Invalid recovery credentials',
                'remaining_attempts' => $failRes['remaining_attempts'],
                'failed_attempts'    => $failRes['failed_attempts'],
                'max_attempts'       => $failRes['max_attempts']
            ], 401);
            return;
        }

        $isValid = password_verify($code, $user['recovery_code_hash']) || password_verify(strtoupper($code), $user['recovery_code_hash']);

        if (!$isValid) {
            $failRes = RateLimiter::recordFailure($db, 'user_recovery', $identifier, $ip, $recMaxAttempts, $recLockoutSecs, $user['id']);
            SystemLog::write('security', 'user_recovery_failed', $user['id'], $user['username'], json_encode(['reason' => 'Invalid personal recovery code', 'ip' => $ip]));
            if ($failRes['is_locked']) {
                http_response_code(429);
                header('Retry-After: ' . $failRes['remaining_seconds']);
                Response::json([
                    'error'             => "Too many failed recovery attempts. Account temporarily locked for {$failRes['remaining_seconds']} seconds.",
                    'locked_until'      => $failRes['locked_until'],
                    'remaining_seconds' => $failRes['remaining_seconds'],
                    'failed_attempts'   => $failRes['failed_attempts'],
                    'max_attempts'      => $failRes['max_attempts']
                ], 429);
                return;
            }
            Response::json([
                'error'              => 'Invalid recovery credentials',
                'remaining_attempts' => $failRes['remaining_attempts'],
                'failed_attempts'    => $failRes['failed_attempts'],
                'max_attempts'       => $failRes['max_attempts']
            ], 401);
            return;
        }

        // Reset rate limits on success
        RateLimiter::reset($db, 'user_recovery', $identifier, $ip);

        if ($user['active_session_id'] !== null) {
            SystemLog::write('auth', 'session_taken_over', $user['id'], $user['username'], json_encode([
                'reason' => 'Session superseded by personal recovery key login',
                'ip'     => $ip
            ]));
        }

        $prevUserId = !empty($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : 0;
        $prevSid = session_id();
        if ($prevUserId > 0 && $prevUserId !== (int)$user['id']) {
            $db->prepare('UPDATE users SET active_session_id = NULL, last_active_at = NULL WHERE id = :prev_id')
               ->execute(['prev_id' => $prevUserId]);
        }
        if ($prevSid !== '') {
            $db->prepare('UPDATE users SET active_session_id = NULL, last_active_at = NULL WHERE active_session_id = :prev_sid AND id != :new_id')
               ->execute(['prev_sid' => $prevSid, 'new_id' => $user['id']]);
        }
        if ($deviceToken !== '') {
            $db->prepare('UPDATE users SET active_session_id = NULL, last_active_at = NULL WHERE last_device_token = :dt AND id != :new_id')
               ->execute(['dt' => $deviceToken, 'new_id' => $user['id']]);
        }

        if (session_status() === PHP_SESSION_ACTIVE) {
            session_regenerate_id(true);
        }
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['is_admin'] = (bool) $user['is_admin'];
        $superAdminId = (int) $db->query('SELECT id FROM users WHERE is_admin = 1 AND deleted_at IS NULL ORDER BY id ASC LIMIT 1')->fetchColumn();
        $_SESSION['is_super_admin'] = ((int)$user['id'] === 1 || (int)$user['id'] === $superAdminId);
        $_SESSION['role'] = $_SESSION['is_super_admin'] ? 'super_admin' : (!empty($user['is_admin']) ? 'admin' : 'staff');
        $_SESSION['recovery_session'] = true;
        $_SESSION['recovery_login_type'] = 'user_recovery';
        $_SESSION['can_set_password_once'] = true;

        // SEC-02: Enforce single-use invalidation tombstone for Personal User Recovery Code
        if ($deviceToken !== '') {
            $db->prepare('UPDATE users SET last_login = NOW(), last_active_at = NOW(), active_session_id = :sid, last_device_token = :dt, recovery_code_hash = NULL, recovery_code_plain = NULL, recovery_code_plain_masked = NULL, recovery_code_last_used_at = NOW() WHERE id = :id')
               ->execute(['id' => $user['id'], 'sid' => session_id(), 'dt' => $deviceToken]);
        } else {
            $db->prepare('UPDATE users SET last_login = NOW(), last_active_at = NOW(), active_session_id = :sid, recovery_code_hash = NULL, recovery_code_plain = NULL, recovery_code_plain_masked = NULL, recovery_code_last_used_at = NOW() WHERE id = :id')
               ->execute(['id' => $user['id'], 'sid' => session_id()]);
        }

        $this->trackEvent((int)$user['id'], 'user_recovery');

        try {
            $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
            $db->prepare("INSERT INTO user_recovery_code_history (user_id, action, reason, ip_address, user_agent, created_at) VALUES (?, 'used', 'Emergency account recovery login via personal key', ?, ?, NOW())")
               ->execute([$user['id'], $ip, $userAgent]);
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        SystemLog::write('security', 'user_account_recovered', $user['id'], $user['username'], json_encode([
            'method' => 'personal_recovery_code',
            'note' => "User @{$user['username']} logged in via Personal Recovery Key",
            'ip' => $ip
        ]));

        unset($user['password_hash'], $user['recovery_code_plain'], $user['recovery_code_hash']);
        Response::json([
            'user'                  => $user,
            'recovery_type'         => 'user',
            'recovery_session'      => true,
            'can_set_password_once' => true,
            'message'               => 'Access recovered! Please set a new password and rotate your personal recovery key.'
        ]);
    }

    /**
     * SEC-11: Complete session teardown on logout / termination.
     * Wipes $_SESSION superglobal array in memory, invalidates session cookie in browser
     * by setting negative expiry, and terminates the active PHP session storage.
     */
    private function destroySessionGracefully(): void
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            $_SESSION = [];
            if (ini_get("session.use_cookies") && !headers_sent()) {
                $params = session_get_cookie_params();
                setcookie(
                    session_name(),
                    '',
                    time() - 42000,
                    $params["path"] ?? '/',
                    $params["domain"] ?? '',
                    $params["secure"] ?? false,
                    $params["httponly"] ?? true
                );
            }
            session_destroy();
        }
    }

    private function trackEvent($userId, string $type): void
    {
        $db = Database::getConnection();
        $ip = RateLimiter::getClientIp();
        $stmt = $db->prepare('INSERT INTO login_history (user_id, event_type, ip_address, user_agent, created_at) VALUES (:user_id, :event_type, :ip, :ua, NOW())');
        $stmt->execute([
            'user_id'    => $userId,
            'event_type' => $type,
            'ip'         => $ip,
            'ua'         => $_SERVER['HTTP_USER_AGENT'] ?? null,
        ]);

        // Rule 88: 180-Day Rolling Session History Retention Protocol
        if (mt_rand(1, 20) === 1 && !$db->inTransaction()) {
            try {
                $db->exec("DELETE FROM login_history WHERE created_at < DATE_SUB(NOW(), INTERVAL 180 DAY) LIMIT 500");
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        }
    }
}

/* [END_OF_MODULE_SECURITY_SEAL] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
