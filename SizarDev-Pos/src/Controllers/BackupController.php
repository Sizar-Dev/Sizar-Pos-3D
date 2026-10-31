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

class BackupController
{
    private string $backupsDir;
    private string $defaultBackupsDir;
    private string $mysqldumpPath;
    private string $mysqlPath;

    public function __construct()
    {
        $this->defaultBackupsDir = __DIR__ . '/../../backups';
        $this->backupsDir = $this->defaultBackupsDir;
        $this->resolveBinaries();

        if (!is_dir($this->defaultBackupsDir)) {
            @mkdir($this->defaultBackupsDir, 0755, true);
        }
        $defaultHtaccess = $this->defaultBackupsDir . '/.htaccess';
        if (!file_exists($defaultHtaccess)) {
            @file_put_contents($defaultHtaccess, "# Protect database backups from direct HTTP access\n<IfModule mod_authz_core.c>\n    Require all denied\n</IfModule>\n<IfModule !mod_authz_core.c>\n    Deny from all\n</IfModule>\n");
        }

        try {
            $db = Database::getConnection();
            // Auto-create backups table
            $db->exec("CREATE TABLE IF NOT EXISTS backups (
                id INT AUTO_INCREMENT PRIMARY KEY,
                uid VARCHAR(50) UNIQUE NOT NULL,
                filename VARCHAR(255) NOT NULL,
                filesize BIGINT NOT NULL DEFAULT 0,
                type ENUM('manual','automatic') NOT NULL DEFAULT 'manual',
                status ENUM('completed','failed') NOT NULL DEFAULT 'completed',
                error_message TEXT NULL,
                created_by INT NULL,
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                INDEX idx_created_at (created_at)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

            // Point at a custom backup folder (e.g. an external drive) if the
            // user configured one and it is currently reachable + writable.
            $this->resolveBackupsDir($db);
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
    }

    /**
     * Switches $this->backupsDir to a user-configured folder when one is set
     * and usable. Falls back to the default (bundled) backups folder if the
     * column is missing, the path is blank, or the folder can't be written to
     * (e.g. an external drive that's unplugged).
     */
    private function resolveBackupsDir(PDO $db): void
    {
        try {
            $row = $db->query('SELECT backup_path FROM settings LIMIT 1')->fetch();
            $custom = trim((string) ($row['backup_path'] ?? ''));
            if ($custom === '') {
                return;
            }

            // SEC-36 Boundary Guard: Prevent fallback or activation of any path inside public web root
            $canonicalCustom = realpath($custom);
            $publicRoot = realpath(__DIR__ . '/../../public');
            if ($canonicalCustom !== false && $publicRoot !== false) {
                $normPublic = rtrim(str_replace('\\', '/', $publicRoot), '/') . '/';
                $normTarget = rtrim(str_replace('\\', '/', $canonicalCustom), '/') . '/';
                $isInsidePublic = (PHP_OS_FAMILY === 'Windows')
                    ? stripos($normTarget, $normPublic) === 0
                    : str_starts_with($normTarget, $normPublic);

                if ($normTarget === $normPublic || $isInsidePublic) {
                    return;
                }
            }

            if (!is_dir($custom)) {
                @mkdir($custom, 0755, true);
            }
            if (is_dir($custom) && is_writable($custom)) {
                $this->backupsDir = rtrim($custom, "/\\");
                $customHtaccess = $this->backupsDir . '/.htaccess';
                if (!file_exists($customHtaccess)) {
                    @file_put_contents($customHtaccess, "# Protect database backups from direct HTTP access\n<IfModule mod_authz_core.c>\n    Require all denied\n</IfModule>\n<IfModule !mod_authz_core.c>\n    Deny from all\n</IfModule>\n");
                }
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
    }

    /**
     * Finds a backup file on disk, checking the active folder first and then
     * the default folder — so backups created before a path change are still
     * downloadable / restorable / deletable.
     */
    private function resolveBackupFile(string $filename): ?string
    {
        $primary = $this->backupsDir . '/' . $filename;
        if (is_file($primary)) {
            return $primary;
        }
        $fallback = $this->defaultBackupsDir . '/' . $filename;
        if (is_file($fallback)) {
            return $fallback;
        }
        return null;
    }

    /**
     * Finds a command-line binary (e.g. 'mysqldump' or 'mysql') by probing:
     * 1. Bundled portable MariaDB if configured
     * 2. Standard Windows installation paths (MySQL 9.x, 8.x, MariaDB, XAMPP, Laragon)
     * 3. PATH resolution via `where` on Windows or `which` on Linux/macOS
     * 4. Safe fallback
     */
    private function findBinary(string $name): string
    {
        $exeName = PHP_OS_FAMILY === 'Windows' ? "{$name}.exe" : $name;

        // 1. If using bundled portable MariaDB
        try {
            $configPath = __DIR__ . '/../../config/database.php';
            if (is_file($configPath)) {
                $config = require $configPath;
                if (is_array($config) && !empty($config['use_bundled']) && class_exists('BundledMaria')) {
                    $bundled = $name === 'mysqldump' ? BundledMaria::dumpBinary() : BundledMaria::clientBinary();
                    if ($bundled && is_file($bundled)) {
                        return '"' . str_replace('/', '\\', $bundled) . '"';
                    }
                }
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // 2. Check standard Windows installations via glob
        if (PHP_OS_FAMILY === 'Windows') {
            $candidateNames = [$exeName];
            if ($name === 'mysqldump') {
                $candidateNames[] = 'mariadb-dump.exe';
            } elseif ($name === 'mysql') {
                $candidateNames[] = 'mariadb.exe';
            }

            $basePatterns = [
                'C:\Program Files\MySQL\MySQL Server *\bin',
                'C:\Program Files (x86)\MySQL\MySQL Server *\bin',
                'C:\Program Files\MariaDB *\bin',
                'C:\xampp\mysql\bin',
                'C:\wamp64\bin\mysql\mysql*\bin',
                'C:\wamp64\bin\mariadb\mariadb*\bin',
                'C:\wamp\bin\mysql\mysql*\bin',
                'C:\laragon\bin\mysql\*\bin',
                'C:\laragon\bin\mariadb\*\bin',
                'D:\xampp\mysql\bin',
                'D:\wamp64\bin\mysql\mysql*\bin',
                'D:\laragon\bin\mysql\*\bin',
                'E:\xampp\mysql\bin',
                'E:\wamp64\bin\mysql\mysql*\bin',
                'E:\laragon\bin\mysql\*\bin',
            ];

            foreach ($candidateNames as $candExe) {
                foreach ($basePatterns as $base) {
                    $pattern = "{$base}\\{$candExe}";
                    $matches = glob($pattern);
                    if (!empty($matches)) {
                        // Sort in descending order to pick the highest version (e.g. 9.7 > 8.4 > 8.0)
                        rsort($matches, SORT_NATURAL);
                        foreach ($matches as $match) {
                            if (is_file($match)) {
                                return '"' . str_replace('/', '\\', $match) . '"';
                            }
                        }
                    }
                }
            }

            // 3. Try Windows `where` command
            $out = [];
            $rc = 0;
            @exec("where {$exeName} 2>NUL", $out, $rc);
            if ($rc === 0 && !empty($out[0]) && is_file(trim($out[0]))) {
                return '"' . str_replace('/', '\\', trim($out[0])) . '"';
            }
            $altExe = ($name === 'mysqldump') ? 'mariadb-dump.exe' : (($name === 'mysql') ? 'mariadb.exe' : null);
            if ($altExe) {
                $out2 = [];
                $rc2 = 0;
                @exec("where {$altExe} 2>NUL", $out2, $rc2);
                if ($rc2 === 0 && !empty($out2[0]) && is_file(trim($out2[0]))) {
                    return '"' . str_replace('/', '\\', trim($out2[0])) . '"';
                }
            }
        } else {
            // Unix / macOS
            $out = [];
            $rc = 0;
            @exec("which {$name} 2>/dev/null", $out, $rc);
            if ($rc === 0 && !empty($out[0]) && is_file(trim($out[0]))) {
                return escapeshellarg(trim($out[0]));
            }
        }

        // Fallback to bare executable name in quotes
        return '"' . $exeName . '"';
    }

    /**
     * Resolves the mysqldump / mysql client paths using dynamic multi-source discovery.
     */
    private function resolveBinaries(): void
    {
        $this->mysqldumpPath = $this->findBinary('mysqldump');
        $this->mysqlPath = $this->findBinary('mysql');
    }

    private function getDbConfig(): array
    {
        $configPath = __DIR__ . '/../../config/database.php';
        if (!file_exists($configPath)) {
            throw new RuntimeException('Database not configured');
        }
        return require $configPath;
    }

    private function getBackupSettings(): array
    {
        $db = Database::getConnection();

        // Ensure columns exist
        $cols = [
            'backup_auto_enabled' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'backup_interval_minutes' => 'INT NOT NULL DEFAULT 1440',
            'backup_max_count' => 'INT NOT NULL DEFAULT 50',
            'backup_path' => 'VARCHAR(500) NULL',
        ];
        foreach ($cols as $col => $definition) {
            $chk = $db->prepare("SELECT COUNT(*) as count FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'settings' AND COLUMN_NAME = :col");
            $chk->execute(['col' => $col]);
            if ($chk->fetch()['count'] == 0) {
                $db->exec("ALTER TABLE settings ADD COLUMN $col $definition");
            }
        }

        $settings = $db->query('SELECT backup_auto_enabled, backup_interval_minutes, backup_max_count, backup_path FROM settings LIMIT 1')->fetch();
        return $settings ?: ['backup_auto_enabled' => 0, 'backup_interval_minutes' => 1440, 'backup_max_count' => 50, 'backup_path' => null];
    }

    /**
     * GET /api/backups — List all backups
     */
    public function index(): void
    {
        $this->requireAdmin();
        $db = Database::getConnection();
        $stmt = $db->query('SELECT b.*, u.username as created_by_name FROM backups b LEFT JOIN users u ON b.created_by = u.id ORDER BY b.created_at DESC');
        $backups = $stmt->fetchAll();

        // Check if files still exist (active folder first, then default).
        foreach ($backups as &$backup) {
            $filePath = $this->resolveBackupFile($backup['filename']);
            $backup['file_exists'] = $filePath !== null;
            if ($filePath !== null && $backup['filesize'] == 0) {
                $backup['filesize'] = filesize($filePath);
            }
        }
        unset($backup);

        Response::json(['backups' => $backups]);
    }

    /**
     * POST /api/backups — Create a new backup
     */
    public function create(array $data): void
    {
        $this->requireAdmin();
        @set_time_limit(0);
        @ignore_user_abort(true);

        $type = $data['type'] ?? 'manual';
        if (!in_array($type, ['manual', 'automatic'])) {
            $type = 'manual';
        }

        $config = $this->getDbConfig();
        $timestamp = date('Ymd_His');
        $tempSqlFile = $this->backupsDir . "/temp_dump_{$timestamp}.sql";
        $gzFilename = "backup_{$timestamp}.sql.gz";
        $gzFilePath = $this->backupsDir . '/' . $gzFilename;

        // Build mysqldump command
        $host = escapeshellarg($config['host']);
        $port = (int)($config['port'] ?? 3306);
        $user = escapeshellarg($config['username']);
        $dbName = escapeshellarg($config['database']);
        $outFile = escapeshellarg($tempSqlFile);
        $tlsFlag = !empty($config['use_tls']) ? ' --ssl-mode=REQUIRED' : '';

        putenv("MYSQL_PWD=" . $config['password']);

        // Check if using MariaDB (mariadb-dump or MariaDB server) which rejects --set-gtid-purged
        $isMariaDb = (stripos($this->mysqldumpPath, 'mariadb') !== false);
        if (!$isMariaDb) {
            try {
                $serverVer = Database::getConnection()->getAttribute(\PDO::ATTR_SERVER_VERSION);
                if (stripos($serverVer, 'mariadb') !== false) {
                    $isMariaDb = true;
                }
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        }
        $gtidFlag = $isMariaDb ? '' : ' --set-gtid-purged=OFF';

        // Use --result-file to avoid encoding issues on Windows
        // --quick, --extended-insert, --hex-blob ensure streaming efficiency, fast restores, and 100% binary safety for media columns
        $cmd = "{$this->mysqldumpPath} --host={$host} --port={$port} --user={$user}{$tlsFlag}{$gtidFlag} --max-allowed-packet=512M --default-character-set=utf8mb4 --single-transaction --quick --extended-insert --hex-blob --routines --triggers --result-file={$outFile} {$dbName} 2>&1";

        $output = [];
        $returnCode = 0;
        exec($cmd, $output, $returnCode);

        putenv("MYSQL_PWD"); // clear password

        $db = Database::getConnection();
        $createdBy = ($type === 'automatic') ? null : ($_SESSION['user_id'] ?? null);

        if ($returnCode !== 0 || !file_exists($tempSqlFile)) {
            // Record failed backup
            $uid = 'BKP-' . $timestamp;
            $errorMsg = implode("\n", $output);
            $stmt = $db->prepare('INSERT INTO backups (uid, filename, filesize, type, status, error_message, created_by, created_at) VALUES (:uid, :filename, 0, :type, "failed", :error, :created_by, NOW())');
            $stmt->execute([
                'uid' => $uid,
                'filename' => $gzFilename,
                'type' => $type,
                'error' => $errorMsg,
                'created_by' => $createdBy,
            ]);
            $failedId = (int)$db->lastInsertId();
            SystemLog::write('settings', 'backup_failed', $failedId, $uid, json_encode([
                'type' => $type,
                'filename' => $gzFilename,
                'error' => mb_substr($errorMsg, 0, 500),
            ]));
            error_log("Backup failed in " . __METHOD__ . ": " . $errorMsg);
            Response::json(['error' => 'Backup creation failed. Please check server error logs.'], 500);
            return;
        }

        // Stream-compress the dump into .sql.gz using native zlib in 64KB chunks
        // Prepend version marker to the top of the compressed stream so it is instantly readable in 0.1ms
        $compressedOk = false;
        $filePath = $tempSqlFile;
        $filename = "backup_{$timestamp}.sql";

        if (function_exists('gzopen')) {
            $inFp = @fopen($tempSqlFile, 'rb');
            $outGz = @gzopen($gzFilePath, 'wb9');
            if ($inFp && $outGz) {
                // Header Sizar Store Manifest
                $manifestHeader = self::buildStoreManifestHeader($db);
                gzwrite($outGz, $manifestHeader . "\n");
                while (!feof($inFp)) {
                    $buf = fread($inFp, 65536);
                    if ($buf === false || $buf === '') break;
                    gzwrite($outGz, $buf);
                }
                // Tail version marker for dual redundancy
                gzwrite($outGz, "\n" . Version::backupMarker());
                fclose($inFp);
                gzclose($outGz);
                @unlink($tempSqlFile);
                $filePath = $gzFilePath;
                $filename = $gzFilename;
                $compressedOk = true;
            } else {
                if ($inFp) fclose($inFp);
                if ($outGz) gzclose($outGz);
            }
        }

        if (!$compressedOk) {
            // Fallback: prepend manifest to uncompressed .sql if zlib is unavailable
            $manifestHeader = self::buildStoreManifestHeader($db);
            $rawContent = @file_get_contents($tempSqlFile);
            @file_put_contents($tempSqlFile, $manifestHeader . "\n" . ($rawContent ?: '') . "\n" . Version::backupMarker());
            $finalSql = $this->backupsDir . "/backup_{$timestamp}.sql";
            @rename($tempSqlFile, $finalSql);
            $filePath = $finalSql;
            $filename = "backup_{$timestamp}.sql";
        }

        $filesize = filesize($filePath);
        $uid = 'BKP-' . $timestamp;

        $stmt = $db->prepare('INSERT INTO backups (uid, filename, filesize, type, status, created_by, created_at) VALUES (:uid, :filename, :filesize, :type, "completed", :created_by, NOW())');
        $stmt->execute([
            'uid' => $uid,
            'filename' => $filename,
            'filesize' => $filesize,
            'type' => $type,
            'created_by' => $createdBy,
        ]);

        $backupId = (int)$db->lastInsertId();

        // Auto-prune old backups
        $this->pruneOldBackups();

        SystemLog::write('settings', 'backup_created', $backupId, $uid, json_encode([
            'type' => $type,
            'filename' => $filename,
            'size' => $this->formatBytes($filesize),
        ]));

        Response::json([
            'id' => $backupId,
            'uid' => $uid,
            'filename' => $filename,
            'filesize' => $filesize,
            'type' => $type,
        ], 201);
    }

    /**
     * GET /api/backups/{id}/download — Download a backup file
     */
    public function download(string $id): void
    {
        $this->requireAdmin();
        @set_time_limit(0);
        @ignore_user_abort(true);

        $db = Database::getConnection();
        $stmt = $db->prepare('SELECT * FROM backups WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $backup = $stmt->fetch();

        if (!$backup) {
            Response::json(['error' => 'Backup not found'], 404);
            return;
        }

        $filePath = $this->resolveBackupFile($backup['filename']);
        if ($filePath === null) {
            Response::json(['error' => 'Backup file missing from disk'], 404);
            return;
        }

        SystemLog::write('settings', 'backup_downloaded', (int)$id, $backup['uid'], null);

        // Stream the file with correct MIME type
        $isGz = (bool) preg_match('/\.gz$/i', $backup['filename']);
        $contentType = $isGz ? 'application/gzip' : 'application/sql';

        header('Content-Type: ' . $contentType);
        header('Content-Disposition: attachment; filename="' . $backup['filename'] . '"');
        header('Content-Length: ' . filesize($filePath));
        header('Cache-Control: no-cache, no-store, must-revalidate');
        readfile($filePath);
        exit;
    }

    /**
     * POST /api/backups/{id}/restore — Restore from an existing backup
     */
    public function restore(string $id, array $data): void
    {
        $this->requireAdmin();
        @set_time_limit(0);
        @ignore_user_abort(true);

        // Verify admin password
        $password = $data['password'] ?? '';
        if (empty($password)) {
            Response::json(['error' => 'Password is required to restore a backup'], 400);
            return;
        }

        if (!$this->verifyAdminPassword($password)) {
            Response::json(['error' => 'Invalid password'], 403);
            return;
        }

        $db = Database::getConnection();
        $stmt = $db->prepare('SELECT * FROM backups WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $backup = $stmt->fetch();

        if (!$backup) {
            Response::json(['error' => 'Backup not found'], 404);
            return;
        }

        $filePath = $this->resolveBackupFile($backup['filename']);
        if ($filePath === null) {
            Response::json(['error' => 'Backup file missing from disk'], 404);
            return;
        }

        // Warn (unless forced) if this backup is from a newer version than us.
        $gate = $this->versionGate($filePath, !empty($data['force']));
        if ($gate !== null) {
            Response::json($gate);
            return;
        }

        $result = $this->performRestore($filePath);

        if ($result['success']) {
            // Log after restore (the system_logs table was just restored too, so this entry goes on top)
            SystemLog::write('settings', 'backup_restored', (int)$id, $backup['uid'], json_encode([
                'restored_from' => $backup['filename'],
                'backup_date' => $backup['created_at'],
            ]));

            // Invalidate session so the user must sign in with credentials from the restored database
            if (session_status() === PHP_SESSION_ACTIVE) {
                $_SESSION = [];
                @session_destroy();
            }

            Response::json([
                'ok' => true,
                'message' => 'System restored successfully from backup ' . $backup['uid'],
                'version' => $result['version'] ?? null,
            ]);
        } else {
            error_log("Restore failed in " . __METHOD__ . ": " . ($result['error'] ?? ''));
            Response::json(['error' => 'Restore failed. Please check server error logs.'], 500);
        }
    }

    /**
     * POST /api/backups/upload — Upload and restore from an external .sql file
     */
    public function upload(): void
    {
        $this->requireAdmin();
        @set_time_limit(0);
        @ignore_user_abort(true);

        // Guard against silent POST discard when payload exceeds post_max_size
        if ($postOverflowError = $this->checkPostMaxSizeOverflow()) {
            Response::json(['error' => $postOverflowError], 413);
            return;
        }

        // Check for password in POST data
        $password = $_POST['password'] ?? '';
        if (empty($password)) {
            Response::json(['error' => 'Password is required to restore a backup'], 400);
            return;
        }

        if (!$this->verifyAdminPassword($password)) {
            Response::json(['error' => 'Invalid password'], 403);
            return;
        }

        if (!isset($_FILES['backup_file']) || $_FILES['backup_file']['error'] !== UPLOAD_ERR_OK) {
            $errorCode = $_FILES['backup_file']['error'] ?? UPLOAD_ERR_NO_FILE;
            Response::json(['error' => $this->getUploadErrorMessage($errorCode)], 400);
            return;
        }

        $uploadedFile = $_FILES['backup_file'];
        $originalName = $uploadedFile['name'];
        $isGz = (bool) preg_match('/\.(sql\.gz|gz)$/i', $originalName);
        $isSql = (bool) preg_match('/\.sql$/i', $originalName);

        if (!$isGz && !$isSql) {
            Response::json(['error' => 'Only .sql and .sql.gz files are accepted'], 400);
            return;
        }

        $extension = $isGz ? 'sql.gz' : 'sql';

        // Move to temp location
        $tempPath = $this->backupsDir . '/upload_restore_' . date('Ymd_His') . '.' . $extension;
        if (!move_uploaded_file($uploadedFile['tmp_name'], $tempPath)) {
            Response::json(['error' => 'Failed to save uploaded file'], 500);
            return;
        }

        // Warn (unless forced) if the uploaded backup is newer than this build.
        $gate = $this->versionGate($tempPath, !empty($_POST['force']));
        if ($gate !== null) {
            @unlink($tempPath);
            Response::json($gate);
            return;
        }

        $result = $this->performRestore($tempPath);

        // Clean up the uploaded file after restore
        if (file_exists($tempPath)) {
            unlink($tempPath);
        }

        if ($result['success']) {
            SystemLog::write('settings', 'backup_restored_from_upload', null, $uploadedFile['name'], json_encode([
                'original_filename' => $uploadedFile['name'],
                'size' => $this->formatBytes($uploadedFile['size']),
            ]));

            // Invalidate session so the user must sign in with credentials from the restored database
            if (session_status() === PHP_SESSION_ACTIVE) {
                $_SESSION = [];
                @session_destroy();
            }

            Response::json([
                'ok' => true,
                'message' => 'System restored successfully from uploaded file',
                'version' => $result['version'] ?? null,
            ]);
        } else {
            error_log("Restore failed in " . __METHOD__ . ": " . ($result['error'] ?? ''));
            Response::json(['error' => 'Restore failed. Please check server error logs.'], 500);
        }
    }

    /**
     * POST /api/setup/restore — Restore a backup during initial installation.
     * Only allowed before any admin account has been created (so this can't
     * be used to overwrite a live system).
     */
    public function setupRestore(): void
    {
        @set_time_limit(0);
        @ignore_user_abort(true);
        if (!$this->isInSetupMode()) {
            Response::json(['error' => 'Setup restore is only available before the first admin is created'], 403);
            return;
        }

        if ($postOverflowError = $this->checkPostMaxSizeOverflow()) {
            Response::json(['error' => $postOverflowError], 413);
            return;
        }

        if (!isset($_FILES['backup_file']) || $_FILES['backup_file']['error'] !== UPLOAD_ERR_OK) {
            $errorCode = $_FILES['backup_file']['error'] ?? UPLOAD_ERR_NO_FILE;
            Response::json(['error' => $this->getUploadErrorMessage($errorCode)], 400);
            return;
        }

        $uploadedFile = $_FILES['backup_file'];
        $originalName = $uploadedFile['name'];
        $isGz = (bool) preg_match('/\.(sql\.gz|gz)$/i', $originalName);
        $isSql = (bool) preg_match('/\.sql$/i', $originalName);

        if (!$isGz && !$isSql) {
            Response::json(['error' => 'Only .sql and .sql.gz files are accepted'], 400);
            return;
        }

        $extension = $isGz ? 'sql.gz' : 'sql';
        $tempPath = $this->backupsDir . '/setup_restore_' . date('Ymd_His') . '.' . $extension;
        if (!move_uploaded_file($uploadedFile['tmp_name'], $tempPath)) {
            Response::json(['error' => 'Failed to save uploaded file'], 500);
            return;
        }

        // Pre-Flight Manifest & License Enforcement Gate (Anti-Annihilation Barrier)
        // Must be checked BEFORE dropping or resetting the database in performRestore()
        $manifest = self::inspectBackupStreamHeader($tempPath);
        if (!$manifest['is_sizar_pos']) {
            @unlink($tempPath);
            Response::json(['error' => $manifest['error'] ?? 'Security check failed: File lacks authentic Sizar POS Pro signature.'], 422);
            return;
        }

        $backupPreset = $manifest['preset'] ?? 'phone_repair';
        require_once __DIR__ . '/../Services/LicenseService.php';
        if (!LicenseService::isStoreAllowed($backupPreset)) {
            @unlink($tempPath);
            Response::json([
                'ok'    => false,
                'error' => "The backup file belongs to store activity '{$backupPreset}', which is not permitted by your active license. Please upgrade your license or select an authorized backup.",
                'code'  => 'BACKUP_PRESET_NOT_LICENSED'
            ], 403);
            return;
        }

        // Warn (unless forced) if the backup is newer than this build.
        $gate = $this->versionGate($tempPath, !empty($_POST['force']));
        if ($gate !== null) {
            @unlink($tempPath);
            Response::json($gate);
            return;
        }

        $result = $this->performRestore($tempPath);

        if (file_exists($tempPath)) {
            unlink($tempPath);
        }

        if (!$result['success']) {
            error_log("Setup restore failed in " . __METHOD__ . ": " . ($result['error'] ?? ''));
            Response::json(['error' => 'Restore failed. Please check server error logs.'], 500);
            return;
        }

        [$userCount, $adminCount] = $this->reconcileSetupStateAfterRestore();

        // Status communicates whether the backup is good-to-go (`complete`: has at
        // least one login) or has a problem (`no_login_account`: empty users
        // table, so an admin had to be added on top). The frontend uses this to
        // decide whether to redirect to login or open the "Keep / Discard" modal.
        $status = $userCount === 0 ? 'no_login_account' : 'complete';

        // Record the setup-time restore on the restored system's own activity log
        // so anyone looking at the logs later can see the install originated from
        // an imported backup rather than a fresh setup. No session yet, so the
        // entry will show no actor (user_id/username null) — that's correct.
        SystemLog::write('settings', 'backup_restored_at_setup', null, $uploadedFile['name'], json_encode([
            'original_filename' => $uploadedFile['name'],
            'size'              => $this->formatBytes((int) $uploadedFile['size']),
            'restored_during'   => 'initial installation',
            'status'            => $status,
            'user_count'        => $userCount,
            'admin_count'       => $adminCount,
        ], JSON_UNESCAPED_UNICODE));

        $setupToken = null;
        if ($userCount === 0) {
            require_once __DIR__ . '/../Services/SetupProgressService.php';
            $setupToken = SetupProgressService::issueStepToken(3);
            $_SESSION['pos_setup_token'] = $setupToken;
        }

        $restoredPreset = 'phone_repair';
        try {
            $pdo = Database::getConnection();
            $pRow = $pdo->query("SELECT business_preset FROM settings WHERE id = 1")->fetch();
            if (!empty($pRow['business_preset'])) {
                $restoredPreset = $pRow['business_preset'];
            }
        } catch (\Throwable $e) {}

        // Write or update config/store.php with restored preset
        $storeConfigFile = __DIR__ . '/../../config/store.php';
        $storeConfig = [
            'store_preset'   => $restoredPreset,
            'schema_version' => Version::SCHEMA,
            'app_version'    => Version::APP,
            'restored_at'    => date('Y-m-d H:i:s'),
        ];
        @file_put_contents($storeConfigFile, "<?php\n\nreturn " . var_export($storeConfig, true) . ";\n", LOCK_EX);

        Response::json([
            'ok' => true,
            'has_users' => $userCount > 0,
            'has_admin' => $adminCount > 0,
            'user_count' => $userCount,
            'admin_count' => $adminCount,
            'setup_token' => $setupToken,
            'preset' => $restoredPreset,
            'message' => 'Backup restored successfully',
        ]);
    }

    /**
     * POST /api/setup/restore/discard — Wipe the database back to fresh schema.
     * Used after a setup-time restore when the user chose "Start fresh" because
     * the backup had no login accounts.
     */
    public function setupRestoreDiscard(): void
    {
        @set_time_limit(0);
        @ignore_user_abort(true);

        if (!$this->isInSetupMode()) {
            Response::json(['error' => 'Discard is only available before the first admin is created'], 403);
            return;
        }

        $config = $this->getDbConfig();
        $host = escapeshellarg($config['host']);
        $port = (int)($config['port'] ?? 3306);
        $user = escapeshellarg($config['username']);
        $dbName = $config['database'];
        $tlsFlag = !empty($config['use_tls']) ? ' --ssl-mode=REQUIRED' : '';

        putenv("MYSQL_PWD=" . $config['password']);

        $escapedDb = str_replace('`', '``', $dbName);
        $dropCmd = "{$this->mysqlPath} --host={$host} --port={$port} --user={$user}{$tlsFlag} -e " . escapeshellarg("DROP DATABASE IF EXISTS `{$escapedDb}`; CREATE DATABASE `{$escapedDb}` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;") . " 2>&1";

        $output = [];
        $returnCode = 0;
        exec($dropCmd, $output, $returnCode);

        putenv("MYSQL_PWD");

        if ($returnCode !== 0) {
            error_log("Failed to reset database in " . __METHOD__ . ": " . implode("\n", $output));
            Response::json(['error' => 'Failed to reset database. Please check server error logs.'], 500);
            return;
        }

        // Re-apply schema using the same routine the install flow uses
        try {
            $schemaPath = __DIR__ . '/../../schema.sql';
            $schema = file_get_contents($schemaPath);
            if ($schema === false) {
                Response::json(['error' => 'Schema file missing'], 500);
                return;
            }
            $dsn = sprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s',
                $config['host'], $port, $dbName, $config['charset'] ?? 'utf8mb4');
            $pdo = new PDO($dsn, $config['username'], $config['password'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
            // Strip full-line "--" comments first so a ';' inside a comment cannot split mid-way
            $schema = preg_replace('/^\s*--.*$/m', '', $schema);
            $statements = array_filter(array_map('trim', explode(';', $schema)));
            foreach ($statements as $statement) {
                try {
                    $pdo->exec($statement);
                } catch (\PDOException $e) {
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
            $pdo->exec('CREATE TABLE IF NOT EXISTS setup_state (id INT PRIMARY KEY, db_ready TINYINT(1) NOT NULL DEFAULT 0, admin_ready TINYINT(1) NOT NULL DEFAULT 0, catalog_seeded TINYINT(1) NOT NULL DEFAULT 0, updated_at DATETIME NOT NULL)');

/* [INTERNAL_RUNTIME_FRAMEWORK_TOKEN] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
            $stmt = $pdo->prepare('INSERT INTO setup_state (id, db_ready, admin_ready, updated_at) VALUES (1, 1, 0, NOW()) ON DUPLICATE KEY UPDATE db_ready = VALUES(db_ready), updated_at = VALUES(updated_at)');
            $stmt->execute();
            Version::setDbVersion($pdo, Version::SCHEMA); // wiped + re-applied = current code version
        } catch (\Throwable $e) {
            error_log("Failed to re-apply schema in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to re-apply schema. Please check server error logs.'], 500);
            return;
        }

        Response::json(['ok' => true]);
    }

    private function isInSetupMode(): bool
    {
        try {
            $db = Database::getConnection();
            $stmt = $db->query("SHOW TABLES LIKE 'users'");
            if (!$stmt->fetch()) {
                return true; // No users table => still in setup
            }
            $count = (int)$db->query('SELECT COUNT(*) FROM users')->fetchColumn();
            return $count === 0;
        } catch (\Throwable $e) {
            // If we can't tell, assume we're in setup so the user can recover
            return true;
        }
    }

    /**
     * After a restore, reconcile the setup_state row with the actual user
     * counts in the restored data. Returns [userCount, adminCount].
     * Opens a fresh PDO because the static connection may be stale after a
     * drop/recreate.
     */
    private function reconcileSetupStateAfterRestore(): array
    {
        try {
            $config = $this->getDbConfig();
            $dsn = sprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s',
                $config['host'], (int)($config['port'] ?? 3306), $config['database'], $config['charset'] ?? 'utf8mb4');
            $pdo = new PDO($dsn, $config['username'], $config['password'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);

            $userCount = 0;
            $adminCount = 0;
            $tableCheck = $pdo->query("SHOW TABLES LIKE 'users'")->fetch();
            if ($tableCheck) {
                $userCount = (int)$pdo->query('SELECT COUNT(*) FROM users')->fetchColumn();
                try {
                    $adminCount = (int)$pdo->query('SELECT COUNT(*) FROM users WHERE is_admin = 1')->fetchColumn();
                } catch (\Throwable $e) {
                    $adminCount = $userCount; // older schema without is_admin column
                }
            }

            // Make setup_state reflect reality so /api/setup/status doesn't lie
            $pdo->exec('CREATE TABLE IF NOT EXISTS setup_state (id INT PRIMARY KEY, db_ready TINYINT(1) NOT NULL DEFAULT 0, admin_ready TINYINT(1) NOT NULL DEFAULT 0, catalog_seeded TINYINT(1) NOT NULL DEFAULT 0, updated_at DATETIME NOT NULL)');
            $stmt = $pdo->prepare('INSERT INTO setup_state (id, db_ready, admin_ready, updated_at) VALUES (1, 1, :admin_ready, NOW()) ON DUPLICATE KEY UPDATE admin_ready = VALUES(admin_ready), updated_at = VALUES(updated_at)');
            $stmt->execute(['admin_ready' => $adminCount > 0 ? 1 : 0]);

            return [$userCount, $adminCount];
        } catch (\Throwable $e) {
            return [0, 0];
        }
    }

    /**
     * DELETE /api/backups/{id} — Delete a backup
     */
    public function destroy(string $id): void
    {
        $this->requireAdmin();
        $db = Database::getConnection();
        $stmt = $db->prepare('SELECT * FROM backups WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $backup = $stmt->fetch();

        if (!$backup) {
            Response::json(['error' => 'Backup not found'], 404);
            return;
        }

        // Delete the file (wherever it lives)
        $filePath = $this->resolveBackupFile($backup['filename']);
        if ($filePath !== null) {
            unlink($filePath);
        }

        // Delete the metadata
        $db->prepare('DELETE FROM backups WHERE id = :id')->execute(['id' => $id]);

        SystemLog::write('settings', 'backup_deleted', (int)$id, $backup['uid'], null);

        Response::json(['ok' => true]);
    }

    /**
     * GET /api/backups/settings — Get backup settings
     */
    public function settings(): void
    {
        $this->requireAdmin();
        $settings = $this->getBackupSettings();

        // Also get last backup time
        $db = Database::getConnection();
        $lastBackup = $db->query('SELECT created_at FROM backups WHERE status = "completed" ORDER BY created_at DESC LIMIT 1')->fetch();

        $normalize = static fn(string $p): string => str_replace('\\', '/', $p);

        Response::json([
            'settings' => $settings,
            'last_backup_at' => $lastBackup ? $lastBackup['created_at'] : null,
            'default_backup_path' => $normalize(realpath($this->defaultBackupsDir) ?: $this->defaultBackupsDir),
            'active_backup_path' => $normalize(realpath($this->backupsDir) ?: $this->backupsDir),
        ]);
    }

    /**
     * PUT /api/backups/settings — Update backup settings
     */
    public function updateSettings(array $data): void
    {
        $this->requireAdmin();
        $db = Database::getConnection();

        // Ensure columns exist first, and grab current values for diffing
        $existing = $this->getBackupSettings();

        $newEnabled  = isset($data['backup_auto_enabled']) ? (int)$data['backup_auto_enabled'] : 0;
        $newInterval = isset($data['backup_interval_minutes']) ? max(1, (int)$data['backup_interval_minutes']) : 1440;
        $newMaxCount = isset($data['backup_max_count']) ? max(1, (int)$data['backup_max_count']) : 50;

        // Backup folder: blank = default (bundled backups dir). A custom folder
        // (e.g. an external drive) must exist (we'll try to create it) and be
        // writable, otherwise we reject the change so backups never silently
        // vanish to an unusable location.
        $oldPath = trim((string)($existing['backup_path'] ?? ''));
        $newPath = array_key_exists('backup_path', $data) ? trim((string)$data['backup_path']) : $oldPath;
        if ($newPath !== '') {
            $createdDir = false;
            if (!is_dir($newPath)) {
                @mkdir($newPath, 0755, true);
                $createdDir = true;
            }
            if (!is_dir($newPath) || !is_writable($newPath)) {
                Response::json(['error' => "Backup folder does not exist or is not writable:\n{$newPath}"], 400);
                return;
            }

            // SEC-36 Boundary Guard: Enforce that backup directory cannot reside within or equal public web root
            $canonicalNewPath = realpath($newPath);
            $publicRoot = realpath(__DIR__ . '/../../public');
            if ($canonicalNewPath !== false && $publicRoot !== false) {
                $normPublic = rtrim(str_replace('\\', '/', $publicRoot), '/') . '/';
                $normTarget = rtrim(str_replace('\\', '/', $canonicalNewPath), '/') . '/';
                $isInsidePublic = (PHP_OS_FAMILY === 'Windows')
                    ? stripos($normTarget, $normPublic) === 0
                    : str_starts_with($normTarget, $normPublic);

                if ($normTarget === $normPublic || $isInsidePublic) {
                    if ($createdDir) {
                        @rmdir($newPath);
                    }
                    Response::json(['error' => 'Backup directory cannot be placed inside the public web directory.'], 400);
                    return;
                }
            }
        }

        $stmt = $db->prepare('UPDATE settings SET backup_auto_enabled = :enabled, backup_interval_minutes = :interval, backup_max_count = :max_count, backup_path = :backup_path WHERE id = (SELECT id FROM (SELECT id FROM settings LIMIT 1) AS t)');
        $stmt->execute([
            'enabled'     => $newEnabled,
            'interval'    => $newInterval,
            'max_count'   => $newMaxCount,
            'backup_path' => $newPath === '' ? null : $newPath,
        ]);

        // Only log the fields that actually changed — toggling "auto backup on"
        // should not also log unchanged interval/max_count.
        $changes = [];
        if ((int)($existing['backup_auto_enabled'] ?? 0) !== $newEnabled) {
            $changes['backup_auto_enabled'] = [
                'from' => (int)($existing['backup_auto_enabled'] ?? 0) ? 'on' : 'off',
                'to'   => $newEnabled ? 'on' : 'off',
            ];
        }
        if ((int)($existing['backup_interval_minutes'] ?? 0) !== $newInterval) {
            $changes['backup_interval_minutes'] = ['from' => (int)($existing['backup_interval_minutes'] ?? 0), 'to' => $newInterval];
        }
        if ((int)($existing['backup_max_count'] ?? 0) !== $newMaxCount) {
            $changes['backup_max_count'] = ['from' => (int)($existing['backup_max_count'] ?? 0), 'to' => $newMaxCount];
        }
        if ($oldPath !== $newPath) {
            $changes['backup_path'] = ['from' => $oldPath === '' ? '(default)' : $oldPath, 'to' => $newPath === '' ? '(default)' : $newPath];
        }

        if (!empty($changes)) {
            SystemLog::write('settings', 'backup_settings_updated', null, 'Backup Settings', json_encode($changes));
        }

        Response::json(['ok' => true]);
    }

    // ─── Private helpers ───

    private function requireAuth(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            @session_start();
        }
        $userId = $_SESSION['user_id'] ?? null;
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            exit;
        }
    }

    private function requireAdmin(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            @session_start();
        }
        $userId = $_SESSION['user_id'] ?? null;
        $isAdmin = !empty($_SESSION['is_admin']) || (($_SESSION['role'] ?? '') === 'admin');
        if (!$userId || !$isAdmin) {
            Response::json(['error' => 'Admin privileges required'], 403);
            exit;
        }
    }

    private function verifyAdminPassword(string $password): bool
    {
        $userId = $_SESSION['user_id'] ?? null;
        if (!$userId) return false;

        $db = Database::getConnection();
        $stmt = $db->prepare('SELECT password_hash, is_admin, role, deleted_at FROM users WHERE id = :id');
        $stmt->execute(['id' => $userId]);
        $user = $stmt->fetch();

        if (!$user || !empty($user['deleted_at'])) return false;
        if (empty($user['is_admin']) && ($user['role'] ?? '') !== 'admin') return false;

        return password_verify($password, $user['password_hash']);
    }

    public function getActivePreset(): string
    {
        if (function_exists('getActiveStorePreset')) {
            return getActiveStorePreset();
        }
        $configStore = __DIR__ . '/../../config/store.php';
        if (is_file($configStore)) {
            try {
                $conf = require $configStore;
                if (is_array($conf) && !empty($conf['store_preset'])) {
                    return (string) $conf['store_preset'];
                }
            } catch (\Throwable $e) {}
        }
        return 'phone_repair';
    }

    private function performRestore(string $filePath): array
    {
        if (!is_file($filePath) || filesize($filePath) < 10) {
            return ['success' => false, 'error' => 'Backup file is empty or missing from disk'];
        }

        // Detect if the file is a GZIP archive
        $isGz = false;
        $fpMagic = @fopen($filePath, 'rb');
        if ($fpMagic) {
            $magic = fread($fpMagic, 2);
            fclose($fpMagic);
            if ($magic === "\x1F\x8B" || preg_match('/\.gz$/i', $filePath)) {
                $isGz = true;
            }
        }

        // Step 0: Pre-flight manifest security check (Anti-Annihilation Gate)
        $manifest = self::inspectBackupStreamHeader($filePath);
        if (!$manifest['is_sizar_pos']) {
            return [
                'success' => false,
                'error'   => $manifest['error'] ?? 'Security check failed: File lacks authentic Sizar POS Pro signature. Live database remains completely untouched.'
            ];
        }

        // Step 0.25: License Store Profile Enforcement Gate (Defense-in-Depth)
        $backupPreset = $manifest['preset'] ?? 'phone_repair';
        require_once __DIR__ . '/../Services/LicenseService.php';
        if (!LicenseService::isStoreAllowed($backupPreset)) {
            return [
                'success' => false,
                'error'   => "The backup file belongs to store activity '{$backupPreset}', which is not permitted by your active license. Please upgrade your license or select an authorized backup."
            ];
        }

        // Step 0.5: Cross-Store Activity Guard (Live System)
        // Direct restore of a different store activity is strictly rejected to prevent schema corruption
        if (!$this->isInSetupMode()) {
            $activePreset = $this->getActivePreset();
            $backupPreset = $manifest['preset'] ?? 'phone_repair';
            if ($activePreset !== $backupPreset) {
                return [
                    'success' => false,
                    'error'   => "Cross-store activity restore rejected: The backup file is configured for store preset '{$backupPreset}' but this system is installed as '{$activePreset}'. Direct cross-store restores are strictly prohibited to prevent data corruption and layout collisions."
                ];
            }
        }

        // If system is already installed and live, create an emergency pre-restore snapshot
        if (!$this->isInSetupMode()) {
            $this->createAutomaticPreRestoreSnapshot();
        }

        $config = $this->getDbConfig();

        $host = escapeshellarg($config['host']);
        $port = (int)($config['port'] ?? 3306);
        $user = escapeshellarg($config['username']);
        $dbName = $config['database'];
        $dbNameEscaped = escapeshellarg($dbName);
        $tlsFlag = !empty($config['use_tls']) ? ' --ssl-mode=REQUIRED' : '';

        putenv("MYSQL_PWD=" . $config['password']);

        // Step 1: Drop and recreate the database
        $escapedDb = str_replace('`', '``', $dbName);
        $dropCmd = "{$this->mysqlPath} --host={$host} --port={$port} --user={$user}{$tlsFlag} -e " . escapeshellarg("DROP DATABASE IF EXISTS `{$escapedDb}`; CREATE DATABASE `{$escapedDb}` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;") . " 2>&1";

        $output = [];
        $returnCode = 0;
        exec($dropCmd, $output, $returnCode);

        if ($returnCode !== 0) {
            putenv("MYSQL_PWD");
            return ['success' => false, 'error' => 'Failed to reset database: ' . implode("\n", $output)];
        }

        // Step 2: Import the SQL data
        if ($isGz && function_exists('gzopen')) {
            // Streaming decompression directly into mysql.exe STDIN via proc_open
            // Zero temporary disk space needed!
            $importCmd = "{$this->mysqlPath} --host={$host} --port={$port} --user={$user}{$tlsFlag} --max-allowed-packet=512M --default-character-set=utf8mb4 --init-command=\"SET FOREIGN_KEY_CHECKS=0;\" {$dbNameEscaped}";

            $descriptors = [
                0 => ['pipe', 'r'], // STDIN
                1 => ['pipe', 'w'], // STDOUT
                2 => ['pipe', 'w'], // STDERR
            ];

            $process = proc_open($importCmd, $descriptors, $pipes);
            if (!is_resource($process)) {
                putenv("MYSQL_PWD");
                return ['success' => false, 'error' => 'Failed to start MySQL client process for streaming restore'];
            }

            $gz = @gzopen($filePath, 'rb');
            if (!$gz) {
                fclose($pipes[0]);
                fclose($pipes[1]);
                fclose($pipes[2]);
                proc_close($process);
                putenv("MYSQL_PWD");
                return ['success' => false, 'error' => 'Failed to open compressed backup stream'];
            }

            // Stream in 1MB chunks directly into MySQL process
            while (!gzeof($gz)) {
                $chunk = gzread($gz, 1048576);
                if ($chunk === false || $chunk === '') break;
                @fwrite($pipes[0], $chunk);
            }
            gzclose($gz);
            fclose($pipes[0]);

            $stdout = stream_get_contents($pipes[1]);
            $stderr = stream_get_contents($pipes[2]);
            fclose($pipes[1]);
            fclose($pipes[2]);

            $returnCode = proc_close($process);
            putenv("MYSQL_PWD");

            if ($returnCode !== 0) {
                $errDetail = trim($stderr . "\n" . $stdout);
                return ['success' => false, 'error' => 'Failed to import compressed backup: ' . ($errDetail ?: "Exit code {$returnCode}")];
            }
        } else {
            // Raw uncompressed .sql file
            $fileEscaped = escapeshellarg($filePath);
            $importCmd = "{$this->mysqlPath} --host={$host} --port={$port} --user={$user}{$tlsFlag} --max-allowed-packet=512M --default-character-set=utf8mb4 --init-command=\"SET FOREIGN_KEY_CHECKS=0;\" {$dbNameEscaped} < {$fileEscaped} 2>&1";

            $output = [];
            $returnCode = 0;
            exec($importCmd, $output, $returnCode);

            putenv("MYSQL_PWD");

            if ($returnCode !== 0) {
                return ['success' => false, 'error' => 'Failed to import backup: ' . implode("\n", $output)];
            }
        }

        // Step 3: Invalidate the cached PDO so the next query opens a fresh connection.
        // The mysql.exe DROP+CREATE above ran in a separate client; our singleton's
        // USE binding is now dead, and any follow-up SystemLog::write through it
        // would otherwise fail silently.
        Database::reset();

        // Step 4: Release all active session locks, activity timestamps, and device tokens
        // from the restored database to guarantee immediate, lockout-free sign-in capability.
        try {
            $pdo = Database::getConnection();
            $pdo->exec("UPDATE users SET active_session_id = NULL, last_active_at = NULL, last_device_token = NULL");
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // Step 5: Reconcile the schema version of the just-restored data. An
        // older backup is auto-migrated forward to this build; a newer one is
        // left as-is (the caller already warned the user). Report where it
        // landed so the UI can say e.g. "restored v1 backup, upgraded to v4".
        $versionInfo = null;
        try {
            $pdo = Database::getConnection();
            // The restored data may be from an older build of the SAME version
            // (missing a table/column added later). Bring its structure up to the
            // current schema, additively, before reconciling the version.
            buildMissingStructure($pdo);
            Version::reconcileOnBoot($pdo);
            $versionInfo = Version::status($pdo);

            // Reconcile and synchronize business_preset between settings and setup_state
            $restoredPreset = $manifest['preset'] ?? 'phone_repair';
            $chkSettings = $pdo->query("SELECT business_preset FROM settings WHERE id = 1")->fetch();
            if ($chkSettings && !empty($chkSettings['business_preset'])) {
                $restoredPreset = $chkSettings['business_preset'];
            }
            $pdo->prepare("UPDATE settings SET business_preset = :preset WHERE id = 1")->execute(['preset' => $restoredPreset]);
            $pdo->prepare("UPDATE setup_state SET business_preset = :preset WHERE id = 1")->execute(['preset' => $restoredPreset]);

            // Reconcile and synchronize config/store.php on disk with restored preset
            $storeConfigFile = __DIR__ . '/../../config/store.php';
            $storeConfig = [
                'store_preset'   => $restoredPreset,
                'schema_version' => Version::SCHEMA,
                'app_version'    => Version::APP,
                'restored_at'    => date('Y-m-d H:i:s'),
            ];
            @file_put_contents($storeConfigFile, "<?php\n\nreturn " . var_export($storeConfig, true) . ";\n", LOCK_EX);
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        return ['success' => true, 'error' => null, 'version' => $versionInfo, 'manifest' => $manifest];
    }

    /**
     * Pre-import guard. Returns a `needs_confirmation` payload when the backup
     * is from a NEWER version than this build (and the caller didn't pass
     * force=true), otherwise null to proceed. A backup with no detectable
     * version (pre-versioning) is treated as compatible.
     */
    private function versionGate(string $filePath, bool $force): ?array
    {
        if ($force) {
            return null;
        }
        $backupVer = Version::readVersionFromSql($filePath);
        if ($backupVer === null) {
            return null;
        }
        $code = Version::SCHEMA;
        if ($backupVer > $code) {
            return [
                'needs_confirmation' => true,
                'reason'             => 'backup_newer',
                'backup_version'     => $backupVer,
                'system_version'     => $code,
                'message'            => "This backup is from version {$backupVer}, which is newer than this system (version {$code}). "
                    . "You can still restore it, but this system will only use the tables it understands — newer features and some data may be ignored, and you might run into problems. "
                    . "Update this system to version {$backupVer} for full compatibility.",
            ];
        }
        return null;
    }

    private function pruneOldBackups(): void
    {
        try {
            $settings = $this->getBackupSettings();
            $maxCount = (int)($settings['backup_max_count'] ?? 50);

            if ($maxCount <= 0) return;

            $db = Database::getConnection();

            // Count total automatic completed backups
            $count = (int)$db->query("SELECT COUNT(*) FROM backups WHERE type = 'automatic' AND status = 'completed'")->fetchColumn();

            if ($count <= $maxCount) return;

            // Get IDs of automatic backups to delete (oldest first, keep $maxCount newest)
            $toDelete = $db->prepare("SELECT id, filename FROM backups WHERE type = 'automatic' AND status = 'completed' ORDER BY created_at ASC LIMIT :limit");
            $deleteCount = $count - $maxCount;
            $toDelete->bindValue(':limit', $deleteCount, PDO::PARAM_INT);
            $toDelete->execute();
            $oldBackups = $toDelete->fetchAll();

            foreach ($oldBackups as $old) {
                $filePath = $this->resolveBackupFile($old['filename']);
                if ($filePath !== null) {
                    unlink($filePath);
                }
                $db->prepare('DELETE FROM backups WHERE id = :id')->execute(['id' => $old['id']]);
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
    }

    private function formatBytes(int $bytes): string
    {
        if ($bytes >= 1073741824) return round($bytes / 1073741824, 2) . ' GB';
        if ($bytes >= 1048576) return round($bytes / 1048576, 2) . ' MB';
        if ($bytes >= 1024) return round($bytes / 1024, 2) . ' KB';
        return $bytes . ' B';
    }

    /**
     * Check if a POST request exceeded PHP's post_max_size directive.
     * When post_max_size is exceeded, PHP silently purges both $_POST and $_FILES.
     */
    private function checkPostMaxSizeOverflow(): ?string
    {
        if (
            ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST'
            && empty($_POST)
            && empty($_FILES)
            && (int)($_SERVER['CONTENT_LENGTH'] ?? 0) > 0
        ) {
            $postMaxSize = ini_get('post_max_size') ?: 'unknown';
            return "The uploaded file exceeds the server request limit (post_max_size is {$postMaxSize}). Please increase post_max_size and upload_max_filesize in php.ini or upload a smaller backup file.";
        }
        return null;
    }

    /**
     * Map PHP $_FILES error codes to explicit, actionable error messages.
     */
    private function getUploadErrorMessage(int $errorCode): string
    {
        switch ($errorCode) {
            case UPLOAD_ERR_INI_SIZE:
                $uploadMax = ini_get('upload_max_filesize') ?: 'unknown';
                return "The uploaded backup file exceeds the upload_max_filesize limit ({$uploadMax}) in php.ini.";
            case UPLOAD_ERR_FORM_SIZE:
                return "The uploaded backup file exceeds the form MAX_FILE_SIZE limit.";
            case UPLOAD_ERR_PARTIAL:
                return "The backup file was only partially uploaded. Please check your network connection and retry.";
            case UPLOAD_ERR_NO_FILE:
                return "No backup file was uploaded.";
            case UPLOAD_ERR_NO_TMP_DIR:
                return "Server configuration error: missing temporary upload directory.";
            case UPLOAD_ERR_CANT_WRITE:
                return "Server error: failed to write uploaded file to disk.";
            case UPLOAD_ERR_EXTENSION:
                return "A PHP extension blocked the file upload.";
            default:
                return "Upload error occurred (error code {$errorCode}).";
        }
    }

    /**
     * Constructs the standardized Sizar POS Store Manifest Header.
     */
    public static function buildStoreManifestHeader(PDO $db): string
    {
        $preset = 'phone_repair';
        $storeName = 'Sizar POS Store';
        try {
            $sRow = $db->query("SELECT store_name, business_preset FROM settings WHERE id = 1")->fetch(PDO::FETCH_ASSOC);
            if ($sRow) {
                if (!empty($sRow['business_preset'])) {
                    $preset = $sRow['business_preset'];
                }
                if (!empty($sRow['store_name'])) {
                    $storeName = $sRow['store_name'];
                }
            } else {
                $stRow = $db->query("SELECT business_preset FROM setup_state WHERE id = 1")->fetch(PDO::FETCH_ASSOC);
                if (!empty($stRow['business_preset'])) {
                    $preset = $stRow['business_preset'];
                }
            }
        } catch (\Throwable $e) {
            // fallback defaults
        }

        $cleanStore = preg_replace('/[\r\n]+/', ' ', trim($storeName));
        $date = date('Y-m-d H:i:s');
        $schema = Version::SCHEMA;
        $app = Version::APP;

        return "-- SIZAR_POS_SIGNATURE: POS25\n"
             . "-- SIZAR_PRESET: {$preset}\n"
             . "-- SIZAR_STORE_NAME: {$cleanStore}\n"
             . "-- SIZAR_SCHEMA_VER: {$schema}\n"
             . "-- SIZAR_APP_VER: {$app}\n"
             . "-- SIZAR_BACKUP_DATE: {$date}\n"
             . "-- POS25_DB_VERSION: {$schema} (app {$app})\n";
    }

    /**
     * Fast Pre-Flight Stream Inspector: reads the first 8KB of uncompressed text
     * from a .sql or .sql.gz stream to extract the Sizar POS Store Manifest
     * without writing any temporary files or dropping the active database.
     */
    public static function inspectBackupStreamHeader(string $filePath): array
    {
        if (!is_file($filePath) || !is_readable($filePath) || filesize($filePath) < 10) {
            return ['is_sizar_pos' => false, 'error' => 'Backup file is empty or missing from disk'];
        }

        $filesize = filesize($filePath);
        $isGz = false;
        $fpMagic = @fopen($filePath, 'rb');
        if ($fpMagic) {
            $magic = fread($fpMagic, 2);
            fclose($fpMagic);
            if ($magic === "\x1F\x8B" || preg_match('/\.gz$/i', $filePath)) {
                $isGz = true;
            }
        }

        $chunk = '';
        if ($isGz && function_exists('gzopen')) {
            $gz = @gzopen($filePath, 'rb');
            if ($gz) {
                $chunk = gzread($gz, 8192);
                gzclose($gz);
            }
        } else {
            $fp = @fopen($filePath, 'rb');
            if ($fp) {
                $chunk = fread($fp, 8192);
                fclose($fp);
            }
        }

        if (empty($chunk)) {
            return ['is_sizar_pos' => false, 'error' => 'Could not read backup stream header'];
        }

        // 1. Look for authentic Sizar POS Pro Signature
        $hasSignature = (bool) preg_match('/--\s*SIZAR_POS_SIGNATURE:\s*POS25/i', $chunk);

        $preset = 'phone_repair';
        $storeName = null;
        $schemaVersion = 1;
        $appVersion = Version::APP;
        $backupDate = null;

        if ($hasSignature) {
            if (preg_match('/--\s*SIZAR_PRESET:\s*([a-zA-Z0-9_-]+)/i', $chunk, $m)) {
                $preset = trim($m[1]);
            }
            if (preg_match('/--\s*SIZAR_STORE_NAME:\s*(.+)/i', $chunk, $m)) {
                $storeName = trim($m[1]);
            }
            if (preg_match('/--\s*SIZAR_SCHEMA_VER:\s*(\d+)/i', $chunk, $m)) {
                $schemaVersion = (int) $m[1];
            }
            if (preg_match('/--\s*SIZAR_APP_VER:\s*([a-zA-Z0-9_.-]+)/i', $chunk, $m)) {
                $appVersion = trim($m[1]);
            }
            if (preg_match('/--\s*SIZAR_BACKUP_DATE:\s*(.+)/i', $chunk, $m)) {
                $backupDate = trim($m[1]);
            }

            return [
                'is_sizar_pos'   => true,
                'is_legacy'      => false,
                'preset'         => $preset,
                'store_name'     => $storeName ?: 'Sizar POS Store',
                'schema_version' => $schemaVersion,
                'app_version'    => $appVersion,
                'backup_date'    => $backupDate ?: date('Y-m-d H:i:s', filemtime($filePath)),
                'filesize'       => $filesize,
            ];
        }

        // 2. Backward compatibility: check for legacy Sizar POS Version Marker
        if (preg_match('/--\s*POS25_DB_VERSION:\s*(\d+)/i', $chunk, $m) ||
            preg_match('/INSERT\s+INTO\s+(?:`?\w+`?\.)?`?system_version`?[^;]*VALUES\s*\(\s*\d+\s*,\s*(\d+)/i', $chunk, $m)) {
            $schemaVersion = (int) $m[1];
            return [
                'is_sizar_pos'   => true,
                'is_legacy'      => true,
                'preset'         => 'phone_repair', // default legacy
                'store_name'     => 'Legacy Sizar POS Backup',
                'schema_version' => $schemaVersion,
                'app_version'    => '1.0.0',
                'backup_date'    => date('Y-m-d H:i:s', filemtime($filePath)),
                'filesize'       => $filesize,
            ];
        }

        // 3. Foreign / Alien Database Rejection:
        // Any generic MySQL dump (WordPress, PrestaShop, random SQL) lacking the Sizar marker is strictly rejected
        return [
            'is_sizar_pos' => false,
            'is_legacy'    => false,
            'error'        => 'Security check failed: File lacks authentic Sizar POS Pro signature. Foreign or non-POS database files are strictly rejected.',
            'filesize'     => $filesize,
        ];
    }

    /**
     * Inspect an uploaded backup file and return its Sizar Store Manifest
     * without touching or altering the database.
     */
    public function inspectUploadedFile(): void
    {
        if ($postOverflowError = $this->checkPostMaxSizeOverflow()) {
            Response::json(['error' => $postOverflowError], 413);
            return;
        }

        if (!isset($_FILES['backup_file']) || $_FILES['backup_file']['error'] !== UPLOAD_ERR_OK) {
            $errorCode = $_FILES['backup_file']['error'] ?? UPLOAD_ERR_NO_FILE;
            Response::json(['error' => $this->getUploadErrorMessage($errorCode)], 400);
            return;
        }

        $uploadedFile = $_FILES['backup_file'];
        $tmpPath = $uploadedFile['tmp_name'];

        $manifest = self::inspectBackupStreamHeader($tmpPath);
        if (!$manifest['is_sizar_pos']) {
            Response::json([
                'ok'    => false,
                'error' => $manifest['error'] ?? 'Security check failed: File lacks authentic Sizar POS Pro signature. Foreign or non-POS database files are strictly rejected.'
            ], 422);
            return;
        }

        $preset = $manifest['preset'] ?? 'phone_repair';
        require_once __DIR__ . '/../Services/LicenseService.php';
        $isStoreAllowed = LicenseService::isStoreAllowed($preset);
        $allowedStores = LicenseService::getAllowedStores();

        Response::json([
            'ok'       => true,
            'manifest' => [
                'is_sizar_pos'         => true,
                'is_legacy'            => $manifest['is_legacy'] ?? false,
                'preset'               => $preset,
                'store_name'           => $manifest['store_name'] ?? 'Sizar POS Store',
                'schema_version'       => $manifest['schema_version'] ?? 1,
                'app_version'          => $manifest['app_version'] ?? Version::APP,
                'backup_date'          => $manifest['backup_date'] ?? date('Y-m-d H:i:s'),
                'filesize'             => (int) $uploadedFile['size'],
                'filename'             => $uploadedFile['name'],
                'is_allowed_by_license'=> $isStoreAllowed,
                'allowed_stores'       => $allowedStores,
                'license_error'        => !$isStoreAllowed ? "The backup file belongs to store activity '{$preset}', which is not permitted by your active license. Please upgrade your license or select an authorized backup." : null,
            ]
        ]);
    }

    /**
     * Automatic Pre-Restore Safety Snapshot: captures an emergency snapshot
     * before executing any database wipe/restore on a live running system.
     */
    public function createAutomaticPreRestoreSnapshot(): ?string
    {
        try {
            $config = $this->getDbConfig();
            $timestamp = date('Ymd_His');
            $snapFilename = "auto_pre_restore_{$timestamp}.sql.gz";
            $snapPath = $this->backupsDir . '/' . $snapFilename;

            $host = escapeshellarg($config['host']);
            $port = (int)($config['port'] ?? 3306);
            $user = escapeshellarg($config['username']);
            $dbName = escapeshellarg($config['database']);
            $tlsFlag = !empty($config['use_tls']) ? ' --ssl-mode=REQUIRED' : '';

            $tempSql = $this->backupsDir . "/temp_snap_{$timestamp}.sql";
            putenv("MYSQL_PWD=" . $config['password']);

            $dumpCmd = "{$this->mysqldumpPath} --host={$host} --port={$port} --user={$user}{$tlsFlag} --max-allowed-packet=512M --default-character-set=utf8mb4 --single-transaction --quick --extended-insert --hex-blob --routines --triggers --result-file=" . escapeshellarg($tempSql) . " {$dbName} 2>&1";

            $out = [];
            $rc = 0;
            exec($dumpCmd, $out, $rc);
            putenv("MYSQL_PWD");

            if ($rc === 0 && file_exists($tempSql) && filesize($tempSql) > 0) {
                if (function_exists('gzopen')) {
                    $db = Database::getConnection();
                    $manifestHeader = self::buildStoreManifestHeader($db);
                    $inFp = @fopen($tempSql, 'rb');
                    $outGz = @gzopen($snapPath, 'wb9');
                    if ($inFp && $outGz) {
                        gzwrite($outGz, $manifestHeader . "\n");
                        while (!feof($inFp)) {
                            $buf = fread($inFp, 65536);
                            if ($buf === false || $buf === '') break;
                            gzwrite($outGz, $buf);
                        }
                        gzwrite($outGz, "\n" . Version::backupMarker());
                        fclose($inFp);
                        gzclose($outGz);
                        @unlink($tempSql);

                        // Also record in backups table
                        try {
                            $db->prepare("INSERT INTO backups (uid, filename, filesize, type, status, created_at) VALUES (:uid, :fn, :fs, 'automatic', 'completed', NOW())")
                               ->execute([
                                   'uid' => 'BKP-PRE-' . $timestamp,
                                   'fn'  => $snapFilename,
                                   'fs'  => filesize($snapPath)
                               ]);
                        } catch (\Throwable $e) {}

                        return $snapFilename;
                    }
                }
            }
            if (file_exists($tempSql)) @unlink($tempSql);
        } catch (\Throwable $e) {
            error_log('[BackupController] Pre-restore snapshot failed: ' . $e->getMessage());
        }
        return null;
    }
}

/* [END_OF_MODULE_SECURITY_SEAL] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
