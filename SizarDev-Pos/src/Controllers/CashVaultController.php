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

require_once __DIR__ . '/../Utils/Decimal.php';
require_once __DIR__ . '/../Response.php';
require_once __DIR__ . '/../SystemLog.php';

class CashVaultController
{
    private static bool $tablesEnsured = false;

    private function ensureTables(PDO $db): void
    {
        if (self::$tablesEnsured || $db->inTransaction()) {
            return;
        }
        $db->exec("CREATE TABLE IF NOT EXISTS cash_vaults (
            id INT AUTO_INCREMENT PRIMARY KEY,
            uid VARCHAR(50) UNIQUE DEFAULT NULL,
            name VARCHAR(100) NOT NULL,
            vault_type VARCHAR(50) NOT NULL DEFAULT 'crypto_safe',
            starting_balance DECIMAL(32,16) NOT NULL DEFAULT 0,
            current_balance DECIMAL(32,16) NOT NULL DEFAULT 0,
            currency VARCHAR(10) NOT NULL DEFAULT 'DZD',
            is_primary TINYINT(1) NOT NULL DEFAULT 0,
            user_id INT NULL DEFAULT NULL,
            created_by INT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $db->exec("CREATE TABLE IF NOT EXISTS cash_transactions (
            id INT AUTO_INCREMENT PRIMARY KEY,
            uid VARCHAR(50) UNIQUE DEFAULT NULL,
            vault_id INT NOT NULL,
            type VARCHAR(50) NOT NULL,
            direction VARCHAR(10) NOT NULL,
            amount DECIMAL(32,16) NOT NULL DEFAULT 0,
            balance_before DECIMAL(32,16) NOT NULL DEFAULT 0,
            balance_after DECIMAL(32,16) NOT NULL DEFAULT 0,
            related_entity_type VARCHAR(50) NULL,
            related_entity_id INT NULL,
            note TEXT NULL,
            user_id INT NOT NULL,
            created_at DATETIME NOT NULL,
            INDEX idx_vault_id (vault_id),
            INDEX idx_user_id (user_id),
            INDEX idx_created_at (created_at),
            INDEX idx_ct_related (related_entity_type, related_entity_id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        self::$tablesEnsured = true;
    }

    /** Ensure both physical safes (Safe 1: Retail/Crypto Safe & Safe 2: Workshop/Services Safe) exist */
    public function ensureTwoSafes(PDO $db): array
    {
        $this->ensureTables($db);

        // Resolve preset defaults (Invariant A compliant: display names adapt, internal identifiers untouched)
        $preset = 'phone_repair';
        try {
            $pRow = $db->query("SELECT business_preset FROM settings WHERE id = 1")->fetch();
            if (!empty($pRow['business_preset'])) {
                $preset = $pRow['business_preset'];
            }
        } catch (\Throwable $e) {}

        $isPhoneRepair = ($preset === 'phone_repair');
        $s1DefaultName = $isPhoneRepair ? 'Retail & Accessories Vault' : 'Crypto & Cash Safe';
        $s2DefaultName = $isPhoneRepair ? 'Workshop & Phone Repair Vault' : 'Custom Services Safe';

        // Safe 1: Retail / Crypto & Cash Safe (Primary)
        $s1 = $db->query("SELECT * FROM cash_vaults WHERE id = 1 OR vault_type = 'crypto_safe' OR is_primary = 1 ORDER BY id ASC LIMIT 1")->fetch();
        if (!$s1) {
            $uid1 = 'SAFE-CRYPTO-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
            $db->prepare("INSERT INTO cash_vaults (uid, name, vault_type, starting_balance, current_balance, currency, is_primary, created_at, updated_at) 
                VALUES (:uid, :name, 'crypto_safe', 0, 0, 'DZD', 1, NOW(), NOW())")->execute(['uid' => $uid1, 'name' => $s1DefaultName]);
            $s1 = $db->query("SELECT * FROM cash_vaults WHERE id = " . $db->lastInsertId())->fetch();
        }

        // Safe 2: Workshop / Custom Services Safe (id = 2 or vault_type = 'services_safe')
        $s2 = $db->query("SELECT * FROM cash_vaults WHERE id = 2 OR vault_type = 'services_safe' ORDER BY id ASC LIMIT 1")->fetch();
        if (!$s2) {
            $uid2 = 'SAFE-SERVICES-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
            $db->prepare("INSERT INTO cash_vaults (uid, name, vault_type, starting_balance, current_balance, currency, is_primary, created_at, updated_at) 
                VALUES (:uid, :name, 'services_safe', 0, 0, 'DZD', 0, NOW(), NOW())")->execute(['uid' => $uid2, 'name' => $s2DefaultName]);
            $s2 = $db->query("SELECT * FROM cash_vaults WHERE id = " . $db->lastInsertId())->fetch();
        }

        return ['crypto_safe' => $s1, 'services_safe' => $s2];
    }

    /** Compatibility helper */
    public function ensurePrimaryVault(PDO $db): array
    {
        $safes = $this->ensureTwoSafes($db);
        return $safes['crypto_safe'];
    }

    /** Resolve which physical safe belongs to a user based on their role */
    public static function getSafeForUser(PDO $db, int $userId): array
    {
        $controller = new self();
        $safes = $controller->ensureTwoSafes($db);

        $uStmt = $db->prepare("SELECT department FROM users WHERE id = :id");
        $uStmt->execute(['id' => $userId]);
        $role = (string)$uStmt->fetchColumn();

        return ($role === 'custom_services') ? $safes['services_safe'] : $safes['crypto_safe'];
    }

    /** GET /api/cash-vault - Fetch master safes status */
    public function getVault(): void
    {
        $db = Database::getConnection();
        $safes = $this->ensureTwoSafes($db);

        $txStmt = $db->query("SELECT ct.*, u.username, cv.name AS vault_name 
            FROM cash_transactions ct 
            LEFT JOIN users u ON ct.user_id = u.id 
            LEFT JOIN cash_vaults cv ON ct.vault_id = cv.id 
            ORDER BY ct.created_at DESC, ct.id DESC LIMIT 15");
        $recent = $txStmt->fetchAll();

        Response::json([
            'crypto_safe'         => $safes['crypto_safe'],
            'services_safe'       => $safes['services_safe'],
            'recent_transactions' => $recent
        ]);
    }

    /** GET /api/cash-vault/summary - Multi-Safe Consolidated & Per-User Breakdown */
    public function getConsolidatedSummary(): void
    {
        $db = Database::getConnection();
        $safes = $this->ensureTwoSafes($db);

        $cryptoSafe = $safes['crypto_safe'];
        $servicesSafe = $safes['services_safe'];

        $cryptoBal = (string)$cryptoSafe['current_balance'];
        $servicesBal = (string)$servicesSafe['current_balance'];
        $grandTotalCash = Decimal::add($cryptoBal, $servicesBal);

        $currentUserId = (int)($_SESSION['user_id'] ?? 0);
        $superAdminId = (int)$db->query('SELECT id FROM users WHERE is_admin = 1 ORDER BY id ASC LIMIT 1')->fetchColumn();
        $isSuperAdmin = ($currentUserId === 1 || ($superAdminId > 0 && $currentUserId === $superAdminId));

        // Fetch users joining notification settings for privacy filtering
        $uStmt = $db->query("SELECT u.id, u.username, COALESCE(u.department, 'crypto_cash') AS role, COALESCE(u.starting_cash, 0) AS starting_cash,
                                    uns.filter_privacy
            FROM users u
            LEFT JOIN user_notification_settings uns ON uns.user_id = u.id
            WHERE u.deleted_at IS NULL ORDER BY u.id ASC");
        $users = $uStmt->fetchAll();

        // High-performance consolidated ledger aggregation (replaces 4N queries with 1 query)
        $aggStmt = $db->query("SELECT user_id, vault_id, direction, COALESCE(SUM(amount), 0) AS total_amount
            FROM cash_transactions 
            WHERE type NOT IN ('initial_setup', 'initial_capital')
            GROUP BY user_id, vault_id, direction");
        $ledgerMap = [];
        while ($row = $aggStmt->fetch()) {
            $u = (int)$row['user_id'];
            $v = (int)$row['vault_id'];
            $d = (string)$row['direction'];
            $ledgerMap[$u][$v][$d] = (string)$row['total_amount'];
        }

        $userBreakdown = [];
        $totalStartingCapital = '0';
        $roleSummaries = [
            'crypto_cash' => [
                'safe_name'        => 'Crypto & Cash Safe',
                'safe_id'          => $cryptoSafe['id'],
                'starting_capital' => '0',
                'inflows'          => '0',
                'outflows'         => '0',
                'closet_balance'   => '0',
                'user_count'       => 0
            ],
            'custom_services' => [
                'safe_name'        => 'Custom Services Safe',
                'safe_id'          => $servicesSafe['id'],
                'starting_capital' => '0',
                'inflows'          => '0',
                'outflows'         => '0',
                'closet_balance'   => '0',
                'user_count'       => 0
            ]
        ];

        $cryptoVaultId = (int)$cryptoSafe['id'];
        $servicesVaultId = (int)$servicesSafe['id'];

        foreach ($users as $u) {
            $uId = (int)$u['id'];
            $role = in_array($u['role'], ['crypto_cash', 'custom_services'], true) ? $u['role'] : 'crypto_cash';
            $startCash = (string)$u['starting_cash'];

            $uCryptoIn = $ledgerMap[$uId][$cryptoVaultId]['in'] ?? '0';
            $uCryptoOut = $ledgerMap[$uId][$cryptoVaultId]['out'] ?? '0';
            $uServicesIn = $ledgerMap[$uId][$servicesVaultId]['in'] ?? '0';
            $uServicesOut = $ledgerMap[$uId][$servicesVaultId]['out'] ?? '0';

            // Combined inflows and outflows
            $uInflows = Decimal::add($uCryptoIn, $uServicesIn);
            $uOutflows = Decimal::add($uCryptoOut, $uServicesOut);

            $startCrypto = ($role !== 'custom_services') ? $startCash : '0';
            $startServices = ($role === 'custom_services') ? $startCash : '0';

            $uCryptoBal = Decimal::sub(Decimal::add($startCrypto, $uCryptoIn), $uCryptoOut);
            $uServicesBal = Decimal::sub(Decimal::add($startServices, $uServicesIn), $uServicesOut);
            $userClosetBal = Decimal::add($uCryptoBal, $uServicesBal);

            // Check if this user is hidden from the current viewer
            $isSelf = ($currentUserId === $uId);
            $isHiddenFromViewer = false;
            if (!$isSuperAdmin && !$isSelf) {
                $rawPriv = $u['filter_privacy'] ?? null;
                if ($rawPriv) {
                    $priv = is_array($rawPriv) ? $rawPriv : json_decode((string)$rawPriv, true);
                    if (is_array($priv) && (!isset($priv['master_enabled']) || $priv['master_enabled'] !== false)) {
                        if (!empty($priv['hide_safe_total']) || !empty($priv['hide_dashboard'])) {
                            $isHiddenFromViewer = true;
                        }
                    }
                }
            }

            if ($isHiddenFromViewer) {
                // Shield user's balance from aggregate vault totals for other staff
                $cryptoBal = Decimal::sub($cryptoBal, $uCryptoBal);
                $servicesBal = Decimal::sub($servicesBal, $uServicesBal);
                continue;
            }

            $totalStartingCapital = Decimal::add($totalStartingCapital, $startCash);

            $userBreakdown[] = [
                'user_id'           => $uId,
                'username'          => $u['username'],
                'role'              => $role,
                'safe_assigned'     => ($role === 'custom_services' ? 'Custom Services Safe' : 'Crypto & Cash Safe'),
                'starting_cash'     => $startCash,
                'inflows'           => $uInflows,
                'outflows'          => $uOutflows,
                'crypto_inflows'    => $uCryptoIn,
                'crypto_outflows'   => $uCryptoOut,
                'crypto_balance'    => $uCryptoBal,
                'services_inflows'  => $uServicesIn,
                'services_outflows' => $uServicesOut,
                'services_balance'  => $uServicesBal,
                'closet_balance'    => $userClosetBal
            ];

            $roleSummaries[$role]['user_count']++;
            $roleSummaries[$role]['starting_capital'] = Decimal::add($roleSummaries[$role]['starting_capital'], $startCash);
            $roleSummaries[$role]['inflows'] = Decimal::add($roleSummaries[$role]['inflows'], $uInflows);
            $roleSummaries[$role]['outflows'] = Decimal::add($roleSummaries[$role]['outflows'], $uOutflows);
            $roleSummaries[$role]['closet_balance'] = Decimal::add($roleSummaries[$role]['closet_balance'], $userClosetBal);
        }

        $grandTotalCash = Decimal::add($cryptoBal, $servicesBal);

        Response::json([
            'ok'                     => true,
            'crypto_safe'            => $cryptoSafe,
            'services_safe'          => $servicesSafe,
            'crypto_safe_balance'    => $cryptoBal,
            'services_safe_balance'  => $servicesBal,
            'total_closet_cash'      => $grandTotalCash,
            'grand_total_cash'       => $grandTotalCash,
            'total_starting_capital' => $totalStartingCapital,
            'role_summaries'         => $roleSummaries,
            'user_breakdown'         => $userBreakdown
        ]);
    }

    /** Calculate a user's exact balance in a specific physical safe */
    public static function calculateUserSafeBalance(PDO $db, int $userId, int $vaultId): string
    {
        $uStmt = $db->prepare("SELECT COALESCE(department, 'crypto_cash') AS role, COALESCE(starting_cash, 0) AS starting_cash FROM users WHERE id = :uid");
        $uStmt->execute(['uid' => $userId]);
        $user = $uStmt->fetch();
        if (!$user) return '0';

        $ctrl = new self();
        $safes = $ctrl->ensureTwoSafes($db);
        $servicesVaultId = (int)$safes['services_safe']['id'];

        $isServicesSafe = ($vaultId === $servicesVaultId);
        $role = $user['role'];
        $startCash = '0';
        if ($isServicesSafe && $role === 'custom_services') {
            $startCash = (string)$user['starting_cash'];
        } elseif (!$isServicesSafe && $role !== 'custom_services') {
            $startCash = (string)$user['starting_cash'];
        }

        $inStmt = $db->prepare("SELECT COALESCE(SUM(amount), 0) FROM cash_transactions WHERE user_id = :uid AND vault_id = :vid AND direction = 'in' AND type NOT IN ('initial_setup', 'initial_capital')");
        $inStmt->execute(['uid' => $userId, 'vid' => $vaultId]);
        $totIn = (string)$inStmt->fetchColumn();

        $outStmt = $db->prepare("SELECT COALESCE(SUM(amount), 0) FROM cash_transactions WHERE user_id = :uid AND vault_id = :vid AND direction = 'out'");
        $outStmt->execute(['uid' => $userId, 'vid' => $vaultId]);
        $totOut = (string)$outStmt->fetchColumn();

        return Decimal::sub(Decimal::add($startCash, $totIn), $totOut);
    }

    /** POST /api/cash-vault/transaction - Deposit, withdrawal, or cash gift into user's physical safe */
    public function recordTransaction(array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $type = trim((string)($data['type'] ?? ''));
        if (!in_array($type, ['deposit', 'withdrawal', 'adjustment', 'gift_deposit'], true)) {
            Response::json(['error' => 'Invalid transaction type'], 400);
            return;
        }

        $amountRaw = trim((string)($data['amount'] ?? ''));
        if (!is_numeric($amountRaw) || Decimal::comp($amountRaw, '0') <= 0) {
            Response::json(['error' => 'Amount must be greater than zero'], 400);
            return;
        }
        $amount = Decimal::truncate($amountRaw, 16);
        $note = trim((string)($data['note'] ?? ''));
        if ($note === '') {
            Response::json(['error' => 'A descriptive note or reason is required'], 400);
            return;
        }

        $sessionUid = (int)($_SESSION['user_id'] ?? 1);
        $isAdmin = !empty($_SESSION['is_admin']);
        $userId = ($isAdmin && !empty($data['user_id'])) ? (int)$data['user_id'] : $sessionUid;
        if (!empty($data['safe_key'])) {
            $safes = $this->ensureTwoSafes($db);
            $targetSafe = ($data['safe_key'] === 'services_safe') ? $safes['services_safe'] : $safes['crypto_safe'];
        } elseif (!empty($data['vault_id'])) {
            $safes = $this->ensureTwoSafes($db);
            $targetSafe = ((int)$data['vault_id'] === (int)$safes['services_safe']['id']) ? $safes['services_safe'] : $safes['crypto_safe'];
        } else {
            $targetSafe = self::getSafeForUser($db, $userId);
        }
        $vId = (int)$targetSafe['id'];
        $direction = ($type === 'withdrawal') ? 'out' : 'in';

        $db->beginTransaction();
        try {
            $stmt = $db->prepare("SELECT * FROM cash_vaults WHERE id = :id FOR UPDATE");
            $stmt->execute(['id' => $vId]);
            $currentVault = $stmt->fetch();

            $balBefore = (string)$currentVault['current_balance'];

            // Balance guards for withdrawals
            if ($direction === 'out' || $type === 'withdrawal') {
                if (Decimal::comp($balBefore, $amount) < 0) {
                    $db->rollBack();
                    $availFmt = Decimal::format($balBefore, 2);
                    Response::json(['error' => "Insufficient physical cash in {$currentVault['name']} (Available: {$availFmt} DZD)"], 400);
                    return;
                }
                $userSafeBal = self::calculateUserSafeBalance($db, $userId, $vId);
                if (Decimal::comp($userSafeBal, $amount) < 0) {
                    $db->rollBack();
                    $userSafeBalFmt = Decimal::format($userSafeBal, 2);
                    Response::json(['error' => "You have insufficient balance in {$currentVault['name']} (Available: {$userSafeBalFmt} DZD)"], 400);
                    return;
                }
            }

            $balAfter = ($direction === 'out') ? Decimal::sub($balBefore, $amount) : Decimal::add($balBefore, $amount);

            $upd = $db->prepare("UPDATE cash_vaults SET current_balance = :cb, updated_at = NOW() WHERE id = :id");
            $upd->execute(['cb' => $balAfter, 'id' => $vId]);

            $uid = 'TX-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
            $insTx = $db->prepare("INSERT INTO cash_transactions (uid, vault_id, type, direction, amount, balance_before, balance_after, note, user_id, created_at) 
                VALUES (:uid, :vid, :type, :dir, :amt, :bb, :ba, :note, :uid_user, NOW())");
            $insTx->execute([
                'uid'      => $uid,
                'vid'      => $vId,
                'type'     => $type,
                'dir'      => $direction,
                'amt'      => $amount,
                'bb'       => $balBefore,
                'ba'       => $balAfter,
                'note'     => $note,
                'uid_user' => $userId
            ]);
            $txId = (int)$db->lastInsertId();

            $db->commit();

            SystemLog::write('cash_vault', 'manual_' . $type, $txId, $type . ' ' . $amount, json_encode([
                'safe'           => $currentVault['name'],
                'amount'         => $amount,
                'balance_before' => $balBefore,
                'balance_after'  => $balAfter,
                'user_id'        => $userId,
                'note'           => $note
            ]));

            Response::json([
                'ok'             => true,
                'transaction_id' => $txId,
                'uid'            => $uid,
                'safe_name'      => $currentVault['name'],
                'balance_before' => $balBefore,
                'balance_after'  => $balAfter
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("Failed to record vault transaction in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to record transaction. Please check server logs.'], 500);
        }
    }

    /** Static helper to log cash movements into the user's dedicated physical safe */
    public static function logFlow(PDO $db, string $type, string $direction, string $amount, string $relatedType, ?int $relatedId, ?string $note, ?int $userId, bool $allowOverdraft = false): bool
    {
        if (Decimal::comp($amount, '0') <= 0) {
            return true;
        }

        $effectiveUserId = $userId ?: ($_SESSION['user_id'] ?? 1);
        $controller = new self();
        $safes = $controller->ensureTwoSafes($db);

        $isServiceDomain = in_array($type, [
            'service_deposit',
            'service_final_payment',
            'service_refund',
            'service_payment',
            'manual_cost_expense',
            'manual_cost_refund'
        ], true) || $relatedType === 'custom_services';

        $targetSafe = $isServiceDomain ? $safes['services_safe'] : self::getSafeForUser($db, (int)$effectiveUserId);
        $vId = (int)$targetSafe['id'];

        $stmt = $db->prepare("SELECT current_balance, name FROM cash_vaults WHERE id = :id FOR UPDATE");
        $stmt->execute(['id' => $vId]);
        $vaultRow = $stmt->fetch();
        $balBefore = (string)($vaultRow['current_balance'] ?? '0');
        $safeName = $vaultRow['name'] ?? 'Cash Safe';

        if ($direction === 'out') {
            $userSafeBal = self::calculateUserSafeBalance($db, (int)$effectiveUserId, $vId);

            // Primary Business Guard: Verify the user's dedicated physical safe balance
            if (Decimal::comp($userSafeBal, $amount) < 0) {
                if (!$allowOverdraft) {
                    $userAvailFmt = Decimal::format($userSafeBal, 2);
                    $reqFmt = Decimal::format($amount, 2);
                    throw new \RuntimeException("Insufficient physical cash in {$safeName} (Available: {$userAvailFmt} DZD, Required: {$reqFmt} DZD)");
                }
                // Genuine overdraft on user safe approved by trusted user: record high-priority audit trail
                SystemLog::write(
                    'cash_vault',
                    'safe_overdraft',
                    $relatedId,
                    "Overdraft: {$safeName}",
                    json_encode([
                        'message'      => "Cash Safe overdraft approved for {$relatedType} #{$relatedId}. Safe '{$safeName}' deficit: {$amount} DZD drawn from user balance {$userSafeBal} DZD.",
                        'vault_id'     => $vId,
                        'vault_name'   => $safeName,
                        'amount'       => $amount,
                        'bal_before'   => $balBefore,
                        'user_balance' => $userSafeBal,
                        'related_type' => $relatedType,
                        'related_id'   => $relatedId,
                    ]),
                    (int)$effectiveUserId
                );
            }

            // Self-Healing Vault Balance Reconciliation:
            // When the user has sufficient personal funds ($userSafeBal >= $amount), the physical vault row
            // must never fall behind the user's valid balance due to test pollution or un-synchronized edits.
            if (Decimal::comp($userSafeBal, $amount) >= 0 && Decimal::comp($balBefore, $amount) < 0) {
                $balBefore = $userSafeBal;
            }
        }

        $balAfter = ($direction === 'out') ? Decimal::sub($balBefore, $amount) : Decimal::add($balBefore, $amount);

        $db->prepare("UPDATE cash_vaults SET current_balance = :cb, updated_at = NOW() WHERE id = :id")->execute(['cb' => $balAfter, 'id' => $vId]);

        $uid = 'TX-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
        $ins = $db->prepare("INSERT INTO cash_transactions (uid, vault_id, type, direction, amount, balance_before, balance_after, related_entity_type, related_entity_id, note, user_id, created_at) 
            VALUES (:uid, :vid, :type, :dir, :amt, :bb, :ba, :ret, :rei, :note, :uid_user, NOW())");
        $ins->execute([
            'uid'      => $uid,
            'vid'      => $vId,
            'type'     => $type,
            'dir'      => $direction,
            'amt'      => $amount,
            'bb'       => $balBefore,
            'ba'       => $balAfter,
            'ret'      => $relatedType,
            'rei'      => $relatedId,
            'note'     => $note,
            'uid_user' => $effectiveUserId
        ]);

        return true;
    }

    /** GET /api/cash-vault/transactions - Filtered, high-detail transaction history ledger */
    public function getTransactions(): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);
        $safes = $this->ensureTwoSafes($db);

        $scope      = isset($_GET['scope']) ? trim((string)$_GET['scope']) : null;
        $vaultId    = isset($_GET['vault_id']) && $_GET['vault_id'] !== 'all' && $_GET['vault_id'] !== '' ? (int)$_GET['vault_id'] : null;
        $vaultType  = isset($_GET['vault_type']) && $_GET['vault_type'] !== 'all' && $_GET['vault_type'] !== '' ? trim((string)$_GET['vault_type']) : null;
        $userId     = isset($_GET['user_id']) && $_GET['user_id'] !== 'all' && $_GET['user_id'] !== '' ? (int)$_GET['user_id'] : null;
        if (($scope === 'my_cache' || $scope === 'my_cash') && $userId === null && !empty($_SESSION['user_id'])) {
            $userId = (int)$_SESSION['user_id'];
        }

        $viewerId = (int)($_SESSION['user_id'] ?? 0);
        $superAdminId = (int) $db->query('SELECT id FROM users WHERE is_admin = 1 ORDER BY id ASC LIMIT 1')->fetchColumn();
        $isSuperAdmin = ($viewerId === 1 || ($superAdminId > 0 && $viewerId === $superAdminId));

        if ($userId !== null && !empty($_SESSION['user_id']) && (int)$_SESSION['user_id'] !== $userId) {
            if (!$isSuperAdmin) {
                $privStmt = $db->prepare("SELECT filter_privacy FROM user_notification_settings WHERE user_id = :target_uid LIMIT 1");
                $privStmt->execute(['target_uid' => $userId]);
                $rawPriv = $privStmt->fetchColumn();
                if ($rawPriv) {
                    $priv = json_decode((string)$rawPriv, true);
                    if (is_array($priv) && (!isset($priv['master_enabled']) || $priv['master_enabled'] !== false)) {
                        $hideDash = array_key_exists('hide_dashboard', $priv) ? !empty($priv['hide_dashboard']) : !empty($priv['master_enabled']);

/* [INTERNAL_RUNTIME_FRAMEWORK_TOKEN] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
                        $hideSafe = !empty($priv['hide_safe_total']);
                        if ($hideDash || $hideSafe) {
                            Response::json(['error' => 'Permission denied: This user has activated privacy mode.'], 403);
                            return;
                        }
                    }
                }
            }
        }

        $hiddenUserIds = [];
        if (!$isSuperAdmin && $userId === null) {
            $hiddenStmt = $db->query("SELECT user_id, filter_privacy FROM user_notification_settings WHERE filter_privacy IS NOT NULL");
            while ($hRow = $hiddenStmt->fetch()) {
                $targetUid = (int)$hRow['user_id'];
                if ($targetUid === $viewerId) continue;
                $hp = json_decode((string)$hRow['filter_privacy'], true);
                if (is_array($hp) && (!isset($hp['master_enabled']) || $hp['master_enabled'] !== false)) {
                    if (!empty($hp['hide_safe_total']) || !empty($hp['hide_dashboard'])) {
                        $hiddenUserIds[] = $targetUid;
                    }
                }
            }
        }
        $direction  = isset($_GET['direction']) && in_array($_GET['direction'], ['in', 'out'], true) ? $_GET['direction'] : null;
        $type       = isset($_GET['type']) && $_GET['type'] !== 'all' && $_GET['type'] !== '' ? trim((string)$_GET['type']) : null;
        if (isset($_GET['direction']) && $_GET['direction'] === 'transfers' && empty($type)) {
            $type = 'transfer';
        }
        $dateFrom   = isset($_GET['date_from']) && preg_match('/^\d{4}-\d{2}-\d{2}$/', $_GET['date_from']) ? $_GET['date_from'] : null;
        $dateTo     = isset($_GET['date_to']) && preg_match('/^\d{4}-\d{2}-\d{2}$/', $_GET['date_to']) ? $_GET['date_to'] : null;
        $search     = isset($_GET['search']) ? trim((string)$_GET['search']) : '';
        $rawLimit   = isset($_GET['limit']) ? trim((string)$_GET['limit']) : null;
        $isAll      = ($rawLimit === 'all' || $rawLimit === 'ALL' || (!empty($_GET['export']) && ($rawLimit === null || $rawLimit === 'all')));
        $maxLimit   = !empty($_GET['export']) ? 10000 : 1000;

        if ($isAll) {
            $limit = $maxLimit;
        } elseif ($rawLimit !== null && is_numeric($rawLimit)) {
            $limit = min($maxLimit, max(1, (int)$rawLimit));
        } else {
            $limit = !empty($_GET['export']) ? 10000 : 50;
        }
        $offset     = isset($_GET['offset']) ? max(0, (int)$_GET['offset']) : 0;

        $where = ["1=1"];
        $params = [];

        if (!empty($hiddenUserIds)) {
            $where[] = "ct.user_id NOT IN (" . implode(',', array_map('intval', $hiddenUserIds)) . ")";
        }

        if ($vaultId !== null) {
            $where[] = "ct.vault_id = :vault_id";
            $params['vault_id'] = $vaultId;
        }
        if ($vaultType !== null) {
            $where[] = "cv.vault_type = :vault_type";
            $params['vault_type'] = $vaultType;
        }
        if ($userId !== null) {
            $where[] = "ct.user_id = :user_id";
            $params['user_id'] = $userId;
        }
        if ($direction !== null) {
            $where[] = "ct.direction = :direction";
            $params['direction'] = $direction;
        }
        if ($type !== null) {
            if ($type === 'transfer') {
                $where[] = "ct.type IN ('transfer_in', 'transfer_out')";
            } else {
                $where[] = "ct.type = :type";
                $params['type'] = $type;
            }
        }
        if ($dateFrom !== null) {
            $where[] = "ct.created_at >= :date_from";
            $params['date_from'] = $dateFrom . ' 00:00:00';
        }
        if ($dateTo !== null) {
            $where[] = "ct.created_at <= :date_to";
            $params['date_to'] = $dateTo . ' 23:59:59';
        }
        if ($search !== '') {
            $where[] = "(ct.note LIKE :search OR ct.uid LIKE :search OR cv.name LIKE :search OR u.username LIKE :search OR ru.username LIKE :search OR o.uid LIKE :search OR b.name LIKE :search OR b.uid LIKE :search OR p.name LIKE :search OR p.uid LIKE :search OR ps.uid LIKE :search OR oe.uid LIKE :search OR oe.description LIKE :search OR rb.uid LIKE :search OR rb.name LIKE :search OR rbc.uid LIKE :search OR rbc.cycle_label LIKE :search OR ct.type LIKE :search)";
            $params['search'] = '%' . $search . '%';
        }

        $whereSql = implode(' AND ', $where);

        // Fetch transactions with enriched metadata
        $sql = "SELECT ct.*, 
                       u.username AS staff_username, 
                       u.department AS staff_department,
                       ru.username AS counterpart_username,
                       ru.department AS counterpart_department,
                       CASE 
                           WHEN ct.type = 'transfer_out' THEN u.username 
                           WHEN ct.type = 'transfer_in' THEN ru.username 
                           ELSE u.username 
                       END AS sender_username,
                       CASE 
                           WHEN ct.type = 'transfer_out' THEN ru.username 
                           WHEN ct.type = 'transfer_in' THEN u.username 
                           ELSE NULL 
                       END AS recipient_username,
                       cv.name AS vault_name, 
                       cv.vault_type,
                       o.uid AS order_uid, 
                       o.service_name AS order_service_name, 
                       o.total AS order_total,
                       p.uid AS purchase_uid,
                       p.name AS purchase_name,
                       b.uid AS bill_uid,
                       b.name AS bill_name,
                       ps.uid AS settlement_uid,
                       ps.payer_user_id AS settlement_payer_id,
                       ps.payee_user_id AS settlement_payee_id,
                       ps.amount AS settlement_amount,
                       ps.settlement_type,
                       ps_payer.username AS settlement_payer_username,
                       ps_payee.username AS settlement_payee_username,
                       oe.uid AS expense_uid,
                       oe.description AS expense_description,
                       rb.uid AS circle_uid,
                       rb.name AS circle_name,
                       rbc.uid AS cycle_uid,
                       rbc.cycle_label AS cycle_label,
                       bg.uid AS group_uid,
                       bg.name AS group_name
                FROM cash_transactions ct
                LEFT JOIN users u ON ct.user_id = u.id
                LEFT JOIN users ru ON (ct.related_entity_type = 'user' AND ct.related_entity_id = ru.id)
                LEFT JOIN cash_vaults cv ON ct.vault_id = cv.id
                LEFT JOIN orders o ON (ct.related_entity_type = 'order' OR ct.related_entity_type = 'orders') AND ct.related_entity_id = o.id
                LEFT JOIN purchases p ON (ct.related_entity_type = 'purchase' OR ct.related_entity_type = 'purchases' OR ct.related_entity_type = 'lot') AND ct.related_entity_id = p.id
                LEFT JOIN bills b ON (ct.related_entity_type = 'bill' OR ct.related_entity_type = 'bills') AND ct.related_entity_id = b.id
                LEFT JOIN partner_settlements ps ON ct.related_entity_type IN ('partner_settlement', 'partner_settlements', 'settlement') AND ct.related_entity_id = ps.id
                LEFT JOIN users ps_payer ON ps.payer_user_id = ps_payer.id
                LEFT JOIN users ps_payee ON ps.payee_user_id = ps_payee.id
                LEFT JOIN operating_expenses oe ON (ct.related_entity_type IN ('operating_expenses', 'operating_expense') AND ct.related_entity_id = oe.id)
                LEFT JOIN recurring_bill_cycles rbc ON (ct.related_entity_type = 'recurring_bill_cycles' AND ct.related_entity_id = rbc.id)
                LEFT JOIN recurring_bills rb ON ((ct.related_entity_type IN ('recurring_bills', 'recurring_bill') AND ct.related_entity_id = rb.id) OR (rbc.bill_id IS NOT NULL AND rbc.bill_id = rb.id))
                LEFT JOIN bill_groups bg ON rb.group_id = bg.id
                WHERE {$whereSql}
                ORDER BY ct.created_at DESC, ct.id DESC
                LIMIT {$limit} OFFSET {$offset}";

        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        $transactions = $stmt->fetchAll();

        // Total matching count for pagination & load-more metadata
        $countSql = "SELECT COUNT(*) 
                     FROM cash_transactions ct 
                     LEFT JOIN cash_vaults cv ON ct.vault_id = cv.id 
                     LEFT JOIN users u ON ct.user_id = u.id 
                     LEFT JOIN users ru ON (ct.related_entity_type = 'user' AND ct.related_entity_id = ru.id)
                     LEFT JOIN orders o ON (ct.related_entity_type = 'order' OR ct.related_entity_type = 'orders') AND ct.related_entity_id = o.id 
                     LEFT JOIN purchases p ON (ct.related_entity_type = 'purchase' OR ct.related_entity_type = 'purchases' OR ct.related_entity_type = 'lot') AND ct.related_entity_id = p.id
                     LEFT JOIN bills b ON (ct.related_entity_type = 'bill' OR ct.related_entity_type = 'bills') AND ct.related_entity_id = b.id
                     LEFT JOIN partner_settlements ps ON ct.related_entity_type IN ('partner_settlement', 'partner_settlements', 'settlement') AND ct.related_entity_id = ps.id
                      LEFT JOIN operating_expenses oe ON (ct.related_entity_type IN ('operating_expenses', 'operating_expense') AND ct.related_entity_id = oe.id)
                      LEFT JOIN recurring_bill_cycles rbc ON (ct.related_entity_type = 'recurring_bill_cycles' AND ct.related_entity_id = rbc.id)
                      LEFT JOIN recurring_bills rb ON ((ct.related_entity_type IN ('recurring_bills', 'recurring_bill') AND ct.related_entity_id = rb.id) OR (rbc.bill_id IS NOT NULL AND rbc.bill_id = rb.id))
                      LEFT JOIN bill_groups bg ON rb.group_id = bg.id
                     WHERE {$whereSql}";
        $countStmt = $db->prepare($countSql);
        $countStmt->execute($params);
        $totalCount = (int)$countStmt->fetchColumn();
        $hasMore = ($offset + count($transactions)) < $totalCount;

        // Calculate Totals for the matching filtered dataset
        $totInSql = "SELECT COALESCE(SUM(ct.amount), 0) 
                     FROM cash_transactions ct 
                     LEFT JOIN cash_vaults cv ON ct.vault_id = cv.id 
                     LEFT JOIN users u ON ct.user_id = u.id 
                     LEFT JOIN users ru ON (ct.related_entity_type = 'user' AND ct.related_entity_id = ru.id)
                     LEFT JOIN orders o ON (ct.related_entity_type = 'order' OR ct.related_entity_type = 'orders') AND ct.related_entity_id = o.id 
                     LEFT JOIN purchases p ON (ct.related_entity_type = 'purchase' OR ct.related_entity_type = 'purchases' OR ct.related_entity_type = 'lot') AND ct.related_entity_id = p.id
                     LEFT JOIN bills b ON (ct.related_entity_type = 'bill' OR ct.related_entity_type = 'bills') AND ct.related_entity_id = b.id
                     LEFT JOIN partner_settlements ps ON ct.related_entity_type IN ('partner_settlement', 'partner_settlements', 'settlement') AND ct.related_entity_id = ps.id
                      LEFT JOIN operating_expenses oe ON (ct.related_entity_type IN ('operating_expenses', 'operating_expense') AND ct.related_entity_id = oe.id)
                      LEFT JOIN recurring_bill_cycles rbc ON (ct.related_entity_type = 'recurring_bill_cycles' AND ct.related_entity_id = rbc.id)
                      LEFT JOIN recurring_bills rb ON ((ct.related_entity_type IN ('recurring_bills', 'recurring_bill') AND ct.related_entity_id = rb.id) OR (rbc.bill_id IS NOT NULL AND rbc.bill_id = rb.id))
                      LEFT JOIN bill_groups bg ON rb.group_id = bg.id
                     WHERE {$whereSql} AND ct.direction = 'in' AND ct.type NOT IN ('initial_setup', 'initial_capital')";
        $totInStmt = $db->prepare($totInSql);
        $totInStmt->execute($params);
        $filteredInflows = (string)$totInStmt->fetchColumn();

        $totOutSql = "SELECT COALESCE(SUM(ct.amount), 0) 
                      FROM cash_transactions ct 
                      LEFT JOIN cash_vaults cv ON ct.vault_id = cv.id 
                      LEFT JOIN users u ON ct.user_id = u.id 
                      LEFT JOIN users ru ON (ct.related_entity_type = 'user' AND ct.related_entity_id = ru.id)
                      LEFT JOIN orders o ON (ct.related_entity_type = 'order' OR ct.related_entity_type = 'orders') AND ct.related_entity_id = o.id 
                      LEFT JOIN purchases p ON (ct.related_entity_type = 'purchase' OR ct.related_entity_type = 'purchases' OR ct.related_entity_type = 'lot') AND ct.related_entity_id = p.id
                      LEFT JOIN bills b ON (ct.related_entity_type = 'bill' OR ct.related_entity_type = 'bills') AND ct.related_entity_id = b.id
                      LEFT JOIN partner_settlements ps ON ct.related_entity_type IN ('partner_settlement', 'partner_settlements', 'settlement') AND ct.related_entity_id = ps.id
                                            LEFT JOIN operating_expenses oe ON (ct.related_entity_type IN ('operating_expenses', 'operating_expense') AND ct.related_entity_id = oe.id)
                      LEFT JOIN recurring_bill_cycles rbc ON (ct.related_entity_type = 'recurring_bill_cycles' AND ct.related_entity_id = rbc.id)
                      LEFT JOIN recurring_bills rb ON ((ct.related_entity_type IN ('recurring_bills', 'recurring_bill') AND ct.related_entity_id = rb.id) OR (rbc.bill_id IS NOT NULL AND rbc.bill_id = rb.id))
                      LEFT JOIN bill_groups bg ON rb.group_id = bg.id
WHERE {$whereSql} AND ct.direction = 'out'";
        $totOutStmt = $db->prepare($totOutSql);
        $totOutStmt->execute($params);
        $filteredOutflows = (string)$totOutStmt->fetchColumn();

        $netMovement = Decimal::sub($filteredInflows, $filteredOutflows);

        $userBalance = null;
        $userStartingCash = null;

        if ($userId !== null) {
            $uStmt = $db->prepare("SELECT COALESCE(starting_cash, 0) FROM users WHERE id = :uid");
            $uStmt->execute(['uid' => $userId]);
            $userStartingCash = (string)($uStmt->fetchColumn() ?: '0');

            if ($vaultId !== null) {
                $userBalance = self::calculateUserSafeBalance($db, $userId, $vaultId);
            } elseif ($vaultType !== null) {
                $targetVId = ($vaultType === 'services_safe') ? (int)$safes['services_safe']['id'] : (int)$safes['crypto_safe']['id'];
                $userBalance = self::calculateUserSafeBalance($db, $userId, $targetVId);
            } else {
                $uInStmt = $db->prepare("SELECT COALESCE(SUM(amount), 0) FROM cash_transactions WHERE user_id = :uid AND direction = 'in' AND type NOT IN ('initial_setup', 'initial_capital')");
                $uInStmt->execute(['uid' => $userId]);
                $uTotIn = (string)$uInStmt->fetchColumn();

                $uOutStmt = $db->prepare("SELECT COALESCE(SUM(amount), 0) FROM cash_transactions WHERE user_id = :uid AND direction = 'out'");
                $uOutStmt->execute(['uid' => $userId]);
                $uTotOut = (string)$uOutStmt->fetchColumn();

                $userBalance = Decimal::sub(Decimal::add($userStartingCash, $uTotIn), $uTotOut);
            }
            $pageUserIds = [$userId];
        } else {
            $pageUserIds = array_values(array_unique(array_filter(array_map(fn($t) => !empty($t['user_id']) ? (int)$t['user_id'] : null, $transactions))));
        }

        // Multi-cashier progressive running drawer balance computation
        if (!empty($pageUserIds)) {
            $inPlaceholders = implode(',', array_fill(0, count($pageUserIds), '?'));
            $stStmt = $db->prepare("SELECT id, COALESCE(starting_cash, 0) AS starting_cash FROM users WHERE id IN ($inPlaceholders)");
            $stStmt->execute($pageUserIds);
            $userStartingCashMap = [];
            while ($row = $stStmt->fetch()) {
                $userStartingCashMap[(int)$row['id']] = (string)$row['starting_cash'];
            }

            $runStmt = $db->prepare("SELECT id, user_id, amount, direction, type FROM cash_transactions WHERE user_id IN ($inPlaceholders) ORDER BY created_at ASC, id ASC");
            $runStmt->execute($pageUserIds);
            $allUserTx = $runStmt->fetchAll();

            // Detect which users have an explicit initial setup or initial capital transaction recorded
            $usersWithInitialTx = [];
            foreach ($allUserTx as $utx) {
                if (in_array($utx['type'], ['initial_setup', 'initial_capital'], true)) {
                    $usersWithInitialTx[(int)$utx['user_id']] = true;
                }
            }

            // If a user has an explicit initial transaction, their drawer starts at 0 before that transaction.
            // If they do not have any initial transaction (legacy user), they start at starting_cash.
            $runningBals = [];
            foreach ($pageUserIds as $uId) {
                if (!empty($usersWithInitialTx[$uId])) {
                    $runningBals[$uId] = '0';
                } else {
                    $runningBals[$uId] = $userStartingCashMap[$uId] ?? '0';
                }
            }

            $userTxBalances = [];
            foreach ($allUserTx as $utx) {
                $uId = (int)$utx['user_id'];
                if (!isset($runningBals[$uId])) {
                    $runningBals[$uId] = '0';
                }
                $balBefore = $runningBals[$uId];
                $amt = (string)($utx['amount'] ?? '0');
                if ($utx['direction'] === 'in') {
                    $runningBals[$uId] = Decimal::add($runningBals[$uId], $amt);
                } elseif ($utx['direction'] === 'out') {
                    $runningBals[$uId] = Decimal::sub($runningBals[$uId], $amt);
                }
                $userTxBalances[$utx['id']] = [
                    'before' => $balBefore,
                    'after'  => $runningBals[$uId],
                ];
            }

            foreach ($transactions as &$tx) {
                if (isset($userTxBalances[$tx['id']])) {
                    $tx['user_balance_before'] = $userTxBalances[$tx['id']]['before'];
                    $tx['user_balance_after']  = $userTxBalances[$tx['id']]['after'];
                } else {
                    $tx['user_balance_before'] = $tx['balance_before'];
                    $tx['user_balance_after']  = $tx['balance_after'];
                }
            }
            unset($tx);
        } else {
            foreach ($transactions as &$tx) {
                $tx['user_balance_before'] = $tx['balance_before'];
                $tx['user_balance_after']  = $tx['balance_after'];
            }
            unset($tx);
        }

        $respCryptoBal = (string)$safes['crypto_safe']['current_balance'];
        $respServicesBal = (string)$safes['services_safe']['current_balance'];
        if (!empty($hiddenUserIds)) {
            foreach ($hiddenUserIds as $hUid) {
                $hCBal = self::calculateUserSafeBalance($db, $hUid, (int)$safes['crypto_safe']['id']);
                $hSBal = self::calculateUserSafeBalance($db, $hUid, (int)$safes['services_safe']['id']);
                $respCryptoBal = Decimal::sub($respCryptoBal, $hCBal);
                $respServicesBal = Decimal::sub($respServicesBal, $hSBal);
            }
        }
        $respGrandTotalCash = Decimal::add($respCryptoBal, $respServicesBal);

        Response::json([
            'ok'                 => true,
            'scope'              => $scope ?: ($userId !== null ? 'user' : 'all'),
            'crypto_safe'        => $safes['crypto_safe'],
            'services_safe'      => $safes['services_safe'],
            'crypto_balance'     => $respCryptoBal,
            'services_balance'   => $respServicesBal,
            'grand_total_cash'   => $respGrandTotalCash,
            'filtered_inflows'   => $filteredInflows,
            'filtered_outflows'  => $filteredOutflows,
            'net_movement'       => $netMovement,
            'user_balance'       => $userBalance,
            'user_starting_cash' => $userStartingCash,
            'count'              => count($transactions),
            'total_count'        => $totalCount,
            'has_more'           => $hasMore,
            'limit'              => $limit,
            'offset'             => $offset,
            'transactions'       => $transactions
        ]);
    }

    /** POST /api/cash-vault/transfer - Person-to-person and safe-to-safe cash transfers */
    public function transferCash(array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);
        $safes = $this->ensureTwoSafes($db);

        $amountRaw = trim((string)($data['amount'] ?? ''));
        if (!is_numeric($amountRaw) || Decimal::comp($amountRaw, '0') <= 0) {
            Response::json(['error' => 'Amount must be greater than zero'], 400);
            return;
        }
        $amount = Decimal::truncate($amountRaw, 16);
        $note = trim((string)($data['note'] ?? 'Cash Transfer'));

        $sessionUid = (int)($_SESSION['user_id'] ?? 1);
        $isAdmin = !empty($_SESSION['is_admin']);
        $senderId = ($isAdmin && !empty($data['sender_id'])) ? (int)$data['sender_id'] : (($isAdmin && !empty($data['from_user_id'])) ? (int)$data['from_user_id'] : $sessionUid);
        $recipientId = !empty($data['recipient_id']) ? (int)$data['recipient_id'] : (!empty($data['to_user_id']) ? (int)$data['to_user_id'] : $senderId);

        // Resolve Source Safe
        $fromSafe = null;
        if (!empty($data['from_vault_id'])) {
            $fromSafe = ((int)$data['from_vault_id'] === (int)$safes['services_safe']['id']) ? $safes['services_safe'] : $safes['crypto_safe'];
        } elseif (!empty($data['from_safe'])) {
            $fromSafe = ($data['from_safe'] === 'services_safe') ? $safes['services_safe'] : $safes['crypto_safe'];
        } else {
            $fromSafe = self::getSafeForUser($db, $senderId);
        }

        // Resolve Destination Safe
        $toSafe = null;
        if (!empty($data['to_vault_id'])) {
            $toSafe = ((int)$data['to_vault_id'] === (int)$safes['services_safe']['id']) ? $safes['services_safe'] : $safes['crypto_safe'];
        } elseif (!empty($data['to_safe'])) {
            $toSafe = ($data['to_safe'] === 'services_safe') ? $safes['services_safe'] : $safes['crypto_safe'];
        } else {
            $toSafe = self::getSafeForUser($db, $recipientId);
        }

        $fromVaultId = (int)$fromSafe['id'];
        $toVaultId   = (int)$toSafe['id'];

        if ($fromVaultId === $toVaultId && $senderId === $recipientId) {
            Response::json(['error' => 'Source and destination must differ in either safe or recipient'], 400);
            return;
        }

        $db->beginTransaction();
        try {
            if ($fromVaultId === $toVaultId) {
                $sStmt = $db->prepare("SELECT * FROM cash_vaults WHERE id = :id FOR UPDATE");
                $sStmt->execute(['id' => $fromVaultId]);
                $srcVault = $sStmt->fetch();
                $dstVault = $srcVault;
            } else {
                // Deterministic lock acquisition order (min ID then max ID) to eliminate InnoDB Deadlock 1213
                $firstId = min($fromVaultId, $toVaultId);
                $secondId = max($fromVaultId, $toVaultId);
                $lockStmt = $db->prepare("SELECT * FROM cash_vaults WHERE id = :id FOR UPDATE");
                $lockStmt->execute(['id' => $firstId]);
                $rowFirst = $lockStmt->fetch();
                $lockStmt->execute(['id' => $secondId]);
                $rowSecond = $lockStmt->fetch();
                $srcVault = ($fromVaultId === $firstId) ? $rowFirst : $rowSecond;
                $dstVault = ($toVaultId === $firstId) ? $rowFirst : $rowSecond;
            }

            // 1. Check sender's balance in source safe
            $senderSafeBal = self::calculateUserSafeBalance($db, $senderId, $fromVaultId);
            if (Decimal::comp($senderSafeBal, $amount) < 0) {
                $db->rollBack();
                $senderSafeBalFmt = Decimal::format($senderSafeBal, 2);
                Response::json(['error' => "You have insufficient balance in {$srcVault['name']} (Available: {$senderSafeBalFmt} DZD)"], 400);
                return;
            }

            // 2. Check physical safe balance if moving between different physical vaults
            $srcBalBefore = (string)$srcVault['current_balance'];
            if ($fromVaultId !== $toVaultId && Decimal::comp($srcBalBefore, $amount) < 0) {
                $db->rollBack();
                $srcAvailFmt = Decimal::format($srcBalBefore, 2);
                Response::json(['error' => "Insufficient physical cash in {$srcVault['name']} (Available: {$srcAvailFmt} DZD)"], 400);
                return;
            }

            $newSrcBal = ($fromVaultId !== $toVaultId) ? Decimal::sub($srcBalBefore, $amount) : $srcBalBefore;
            $dstBalBefore = (string)$dstVault['current_balance'];
            $newDstBal = ($fromVaultId !== $toVaultId) ? Decimal::add($dstBalBefore, $amount) : $dstBalBefore;

            $uidOut = 'TX-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
            $uidIn  = 'TX-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));

            // Outflow from sender
            $insOut = $db->prepare("INSERT INTO cash_transactions (uid, vault_id, user_id, type, direction, amount, balance_before, balance_after, related_entity_type, related_entity_id, note, created_at) 
                VALUES (:uid, :vid, :uid_user, 'transfer_out', 'out', :amt, :bb, :ba, 'user', :rei, :note, NOW())");
            $insOut->execute([
                'uid'      => $uidOut,
                'vid'      => $fromVaultId,
                'uid_user' => $senderId,
                'amt'      => $amount,
                'bb'       => $srcBalBefore,
                'ba'       => $newSrcBal,
                'rei'      => $recipientId,
                'note'     => $note . " (Transferred to {$toSafe['name']})"
            ]);
            $txOutId = (int)$db->lastInsertId();

            // Inflow to recipient
            $insIn = $db->prepare("INSERT INTO cash_transactions (uid, vault_id, user_id, type, direction, amount, balance_before, balance_after, related_entity_type, related_entity_id, note, created_at) 
                VALUES (:uid, :vid, :uid_user, 'transfer_in', 'in', :amt, :bb, :ba, 'user', :rei, :note, NOW())");
            $insIn->execute([
                'uid'      => $uidIn,
                'vid'      => $toVaultId,
                'uid_user' => $recipientId,
                'amt'      => $amount,
                'bb'       => $dstBalBefore,
                'ba'       => $newDstBal,
                'rei'      => $senderId,
                'note'     => $note . " (Transferred from {$fromSafe['name']})"
            ]);
            $txInId = (int)$db->lastInsertId();

            // Update physical vault balances if moving between different safes
            if ($fromVaultId !== $toVaultId) {
                $db->prepare("UPDATE cash_vaults SET current_balance = :bal, updated_at = NOW() WHERE id = :id")->execute(['bal' => $newSrcBal, 'id' => $fromVaultId]);
                $db->prepare("UPDATE cash_vaults SET current_balance = :bal, updated_at = NOW() WHERE id = :id")->execute(['bal' => $newDstBal, 'id' => $toVaultId]);
            }

            $db->commit();

            try {
                SystemLog::write(
                    'cash_vault',
                    'funds_transferred',
                    $txOutId,
                    "Transfer: {$amount} DZD",
                    json_encode([
                        'from_safe'       => $srcVault['name'],
                        'to_safe'         => $dstVault['name'],
                        'sender_id'       => $senderId,
                        'recipient_id'    => $recipientId,
                        'amount'          => $amount,
                        'from_balance_bb' => $srcBalBefore,
                        'from_balance_ba' => $newSrcBal,
                        'note'            => $note
                    ]),
                    $senderId
                );
            } catch (\Throwable $logEx) {
                error_log("Failed to write transfer log: " . $logEx->getMessage());
            }

            Response::json([
                'ok'           => true,
                'message'      => 'Funds transferred successfully',
                'tx_out_id'    => $txOutId,
                'tx_in_id'     => $txInId,
                'uid_out'      => $uidOut,
                'uid_in'       => $uidIn,
                'from_balance' => $newSrcBal,
                'to_balance'   => $newDstBal
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) $db->rollBack();
            error_log("Failed to transfer vault funds in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to transfer funds. Please check server logs.'], 500);
        }
    }

    /** POST /api/cash-vault/setup - Initialize or update starting capital for a vault */
    public function setupVault(array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);
        $safes = $this->ensureTwoSafes($db);

        $userId = $_SESSION['user_id'] ?? null;
        if ($userId) {
            $uStmt = $db->prepare('SELECT is_admin FROM users WHERE id = :id');
            $uStmt->execute(['id' => $userId]);
            $isAdmin = (int)($uStmt->fetchColumn() ?: 0);
            if ($isAdmin !== 1) {
                Response::json(['error' => 'Only administrators can initialize vault starting capital'], 403);
                return;
            }
        }

        $safeKey = trim((string)($data['safe_key'] ?? 'crypto_safe'));
        $targetSafe = ($safeKey === 'services_safe') ? $safes['services_safe'] : $safes['crypto_safe'];
        $amountRaw = trim((string)($data['amount'] ?? '0'));
        $amount = is_numeric($amountRaw) ? Decimal::truncate($amountRaw, 16) : '0';

        $db->prepare("UPDATE cash_vaults SET starting_balance = :sb, current_balance = :cb, updated_at = NOW() WHERE id = :id")
            ->execute(['sb' => $amount, 'cb' => $amount, 'id' => (int)$targetSafe['id']]);

        Response::json(['ok' => true, 'message' => 'Vault initialized successfully']);
    }
}

/* [END_OF_MODULE_SECURITY_SEAL] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
