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

class BillsController
{
    private const FREQUENCIES = ['weekly', 'monthly', 'quarterly', 'yearly', 'custom'];

    private static bool $tablesEnsured = false;

    private function ensureAllTables(PDO $db): void
    {
        if (self::$tablesEnsured || $db->inTransaction()) {
            return;
        }
        self::$tablesEnsured = true;

        // Fast-path: if tables already exist, eliminate per-request DDL / information_schema scans
        try {
            $fastCheck = $db->query("SELECT 1 FROM bill_share_payments LIMIT 1");
            if ($fastCheck !== false) {
                return;
            }
        } catch (\Throwable $e) {
            // Cold install fallback
        }

        $this->ensureBillsColumnsRaw($db);
        $this->ensureBillPaymentsTableRaw($db);
        $this->ensureBillHistoryTableRaw($db);
        $this->ensureBillPeriodsTableRaw($db);
        $this->ensureBillSharesTablesRaw($db);
    }

    private function ensureBillsTable(PDO $db): void
    {
        // Create the bills table if missing so the feature self-heals on an
        // existing v1 database without waiting for "Verify & build" (the table is
        // otherwise only created by schema.sql). Mirrors ensureSuppliersTable.
        $db->exec("CREATE TABLE IF NOT EXISTS bills (
            id INT AUTO_INCREMENT PRIMARY KEY,
            uid VARCHAR(50) UNIQUE DEFAULT NULL,
            name VARCHAR(190) NOT NULL,
            category VARCHAR(50) NULL,
            amount DECIMAL(32,16) NOT NULL DEFAULT 0,
            frequency VARCHAR(20) NOT NULL DEFAULT 'monthly',
            interval_days INT NULL,
            next_due_date DATE NULL,
            active TINYINT(1) NOT NULL DEFAULT 1,
            note TEXT NULL,
            created_by INT NULL,
            edited_by INT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NULL,
            deleted_at DATETIME NULL,
            deleted_by INT NULL,
            delete_reason TEXT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
    }

    private function ensureBillsColumnsRaw(PDO $db): void
    {
        $this->ensureBillsTable($db);

        $columns = [
            'uid'           => 'VARCHAR(50) UNIQUE DEFAULT NULL',
            'category'      => 'VARCHAR(50) NULL',
            'provider_name'       => 'VARCHAR(190) NULL',
            'amount'              => 'DECIMAL(32,16) NOT NULL DEFAULT 0',
            'estimated_amount'    => 'DECIMAL(32,16) NULL DEFAULT NULL',
            'frequency'           => "VARCHAR(20) NOT NULL DEFAULT 'monthly'",
            'interval_days'       => 'INT NULL',
            'due_day'             => 'INT NULL',
            'first_due_date'      => 'DATE NULL',
            'next_due_date'       => 'DATE NULL',
            'cycle_anchor_date'   => 'DATE NULL',
            'is_archived'         => 'TINYINT(1) NOT NULL DEFAULT 0',
            'is_paused'           => 'TINYINT(1) NOT NULL DEFAULT 0',
            'active'              => 'TINYINT(1) NOT NULL DEFAULT 1',
            'default_cash_source' => "VARCHAR(20) NOT NULL DEFAULT 'vault'",
            'receipt_ref'         => 'VARCHAR(100) NULL',
            'receipt_image'       => 'LONGTEXT NULL',
            'receipt_image_name'  => 'VARCHAR(255) NULL',
            'paused_at'           => 'DATETIME NULL',
            'paused_by'           => 'INT NULL',
            'resumed_at'          => 'DATETIME NULL',
            'resumed_by'          => 'INT NULL',
            'note'                => 'TEXT NULL',
            'edited_by'           => 'INT NULL',
            'updated_at'          => 'DATETIME NULL',
            'deleted_at'          => 'DATETIME NULL',
            'deleted_by'          => 'INT NULL',
            'delete_reason'       => 'TEXT NULL',
        ];

        foreach ($columns as $column => $definition) {
            $stmt = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'bills' AND COLUMN_NAME = :column");
            $stmt->execute(['column' => $column]);
            if (!$stmt->fetch()) {
                $db->exec("ALTER TABLE bills ADD COLUMN $column $definition");
            }
        }
    }


    private function ensureBillsColumns(PDO $db): void { $this->ensureAllTables($db); }
    private function ensureBillPaymentsTable(PDO $db): void { $this->ensureAllTables($db); }
    private function ensureBillHistoryTable(PDO $db): void { $this->ensureAllTables($db); }
    private function ensureBillPeriodsTable(PDO $db): void { $this->ensureAllTables($db); }
    private function ensureBillSharesTables(PDO $db): void { $this->ensureAllTables($db); }
    /** Add a column to a table if it's missing (idempotent, for existing v1 DBs). */
    private function ensureColumn(PDO $db, string $table, string $column, string $definition): void
    {
        $stmt = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = :t AND COLUMN_NAME = :c");
        $stmt->execute(['t' => $table, 'c' => $column]);
        if (!$stmt->fetch()) {
            try { $db->exec("ALTER TABLE `$table` ADD COLUMN $column $definition"); } catch (PDOException $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        }
    }

    private function ensureBillPaymentsTableRaw(PDO $db): void
    {
        $db->exec("CREATE TABLE IF NOT EXISTS bill_payments (
            id INT AUTO_INCREMENT PRIMARY KEY,
            bill_id INT NOT NULL,
            period_label VARCHAR(40) NULL,
            amount DECIMAL(32,16) NOT NULL DEFAULT 0,
            paid_at DATETIME NOT NULL,
            paid_by INT NULL,
            note TEXT NULL,
            created_at DATETIME NOT NULL,
            voided_at DATETIME NULL,
            voided_by INT NULL,
            void_reason VARCHAR(255) NULL,
            FOREIGN KEY (bill_id) REFERENCES bills(id),
            FOREIGN KEY (paid_by) REFERENCES users(id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        // Void support (additive on existing v1 DBs): a voided payment stays in the
        // records but no longer counts toward paid totals / the dashboard.
        $this->ensureColumn($db, 'bill_payments', 'voided_at', 'DATETIME NULL');
        $this->ensureColumn($db, 'bill_payments', 'voided_by', 'INT NULL');
        $this->ensureColumn($db, 'bill_payments', 'void_reason', 'VARCHAR(255) NULL');
    }

    private function ensureBillHistoryTableRaw(PDO $db): void
    {
        $db->exec("CREATE TABLE IF NOT EXISTS bill_history (
            id INT AUTO_INCREMENT PRIMARY KEY,
            bill_id INT NOT NULL,
            edited_by INT NOT NULL,
            action VARCHAR(50) NOT NULL,
            changes JSON NULL,
            reason TEXT NULL,
            created_at DATETIME NOT NULL,
            FOREIGN KEY (bill_id) REFERENCES bills(id),
            FOREIGN KEY (edited_by) REFERENCES users(id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
    }

    private function ensureBillPeriodsTableRaw(PDO $db): void
    {
        $db->exec("CREATE TABLE IF NOT EXISTS bill_periods (
            id INT AUTO_INCREMENT PRIMARY KEY,
            bill_id INT NOT NULL,
            period_label VARCHAR(40) NOT NULL,
            due_date DATE NULL,
            expected_amount DECIMAL(32,16) NOT NULL DEFAULT 0,
            actual_amount DECIMAL(32,16) NULL,
            amount_paid DECIMAL(32,16) NOT NULL DEFAULT 0,
            status VARCHAR(20) NOT NULL DEFAULT 'open',
            opened_at DATETIME NOT NULL,
            opened_by INT NULL,
            settled_at DATETIME NULL,
            note TEXT NULL,
            created_at DATETIME NOT NULL,
            UNIQUE KEY uniq_bill_period (bill_id, period_label),
            FOREIGN KEY (bill_id) REFERENCES bills(id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        // Link column on bill_payments (additive on existing v1 DBs).
        $stmt = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'bill_payments' AND COLUMN_NAME = 'period_id'");
        $stmt->execute();
        if (!$stmt->fetch()) {
            // bill_payments may not exist yet on a brand-new DB; guard it.
            try { $db->exec("ALTER TABLE bill_payments ADD COLUMN period_id INT NULL AFTER bill_id"); } catch (PDOException $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        }
    }

    private function ensureBillSharesTablesRaw(PDO $db): void
    {
        $db->exec("CREATE TABLE IF NOT EXISTS bill_shares (
            id INT AUTO_INCREMENT PRIMARY KEY,
            period_id INT NOT NULL,
            bill_id INT NOT NULL,
            user_id INT NOT NULL,
            owed_amount DECIMAL(32,16) NOT NULL DEFAULT 0,
            amount_paid DECIMAL(32,16) NOT NULL DEFAULT 0,
            status VARCHAR(20) NOT NULL DEFAULT 'accepted',
            requested_by INT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NULL,
            FOREIGN KEY (period_id) REFERENCES bill_periods(id),
            FOREIGN KEY (bill_id) REFERENCES bills(id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $db->exec("CREATE TABLE IF NOT EXISTS bill_share_payments (
            id INT AUTO_INCREMENT PRIMARY KEY,
            share_id INT NOT NULL,
            bill_id INT NOT NULL,
            period_id INT NOT NULL,
            user_id INT NOT NULL,
            amount DECIMAL(32,16) NOT NULL DEFAULT 0,
            source VARCHAR(10) NOT NULL DEFAULT 'profit',
            disposition VARCHAR(10) NOT NULL DEFAULT 'remove',
            paid_at DATETIME NOT NULL,
            paid_by INT NULL,
            note TEXT NULL,
            created_at DATETIME NOT NULL,
            voided_at DATETIME NULL,
            voided_by INT NULL,
            void_reason VARCHAR(255) NULL,
            FOREIGN KEY (share_id) REFERENCES bill_shares(id),
            FOREIGN KEY (bill_id) REFERENCES bills(id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        // Additive on existing v1 DBs that already had bill_share_payments without
        // the disposition column (remove = deduct from books, keep = record only).
        $stmt = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'bill_share_payments' AND COLUMN_NAME = 'disposition'");
        $stmt->execute();
        if (!$stmt->fetch()) {
            try { $db->exec("ALTER TABLE bill_share_payments ADD COLUMN disposition VARCHAR(10) NOT NULL DEFAULT 'remove' AFTER source"); } catch (PDOException $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        }

        // Void support (additive): a voided installment stays in the records but no
        // longer counts toward the share/period paid totals or the dashboard P&L.
        $this->ensureColumn($db, 'bill_share_payments', 'voided_at', 'DATETIME NULL');
        $this->ensureColumn($db, 'bill_share_payments', 'voided_by', 'INT NULL');
        $this->ensureColumn($db, 'bill_share_payments', 'void_reason', 'VARCHAR(255) NULL');
    }

    /**
     * Auto-accrual: for an active bill whose due date has arrived/passed, open an
     * OPEN period (the obligation we owe) for each elapsed cycle and march
     * next_due_date forward into the future. Idempotent via the unique
     * (bill_id, period_label) key, so it's safe to run on every index() load — no
     * cron needed. Capped so a long-dormant bill can't spin forever.
     */
    private function accrueBillPeriods(PDO $db, array $bill): void
    {
        if (empty($bill['active']) || !empty($bill['deleted_at'])) {
            return;
        }
        $due = $bill['next_due_date'];
        if (!$due) {
            return;
        }
        $freq = $this->normFrequency($bill['frequency']);
        $interval = $bill['interval_days'] !== null ? (int) $bill['interval_days'] : null;
        $today = date('Y-m-d');
        $guard = 0;
        $ins = $db->prepare("INSERT IGNORE INTO bill_periods (bill_id, period_label, due_date, expected_amount, amount_paid, status, opened_at, created_at) VALUES (:bid, :label, :due, :exp, 0, 'open', NOW(), NOW())");
        $targetDay = !empty($bill['due_day']) ? (int)$bill['due_day'] : (!empty($bill['first_due_date']) ? (int)date('j', strtotime($bill['first_due_date'])) : (int)date('j', strtotime($bill['next_due_date'] ?? 'today')));
        while ($due && $due <= $today && $guard < 120) {
            $label = $this->periodLabel($due, $freq);
            $ins->execute([
                'bid'   => $bill['id'],
                'label' => $label,
                'due'   => $due,
                'exp'   => (string) $bill['amount'],
            ]);
            $due = $this->advanceDueDate($due, $freq, $interval, $targetDay);
            $guard++;
        }
        if ($due !== $bill['next_due_date']) {
            $db->prepare("UPDATE bills SET next_due_date = :nd WHERE id = :id")
                ->execute(['nd' => $due, 'id' => $bill['id']]);
        }
    }

    /** Normalise + validate a frequency string, defaulting to monthly. */
    private function normFrequency($freq): string
    {
        $freq = strtolower(trim((string) $freq));
        return in_array($freq, self::FREQUENCIES, true) ? $freq : 'monthly';
    }

    /** Clamp an amount string to >= 0, defaulting non-numeric input to '0'. */
    private function normAmount($amount): string
    {
        $amount = (string) ($amount ?? '0');
        if (!is_numeric($amount)) {
            return '0';
        }
        return Decimal::comp($amount, '0') < 0 ? '0' : $amount;
    }

    /** Normalise a date input to Y-m-d, or null when empty/invalid. */
    private function normDate($value): ?string
    {
        if ($value === null || $value === '') {
            return null;
        }
        $ts = strtotime((string) $value);
        return $ts === false ? null : date('Y-m-d', $ts);
    }

    /**
     * Advance a due date by one period of the given frequency. Month-based steps
     * clamp to the end of the target month (e.g. Jan 31 + 1 month -> Feb 28/29)
     * while preserving targetDay (e.g. 31) across subsequent months.
     */
    private function advanceDueDate(?string $current, string $frequency, ?int $intervalDays, ?int $targetDay = null): string
    {
        try {
            $d = new DateTime($current ?: 'today');
        } catch (Exception $e) {
            $d = new DateTime('today');
        }

        $effectiveTargetDay = ($targetDay !== null && $targetDay >= 1 && $targetDay <= 31) 
            ? $targetDay 
            : (int) $d->format('j');

        switch ($frequency) {
            case 'weekly':
                $d->modify('+7 days');
                break;
            case 'quarterly':
                $this->addMonths($d, 3, $effectiveTargetDay);
                break;
            case 'yearly':
                $this->addMonths($d, 12, $effectiveTargetDay);
                break;
            case 'custom':
                $n = ($intervalDays && $intervalDays > 0) ? $intervalDays : 30;
                $d->modify('+' . $n . ' days');
                break;
            case 'monthly':
            default:
                $this->addMonths($d, 1, $effectiveTargetDay);
                break;
        }

        return $d->format('Y-m-d');
    }

    /** Add whole months to a DateTime, clamping the day to the target month length while preserving targetDay. */
    private function addMonths(DateTime $d, int $months, ?int $targetDay = null): void
    {
        $day = ($targetDay !== null && $targetDay >= 1 && $targetDay <= 31) ? $targetDay : (int) $d->format('j');
        $d->modify('first day of this month');
        $d->modify('+' . $months . ' months');
        $daysInMonth = (int) $d->format('t');
        $d->setDate((int) $d->format('Y'), (int) $d->format('n'), min($day, $daysInMonth));
    }

    /** Human label for the period a due date belongs to (e.g. "2026-06" or a full date). */
    private function periodLabel(?string $dueDate, string $frequency): string
    {
        $ts = $dueDate ? strtotime($dueDate) : time();
        if ($ts === false) {
            $ts = time();
        }
        if ($frequency === 'weekly' || $frequency === 'custom') {
            return date('Y-m-d', $ts);
        }
        return date('Y-m', $ts);
    }

    /**
     * Commit / roll back only if a transaction is actually still active. Defensive:
     * any DDL run mid-transaction (CREATE/ALTER — including the CREATE TABLE IF NOT
     * EXISTS hidden inside SystemLog::write on its first call) implicitly commits in
     * MySQL, which would otherwise make a plain commit()/rollBack() throw
     * "There is no active transaction". SystemLog is also kept OUT of transactions.
     */
    private function safeCommit(PDO $db): void
    {
        if ($db->inTransaction()) {
            $db->commit();
        }
    }

    private function safeRollback(PDO $db): void
    {
        if ($db->inTransaction()) {
            $db->rollBack();
        }
    }

    public function index(): void
    {
        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillPaymentsTable($db);
        $this->ensureBillPeriodsTable($db);
        $this->ensureBillSharesTables($db);

        // Auto-accrue obligations for every active bill whose due date has passed,
        // so "we owe the company" is tracked even before anyone marks it paid.
        foreach ($db->query('SELECT * FROM bills WHERE deleted_at IS NULL AND active = 1')->fetchAll() as $b) {
            $this->accrueBillPeriods($db, $b);
        }

        $showDeleted = isset($_GET['show_deleted']) && $_GET['show_deleted'] === 'true';

        if ($showDeleted) {
            $bills = $db->query('SELECT * FROM bills ORDER BY active DESC, next_due_date IS NULL, next_due_date ASC, id DESC')->fetchAll();
        } else {
            $bills = $db->query('SELECT * FROM bills WHERE deleted_at IS NULL ORDER BY active DESC, next_due_date IS NULL, next_due_date ASC, id DESC')->fetchAll();
        }

        // Attach the open (owed) periods + the total still owed to each bill.
        $ps = $db->prepare("SELECT * FROM bill_periods WHERE bill_id = :id AND status IN ('open','partial') ORDER BY due_date ASC, id ASC");
        foreach ($bills as &$bill) {
            $ps->execute(['id' => $bill['id']]);
            $open = $ps->fetchAll();
            $owed = '0';
            foreach ($open as $p) {
                $base = ($p['actual_amount'] !== null && $p['actual_amount'] !== '') ? (string) $p['actual_amount'] : (string) $p['expected_amount'];
                $rem = Decimal::sub($base, (string) $p['amount_paid']);
                if (Decimal::comp($rem, '0') > 0) {
                    $owed = Decimal::add($owed, $rem);
                }
            }
            $bill['open_periods'] = $open;
            $bill['open_periods_count'] = count($open);
            $bill['owed_amount'] = $owed;
        }
        unset($bill);

        Response::json(['bills' => $bills]);
    }

    public function store(array $data): void
    {
        $name = trim($data['name'] ?? '');
        if ($name === '') {
            Response::json(['error' => 'Bill name required'], 400);
            return;
        }

        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillHistoryTable($db);

        $frequency = $this->normFrequency($data['frequency'] ?? 'monthly');
        $amount = $this->normAmount($data['amount'] ?? '0');
        $intervalDays = ($frequency === 'custom' && isset($data['interval_days']) && (int) $data['interval_days'] > 0)
            ? (int) $data['interval_days'] : null;
        // First due date: explicit value, else today.
        $nextDue = $this->normDate($data['next_due_date'] ?? ($data['first_due_date'] ?? null)) ?? date('Y-m-d');
        $active = array_key_exists('active', $data) ? (int) (!empty($data['active'])) : 1;
        $category = isset($data['category']) && $data['category'] !== '' ? substr(trim((string) $data['category']), 0, 50) : null;

        // Generate UID: BILL-YYYYMMDD-XXXXXX (matching supplier/customer format).
        $uid = 'BILL-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));

        $stmt = $db->prepare('INSERT INTO bills (uid, name, category, amount, frequency, interval_days, next_due_date, active, note, created_by, created_at) VALUES (:uid, :name, :category, :amount, :frequency, :interval_days, :next_due_date, :active, :note, :created_by, NOW())');
        $stmt->execute([
            'uid'           => $uid,
            'name'          => $name,
            'category'      => $category,
            'amount'        => $amount,
            'frequency'     => $frequency,
            'interval_days' => $intervalDays,
            'next_due_date' => $nextDue,
            'active'        => $active,
            'note'          => $data['note'] ?? null,
            'created_by'    => $_SESSION['user_id'] ?? null,
        ]);

        $billId = (int) $db->lastInsertId();

        $histStmt = $db->prepare('INSERT INTO bill_history (bill_id, edited_by, action, changes, created_at) VALUES (:bid, :by, :action, :changes, NOW())');
        $histStmt->execute([
            'bid'     => $billId,
            'by'      => $_SESSION['user_id'] ?? 1,
            'action'  => 'created',
            'changes' => json_encode(['uid' => $uid, 'name' => $name, 'category' => $category, 'amount' => $amount, 'frequency' => $frequency, 'next_due_date' => $nextDue, 'active' => $active]),
        ]);

        SystemLog::write('bills', 'created', $billId, $name, json_encode([
            'uid' => $uid,
            'amount' => $amount,
            'frequency' => $frequency,
            'next_due_date' => $nextDue,
            'status' => 'active',
        ]));

        Response::json(['id' => $billId, 'uid' => $uid], 201);
    }

    public function update(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillHistoryTable($db);

        $stmt = $db->prepare('SELECT * FROM bills WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $bill = $stmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        $name = array_key_exists('name', $data) ? trim((string) $data['name']) : $bill['name'];
        if ($name === '') {
            Response::json(['error' => 'Bill name required'], 400);
            return;
        }
        $frequency = array_key_exists('frequency', $data) ? $this->normFrequency($data['frequency']) : $bill['frequency'];
        $amount = array_key_exists('amount', $data) ? $this->normAmount($data['amount']) : (string) $bill['amount'];
        $intervalDays = $bill['interval_days'] !== null ? (int) $bill['interval_days'] : null;
        if (array_key_exists('interval_days', $data) || array_key_exists('frequency', $data)) {
            $intervalDays = ($frequency === 'custom' && isset($data['interval_days']) && (int) $data['interval_days'] > 0)
                ? (int) $data['interval_days']
                : ($frequency === 'custom' ? $intervalDays : null);
        }
        $nextDue = array_key_exists('next_due_date', $data) ? ($this->normDate($data['next_due_date']) ?? $bill['next_due_date']) : $bill['next_due_date'];
        $active = array_key_exists('active', $data) ? (int) (!empty($data['active'])) : (int) $bill['active'];
        $category = array_key_exists('category', $data)
            ? ($data['category'] !== '' ? substr(trim((string) $data['category']), 0, 50) : null)
            : $bill['category'];
        $note = array_key_exists('note', $data) ? $data['note'] : $bill['note'];

        // Track human-readable field changes for the audit log.
        $changes = [];
        $compare = [
            'name'          => [$bill['name'], $name],
            'category'      => [$bill['category'], $category],
            'amount'        => [(string) $bill['amount'], $amount],
            'frequency'     => [$bill['frequency'], $frequency],
            'interval_days' => [$bill['interval_days'], $intervalDays],
            'next_due_date' => [$bill['next_due_date'], $nextDue],
            'active'        => [(int) $bill['active'], $active],
            'note'          => [$bill['note'], $note],
        ];
        foreach ($compare as $field => $pair) {
            if ((string) ($pair[0] ?? '') !== (string) ($pair[1] ?? '')) {
                $changes[$field] = ['from' => $pair[0], 'to' => $pair[1]];
            }
        }

        $stmt = $db->prepare('UPDATE bills SET name = :name, category = :category, amount = :amount, frequency = :frequency, interval_days = :interval_days, next_due_date = :next_due_date, active = :active, note = :note, edited_by = :edited_by, updated_at = NOW() WHERE id = :id');
        $stmt->execute([
            'name'          => $name,
            'category'      => $category,
            'amount'        => $amount,
            'frequency'     => $frequency,
            'interval_days' => $intervalDays,
            'next_due_date' => $nextDue,
            'active'        => $active,
            'note'          => $note,
            'edited_by'     => $_SESSION['user_id'] ?? null,
            'id'            => $id,
        ]);

        if (!empty($changes)) {
            $histStmt = $db->prepare('INSERT INTO bill_history (bill_id, edited_by, action, changes, created_at) VALUES (:bid, :by, :action, :changes, NOW())');
            $histStmt->execute([
                'bid'     => $id,
                'by'      => $_SESSION['user_id'] ?? 1,
                'action'  => 'updated',
                'changes' => json_encode($changes),
            ]);

            SystemLog::write('bills', 'updated', (int) $id, $name, json_encode(array_merge(
                ['uid' => $bill['uid'] ?? null],
                $changes
            )));
        }

        Response::json(['ok' => true]);
    }

    public function destroy(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillHistoryTable($db);

        $stmt = $db->prepare('SELECT id, name, uid FROM bills WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $bill = $stmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        $input = json_decode(file_get_contents('php://input'), true);
        $deleteReason = trim($input['delete_reason'] ?? '');
        if ($deleteReason === '') {
            Response::json(['error' => 'Deletion reason is required'], 400);
            return;
        }

        $stmt = $db->prepare('UPDATE bills SET deleted_at = NOW(), deleted_by = :deleted_by, delete_reason = :delete_reason WHERE id = :id');
        $stmt->execute([
            'deleted_by'    => $_SESSION['user_id'] ?? null,
            'delete_reason' => $deleteReason,
            'id'            => $id,
        ]);

        $histStmt = $db->prepare('INSERT INTO bill_history (bill_id, edited_by, action, reason, created_at) VALUES (:bid, :by, :action, :reason, NOW())');
        $histStmt->execute([
            'bid'    => $id,
            'by'     => $_SESSION['user_id'] ?? 1,
            'action' => 'deleted',
            'reason' => $deleteReason,
        ]);

        SystemLog::write('bills', 'deleted', (int) $id, $bill['name'], json_encode([
            'uid' => $bill['uid'] ?? null,
            'reason' => $deleteReason,
            'status' => 'deleted',
        ]));

        Response::json(['ok' => true]);
    }

    public function restore(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillHistoryTable($db);

        $stmt = $db->prepare('SELECT id, name FROM bills WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $bill = $stmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        $input = json_decode(file_get_contents('php://input'), true);
        $restoreReason = trim($input['restore_reason'] ?? '');
        if ($restoreReason === '') {
            Response::json(['error' => 'Restore reason is required'], 400);
            return;
        }

        $stmt = $db->prepare('UPDATE bills SET deleted_at = NULL, deleted_by = NULL, delete_reason = NULL WHERE id = :id');
        $stmt->execute(['id' => $id]);

        $histStmt = $db->prepare('INSERT INTO bill_history (bill_id, edited_by, action, reason, created_at) VALUES (:bid, :by, :action, :reason, NOW())');
        $histStmt->execute([
            'bid'    => $id,
            'by'     => $_SESSION['user_id'] ?? 1,
            'action' => 'restored',
            'reason' => $restoreReason,
        ]);

        SystemLog::write('bills', 'restored', (int) $id, $bill['name'], json_encode([
            'reason' => $restoreReason,
            'status' => 'active',
        ]));

        Response::json(['ok' => true]);
    }

    /**
     * Record a payment for the current period and advance next_due_date by one
     * frequency step. Inserts a bill_payments row; never deletes/voids. Amount
     * defaults to the bill's configured amount but may be edited (partial / actual).
     */
    public function pay(string $id, array $data): void
    {
        $db = Database::getConnection();
        // All table/column DDL must run BEFORE beginTransaction(): MySQL implicitly
        // commits on DDL (CREATE/ALTER), which would otherwise end the transaction
        // mid-flight and make the final commit() throw "no active transaction".
        $this->ensureBillsColumns($db);
        $this->ensureBillPaymentsTable($db);
        $this->ensureBillPeriodsTable($db);
        $this->ensureBillSharesTables($db);
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT * FROM bills WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $bill = $stmt->fetch();
        if (!$bill) {
            $db->rollBack();
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }
        if ($bill['deleted_at']) {
            $db->rollBack();
            Response::json(['error' => 'Cannot record a payment on a deleted bill'], 400);
            return;
        }

        // Amount paid now: defaults to the bill's configured amount.
        $amount = (isset($data['amount']) && $data['amount'] !== '' && $data['amount'] !== null)
            ? $this->normAmount($data['amount'])
            : (string) $bill['amount'];
        if (Decimal::comp($amount, '0') <= 0) {
            $db->rollBack();
            Response::json(['error' => 'Payment amount must be greater than zero'], 400);
            return;
        }

        $frequency = $this->normFrequency($bill['frequency']);
        $dueBefore = $bill['next_due_date'];
        $note = isset($data['note']) && $data['note'] !== '' ? (string) $data['note'] : null;

        // Payment date: back-datable for recording a bill that was paid in the past
        // (the real payment date is independent of the bill's creation date).
        // Defaults to now. A bare date (Y-m-d) is stored at midnight.
        $paidAtRaw = (isset($data['paid_at']) && $data['paid_at'] !== '' && $data['paid_at'] !== null)
            ? (string) $data['paid_at'] : null;
        $paidAt = $paidAtRaw ? ($this->normDate($paidAtRaw) ?: date('Y-m-d')) : date('Y-m-d H:i:s');

        // The period this payment settles: explicit override, else the period of the
        // paid date when back-dated, else the period currently due.
        $periodSource = $paidAtRaw ? $paidAt : $dueBefore;
        $period = (isset($data['period_label']) && $data['period_label'] !== '')
            ? (string) $data['period_label']
            : $this->periodLabel($periodSource, $frequency);

        // Historical back-fill records a past payment WITHOUT moving the schedule
        // (advance=false); a normal "Mark paid" settles a period (and accrual owns
        // the schedule advance).
        $advance = !array_key_exists('advance', $data) || !empty($data['advance']);

        // --- Historical back-fill: standalone payment row, schedule untouched. ---
        if (!$advance) {
            $ins = $db->prepare('INSERT INTO bill_payments (bill_id, period_id, period_label, amount, paid_at, paid_by, note, created_at) VALUES (:bid, NULL, :period, :amount, :paid_at, :paid_by, :note, NOW())');
            $ins->execute(['bid' => $id, 'period' => $period, 'amount' => $amount, 'paid_at' => $paidAt, 'paid_by' => $_SESSION['user_id'] ?? null, 'note' => $note]);
            $this->safeCommit($db);
            SystemLog::write('bills', 'bill_paid', (int) $id, $bill['name'] ?? "Bill #$id", json_encode([
                'uid' => $bill['uid'] ?? null, 'period' => $period, 'amount' => $amount, 'paid_at' => $paidAt, 'historical' => true,
            ]));
            Response::json(['ok' => true, 'period' => $period, 'amount' => $amount, 'paid_at' => $paidAt, 'historical' => true]);
            return;
        }

        // --- Normal "Mark paid": accrue, then settle the oldest open/partial period
        // (FIFO). If nothing is due yet (early payment), open the upcoming cycle and
        // advance the schedule one step. (Tables already ensured above the tx.) ---
        $this->accrueBillPeriods($db, $bill);

        $targetId = (isset($data['period_id']) && (int) $data['period_id'] > 0) ? (int) $data['period_id'] : null;
        if ($targetId) {
            $pst = $db->prepare('SELECT * FROM bill_periods WHERE id = :pid AND bill_id = :bid FOR UPDATE');
            $pst->execute(['pid' => $targetId, 'bid' => $id]);
            $periodRow = $pst->fetch();
        } else {
            $pst = $db->prepare("SELECT * FROM bill_periods WHERE bill_id = :bid AND status IN ('open','partial') ORDER BY due_date ASC, id ASC LIMIT 1");
            $pst->execute(['bid' => $id]);
            $periodRow = $pst->fetch();
        }

        if (!$periodRow) {
            // Early payment — open the upcoming cycle and march the schedule forward.
            $reload = $db->prepare('SELECT next_due_date FROM bills WHERE id = :id');
            $reload->execute(['id' => $id]);
            $due = ($reload->fetch()['next_due_date'] ?? null) ?: date('Y-m-d');
            $label = $this->periodLabel($due, $frequency);
            $db->prepare("INSERT IGNORE INTO bill_periods (bill_id, period_label, due_date, expected_amount, amount_paid, status, opened_at, opened_by, created_at) VALUES (:bid, :label, :due, :exp, 0, 'open', NOW(), :by, NOW())")
                ->execute(['bid' => $id, 'label' => $label, 'due' => $due, 'exp' => (string) $bill['amount'], 'by' => $_SESSION['user_id'] ?? null]);
            $pst2 = $db->prepare('SELECT * FROM bill_periods WHERE bill_id = :bid AND period_label = :label');
            $pst2->execute(['bid' => $id, 'label' => $label]);
            $periodRow = $pst2->fetch();
            $targetDay = !empty($bill['due_day']) ? (int)$bill['due_day'] : (!empty($bill['first_due_date']) ? (int)date('j', strtotime($bill['first_due_date'])) : (int)date('j', strtotime($bill['next_due_date'] ?? 'today')));
            $nd = $this->advanceDueDate($due, $frequency, $bill['interval_days'] !== null ? (int) $bill['interval_days'] : null, $targetDay);
            $db->prepare('UPDATE bills SET next_due_date = :nd, updated_at = NOW() WHERE id = :id')->execute(['nd' => $nd, 'id' => $id]);
        }

        $period = $periodRow['period_label'];
        $newPaid = Decimal::add((string) $periodRow['amount_paid'], $amount);
        // The entered amount is the period's actual amount (single-payer pay); if
        // they paid beyond a previously recorded actual, lift actual to what's paid.
        $actual = ($periodRow['actual_amount'] !== null && $periodRow['actual_amount'] !== '') ? (string) $periodRow['actual_amount'] : $amount;
        if (Decimal::comp($newPaid, $actual) > 0) {
            $actual = $newPaid;
        }
        $status = Decimal::comp($newPaid, $actual) >= 0 ? 'settled' : 'partial';
        $settledAt = $status === 'settled' ? date('Y-m-d H:i:s') : null;
        $db->prepare('UPDATE bill_periods SET actual_amount = :actual, amount_paid = :paid, status = :status, settled_at = :sa WHERE id = :pid')
            ->execute(['actual' => $actual, 'paid' => $newPaid, 'status' => $status, 'sa' => $settledAt, 'pid' => $periodRow['id']]);

        $ins = $db->prepare('INSERT INTO bill_payments (bill_id, period_id, period_label, amount, paid_at, paid_by, note, created_at) VALUES (:bid, :pid, :period, :amount, :paid_at, :paid_by, :note, NOW())');
        $ins->execute(['bid' => $id, 'pid' => $periodRow['id'], 'period' => $period, 'amount' => $amount, 'paid_at' => $paidAt, 'paid_by' => $_SESSION['user_id'] ?? null, 'note' => $note]);

        $this->safeCommit($db);

        SystemLog::write('bills', 'bill_paid', (int) $id, $bill['name'] ?? "Bill #$id", json_encode([
            'uid' => $bill['uid'] ?? null, 'period' => $period, 'amount' => $amount, 'paid_at' => $paidAt, 'period_status' => $status,
        ]));

        Response::json(['ok' => true, 'period' => $period, 'amount' => $amount, 'paid_at' => $paidAt, 'period_status' => $status]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) $db->rollBack();
            error_log("Failed to process bill payment in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to process bill payment. Please check server logs.'], 500);
        }
    }

    /**
     * Recompute a period's amount_paid + status from ALL of its money: legacy
     * single-payer bill_payments AND per-user bill_share_payments. Authoritative
     * for periods that use the per-user split. Lifts actual_amount up if paid beyond
     * it (over-payment), and marks the period settled once paid covers the amount.
     */
    private function recalcPeriod(PDO $db, int $periodId): void
    {
        $pst = $db->prepare('SELECT * FROM bill_periods WHERE id = :p');
        $pst->execute(['p' => $periodId]);
        $period = $pst->fetch();
        if (!$period) {
            return;
        }

        $a = $db->prepare('SELECT COALESCE(SUM(amount), 0) FROM bill_payments WHERE period_id = :p AND voided_at IS NULL');
        $a->execute(['p' => $periodId]);
        $sumLegacy = (string) $a->fetchColumn();

        $b = $db->prepare('SELECT COALESCE(SUM(amount), 0) FROM bill_share_payments WHERE period_id = :p AND voided_at IS NULL');
        $b->execute(['p' => $periodId]);
        $sumShare = (string) $b->fetchColumn();

        $paid = Decimal::add($sumLegacy, $sumShare);

        $base = ($period['actual_amount'] !== null && $period['actual_amount'] !== '')
            ? (string) $period['actual_amount']
            : (string) $period['expected_amount'];
        if (Decimal::comp($paid, $base) > 0) {
            $base = $paid; // over-payment lifts the recorded actual
        }

        if (Decimal::comp($base, '0') > 0 && Decimal::comp($paid, $base) >= 0) {
            $status = 'settled';
        } elseif (Decimal::comp($paid, '0') > 0) {
            $status = 'partial';
        } else {
            $status = 'open';
        }
        $settledAt = $status === 'settled' ? date('Y-m-d H:i:s') : null;

        $db->prepare('UPDATE bill_periods SET amount_paid = :paid, actual_amount = :actual, status = :st, settled_at = :sa WHERE id = :id')
            ->execute(['paid' => $paid, 'actual' => $base, 'st' => $status, 'sa' => $settledAt, 'id' => $periodId]);
    }

    /**
     * Recompute a single share's amount_paid + status from its non-voided
     * installments. Used after a payment is voided (the increment-on-pay path stays
     * fast, but voiding needs an authoritative re-sum). Never resurrects a refused
     * share, and keeps a still-pending (made-for-other) share pending until accepted.
     */
    private function recalcShare(PDO $db, int $shareId): void
    {
        $sst = $db->prepare('SELECT * FROM bill_shares WHERE id = :id');
        $sst->execute(['id' => $shareId]);
        $share = $sst->fetch();
        if (!$share) {
            return;
        }
        $sum = $db->prepare('SELECT COALESCE(SUM(amount), 0) FROM bill_share_payments WHERE share_id = :s AND voided_at IS NULL');
        $sum->execute(['s' => $shareId]);
        $paid = (string) $sum->fetchColumn();
        $owed = (string) $share['owed_amount'];

        if ($share['status'] === 'refused') {
            $status = 'refused';
        } elseif (Decimal::comp($owed, '0') > 0 && Decimal::comp($paid, $owed) >= 0) {
            $status = 'settled';
        } elseif ($share['status'] === 'pending') {
            $status = 'pending';
        } else {
            $status = 'accepted';
        }
        $db->prepare('UPDATE bill_shares SET amount_paid = :p, status = :st, updated_at = NOW() WHERE id = :id')
            ->execute(['p' => $paid, 'st' => $status, 'id' => $shareId]);
    }

    /**
     * Return every period of a bill (newest first) with its per-user shares (who
     * owes / who paid, plus approval status), each share carrying user + requester
     * names and the period its remaining balance. Powers the split editor + the
     * per-bill report.
     */
    public function periods(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillPaymentsTable($db);
        $this->ensureBillPeriodsTable($db);
        $this->ensureBillSharesTables($db);

        $bst = $db->prepare('SELECT * FROM bills WHERE id = :id');
        $bst->execute(['id' => $id]);
        $bill = $bst->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        // Make sure the latest owed period(s) exist before listing.
        $this->accrueBillPeriods($db, $bill);

        $pst = $db->prepare('SELECT * FROM bill_periods WHERE bill_id = :id ORDER BY due_date DESC, id DESC');
        $pst->execute(['id' => $id]);
        $periods = $pst->fetchAll();

        $shst = $db->prepare('SELECT s.*, u.username AS user_name, r.username AS requested_by_name
            FROM bill_shares s
            LEFT JOIN users u ON s.user_id = u.id
            LEFT JOIN users r ON s.requested_by = r.id
            WHERE s.period_id = :p ORDER BY s.id ASC');
        foreach ($periods as &$p) {

/* [INTERNAL_RUNTIME_FRAMEWORK_TOKEN] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
            $shst->execute(['p' => $p['id']]);
            $shares = $shst->fetchAll();
            $base = ($p['actual_amount'] !== null && $p['actual_amount'] !== '') ? (string) $p['actual_amount'] : (string) $p['expected_amount'];
            $rem = Decimal::sub($base, (string) $p['amount_paid']);
            $p['remaining'] = Decimal::comp($rem, '0') > 0 ? $rem : '0';
            $p['shares'] = $shares;
        }
        unset($p);

        Response::json(['bill' => $bill, 'periods' => $periods]);
    }

    /**
     * Record a period's actual amount and split it across participants (each gets a
     * bill_shares row). Self-made shares are 'accepted'; shares created for another
     * user are 'pending' until they accept (Phase 4). A clean re-split is allowed
     * only while no share has been paid yet.
     */
    public function splitPeriod(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillHistoryTable($db);
        $this->ensureBillPaymentsTable($db);
        $this->ensureBillPeriodsTable($db);
        $this->ensureBillSharesTables($db);
        $db->beginTransaction();

        $bst = $db->prepare('SELECT * FROM bills WHERE id = :id FOR UPDATE');
        $bst->execute(['id' => $id]);
        $bill = $bst->fetch();
        if (!$bill || $bill['deleted_at']) {
            $db->rollBack();
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        // Resolve the period: explicit id, else create one from a label/due date.
        $periodId = (isset($data['period_id']) && (int) $data['period_id'] > 0) ? (int) $data['period_id'] : null;
        if ($periodId) {
            $pst = $db->prepare('SELECT * FROM bill_periods WHERE id = :p AND bill_id = :b FOR UPDATE');
            $pst->execute(['p' => $periodId, 'b' => $id]);
            $period = $pst->fetch();
        } else {
            $freq = $this->normFrequency($bill['frequency']);
            $due = $this->normDate($data['due_date'] ?? null) ?: ($bill['next_due_date'] ?: date('Y-m-d'));
            $label = (isset($data['period_label']) && $data['period_label'] !== '') ? (string) $data['period_label'] : $this->periodLabel($due, $freq);
            $db->prepare("INSERT IGNORE INTO bill_periods (bill_id, period_label, due_date, expected_amount, amount_paid, status, opened_at, opened_by, created_at) VALUES (:b, :l, :d, :e, 0, 'open', NOW(), :by, NOW())")
                ->execute(['b' => $id, 'l' => $label, 'd' => $due, 'e' => (string) $bill['amount'], 'by' => $_SESSION['user_id'] ?? null]);
            $pst = $db->prepare('SELECT * FROM bill_periods WHERE bill_id = :b AND period_label = :l FOR UPDATE');
            $pst->execute(['b' => $id, 'l' => $label]);
            $period = $pst->fetch();
        }
        if (!$period) {
            $db->rollBack();
            Response::json(['error' => 'Period not found'], 404);
            return;
        }

        // Normalise + merge the requested shares (one row per user).
        $sharesIn = is_array($data['shares'] ?? null) ? $data['shares'] : [];
        $clean = [];
        foreach ($sharesIn as $s) {
            $uid = (int) ($s['user_id'] ?? 0);
            if ($uid <= 0) {
                continue;
            }
            $amt = $this->normAmount($s['amount'] ?? '0');
            if (Decimal::comp($amt, '0') <= 0) {
                continue;
            }
            $clean[$uid] = isset($clean[$uid]) ? Decimal::add($clean[$uid], $amt) : $amt;
        }
        if (empty($clean)) {
            $db->rollBack();
            Response::json(['error' => 'Pick at least one participant with an amount'], 400);
            return;
        }
        $sumShares = '0';
        foreach ($clean as $amt) {
            $sumShares = Decimal::add($sumShares, $amt);
        }

        // Actual amount this cycle: explicit, else the period's, else the split sum.
        $hasActual = isset($data['actual_amount']) && $data['actual_amount'] !== '' && $data['actual_amount'] !== null;
        if ($hasActual) {
            $actual = $this->normAmount($data['actual_amount']);
        } elseif ($period['actual_amount'] !== null && $period['actual_amount'] !== '') {
            $actual = (string) $period['actual_amount'];
        } else {
            $actual = $sumShares;
        }
        if (Decimal::comp($sumShares, $actual) > 0) {
            $actual = $sumShares; // never let the split exceed the recorded amount
        }

        // A clean re-split is only allowed when nothing has been paid yet.
        $exist = $db->prepare('SELECT * FROM bill_shares WHERE period_id = :p');
        $exist->execute(['p' => $period['id']]);
        $existing = $exist->fetchAll();
        foreach ($existing as $es) {
            if (Decimal::comp((string) $es['amount_paid'], '0') > 0) {
                $db->rollBack();
                Response::json(['error' => 'This period already has payments — edit the individual shares instead'], 400);
                return;
            }
        }
        if ($existing) {
            $db->prepare('DELETE FROM bill_shares WHERE period_id = :p')->execute(['p' => $period['id']]);
        }

        $me = $_SESSION['user_id'] ?? null;
        $insShare = $db->prepare('INSERT INTO bill_shares (period_id, bill_id, user_id, owed_amount, amount_paid, status, requested_by, created_at) VALUES (:pid, :bid, :uid, :owed, 0, :status, :req, NOW())');
        foreach ($clean as $uid => $amt) {
            $isSelf = ($me !== null && (int) $me === (int) $uid);
            $insShare->execute([
                'pid'    => $period['id'],
                'bid'    => $id,
                'uid'    => $uid,
                'owed'   => $amt,
                'status' => $isSelf ? 'accepted' : 'pending',
                'req'    => $isSelf ? null : $me,
            ]);
        }

        $db->prepare('UPDATE bill_periods SET actual_amount = :a WHERE id = :id')->execute(['a' => $actual, 'id' => $period['id']]);
        $this->recalcPeriod($db, (int) $period['id']);

        // Per-bill activity timeline entry (DML — safe inside the transaction).
        $db->prepare('INSERT INTO bill_history (bill_id, edited_by, action, changes, created_at) VALUES (:bid, :by, :action, :ch, NOW())')
            ->execute(['bid' => $id, 'by' => $_SESSION['user_id'] ?? 1, 'action' => 'split', 'ch' => json_encode(['summary' => 'Set ' . $actual . ' for period ' . $period['period_label'] . ' and split it across ' . count($clean) . ' participant(s)'])]);

        $this->safeCommit($db);

        // Log AFTER commit: SystemLog::write may run CREATE TABLE (DDL) on its first
        // call, which would implicitly commit and break an open transaction.
        SystemLog::write('bills', 'bill_split', (int) $id, $bill['name'] ?? "Bill #$id", json_encode([
            'uid'          => $bill['uid'] ?? null,
            'period'       => $period['period_label'],
            'actual'       => $actual,
            'participants' => count($clean),
        ]));
        Response::json(['ok' => true, 'period_id' => (int) $period['id'], 'actual' => $actual, 'shares' => count($clean)]);
    }

    /**
     * Record a partial installment against one user's share, tagged as paid from
     * cost or from profit. Amount is clamped to what's still owed on the share;
     * the share settles when fully paid and the period is recomputed. Back-datable.
     */
    public function payShare(string $shareId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillHistoryTable($db);
        $this->ensureBillPaymentsTable($db);
        $this->ensureBillPeriodsTable($db);
        $this->ensureBillSharesTables($db);
        $db->beginTransaction();

        $sst = $db->prepare('SELECT s.*, b.name AS bill_name, b.uid AS bill_uid FROM bill_shares s JOIN bills b ON s.bill_id = b.id WHERE s.id = :id FOR UPDATE');
        $sst->execute(['id' => $shareId]);
        $share = $sst->fetch();
        if (!$share) {
            $db->rollBack();
            Response::json(['error' => 'Share not found'], 404);
            return;
        }
        // Only the share's own user (or an admin) may pay it — a colleague who set up
        // the split cannot pay on someone else's behalf.
        if (!$this->actorMayManageShare($db, $share)) {
            $db->rollBack();
            Response::json(['error' => 'Only the assigned user (or an admin) can pay this share'], 403);
            return;
        }
        if ($share['status'] === 'refused') {
            $db->rollBack();
            Response::json(['error' => 'This share was refused — it cannot take payments'], 400);
            return;
        }

        $owed = Decimal::sub((string) $share['owed_amount'], (string) $share['amount_paid']);
        if (Decimal::comp($owed, '0') <= 0) {
            $db->rollBack();
            Response::json(['error' => 'This share is already fully paid'], 400);
            return;
        }

        $amount = (isset($data['amount']) && $data['amount'] !== '' && $data['amount'] !== null)
            ? $this->normAmount($data['amount']) : $owed;
        if (Decimal::comp($amount, '0') <= 0) {
            $db->rollBack();
            Response::json(['error' => 'Payment amount must be greater than zero'], 400);
            return;
        }
        if (Decimal::comp($amount, $owed) > 0) {
            $amount = $owed; // clamp to what's left
        }

        $source = (isset($data['source']) && in_array($data['source'], ['cost', 'profit'], true)) ? $data['source'] : 'profit';
        // remove = actually deduct it from the books/dashboard; keep = record that it
        // was paid but do NOT deduct from the system.
        $disposition = (isset($data['disposition']) && in_array($data['disposition'], ['remove', 'keep'], true)) ? $data['disposition'] : 'remove';
        $paidAtRaw = (isset($data['paid_at']) && $data['paid_at'] !== '' && $data['paid_at'] !== null) ? (string) $data['paid_at'] : null;
        $paidAt = $paidAtRaw ? ($this->normDate($paidAtRaw) ?: date('Y-m-d')) : date('Y-m-d H:i:s');
        $note = (isset($data['note']) && $data['note'] !== '') ? (string) $data['note'] : null;

        $ins = $db->prepare('INSERT INTO bill_share_payments (share_id, bill_id, period_id, user_id, amount, source, disposition, paid_at, paid_by, note, created_at) VALUES (:sid, :bid, :pid, :uid, :amt, :src, :disp, :pa, :pb, :note, NOW())');
        $ins->execute([
            'sid'  => $share['id'],
            'bid'  => $share['bill_id'],
            'pid'  => $share['period_id'],
            'uid'  => $share['user_id'],
            'amt'  => $amount,
            'src'  => $source,
            'disp' => $disposition,
            'pa'   => $paidAt,
            'pb'   => $_SESSION['user_id'] ?? null,
            'note' => $note,
        ]);

        $newPaid = Decimal::add((string) $share['amount_paid'], $amount);
        if (Decimal::comp($newPaid, (string) $share['owed_amount']) >= 0) {
            $status = 'settled';
        } else {
            // Paying a still-pending (made-for-other) share doesn't auto-accept it.
            $status = $share['status'] === 'pending' ? 'pending' : 'accepted';
        }
        $db->prepare('UPDATE bill_shares SET amount_paid = :paid, status = :st, updated_at = NOW() WHERE id = :id')
            ->execute(['paid' => $newPaid, 'st' => $status, 'id' => $share['id']]);

        $this->recalcPeriod($db, (int) $share['period_id']);

        // Per-bill activity timeline entry.
        $dispText = $disposition === 'keep' ? 'kept (not deducted)' : 'removed from the books';
        $db->prepare('INSERT INTO bill_history (bill_id, edited_by, action, changes, created_at) VALUES (:bid, :by, :action, :ch, NOW())')
            ->execute(['bid' => $share['bill_id'], 'by' => $_SESSION['user_id'] ?? 1, 'action' => 'share_paid', 'ch' => json_encode(['summary' => 'Paid ' . $amount . ' from ' . $source . ' — ' . $dispText])]);

        $this->safeCommit($db);

        // Log AFTER commit (see safeCommit note — SystemLog can run DDL).
        SystemLog::write('bills', 'bill_share_paid', (int) $share['bill_id'], $share['bill_name'] ?? ('Bill #' . $share['bill_id']), json_encode([
            'uid'         => $share['bill_uid'] ?? null,
            'share_id'    => (int) $share['id'],
            'user_id'     => (int) $share['user_id'],
            'amount'      => $amount,
            'source'      => $source,
            'disposition' => $disposition,
            'paid_at'     => $paidAt,
        ]));
        Response::json(['ok' => true, 'amount' => $amount, 'source' => $source, 'disposition' => $disposition, 'share_status' => $status]);
    }

    /** True when the session user is the share's target user, or an admin. */
    private function actorMayManageShare(PDO $db, array $share): bool
    {
        $me = $_SESSION['user_id'] ?? null;
        if ($me === null) {
            return false;
        }
        if ((int) $me === (int) $share['user_id']) {
            return true;
        }
        $st = $db->prepare('SELECT is_admin FROM users WHERE id = :id');
        $st->execute(['id' => $me]);
        return (int) ($st->fetchColumn() ?: 0) === 1;
    }

    private function loadShareForManage(PDO $db, string $shareId): ?array
    {
        $sst = $db->prepare('SELECT s.*, b.name AS bill_name, b.uid AS bill_uid, p.period_label FROM bill_shares s JOIN bills b ON s.bill_id = b.id LEFT JOIN bill_periods p ON s.period_id = p.id WHERE s.id = :id FOR UPDATE');
        $sst->execute(['id' => $shareId]);
        $share = $sst->fetch();
        return $share ?: null;
    }

    /** The target user accepts a pending share (made for them by someone else). */
    public function acceptShare(string $shareId): void
    {
        $db = Database::getConnection();
        $this->ensureBillHistoryTable($db);
        $this->ensureBillSharesTables($db);
        $db->beginTransaction();
        $share = $this->loadShareForManage($db, $shareId);
        if (!$share) {
            $db->rollBack();
            Response::json(['error' => 'Share not found'], 404);
            return;
        }
        if (!empty($share['period_id'])) {
            $db->prepare("SELECT id FROM bill_periods WHERE id = :pid FOR UPDATE")->execute(['pid' => (int)$share['period_id']]);
        }
        if (!$this->actorMayManageShare($db, $share)) {
            $db->rollBack();
            Response::json(['error' => 'Only the assigned user (or an admin) can respond to this share'], 403);
            return;
        }
        if (!in_array($share['status'], ['pending', 'refused'], true)) {
            $db->rollBack();
            Response::json(['error' => 'This share is not awaiting a response'], 400);
            return;
        }
        // Already partly paid? settle-or-accept based on the balance.
        $status = Decimal::comp((string) $share['amount_paid'], (string) $share['owed_amount']) >= 0 ? 'settled' : 'accepted';
        $db->prepare('UPDATE bill_shares SET status = :st, updated_at = NOW() WHERE id = :id')->execute(['st' => $status, 'id' => $share['id']]);
        $db->prepare('INSERT INTO bill_history (bill_id, edited_by, action, changes, created_at) VALUES (:bid, :by, :action, :ch, NOW())')
            ->execute(['bid' => $share['bill_id'], 'by' => $_SESSION['user_id'] ?? 1, 'action' => 'share_accepted', 'ch' => json_encode(['summary' => 'Accepted a ' . (string) $share['owed_amount'] . ' share for period ' . ($share['period_label'] ?? '')])]);
        $this->safeCommit($db);
        SystemLog::write('bills', 'bill_share_accepted', (int) $share['bill_id'], $share['bill_name'] ?? ('Bill #' . $share['bill_id']), json_encode([
            'uid' => $share['bill_uid'] ?? null, 'share_id' => (int) $share['id'], 'period' => $share['period_label'], 'owed' => (string) $share['owed_amount'],
        ]));
        Response::json(['ok' => true, 'status' => $status]);
    }

    /** The target user refuses a pending share (declines the obligation). */
    public function refuseShare(string $shareId): void
    {
        $db = Database::getConnection();
        $this->ensureBillHistoryTable($db);
        $this->ensureBillPaymentsTable($db);
        $this->ensureBillPeriodsTable($db);
        $this->ensureBillSharesTables($db);
        $db->beginTransaction();
        $share = $this->loadShareForManage($db, $shareId);
        if (!$share) {
            $db->rollBack();
            Response::json(['error' => 'Share not found'], 404);
            return;
        }
        if (!empty($share['period_id'])) {
            $db->prepare("SELECT id FROM bill_periods WHERE id = :pid FOR UPDATE")->execute(['pid' => (int)$share['period_id']]);
        }
        if (!$this->actorMayManageShare($db, $share)) {
            $db->rollBack();
            Response::json(['error' => 'Only the assigned user (or an admin) can respond to this share'], 403);
            return;
        }
        // Phase 1 guard: May refuse if pending OR accepted (before any payment and before period is fully settled)
        if (!in_array($share['status'], ['pending', 'accepted'], true)) {
            $db->rollBack();
            Response::json(['error' => 'This share is not awaiting a response'], 400);
            return;
        }
        if (Decimal::comp((string) $share['amount_paid'], '0') > 0) {
            $db->rollBack();
            Response::json(['error' => 'This share already has a payment — it cannot be refused'], 400);
            return;
        }

        // If all shares in the period are already accepted/settled, Phase 1 is complete and refusal is locked
        $pst = $db->prepare('SELECT COUNT(*) as total, SUM(CASE WHEN status IN ("accepted", "settled") THEN 1 ELSE 0 END) as accepted_cnt FROM bill_shares WHERE period_id = :p');
        $pst->execute(['p' => (int) $share['period_id']]);
        $counts = $pst->fetch();
        $totalShares = (int)($counts['total'] ?? 0);
        $acceptedShares = (int)($counts['accepted_cnt'] ?? 0);
        if ($totalShares > 0 && $acceptedShares >= $totalShares && $share['status'] === 'accepted') {
            $db->rollBack();
            Response::json(['error' => 'Cannot refuse: Agreement has reached 100% consensus. Phase 1 is completed.'], 400);
            return;
        }
        $db->prepare("UPDATE bill_shares SET status = 'refused', updated_at = NOW() WHERE id = :id")->execute(['id' => $share['id']]);
        $this->recalcPeriod($db, (int) $share['period_id']);
        $db->prepare('INSERT INTO bill_history (bill_id, edited_by, action, changes, created_at) VALUES (:bid, :by, :action, :ch, NOW())')
            ->execute(['bid' => $share['bill_id'], 'by' => $_SESSION['user_id'] ?? 1, 'action' => 'share_refused', 'ch' => json_encode(['summary' => 'Refused a ' . (string) $share['owed_amount'] . ' share for period ' . ($share['period_label'] ?? '') . ' — cover the gap to settle this period'])]);
        $this->safeCommit($db);
        SystemLog::write('bills', 'bill_share_refused', (int) $share['bill_id'], $share['bill_name'] ?? ('Bill #' . $share['bill_id']), json_encode([
            'uid' => $share['bill_uid'] ?? null, 'share_id' => (int) $share['id'], 'period' => $share['period_label'], 'owed' => (string) $share['owed_amount'],
        ]));
        Response::json(['ok' => true, 'status' => 'refused']);
    }

    /**
     * Edit a share's owed amount (e.g. the target negotiates a smaller portion and
     * pays the rest later, or someone covers more). New amount must be > 0 and not
     * below what's already been paid. A pending share becomes accepted on edit.
     */
    public function editShare(string $shareId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureBillHistoryTable($db);
        $this->ensureBillPaymentsTable($db);
        $this->ensureBillPeriodsTable($db);
        $this->ensureBillSharesTables($db);
        $db->beginTransaction();
        $share = $this->loadShareForManage($db, $shareId);
        if (!$share) {
            $db->rollBack();
            Response::json(['error' => 'Share not found'], 404);
            return;
        }
        if (!$this->actorMayManageShare($db, $share)) {
            $db->rollBack();
            Response::json(['error' => 'Only the assigned user (or an admin) can edit this share'], 403);
            return;
        }
        if ($share['status'] === 'refused') {
            $db->rollBack();
            Response::json(['error' => 'A refused share cannot be edited'], 400);
            return;
        }
        $newOwed = $this->normAmount($data['owed_amount'] ?? ($data['amount'] ?? ''));
        if (Decimal::comp($newOwed, '0') <= 0) {
            $db->rollBack();
            Response::json(['error' => 'Enter an amount greater than zero'], 400);
            return;
        }
        if (Decimal::comp($newOwed, (string) $share['amount_paid']) < 0) {
            $db->rollBack();
            Response::json(['error' => 'The new amount is less than what has already been paid'], 400);
            return;
        }
        // Editing implies the user owns the (now agreed) amount: pending -> accepted.
        $status = Decimal::comp((string) $share['amount_paid'], $newOwed) >= 0 ? 'settled' : 'accepted';
        $db->prepare('UPDATE bill_shares SET owed_amount = :owed, status = :st, updated_at = NOW() WHERE id = :id')
            ->execute(['owed' => $newOwed, 'st' => $status, 'id' => $share['id']]);
        $this->recalcPeriod($db, (int) $share['period_id']);
        $db->prepare('INSERT INTO bill_history (bill_id, edited_by, action, changes, created_at) VALUES (:bid, :by, :action, :ch, NOW())')
            ->execute(['bid' => $share['bill_id'], 'by' => $_SESSION['user_id'] ?? 1, 'action' => 'share_edited', 'ch' => json_encode(['summary' => 'Changed a share for period ' . ($share['period_label'] ?? '') . ' from ' . (string) $share['owed_amount'] . ' to ' . $newOwed])]);
        $this->safeCommit($db);
        SystemLog::write('bills', 'bill_share_edited', (int) $share['bill_id'], $share['bill_name'] ?? ('Bill #' . $share['bill_id']), json_encode([
            'uid' => $share['bill_uid'] ?? null, 'share_id' => (int) $share['id'], 'period' => $share['period_label'],
            'owed_from' => (string) $share['owed_amount'], 'owed_to' => $newOwed,
        ]));
        Response::json(['ok' => true, 'status' => $status, 'owed_amount' => $newOwed]);
    }

    /** True when the session user is the share's user, the payer, or an admin. */
    private function actorMayVoidPayment(PDO $db, $shareUserId, $paidBy): bool
    {
        $me = $_SESSION['user_id'] ?? null;
        if ($me === null) {
            return false;
        }
        if ($shareUserId !== null && (int) $me === (int) $shareUserId) {
            return true;
        }
        if ($paidBy !== null && (int) $me === (int) $paidBy) {
            return true;
        }
        $st = $db->prepare('SELECT is_admin FROM users WHERE id = :id');
        $st->execute(['id' => $me]);
        return (int) ($st->fetchColumn() ?: 0) === 1;
    }

    /**
     * Void a per-user share installment (correct a wrong/mistaken payment). The row
     * is kept for audit (voided_at/voided_by/void_reason) but no longer counts toward
     * the share/period paid totals or the dashboard P&L. A reason is required.
     */
    public function voidSharePayment(string $paymentId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillHistoryTable($db);
        $this->ensureBillPaymentsTable($db);
        $this->ensureBillPeriodsTable($db);
        $this->ensureBillSharesTables($db);
        $db->beginTransaction();

        $st = $db->prepare('SELECT sp.*, b.name AS bill_name, b.uid AS bill_uid FROM bill_share_payments sp JOIN bills b ON sp.bill_id = b.id WHERE sp.id = :id FOR UPDATE');
        $st->execute(['id' => $paymentId]);
        $pay = $st->fetch();
        if (!$pay) {
            $db->rollBack();
            Response::json(['error' => 'Payment not found'], 404);
            return;
        }
        if ($pay['voided_at'] !== null) {
            $db->rollBack();
            Response::json(['error' => 'This payment was already voided'], 400);
            return;
        }
        if (!$this->actorMayVoidPayment($db, $pay['user_id'], $pay['paid_by'])) {
            $db->rollBack();
            Response::json(['error' => 'Only the payer, the assigned user, or an admin can void this payment'], 403);
            return;
        }
        $reason = trim((string) ($data['reason'] ?? ''));
        if ($reason === '') {
            $db->rollBack();
            Response::json(['error' => 'A reason is required to void a payment'], 400);
            return;
        }

        $me = $_SESSION['user_id'] ?? null;
        $db->prepare('UPDATE bill_share_payments SET voided_at = NOW(), voided_by = :by, void_reason = :r WHERE id = :id')
            ->execute(['by' => $me, 'r' => substr($reason, 0, 255), 'id' => $pay['id']]);
        $this->recalcShare($db, (int) $pay['share_id']);
        $this->recalcPeriod($db, (int) $pay['period_id']);
        $db->prepare('INSERT INTO bill_history (bill_id, edited_by, action, changes, reason, created_at) VALUES (:bid, :by, :action, :ch, :r, NOW())')
            ->execute(['bid' => $pay['bill_id'], 'by' => $me ?? 1, 'action' => 'payment_voided', 'ch' => json_encode(['summary' => 'Voided a payment of ' . (string) $pay['amount']]), 'r' => $reason]);

        $this->safeCommit($db);

        SystemLog::write('bills', 'bill_payment_voided', (int) $pay['bill_id'], $pay['bill_name'] ?? ('Bill #' . $pay['bill_id']), json_encode([
            'uid' => $pay['bill_uid'] ?? null, 'payment_id' => (int) $pay['id'], 'share_id' => (int) $pay['share_id'],
            'amount' => (string) $pay['amount'], 'reason' => $reason, 'kind' => 'share',
        ]));
        Response::json(['ok' => true]);
    }

    /**
     * Void a legacy / single-payer bill_payments row. Kept for audit; if it was tied
     * to a period, the period is recomputed so it no longer counts as paid.
     */
    public function voidPayment(string $paymentId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillHistoryTable($db);
        $this->ensureBillPaymentsTable($db);
        $this->ensureBillPeriodsTable($db);
        $this->ensureBillSharesTables($db);
        $db->beginTransaction();

        $st = $db->prepare('SELECT bp.*, b.name AS bill_name, b.uid AS bill_uid FROM bill_payments bp JOIN bills b ON bp.bill_id = b.id WHERE bp.id = :id FOR UPDATE');
        $st->execute(['id' => $paymentId]);
        $pay = $st->fetch();
        if (!$pay) {
            $db->rollBack();
            Response::json(['error' => 'Payment not found'], 404);
            return;
        }
        if ($pay['voided_at'] !== null) {
            $db->rollBack();
            Response::json(['error' => 'This payment was already voided'], 400);
            return;
        }
        if (!$this->actorMayVoidPayment($db, null, $pay['paid_by'])) {
            $db->rollBack();
            Response::json(['error' => 'Only the payer or an admin can void this payment'], 403);
            return;
        }
        $reason = trim((string) ($data['reason'] ?? ''));
        if ($reason === '') {
            $db->rollBack();
            Response::json(['error' => 'A reason is required to void a payment'], 400);
            return;
        }

        $me = $_SESSION['user_id'] ?? null;
        $db->prepare('UPDATE bill_payments SET voided_at = NOW(), voided_by = :by, void_reason = :r WHERE id = :id')
            ->execute(['by' => $me, 'r' => substr($reason, 0, 255), 'id' => $pay['id']]);
        if ($pay['period_id'] !== null) {
            $this->recalcPeriod($db, (int) $pay['period_id']);
        }
        $db->prepare('INSERT INTO bill_history (bill_id, edited_by, action, changes, reason, created_at) VALUES (:bid, :by, :action, :ch, :r, NOW())')
            ->execute(['bid' => $pay['bill_id'], 'by' => $me ?? 1, 'action' => 'payment_voided', 'ch' => json_encode(['summary' => 'Voided a payment of ' . (string) $pay['amount']]), 'r' => $reason]);

        $this->safeCommit($db);

        SystemLog::write('bills', 'bill_payment_voided', (int) $pay['bill_id'], $pay['bill_name'] ?? ('Bill #' . $pay['bill_id']), json_encode([
            'uid' => $pay['bill_uid'] ?? null, 'payment_id' => (int) $pay['id'],
            'amount' => (string) $pay['amount'], 'reason' => $reason, 'kind' => 'legacy',
        ]));
        Response::json(['ok' => true]);
    }

    /**
     * Cover the still-uncovered part of a period (after a refuse / edit-down left a
     * gap), WITHOUT disturbing shares that already have payments. Adds new shares for
     * the gap only: a share for someone else is 'pending' (they must accept), a share
     * for yourself is accepted (merged into your existing active share if any). This
     * is the path that lets a period reach 'settled' once a participant backs out.
     */
    public function coverPeriod(string $periodId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillHistoryTable($db);
        $this->ensureBillPaymentsTable($db);
        $this->ensureBillPeriodsTable($db);
        $this->ensureBillSharesTables($db);
        $db->beginTransaction();

        $pst = $db->prepare('SELECT p.*, b.name AS bill_name, b.uid AS bill_uid, b.deleted_at AS bill_deleted FROM bill_periods p JOIN bills b ON p.bill_id = b.id WHERE p.id = :id FOR UPDATE');
        $pst->execute(['id' => $periodId]);
        $period = $pst->fetch();
        if (!$period || $period['bill_deleted']) {
            $db->rollBack();
            Response::json(['error' => 'Period not found'], 404);
            return;
        }

        $base = ($period['actual_amount'] !== null && $period['actual_amount'] !== '') ? (string) $period['actual_amount'] : (string) $period['expected_amount'];
        $cs = $db->prepare("SELECT COALESCE(SUM(owed_amount), 0) FROM bill_shares WHERE period_id = :p AND status != 'refused'");
        $cs->execute(['p' => $period['id']]);
        $committed = (string) $cs->fetchColumn();
        $gap = Decimal::sub($base, $committed);
        if (Decimal::comp($gap, '0') <= 0) {
            $db->rollBack();
            Response::json(['error' => 'This period is already fully assigned'], 400);
            return;
        }

        $sharesIn = is_array($data['shares'] ?? null) ? $data['shares'] : [];
        $clean = [];
        foreach ($sharesIn as $s) {
            $uid = (int) ($s['user_id'] ?? 0);
            if ($uid <= 0) {
                continue;
            }
            $amt = $this->normAmount($s['amount'] ?? '0');
            if (Decimal::comp($amt, '0') <= 0) {
                continue;
            }
            $clean[$uid] = isset($clean[$uid]) ? Decimal::add($clean[$uid], $amt) : $amt;
        }
        if (empty($clean)) {
            $db->rollBack();
            Response::json(['error' => 'Pick at least one participant with an amount'], 400);
            return;
        }
        $sum = '0';
        foreach ($clean as $a) {
            $sum = Decimal::add($sum, $a);
        }
        if (Decimal::comp($sum, $gap) > 0) {
            $db->rollBack();
            Response::json(['error' => 'The amounts add up to more than the ' . $gap . ' still uncovered'], 400);
            return;
        }

        $me = $_SESSION['user_id'] ?? null;
        $insShare = $db->prepare('INSERT INTO bill_shares (period_id, bill_id, user_id, owed_amount, amount_paid, status, requested_by, created_at) VALUES (:pid, :bid, :uid, :owed, 0, :status, :req, NOW())');
        $findSelf = $db->prepare("SELECT * FROM bill_shares WHERE period_id = :p AND user_id = :u AND status != 'refused' ORDER BY id ASC LIMIT 1");
        $added = 0;
        foreach ($clean as $uid => $amt) {
            $isSelf = ($me !== null && (int) $me === (int) $uid);
            if ($isSelf) {
                // Merge into your own active share if you have one, else create it.
                $findSelf->execute(['p' => $period['id'], 'u' => $uid]);
                $own = $findSelf->fetch();
                if ($own) {
                    $newOwed = Decimal::add((string) $own['owed_amount'], $amt);
                    $st = Decimal::comp((string) $own['amount_paid'], $newOwed) >= 0 ? 'settled' : 'accepted';
                    $db->prepare('UPDATE bill_shares SET owed_amount = :o, status = :st, updated_at = NOW() WHERE id = :id')
                        ->execute(['o' => $newOwed, 'st' => $st, 'id' => $own['id']]);
                } else {
                    $insShare->execute(['pid' => $period['id'], 'bid' => $period['bill_id'], 'uid' => $uid, 'owed' => $amt, 'status' => 'accepted', 'req' => null]);
                }
            } else {
                // Always a NEW pending share for someone else — their consent stands,
                // and an existing accepted share of theirs is never touched.
                $insShare->execute(['pid' => $period['id'], 'bid' => $period['bill_id'], 'uid' => $uid, 'owed' => $amt, 'status' => 'pending', 'req' => $me]);
            }
            $added++;
        }
        $this->recalcPeriod($db, (int) $period['id']);
        $db->prepare('INSERT INTO bill_history (bill_id, edited_by, action, changes, created_at) VALUES (:bid, :by, :action, :ch, NOW())')
            ->execute(['bid' => $period['bill_id'], 'by' => $me ?? 1, 'action' => 'gap_covered', 'ch' => json_encode(['summary' => 'Covered ' . $sum . ' of period ' . $period['period_label'] . ' across ' . $added . ' participant(s)'])]);

        $this->safeCommit($db);

        SystemLog::write('bills', 'bill_gap_covered', (int) $period['bill_id'], $period['bill_name'] ?? ('Bill #' . $period['bill_id']), json_encode([
            'uid' => $period['bill_uid'] ?? null, 'period' => $period['period_label'], 'amount' => $sum, 'participants' => $added,
        ]));
        Response::json(['ok' => true, 'covered' => $sum]);
    }

    /** Shares awaiting the current user's response (the "Bills awaiting you" inbox). */
    public function pendingShares(): void
    {
        $db = Database::getConnection();
        $this->ensureBillSharesTables($db);
        $me = $_SESSION['user_id'] ?? null;
        if ($me === null) {
            Response::json(['shares' => []]);
            return;
        }
        $stmt = $db->prepare("SELECT s.*, b.name AS bill_name, b.uid AS bill_uid, p.period_label, p.due_date, r.username AS requested_by_name
            FROM bill_shares s
            JOIN bills b ON s.bill_id = b.id
            LEFT JOIN bill_periods p ON s.period_id = p.id
            LEFT JOIN users r ON s.requested_by = r.id
            WHERE s.user_id = :me AND s.status = 'pending' AND b.deleted_at IS NULL
            ORDER BY p.due_date ASC, s.id ASC");
        $stmt->execute(['me' => $me]);
        Response::json(['shares' => $stmt->fetchAll()]);
    }

    /**
     * Every per-user bill installment (the "money out" feed for the dashboard P&L).
     * Each row carries user_id, source (cost|profit) and disposition (remove|keep);
     * only disposition='remove' rows actually hit the books — the frontend filters.
     */
    public function expenses(): void
    {
        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillPeriodsTable($db);
        $this->ensureBillSharesTables($db);

        // 1) Legacy bill_share_payments (if any)
        $sharePayments = [];
        try {
            $sharePayments = $db->query("SELECT sp.id, sp.bill_id, b.name AS bill_name, b.uid AS bill_uid,
                    sp.share_id, sp.period_id, bpr.period_label, sp.user_id, u.username AS user_name,
                    sp.amount, sp.source, sp.disposition, sp.paid_at, sp.paid_by, pb.username AS paid_by_name, sp.note
                FROM bill_share_payments sp
                JOIN bills b ON sp.bill_id = b.id
                LEFT JOIN users u ON sp.user_id = u.id
                LEFT JOIN users pb ON sp.paid_by = pb.id
                LEFT JOIN bill_periods bpr ON sp.period_id = bpr.id
                WHERE b.deleted_at IS NULL AND sp.voided_at IS NULL
                ORDER BY sp.paid_at DESC")->fetchAll() ?: [];
        } catch (\Throwable $e) {
            $sharePayments = [];
        }

        // 2) One-off Operating Expenses (Daily OPEX)
        // 2a: Direct non-split operating expenses
        $directOpex = [];
        try {
            $directOpex = $db->query("SELECT oe.id, NULL AS bill_id, CONCAT('Expense: ', oe.description) AS bill_name, oe.uid AS bill_uid,
                    NULL AS share_id, NULL AS period_id, oe.category AS period_label, oe.paid_by_user_id AS user_id, u.username AS user_name,
                    oe.amount, 'cost' AS source,
                    CASE WHEN (oe.paid_from = 'hand' OR oe.paid_from_type = 'hand') THEN 'keep' ELSE 'remove' END AS disposition,
                    oe.paid_from,
                    oe.paid_at, oe.paid_by_user_id AS paid_by, u.username AS paid_by_name, oe.note
                FROM operating_expenses oe
                LEFT JOIN users u ON oe.paid_by_user_id = u.id
                WHERE oe.deleted_at IS NULL
                  AND (oe.split_data IS NULL OR oe.split_data = '' OR oe.split_data = '[]' OR JSON_LENGTH(oe.split_data) = 0)
                ORDER BY oe.paid_at DESC")->fetchAll() ?: [];
        } catch (\Throwable $e) {
            $directOpex = [];
        }

        // 2b: Multi-partner split expenses (Granular per-partner settled shares from partner_settlements)
        // Unsettled / in-agreement split expenses emit 0 rows, guaranteeing 0 Net Profit deduction until actual settlement!
        $splitOpex = [];
        try {
            $splitOpex = $db->query("SELECT ps.id, NULL AS bill_id, CONCAT('Expense Share: ', COALESCE(oe.description, ps.description)) AS bill_name, COALESCE(oe.uid, ps.uid) AS bill_uid,
                    ps.id AS share_id, NULL AS period_id, COALESCE(oe.category, 'Operating Expense') AS period_label, ps.payer_user_id AS user_id, uPayer.username AS user_name,
                    ps.amount, 'cost' AS source,
                    CASE WHEN (ps.settled_source = 'hand' OR (ps.settled_source IS NULL AND ps.target_source = 'hand')) THEN 'keep' ELSE 'remove' END AS disposition,
                    COALESCE(ps.settled_source, ps.target_source, 'vault') AS paid_from,
                    COALESCE(ps.settled_at, oe.paid_at, ps.created_at) AS paid_at,
                    COALESCE(ps.settled_by, ps.payer_user_id) AS paid_by,
                    COALESCE(uSettledBy.username, uPayer.username) AS paid_by_name,
                    COALESCE(ps.description, oe.note) AS note
                FROM partner_settlements ps
                JOIN operating_expenses oe ON (
                    ps.related_entity_type IN ('operating_expense', 'operating_expenses', 'expense', 'expenses')
                    AND ps.related_entity_id = oe.id
                )
                LEFT JOIN users uPayer ON ps.payer_user_id = uPayer.id
                LEFT JOIN users uSettledBy ON ps.settled_by = uSettledBy.id
                WHERE ps.status = 'settled'
                  AND oe.deleted_at IS NULL
                ORDER BY paid_at DESC")->fetchAll() ?: [];
        } catch (\Throwable $e) {
            $splitOpex = [];
        }

        $opexRows = array_merge($directOpex, $splitOpex);

        // 3) Recurring Bill Cycle Payments (or paid cycles)
        $cycleRows = [];
        try {
            $cyclePayments = $db->query("SELECT cp.id, cp.bill_id, b.name AS bill_name, b.uid AS bill_uid,
                    NULL AS share_id, cp.cycle_id AS period_id, c.cycle_label AS period_label, cp.user_id, u.username AS user_name,
                    cp.amount, 'cost' AS source,
                    CASE WHEN cp.paid_from = 'hand' THEN 'keep' ELSE 'remove' END AS disposition,
                    cp.paid_from,
                    cp.paid_at, cp.user_id AS paid_by, u.username AS paid_by_name, cp.note
                FROM recurring_bill_cycle_payments cp
                JOIN recurring_bills b ON cp.bill_id = b.id
                JOIN recurring_bill_cycles c ON cp.cycle_id = c.id
                LEFT JOIN users u ON cp.user_id = u.id
                LEFT JOIN partner_settlements ps ON cp.settlement_id = ps.id
                WHERE b.deleted_at IS NULL AND cp.voided_at IS NULL AND cp.paid_at IS NOT NULL
                  AND (cp.settlement_id IS NULL OR ps.status = 'settled')
                ORDER BY cp.paid_at DESC")->fetchAll() ?: [];

            if (!empty($cyclePayments)) {
                $cycleRows = $cyclePayments;
            } else {
                $cycleRows = $db->query("SELECT c.id, c.bill_id, b.name AS bill_name, b.uid AS bill_uid,
                        NULL AS share_id, c.id AS period_id, c.cycle_label AS period_label, c.paid_by AS user_id, u.username AS user_name,
                        c.amount_paid AS amount, 'cost' AS source,
                        CASE WHEN c.paid_from = 'hand' THEN 'keep' ELSE 'remove' END AS disposition,
                        c.paid_from,
                        c.paid_at, c.paid_by, u.username AS paid_by_name, c.note
                    FROM recurring_bill_cycles c
                    JOIN recurring_bills b ON c.bill_id = b.id
                    LEFT JOIN users u ON c.paid_by = u.id
                    WHERE b.deleted_at IS NULL AND c.voided_at IS NULL AND c.paid_at IS NOT NULL AND c.amount_paid > 0
                    ORDER BY c.paid_at DESC")->fetchAll() ?: [];
            }
        } catch (\Throwable $e) {
            $cycleRows = [];
        }

        $allExpenses = array_merge($sharePayments, $opexRows, $cycleRows);
        Response::json(['ok' => true, 'expenses' => $allExpenses]);
    }

    /**
     * Full bills report data — every non-deleted bill with its periods, each
     * period's per-user shares (who owes / who paid + status) and the installments
     * (cost/profit + remove/keep). One bill when {id} is given, else all bills.
     * Powers the per-bill filtered print and the global all-users bills report.
     */
    public function report(?string $id = null): void
    {
        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillPaymentsTable($db);
        $this->ensureBillPeriodsTable($db);
        $this->ensureBillSharesTables($db);

        if ($id !== null) {
            $bst = $db->prepare('SELECT * FROM bills WHERE id = :id');
            $bst->execute(['id' => $id]);
            $bills = array_filter([$bst->fetch()]);
        } else {
            $bills = $db->query('SELECT * FROM bills WHERE deleted_at IS NULL ORDER BY name ASC')->fetchAll();
        }
        if (!$bills) {
            Response::json(['bills' => []]);
            return;
        }

        $periodsStmt = $db->prepare('SELECT * FROM bill_periods WHERE bill_id = :id ORDER BY due_date ASC, id ASC');
        $sharesStmt  = $db->prepare('SELECT s.*, u.username AS user_name, r.username AS requested_by_name FROM bill_shares s LEFT JOIN users u ON s.user_id = u.id LEFT JOIN users r ON s.requested_by = r.id WHERE s.period_id = :pid ORDER BY s.id ASC');
        $paysStmt    = $db->prepare('SELECT sp.*, u.username AS user_name, pb.username AS paid_by_name FROM bill_share_payments sp LEFT JOIN users u ON sp.user_id = u.id LEFT JOIN users pb ON sp.paid_by = pb.id WHERE sp.period_id = :pid AND sp.voided_at IS NULL ORDER BY sp.paid_at ASC');

        $out = [];
        foreach ($bills as $bill) {
            $periodsStmt->execute(['id' => $bill['id']]);
            $periods = $periodsStmt->fetchAll();
            $billOwed = '0';
            $billPaid = '0';
            foreach ($periods as &$p) {
                $sharesStmt->execute(['pid' => $p['id']]);
                $shares = $sharesStmt->fetchAll();
                $paysStmt->execute(['pid' => $p['id']]);
                $payments = $paysStmt->fetchAll();
                $base = ($p['actual_amount'] !== null && $p['actual_amount'] !== '') ? (string) $p['actual_amount'] : (string) $p['expected_amount'];
                $rem = Decimal::sub($base, (string) $p['amount_paid']);
                $p['remaining'] = Decimal::comp($rem, '0') > 0 ? $rem : '0';
                $p['shares'] = $shares;
                $p['payments'] = $payments;
                $billPaid = Decimal::add($billPaid, (string) $p['amount_paid']);
                if (Decimal::comp($rem, '0') > 0) {
                    $billOwed = Decimal::add($billOwed, $rem);
                }
            }
            unset($p);
            $bill['periods'] = $periods;
            $bill['total_paid'] = $billPaid;
            $bill['total_owed'] = $billOwed;
            $out[] = $bill;
        }

        Response::json(['bills' => $out]);
    }

    public function history(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureBillsColumns($db);
        $this->ensureBillHistoryTable($db);
        $this->ensureBillPaymentsTable($db);
        $this->ensureBillPeriodsTable($db);
        $this->ensureBillSharesTables($db);

        $stmt = $db->prepare('SELECT b.*, u.username as creator_name FROM bills b LEFT JOIN users u ON b.created_by = u.id WHERE b.id = :id');
        $stmt->execute(['id' => $id]);
        $bill = $stmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        $stmt = $db->prepare('SELECT bh.*, u.username FROM bill_history bh LEFT JOIN users u ON bh.edited_by = u.id WHERE bh.bill_id = :id ORDER BY bh.created_at DESC');
        $stmt->execute(['id' => $id]);
        $history = $stmt->fetchAll();

        // Legacy / single-payer payments (no per-user share).
        $stmt = $db->prepare('SELECT bp.*, u.username FROM bill_payments bp LEFT JOIN users u ON bp.paid_by = u.id WHERE bp.bill_id = :id ORDER BY bp.paid_at DESC');
        $stmt->execute(['id' => $id]);
        $payments = $stmt->fetchAll();

        // Per-user share installments (tagged from cost / from profit).
        $stmt = $db->prepare('SELECT sp.*, u.username AS user_name, pb.username AS paid_by_name, bpr.period_label
            FROM bill_share_payments sp
            LEFT JOIN users u ON sp.user_id = u.id
            LEFT JOIN users pb ON sp.paid_by = pb.id
            LEFT JOIN bill_periods bpr ON sp.period_id = bpr.id
            WHERE sp.bill_id = :id ORDER BY sp.paid_at DESC');
        $stmt->execute(['id' => $id]);
        $sharePayments = $stmt->fetchAll();

        // Total still owed across open/partial periods (mirrors index()).
        $ps = $db->prepare("SELECT * FROM bill_periods WHERE bill_id = :id AND status IN ('open','partial')");
        $ps->execute(['id' => $id]);
        $owed = '0';
        foreach ($ps->fetchAll() as $p) {
            $base = ($p['actual_amount'] !== null && $p['actual_amount'] !== '') ? (string) $p['actual_amount'] : (string) $p['expected_amount'];
            $rem = Decimal::sub($base, (string) $p['amount_paid']);
            if (Decimal::comp($rem, '0') > 0) {
                $owed = Decimal::add($owed, $rem);
            }
        }

        Response::json([
            'bill' => $bill,
            'history' => $history,
            'payments' => $payments,
            'share_payments' => $sharePayments,
            'owed_amount' => $owed,
        ]);
    }
}

/* [END_OF_MODULE_SECURITY_SEAL] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
