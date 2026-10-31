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
require_once __DIR__ . '/../Utils/Decimal.php';
require_once __DIR__ . '/../Utils/EntityVersion.php';
require_once __DIR__ . '/CashVaultController.php';
require_once __DIR__ . '/PartnerSettlementsController.php';

use App\Utils\EntityVersion;

class OrdersController
{
    private static bool $migrated = false;
    private static bool $columnsEnsured = false;
    private static bool $historyTableEnsured = false;
    private static bool $purchasesSettleEnsured = false;

    public function __construct()
    {
        if (self::$migrated) {
            return;
        }
        self::$migrated = true;

        try {
            $this->ensureOrderMetaColumns(Database::getConnection());
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
    }

    /**
     * Format sequential order counter according to Rule 87 (Compact K-Notation).
     * 1 to 999: plain integer ('1'..'999')
     * 1000+: compact K-notation ('1K000', '1K001', '1K999', '2K000', etc.)
     */
    public static function formatOrderCounter(int $id): string
    {
        if ($id <= 0) return '0';
        if ($id < 1000) {
            return (string)$id;
        }
        $thousands = (int)floor($id / 1000);
        $remainder = $id % 1000;
        return $thousands . 'K' . str_pad((string)$remainder, 3, '0', STR_PAD_LEFT);
    }

    public static function ensureOrderMetaColumns(PDO $db): void
    {
        if (self::$columnsEnsured || !empty($_SESSION['orders_schema_verified'])) {
            self::$columnsEnsured = true;
            return;
        }
        self::$columnsEnsured = true;

        $columns = [
            'uid' => 'VARCHAR(50) UNIQUE DEFAULT NULL',
            'completed_at' => 'DATETIME NULL',
            'completed_by' => 'INT NULL',
            'return_reason' => 'TEXT NULL',
            'returned_at' => 'DATETIME NULL',
            'returned_by' => 'INT NULL',
            'deleted_at' => 'DATETIME NULL',
            'deleted_by' => 'INT NULL',
            'delete_reason' => 'TEXT NULL',
            'custom_checklist' => 'LONGTEXT NULL',
            'manual_costs_data' => 'LONGTEXT NULL',
            'service_owners_data' => 'LONGTEXT NULL',
            'created_from_order_id' => 'INT NULL',
            // Pending-payment ("money owed") tracking.
            'money_pending_at' => 'DATETIME NULL',
            'money_pending_by' => 'INT NULL',
            'paid_at' => 'DATETIME NULL',
            'paid_by' => 'INT NULL',
            // Customer receivables (mirror of supplier payables on purchases):
            // how much the customer has paid so far toward an owed order, the
            // rolling due date, and the Walk-in (one-off) buyer free-text note.
            'amount_paid' => 'DECIMAL(32,16) NOT NULL DEFAULT 0',
            'due_date' => 'DATETIME NULL',
            'customer_note' => 'TEXT NULL',
            // Per-user cost/profit attribution (who this order's profit belongs to).
            'owner_user_id' => 'INT NULL',
            // Coin-as-product barter (sell side): the customer paid in a held product
            // instead of cash. settle_product_id = received coin, settle_quantity = how
            // much, settle_purchase_id = the stock lot created for the received coin.
            'settle_kind' => "VARCHAR(10) NOT NULL DEFAULT 'cash'",
            'settle_product_id' => 'INT NULL',
            'settle_quantity' => 'DECIMAL(32,16) NULL',
            'settle_purchase_id' => 'INT NULL',
            // Exact FIFO lots consumed of the sold coin (JSON) so a coin-sale can
            // be unwound precisely on delete. NULL on cash + legacy swaps.
            'settle_consumed' => 'TEXT NULL',
            'parts_owner_profit' => 'DECIMAL(32,16) NOT NULL DEFAULT 0',
            'service_owner_profit' => 'DECIMAL(32,16) NOT NULL DEFAULT 0',
            'parts_cost_reimbursement' => 'DECIMAL(32,16) NOT NULL DEFAULT 0',
            'return_strategy' => 'VARCHAR(30) NULL DEFAULT NULL',
            'agreement_status' => "VARCHAR(30) NOT NULL DEFAULT 'all_accepted'",
            'has_refusal' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'is_locked_for_edit' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'agreement_version' => 'INT NOT NULL DEFAULT 1',
            'refused_at' => 'DATETIME NULL',
            'refused_by' => 'INT NULL',
            'refusal_reason' => 'TEXT NULL',
            'has_partial_returns' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'refusal_card_dismissed' => 'TINYINT(1) NOT NULL DEFAULT 0',
            // Phone Sales & Repair Workshop Custody & Warranty (Mission 52)
            'device_model' => 'VARCHAR(190) NULL',
            'device_imei' => 'VARCHAR(100) NULL',
            'device_passcode' => 'VARCHAR(100) NULL',
            'device_condition' => 'TEXT NULL',
            'device_custody_status' => "VARCHAR(50) NOT NULL DEFAULT 'on_me'",
            'diagnostic_matrix' => 'LONGTEXT NULL',
            'handover_qc_matrix' => 'LONGTEXT NULL',
            'warranty_seal' => 'VARCHAR(100) NULL',
            'warranty_period' => 'VARCHAR(100) NULL',
            'warranty_expiry_date' => 'DATETIME NULL'
        ];

        foreach ($columns as $column => $definition) {
            $stmt = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'orders' AND COLUMN_NAME = :column");
            $stmt->execute(['column' => $column]);
            if (!$stmt->fetch()) {
                $db->exec("ALTER TABLE orders ADD COLUMN $column $definition");
            }
        }

        // Auto-migrate: ensure custom_checklist, manual_costs_data, service_owners_data are LONGTEXT for file/PDF attachments
        try {
            $db->exec("ALTER TABLE orders MODIFY COLUMN custom_checklist LONGTEXT NULL");
            $db->exec("ALTER TABLE orders MODIFY COLUMN manual_costs_data LONGTEXT NULL");
            $db->exec("ALTER TABLE orders MODIFY COLUMN service_owners_data LONGTEXT NULL");

            $hasImeiIdx = $db->query("SHOW INDEX FROM orders WHERE Key_name = 'idx_orders_imei'")->fetch();
            if (!$hasImeiIdx) {
                $db->exec("ALTER TABLE orders ADD INDEX idx_orders_imei (device_imei)");
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // Auto-migrate attribution & split columns in order_items
        $itemCols = [
            'owner_user_id' => 'INT NULL',
            'cost_owner_id' => 'INT NULL',
            'profit_split_type' => "VARCHAR(20) NOT NULL DEFAULT 'none'",
            'product_owner_share_pct' => 'DECIMAL(8,4) NULL DEFAULT 0',
            'product_owner_profit' => 'DECIMAL(32,16) NOT NULL DEFAULT 0',
            'service_owner_profit' => 'DECIMAL(32,16) NOT NULL DEFAULT 0',
            'return_purchase_id' => 'INT NULL DEFAULT NULL',
            'return_destination' => 'VARCHAR(30) NULL DEFAULT NULL',
            'return_supplier_id' => 'INT NULL DEFAULT NULL',
            'return_acceptance_status' => 'VARCHAR(20) NULL DEFAULT NULL',
            'is_returned' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'returned_at' => 'DATETIME NULL DEFAULT NULL',
            'returned_by' => 'INT NULL DEFAULT NULL',
            'description' => 'TEXT NULL'
        ];
        foreach ($itemCols as $col => $def) {
            $stmtItemCol = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'order_items' AND COLUMN_NAME = :col");
            $stmtItemCol->execute(['col' => $col]);
            if (!$stmtItemCol->fetch()) {
                $db->exec("ALTER TABLE order_items ADD COLUMN $col $def");
            }
        }

        // Auto-migrate return lot tracking columns in purchases
        $purCols = [
            'created_from_order_id' => 'INT NULL DEFAULT NULL',
            'created_from_purchase_id' => 'INT NULL DEFAULT NULL',
            'valuation_adjustment' => 'DECIMAL(32,16) NOT NULL DEFAULT 0',
        ];
        foreach ($purCols as $col => $def) {
            $stmtPurCol = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'purchases' AND COLUMN_NAME = :col");
            $stmtPurCol->execute(['col' => $col]);
            if (!$stmtPurCol->fetch()) {
                $db->exec("ALTER TABLE purchases ADD COLUMN $col $def");
            }
        }

        // Auto-migrate high-traffic indexes (Rule 10)
        $idxMigrations = [
            'order_items' => [
                'idx_order_items_return_pur' => 'return_purchase_id',
                'idx_order_items_return_supp' => 'return_supplier_id',
            ],
            'orders' => [
                'idx_orders_created_from' => 'created_from_order_id',
            ],
        ];
        foreach ($idxMigrations as $tbl => $indexes) {
            foreach ($indexes as $idxName => $colName) {
                try {
                    $chkIdx = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.STATISTICS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = :tbl AND INDEX_NAME = :idx");
                    $chkIdx->execute(['tbl' => $tbl, 'idx' => $idxName]);
                    if (!$chkIdx->fetch()) {
                        $db->exec("ALTER TABLE {$tbl} ADD INDEX {$idxName} ({$colName})");
                    }
                } catch (\Throwable $e) {}
            }
        }

        // Back-fill the owner from the creator on any rows still missing it, so the
        // per-user cost/profit lens works on historical data immediately. Robust to
        // however the column was added (controller here OR "Verify & build"); the
        // guard avoids a write once everything is populated. Idempotent.
        if ($db->query("SELECT 1 FROM orders WHERE owner_user_id IS NULL AND created_by IS NOT NULL LIMIT 1")->fetch()) {
            $db->exec("UPDATE orders SET owner_user_id = created_by WHERE owner_user_id IS NULL");
        }

        // Finding V-013: Guard unindexed repair check to prevent full table scan on hot path
        try {
            if ($db->query("SELECT 1 FROM orders WHERE status = 'completed' AND (agreement_status IN ('pending', 'partial', 'refused', 'has_refusal') OR has_refusal = 1) LIMIT 1")->fetch()) {
                $db->exec("UPDATE orders SET status = 'pending' WHERE status = 'completed' AND (agreement_status IN ('pending', 'partial', 'refused', 'has_refusal') OR has_refusal = 1)");
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        $_SESSION['orders_schema_verified'] = true;
    }

    public static function ensureOrderHistoryTable(PDO $db): void
    {
        if (self::$historyTableEnsured || !empty($_SESSION['order_history_table_ensured'])) {
            self::$historyTableEnsured = true;
            return;
        }
        if ($db->inTransaction()) {
            return;
        }
        self::$historyTableEnsured = true;

        $db->exec("CREATE TABLE IF NOT EXISTS order_history (
            id INT AUTO_INCREMENT PRIMARY KEY,
            order_id INT NOT NULL,
            edited_by INT NULL,
            action VARCHAR(50) NOT NULL,
            changes JSON NULL,
            reason TEXT NULL,
            note TEXT NULL,
            snapshot LONGTEXT NULL,
            created_at DATETIME NOT NULL,
            FOREIGN KEY (order_id) REFERENCES orders(id),
            FOREIGN KEY (edited_by) REFERENCES users(id) ON DELETE SET NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        // Ensure snapshot column exists on order_history
        try {
            $stmtCol = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'order_history' AND COLUMN_NAME = 'snapshot'");
            $stmtCol->execute();
            if (!$stmtCol->fetch()) {
                $db->exec("ALTER TABLE order_history ADD COLUMN snapshot LONGTEXT NULL");
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // Ensure note column exists on order_history
        try {
            $stmtCol = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'order_history' AND COLUMN_NAME = 'note'");
            $stmtCol->execute();
            if (!$stmtCol->fetch()) {
                $db->exec("ALTER TABLE order_history ADD COLUMN note TEXT NULL AFTER reason");
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // Ensure order_attachments table exists
        $db->exec("CREATE TABLE IF NOT EXISTS order_attachments (
            id INT AUTO_INCREMENT PRIMARY KEY,
            order_id INT NOT NULL,
            attachment_uid VARCHAR(100) NULL,
            item_id VARCHAR(100) NULL,
            item_title VARCHAR(255) NULL,
            file_name VARCHAR(255) NOT NULL,
            file_type VARCHAR(100) NULL,
            file_size INT NULL,
            file_data LONGTEXT NULL,
            uploaded_by INT NULL,
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            is_deleted TINYINT(1) NOT NULL DEFAULT 0,
            deleted_at DATETIME NULL,
            deleted_by INT NULL,
            delete_reason VARCHAR(255) NULL,
            INDEX idx_order_att_order (order_id),
            INDEX idx_order_att_uid (attachment_uid),
            INDEX idx_order_att_deleted (is_deleted),
            FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
            FOREIGN KEY (uploaded_by) REFERENCES users(id) ON DELETE SET NULL,
            FOREIGN KEY (deleted_by) REFERENCES users(id) ON DELETE SET NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
        $_SESSION['order_history_table_ensured'] = true;
    }

    /**
     * Capture a comprehensive point-in-time snapshot of an order.
     */
    public static function captureOrderSnapshot(PDO $db, int $orderId): array
    {
        self::ensureOrderHistoryTable($db);

        $stmt = $db->prepare('SELECT o.*, c.name as customer_name, u.username as creator_name,
            uo.username as owner_name, uc.username as completed_by_name, ur.username as returned_by_name,
            ud.username as deleted_by_name, ump.username as money_pending_by_name, up.username as paid_by_name
            FROM orders o
            LEFT JOIN customers c ON o.customer_id = c.id
            LEFT JOIN users u ON o.created_by = u.id
            LEFT JOIN users uo ON o.owner_user_id = uo.id
            LEFT JOIN users uc ON o.completed_by = uc.id
            LEFT JOIN users ur ON o.returned_by = ur.id
            LEFT JOIN users ud ON o.deleted_by = ud.id
            LEFT JOIN users ump ON o.money_pending_by = ump.id
            LEFT JOIN users up ON o.paid_by = up.id
            WHERE o.id = :id');
        $stmt->execute(['id' => $orderId]);
        $order = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$order) {
            return [];
        }

        // Clean checklist to keep snapshot lightweight (strip fileData Base64 from inline checklist, rely on order_attachments)
        $checklist = !empty($order['custom_checklist']) ? json_decode($order['custom_checklist'], true) : [];
        if (is_array($checklist)) {
            foreach ($checklist as &$cItem) {
                if (isset($cItem['fileData'])) {
                    $cItem['hasData'] = true;
                    unset($cItem['fileData']);
                }
                if (isset($cItem['attachments']) && is_array($cItem['attachments'])) {
                    foreach ($cItem['attachments'] as &$cAtt) {
                        if (isset($cAtt['fileData'])) {
                            $cAtt['hasData'] = true;
                            unset($cAtt['fileData']);
                        }
                    }
                }
            }
            unset($cItem);
        }

        // Rule 8 Privacy: Redact raw client unlock passcodes in historical audit logs
        if (!empty($order['device_passcode'])) {
            $order['device_passcode'] = '••••••';
        }

        $serviceOwners = !empty($order['service_owners_data']) ? json_decode($order['service_owners_data'], true) : [];
        $manualCosts = !empty($order['manual_costs_data']) ? json_decode($order['manual_costs_data'], true) : [];

        // Fetch order items with cost ownership & profit split
        $itemsStmt = $db->prepare('SELECT oi.*, p.name as product_name, p.uid as product_uid,
            u_owner.username as cost_owner_name
            FROM order_items oi
            LEFT JOIN products p ON oi.product_id = p.id
            LEFT JOIN users u_owner ON oi.cost_owner_id = u_owner.id
            WHERE oi.order_id = :id
            ORDER BY oi.id ASC');
        $itemsStmt->execute(['id' => $orderId]);
        $items = $itemsStmt->fetchAll(PDO::FETCH_ASSOC);

        // Fetch partner settlements
        $psStmt = $db->prepare("SELECT ps.id, ps.uid, ps.payee_user_id, ps.amount,
            ps.settlement_type, ps.acceptance_status, ps.payment_demand_status, ps.removal_request_status,
            ps.removal_refund_eligible, ps.status, ps.created_at, ps.accepted_at, ps.refused_at,
            u.username as payee_username
            FROM partner_settlements ps
            LEFT JOIN users u ON ps.payee_user_id = u.id
            WHERE ps.related_entity_type = 'orders' AND ps.related_entity_id = :id
            ORDER BY ps.id ASC");
        $psStmt->execute(['id' => $orderId]);
        $settlements = $psStmt->fetchAll(PDO::FETCH_ASSOC);

        // Fetch order attachments metadata (exclude raw file_data)
        $attStmt = $db->prepare("SELECT id, attachment_uid, item_id, item_title, file_name, file_type, file_size,
            uploaded_by, is_deleted, created_at, deleted_at, deleted_by, delete_reason
            FROM order_attachments
            WHERE order_id = :id
            ORDER BY id ASC");
        $attStmt->execute(['id' => $orderId]);
        $attachments = $attStmt->fetchAll(PDO::FETCH_ASSOC);

        return [
            'captured_at' => date('Y-m-d H:i:s'),
            'order_id' => $orderId,
            'uid' => $order['uid'] ?? null,
            'status' => $order['status'] ?? null,
            'agreement_status' => $order['agreement_status'] ?? null,
            'total' => (string)($order['total'] ?? '0'),
            'profit' => (string)($order['profit'] ?? '0'),
            'manual_cost' => (string)($order['manual_cost'] ?? '0'),
            'products_cost' => (string)($order['products_cost'] ?? '0'),
            'order' => $order,
            'team' => $serviceOwners,
            'manual_costs' => $manualCosts,
            'checklist' => $checklist,
            'items' => $items,
            'settlements' => $settlements,
            'attachments' => $attachments
        ];
    }

    /**
     * Record an auditable event in order_history with an optional full snapshot.
     */
    public static function recordOrderHistory(PDO $db, int $orderId, ?int $userId, string $action, ?array $changes = null, ?string $reason = null, ?array $snapshot = null, ?string $note = null): void
    {
        self::ensureOrderHistoryTable($db);

        if ($snapshot === null) {
            $snapshot = self::captureOrderSnapshot($db, $orderId);
        }

        $effectiveNote = $note !== null ? $note : $reason;

        $stmt = $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, reason, note, snapshot, created_at)
            VALUES (:order_id, :edited_by, :action, :changes, :reason, :note, :snapshot, NOW())');
        $stmt->execute([
            'order_id' => $orderId,
            'edited_by' => $userId,
            'action' => $action,
            'changes' => $changes !== null ? json_encode($changes, JSON_UNESCAPED_UNICODE) : null,
            'reason' => $reason,
            'note' => $effectiveNote,
            'snapshot' => !empty($snapshot) ? json_encode($snapshot, JSON_UNESCAPED_UNICODE) : null
        ]);
    }

    /**
     * Synchronize checklist attachments into the dedicated order_attachments table.
     * Soft-deletes removed files (NEVER hard delete).
     */
    public static function syncOrderAttachments(PDO $db, int $orderId, array $checklist, ?int $userId): void
    {
        self::ensureOrderHistoryTable($db);

        $activeAttIds = [];

        // Safe Attachment Data Validator (Magic bytes, strict MIME whitelist, PDF script block, SVG block, 25MB cap)
        $validateFileBytes = function (?string $rawBase64, string &$outMimeType): ?string {
            if (empty($rawBase64) || !is_string($rawBase64)) {
                return null;
            }
            $payload = $rawBase64;
            $prefixMime = '';
            if (str_starts_with($payload, 'data:') && strpos($payload, ';base64,') !== false) {
                $semi = strpos($payload, ';base64,');
                $prefixMime = strtolower(trim(substr($payload, 5, $semi - 5)));
                $payload = substr($payload, $semi + 8);
            }
            $clean = preg_replace('/\s+/', '', $payload);
            $bytes = base64_decode($clean, true);
            if ($bytes === false || strlen($bytes) === 0) {
                return null;
            }
            // Max size 25MB
            if (strlen($bytes) > 25 * 1024 * 1024) {
                return null;
            }
            // Prohibit executable scripts and SVG
            $head = substr($bytes, 0, 8192);
            if (stripos($head, '<?php') !== false || stripos($head, '<?=') !== false || stripos($head, '<script') !== false || stripos($head, '<svg') !== false) {
                return null;
            }

            // Sniff magic bytes
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $detectedMime = finfo_buffer($finfo, $bytes) ?: 'application/octet-stream';
            finfo_close($finfo);

            // Deep PDF script inspection
            if ($detectedMime === 'application/pdf' || str_starts_with($bytes, '%PDF-') || $prefixMime === 'application/pdf') {
                if (!str_starts_with($bytes, '%PDF-')) {
                    return null;
                }
                $scanChunk = substr($bytes, 0, 2 * 1024 * 1024);
                if (preg_match('/\/(JavaScript|JS|Launch|EmbeddedFiles)\b/i', $scanChunk)) {
                    return null;
                }
                $detectedMime = 'application/pdf';
            }

            $allowedMimes = [
                'image/jpeg', 'image/png', 'image/webp', 'image/gif', 'image/heic', 'image/heif', 'image/avif', 'image/bmp',
                'video/mp4', 'video/webm', 'video/quicktime', 'video/x-m4v',
                'audio/webm', 'audio/mp4', 'audio/ogg', 'audio/wav', 'audio/mpeg',
                'application/pdf'
            ];

            if (!in_array($detectedMime, $allowedMimes, true)) {
                return null;
            }

            $outMimeType = $detectedMime;
            return 'data:' . $detectedMime . ';base64,' . $clean;
        };

        foreach ($checklist as $item) {
            $itemId = $item['id'] ?? null;
            $rawTitle = $item['text'] ?? $item['title'] ?? $item['name'] ?? '';
            $itemTitle = is_string($rawTitle) ? trim($rawTitle) : '';

            // 1. Check nested attachments array
            $nestedAtts = is_array($item['attachments'] ?? null) ? $item['attachments'] : [];
            foreach ($nestedAtts as $att) {
                $uid = $att['id'] ?? $att['uid'] ?? null;
                $rawFileName = $att['fileName'] ?? $att['name'] ?? '';
                $fileName = is_string($rawFileName) ? trim($rawFileName) : '';
                if ($fileName === '') continue;
                $fileType = is_string($att['fileType'] ?? $att['type'] ?? null) ? ($att['fileType'] ?? $att['type']) : 'application/octet-stream';
                $fileData = null;
                if (!empty($att['fileData'])) {
                    $validatedData = $validateFileBytes($att['fileData'], $fileType);
                    if ($validatedData !== null) {
                        $fileData = $validatedData;
                    }
                }
                $fileSize = !empty($att['fileSize']) ? (int)$att['fileSize'] : ($fileData ? (int)(strlen($fileData) * 0.75) : 0);

                // Check existing attachment in DB
                $findStmt = $db->prepare("SELECT id, is_deleted, file_data FROM order_attachments WHERE order_id = :oid AND (attachment_uid = :uid OR file_name = :fname) LIMIT 1");
                $findStmt->execute([
                    'oid' => $orderId,
                    'uid' => $uid ?: 'none_' . uniqid(),
                    'fname' => $fileName
                ]);
                $existing = $findStmt->fetch(PDO::FETCH_ASSOC);

                if ($existing) {
                    $activeAttIds[] = (int)$existing['id'];

                    $updFields = ["is_deleted = 0", "deleted_at = NULL", "deleted_by = NULL", "delete_reason = NULL"];
                    $updParams = ['id' => $existing['id']];
                    if (!empty($fileData) && empty($existing['file_data'])) {
                        $updFields[] = "file_data = :fdata";
                        $updParams['fdata'] = $fileData;
                        $updFields[] = "file_type = :ftype";
                        $updParams['ftype'] = $fileType;
                    }
                    if ($itemTitle !== '') {
                        $updFields[] = "item_title = :ititle";
                        $updParams['ititle'] = $itemTitle;
                    }
                    $db->prepare("UPDATE order_attachments SET " . implode(', ', $updFields) . " WHERE id = :id")->execute($updParams);
                } else {
                    $newUid = $uid ?: ('att_' . bin2hex(random_bytes(8)));
                    $insStmt = $db->prepare("INSERT INTO order_attachments (order_id, attachment_uid, item_id, item_title, file_name, file_type, file_size, file_data, uploaded_by, created_at, is_deleted)
                        VALUES (:oid, :uid, :item_id, :item_title, :file_name, :file_type, :file_size, :file_data, :uploaded_by, NOW(), 0)");
                    $insStmt->execute([
                        'oid' => $orderId,
                        'uid' => $newUid,
                        'item_id' => $itemId,
                        'item_title' => $itemTitle,
                        'file_name' => $fileName,
                        'file_type' => $fileType,
                        'file_size' => $fileSize,
                        'file_data' => $fileData,
                        'uploaded_by' => $userId
                    ]);
                    $activeAttIds[] = (int)$db->lastInsertId();
                }
            }

            // 2. Check direct fileData on item itself
            if (!empty($item['fileName']) || !empty($item['fileData'])) {
                $uid = $item['id'] ?? null;
                $rawItemFile = $item['fileName'] ?? ($itemTitle ?: 'Document');
                $fileName = is_string($rawItemFile) ? trim($rawItemFile) : 'Document';
                $fileType = is_string($item['fileType'] ?? $item['type'] ?? null) ? ($item['fileType'] ?? $item['type']) : 'application/octet-stream';
                $fileData = null;
                if (!empty($item['fileData'])) {
                    $validatedData = $validateFileBytes($item['fileData'], $fileType);
                    if ($validatedData !== null) {
                        $fileData = $validatedData;
                    }
                }
                $fileSize = !empty($item['fileSize']) ? (int)$item['fileSize'] : ($fileData ? (int)(strlen($fileData) * 0.75) : 0);

                $findStmt = $db->prepare("SELECT id, is_deleted, file_data FROM order_attachments WHERE order_id = :oid AND (attachment_uid = :uid OR file_name = :fname) LIMIT 1");
                $findStmt->execute([
                    'oid' => $orderId,
                    'uid' => $uid ?: 'none_' . uniqid(),
                    'fname' => $fileName
                ]);
                $existing = $findStmt->fetch(PDO::FETCH_ASSOC);

                if ($existing) {
                    $activeAttIds[] = (int)$existing['id'];
                    $updFields = ["is_deleted = 0", "deleted_at = NULL", "deleted_by = NULL", "delete_reason = NULL"];
                    $updParams = ['id' => $existing['id']];
                    if (!empty($fileData) && empty($existing['file_data'])) {
                        $updFields[] = "file_data = :fdata";
                        $updParams['fdata'] = $fileData;
                        $updFields[] = "file_type = :ftype";
                        $updParams['ftype'] = $fileType;
                    }
                    if ($itemTitle !== '') {
                        $updFields[] = "item_title = :ititle";
                        $updParams['ititle'] = $itemTitle;
                    }
                    $db->prepare("UPDATE order_attachments SET " . implode(', ', $updFields) . " WHERE id = :id")->execute($updParams);
                } else {
                    $newUid = $uid ?: ('att_' . bin2hex(random_bytes(8)));
                    $insStmt = $db->prepare("INSERT INTO order_attachments (order_id, attachment_uid, item_id, item_title, file_name, file_type, file_size, file_data, uploaded_by, created_at, is_deleted)
                        VALUES (:oid, :uid, :item_id, :item_title, :file_name, :file_type, :file_size, :file_data, :uploaded_by, NOW(), 0)");
                    $insStmt->execute([
                        'oid' => $orderId,
                        'uid' => $newUid,
                        'item_id' => $itemId,
                        'item_title' => $itemTitle,
                        'file_name' => $fileName,
                        'file_type' => $fileType,
                        'file_size' => $fileSize,
                        'file_data' => $fileData,
                        'uploaded_by' => $userId
                    ]);
                    $activeAttIds[] = (int)$db->lastInsertId();
                }
            }
        }

        // Soft-delete attachments that were removed from the checklist
        if (!empty($activeAttIds)) {
            $inClause = implode(',', array_map('intval', $activeAttIds));
            $softDelStmt = $db->prepare("UPDATE order_attachments 
                SET is_deleted = 1, deleted_at = NOW(), deleted_by = :uid, delete_reason = 'Removed from checklist'
                WHERE order_id = :oid AND is_deleted = 0 AND id NOT IN ($inClause)");
            $softDelStmt->execute([
                'oid' => $orderId,
                'uid' => $userId
            ]);
        } else {
            $softDelStmt = $db->prepare("UPDATE order_attachments 
                SET is_deleted = 1, deleted_at = NOW(), deleted_by = :uid, delete_reason = 'All attachments removed'
                WHERE order_id = :oid AND is_deleted = 0");
            $softDelStmt->execute([
                'oid' => $orderId,
                'uid' => $userId
            ]);
        }
    }

    /** GET /api/orders/{id}/attachments - List all active & soft-deleted attachments */
    public function getAttachments(string $id): void
    {
        $db = Database::getConnection();
        self::ensureOrderHistoryTable($db);

        $stmt = $db->prepare("SELECT id, attachment_uid, item_id, item_title, file_name, file_type, file_type as mime_type, file_size, file_data,
            uploaded_by, is_deleted, created_at, deleted_at, deleted_by, delete_reason,
            CASE WHEN file_data IS NOT NULL AND file_data != '' THEN 1 ELSE 0 END as has_data
            FROM order_attachments
            WHERE order_id = :id
            ORDER BY id ASC");
        $stmt->execute(['id' => $id]);
        $attachments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        Response::json([
            'ok' => true,
            'order_id' => (int)$id,
            'attachments' => $attachments
        ]);
    }

    /** GET /api/orders/{id}/attachments/{attId}/download - Download / preview attachment */
    public function downloadAttachment(string $id, string $attId): void
    {
        $db = Database::getConnection();
        self::ensureOrderHistoryTable($db);

        $stmt = $db->prepare("SELECT id, attachment_uid, item_id, item_title, file_name, file_type, file_size, file_data 
            FROM order_attachments 
            WHERE (id = :att_id OR attachment_uid = :att_uid OR file_name = :att_name) AND order_id = :oid 
            LIMIT 1");
        $stmt->execute([
            'att_id' => $attId,
            'att_uid' => $attId,
            'att_name' => $attId,
            'oid' => $id
        ]);
        $att = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$att || empty($att['file_data'])) {
            Response::json(['error' => 'Attachment file data not found'], 404);
            return;
        }

        $fileSize = !empty($att['file_size']) ? (int)$att['file_size'] : strlen($att['file_data']);
        $fileType = !empty($att['file_type']) ? $att['file_type'] : 'application/octet-stream';

        Response::json([
            'ok' => true,
            'file_name' => $att['file_name'],
            'file_type' => $fileType,
            'mime_type' => $fileType,
            'file_size' => $fileSize,
            'file_data' => $att['file_data'],
            'attachment' => [
                'id' => $att['id'],
                'attachment_uid' => $att['attachment_uid'] ?? null,
                'item_id' => $att['item_id'] ?? null,
                'item_title' => $att['item_title'] ?? null,
                'file_name' => $att['file_name'],
                'file_type' => $fileType,
                'mime_type' => $fileType,
                'file_size' => $fileSize,
                'file_data' => $att['file_data']
            ]
        ]);
    }

    /** POST /api/orders/{id}/attachments/{attId}/restore - Restore soft-deleted attachment */
    public function restoreAttachment(string $id, string $attId): void
    {
        if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
            session_start();
        }
        $sessionUser = $_SESSION['user_id'] ?? null;
        if (!$sessionUser) {
            Response::json(['error' => 'Authentication required'], 401);
            return;
        }

        $db = Database::getConnection();
        self::ensureOrderHistoryTable($db);

        $stmt = $db->prepare("SELECT * FROM order_attachments WHERE id = :att_id AND order_id = :oid");
        $stmt->execute(['att_id' => $attId, 'oid' => $id]);
        $attachment = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$attachment) {
            Response::json(['error' => 'Attachment not found'], 404);
            return;
        }

        // Restore attachment record
        $db->prepare("UPDATE order_attachments SET is_deleted = 0, deleted_at = NULL, deleted_by = NULL, delete_reason = NULL WHERE id = :att_id")
           ->execute(['att_id' => $attId]);

        // Re-inject attachment into orders.custom_checklist
        $orderStmt = $db->prepare("SELECT id, uid, custom_checklist FROM orders WHERE id = :id");
        $orderStmt->execute(['id' => $id]);
        $order = $orderStmt->fetch(PDO::FETCH_ASSOC);

        if ($order) {
            $checklist = !empty($order['custom_checklist']) ? json_decode($order['custom_checklist'], true) : [];
            if (!is_array($checklist)) $checklist = [];

            $foundItem = false;
            foreach ($checklist as &$item) {
                if (($attachment['item_id'] && ($item['id'] ?? '') === $attachment['item_id']) ||
                    ($attachment['item_title'] && ($item['text'] ?? '') === $attachment['item_title'])) {
                    if (!isset($item['attachments']) || !is_array($item['attachments'])) {
                        $item['attachments'] = [];
                    }
                    $item['attachments'][] = [
                        'id' => $attachment['attachment_uid'],
                        'fileName' => $attachment['file_name'],
                        'fileType' => $attachment['file_type'],
                        'fileSize' => $attachment['file_size'],
                        'fileData' => $attachment['file_data']
                    ];
                    $foundItem = true;
                    break;
                }
            }
            unset($item);

            if (!$foundItem) {
                $checklist[] = [
                    'id' => $attachment['item_id'] ?: ('chk_' . bin2hex(random_bytes(4))),
                    'text' => $attachment['item_title'] ?: $attachment['file_name'],
                    'status' => 'pending',
                    'docType' => 'restored_attachment',
                    'fileName' => $attachment['file_name'],
                    'attachments' => [
                        [
                            'id' => $attachment['attachment_uid'],
                            'fileName' => $attachment['file_name'],
                            'fileType' => $attachment['file_type'],
                            'fileSize' => $attachment['file_size'],
                            'fileData' => $attachment['file_data']
                        ]
                    ]
                ];
            }

            $db->prepare("UPDATE orders SET custom_checklist = :cl WHERE id = :id")
               ->execute(['cl' => json_encode($checklist, JSON_UNESCAPED_UNICODE), 'id' => $id]);

            // Record in order_history
            self::recordOrderHistory(
                $db,
                (int)$id,
                (int)$sessionUser,
                'attachment_restored',
                ['restored_file' => $attachment['file_name'], 'attachment_id' => $attId],
                "Restored attachment {$attachment['file_name']}"
            );

            SystemLog::write('orders', 'attachment_restored', (int)$id, "Order #" . ($order['uid'] ?? $id), "Attachment restored: {$attachment['file_name']}", (int)$sessionUser);
        }

        Response::json([
            'ok' => true,
            'message' => 'Attachment restored successfully',
            'attachment' => $attachment
        ]);
    }

    /**
     * Resolve the per-user cost/profit owner for an order/purchase. Accepts an
     * optional explicit owner_user_id; falls back to the current session user.
     * The id is only honored if it's a real, non-deleted user — otherwise the
     * fallback is used (never trust a client-supplied id blindly).
     */
    private function resolveOwnerUserId(PDO $db, array $data, ?int $fallback): ?int
    {
        $raw = $data['owner_user_id'] ?? null;
        if ($raw === null || $raw === '') {
            return $fallback;
        }
        $candidate = (int) $raw;
        if ($candidate <= 0) {
            return $fallback;
        }
        $stmt = $db->prepare('SELECT 1 FROM users WHERE id = :id AND deleted_at IS NULL');
        $stmt->execute(['id' => $candidate]);
        return $stmt->fetch() ? $candidate : $fallback;
    }

    /**
     * Make sure the coin-swap settle_* columns exist on the purchases table — the
     * sell-side swap writes a 'received' lot there. Mirror of
     * PurchasesController::ensurePurchasesTableColumns for just these columns, so
     * the order flow is self-contained on older DBs. MUST run BEFORE any open
     * transaction (DDL implicitly commits).
     */
    private function ensurePurchasesSettleColumns(PDO $db): void
    {
        if (self::$purchasesSettleEnsured) {
            return;
        }
        self::$purchasesSettleEnsured = true;

        $cols = [
            'settle_kind' => "VARCHAR(10) NOT NULL DEFAULT 'cash'",
            'settle_product_id' => 'INT NULL',
            'settle_quantity' => 'DECIMAL(32,16) NULL',
            'settle_order_id' => 'INT NULL',
            'settle_consumed' => 'TEXT NULL',
        ];
        foreach ($cols as $c => $def) {
            $s = $db->prepare("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'purchases' AND COLUMN_NAME = :c");
            $s->execute(['c' => $c]);
            if (!$s->fetch()) $db->exec("ALTER TABLE purchases ADD COLUMN $c $def");
        }
    }

    /**
     * FIFO-consume $qty units of a held product across its live purchase lots
     * (oldest first), lowering each lot's quantity_remaining / raising quantity_sold
     * and reducing products.quantity. Quantity only — a coin swap's DZD cost is entered
     * manually, not pulled from the lots. Returns null on success or an error string.
     * MUST run inside an open transaction.
     *
     * $consumed (by ref) is filled with the exact lots touched —
     * [['lot_id'=>int,'quantity'=>string], …] — so the coin-sale can be unwound
     * precisely on delete (see restoreConsumedLots()).
     */
    private function consumeFifo(PDO $db, int $productId, string $qty, ?array &$consumed = null): ?string
    {
        $consumed = [];
        if (Decimal::comp($qty, '0') <= 0) return 'Sold quantity must be greater than zero';

        $stmt = $db->prepare('SELECT id, quantity, quantity_reserved FROM products WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $productId]);
        $product = $stmt->fetch();
        if (!$product) return 'Sold product not found';
        $reserved = (string) ($product['quantity_reserved'] ?? '0');
        $available = Decimal::sub((string) $product['quantity'], $reserved);
        if (Decimal::comp($available, $qty) < 0) {
            return "Not enough unreserved stock of the sold product (have {$product['quantity']}, reserved {$reserved}, need {$qty})";
        }

        $lots = $db->prepare('SELECT id, quantity_remaining, quantity_reserved, quantity_sold FROM purchases WHERE product_id = :pid AND deleted_at IS NULL AND quantity_remaining > 0 AND (transfer_status IS NULL OR transfer_status NOT IN (\'pending_transfer\', \'pending_delegated\')) ORDER BY id ASC FOR UPDATE');
        $lots->execute(['pid' => $productId]);
        $rows = $lots->fetchAll();

        $remainingToTake = $qty;
        $upd = $db->prepare('UPDATE purchases SET quantity_remaining = :qr, quantity_sold = :qs WHERE id = :id');
        foreach ($rows as $lot) {
            if (Decimal::comp($remainingToTake, '0') <= 0) break;
            $lotRemaining = (string) $lot['quantity_remaining'];
            $lotReserved = (string) ($lot['quantity_reserved'] ?? '0');
            $avail = Decimal::sub($lotRemaining, $lotReserved);
            if (Decimal::comp($avail, '0') <= 0) continue;

            $take = Decimal::comp($avail, $remainingToTake) <= 0 ? $avail : $remainingToTake;
            $upd->execute([
                'qr' => Decimal::sub($lotRemaining, $take),
                'qs' => Decimal::add((string) $lot['quantity_sold'], $take),
                'id' => $lot['id'],
            ]);
            $consumed[] = ['lot_id' => (int) $lot['id'], 'quantity' => $take];
            $remainingToTake = Decimal::sub($remainingToTake, $take);
        }
        if (Decimal::comp($remainingToTake, '0') > 0) {
            return 'Not enough available unreserved stock of the sold product to cover the sale';
        }

        $db->prepare('UPDATE products SET quantity = :q, updated_at = NOW() WHERE id = :id')
           ->execute(['q' => Decimal::sub($product['quantity'], $qty), 'id' => $productId]);
        return null;
    }

    /**
     * Reverse a coin-sale's FIFO consumption of the sold coin — the inverse of
     * consumeFifo(). Reads the exact lots from $json ([{lot_id,quantity},…]); legacy
     * sales with no JSON fall back to restoring newest-consumed lots first. Each
     * restored lot gets quantity_remaining back and quantity_sold lowered, and
     * products.quantity is bumped by exactly what was placed back (preserving the
     * products.quantity == SUM(quantity_remaining) invariant). Open transaction only.
     */
    private function restoreConsumedLots(PDO $db, ?string $json, int $productId, string $totalQty): void
    {
        if (Decimal::comp($totalQty, '0') <= 0) return;

        $placed = '0';
        $entries = $json ? json_decode($json, true) : null;

        if (is_array($entries) && count($entries) > 0) {
            foreach ($entries as $e) {
                $lotId = (int) ($e['lot_id'] ?? 0);
                $q = (string) ($e['quantity'] ?? '0');
                if ($lotId <= 0 || Decimal::comp($q, '0') <= 0) continue;
                $ls = $db->prepare('SELECT id, quantity_remaining, quantity_sold FROM purchases WHERE id = :id AND deleted_at IS NULL FOR UPDATE');
                $ls->execute(['id' => $lotId]);
                $lot = $ls->fetch();
                if (!$lot) continue;
                $newSold = Decimal::comp((string) $lot['quantity_sold'], $q) >= 0
                    ? Decimal::sub((string) $lot['quantity_sold'], $q) : '0';
                $db->prepare('UPDATE purchases SET quantity_remaining = :qr, quantity_sold = :qs WHERE id = :id')
                   ->execute([
                       'qr' => Decimal::add((string) $lot['quantity_remaining'], $q),
                       'qs' => $newSold,
                       'id' => $lotId,
                   ]);
                $placed = Decimal::add($placed, $q);
            }
        } else {
            $remaining = $totalQty;
            $lots = $db->prepare('SELECT id, quantity_remaining, quantity_sold FROM purchases WHERE product_id = :pid AND deleted_at IS NULL AND quantity_sold > 0 ORDER BY id DESC FOR UPDATE');
            $lots->execute(['pid' => $productId]);
            foreach ($lots->fetchAll() as $lot) {
                if (Decimal::comp($remaining, '0') <= 0) break;
                $sold = (string) $lot['quantity_sold'];
                $take = Decimal::comp($sold, $remaining) <= 0 ? $sold : $remaining;
                if (Decimal::comp($take, '0') <= 0) continue;
                $db->prepare('UPDATE purchases SET quantity_remaining = :qr, quantity_sold = :qs WHERE id = :id')
                   ->execute([
                       'qr' => Decimal::add((string) $lot['quantity_remaining'], $take),
                       'qs' => Decimal::sub($sold, $take),
                       'id' => $lot['id'],
                   ]);
                $placed = Decimal::add($placed, $take);
                $remaining = Decimal::sub($remaining, $take);
            }
        }

        if (Decimal::comp($placed, '0') > 0) {
            $ps = $db->prepare('SELECT quantity FROM products WHERE id = :id FOR UPDATE');
            $ps->execute(['id' => $productId]);
            $prod = $ps->fetch();
            if ($prod) {
                $db->prepare('UPDATE products SET quantity = :q, updated_at = NOW() WHERE id = :id')
                   ->execute(['q' => Decimal::add((string) $prod['quantity'], $placed), 'id' => $productId]);
            }
        }
    }

    /**
     * Reverse a coin-swap SALE: restore the sold coin into stock, remove the
     * received-coin lot, and set the order to $finalStatus ('deleted' | 'returned').
     * Shared by destroy() (Delete) and updateStatus() (Return). Returns an error
     * string when the received coin has already been re-used (block), else null;
     * $receivedLot is filled (by ref) for the caller's logging. Does NOT commit —
     * the caller owns the transaction, history rows and system logs. Open txn only.
     */
    private function unwindCoinSale(PDO $db, array $order, string $finalStatus, ?array &$receivedLot = null): ?string
    {
        $receivedLot = null;
        if (!empty($order['settle_purchase_id'])) {
            $rl = $db->prepare('SELECT * FROM purchases WHERE id = :id FOR UPDATE');
            $rl->execute(['id' => (int) $order['settle_purchase_id']]);
            $receivedLot = $rl->fetch() ?: null;
        }
        if (!$receivedLot && !empty($order['id'])) {
            $rl = $db->prepare('SELECT * FROM purchases WHERE settle_order_id = :oid AND settle_kind = "received" AND deleted_at IS NULL ORDER BY id DESC LIMIT 1 FOR UPDATE');
            $rl->execute(['oid' => (int) $order['id']]);
            $receivedLot = $rl->fetch() ?: null;
        }
        // Block if the received coin has been sold/used past this sale.
        if ($receivedLot && $receivedLot['deleted_at'] === null
            && (Decimal::comp($receivedLot['quantity_sold'], '0') > 0 || Decimal::comp($receivedLot['quantity_reserved'] ?? '0', '0') > 0)) {
            return 'The coin you received in this sale has already been sold or used in another deal — undo those first, then reverse this sale.';
        }
        // Restore the SOLD coin (exact FIFO reversal from the order's record).
        if ($receivedLot && $receivedLot['deleted_at'] === null && $receivedLot['settle_product_id']) {
            $this->restoreConsumedLots($db, $order['settle_consumed'] ?? null, (int) $receivedLot['settle_product_id'], (string) ($receivedLot['settle_quantity'] ?? '0'));
        }
        // Remove the received coin lot + its stock.
        if ($receivedLot && $receivedLot['deleted_at'] === null) {
            $rp = $db->prepare('SELECT quantity FROM products WHERE id = :id FOR UPDATE');
            $rp->execute(['id' => $receivedLot['product_id']]);
            $rprod = $rp->fetch();
            if ($rprod) {
                $db->prepare('UPDATE products SET quantity = :q, updated_at = NOW() WHERE id = :id')
                   ->execute(['q' => Decimal::sub((string) $rprod['quantity'], (string) $receivedLot['quantity_remaining']), 'id' => $receivedLot['product_id']]);
            }
            $reason = $finalStatus === 'returned' ? 'Coin-swap sale returned' : 'Coin-swap sale reversed';
            $db->prepare('UPDATE purchases SET deleted_at = NOW(), deleted_by = :uid, delete_reason = :r, quantity_remaining = 0 WHERE id = :id')
               ->execute(['uid' => $_SESSION['user_id'] ?? null, 'r' => $reason, 'id' => $receivedLot['id']]);
        }
        // Flip the order to its final state.
        if ($finalStatus === 'returned') {
            $db->prepare('UPDATE orders SET status = "returned", returned_at = NOW(), returned_by = :uid WHERE id = :id')
               ->execute(['uid' => $_SESSION['user_id'] ?? null, 'id' => $order['id']]);
        } else {
            $db->prepare('UPDATE orders SET status = "deleted", deleted_at = NOW(), deleted_by = :uid WHERE id = :id')
               ->execute(['uid' => $_SESSION['user_id'] ?? null, 'id' => $order['id']]);
        }
        return null;
    }

    /**
     * Recompute products_cost and total from the items array using exact bcmath.
     * Frontend-sent total/profit are NEVER trusted for non-custom-sale orders —
     * JS floats drift (e.g. 0.10*3 = 0.30000000000000004) and that drift was
     * being stored verbatim in DECIMAL(32,16) columns.
     *
     * Returns ['total' => string, 'products_cost' => string].
     * For custom_sale orders, $providedTotal is honored as the customer-paid amount.
     */
    private function recomputeFromItems(array $items, bool $customSale, ?string $providedTotal): array
    {
        $productsCost = '0';
        $itemsTotal = '0';
        foreach ($items as $item) {
            $qty = (string)($item['quantity'] ?? '0');
            if (Decimal::comp($qty, '0') <= 0) continue;
            $price = (string)($item['price'] ?? '0');
            if (Decimal::comp($price, '0') < 0) {
                $price = '0'; // clamp negative prices
            }
            $cost = (string)($item['cost'] ?? '0');
            $itemsTotal = Decimal::add($itemsTotal, Decimal::mul($price, $qty));
            $productsCost = Decimal::add($productsCost, Decimal::mul($cost, $qty));
        }
        // Custom-sale orders have a manually-entered total (what customer actually paid);
        // we honor it. Non-custom-sale orders are POS sales where total MUST equal sum(price*qty).
        $total = $customSale ? (string)($providedTotal ?? '0') : $itemsTotal;
        return ['total' => $total, 'products_cost' => $productsCost];
    }

    /**
     * Compute the total manual cost from an array of {description, amount} entries.
     * Falls back to a scalar value for backward compat.
     */
    private function resolveManualCosts(array $data): array
    {
        $costsArray = $data['manual_costs'] ?? null;
        if ($costsArray === null && !empty($data['manual_costs_data'])) {
            $costsArray = is_string($data['manual_costs_data']) ? json_decode($data['manual_costs_data'], true) : $data['manual_costs_data'];
        }
        if (is_array($costsArray) && count($costsArray) > 0) {
            $total = '0';
            $totalProfit = '0';
            $processedCosts = [];
            foreach ($costsArray as $entry) {
                $amount = (string)($entry['amount'] ?? '0');
                $profit = (string)($entry['profit'] ?? '0');
                $total = Decimal::add($total, $amount);
                $totalProfit = Decimal::add($totalProfit, $profit);
                $processedCosts[] = [
                    'description' => !empty($entry['description']) ? $entry['description'] : (!empty($entry['name']) ? $entry['name'] : ''),
                    'amount' => $amount,
                    'profit' => $profit,
                    'paid_by_user_id' => !empty($entry['paid_by_user_id']) ? (int)$entry['paid_by_user_id'] : (!empty($entry['paid_by']) ? (int)$entry['paid_by'] : null),
                ];
            }
            return [
                'manual_cost' => $total,
                'manual_costs_profit' => $totalProfit,
                'manual_costs_data' => json_encode($processedCosts)
            ];
        }
        // Fallback: legacy single scalar
        return [
            'manual_cost' => (string)($data['manual_cost'] ?? '0'),
            'manual_costs_profit' => '0',
            'manual_costs_data' => null
        ];
    }

    /**
     * Parse, validate, and compute individual labor profits for multi-technician service teams.
     */
    private function resolveServiceOwners(array $data, ?int $primaryOwnerId, string $serviceProfit): ?string
    {
        if (empty($data['service_owners']) && empty($data['service_owners_data'])) {
            return null;
        }

        $raw = $data['service_owners'] ?? $data['service_owners_data'];
        $owners = is_string($raw) ? json_decode($raw, true) : $raw;
        if (!is_array($owners) || count($owners) === 0) {
            return null;
        }

        $clean = [];
        $count = count($owners);

        // If serviceProfit is zero or negative, every technician strictly receives 0 labor profit
        if (Decimal::comp($serviceProfit, '0') <= 0) {
            foreach ($owners as $idx => $o) {
                $uid = !empty($o['user_id']) ? (int)$o['user_id'] : ($primaryOwnerId ?: 1);
                $pct = isset($o['share_pct']) ? (string)$o['share_pct'] : (isset($o['share_value']) ? (string)$o['share_value'] : (isset($o['pct']) ? (string)$o['pct'] : ($idx === 0 ? '100' : '0')));
                $role = isset($o['role']) ? (string)$o['role'] : ($idx === 0 ? 'Lead Technician' : 'Collaborator');
                $clean[] = [
                    'user_id' => $uid,
                    'share_pct' => $pct,
                    'profit' => '0',
                    'labor_profit' => '0',
                    'role' => $role,
                    'split_mode' => $o['split_mode'] ?? 'pct',
                    'baseline_profit' => isset($o['baseline_profit']) ? (string)$o['baseline_profit'] : '0',
                ];
            }
            return json_encode($clean);
        }

        if ($count === 1) {
            $uid = !empty($owners[0]['user_id']) ? (int)$owners[0]['user_id'] : ($primaryOwnerId ?: 1);
            $clean[] = [
                'user_id' => $uid,
                'share_pct' => '100',
                'profit' => $serviceProfit,
                'labor_profit' => $serviceProfit,
                'role' => $owners[0]['role'] ?? 'Lead Technician',
                'split_mode' => $owners[0]['split_mode'] ?? 'pct',
                'baseline_profit' => isset($owners[0]['baseline_profit']) ? (string)$owners[0]['baseline_profit'] : $serviceProfit,
            ];
            return json_encode($clean);
        }

        // Multi-collaborator distribution:
        // 1. First allocate collaborator shares (index 1 to N) capped at serviceProfit
        $collabSharesSum = '0';
        $collaboratorEntries = [];
        for ($i = 1; $i < $count; $i++) {
            $o = $owners[$i];
            $uid = !empty($o['user_id']) ? (int)$o['user_id'] : 1;
            $pct = isset($o['share_pct']) ? (string)$o['share_pct'] : (isset($o['share_value']) ? (string)$o['share_value'] : (isset($o['percentage']) ? (string)$o['percentage'] : (isset($o['pct']) ? (string)$o['pct'] : '0')));
            $role = isset($o['role']) ? (string)$o['role'] : "Collaborator #$i";
            $splitMode = $o['split_mode'] ?? 'pct';
            $baselineProfit = isset($o['baseline_profit']) ? (string)$o['baseline_profit'] : null;

            $profitShare = '0';
            if ($splitMode === 'fixed' && isset($o['profit'])) {
                $profitShare = (string)$o['profit'];
                if (Decimal::comp($profitShare, $serviceProfit) > 0) {
                    $profitShare = $serviceProfit;
                }
            } else {
                $profitShare = Decimal::mul($serviceProfit, Decimal::div($pct, '100'));
            }

            // Cap so cumulative collaborators don't exceed serviceProfit
            $projected = Decimal::add($collabSharesSum, $profitShare);
            if (Decimal::comp($projected, $serviceProfit) > 0) {
                $profitShare = Decimal::sub($serviceProfit, $collabSharesSum);
                if (Decimal::comp($profitShare, '0') < 0) $profitShare = '0';
            }
            $collabSharesSum = Decimal::add($collabSharesSum, $profitShare);

            if ($baselineProfit === null) {
                $baselineProfit = $profitShare;
            }

            $collaboratorEntries[] = [
                'user_id' => $uid,
                'share_pct' => $pct,
                'profit' => $profitShare,
                'labor_profit' => $profitShare,
                'role' => $role,
                'split_mode' => $splitMode,
                'baseline_profit' => $baselineProfit,
            ];
        }

        // 2. Lead absorbs exact mathematical remainder (zero drift, strictly non-negative)
        $leadShare = Decimal::sub($serviceProfit, $collabSharesSum);
        if (Decimal::comp($leadShare, '0') < 0) $leadShare = '0';
        $leadUid = !empty($owners[0]['user_id']) ? (int)$owners[0]['user_id'] : ($primaryOwnerId ?: 1);
        $leadPct = Decimal::comp($serviceProfit, '0') > 0 ? Decimal::mul(Decimal::div($leadShare, $serviceProfit), '100') : '100';
        $leadBaseline = isset($owners[0]['baseline_profit']) ? (string)$owners[0]['baseline_profit'] : $leadShare;

        $clean[] = [
            'user_id' => $leadUid,
            'share_pct' => $leadPct,
            'profit' => $leadShare,
            'labor_profit' => $leadShare,
            'role' => $owners[0]['role'] ?? 'Lead Technician',
            'split_mode' => $owners[0]['split_mode'] ?? 'pct',
            'baseline_profit' => $leadBaseline,
        ];
        foreach ($collaboratorEntries as $ce) {
            $clean[] = $ce;
        }

        return json_encode($clean);
    }

    /**
     * Generate partner settlement records for completed orders.
     * Examines order_items (Layer 1), manual_costs_data (Layer 2),
     * and service_owners_data (Layer 3) to generate pending settlements.
     *
     * Called atomically within the caller's transaction.
     */
    public static function ensurePartnerSettlementsColumns(PDO $db): void
    {
        (new PartnerSettlementsController())->ensureTable($db);
    }

    public static function healMissingOrderSettlements(PDO $db, bool $force = false): void
    {
        static $healed = false;
        if ($healed && !$force) return;
        $healed = true;

        try {
            // Find active (non-deleted, non-returned) orders that have partner items or custom service partners without an active settlement
            $stmt = $db->query("
                SELECT DISTINCT o.id, o.uid, IFNULL(o.owner_user_id, o.created_by) AS order_owner_id
                FROM orders o
                LEFT JOIN order_items oi ON o.id = oi.order_id
                WHERE o.status NOT IN ('deleted', 'returned')
                  AND (
                      (oi.cost_owner_id IS NOT NULL AND oi.cost_owner_id > 0 AND oi.cost_owner_id != IFNULL(o.owner_user_id, o.created_by)
                       AND NOT EXISTS (
                           SELECT 1 FROM partner_settlements ps
                           WHERE (ps.related_entity_type = 'orders' OR ps.related_entity_type = 'order')
                             AND ps.related_entity_id = o.id
                             AND ps.status != 'cancelled'
                             AND JSON_UNQUOTE(JSON_EXTRACT(ps.details, '$.order_item_id')) = CAST(oi.id AS CHAR)
                       ))
                      OR
                      (o.custom_sale = 1 AND (
                          (o.service_owners_data IS NOT NULL AND o.service_owners_data != '[]' AND o.service_owners_data != '')
                          OR (o.manual_costs_data IS NOT NULL AND o.manual_costs_data != '[]' AND o.manual_costs_data != '')
                      ) AND NOT EXISTS (
                          SELECT 1 FROM partner_settlements ps
                          WHERE (ps.related_entity_type = 'orders' OR ps.related_entity_type = 'order')
                            AND ps.related_entity_id = o.id
                            AND ps.status != 'cancelled'
                      ))
                  )
            ");
            $unsettledOrders = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($unsettledOrders as $uOrd) {
                $oid = (int)$uOrd['id'];
                $oUid = (string)$uOrd['uid'];
                $ownerId = (int)($uOrd['order_owner_id'] ?? 1);
                self::generatePartnerSettlements($db, $oid, $oUid, $ownerId);
                self::syncOrderAgreementStatus($db, $oid);
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
    }

    private function computeMinimumOwedToOthers(\PDO $db, int $orderId, int $orderOwnerUserId): string
    {
        $minOwed = '0';

        // 1. Query order_items (include all external stock owners regardless of profit_split_type so wholesale cost is always protected)
        $stmt = $db->prepare('SELECT cost, quantity, product_owner_profit, profit_split_type FROM order_items WHERE order_id = :id AND cost_owner_id IS NOT NULL AND cost_owner_id > 0 AND cost_owner_id != :owner_id');
        $stmt->execute(['id' => $orderId, 'owner_id' => $orderOwnerUserId]);
        foreach ($stmt->fetchAll() as $item) {
            $costTotal = Decimal::mul((string)$item['cost'], (string)$item['quantity']);
            $ownerProfit = (($item['profit_split_type'] ?? 'none') !== 'none') ? (string)($item['product_owner_profit'] ?? '0') : '0';
            $owed = Decimal::add($costTotal, $ownerProfit);
            $minOwed = Decimal::add($minOwed, $owed);
        }

        // 2 & 3. Query orders for manual_costs_data and service_owners_data
        $stmt = $db->prepare('SELECT manual_costs_data, service_owners_data FROM orders WHERE id = :id');
        $stmt->execute(['id' => $orderId]);
        $order = $stmt->fetch();
        if ($order) {
            if (!empty($order['manual_costs_data'])) {
                $manualCosts = json_decode($order['manual_costs_data'], true);
                if (is_array($manualCosts)) {
                    foreach ($manualCosts as $mc) {
                        $paidBy = !empty($mc['paid_by_user_id']) ? (int)$mc['paid_by_user_id'] : (!empty($mc['payer_user_id']) ? (int)$mc['payer_user_id'] : 0);
                        if ($paidBy > 0 && $paidBy !== $orderOwnerUserId) {
                            $owed = Decimal::add((string)($mc['amount'] ?? '0'), (string)($mc['profit'] ?? '0'));
                            $minOwed = Decimal::add($minOwed, $owed);
                        }
                    }
                }
            }
            if (!empty($order['service_owners_data'])) {
                $serviceOwners = json_decode($order['service_owners_data'], true);
                if (is_array($serviceOwners)) {
                    foreach ($serviceOwners as $so) {
                        $soUserId = (int)($so['user_id'] ?? 0);
                        $soProfit = (string)($so['profit'] ?? $so['labor_profit'] ?? '0');
                        if ($soUserId > 0 && $soUserId !== $orderOwnerUserId && Decimal::comp($soProfit, '0') > 0) {
                            $minOwed = Decimal::add($minOwed, $soProfit);
                        }
                    }
                }
            }
        }
        return $minOwed;
    }

    /**
     * Routes 100% of any extra payment (+delta) or owner discount (-delta) directly to the Service Owner's
     * service_owner_profit and service_owners_data entry without altering any external collaborator's share.
     */
    private function applyCustomServiceOwnerProfitDelta(\PDO $db, int $orderId, string $delta): void
    {
        if (Decimal::comp($delta, '0') === 0) {
            return;
        }
        $stmt = $db->prepare('SELECT custom_sale, owner_user_id, created_by, uid, service_owner_profit, service_owners_data, is_locked_for_edit, agreement_status FROM orders WHERE id = :id');
        $stmt->execute(['id' => $orderId]);
        $ord = $stmt->fetch(\PDO::FETCH_ASSOC);
        if (!$ord || empty($ord['custom_sale'])) {
            return;
        }
        $ownerId = (int)($ord['owner_user_id'] ?? $ord['created_by'] ?? 1);
        $curServiceOwnerProfit = (string)($ord['service_owner_profit'] ?? '0');
        $newServiceOwnerProfit = Decimal::add($curServiceOwnerProfit, $delta);

        $team = !empty($ord['service_owners_data']) ? json_decode($ord['service_owners_data'], true) : [];
        if (!is_array($team)) {
            $team = [];
        }
        $updatedOwnerInTeam = false;
        foreach ($team as $idx => &$m) {
            if ((int)($m['user_id'] ?? 0) === $ownerId) {
                $curMemberPrf = (string)($m['profit'] ?? $m['labor_profit'] ?? '0');
                $newMemberPrf = Decimal::add($curMemberPrf, $delta);
                $m['profit'] = $newMemberPrf;
                $m['labor_profit'] = $newMemberPrf;
                $updatedOwnerInTeam = true;
                break;
            }
        }
        unset($m);
        if (!$updatedOwnerInTeam && count($team) > 0) {
            $curMemberPrf = (string)($team[0]['profit'] ?? $team[0]['labor_profit'] ?? '0');
            $newMemberPrf = Decimal::add($curMemberPrf, $delta);
            $team[0]['profit'] = $newMemberPrf;
            $team[0]['labor_profit'] = $newMemberPrf;
        }

        $db->prepare('UPDATE orders SET service_owner_profit = :sop, service_owners_data = :sod WHERE id = :id')
           ->execute([
               'sop' => $newServiceOwnerProfit,
               'sod' => json_encode($team, JSON_UNESCAPED_UNICODE),
               'id'  => $orderId
           ]);

        $isPhase2 = !empty($ord['is_locked_for_edit']) || ($ord['agreement_status'] ?? '') === 'all_accepted';
        self::generatePartnerSettlements($db, $orderId, (string)($ord['uid'] ?? "ORD-{$orderId}"), $ownerId, [
            'is_phase_2'      => $isPhase2,
            'actor_user_id'   => (int)($_SESSION['user_id'] ?? $ownerId),
            'creator_user_id' => (int)($ord['created_by'] ?? $ownerId),
        ]);
    }

    public static function syncOrderAgreementStatus(PDO $db, int $orderId): string
    {
        $ordRowStmt = $db->prepare("SELECT custom_sale, is_locked_for_edit, agreement_status, total, amount_paid, status FROM orders WHERE id = :oid FOR UPDATE");
        $ordRowStmt->execute(['oid' => $orderId]);
        $ordRow = $ordRowStmt->fetch(PDO::FETCH_ASSOC);
        $wasAlreadyLockedPhase2 = !empty($ordRow['is_locked_for_edit']);
        $isCustomService = !empty($ordRow['custom_sale']);

        $stmt = $db->prepare("
            SELECT 
                COUNT(*) as total_tickets,
                SUM(CASE WHEN acceptance_status = 'accepted' THEN 1 ELSE 0 END) as accepted_tickets,
                SUM(CASE WHEN acceptance_status = 'refused' THEN 1 ELSE 0 END) as refused_tickets,
                SUM(CASE WHEN acceptance_status = 'pending' THEN 1 ELSE 0 END) as pending_tickets
            FROM partner_settlements
            WHERE related_entity_type = 'orders' 
              AND related_entity_id = :oid
              AND status != 'cancelled' 
              AND settlement_type != 'order_return_clawback'
        ");
        $stmt->execute(['oid' => $orderId]);
        $stats = $stmt->fetch(PDO::FETCH_ASSOC);

        $total = (int)($stats['total_tickets'] ?? 0);
        $accepted = (int)($stats['accepted_tickets'] ?? 0);
        $refused = (int)($stats['refused_tickets'] ?? 0);
        $pending = (int)($stats['pending_tickets'] ?? 0);

        if ($wasAlreadyLockedPhase2) {
            // Once Phase 1 completes and the order enters Phase 2 (is_locked_for_edit = 1),
            // it permanently stays in Phase 2. Newly added Phase 2 partners have their own
            // pending/refused acceptance_status on partner_settlements without dropping the order back to Phase 1.
            $status = 'all_accepted';
            $hasRefusal = 0;
            $isLocked = 1;
        } elseif ($total === 0) {
            $status = 'all_accepted';
            $hasRefusal = 0;
            $isLocked = $isCustomService ? 1 : 0;
        } elseif ($refused > 0) {
            $status = 'has_refusal';
            $hasRefusal = 1;
            $isLocked = 0;
        } elseif ($pending > 0 || $accepted < $total) {
            $status = 'pending';
            $hasRefusal = 0;
            $isLocked = 0;
        } else {
            $status = 'all_accepted';
            $hasRefusal = 0;
            $isLocked = 1;
        }

        $db->prepare("UPDATE orders SET agreement_status = :st, has_refusal = :hr, is_locked_for_edit = :lck WHERE id = :oid")
           ->execute(['st' => $status, 'hr' => $hasRefusal, 'lck' => $isLocked, 'oid' => $orderId]);

        if ($status === 'all_accepted') {
            // As soon as the order is in Phase 2 (all_accepted), any manual cost recovery settlement
            // that has not yet been paid becomes immediately payable from the assigned user's Cash Safe.
            $db->prepare("
                UPDATE partner_settlements
                SET payment_demand_status = 'awaiting_payment',
                    payment_demand_at = IFNULL(payment_demand_at, NOW())
                WHERE related_entity_type = 'orders'
                  AND related_entity_id = :oid
                  AND settlement_type = 'manual_cost_recovery'
                  AND status != 'cancelled'
                  AND (payment_demand_status IS NULL OR payment_demand_status = 'none')
            ")->execute(['oid' => $orderId]);
        }

        if (!$wasAlreadyLockedPhase2 && in_array($status, ['pending', 'has_refusal'], true)) {
            $db->prepare("UPDATE orders SET status = 'pending' WHERE id = :oid AND status = 'completed'")
               ->execute(['oid' => $orderId]);
        }

        return $status;
    }

    public static function generatePartnerSettlements(PDO $db, int $orderId, string $orderUid, int $orderOwnerUserId): void
    {
        self::ensurePartnerSettlementsColumns($db);

        // Fetch all order items for this order with product metadata
        $itemsStmt = $db->prepare('SELECT oi.*, p.uid AS product_uid, p.name AS product_original_name, p.price AS product_catalog_price 
                                   FROM order_items oi 
                                   LEFT JOIN products p ON oi.product_id = p.id 
                                   WHERE oi.order_id = :oid');
        $itemsStmt->execute(['oid' => $orderId]);
        $items = $itemsStmt->fetchAll();

        $sessionUser = (int)($_SESSION['user_id'] ?? 0);

        $resolveUser = function($uid) use ($db) {
            if (!$uid) return 'Unknown';
            $s = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
            $s->execute(['id' => $uid]);
            $r = $s->fetch();
            return $r ? $r['username'] : "User #$uid";
        };

        // Fetch order headers for Layer 1, 2 & Layer 3
        $orderStmt = $db->prepare('SELECT custom_sale, created_by, owner_user_id, is_locked_for_edit, agreement_status, manual_costs_data, service_owners_data, service_name, total, products_cost, manual_cost, profit, status, amount_paid, agreement_version FROM orders WHERE id = :id');
        $orderStmt->execute(['id' => $orderId]);
        $orderData = $orderStmt->fetch();

        $isCustomService = !empty($orderData['custom_sale']);
        $isPhase2Order = !empty($orderData['is_locked_for_edit']) || ($orderData['agreement_status'] ?? '') === 'all_accepted';
        $creatorUserId = !empty($orderData['created_by']) ? (int)$orderData['created_by'] : ($sessionUser ?: $orderOwnerUserId);
        $agrVersion = (int)($orderData['agreement_version'] ?? 1);

        // Determine who auto-accepts newly generated statements:
        // - For normal POS orders (custom_sale = 0):
        //   * If the order is already in Phase 2 ($isPhase2Order), all partner settlements initialize as 'accepted'.
        //   * In Phase 1 creation: the seller/owner auto-accepts, external stock owners are 'pending'.
        // - For Custom Services in Phase 1 (v1 creation): ONLY the Creator ($creatorUserId) auto-accepts their own participation.
        //   If Creator assigned a different user as Owner ($orderOwnerUserId !== $creatorUserId), that assigned Owner is 'pending' and must accept.
        // - For Custom Services in Phase 1 (v2+ re-edit): the user performing the edit ($sessionUser ?: $creatorUserId) auto-accepts; all others are 'pending'.
        // - For Custom Services in Phase 2 ($isPhase2Order): existing settlements keep their status; newly added partners get 'pending' (unless the active editor added themselves).
        $autoAcceptUserId = !$isCustomService
            ? $orderOwnerUserId
            : ($isPhase2Order
                ? ($sessionUser > 0 ? $sessionUser : 0)
                : ($agrVersion > 1 && $sessionUser > 0 ? $sessionUser : $creatorUserId));

        $resolveInitialAcceptance = function(int $targetUserId) use ($autoAcceptUserId, $isCustomService, $isPhase2Order): string {
            if (!$isCustomService && $isPhase2Order) {
                return 'accepted';
            }
            return ($autoAcceptUserId > 0 && $targetUserId === $autoAcceptUserId) ? 'accepted' : 'pending';
        };

        $payerName = $resolveUser($orderOwnerUserId);

        // Zero Auto-Release: Settlements always initialize in locked status until manually released by the owner
        $releaseStatus = 'locked';
        $releasedAt = null;
        $releasedBy = null;

        $matchedCostIds = [];
        $matchedProfitIds = [];

        // ── LAYER 1: Parts settlements (Decoupled Waterfall: Cost Recovery P1 -> Profit Share P2) ──
        foreach ($items as $item) {
            $costOwnerId = !empty($item['cost_owner_id']) ? (int)$item['cost_owner_id'] : null;
            if (!$costOwnerId || $costOwnerId === $orderOwnerUserId) {
                continue;
            }

            $splitType = $item['profit_split_type'] ?? 'none';

            $itemQty = (string)($item['quantity'] ?? '0');
            $itemCost = (string)($item['cost'] ?? '0');
            $itemPrice = (string)($item['price'] ?? '0');
            $totalCost = Decimal::mul($itemCost, $itemQty);
            $totalRevenue = Decimal::mul($itemPrice, $itemQty);
            $ownerProfit = (string)($item['product_owner_profit'] ?? '0');
            $serviceProfit = (string)($item['service_owner_profit'] ?? '0');
            $expectedNetProfit = Decimal::sub($totalRevenue, $totalCost);

            // Full commercial economic dimensions
            $ownerSharePct = (string)($item['product_owner_share_pct'] ?? '0');
            $ownerTotalPayout = Decimal::add($totalCost, $ownerProfit);
            $sellerTotalRetention = $serviceProfit;
            $displayQty = rtrim(rtrim($itemQty, '0'), '.') ?: '0';

            $prodId = !empty($item['product_id']) ? (int)$item['product_id'] : null;
            $prodUid = !empty($item['product_uid']) ? (string)$item['product_uid'] : ($prodId ? ('PRD-' . $prodId) : null);
            $prodName = $item['name'] ?? ($item['product_original_name'] ?? 'Product');

            $hasCost = Decimal::comp($totalCost, '0') > 0;
            $hasProfit = ($splitType !== 'none' && Decimal::comp($ownerProfit, '0') > 0);

            if (!$hasCost && !$hasProfit) {
                continue;
            }

            $itemDbId = !empty($item['id']) ? (string)$item['id'] : '-1';
            $notInCostSql = !empty($matchedCostIds) ? (' AND id NOT IN (' . implode(',', array_map('intval', $matchedCostIds)) . ')') : '';
            $existingCostStmt = $db->prepare("
                SELECT id, amount, acceptance_status, details 
                FROM partner_settlements 
                WHERE related_entity_type = 'orders' 
                  AND related_entity_id = :oid 
                  AND settlement_type = 'parts_cost_recovery' 
                  AND payee_user_id = :payee 
                  AND (
                      JSON_UNQUOTE(JSON_EXTRACT(details, '$.order_item_id')) = :oiid
                      OR (JSON_EXTRACT(details, '$.product_id') IS NOT NULL AND JSON_UNQUOTE(JSON_EXTRACT(details, '$.product_id')) = :pid)
                      OR (JSON_EXTRACT(details, '$.product_name') IS NOT NULL AND JSON_UNQUOTE(JSON_EXTRACT(details, '$.product_name')) = :pname)
                  )
                  AND status != 'cancelled'
                  {$notInCostSql}
                ORDER BY id ASC LIMIT 1
            ");
            $existingCostStmt->execute([
                'oid'   => $orderId,
                'payee' => $costOwnerId,
                'oiid'  => $itemDbId,
                'pid'   => (string)($prodId ?? -1),
                'pname' => $prodName
            ]);
            $existingCost = $existingCostStmt->fetch(PDO::FETCH_ASSOC);
            if ($existingCost) {
                $matchedCostIds[] = (int)$existingCost['id'];
            }

            $notInProfitSql = !empty($matchedProfitIds) ? (' AND id NOT IN (' . implode(',', array_map('intval', $matchedProfitIds)) . ')') : '';
            $existingProfitStmt = $db->prepare("
                SELECT id, amount, acceptance_status, details 
                FROM partner_settlements 
                WHERE related_entity_type = 'orders' 
                  AND related_entity_id = :oid 
                  AND settlement_type = 'parts_profit_share' 
                  AND payee_user_id = :payee 
                  AND (
                      JSON_UNQUOTE(JSON_EXTRACT(details, '$.order_item_id')) = :oiid
                      OR (JSON_EXTRACT(details, '$.product_id') IS NOT NULL AND JSON_UNQUOTE(JSON_EXTRACT(details, '$.product_id')) = :pid)
                      OR (JSON_EXTRACT(details, '$.product_name') IS NOT NULL AND JSON_UNQUOTE(JSON_EXTRACT(details, '$.product_name')) = :pname)
                  )
                  AND status != 'cancelled'
                  {$notInProfitSql}
                ORDER BY id ASC LIMIT 1
            ");
            $existingProfitStmt->execute([
                'oid'   => $orderId,
                'payee' => $costOwnerId,
                'oiid'  => $itemDbId,
                'pid'   => (string)($prodId ?? -1),
                'pname' => $prodName
            ]);
            $existingProfit = $existingProfitStmt->fetch(PDO::FETCH_ASSOC);
            if ($existingProfit) {
                $matchedProfitIds[] = (int)$existingProfit['id'];
            }

            $payeeName = $resolveUser($costOwnerId);
            $seniorCostId = $existingCost ? (int)$existingCost['id'] : null;
            $profitSettlementId = $existingProfit ? (int)$existingProfit['id'] : null;

            // Shared full economic baseline payload
            $baseDetails = [
                'layer' => 'parts',
                'product_id' => $prodId,
                'product_uid' => $prodUid,
                'product_name' => $prodName,
                'item_name' => $prodName,
                'item_id' => $prodId,
                'order_item_id' => (int)($item['id'] ?? 0),
                'quantity' => $itemQty,
                'display_quantity' => $displayQty,
                'unit_cost' => $itemCost,
                'unit_price' => $itemPrice,
                'total_cost' => $totalCost,
                'total_revenue' => $totalRevenue,
                'expected_net_profit' => $expectedNetProfit,
                'profit_split_type' => $splitType,
                'split_type' => $splitType,
                'product_owner_share_pct' => $ownerSharePct,
                'owner_profit_share' => $ownerProfit,
                'seller_profit_share' => $serviceProfit,
                'service_profit_share' => $serviceProfit,
                'owner_total_payout' => $ownerTotalPayout,
                'seller_total_retention' => $sellerTotalRetention,
                'payer_user_id' => $orderOwnerUserId,
                'payee_user_id' => $costOwnerId,
            ];

            $itemInitialAcceptance = $resolveInitialAcceptance($costOwnerId);

            // Priority 1 Tranche: Cost Recovery (Working Capital)
            if ($hasCost) {
                if ($existingCost) {
                    // Refresh payer_user_id and order_item_id in details so re-inserted order_items stay linked
                    $exCostDet = !empty($existingCost['details']) ? (json_decode($existingCost['details'], true) ?: []) : [];
                    $exCostDet['order_item_id'] = (int)($item['id'] ?? 0);
                    $exCostDet['payer_user_id'] = $orderOwnerUserId;
                    $db->prepare("UPDATE partner_settlements SET payer_user_id = :payer, details = :det WHERE id = :id")
                       ->execute(['payer' => $orderOwnerUserId, 'det' => json_encode($exCostDet), 'id' => (int)$existingCost['id']]);

                    $existingCostAmt = (string)$existingCost['amount'];
                    $costDelta = Decimal::sub($totalCost, $existingCostAmt);
                    if (Decimal::comp($costDelta, '0') > 0) {
                        // Incremental supplementary cost settlement
                        $sUidCost = 'STL-' . date('Ymd') . '-' . strtoupper(substr(md5(random_bytes(8)), 0, 6));
                        $descCost = "Supplementary parts cost: {$prodName} (+{$costDelta}) — {$payerName} owes {$payeeName}";
                        $relAmtCost = '0.0000000000000000';
                        $costDetails = array_merge($baseDetails, [
                            'role' => 'cost',
                            'is_supplementary' => true,
                            'parent_settlement_id' => (int)$existingCost['id'],
                            'incremental_amount' => $costDelta,
                            'sibling_settlement_id' => null,
                            'linked_profit_settlement_id' => null,
                        ]);
                        $sStmt = $db->prepare('INSERT INTO partner_settlements (uid, payer_user_id, payee_user_id, amount, released_amount, settlement_type, waterfall_priority, waterfall_role, linked_settlement_id, status, acceptance_status, release_status, released_at, released_by, related_entity_type, related_entity_id, related_entity_uid, description, details, created_by, created_at) VALUES (:uid, :payer, :payee, :amount, :released_amount, :type, :prio, :role, :linked_id, :status, :acceptance_status, :release_status, :released_at, :released_by, :rel_type, :rel_id, :rel_uid, :desc, :details, :created_by, NOW())');
                        $sStmt->execute([
                            'uid' => $sUidCost,
                            'payer' => $orderOwnerUserId,
                            'payee' => $costOwnerId,
                            'amount' => $costDelta,
                            'released_amount' => $relAmtCost,
                            'type' => 'parts_cost_recovery',
                            'prio' => 1,
                            'role' => 'cost',
                            'linked_id' => (int)$existingCost['id'],
                            'status' => 'pending',
                            'acceptance_status' => $itemInitialAcceptance,
                            'release_status' => $releaseStatus,
                            'released_at' => $releasedAt,
                            'released_by' => $releasedBy,
                            'rel_type' => 'orders',
                            'rel_id' => $orderId,
                            'rel_uid' => $orderUid,
                            'desc' => $descCost,
                            'details' => json_encode($costDetails),
                            'created_by' => $sessionUser ?: $creatorUserId,
                        ]);
                        $matchedCostIds[] = (int)$db->lastInsertId();
                    }
                } else {
                    // Initial Cost Recovery
                    $sUidCost = 'STL-' . date('Ymd') . '-' . strtoupper(substr(md5(random_bytes(8)), 0, 6));
                    $descCost = "Parts cost recovery: {$prodName} — {$payerName} owes {$payeeName}";
                    $relAmtCost = '0.0000000000000000';

                    $costDetails = array_merge($baseDetails, [
                        'role' => 'cost',
                        'sibling_settlement_id' => null,
                        'linked_profit_settlement_id' => null,
                    ]);

                    $sStmt = $db->prepare('INSERT INTO partner_settlements (uid, payer_user_id, payee_user_id, amount, released_amount, settlement_type, waterfall_priority, waterfall_role, linked_settlement_id, status, acceptance_status, release_status, released_at, released_by, related_entity_type, related_entity_id, related_entity_uid, description, details, created_by, created_at) VALUES (:uid, :payer, :payee, :amount, :released_amount, :type, :prio, :role, :linked_id, :status, :acceptance_status, :release_status, :released_at, :released_by, :rel_type, :rel_id, :rel_uid, :desc, :details, :created_by, NOW())');
                    $sStmt->execute([
                        'uid' => $sUidCost,
                        'payer' => $orderOwnerUserId,
                        'payee' => $costOwnerId,
                        'amount' => $totalCost,
                        'released_amount' => $relAmtCost,
                        'type' => 'parts_cost_recovery',
                        'prio' => 1,
                        'role' => 'cost',
                        'linked_id' => null,
                        'status' => 'pending',
                        'acceptance_status' => $itemInitialAcceptance,
                        'release_status' => $releaseStatus,
                        'released_at' => $releasedAt,
                        'released_by' => $releasedBy,
                        'rel_type' => 'orders',
                        'rel_id' => $orderId,
                        'rel_uid' => $orderUid,
                        'desc' => $descCost,
                        'details' => json_encode($costDetails),
                        'created_by' => $sessionUser ?: $creatorUserId,
                    ]);
                    $seniorCostId = (int)$db->lastInsertId();
                    $matchedCostIds[] = $seniorCostId;
                }
            }

            // Priority 2 Tranche: Net Profit Share (Subordinated to Cost)
            if ($hasProfit) {
                if ($existingProfit) {
                    $exProfDet = !empty($existingProfit['details']) ? (json_decode($existingProfit['details'], true) ?: []) : [];
                    $exProfDet['order_item_id'] = (int)($item['id'] ?? 0);
                    $exProfDet['payer_user_id'] = $orderOwnerUserId;
                    $db->prepare("UPDATE partner_settlements SET payer_user_id = :payer, details = :det WHERE id = :id")
                       ->execute(['payer' => $orderOwnerUserId, 'det' => json_encode($exProfDet), 'id' => (int)$existingProfit['id']]);

                    $existingPrfAmt = (string)$existingProfit['amount'];
                    $profitDelta = Decimal::sub($ownerProfit, $existingPrfAmt);
                    if (Decimal::comp($profitDelta, '0') > 0) {
                        $sUidProfit = 'STL-' . date('Ymd') . '-' . strtoupper(substr(md5(random_bytes(8)), 0, 6));
                        $descProfit = "Supplementary parts profit: {$prodName} (+{$profitDelta}) — {$payerName} owes {$payeeName}";
                        $relAmtProfit = '0.0000000000000000';
                        $profitDetails = array_merge($baseDetails, [
                            'role' => 'profit',
                            'is_supplementary' => true,
                            'parent_settlement_id' => (int)$existingProfit['id'],
                            'incremental_amount' => $profitDelta,
                            'sibling_settlement_id' => $seniorCostId,
                            'linked_cost_settlement_id' => $seniorCostId,
                        ]);
                        $sStmt = $db->prepare('INSERT INTO partner_settlements (uid, payer_user_id, payee_user_id, amount, released_amount, settlement_type, waterfall_priority, waterfall_role, linked_settlement_id, status, acceptance_status, release_status, released_at, released_by, related_entity_type, related_entity_id, related_entity_uid, description, details, created_by, created_at) VALUES (:uid, :payer, :payee, :amount, :released_amount, :type, :prio, :role, :linked_id, :status, :acceptance_status, :release_status, :released_at, :released_by, :rel_type, :rel_id, :rel_uid, :desc, :details, :created_by, NOW())');
                        $sStmt->execute([
                            'uid' => $sUidProfit,
                            'payer' => $orderOwnerUserId,
                            'payee' => $costOwnerId,
                            'amount' => $profitDelta,
                            'released_amount' => $relAmtProfit,
                            'type' => 'parts_profit_share',
                            'prio' => 2,
                            'role' => 'profit',
                            'linked_id' => $seniorCostId,
                            'status' => 'pending',
                            'acceptance_status' => $itemInitialAcceptance,
                            'release_status' => $releaseStatus,
                            'released_at' => $releasedAt,
                            'released_by' => $releasedBy,
                            'rel_type' => 'orders',
                            'rel_id' => $orderId,
                            'rel_uid' => $orderUid,
                            'desc' => $descProfit,
                            'details' => json_encode($profitDetails),
                            'created_by' => $sessionUser ?: $creatorUserId,
                        ]);
                        $matchedProfitIds[] = (int)$db->lastInsertId();
                    }
                } else {
                    $sUidProfit = 'STL-' . date('Ymd') . '-' . strtoupper(substr(md5(random_bytes(8)), 0, 6));
                    $descProfit = "Parts profit share: {$prodName} — {$payerName} owes {$payeeName}";
                    $relAmtProfit = '0.0000000000000000';

                    $profitDetails = array_merge($baseDetails, [
                        'role' => 'profit',
                        'sibling_settlement_id' => $seniorCostId,
                        'linked_cost_settlement_id' => $seniorCostId,
                    ]);

                    $sStmt = $db->prepare('INSERT INTO partner_settlements (uid, payer_user_id, payee_user_id, amount, released_amount, settlement_type, waterfall_priority, waterfall_role, linked_settlement_id, status, acceptance_status, release_status, released_at, released_by, related_entity_type, related_entity_id, related_entity_uid, description, details, created_by, created_at) VALUES (:uid, :payer, :payee, :amount, :released_amount, :type, :prio, :role, :linked_id, :status, :acceptance_status, :release_status, :released_at, :released_by, :rel_type, :rel_id, :rel_uid, :desc, :details, :created_by, NOW())');
                    $sStmt->execute([
                        'uid' => $sUidProfit,
                        'payer' => $orderOwnerUserId,
                        'payee' => $costOwnerId,
                        'amount' => $ownerProfit,
                        'released_amount' => $relAmtProfit,
                        'type' => 'parts_profit_share',
                        'prio' => 2,
                        'role' => 'profit',
                        'linked_id' => $seniorCostId,
                        'status' => 'pending',
                        'acceptance_status' => $itemInitialAcceptance,
                        'release_status' => $releaseStatus,
                        'released_at' => $releasedAt,
                        'released_by' => $releasedBy,
                        'rel_type' => 'orders',
                        'rel_id' => $orderId,
                        'rel_uid' => $orderUid,
                        'desc' => $descProfit,
                        'details' => json_encode($profitDetails),
                        'created_by' => $sessionUser ?: $creatorUserId,
                    ]);
                    $profitSettlementId = (int)$db->lastInsertId();
                    $matchedProfitIds[] = $profitSettlementId;

                    // Cross-link: Update Senior Cost Tranche with sibling ID (#15 -> #16)
                    if ($seniorCostId && $profitSettlementId) {
                        $costDetails['sibling_settlement_id'] = $profitSettlementId;
                        $costDetails['linked_profit_settlement_id'] = $profitSettlementId;
                        $db->prepare('UPDATE partner_settlements SET details = :details WHERE id = :id')
                           ->execute(['details' => json_encode($costDetails), 'id' => $seniorCostId]);
                    }
                }
            }
        }

        // ── LAYER 2: Manual Cost Outlays Settlements (Every manual cost generates an isolated statement) ──
        if ($orderData && !empty($orderData['manual_costs_data'])) {
            $manualCosts = json_decode($orderData['manual_costs_data'], true);
            if (is_array($manualCosts)) {
                foreach ($manualCosts as $idx => $mc) {
                    $paidBy = !empty($mc['paid_by_user_id']) ? (int)$mc['paid_by_user_id'] : (!empty($mc['payer_user_id']) ? (int)$mc['payer_user_id'] : $orderOwnerUserId);
                    $mcAmount = (string)($mc['amount'] ?? '0');
                    $mcProfit = (string)($mc['profit'] ?? '0');
                    $mcDesc = $mc['description'] ?? ($mc['name'] ?? ("Manual cost #" . ($idx + 1)));

                    if (!$paidBy) continue;

                    $hasMcCost = Decimal::comp($mcAmount, '0') > 0;
                    $hasMcProfit = ($paidBy !== $orderOwnerUserId && Decimal::comp($mcProfit, '0') > 0);
                    if (!$hasMcCost && !$hasMcProfit) continue;

                    $payeeName = $resolveUser($paidBy);
                    $mcAcceptance = $resolveInitialAcceptance($paidBy);
                    $initialDemandStatus = $isPhase2Order ? 'awaiting_payment' : 'none';

                    // Fine-grained idempotency & supplementary check per manual outlay index
                    $existingMcCost = null;
                    $existingMcProfit = null;
                    if ($orderId > 0) {
                        $checkMcStmt = $db->prepare("SELECT id, amount, details, payment_demand_status FROM partner_settlements WHERE related_entity_type = 'orders' AND related_entity_id = :oid AND settlement_type = 'manual_cost_recovery' AND JSON_UNQUOTE(JSON_EXTRACT(details, '$.cost_index')) = :idx AND status != 'cancelled' LIMIT 1");
                        $checkMcStmt->execute(['oid' => $orderId, 'idx' => (string)$idx]);
                        $existingMcCost = $checkMcStmt->fetch(PDO::FETCH_ASSOC);

                        $checkMcPrfStmt = $db->prepare("SELECT id, amount, details FROM partner_settlements WHERE related_entity_type = 'orders' AND related_entity_id = :oid AND settlement_type = 'manual_cost_markup' AND JSON_UNQUOTE(JSON_EXTRACT(details, '$.cost_index')) = :idx AND status != 'cancelled' LIMIT 1");
                        $checkMcPrfStmt->execute(['oid' => $orderId, 'idx' => (string)$idx]);
                        $existingMcProfit = $checkMcPrfStmt->fetch(PDO::FETCH_ASSOC);
                    }

                    $seniorMcCostId = $existingMcCost ? (int)$existingMcCost['id'] : null;

                    // Priority 1: Outlay Cost Recovery (Isolated Manual Cost Statement)
                    if ($hasMcCost) {
                        if ($existingMcCost) {
                            $db->prepare("UPDATE partner_settlements SET payer_user_id = :payer WHERE id = :id")
                               ->execute(['payer' => $orderOwnerUserId, 'id' => (int)$existingMcCost['id']]);
                            $exCostAmt = (string)$existingMcCost['amount'];
                            $mcCostDelta = Decimal::sub($mcAmount, $exCostAmt);
                            if (Decimal::comp($mcCostDelta, '0') > 0) {
                                $sUidMcCost = 'STL-' . date('Ymd') . '-' . strtoupper(substr(md5(random_bytes(8)), 0, 6));
                                $mcCostReleasedAmt = '0.0000000000000000';
                                $sStmt = $db->prepare('INSERT INTO partner_settlements (uid, payer_user_id, payee_user_id, amount, released_amount, settlement_type, waterfall_priority, waterfall_role, linked_settlement_id, status, acceptance_status, payment_demand_status, payment_demand_at, release_status, released_at, released_by, related_entity_type, related_entity_id, related_entity_uid, description, details, created_by, created_at) VALUES (:uid, :payer, :payee, :amount, :released_amount, :type, :prio, :role, :linked_id, :status, :acceptance_status, :pds, :pda, :release_status, :released_at, :released_by, :rel_type, :rel_id, :rel_uid, :desc, :details, :created_by, NOW())');
                                $sStmt->execute([
                                    'uid' => $sUidMcCost,
                                    'payer' => $orderOwnerUserId,
                                    'payee' => $paidBy,
                                    'amount' => $mcCostDelta,
                                    'released_amount' => $mcCostReleasedAmt,
                                    'type' => 'manual_cost_recovery',
                                    'prio' => 1,
                                    'role' => 'cost',
                                    'linked_id' => (int)$existingMcCost['id'],
                                    'status' => 'pending',
                                    'acceptance_status' => $mcAcceptance,
                                    'pds' => $initialDemandStatus,
                                    'pda' => $initialDemandStatus === 'awaiting_payment' ? date('Y-m-d H:i:s') : null,
                                    'release_status' => $releaseStatus,
                                    'released_at' => $releasedAt,
                                    'released_by' => $releasedBy,
                                    'rel_type' => 'orders',
                                    'rel_id' => $orderId,
                                    'rel_uid' => $orderUid,
                                    'desc' => "Supplementary manual outlay cost: {$mcDesc} (+{$mcCostDelta}) — {$payerName} owes {$payeeName}",
                                    'details' => json_encode([
                                        'layer' => 'manual_outlays',
                                        'role' => 'cost',
                                        'is_supplementary' => true,
                                        'parent_settlement_id' => (int)$existingMcCost['id'],
                                        'cost_index' => $idx,
                                        'description' => $mcDesc,
                                        'amount' => $mcCostDelta,
                                        'paid_by_user_id' => $paidBy,
                                        'order_owner_user_id' => $orderOwnerUserId,
                                    ]),
                                    'created_by' => $sessionUser ?: $creatorUserId,
                                ]);
                            }
                        } else {
                            $sUidMcCost = 'STL-' . date('Ymd') . '-' . strtoupper(substr(md5(random_bytes(8)), 0, 6));
                            $mcCostReleasedAmt = '0.0000000000000000';

                            $sStmt = $db->prepare('INSERT INTO partner_settlements (uid, payer_user_id, payee_user_id, amount, released_amount, settlement_type, waterfall_priority, waterfall_role, linked_settlement_id, status, acceptance_status, payment_demand_status, payment_demand_at, release_status, released_at, released_by, related_entity_type, related_entity_id, related_entity_uid, description, details, created_by, created_at) VALUES (:uid, :payer, :payee, :amount, :released_amount, :type, :prio, :role, :linked_id, :status, :acceptance_status, :pds, :pda, :release_status, :released_at, :released_by, :rel_type, :rel_id, :rel_uid, :desc, :details, :created_by, NOW())');
                            $sStmt->execute([
                                'uid' => $sUidMcCost,
                                'payer' => $orderOwnerUserId,
                                'payee' => $paidBy,
                                'amount' => $mcAmount,
                                'released_amount' => $mcCostReleasedAmt,
                                'type' => 'manual_cost_recovery',
                                'prio' => 1,
                                'role' => 'cost',
                                'linked_id' => null,
                                'status' => 'pending',
                                'acceptance_status' => $mcAcceptance,
                                'pds' => $initialDemandStatus,
                                'pda' => $initialDemandStatus === 'awaiting_payment' ? date('Y-m-d H:i:s') : null,
                                'release_status' => $releaseStatus,
                                'released_at' => $releasedAt,
                                'released_by' => $releasedBy,
                                'rel_type' => 'orders',
                                'rel_id' => $orderId,
                                'rel_uid' => $orderUid,
                                'desc' => "Manual outlay cost recovery: {$mcDesc} — {$payerName} owes {$payeeName}",
                                'details' => json_encode([
                                    'layer' => 'manual_outlays',
                                    'role' => 'cost',
                                    'cost_index' => $idx,
                                    'description' => $mcDesc,
                                    'amount' => $mcAmount,
                                    'paid_by_user_id' => $paidBy,
                                    'order_owner_user_id' => $orderOwnerUserId,
                                ]),
                                'created_by' => $sessionUser ?: $creatorUserId,
                            ]);
                            $seniorMcCostId = (int)$db->lastInsertId();
                        }
                    }

                    // Priority 2: Outlay Markup / Profit
                    if ($hasMcProfit) {
                        if ($existingMcProfit) {
                            $db->prepare("UPDATE partner_settlements SET payer_user_id = :payer WHERE id = :id")
                               ->execute(['payer' => $orderOwnerUserId, 'id' => (int)$existingMcProfit['id']]);
                            $exPrfAmt = (string)$existingMcProfit['amount'];
                            $mcMarkupDelta = Decimal::sub($mcProfit, $exPrfAmt);
                            if (Decimal::comp($mcMarkupDelta, '0') > 0) {
                                $sUidMcProfit = 'STL-' . date('Ymd') . '-' . strtoupper(substr(md5(random_bytes(8)), 0, 6));
                                $mcProfitReleasedAmt = '0.0000000000000000';

                                $sStmt = $db->prepare('INSERT INTO partner_settlements (uid, payer_user_id, payee_user_id, amount, released_amount, settlement_type, waterfall_priority, waterfall_role, linked_settlement_id, status, acceptance_status, release_status, released_at, released_by, related_entity_type, related_entity_id, related_entity_uid, description, details, created_by, created_at) VALUES (:uid, :payer, :payee, :amount, :released_amount, :type, :prio, :role, :linked_id, :status, :acceptance_status, :release_status, :released_at, :released_by, :rel_type, :rel_id, :rel_uid, :desc, :details, :created_by, NOW())');
                                $sStmt->execute([
                                    'uid' => $sUidMcProfit,
                                    'payer' => $orderOwnerUserId,
                                    'payee' => $paidBy,
                                    'amount' => $mcMarkupDelta,
                                    'released_amount' => $mcProfitReleasedAmt,
                                    'type' => 'manual_cost_markup',
                                    'prio' => 2,
                                    'role' => 'profit',
                                    'linked_id' => $seniorMcCostId,
                                    'status' => 'pending',
                                    'acceptance_status' => $mcAcceptance,
                                    'release_status' => $releaseStatus,
                                    'released_at' => $releasedAt,
                                    'released_by' => $releasedBy,
                                    'rel_type' => 'orders',
                                    'rel_id' => $orderId,
                                    'rel_uid' => $orderUid,
                                    'desc' => "Supplementary manual outlay markup: {$mcDesc} (+{$mcMarkupDelta}) — {$payerName} owes {$payeeName}",
                                    'details' => json_encode([
                                        'layer' => 'manual_outlays',
                                        'role' => 'profit',
                                        'is_supplementary' => true,
                                        'parent_settlement_id' => (int)$existingMcProfit['id'],
                                        'cost_index' => $idx,
                                        'description' => $mcDesc,
                                        'profit' => $mcMarkupDelta,
                                        'linked_cost_settlement_id' => $seniorMcCostId,
                                        'paid_by_user_id' => $paidBy,
                                        'order_owner_user_id' => $orderOwnerUserId,
                                    ]),
                                    'created_by' => $sessionUser ?: $creatorUserId,
                                ]);
                            }
                        } else {
                            $sUidMcProfit = 'STL-' . date('Ymd') . '-' . strtoupper(substr(md5(random_bytes(8)), 0, 6));
                            $mcProfitReleasedAmt = '0.0000000000000000';

                            $sStmt = $db->prepare('INSERT INTO partner_settlements (uid, payer_user_id, payee_user_id, amount, released_amount, settlement_type, waterfall_priority, waterfall_role, linked_settlement_id, status, acceptance_status, release_status, released_at, released_by, related_entity_type, related_entity_id, related_entity_uid, description, details, created_by, created_at) VALUES (:uid, :payer, :payee, :amount, :released_amount, :type, :prio, :role, :linked_id, :status, :acceptance_status, :release_status, :released_at, :released_by, :rel_type, :rel_id, :rel_uid, :desc, :details, :created_by, NOW())');
                            $sStmt->execute([
                                'uid' => $sUidMcProfit,
                                'payer' => $orderOwnerUserId,
                                'payee' => $paidBy,
                                'amount' => $mcProfit,
                                'released_amount' => $mcProfitReleasedAmt,
                                'type' => 'manual_cost_markup',
                                'prio' => 2,
                                'role' => 'profit',
                                'linked_id' => $seniorMcCostId,
                                'status' => 'pending',
                                'acceptance_status' => $mcAcceptance,
                                'release_status' => $releaseStatus,
                                'released_at' => $releasedAt,
                                'released_by' => $releasedBy,
                                'rel_type' => 'orders',
                                'rel_id' => $orderId,
                                'rel_uid' => $orderUid,
                                'desc' => "Manual outlay markup: {$mcDesc} — {$payerName} owes {$payeeName}",
                                'details' => json_encode([
                                    'layer' => 'manual_outlays',
                                    'role' => 'profit',
                                    'cost_index' => $idx,
                                    'description' => $mcDesc,
                                    'profit' => $mcProfit,
                                    'linked_cost_settlement_id' => $seniorMcCostId,
                                    'paid_by_user_id' => $paidBy,
                                    'order_owner_user_id' => $orderOwnerUserId,
                                ]),
                                'created_by' => $sessionUser ?: $creatorUserId,
                            ]);
                        }
                    }
                }
            }
        }

        // ── LAYER 3: Service Labor Profit Settlements (Priority 2 Subordinated Profit) ──
        if ($orderData && !empty($orderData['service_owners_data'])) {
            $serviceOwners = json_decode($orderData['service_owners_data'], true);
            if (is_array($serviceOwners)) {
                foreach ($serviceOwners as $idx => $so) {
                    $collabUid = !empty($so['user_id']) ? (int)$so['user_id'] : null;
                    $laborProfit = (string)($so['profit'] ?? $so['labor_profit'] ?? '0');
                    $sharePct = (string)($so['share_pct'] ?? $so['percentage'] ?? '0');
                    if (Decimal::comp($laborProfit, '0') <= 0 && Decimal::comp($sharePct, '0') > 0 && !empty($orderData['profit'])) {
                        $laborProfit = Decimal::mul((string)$orderData['profit'], Decimal::div($sharePct, '100'));
                    }

                    // Only generate settlement if collaborator is someone other than the order owner/collector
                    if (!$collabUid || $collabUid === $orderOwnerUserId) continue;
                    if (Decimal::comp($laborProfit, '0') <= 0) continue;

                    // Fine-grained idempotency & supplementary check per collaborator
                    $existingCollab = null;
                    $totalExistingCollabAmt = '0';
                    if ($orderId > 0) {
                        $checkCollabStmt = $db->prepare("SELECT id, amount, details FROM partner_settlements WHERE related_entity_type = 'orders' AND related_entity_id = :oid AND settlement_type = 'service_profit_share' AND payee_user_id = :payee AND status != 'cancelled' ORDER BY id ASC LIMIT 1");
                        $checkCollabStmt->execute(['oid' => $orderId, 'payee' => $collabUid]);
                        $existingCollab = $checkCollabStmt->fetch(PDO::FETCH_ASSOC);

                        $sumCollabStmt = $db->prepare("SELECT SUM(amount) FROM partner_settlements WHERE related_entity_type = 'orders' AND related_entity_id = :oid AND settlement_type = 'service_profit_share' AND payee_user_id = :payee AND status != 'cancelled'");
                        $sumCollabStmt->execute(['oid' => $orderId, 'payee' => $collabUid]);
                        $totalExistingCollabAmt = (string)($sumCollabStmt->fetchColumn() ?: '0');
                    }

                    $collabName = $resolveUser($collabUid);
                    $serviceTitle = $orderData['service_name'] ?: "Order #$orderId";
                    $collabAcceptance = $resolveInitialAcceptance($collabUid);

                    if ($existingCollab) {
                        $db->prepare("UPDATE partner_settlements SET payer_user_id = :payer WHERE id = :id")
                           ->execute(['payer' => $orderOwnerUserId, 'id' => (int)$existingCollab['id']]);
                        $collabDelta = Decimal::sub($laborProfit, $totalExistingCollabAmt);
                        if (Decimal::comp($collabDelta, '0') > 0) {
                            $sUid = 'STL-' . date('Ymd') . '-' . strtoupper(substr(md5(random_bytes(8)), 0, 6));
                            $desc = "Supplementary service labor profit: {$serviceTitle} (+{$collabDelta}) — {$payerName} owes {$collabName}";
                            $laborReleasedAmt = '0.0000000000000000';

                            $sStmt = $db->prepare('INSERT INTO partner_settlements (uid, payer_user_id, payee_user_id, amount, released_amount, settlement_type, waterfall_priority, waterfall_role, linked_settlement_id, status, acceptance_status, release_status, released_at, released_by, related_entity_type, related_entity_id, related_entity_uid, description, details, created_by, created_at) VALUES (:uid, :payer, :payee, :amount, :released_amount, :type, :prio, :role, :linked_id, :status, :acceptance_status, :release_status, :released_at, :released_by, :rel_type, :rel_id, :rel_uid, :desc, :details, :created_by, NOW())');
                            $sStmt->execute([
                                'uid' => $sUid,
                                'payer' => $orderOwnerUserId,
                                'payee' => $collabUid,
                                'amount' => $collabDelta,
                                'released_amount' => $laborReleasedAmt,
                                'type' => 'service_profit_share',
                                'prio' => 2,
                                'role' => 'profit',
                                'linked_id' => (int)$existingCollab['id'],
                                'status' => 'pending',
                                'acceptance_status' => $collabAcceptance,
                                'release_status' => $releaseStatus,
                                'released_at' => $releasedAt,
                                'released_by' => $releasedBy,
                                'rel_type' => 'orders',
                                'rel_id' => $orderId,
                                'rel_uid' => $orderUid,
                                'desc' => $desc,
                                'details' => json_encode([
                                    'layer' => 'service_labor_profit',
                                    'role' => 'profit',
                                    'is_supplementary' => true,
                                    'parent_settlement_id' => (int)$existingCollab['id'],
                                    'collaborator_user_id' => $collabUid,
                                    'share_pct' => $sharePct,
                                    'labor_profit' => $collabDelta,
                                    'service_name' => $orderData['service_name'] ?? null,
                                    'order_owner_user_id' => $orderOwnerUserId,
                                ]),
                                'created_by' => $sessionUser ?: $creatorUserId,
                            ]);
                        }
                    } else {
                        $sUid = 'STL-' . date('Ymd') . '-' . strtoupper(substr(md5(random_bytes(8)), 0, 6));
                        $desc = "Service labor profit share: {$serviceTitle} — {$payerName} owes {$collabName} ({$sharePct}%)";
                        $laborReleasedAmt = '0.0000000000000000';

                        $sStmt = $db->prepare('INSERT INTO partner_settlements (uid, payer_user_id, payee_user_id, amount, released_amount, settlement_type, waterfall_priority, waterfall_role, linked_settlement_id, status, acceptance_status, release_status, released_at, released_by, related_entity_type, related_entity_id, related_entity_uid, description, details, created_by, created_at) VALUES (:uid, :payer, :payee, :amount, :released_amount, :type, :prio, :role, :linked_id, :status, :acceptance_status, :release_status, :released_at, :released_by, :rel_type, :rel_id, :rel_uid, :desc, :details, :created_by, NOW())');
                        $sStmt->execute([
                            'uid' => $sUid,
                            'payer' => $orderOwnerUserId,
                            'payee' => $collabUid,
                            'amount' => $laborProfit,
                            'released_amount' => $laborReleasedAmt,
                            'type' => 'service_profit_share',
                            'prio' => 2,
                            'role' => 'profit',
                            'linked_id' => null,
                            'status' => 'pending',
                            'acceptance_status' => $collabAcceptance,
                            'release_status' => $releaseStatus,
                            'released_at' => $releasedAt,
                            'released_by' => $releasedBy,
                            'rel_type' => 'orders',
                            'rel_id' => $orderId,
                            'rel_uid' => $orderUid,
                            'desc' => $desc,
                            'details' => json_encode([
                                'layer' => 'service_labor_profit',
                                'role' => 'profit',
                                'collaborator_user_id' => $collabUid,
                                'share_pct' => $sharePct,
                                'labor_profit' => $laborProfit,
                                'service_name' => $orderData['service_name'] ?? null,
                                'order_owner_user_id' => $orderOwnerUserId,
                            ]),
                            'created_by' => $sessionUser ?: $creatorUserId,
                        ]);
                    }
                }
            }
        }

        // ── LAYER 0: Service Owner Custodial Statement (Strictly Custom Services only: custom_sale == 1) ──
        if ($isCustomService) {
            $serviceTitle = $orderData['service_name'] ?: 'Custom Service';

            // Calculate owner's own parts cost and profit
            $ownerPartsCost = '0';
            $ownerPartsProfit = '0';
            foreach ($items as $item) {
                $cOwner = !empty($item['cost_owner_id']) ? (int)$item['cost_owner_id'] : null;
                if ($cOwner === $orderOwnerUserId) {
                    $itemQty = (string)($item['quantity'] ?? '0');
                    $itemCost = (string)($item['cost'] ?? '0');
                    $totalCost = Decimal::mul($itemCost, $itemQty);
                    $ownerProfit = (string)($item['product_owner_profit'] ?? '0');
                    $ownerPartsCost = Decimal::add($ownerPartsCost, $totalCost);
                    $ownerPartsProfit = Decimal::add($ownerPartsProfit, $ownerProfit);
                }
            }

            // Calculate owner's own manual costs and manual cost markup
            $ownerManualCost = '0';
            $ownerManualProfit = '0';
            if (!empty($orderData['manual_costs_data'])) {
                $mcArr = json_decode($orderData['manual_costs_data'], true);
                if (is_array($mcArr)) {
                    foreach ($mcArr as $mc) {
                        $pBy = !empty($mc['paid_by_user_id']) ? (int)$mc['paid_by_user_id'] : (!empty($mc['payer_user_id']) ? (int)$mc['payer_user_id'] : $orderOwnerUserId);
                        if ($pBy === $orderOwnerUserId) {
                            $ownerManualCost = Decimal::add($ownerManualCost, (string)($mc['amount'] ?? '0'));
                            $ownerManualProfit = Decimal::add($ownerManualProfit, (string)($mc['profit'] ?? '0'));
                        }
                    }
                }
            }

            // Calculate owner's labor share from service_owners_data
            $ownerLaborProfit = '0';
            $ownerLaborPct = '0';
            $teamData = !empty($orderData['service_owners_data']) ? json_decode($orderData['service_owners_data'], true) : [];
            if (is_array($teamData)) {
                foreach ($teamData as $member) {
                    if ((int)($member['user_id'] ?? 0) === $orderOwnerUserId) {
                        $ownerLaborProfit = (string)($member['profit'] ?? $member['labor_profit'] ?? '0');
                        $ownerLaborPct = (string)($member['share_pct'] ?? $member['percentage'] ?? '0');
                        break;
                    }
                }
            }

            // Net Owner Entitlement = Owner Cost + Owner Profit (adjusted by any Owner discount or extra money paid by the customer)
            $ownerTotalCost = Decimal::add($ownerPartsCost, $ownerManualCost);
            $ownerRawNetProfit = Decimal::add(Decimal::add($ownerPartsProfit, $ownerManualProfit), $ownerLaborProfit);
            $rawOwnerEntitlement = Decimal::add($ownerTotalCost, $ownerRawNetProfit);
            $totalCustomerBill = (string)($orderData['total'] ?? '0');
            $extMinOwed = (new self())->computeMinimumOwedToOthers($db, $orderId, $orderOwnerUserId);
            $maxOwnerFromCustomer = Decimal::sub($totalCustomerBill, $extMinOwed);
            if (Decimal::comp($maxOwnerFromCustomer, '0') < 0) {
                $maxOwnerFromCustomer = '0';
            }

            $ownerDiscountAbsorbed = '0';
            $ownerExtraProfit = '0';
            if (Decimal::comp($maxOwnerFromCustomer, $rawOwnerEntitlement) < 0) {
                $ownerDiscountAbsorbed = Decimal::sub($rawOwnerEntitlement, $maxOwnerFromCustomer);
            } elseif (Decimal::comp($maxOwnerFromCustomer, $rawOwnerEntitlement) > 0) {
                $ownerExtraProfit = Decimal::sub($maxOwnerFromCustomer, $rawOwnerEntitlement);
                $ownerLaborProfit = Decimal::add($ownerLaborProfit, $ownerExtraProfit);
            }
            $netOwnerEntitlement = $maxOwnerFromCustomer;
            $ownerNetProfitAfterVariance = Decimal::sub($netOwnerEntitlement, $ownerTotalCost);

            // Insert or update service_owner_statement
            $existingOwnerStmt = $db->prepare("SELECT id, payer_user_id, acceptance_status FROM partner_settlements 
                WHERE related_entity_type = 'orders' 
                  AND related_entity_id = :oid 
                  AND settlement_type = 'service_owner_statement' 
                  AND status != 'cancelled' LIMIT 1");
            $existingOwnerStmt->execute(['oid' => $orderId]);
            $existingOwnerRow = $existingOwnerStmt->fetch(PDO::FETCH_ASSOC);
            $existingOwnerSettleId = $existingOwnerRow ? (int)$existingOwnerRow['id'] : 0;

            $ownerDetails = json_encode([
                'layer'                   => 'service_owner_custody',
                'role'                    => 'lead_owner',
                'is_service_owner'        => true,
                'service_name'            => $serviceTitle,
                'customer_total'          => $totalCustomerBill,
                'external_owed_floor'     => $extMinOwed,
                'owner_parts_cost'        => $ownerPartsCost,
                'owner_parts_profit'      => $ownerPartsProfit,
                'owner_manual_cost'       => $ownerManualCost,
                'owner_manual_profit'     => $ownerManualProfit,
                'owner_labor_profit'      => $ownerLaborProfit,
                'owner_labor_pct'         => $ownerLaborPct,
                'owner_total_cost'        => $ownerTotalCost,
                'owner_net_profit'        => $ownerNetProfitAfterVariance,
                'owner_discount_absorbed' => $ownerDiscountAbsorbed,
                'owner_extra_profit'      => $ownerExtraProfit,
                'owner_net_entitlement'   => $netOwnerEntitlement,
                'order_owner_user_id'     => $orderOwnerUserId
            ], JSON_UNESCAPED_UNICODE);

            $ownerDesc = "Service Owner Statement: {$serviceTitle} — Custodian: {$payerName}";
            $ownerAcceptance = $resolveInitialAcceptance($orderOwnerUserId);

            if ($existingOwnerSettleId > 0) {
                // Preserve 'accepted' if the same owner already accepted in Phase 2; if owner changed in Phase 1, re-evaluate acceptance
                $keepAccepted = ((int)$existingOwnerRow['payer_user_id'] === $orderOwnerUserId && ($existingOwnerRow['acceptance_status'] ?? '') === 'accepted');
                $updOwnerAcc = $keepAccepted ? 'accepted' : $ownerAcceptance;
                $db->prepare("UPDATE partner_settlements 
                    SET payer_user_id = :payer, 
                        payee_user_id = :payee, 
                        amount = :amt, 
                        acceptance_status = :acc,
                        description = :desc, 
                        details = :det 
                    WHERE id = :id")
                   ->execute([
                       'payer' => $orderOwnerUserId,
                       'payee' => $orderOwnerUserId,
                       'amt'   => $netOwnerEntitlement,
                       'acc'   => $updOwnerAcc,
                       'desc'  => $ownerDesc,
                       'det'   => $ownerDetails,
                       'id'    => $existingOwnerSettleId
                   ]);
            } else {
                $sUid = 'STL-' . date('Ymd') . '-' . strtoupper(substr(md5(random_bytes(8)), 0, 6));
                $db->prepare("INSERT INTO partner_settlements (
                    uid, payer_user_id, payee_user_id, amount, released_amount, settlement_type, 
                    waterfall_priority, waterfall_role, status, acceptance_status, release_status, 
                    related_entity_type, related_entity_id, related_entity_uid, description, details, created_by, created_at
                ) VALUES (
                    :uid, :payer, :payee, :amt, '0.0000000000000000', 'service_owner_statement',
                    2, 'profit', 'pending', :acc, 'locked',
                    'orders', :oid, :ouid, :desc, :det, :cb, NOW()
                )")->execute([
                    'uid'   => $sUid,
                    'payer' => $orderOwnerUserId,
                    'payee' => $orderOwnerUserId,
                    'amt'   => $netOwnerEntitlement,
                    'acc'   => $ownerAcceptance,
                    'oid'   => $orderId,
                    'ouid'  => $orderUid,
                    'desc'  => $ownerDesc,
                    'det'   => $ownerDetails,
                    'cb'    => $sessionUser ?: $creatorUserId
                ]);
            }
        }

        // Reconcile consensus and order agreement status after generating / updating tickets
        self::syncOrderAgreementStatus($db, (int)$orderId);

        // Stage 1 Notification Dispatch: Notify each partner with a pending statement (including an assigned Owner if Owner != Creator)
        try {
            $partnersStmt = $db->prepare("SELECT DISTINCT payee_user_id 
                FROM partner_settlements 
                WHERE related_entity_type = 'orders' AND related_entity_id = :oid 
                  AND payee_user_id != :actor AND status = 'pending' AND acceptance_status = 'pending'");
            $partnersStmt->execute(['oid' => $orderId, 'actor' => $autoAcceptUserId]);
            $pendingPartnerIds = $partnersStmt->fetchAll(PDO::FETCH_COLUMN) ?: [];

            $actorName = $resolveUser($autoAcceptUserId ?: $orderOwnerUserId);
            foreach ($pendingPartnerIds as $pId) {
                $pId = (int)$pId;
                if ($pId <= 0) continue;
                $stageTag = "order_approval_{$orderId}_v{$agrVersion}_{$pId}";
                // Guard against duplicate notification for this version and user
                $chkNotif = $db->prepare("SELECT id FROM notifications WHERE user_id = :uid AND entity_type = 'orders' AND entity_id = :oid AND stage_tag = :stag LIMIT 1");
                $chkNotif->execute(['uid' => $pId, 'oid' => $orderId, 'stag' => $stageTag]);
                if (!$chkNotif->fetchColumn()) {
                    $versionNotice = $agrVersion > 1 ? " (Updated Terms v{$agrVersion})" : "";
                    $notifTitle = $isCustomService
                        ? "Custom Service Statement: #{$orderUid}{$versionNotice}"
                        : "Consignment Sale Proposal: #{$orderUid}{$versionNotice}";
                    $notifBody = $agrVersion > 1
                        ? "@{$actorName} modified terms for order #{$orderUid}. Please review and agree to the updated statement."
                        : "@{$actorName} created order #{$orderUid} and is waiting for your agreement.";
                    $db->prepare('INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, "settlement", :t, :b, :aurl, "orders", :oid, :stag, 0, NOW())')
                       ->execute([
                           'uid'  => $pId,
                           't'    => $notifTitle,
                           'b'    => $notifBody,
                           'aurl' => "#order-details:{$orderId}?step=approval",
                           'oid'  => $orderId,
                           'stag' => $stageTag,
                       ]);
                }
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
    }

    /**
     * Stage 5 Notification Dispatch: Notify stock owners when order is completed.
     */
    public static function notifyPartnersOrderCompleted(PDO $db, int $orderId, string $orderUid, int $orderOwnerUserId): void
    {
        try {
            $partnersStmt = $db->prepare("SELECT DISTINCT payee_user_id 
                FROM partner_settlements 
                WHERE related_entity_type = 'orders' AND related_entity_id = :oid 
                  AND payee_user_id != :owner AND status != 'cancelled'");
            $partnersStmt->execute(['oid' => $orderId, 'owner' => $orderOwnerUserId]);
            $partnerIds = $partnersStmt->fetchAll(PDO::FETCH_COLUMN) ?: [];

            foreach ($partnerIds as $pId) {
                $pId = (int)$pId;
                if ($pId <= 0) continue;
                $stageTag = "order_completed_{$orderId}";
                $chkNotif = $db->prepare("SELECT id FROM notifications WHERE user_id = :uid AND entity_type = 'orders' AND entity_id = :oid AND stage_tag = :stag LIMIT 1");
                $chkNotif->execute(['uid' => $pId, 'oid' => $orderId, 'stag' => $stageTag]);
                if (!$chkNotif->fetchColumn()) {
                    $notifTitle = "Order Completed: #{$orderUid}";
                    $notifBody = "Order #{$orderUid} containing your consignment stock has been fully completed.";
                    $db->prepare('INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, "settlement", :t, :b, :aurl, "orders", :oid, :stag, 0, NOW())')
                       ->execute([
                           'uid'  => $pId,
                           't'    => $notifTitle,
                           'b'    => $notifBody,
                           'aurl' => "#order-details:{$orderId}",
                           'oid'  => $orderId,
                           'stag' => $stageTag,
                       ]);
                }
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
    }

    /**
     * Cancel all pending partner settlements for a given order.
     * Used when an order is returned or deleted.
     */
    public static function cancelPartnerSettlements(PDO $db, int $orderId, string $reason): void
    {
        $sessionUser = (int)($_SESSION['user_id'] ?? 1);

        // Audit check: If any settlement was already settled, log a high-priority warning for partner cash reconciliation
        try {
            $stmtSettled = $db->prepare('SELECT id, payer_user_id, payee_user_id, amount 
                                         FROM partner_settlements 
                                         WHERE related_entity_type = :ret AND related_entity_id = :rei AND status = "settled" AND settlement_type != "order_return_clawback"');
            $stmtSettled->execute(['ret' => 'orders', 'rei' => $orderId]);
            $settledTickets = $stmtSettled->fetchAll(PDO::FETCH_ASSOC);
            foreach ($settledTickets as $st) {
                SystemLog::write('partner_settlements', 'settlement_reversal_needed', (int)$st['id'], "Settlement #{$st['id']}", json_encode([
                    'order_id' => $orderId,
                    'reason' => $reason,
                    'payer_user_id' => (int)$st['payer_user_id'],
                    'payee_user_id' => (int)$st['payee_user_id'],
                    'amount' => (string)$st['amount'],
                    'note' => 'Order was returned/deleted after partner payout was settled. Cash reconciliation or reversal payout required.',
                ], JSON_UNESCAPED_UNICODE), $sessionUser);
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // Cancel all partner settlements for this order (whether pending, draft, disputed, refused, or settled) EXCEPT order_return_clawback
        $db->prepare('UPDATE partner_settlements SET status = :s, acceptance_status = "revoked", release_status = "revoked", cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr WHERE related_entity_type = :ret AND related_entity_id = :rei AND status != "cancelled" AND settlement_type != "order_return_clawback"')
           ->execute([
               's' => 'cancelled',
               'cb' => $sessionUser,
               'cr' => $reason,
               'ret' => 'orders',
               'rei' => $orderId,
           ]);
    }

    /**
     * Resolve or auto-seed the built-in Walk-by supplier ID.
     */
    public static function getOrCreateWalkbySupplierId(PDO $db): int
    {
        $stmt = $db->query('SELECT id FROM suppliers WHERE is_walkby = 1 ORDER BY id ASC LIMIT 1');
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row && !empty($row['id'])) {
            return (int)$row['id'];
        }
        $uid = 'SUP-' . date('Ymd') . '-WALKBY';
        $ins = $db->prepare('INSERT INTO suppliers (uid, name, note, is_walkby, created_by, created_at) VALUES (:uid, :name, :note, 1, NULL, NOW())');
        $ins->execute([
            'uid'  => $uid,
            'name' => 'Walk-by (one-off seller)',
            'note' => 'Built-in supplier for one-off / unofficial sellers. Pick this on a purchase when you buy from someone who is not a registered supplier; you then note who they were on that purchase.',
        ]);
        return (int)$db->lastInsertId();
    }

    /**
     * Process a single order item's return destination.
     * @param PDO $db Active DB connection (within transaction)
     * @param array $item The order_item row (must have product_id, purchase_id, quantity, cost_owner_id)
     * @param string $destination 'original_lot' | 'absorb_master' | 'isolated_lot'
     * @param int $orderId The parent order ID
     * @return ?int The purchase lot ID where stock was restored
     */
    public static function processReturnDestination(PDO $db, array $item, string $destination, int $orderId): ?int
    {
        $purchaseId = $item['purchase_id'] ?? null;
        $productId = $item['product_id'] ?? null;
        $quantity = (string)($item['returned_quantity'] ?? $item['quantity'] ?? '0');
        if (!$purchaseId || !$productId || Decimal::comp($quantity, '0') <= 0) return null;

        $stmt = $db->prepare('SELECT id, quantity FROM products WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $productId]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($product) {
            $db->prepare('UPDATE products SET quantity = :quantity, updated_at = NOW() WHERE id = :id')->execute([
                'quantity' => Decimal::add((string)$product['quantity'], $quantity),
                'id' => $productId,
            ]);
        }

        $stmt = $db->prepare('SELECT * FROM purchases WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $purchaseId]);
        $purchase = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$purchase) return null;

        $newSold = Decimal::comp((string)$purchase['quantity_sold'], $quantity) >= 0 ? Decimal::sub((string)$purchase['quantity_sold'], $quantity) : '0';
        $db->prepare('UPDATE purchases SET quantity_sold = :sold WHERE id = :id')->execute(['sold' => $newSold, 'id' => $purchaseId]);

        // When destination is original_lot, stock returns directly to the original purchase lot (resurrecting it if it was merged)

        if ($destination === 'absorb_master') {
            $master = null;
            if (!empty($purchase['merged_into_id'])) {
                $master = self::resolveActiveMasterBatch($db, (int)$purchase['merged_into_id']);
            } elseif (!empty($purchase['is_merged_master'])) {
                // The purchase itself is the master batch
                $master = $purchase;
            }

            if ($master) {
                $newRemaining = Decimal::add((string)$master['quantity_remaining'], $quantity);
                $newStatus = (Decimal::comp($newRemaining, '0') > 0 && in_array($master['status'], ['completed', 'merged'], true)) ? 'active' : $master['status'];

                // Compute valuation adjustment (cost variance)
                $origCost = (string)($item['cost'] ?? $purchase['price'] ?? '0');
                $masterCost = (string)$master['price'];
                $unitDiff = Decimal::sub($masterCost, $origCost);
                $variance = Decimal::mul($unitDiff, $quantity);

                // Master batch ceiling expansion (Fix F6)
                $newMasterQty = (string)$master['quantity'];
                $newMasterTotal = (string)$master['total'];
                if (Decimal::comp($newRemaining, $newMasterQty) > 0) {
                    $newMasterQty = $newRemaining;
                    $newMasterTotal = Decimal::mul((string)$master['price'], $newMasterQty);
                }

                $db->prepare('UPDATE purchases SET quantity = :mqty, total = :mtotal, quantity_remaining = :rem, status = :st, valuation_adjustment = valuation_adjustment + :variance WHERE id = :id')
                   ->execute(['mqty' => $newMasterQty, 'mtotal' => $newMasterTotal, 'rem' => $newRemaining, 'st' => $newStatus, 'variance' => $variance, 'id' => $master['id']]);
                if (!empty($item['id'])) {
                    $db->prepare('UPDATE order_items SET return_purchase_id = :ret WHERE id = :item_id')
                       ->execute(['ret' => $master['id'], 'item_id' => $item['id']]);
                }
                return (int)$master['id'];
            }
            $destination = 'original_lot';
        }

        if ($destination === 'isolated_lot') {
            $uid = "PUR-RET-" . strtoupper(bin2hex(random_bytes(4)));
            $walkbySupplierId = self::getOrCreateWalkbySupplierId($db);
            $price = (string)($item['cost'] ?? $purchase['price'] ?? '0');
            $total = Decimal::mul($price, $quantity);

            // Resolve order UID and item ID for narrative lineage
            $orderUid = "Order #{$orderId}";
            $oStmt = $db->prepare('SELECT uid FROM orders WHERE id = :id');
            $oStmt->execute(['id' => $orderId]);
            $oRow = $oStmt->fetch(PDO::FETCH_ASSOC);
            if (!empty($oRow['uid'])) {
                $orderUid = $oRow['uid'];
            }

            $itemIdStr = !empty($item['id']) ? " (Item #{$item['id']})" : "";
            $originPurchaseUid = $purchase['uid'] ?? "PUR-{$purchaseId}";

            $masterBatchUid = null;
            $masterBatchId = null;
            if (!empty($purchase['merged_into_id'])) {
                $master = self::resolveActiveMasterBatch($db, (int)$purchase['merged_into_id'], false);
                if ($master) {
                    $masterBatchUid = $master['uid'] ?? "PUR-{$master['id']}";
                    $masterBatchId = (int)$master['id'];
                }
            } elseif (!empty($purchase['is_merged_master'])) {
                $masterBatchUid = $purchase['uid'] ?? "PUR-{$purchase['id']}";
                $masterBatchId = (int)$purchase['id'];
            }

            // Resolve target supplier attribution dynamically
            $targetSupplierId = null;
            $targetSupplierName = null;
            $targetSupplierIsWalkby = false;
            $supplierChoiceMode = $item['supplier_choice'] ?? $item['supplier_mode'] ?? null;
            $requestedSupplierId = !empty($item['isolated_supplier_id']) 
                ? (int)$item['isolated_supplier_id'] 
                : (!empty($item['return_supplier_id']) ? (int)$item['return_supplier_id'] : (!empty($item['supplier_id']) ? (int)$item['supplier_id'] : null));

            // 1. If explicit supplier ID was provided by cashier/payload
            if ($requestedSupplierId) {
                $supCheck = $db->prepare('SELECT id, name, is_walkby FROM suppliers WHERE id = :id AND deleted_at IS NULL');
                $supCheck->execute(['id' => $requestedSupplierId]);
                $supRow = $supCheck->fetch(PDO::FETCH_ASSOC);
                if ($supRow) {
                    $targetSupplierId = (int)$supRow['id'];
                    $targetSupplierName = $supRow['name'];
                    $targetSupplierIsWalkby = !empty($supRow['is_walkby']) || ($targetSupplierId === $walkbySupplierId) || ($targetSupplierId === 1);
                }
            }

            // 2. If no valid explicit supplier ID provided, apply intelligent smart default
            if (!$targetSupplierId) {
                $isMergedLot = (!empty($purchase['merged_into_id']) || !empty($purchase['is_merged_master']) || ($purchase['status'] ?? '') === 'merged');
                $origSupId = !empty($purchase['supplier_id']) ? (int)$purchase['supplier_id'] : null;

                // For normal unmerged batches, default to the origin supplier if known & non-walkby
                if (!$isMergedLot && $origSupId && $origSupId !== $walkbySupplierId && $origSupId !== 1) {
                    $supCheck = $db->prepare('SELECT id, name, is_walkby FROM suppliers WHERE id = :id AND deleted_at IS NULL');
                    $supCheck->execute(['id' => $origSupId]);
                    $supRow = $supCheck->fetch(PDO::FETCH_ASSOC);
                    if ($supRow && empty($supRow['is_walkby'])) {
                        $targetSupplierId = (int)$supRow['id'];
                        $targetSupplierName = $supRow['name'];
                        $targetSupplierIsWalkby = false;
                        $supplierChoiceMode = 'original';
                    }
                }

                // If merged or origin supplier was walkby/empty, default to Walk-by seller
                if (!$targetSupplierId) {
                    $targetSupplierId = $walkbySupplierId;
                    $targetSupplierName = 'Walk-by (one-off seller)';
                    $targetSupplierIsWalkby = true;
                    $supplierChoiceMode = 'walkby';
                }
            } else {
                if (!$supplierChoiceMode) {
                    $supplierChoiceMode = $targetSupplierIsWalkby ? 'walkby' : 'user_selected';
                }
            }

            // Format comprehensive provenance narrative
            if ($masterBatchUid && !empty($purchase['merged_into_id'])) {
                if ($targetSupplierIsWalkby) {
                    $supplierNote = "Order Return Restoral (Isolated Lot) · {$orderUid}{$itemIdStr} · Origin: Lot #{$originPurchaseUid} (merged into Master #{$masterBatchUid}). Multi-supplier origin attributed to Walk-by seller.";
                } else {
                    $supplierNote = "Order Return Restoral (Isolated Lot) · {$orderUid}{$itemIdStr} · Origin: Lot #{$originPurchaseUid} (merged into Master #{$masterBatchUid}). User attributed to supplier: {$targetSupplierName}.";
                }
            } elseif ($masterBatchUid) {
                if ($targetSupplierIsWalkby) {
                    $supplierNote = "Order Return Restoral (Isolated Lot) · {$orderUid}{$itemIdStr} · Sold from Master Batch #{$masterBatchUid}. Multi-supplier origin attributed to Walk-by seller.";
                } else {
                    $supplierNote = "Order Return Restoral (Isolated Lot) · {$orderUid}{$itemIdStr} · Sold from Master Batch #{$masterBatchUid}. User attributed to supplier: {$targetSupplierName}.";
                }
            } else {
                if ($targetSupplierIsWalkby) {
                    $supplierNote = "Order Return Restoral (Isolated Lot) · {$orderUid}{$itemIdStr} · Restored from Lot #{$originPurchaseUid} as isolated lot under Walk-by seller.";
                } else {
                    $supplierNote = "Order Return Restoral (Isolated Lot) · {$orderUid}{$itemIdStr} · Restored from Lot #{$originPurchaseUid} as isolated lot under original supplier: {$targetSupplierName}.";
                }
            }

            $ins = $db->prepare('INSERT INTO purchases (uid, product_id, name, price, quantity, quantity_remaining, quantity_sold, quantity_reserved, quantity_writeoff, quantity_merged, total, date, created_by, owner_user_id, supplier_id, payment_status, amount_paid, settle_kind, paid_from, status, supplier_note, created_from_order_id, created_from_purchase_id) VALUES (:uid, :product_id, :name, :price, :qty, :qty, 0, 0, 0, 0, :total, NOW(), :created_by, :owner, :supplier_id, "paid", :total, "cash", "vault", "active", :supplier_note, :order_id, :src_purchase)');
            $ins->execute([
                'uid' => $uid,
                'product_id' => $productId,
                'name' => $purchase['name'],
                'price' => $price,
                'qty' => $quantity,
                'total' => $total,
                'created_by' => $_SESSION['user_id'] ?? 1,
                'owner' => $purchase['owner_user_id'],
                'supplier_id' => $targetSupplierId,
                'supplier_note' => $supplierNote,
                'order_id' => $orderId,
                'src_purchase' => $purchaseId
            ]);
            $newId = (int)$db->lastInsertId();
            if (!empty($item['id'])) {
                $db->prepare('UPDATE order_items SET return_purchase_id = :ret, return_supplier_id = :sid WHERE id = :item_id')
                   ->execute(['ret' => $newId, 'sid' => $targetSupplierId, 'item_id' => $item['id']]);
            }

            SystemLog::write('orders', 'return_isolated_lot', (int)$orderId,
                "Order #{$orderId}",
                json_encode([
                    'order_uid'              => $orderUid,
                    'item_id'                => $item['id'] ?? null,
                    'new_purchase_id'        => $newId,
                    'new_purchase_uid'       => $uid,
                    'origin_purchase_id'     => (int)$purchaseId,
                    'origin_purchase_uid'    => $originPurchaseUid,
                    'master_batch_id'        => $masterBatchId,
                    'master_batch_uid'       => $masterBatchUid,
                    'supplier_id'            => $targetSupplierId,
                    'supplier_name'          => $targetSupplierName,
                    'supplier_type'          => $targetSupplierIsWalkby ? 'walk_by' : 'registered_supplier',
                    'supplier_choice_mode'   => $supplierChoiceMode,
                    'strategy'               => 'isolated_lot',
                    'quantity_returned'      => $quantity,
                    'unit_cost'              => $price,
                    'user_decision'          => "User restored as standalone lot attributed to {$targetSupplierName} ({$supplierChoiceMode})",
                ], JSON_UNESCAPED_UNICODE)
            );

            return (int)$newId;
        }

        $newRemaining = Decimal::add((string)$purchase['quantity_remaining'], $quantity);
        $newStatus = (Decimal::comp($newRemaining, '0') > 0 && in_array($purchase['status'], ['completed', 'merged'], true)) ? 'active' : $purchase['status'];

        $origCost = (string)($item['cost'] ?? $purchase['price'] ?? '0');
        $currentLotPrice = (string)$purchase['price'];
        $priceDiff = Decimal::sub($currentLotPrice, $origCost);
        $valuationVariance = Decimal::mul($priceDiff, $quantity);

        if (Decimal::comp($valuationVariance, '0') !== 0) {
            $db->prepare('UPDATE purchases SET quantity_remaining = :rem, status = :st, valuation_adjustment = valuation_adjustment + :variance WHERE id = :id')
               ->execute(['rem' => $newRemaining, 'st' => $newStatus, 'variance' => $valuationVariance, 'id' => $purchaseId]);

            try {
                PurchasesController::ensurePurchaseHistoryTable($db);
                $db->prepare('INSERT INTO purchase_history (purchase_id, action, price_before, price_after, valuation_delta, quantity_remaining, reason, changes, edited_by, created_at) VALUES (:pid, "return_lot_price_variance", :p_before, :p_after, :v_delta, :q_rem, :reason, :changes, :edited_by, NOW())')
                   ->execute([
                       'pid' => $purchaseId,
                       'p_before' => $origCost,
                       'p_after' => $currentLotPrice,
                       'v_delta' => $valuationVariance,
                       'q_rem' => $newRemaining,
                       'reason' => "Stock returned to lot at updated price {$currentLotPrice} (sale cost was {$origCost})",
                       'changes' => json_encode(['order_id' => $orderId, 'item_id' => $item['id'] ?? null, 'quantity' => $quantity, 'variance' => $valuationVariance]),
                       'edited_by' => $_SESSION['user_id'] ?? null
                   ]);
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        } else {
            $db->prepare('UPDATE purchases SET quantity_remaining = :rem, status = :st WHERE id = :id')
               ->execute(['rem' => $newRemaining, 'st' => $newStatus, 'id' => $purchaseId]);
        }

        if (!empty($item['id'])) {
            $db->prepare('UPDATE order_items SET return_purchase_id = :ret WHERE id = :item_id')
               ->execute(['ret' => $purchaseId, 'item_id' => $item['id']]);
        }

        return (int)$purchaseId;
    }

    public static function reserveInventory(PDO $db, array $items): ?string
    {
        // Sort items deterministically by product_id and purchase_id to prevent InnoDB deadlocks
        usort($items, function ($a, $b) {
            $pDiff = ((int)($a['product_id'] ?? 0)) - ((int)($b['product_id'] ?? 0));
            if ($pDiff !== 0) return $pDiff;
            return ((int)($a['purchase_id'] ?? 0)) - ((int)($b['purchase_id'] ?? 0));
        });

        foreach ($items as $item) {
            $productId = $item['product_id'] ?? null;
            $purchaseId = $item['purchase_id'] ?? null;
            $quantity = (string) ($item['quantity'] ?? '0');

            if (Decimal::comp($quantity, '0') <= 0) {
                return 'Invalid item quantity';
            }

            if ($productId) {
                $stmt = $db->prepare('SELECT id, quantity, quantity_reserved FROM products WHERE id = :id FOR UPDATE');
                $stmt->execute(['id' => $productId]);
                $product = $stmt->fetch();
                if (!$product) {
                    return 'Product not found';
                }

                $available = Decimal::sub($product['quantity'], $product['quantity_reserved']);
                if (Decimal::comp($available, $quantity) < 0) {
                    $reserved = $product['quantity_reserved'];
                    return "Only {$available} units available. {$reserved} units currently on hold.";
                }

                $db->prepare('UPDATE products SET quantity_reserved = :reserved, updated_at = NOW() WHERE id = :id')->execute([
                    'reserved' => Decimal::add($product['quantity_reserved'], $quantity),
                    'id' => $productId,
                ]);
            }

            if ($purchaseId) {
                $stmt = $db->prepare('SELECT id, quantity_remaining, quantity_reserved, transfer_status FROM purchases WHERE id = :id FOR UPDATE');
                $stmt->execute(['id' => $purchaseId]);
                $purchase = $stmt->fetch();
                if (!$purchase) {
                    return 'Purchase batch not found';
                }
                if (!empty($purchase['transfer_status']) && in_array($purchase['transfer_status'], ['pending_transfer', 'pending_delegated'])) {
                    return 'This purchase batch is currently locked in a pending status and cannot be sold.';
                }

                $available = Decimal::sub($purchase['quantity_remaining'], $purchase['quantity_reserved']);
                if (Decimal::comp($available, $quantity) < 0) {
                    $reserved = $purchase['quantity_reserved'];
                    return "Only {$available} units available in this batch. {$reserved} units on hold.";
                }

                $db->prepare('UPDATE purchases SET quantity_reserved = :reserved WHERE id = :id')->execute([
                    'reserved' => Decimal::add($purchase['quantity_reserved'], $quantity),
                    'id' => $purchaseId,
                ]);
            }
        }

        return null;
    }

    public static function releaseInventory(PDO $db, array $items): void
    {
        // Sort items deterministically by product_id and purchase_id to prevent InnoDB deadlocks
        usort($items, function ($a, $b) {
            $pDiff = ((int)($a['product_id'] ?? 0)) - ((int)($b['product_id'] ?? 0));
            if ($pDiff !== 0) return $pDiff;
            return ((int)($a['purchase_id'] ?? 0)) - ((int)($b['purchase_id'] ?? 0));
        });

        foreach ($items as $item) {
            $productId = $item['product_id'] ?? null;
            $purchaseId = $item['purchase_id'] ?? null;
            $quantity = (string) ($item['quantity'] ?? '0');

            if (!empty($item['is_returned']) || Decimal::comp($quantity, '0') <= 0) {
                continue;
            }

            if ($productId) {
                $stmt = $db->prepare('SELECT id, quantity_reserved FROM products WHERE id = :id FOR UPDATE');
                $stmt->execute(['id' => $productId]);
                $product = $stmt->fetch();
                if ($product) {
                    $newReserved = Decimal::sub($product['quantity_reserved'], $quantity);
                    if (Decimal::comp($newReserved, '0') < 0)
                        $newReserved = '0';
                    $db->prepare('UPDATE products SET quantity_reserved = :reserved, updated_at = NOW() WHERE id = :id')->execute([
                        'reserved' => $newReserved,
                        'id' => $productId,
                    ]);
                }
            }

            if ($purchaseId) {
                $stmt = $db->prepare('SELECT id, quantity_reserved FROM purchases WHERE id = :id FOR UPDATE');
                $stmt->execute(['id' => $purchaseId]);
                $purchase = $stmt->fetch();
                if ($purchase) {
                    $newReserved = Decimal::sub($purchase['quantity_reserved'], $quantity);
                    if (Decimal::comp($newReserved, '0') < 0)
                        $newReserved = '0';
                    $db->prepare('UPDATE purchases SET quantity_reserved = :reserved WHERE id = :id')->execute([
                        'reserved' => $newReserved,
                        'id' => $purchaseId,
                    ]);
                }
            }
        }
    }

    public static function deductInventory(PDO $db, array $items): ?string
    {
        // Sort items deterministically by product_id and purchase_id to prevent InnoDB deadlocks
        usort($items, function ($a, $b) {
            $pDiff = ((int)($a['product_id'] ?? 0)) - ((int)($b['product_id'] ?? 0));
            if ($pDiff !== 0) return $pDiff;
            return ((int)($a['purchase_id'] ?? 0)) - ((int)($b['purchase_id'] ?? 0));
        });

        foreach ($items as $item) {
            $productId = $item['product_id'] ?? null;
            $purchaseId = $item['purchase_id'] ?? null;
            $quantity = (string) ($item['quantity'] ?? '0');

            if (Decimal::comp($quantity, '0') <= 0) {
                return 'Invalid item quantity';
            }

            if ($productId) {
                $stmt = $db->prepare('SELECT id, quantity, quantity_reserved FROM products WHERE id = :id FOR UPDATE');
                $stmt->execute(['id' => $productId]);
                $product = $stmt->fetch();
                if (!$product) {
                    return 'Product not found';
                }
                $available = Decimal::sub((string) $product['quantity'], (string) ($product['quantity_reserved'] ?? '0'));
                if (Decimal::comp($available, $quantity) < 0) {
                    return 'Insufficient unreserved stock';
                }
                $db->prepare('UPDATE products SET quantity = :quantity, updated_at = NOW() WHERE id = :id')->execute([
                    'quantity' => Decimal::sub((string) $product['quantity'], $quantity),
                    'id' => $productId,
                ]);
            }

            if ($purchaseId) {
                $stmt = $db->prepare('SELECT id, quantity_remaining, quantity_sold, quantity_reserved, transfer_status FROM purchases WHERE id = :id FOR UPDATE');
                $stmt->execute(['id' => $purchaseId]);
                $purchase = $stmt->fetch();
                if (!$purchase) {
                    return 'Purchase batch not found';
                }
                if (!empty($purchase['transfer_status']) && in_array($purchase['transfer_status'], ['pending_transfer', 'pending_delegated'])) {
                    return 'This purchase batch is currently locked in a pending status and cannot be sold.';
                }
                $batchAvail = Decimal::sub((string)$purchase['quantity_remaining'], (string)($purchase['quantity_reserved'] ?? '0'));
                if (Decimal::comp($batchAvail, $quantity) < 0) {
                    return 'Batch stock insufficient (reserved for other orders)';
                }
                $db->prepare('UPDATE purchases SET quantity_remaining = :remaining, quantity_sold = :sold WHERE id = :id')->execute([
                    'remaining' => Decimal::sub($purchase['quantity_remaining'], $quantity),
                    'sold' => Decimal::add($purchase['quantity_sold'], $quantity),
                    'id' => $purchaseId,
                ]);
            } elseif ($productId) {
                // Auto-FIFO lot deduction when no explicit purchaseId was provided to maintain products.quantity == SUM(purchases.quantity_remaining)
                $lotsStmt = $db->prepare('SELECT id, quantity_remaining, quantity_sold, quantity_reserved, transfer_status FROM purchases WHERE product_id = :pid AND deleted_at IS NULL AND quantity_remaining > 0 ORDER BY id ASC FOR UPDATE');
                $lotsStmt->execute(['pid' => $productId]);
                $candidateLots = $lotsStmt->fetchAll();
                $remToTake = $quantity;
                $updLotStmt = $db->prepare('UPDATE purchases SET quantity_remaining = :remaining, quantity_sold = :sold WHERE id = :id');
                foreach ($candidateLots as $cLot) {
                    if (Decimal::comp($remToTake, '0') <= 0) break;
                    if (!empty($cLot['transfer_status']) && in_array($cLot['transfer_status'], ['pending_transfer', 'pending_delegated'])) {
                        continue;
                    }
                    $availInLot = Decimal::sub((string)$cLot['quantity_remaining'], (string)($cLot['quantity_reserved'] ?? '0'));
                    if (Decimal::comp($availInLot, '0') <= 0) continue;
                    $take = Decimal::comp($availInLot, $remToTake) <= 0 ? $availInLot : $remToTake;
                    $updLotStmt->execute([
                        'remaining' => Decimal::sub((string)$cLot['quantity_remaining'], $take),
                        'sold' => Decimal::add((string)$cLot['quantity_sold'], $take),
                        'id' => $cLot['id'],
                    ]);
                    $remToTake = Decimal::sub($remToTake, $take);
                }
            }
        }

        return null;
    }

    public static function resolveActiveMasterBatch(PDO $db, int $startPurchaseId, bool $forUpdate = true): ?array
    {
        $currentId = $startPurchaseId;
        $visited = [];
        $activeMaster = null;

        $lockClause = $forUpdate ? ' FOR UPDATE' : '';
        while ($currentId && !isset($visited[$currentId])) {
            $visited[$currentId] = true;
            $stmt = $db->prepare('SELECT id, uid, name, product_id, price, quantity, quantity_remaining, quantity_sold, total, owner_user_id, merged_into_id, status FROM purchases WHERE id = :id' . $lockClause);
            $stmt->execute(['id' => $currentId]);
            $row = $stmt->fetch();
            if (!$row) {
                break;
            }
            $activeMaster = $row;
            if (empty($row['merged_into_id'])) {
                break;
            }
            $currentId = (int)$row['merged_into_id'];
        }

        return $activeMaster;
    }

    public static function restoreInventory(PDO $db, array $items, string $strategy = 'absorb_master', ?string $orderUid = null, ?int $orderId = null): array
    {
        $summary = [
            'strategy' => $strategy,
            'restored_items' => [],
            'batches_impacted' => [],
            'isolated_purchases_created' => [],
        ];

        // Sort items deterministically by product_id, purchase_id, and id to prevent InnoDB deadlocks
        usort($items, function ($a, $b) {
            $pDiff = ((int)($a['product_id'] ?? 0)) - ((int)($b['product_id'] ?? 0));
            if ($pDiff !== 0) return $pDiff;
            $purDiff = ((int)($a['purchase_id'] ?? 0)) - ((int)($b['purchase_id'] ?? 0));
            if ($purDiff !== 0) return $purDiff;
            return ((int)($a['id'] ?? 0)) - ((int)($b['id'] ?? 0));
        });

        foreach ($items as $item) {
            $productId = $item['product_id'] ?? null;
            $purchaseId = $item['purchase_id'] ?? null;
            $quantity = (string) ($item['quantity'] ?? '0');

            if (!empty($item['is_returned']) || Decimal::comp($quantity, '0') <= 0) {
                continue;
            }

            if ($productId) {
                $stmt = $db->prepare('SELECT id, quantity FROM products WHERE id = :id FOR UPDATE');
                $stmt->execute(['id' => $productId]);
                $product = $stmt->fetch();
                if ($product) {
                    $db->prepare('UPDATE products SET quantity = :quantity, updated_at = NOW() WHERE id = :id')->execute([
                        'quantity' => Decimal::add($product['quantity'], $quantity),
                        'id' => $productId,
                    ]);
                }
            }

            if ($purchaseId) {
                $stmt = $db->prepare('SELECT id, uid, name, product_id, price, quantity, quantity_remaining, quantity_sold, total, owner_user_id, merged_into_id, status, supplier_id, created_by FROM purchases WHERE id = :id FOR UPDATE');
                $stmt->execute(['id' => $purchaseId]);
                $purchase = $stmt->fetch();
                if ($purchase) {
                    // Detect owner mismatch: stock was sold under one owner but batch
                    // was transferred to a different owner since then.
                    $originalOwnerId = $item['cost_owner_id'] ?? $item['owner_user_id'] ?? null;
                    if ($originalOwnerId && (string)$originalOwnerId !== (string)$purchase['owner_user_id']) {
                        SystemLog::write('orders', 'stock_return_owner_mismatch', (int)$purchaseId,
                            "Purchase #{$purchaseId}",
                            json_encode([
                                'original_sale_owner' => (int)$originalOwnerId,
                                'current_batch_owner' => (int)$purchase['owner_user_id'],
                                'quantity_returned' => $quantity,
                                'note' => 'Stock returned to current batch owner. Financial settlements were already cancelled.',
                            ])
                        );
                    }

                    $newSold = Decimal::sub($purchase['quantity_sold'], $quantity);
                    if (Decimal::comp($newSold, '0') < 0) {
                        $newSold = '0';
                    }

                    $isMerged = (!empty($purchase['merged_into_id']) || ($purchase['status'] ?? '') === 'merged');

                    if ($isMerged && $strategy === 'absorb_master') {
                        // Strategy 1: Absorb into active top-level Master Batch (following recursive lineage)
                        $startTargetId = !empty($purchase['merged_into_id']) ? (int)$purchase['merged_into_id'] : (int)$purchaseId;
                        $master = self::resolveActiveMasterBatch($db, $startTargetId);

                        if ($master) {
                            $newMasterRem = Decimal::add($master['quantity_remaining'], $quantity);
                            $newMasterQty = $master['quantity'];
                            $newMasterTotal = $master['total'];
                            if (Decimal::comp($newMasterRem, $master['quantity']) > 0) {
                                $newMasterQty = $newMasterRem;
                                $newMasterTotal = Decimal::mul($master['price'], $newMasterQty);
                            }

                            $origCost = (string)($item['cost'] ?? $purchase['price'] ?? '0');
                            $masterCost = (string)$master['price'];
                            $unitDiff = Decimal::sub($masterCost, $origCost);
                            $variance = Decimal::mul($unitDiff, $quantity);

                            $masterStatus = ($master['status'] === 'completed' && Decimal::comp($newMasterRem, '0') > 0) ? 'active' : $master['status'];

                            $mUpd = $db->prepare('UPDATE purchases SET quantity_remaining = :rem, quantity = :qty, total = :tot, status = :st, valuation_adjustment = valuation_adjustment + :variance WHERE id = :id');
                            $mUpd->execute([
                                'rem' => $newMasterRem,
                                'qty' => $newMasterQty,
                                'tot' => $newMasterTotal,
                                'st' => $masterStatus,
                                'variance' => $variance,
                                'id' => $master['id'],
                            ]);

                            // Update quantity_sold on original constituent batch so it is not double counted as sold
                            $db->prepare('UPDATE purchases SET quantity_sold = :sold WHERE id = :id')->execute([
                                'sold' => $newSold,
                                'id' => $purchaseId,
                            ]);

                            if (!empty($item['id'])) {
                                $db->prepare('UPDATE order_items SET return_purchase_id = :ret_id WHERE id = :item_id')->execute([
                                    'ret_id' => $master['id'],
                                    'item_id' => $item['id'],
                                ]);
                            }

                            $summary['restored_items'][] = [
                                'item_id' => $item['id'] ?? null,
                                'product_id' => $productId,
                                'original_purchase_id' => (int)$purchaseId,
                                'target_purchase_id' => (int)$master['id'],
                                'target_purchase_uid' => $master['uid'],
                                'quantity' => $quantity,
                                'cost' => $origCost,
                                'master_cost' => $masterCost,
                                'variance' => $variance,
                                'type' => 'absorbed_master',
                            ];
                            $summary['batches_impacted'][] = (int)$master['id'];
                            $summary['batches_impacted'][] = (int)$purchaseId;

                            SystemLog::write('orders', 'return_absorbed_master', (int)($orderId ?? 0),
                                "Order #" . ($orderId ?? 0),
                                json_encode([
                                    'order_uid' => $orderUid,
                                    'purchase_id' => (int)$purchaseId,
                                    'master_id' => (int)$master['id'],
                                    'master_uid' => $master['uid'],
                                    'quantity_returned' => $quantity,
                                    'variance' => $variance,
                                ], JSON_UNESCAPED_UNICODE)
                            );
                        }
                    } elseif ($strategy === 'isolated_lot') {
                        // Strategy 3: Create an isolated purchase lot from the return
                        $uid = "PUR-RET-" . strtoupper(bin2hex(random_bytes(4)));
                        $walkbySupplierId = self::getOrCreateWalkbySupplierId($db);
                        $price = (string)($item['cost'] ?? $purchase['price'] ?? '0');
                        $total = Decimal::mul($price, $quantity);

                        $itemIdStr = !empty($item['id']) ? " (Item #{$item['id']})" : "";
                        $originPurchaseUid = $purchase['uid'] ?? "PUR-{$purchaseId}";

                        $masterBatchUid = null;
                        $masterBatchId = null;
                        if (!empty($purchase['merged_into_id'])) {
                            $master = self::resolveActiveMasterBatch($db, (int)$purchase['merged_into_id'], false);
                            if ($master) {
                                $masterBatchUid = $master['uid'] ?? "PUR-{$master['id']}";
                                $masterBatchId = (int)$master['id'];
                            }
                        } elseif (!empty($purchase['is_merged_master'])) {
                            $masterBatchUid = $purchase['uid'] ?? "PUR-{$purchase['id']}";
                            $masterBatchId = (int)$purchase['id'];
                        }

                        // Resolve target supplier attribution dynamically
                        $targetSupplierId = null;
                        $targetSupplierName = null;
                        $targetSupplierIsWalkby = false;
                        $supplierChoiceMode = $item['supplier_choice'] ?? $item['supplier_mode'] ?? null;
                        $requestedSupplierId = !empty($item['isolated_supplier_id']) 
                            ? (int)$item['isolated_supplier_id'] 
                            : (!empty($item['return_supplier_id']) ? (int)$item['return_supplier_id'] : (!empty($item['supplier_id']) ? (int)$item['supplier_id'] : null));

                        if ($requestedSupplierId) {
                            $supCheck = $db->prepare('SELECT id, name, is_walkby FROM suppliers WHERE id = :id AND deleted_at IS NULL');
                            $supCheck->execute(['id' => $requestedSupplierId]);
                            $supRow = $supCheck->fetch(PDO::FETCH_ASSOC);
                            if ($supRow) {
                                $targetSupplierId = (int)$supRow['id'];
                                $targetSupplierName = $supRow['name'];
                                $targetSupplierIsWalkby = !empty($supRow['is_walkby']) || ($targetSupplierId === $walkbySupplierId) || ($targetSupplierId === 1);
                            }
                        }

                        if (!$targetSupplierId) {
                            $isMergedLot = (!empty($purchase['merged_into_id']) || !empty($purchase['is_merged_master']) || ($purchase['status'] ?? '') === 'merged');
                            $origSupId = !empty($purchase['supplier_id']) ? (int)$purchase['supplier_id'] : null;

                            if (!$isMergedLot && $origSupId && $origSupId !== $walkbySupplierId && $origSupId !== 1) {
                                $supCheck = $db->prepare('SELECT id, name, is_walkby FROM suppliers WHERE id = :id AND deleted_at IS NULL');
                                $supCheck->execute(['id' => $origSupId]);
                                $supRow = $supCheck->fetch(PDO::FETCH_ASSOC);
                                if ($supRow && empty($supRow['is_walkby'])) {
                                    $targetSupplierId = (int)$supRow['id'];
                                    $targetSupplierName = $supRow['name'];
                                    $targetSupplierIsWalkby = false;
                                    $supplierChoiceMode = 'original';
                                }
                            }

                            if (!$targetSupplierId) {
                                $targetSupplierId = $walkbySupplierId;
                                $targetSupplierName = 'Walk-by (one-off seller)';
                                $targetSupplierIsWalkby = true;
                                $supplierChoiceMode = 'walkby';
                            }
                        } else {
                            if (!$supplierChoiceMode) {
                                $supplierChoiceMode = $targetSupplierIsWalkby ? 'walkby' : 'user_selected';
                            }
                        }

                        if ($masterBatchUid && !empty($purchase['merged_into_id'])) {
                            if ($targetSupplierIsWalkby) {
                                $supplierNote = "Order Return Restoral (Isolated Lot) · Order #{$orderUid}{$itemIdStr} · Origin: Lot #{$originPurchaseUid} (merged into Master #{$masterBatchUid}). Multi-supplier origin attributed to Walk-by seller.";
                            } else {
                                $supplierNote = "Order Return Restoral (Isolated Lot) · Order #{$orderUid}{$itemIdStr} · Origin: Lot #{$originPurchaseUid} (merged into Master #{$masterBatchUid}). User attributed to supplier: {$targetSupplierName}.";
                            }
                        } elseif ($masterBatchUid) {
                            if ($targetSupplierIsWalkby) {
                                $supplierNote = "Order Return Restoral (Isolated Lot) · Order #{$orderUid}{$itemIdStr} · Sold from Master Batch #{$masterBatchUid}. Multi-supplier origin attributed to Walk-by seller.";
                            } else {
                                $supplierNote = "Order Return Restoral (Isolated Lot) · Order #{$orderUid}{$itemIdStr} · Sold from Master Batch #{$masterBatchUid}. User attributed to supplier: {$targetSupplierName}.";
                            }
                        } else {
                            if ($targetSupplierIsWalkby) {
                                $supplierNote = "Order Return Restoral (Isolated Lot) · Order #{$orderUid}{$itemIdStr} · Restored from Lot #{$originPurchaseUid} as isolated lot under Walk-by seller.";
                            } else {
                                $supplierNote = "Order Return Restoral (Isolated Lot) · Order #{$orderUid}{$itemIdStr} · Restored from Lot #{$originPurchaseUid} as isolated lot under original supplier: {$targetSupplierName}.";
                            }
                        }

                        $ins = $db->prepare('INSERT INTO purchases (uid, product_id, name, price, quantity, quantity_remaining, quantity_sold, quantity_reserved, quantity_writeoff, quantity_merged, total, date, created_by, owner_user_id, supplier_id, payment_status, amount_paid, settle_kind, paid_from, status, supplier_note, created_from_order_id, created_from_purchase_id) VALUES (:uid, :product_id, :name, :price, :qty, :qty, 0, 0, 0, 0, :total, NOW(), :created_by, :owner, :supplier_id, "paid", :total, "cash", "vault", "active", :supplier_note, :order_id, :src_purchase)');
                        $ins->execute([
                            'uid' => $uid,
                            'product_id' => $productId,
                            'name' => $purchase['name'],
                            'price' => $price,
                            'qty' => $quantity,
                            'total' => $total,
                            'created_by' => $_SESSION['user_id'] ?? 1,
                            'owner' => $purchase['owner_user_id'],
                            'supplier_id' => $targetSupplierId,
                            'supplier_note' => $supplierNote,
                            'order_id' => $orderId,
                            'src_purchase' => $purchaseId
                        ]);
                        $newPurchaseId = (int)$db->lastInsertId();

                        // Update quantity_sold on the original batch
                        $db->prepare('UPDATE purchases SET quantity_sold = :sold WHERE id = :id')->execute([
                            'sold' => $newSold,
                            'id' => $purchaseId,
                        ]);

                        if (!empty($item['id'])) {
                            $db->prepare('UPDATE order_items SET return_purchase_id = :ret_id, return_supplier_id = :sid WHERE id = :item_id')->execute([
                                'ret_id' => $newPurchaseId,
                                'sid' => $targetSupplierId,
                                'item_id' => $item['id'],
                            ]);
                        }

                        $summary['restored_items'][] = [
                            'item_id' => $item['id'] ?? null,
                            'product_id' => $productId,
                            'original_purchase_id' => (int)$purchaseId,
                            'target_purchase_id' => $newPurchaseId,
                            'target_purchase_uid' => $uid,
                            'quantity' => $quantity,
                            'cost' => $price,
                            'type' => 'isolated_lot',
                        ];
                        $summary['isolated_purchases_created'][] = [
                            'id' => $newPurchaseId,
                            'uid' => $uid,
                        ];
                        $summary['batches_impacted'][] = (int)$purchaseId;

                        SystemLog::write('orders', 'return_isolated_lot', (int)($orderId ?? 0),
                            "Order #" . ($orderId ?? 0),
                            json_encode([
                                'order_uid'           => $orderUid,
                                'item_id'             => $item['id'] ?? null,
                                'new_purchase_id'     => $newPurchaseId,
                                'new_purchase_uid'    => $uid,
                                'origin_purchase_id'  => (int)$purchaseId,
                                'origin_purchase_uid' => $originPurchaseUid,
                                'master_batch_id'     => $masterBatchId,
                                'master_batch_uid'    => $masterBatchUid,
                                'supplier_id'         => $walkbySupplierId,
                                'supplier_type'       => 'walk_by',
                                'strategy'            => 'isolated_lot',
                                'quantity_returned'   => $quantity,
                                'unit_cost'           => $price,
                                'user_decision'       => 'User chose to bring back as a new standalone lot rather than absorbing into master batch',
                            ], JSON_UNESCAPED_UNICODE)
                        );
                    } else {
                        // Strategy 2: Restore directly into the Original Purchase Batch (preserving ID, with original price/lot)
                        $newRemaining = Decimal::add($purchase['quantity_remaining'], $quantity);
                        $newSold = Decimal::comp($purchase['quantity_sold'], $quantity) >= 0 ? Decimal::sub($purchase['quantity_sold'], $quantity) : '0';
                        $newStatus = Decimal::comp($newRemaining, '0') > 0 ? 'active' : ($purchase['status'] ?? 'active');

                        $db->prepare('UPDATE purchases SET quantity_remaining = :remaining, quantity_sold = :sold, status = :status WHERE id = :id')->execute([
                            'remaining' => $newRemaining,
                            'sold' => $newSold,
                            'status' => $newStatus,
                            'id' => $purchaseId,
                        ]);

                        if (!empty($item['id'])) {
                            $db->prepare('UPDATE order_items SET return_purchase_id = :ret_id WHERE id = :item_id')->execute([
                                'ret_id' => $purchaseId,
                                'item_id' => $item['id'],
                            ]);
                        }

                        $summary['restored_items'][] = [
                            'item_id' => $item['id'] ?? null,
                            'product_id' => $productId,
                            'original_purchase_id' => (int)$purchaseId,
                            'target_purchase_id' => (int)$purchaseId,
                            'quantity' => $quantity,
                            'is_merged_batch' => $isMerged,
                            'type' => $isMerged ? 'merged_lot_restored' : 'in_place_standard',
                        ];
                        $summary['batches_impacted'][] = (int)$purchaseId;

                        SystemLog::write('orders', $isMerged ? 'return_restored_merged_lot' : 'return_restored_lot', (int)($orderId ?? 0),
                            "Order #" . ($orderId ?? 0),
                            json_encode([
                                'order_uid' => $orderUid,
                                'purchase_id' => (int)$purchaseId,
                                'purchase_uid' => $purchase['uid'] ?? null,
                                'quantity_returned' => $quantity,
                                'new_remaining' => $newRemaining,
                                'new_sold' => $newSold,
                                'new_status' => $newStatus,
                                'merged_into_id' => $purchase['merged_into_id'] ?? null,
                                'quantity_merged' => (string)($purchase['quantity_merged'] ?? '0'),
                            ], JSON_UNESCAPED_UNICODE)
                        );
                    }
                }
            }
        }

        return $summary;
    }

    public function index(): void
    {
        $db = Database::getConnection();
        // Removed self::healMissingOrderSettlements from request hot path (Finding V-002)

        $isAll = (isset($_GET['all']) && ($_GET['all'] === '1' || $_GET['all'] === 'true'));
        $page = max(1, (int)($_GET['page'] ?? 1));
        $limit = $isAll ? 1000000 : (isset($_GET['limit']) ? min(500, max(1, (int)$_GET['limit'])) : 50);
        $offset = ($page - 1) * $limit;

        $totalOrders = (int)$db->query("SELECT COUNT(*) FROM orders WHERE deleted_at IS NULL")->fetchColumn();
        $totalPages = $limit > 0 ? (int)ceil($totalOrders / $limit) : 1;

        if ($isAll) {
            $orders = $db->query('SELECT * FROM orders WHERE deleted_at IS NULL ORDER BY date DESC, id DESC')->fetchAll();
        } else {
            $stmt = $db->prepare('SELECT * FROM orders WHERE deleted_at IS NULL ORDER BY date DESC, id DESC LIMIT :limit OFFSET :offset');
            $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            $orders = $stmt->fetchAll();
        }

        if (!$orders) {
            Response::json([
                'orders' => [],
                'total' => $totalOrders,
                'page' => $page,
                'limit' => $limit,
                'total_pages' => $totalPages
            ]);
            return;
        }

        $orderIds = array_map(static fn($order) => $order['id'], $orders);
        $placeholders = implode(',', array_fill(0, count($orderIds), '?'));
        $stmt = $db->prepare("SELECT * FROM order_items WHERE order_id IN ($placeholders)");
        $stmt->execute($orderIds);
        $items = $stmt->fetchAll();

        $itemsByOrder = [];
        foreach ($items as $item) {
            $itemsByOrder[$item['order_id']][] = $item;
        }

        // Batch-fetch partner settlement acceptance status for consignment/partner items
        $settlementsByOrder = [];
        try {
            $psStmt = $db->prepare("
                SELECT ps.id, ps.id AS settlement_id, ps.related_entity_id, ps.related_entity_id AS order_id, ps.related_entity_type,
                       ps.payer_user_id, ps.payee_user_id, ps.status, ps.acceptance_status, ps.amount, ps.released_amount, ps.settled_amount,
                       ps.release_status, ps.payment_demand_status, ps.payment_demand_at, ps.removal_request_status,
                       ps.settlement_type, ps.description, ps.details, ps.created_at, ps.updated_at,
                       u.username AS payee_username, u.username AS payee_name,
                       upayer.username AS payer_username, upayer.username AS payer_name
                FROM partner_settlements ps
                LEFT JOIN users u ON ps.payee_user_id = u.id
                LEFT JOIN users upayer ON ps.payer_user_id = upayer.id
                WHERE (ps.related_entity_type = 'orders' OR ps.related_entity_type = 'order') 
                  AND ps.related_entity_id IN ($placeholders)
                  AND ps.status != 'cancelled'
                  AND ps.settlement_type != 'order_return_clawback'
            ");
            $psStmt->execute($orderIds);
            foreach ($psStmt->fetchAll(PDO::FETCH_ASSOC) as $sRow) {
                $settlementsByOrder[$sRow['order_id']][] = $sRow;
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // Batch-fetch installment counts for orders from system_logs (accurately capturing initial downpayment + subsequent payments)
        $installmentCounts = [];
        try {
            $instStmt = $db->prepare("
                SELECT entity_id,
                       SUM(CASE 
                           WHEN action = 'customer_payment' THEN 1
                           WHEN action = 'created' 
                                AND (details LIKE '%\"amount_paid\":%' OR details LIKE '%\"deposit_paid\":%')
                                AND CAST(JSON_UNQUOTE(JSON_EXTRACT(details, '$.amount_paid')) AS DECIMAL(32,16)) > 0
                                AND (CAST(JSON_UNQUOTE(JSON_EXTRACT(details, '$.owed')) AS DECIMAL(32,16)) > 0 OR JSON_UNQUOTE(JSON_EXTRACT(details, '$.payment_status')) = 'partial' OR JSON_UNQUOTE(JSON_EXTRACT(details, '$.status')) = 'pending_money')
                           THEN 1
                           ELSE 0
                       END) AS count
                FROM system_logs 
                WHERE module = 'orders' AND action IN ('customer_payment', 'created') AND entity_id IN ($placeholders)
                GROUP BY entity_id
            ");
            $instStmt->execute($orderIds);
            foreach ($instStmt->fetchAll(PDO::FETCH_ASSOC) as $iRow) {
                $installmentCounts[$iRow['entity_id']] = (int)$iRow['count'];
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // Batch-fetch return clawback status for orders
        $clawbacksByOrder = [];
        try {
            $clawStmt = $db->prepare("
                SELECT ps.id AS clawback_id, ps.id, ps.related_entity_id AS order_id, ps.status, ps.acceptance_status,
                       ps.payer_user_id, ps.payee_user_id, ps.amount, ps.refusal_reason, ps.created_at, ps.updated_at,
                       u.username AS stock_owner_name
                FROM partner_settlements ps
                LEFT JOIN users u ON ps.payer_user_id = u.id
                WHERE ps.related_entity_type = 'orders'
                  AND ps.related_entity_id IN ($placeholders)
                  AND ps.settlement_type = 'order_return_clawback'
                ORDER BY ps.id DESC
            ");
            $clawStmt->execute($orderIds);
            foreach ($clawStmt->fetchAll(PDO::FETCH_ASSOC) as $cRow) {
                $cRow['id'] = (int)$cRow['clawback_id'];
                $cRow['clawback_id'] = (int)$cRow['clawback_id'];
                $clawbacksByOrder[$cRow['order_id']][] = $cRow;
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        $currentSessionUserId = (int)($_SESSION['user_id'] ?? 0);

        foreach ($orders as &$order) {
            $order['order_items'] = $itemsByOrder[$order['id']] ?? [];
            $order['installment_count'] = $installmentCounts[$order['id']] ?? 0;

            // Return clawbacks & refusal lineage
            $claws = $clawbacksByOrder[$order['id']] ?? [];
            $order['return_clawbacks'] = $claws;
            $order['active_return_clawback'] = null;
            $order['last_return_refusal'] = null;

            // Prioritize matching current user's clawback if they are a stock owner
            if ($currentSessionUserId > 0) {
                foreach ($claws as $c) {
                    if ((int)$c['payer_user_id'] === $currentSessionUserId && $c['status'] === 'pending') {
                        $order['active_return_clawback'] = $c;
                        break;
                    }
                }
            }

            foreach ($claws as $c) {
                if ($c['status'] === 'pending' && !$order['active_return_clawback']) {
                    $order['active_return_clawback'] = $c;
                }
                if (($c['status'] === 'refused' || $c['acceptance_status'] === 'refused') && !$order['last_return_refusal']) {
                    $order['last_return_refusal'] = [
                        'clawback_id' => (int)$c['clawback_id'],
                        'id' => (int)$c['clawback_id'],
                        'reason' => $c['refusal_reason'] ?: 'Stock owner declined return request',
                        'refused_by_name' => $c['stock_owner_name'] ?: 'Stock Owner',
                        'refused_by_id' => (int)$c['payer_user_id'],
                        'refused_at' => $c['updated_at'] ?: $c['created_at']
                    ];
                }
            }

            // Construct full return consensus tree dynamically
            $sellerId = (int)($order['owner_user_id'] ?? $order['created_by'] ?? 1);
            $sellerName = $order['owner_username'] ?? $order['created_by_name'] ?? 'Cashier';
            $returnedBy = (int)($order['returned_by'] ?? 0);
            $initiatorId = ($returnedBy > 0) ? $returnedBy : $sellerId;

            $stakeholdersList = [];
            $acceptedCount = 0;
            $pendingCount = 0;
            $refusedCount = 0;

            if ($initiatorId === $sellerId) {
                // 1. Seller / Initiator (Auto-Agreed)
                $stakeholdersList[] = [
                    'user_id' => $sellerId,
                    'username' => $sellerName,
                    'role' => 'Seller (Initiator)',
                    'is_initiator' => true,
                    'status' => 'accepted',
                    'amount' => '0',
                    'clawback_id' => null,
                    'refusal_reason' => null
                ];

                // 2. Partner Stock Owners from $claws
                foreach ($claws as $c) {
                    $cSt = $c['status'];
                    if ($cSt === 'settled' || $c['acceptance_status'] === 'accepted') {
                        $normStatus = 'accepted';
                        $acceptedCount++;
                    } elseif ($cSt === 'refused' || $c['acceptance_status'] === 'refused') {
                        $normStatus = 'refused';
                        $refusedCount++;
                    } elseif ($cSt === 'pending') {
                        $normStatus = 'pending';
                        $pendingCount++;
                    } else {
                        $normStatus = $cSt;
                    }

                    $stakeholdersList[] = [
                        'id' => (int)$c['clawback_id'],
                        'clawback_id' => (int)$c['clawback_id'],
                        'user_id' => (int)$c['payer_user_id'],
                        'username' => $c['stock_owner_name'] ?: 'Stock Owner',
                        'role' => 'Stock Owner',
                        'is_initiator' => false,
                        'status' => $normStatus,
                        'amount' => (string)$c['amount'],
                        'refusal_reason' => $c['refusal_reason'] ?? null,
                        'created_at' => $c['created_at'],
                        'updated_at' => $c['updated_at']
                    ];
                }
            } else {
                // Initiator is a Stock Owner!
                // 1. Stock Owner Initiator (Auto-Agreed)
                $initiatorClaw = null;
                $otherClaws = [];
                foreach ($claws as $c) {
                    if ((int)$c['payer_user_id'] === $initiatorId) {
                        $initiatorClaw = $c;
                    } else {
                        $otherClaws[] = $c;
                    }
                }

                $initiatorName = $initiatorClaw['stock_owner_name'] ?? 'Stock Owner';
                if ($initiatorName === 'Stock Owner') {
                    $uStmt = $db->prepare('SELECT username FROM users WHERE id = :uid');
                    $uStmt->execute(['uid' => $initiatorId]);
                    $initiatorName = $uStmt->fetchColumn() ?: 'Stock Owner';
                }

                $stakeholdersList[] = [
                    'id' => $initiatorClaw ? (int)$initiatorClaw['clawback_id'] : null,
                    'clawback_id' => $initiatorClaw ? (int)$initiatorClaw['clawback_id'] : null,
                    'user_id' => $initiatorId,
                    'username' => $initiatorName,
                    'role' => 'Stock Owner (Initiator)',
                    'is_initiator' => true,
                    'status' => 'accepted',
                    'amount' => $initiatorClaw ? (string)$initiatorClaw['amount'] : '0',
                    'refusal_reason' => null,
                    'created_at' => $initiatorClaw['created_at'] ?? null,
                    'updated_at' => $initiatorClaw['updated_at'] ?? null
                ];

                if ($initiatorClaw) {
                    $acceptedCount++;
                }

                // 2. Other Claws (including Seller confirmation ticket and sibling stock owners)
                foreach ($otherClaws as $c) {
                    $cSt = $c['status'];
                    if ($cSt === 'settled' || $c['acceptance_status'] === 'accepted') {
                        $normStatus = 'accepted';
                        $acceptedCount++;
                    } elseif ($cSt === 'refused' || $c['acceptance_status'] === 'refused') {
                        $normStatus = 'refused';
                        $refusedCount++;
                    } elseif ($cSt === 'pending') {
                        $normStatus = 'pending';
                        $pendingCount++;
                    } else {
                        $normStatus = $cSt;
                    }

                    $isSellerStake = ((int)$c['payer_user_id'] === $sellerId);
                    $stakeholdersList[] = [
                        'id' => (int)$c['clawback_id'],
                        'clawback_id' => (int)$c['clawback_id'],
                        'user_id' => (int)$c['payer_user_id'],
                        'username' => $isSellerStake ? $sellerName : ($c['stock_owner_name'] ?: 'Stock Owner'),
                        'role' => $isSellerStake ? 'Seller' : 'Stock Owner',
                        'is_initiator' => false,
                        'status' => $normStatus,
                        'amount' => (string)$c['amount'],
                        'refusal_reason' => $c['refusal_reason'] ?? null,
                        'created_at' => $c['created_at'],
                        'updated_at' => $c['updated_at']
                    ];
                }
            }

            $totalPartners = count($claws);
            if ($totalPartners > 0 || $order['status'] === 'return_pending' || $order['status'] === 'returned' || !empty($order['last_return_refusal'])) {
                $consensusStatus = ($refusedCount > 0) ? 'has_refusal' : (($pendingCount > 0) ? 'waiting_for_related_users' : 'all_accepted');
                $order['return_consensus'] = [
                    'status' => $consensusStatus,
                    'total_stock_owners' => $totalPartners,
                    'accepted_count' => $acceptedCount,
                    'pending_count' => $pendingCount,
                    'refused_count' => $refusedCount,
                    'stakeholders' => $stakeholdersList
                ];
            } else {
                $order['return_consensus'] = null;
            }

            // Consignment & Partner Settlement Acceptance and Escrow Status
            $orderSettlements = $settlementsByOrder[$order['id']] ?? [];
            $order['settlements'] = $orderSettlements;

            $hasPendingAcceptance = false;
            $hasRefused = false;
            $hasAccepted = false;
            $pendingPartnerNames = [];

            $consignmentTotal = '0';
            $consignmentReleased = '0';
            $consignmentSettled = '0';

            // Precomputed participant consensus tree
            $uniqueParticipants = [];
            $ownerStmtPayees = [];
            foreach ($orderSettlements as $st) {
                if (($st['settlement_type'] ?? '') === 'service_owner_statement' && !empty($st['payee_user_id'])) {
                    $ownerStmtPayees[(string)$st['payee_user_id']] = true;
                }
            }
            foreach ($orderSettlements as $st) {
                $pUid = (string)($st['payee_user_id'] ?? '');
                if ($pUid !== '') {
                    $sType = (string)($st['settlement_type'] ?? '');
                    $isOwnerStmt = ($sType === 'service_owner_statement');
                    $isSelfOutlayWithOwnerStmt = (!$isOwnerStmt && !empty($ownerStmtPayees[$pUid]) && (string)($st['payer_user_id'] ?? '') === $pUid);
                    $isCost = in_array($sType, ['parts_cost_recovery', 'sale_cost_recovery', 'manual_cost_recovery', 'manual_outlay_recovery', 'cost_recovery'], true);
                    $isProfit = in_array($sType, ['parts_profit_share', 'service_profit_share', 'manual_cost_markup', 'profit_share'], true);
                    $stAmt = (string)($st['amount'] ?? '0');
                    $stId = (int)($st['settlement_id'] ?? $st['id'] ?? 0);

                    $stCost = $isCost ? $stAmt : '0';
                    $stProfit = $isProfit ? $stAmt : (!$isCost ? $stAmt : '0');
                    if ($isOwnerStmt && !empty($st['details'])) {
                        $detArr = is_string($st['details']) ? json_decode($st['details'], true) : (is_array($st['details']) ? $st['details'] : []);
                        if (is_array($detArr)) {
                            $stCost = (string)($detArr['owner_total_cost'] ?? '0');
                            $stProfit = (string)($detArr['owner_net_profit'] ?? $stAmt);
                        }
                    }

                    if (!isset($uniqueParticipants[$pUid])) {
                        $uniqueParticipants[$pUid] = [
                            'user_id' => (int)$pUid,
                            'username' => $st['payee_username'] ?: ("User #" . $pUid),
                            'acceptance_status' => $st['acceptance_status'] ?? 'pending',
                            'status' => $st['status'] ?? 'pending',
                            'settlement_type' => $isOwnerStmt ? 'service_owner_statement' : ($sType ?: 'consignment'),
                            'settlement_id' => $stId,
                            'amount' => $isSelfOutlayWithOwnerStmt ? '0' : $stAmt,
                            'cost' => $isSelfOutlayWithOwnerStmt ? '0' : $stCost,
                            'profit' => $isSelfOutlayWithOwnerStmt ? '0' : $stProfit,
                            'description' => $st['description'] ?? ''
                        ];
                    } else {
                        if ($isOwnerStmt) {
                            $uniqueParticipants[$pUid]['settlement_type'] = 'service_owner_statement';
                            $uniqueParticipants[$pUid]['amount'] = $stAmt;
                            $uniqueParticipants[$pUid]['cost'] = $stCost;
                            $uniqueParticipants[$pUid]['profit'] = $stProfit;
                        } elseif (!$isSelfOutlayWithOwnerStmt) {
                            $uniqueParticipants[$pUid]['amount'] = Decimal::add($uniqueParticipants[$pUid]['amount'], $stAmt);
                            if ($isCost) {
                                $uniqueParticipants[$pUid]['cost'] = Decimal::add($uniqueParticipants[$pUid]['cost'], $stAmt);
                            } elseif ($isProfit) {
                                $uniqueParticipants[$pUid]['profit'] = Decimal::add($uniqueParticipants[$pUid]['profit'], $stAmt);
                            } else {
                                $uniqueParticipants[$pUid]['profit'] = Decimal::add($uniqueParticipants[$pUid]['profit'], $stAmt);
                            }
                        }
                        if (($st['acceptance_status'] ?? '') === 'pending' && $stId > 0) {
                            $uniqueParticipants[$pUid]['settlement_id'] = $stId;
                        }
                        if (($st['acceptance_status'] ?? '') === 'refused') {
                            $uniqueParticipants[$pUid]['acceptance_status'] = 'refused';
                        } elseif (($st['acceptance_status'] ?? '') === 'pending' && $uniqueParticipants[$pUid]['acceptance_status'] !== 'refused') {
                            $uniqueParticipants[$pUid]['acceptance_status'] = 'pending';
                        } elseif (($st['acceptance_status'] ?? '') === 'accepted' && !in_array($uniqueParticipants[$pUid]['acceptance_status'], ['refused', 'pending'], true)) {
                            $uniqueParticipants[$pUid]['acceptance_status'] = 'accepted';
                        }
                    }
                }
            }

            foreach ($uniqueParticipants as &$p) {
                if ($p['settlement_type'] === 'service_owner_statement') {
                    $p['role'] = 'Service Owner';
                } elseif (Decimal::comp($p['cost'], '0') > 0 && Decimal::comp($p['profit'], '0') > 0) {
                    $p['role'] = 'Stock Partner';
                } elseif (Decimal::comp($p['cost'], '0') > 0) {
                    $p['role'] = 'Stock Owner';
                } elseif (strpos($p['settlement_type'], 'service') !== false) {
                    $p['role'] = 'Service Team';
                } elseif (strpos($p['settlement_type'], 'manual') !== false) {
                    $p['role'] = 'Expense Partner';
                } else {
                    $p['role'] = ucwords(str_replace('_', ' ', $p['settlement_type']));
                }
            }
            unset($p); // Required: Sever reference to prevent PHP dangling pointer corruption
            $participantsList = array_values($uniqueParticipants);
            if (empty($participantsList)) {
                $orderOwnerIdInt = (int)($order['owner_user_id'] ?? $order['created_by'] ?? 1);
                if (!empty($order['custom_sale'])) {
                    $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                    $uStmt->execute(['id' => (int)$orderOwnerIdInt]);
                    $ownerUname = $uStmt->fetchColumn() ?: "User #$orderOwnerIdInt";
                    $uniqueParticipants[(string)$orderOwnerIdInt] = [
                        'user_id' => $orderOwnerIdInt,
                        'username' => $ownerUname,
                        'acceptance_status' => 'accepted',
                        'status' => 'pending',
                        'settlement_type' => 'service_owner_statement',
                        'settlement_id' => 0,
                        'amount' => (string)($order['profit'] ?? '0'),
                        'cost' => '0',
                        'profit' => (string)($order['profit'] ?? '0'),
                        'description' => 'Service Owner',
                        'role' => 'Service Owner'
                    ];
                }
                $itemsForOrder = $itemsByOrder[$order['id']] ?? [];
                foreach ($itemsForOrder as $oit) {
                    $cOid = (int)($oit['cost_owner_id'] ?? 0);
                    if ($cOid > 0 && $cOid !== $orderOwnerIdInt) {
                        $pUidStr = (string)$cOid;
                        $qty = (string)($oit['quantity'] ?? '1');
                        $cost = Decimal::mul((string)($oit['cost'] ?? '0'), $qty);
                        $price = (string)($oit['total_price'] ?? Decimal::mul((string)($oit['price'] ?? '0'), $qty));
                        $grossProfit = Decimal::sub($price, $cost);
                        $ownerProfit = isset($oit['product_owner_profit']) && trim((string)$oit['product_owner_profit']) !== ''
                            ? (string)$oit['product_owner_profit']
                            : Decimal::div($grossProfit, '2', 2);
                        $tot = Decimal::add($cost, $ownerProfit);

                        if (!isset($uniqueParticipants[$pUidStr])) {
                            $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                            $uStmt->execute(['id' => (int)$cOid]);
                            $pUname = $uStmt->fetchColumn() ?: "User #$cOid";
                            $uniqueParticipants[$pUidStr] = [
                                'user_id' => $cOid,
                                'username' => $pUname,
                                'acceptance_status' => in_array($order['agreement_status'] ?? '', ['all_accepted'], true) ? 'accepted' : 'pending',
                                'status' => 'pending',
                                'settlement_type' => 'parts_cost_recovery',
                                'settlement_id' => 0,
                                'amount' => $tot,
                                'cost' => $cost,
                                'profit' => $ownerProfit,
                                'description' => 'Consignment Stock',
                                'role' => 'Stock Partner'
                            ];
                        } else {
                            $uniqueParticipants[$pUidStr]['amount'] = Decimal::add($uniqueParticipants[$pUidStr]['amount'], $tot);
                            $uniqueParticipants[$pUidStr]['cost'] = Decimal::add($uniqueParticipants[$pUidStr]['cost'], $cost);
                            $uniqueParticipants[$pUidStr]['profit'] = Decimal::add($uniqueParticipants[$pUidStr]['profit'], $ownerProfit);
                        }
                    }
                }
                $participantsList = array_values($uniqueParticipants);
            }

            // Defensive Deduplication: Ensure each distinct user_id appears exactly once in participantsList
            $dedupedParticipants = [];
            foreach ($participantsList as $part) {
                $uKey = (string)($part['user_id'] ?? '');
                if ($uKey === '') {
                    $dedupedParticipants[] = $part;
                    continue;
                }
                if (!isset($dedupedParticipants[$uKey])) {
                    $dedupedParticipants[$uKey] = $part;
                } else {
                    // Aggregate amounts if duplicate entry exists
                    $dedupedParticipants[$uKey]['amount'] = Decimal::add((string)($dedupedParticipants[$uKey]['amount'] ?? '0'), (string)($part['amount'] ?? '0'));
                    $dedupedParticipants[$uKey]['cost'] = Decimal::add((string)($dedupedParticipants[$uKey]['cost'] ?? '0'), (string)($part['cost'] ?? '0'));
                    $dedupedParticipants[$uKey]['profit'] = Decimal::add((string)($dedupedParticipants[$uKey]['profit'] ?? '0'), (string)($part['profit'] ?? '0'));
                    if (empty($dedupedParticipants[$uKey]['settlement_id']) && !empty($part['settlement_id'])) {
                        $dedupedParticipants[$uKey]['settlement_id'] = $part['settlement_id'];
                    }
                    if (($part['acceptance_status'] ?? '') === 'refused') {
                        $dedupedParticipants[$uKey]['acceptance_status'] = 'refused';
                    } elseif (($part['acceptance_status'] ?? '') === 'pending' && $dedupedParticipants[$uKey]['acceptance_status'] !== 'refused') {
                        $dedupedParticipants[$uKey]['acceptance_status'] = 'pending';
                    }
                }
            }
            $participantsList = array_values($dedupedParticipants);

            $acceptedCount = 0;
            $pendingCount = 0;
            $refusedCount = 0;
            foreach ($participantsList as $part) {
                if ($part['acceptance_status'] === 'accepted') $acceptedCount++;
                elseif ($part['acceptance_status'] === 'refused') $refusedCount++;
                else $pendingCount++;
            }

            $order['consensus_tree'] = [
                'total'           => count($participantsList),
                'accepted'        => $acceptedCount,
                'refused'         => $refusedCount,
                'pending'         => $pendingCount,
                'has_refusal'     => ($refusedCount > 0),
                'is_all_accepted' => (count($participantsList) > 0 && $pendingCount === 0 && $refusedCount === 0),
                'participants'    => $participantsList
            ];

            $orderOwnerIdInt = (int)($order['owner_user_id'] ?? $order['created_by'] ?? 0);
            $externalSettlementCount = 0;
            foreach ($orderSettlements as $st) {
                $stAcceptance = $st['acceptance_status'] ?? 'pending';
                $stStatus = $st['status'] ?? 'pending';
                $sType = (string)($st['settlement_type'] ?? '');
                $stPayeeId = (int)($st['payee_user_id'] ?? 0);
                $isOwnerSelfSettlement = ($sType === 'service_owner_statement' || ($sType === 'manual_cost_recovery' && $stPayeeId === $orderOwnerIdInt));

                if ($stAcceptance === 'refused' || $stStatus === 'refused') {
                    $hasRefused = true;
                } elseif ($stAcceptance === 'pending') {
                    $hasPendingAcceptance = true;
                    if (!empty($st['payee_username'])) {
                        $pendingPartnerNames[$st['payee_username']] = '@' . $st['payee_username'];
                    }
                } elseif ($stAcceptance === 'accepted') {
                    $hasAccepted = true;
                }

                if (!$isOwnerSelfSettlement) {
                    $externalSettlementCount++;
                    $sAmt = (string)($st['amount'] ?? '0');
                    $rAmt = (string)($st['released_amount'] ?? '0');
                    if (($st['release_status'] ?? '') === 'released' && Decimal::comp($rAmt, '0') <= 0) {
                        $rAmt = $sAmt;
                    }
                    $stldAmt = (string)($st['settled_amount'] ?? ($stStatus === 'settled' ? $sAmt : '0'));

                    $consignmentTotal = Decimal::add($consignmentTotal, $sAmt);
                    $consignmentReleased = Decimal::add($consignmentReleased, $rAmt);
                    $consignmentSettled = Decimal::add($consignmentSettled, $stldAmt);
                }
            }

            $order['has_pending_settlement_acceptance'] = $hasPendingAcceptance;
            $order['settlement_acceptance_status'] = $hasRefused ? 'refused' : ($hasPendingAcceptance ? 'pending' : ($hasAccepted ? 'accepted' : 'none'));
            $order['pending_partner_names'] = implode(', ', array_values($pendingPartnerNames));

            // Guarantee API contract normalization: an order with pending/refused partner review cannot be reported as completed
            if (($hasPendingAcceptance || $hasRefused || in_array($order['agreement_status'] ?? '', ['pending', 'partial', 'refused', 'has_refusal'], true)) && ($order['status'] ?? '') === 'completed') {
                $order['status'] = 'pending';
            }

            $allPartnerUsernames = [];
            foreach ($orderSettlements as $st) {
                $sType = (string)($st['settlement_type'] ?? '');
                $stPayeeId = (int)($st['payee_user_id'] ?? 0);
                if ($sType === 'service_owner_statement' || ($sType === 'manual_cost_recovery' && $stPayeeId === $orderOwnerIdInt)) {
                    continue;
                }
                if (!empty($st['payee_username'])) {
                    $allPartnerUsernames[$st['payee_username']] = '@' . $st['payee_username'];
                }
            }
            $order['has_partner_stock'] = ($externalSettlementCount > 0);
            $order['partner_stock_owners'] = implode(', ', array_values($allPartnerUsernames));

            // Escrow status & metrics
            $unreleased = Decimal::comp($consignmentTotal, $consignmentReleased) > 0 ? Decimal::sub($consignmentTotal, $consignmentReleased) : '0';
            $uncollected = Decimal::comp($consignmentReleased, $consignmentSettled) > 0 ? Decimal::sub($consignmentReleased, $consignmentSettled) : '0';

            $order['consignment_total_amount'] = $consignmentTotal;
            $order['consignment_released_amount'] = $consignmentReleased;
            $order['consignment_settled_amount'] = $consignmentSettled;
            $order['consignment_unreleased_amount'] = $unreleased;
            $order['consignment_uncollected_amount'] = $uncollected;

            if (empty($orderSettlements)) {
                $order['consignment_escrow_status'] = 'none';
            } elseif ($hasRefused) {
                $order['consignment_escrow_status'] = 'refused';
            } elseif ($hasPendingAcceptance) {
                $order['consignment_escrow_status'] = 'pending_acceptance';
            } elseif (Decimal::comp($uncollected, '0') > 0 && Decimal::comp($unreleased, '0') > 0) {
                $order['consignment_escrow_status'] = 'waiting_release_and_claim';
            } elseif (Decimal::comp($uncollected, '0') > 0) {
                $order['consignment_escrow_status'] = 'waiting_claim';
            } elseif (Decimal::comp($unreleased, '0') > 0) {
                $order['consignment_escrow_status'] = 'waiting_release';
            } elseif (Decimal::comp($consignmentTotal, '0') > 0 && Decimal::comp($consignmentSettled, $consignmentTotal) >= 0) {
                $order['consignment_escrow_status'] = 'settled';
            } else {
                $order['consignment_escrow_status'] = 'none';
            }

            // Zero-overfetching: strip heavy fileData Base64 strings from custom_checklist in initial orders list
            if (!empty($order['custom_checklist'])) {
                $decoded = json_decode($order['custom_checklist'], true);
                if (is_array($decoded)) {
                    foreach ($decoded as &$item) {
                        if (isset($item['attachments']) && is_array($item['attachments'])) {
                            foreach ($item['attachments'] as &$att) {
                                if (isset($att['fileData'])) {
                                    unset($att['fileData']);
                                    $att['hasData'] = true;
                                }
                            }
                            unset($att);
                        }
                        if (isset($item['fileData'])) {
                            unset($item['fileData']);
                            $item['hasData'] = true;
                        }
                    }
                    unset($item);
                    $order['custom_checklist'] = json_encode($decoded);
                }
            }

            $order['refusal_card_dismissed'] = (int)($order['refusal_card_dismissed'] ?? 0);
        }
        unset($order);

        Response::json([
            'orders' => $orders,
            'total' => $totalOrders,
            'page' => $page,
            'limit' => $limit,
            'total_pages' => $totalPages
        ]);
    }

    public function store(array $data): void
    {
        $customerId = $data['customer_id'] ?? null;
        $items = $data['items'] ?? [];
        $customSale = !empty($data['custom_sale']) ? 1 : 0;

        if (!$customerId || (!$customSale && (!is_array($items) || count($items) === 0))) {
            Response::json(['error' => 'Customer and items required'], 400);
            return;
        }

        $status = $data['status'] ?? 'pending';

        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);
        $this->ensureOrderHistoryTable($db);
        self::ensurePartnerSettlementsColumns($db);
        $db->beginTransaction();
        try {

        // Strict Customer Validation: Customer must exist and not be soft-deleted
        $custStmt = $db->prepare('SELECT id FROM customers WHERE id = :id AND deleted_at IS NULL LIMIT 1');
        $custStmt->execute(['id' => $customerId]);
        if (!$custStmt->fetch()) {
            $db->rollBack();
            Response::json(['error' => 'Customer not found or has been deleted'], 404);
            return;
        }

        $completedBy = $status === 'completed' ? ($_SESSION['user_id'] ?? null) : null;
        // "Pending payment" (money owed): goods are delivered now but unpaid.
        $moneyPendingBy = $status === 'pending_money' ? ($_SESSION['user_id'] ?? null) : null;
        $createdFromOrderId = !empty($data['created_from_order_id']) ? (int)$data['created_from_order_id'] : null;

        $resolvedCosts = $this->resolveManualCosts($data);

        // Authoritative recompute of total + products_cost from items using bcmath.
        // Frontend-sent total/profit are ignored for non-custom orders (JS float drift).
        $recomputed = $this->recomputeFromItems(
            is_array($items) ? $items : [],
            (bool)$customSale,
            isset($data['total']) ? (string)$data['total'] : null
        );
        $total = $recomputed['total'];
        $productsCost = $recomputed['products_cost'];

        if (Decimal::comp($total, '0') < 0) {
            $db->rollBack();
            Response::json(['error' => 'Order total cannot be negative'], 400);
            return;
        }

        // profit = total - (productsCost + manualCost)
        $totalCost = Decimal::add($productsCost, $resolvedCosts['manual_cost']);
        $profit = Decimal::sub($total, $totalCost);

        // Customer receivables (mirror of supplier payables). A completed sale is
        // paid in full; a credit ("pending_money") sale records how much (if any)
        // the customer paid up front (default 0) + an optional rolling due date;
        // pending/processing orders aren't owed yet, so nothing is paid.
        $extraProfit = '0';
        $providedPaid = (array_key_exists('amount_paid', $data) && $data['amount_paid'] !== null && $data['amount_paid'] !== '')
            ? (string) $data['amount_paid'] : null;

        $finishSale = !isset($data['finish_sale']) || $data['finish_sale'] === true || $data['finish_sale'] === 'true' || $data['finish_sale'] === 1;

        if ($providedPaid !== null) {
            if (Decimal::comp($providedPaid, '0') < 0) $providedPaid = '0';
            if (Decimal::comp($providedPaid, $total) > 0) {
                // Overpayment / Extra Net Profit at order creation
                $extraProfit = Decimal::sub($providedPaid, $total);
                $total = $providedPaid;
                $profit = Decimal::add($profit, $extraProfit);
                $amountPaid = $total;
                if ($finishSale && $status === 'completed') {
                    $status = 'completed';
                }
            } elseif (Decimal::comp($providedPaid, $total) === 0) {
                $amountPaid = $total;
                if ($status === 'pending_money' && $finishSale) $status = 'completed';
            } else {
                $amountPaid = $providedPaid;
            }
        } elseif ($status === 'completed') {
            $amountPaid = $total;
        } else {
            $amountPaid = '0';
        }

        $completedBy = ($status === 'completed') ? ($_SESSION['user_id'] ?? null) : null;
        $moneyPendingBy = ($status === 'pending_money') ? ($_SESSION['user_id'] ?? null) : null;
        $dueDate = null;
        if ($status === 'pending_money' && !empty($data['due_date'])) {
            $dueDateTs = strtotime((string) $data['due_date']);
            if ($dueDateTs === false) {
                $db->rollBack();
                Response::json(['error' => 'Invalid due date format.'], 400);
                return;
            }
            $dueDateFormatted = date('Y-m-d H:i:s', $dueDateTs);
            if ($dueDateTs < time() - 60) {
                $db->rollBack();
                Response::json(['error' => 'Payment due date/time cannot be in the past. Please select a current or future time.'], 400);
                return;
            }
            $dueDate = $dueDateFormatted;
        }
        // Walk-in / one-off buyer description (free text). Kept regardless of
        // customer; the form only collects it for the built-in walk-in customer.
        $customerNote = (isset($data['note']) && trim((string) $data['note']) !== '')
            ? trim((string) $data['note'])
            : ((isset($data['customer_note']) && trim((string) $data['customer_note']) !== '') ? trim((string) $data['customer_note']) : null);

        // Calculate parts owner profit, service profit, and parts cost reimbursement sums
        $partsOwnerProfitSum = '0';
        $serviceOwnerProfitSum = '0';
        $partsCostReimbursementSum = '0';
        foreach ($items as $itm) {
            $ownerPrf = isset($itm['product_owner_profit']) ? (string)$itm['product_owner_profit'] : (isset($itm['ownerProfit']) ? (string)$itm['ownerProfit'] : '0');
            $srvPrf = isset($itm['service_owner_profit']) ? (string)$itm['service_owner_profit'] : (isset($itm['serviceProfit']) ? (string)$itm['serviceProfit'] : '0');
            $itmCost = Decimal::mul((string)($itm['cost'] ?? '0'), (string)($itm['quantity'] ?? '0'));
            $partsOwnerProfitSum = Decimal::add($partsOwnerProfitSum, $ownerPrf);
            $serviceOwnerProfitSum = Decimal::add($serviceOwnerProfitSum, $srvPrf);
            $partsCostReimbursementSum = Decimal::add($partsCostReimbursementSum, $itmCost);
        }

        $partsOwnerProfit = isset($data['parts_owner_profit']) ? (string)$data['parts_owner_profit'] : $partsOwnerProfitSum;
        $manualCostsProfit = $resolvedCosts['manual_costs_profit'] ?? '0';
        $netLaborProfit = Decimal::sub(Decimal::sub($profit, $partsOwnerProfit), $manualCostsProfit);
        if (Decimal::comp($netLaborProfit, '0') < 0) $netLaborProfit = '0';
        $serviceOwnerProfit = isset($data['service_owner_profit']) && Decimal::comp((string)$data['service_owner_profit'], '0') > 0
            ? (Decimal::comp((string)$data['service_owner_profit'], $netLaborProfit) > 0 ? $netLaborProfit : (string)$data['service_owner_profit'])
            : ($customSale ? $netLaborProfit : $serviceOwnerProfitSum);
        $partsCostReimbursement = isset($data['parts_cost_reimbursement']) ? (string)$data['parts_cost_reimbursement'] : $partsCostReimbursementSum;
        $sessionCreatorId = (int)($_SESSION['user_id'] ?? 1);
        $ownerUserId = !empty($data['owner_user_id']) ? (int)$data['owner_user_id'] : ($customSale ? $this->resolveOwnerUserId($db, $data, $sessionCreatorId) : $sessionCreatorId);
        $serviceOwnersData = $this->resolveServiceOwners($data, $ownerUserId, $serviceOwnerProfit);

        // Multi-Role Collaborative Consensus Detection across 3 Layers + Designated Owner:
        // Layer 0 (Custom Services): Designated Owner != Creator (needs to accept service_owner_statement)
        // Layer 1: Product Inventory Owners (cost_owner_id != auto-accepted user)
        // Layer 2: Manual Outlays (paid_by_user_id != auto-accepted user)
        // Layer 3: Collaborating Technicians (service_owners_data user_id != auto-accepted user)
        $hasExternalPartners = ($customSale && (int)$ownerUserId !== $sessionCreatorId);
        $autoAcceptedId = $customSale ? $sessionCreatorId : (int)$ownerUserId;

        // Layer 1: Product Lots
        foreach ($items as $itm) {
            $cOwner = !empty($itm['cost_owner_id']) ? (int)$itm['cost_owner_id'] : null;
            if (!$cOwner && !empty($itm['purchase_id'])) {
                $pStmt = $db->prepare('SELECT owner_user_id FROM purchases WHERE id = :id');
                $pStmt->execute(['id' => $itm['purchase_id']]);
                $pRow = $pStmt->fetch();
                if ($pRow && !empty($pRow['owner_user_id'])) {
                    $cOwner = (int)$pRow['owner_user_id'];
                }
            }
            if ($cOwner && ($cOwner !== (int)$ownerUserId || $cOwner !== $autoAcceptedId)) {
                $hasExternalPartners = true;
                break;
            }
        }

        // Layer 2: Manual Outlays
        if (!$hasExternalPartners && !empty($resolvedCosts['manual_costs_data'])) {
            $outlaysArr = json_decode($resolvedCosts['manual_costs_data'], true);
            if (is_array($outlaysArr)) {
                foreach ($outlaysArr as $mc) {
                    $pBy = !empty($mc['paid_by_user_id']) ? (int)$mc['paid_by_user_id'] : (!empty($mc['payer_user_id']) ? (int)$mc['payer_user_id'] : null);
                    if ($pBy && ($pBy !== (int)$ownerUserId || $pBy !== $autoAcceptedId) && Decimal::comp((string)($mc['amount'] ?? '0'), '0') > 0) {
                        $hasExternalPartners = true;
                        break;
                    }
                }
            }
        }

        // Layer 3: Collaborating Technicians
        if (!$hasExternalPartners && !empty($serviceOwnersData)) {
            $sOwnersArr = json_decode($serviceOwnersData, true);
            if (is_array($sOwnersArr)) {
                foreach ($sOwnersArr as $so) {
                    $cId = !empty($so['user_id']) ? (int)$so['user_id'] : null;
                    $laborPrf = (string)($so['profit'] ?? $so['labor_profit'] ?? '0');
                    if ($cId && ($cId !== (int)$ownerUserId || $cId !== $autoAcceptedId) && Decimal::comp($laborPrf, '0') > 0) {
                        $hasExternalPartners = true;
                        break;
                    }
                }
            }
        }

        $initialAgreementStatus = $hasExternalPartners ? 'pending' : 'all_accepted';
        if ($hasExternalPartners) {
            if (in_array($status, ['processing', 'completed', 'pending_money'], true)) {
                $status = 'pending';
            }
            // Rule 86 / Rule 61 Invariant: Customer payment is strictly barred in Phase 1.
            // When external partner consensus is required, payments cannot be collected upfront.
            $amountPaid = '0';
            $completedBy = null;
            $moneyPendingBy = null;
        }

        $stmt = $db->prepare('INSERT INTO orders (customer_id, items_summary, total, profit, status, created_by, owner_user_id, date, custom_sale, provider_name, service_name, service_description, manual_cost, manual_costs_data, service_owners_data, products_cost, custom_checklist, completed_at, completed_by, money_pending_at, money_pending_by, created_from_order_id, amount_paid, due_date, customer_note, parts_owner_profit, service_owner_profit, parts_cost_reimbursement, agreement_status, has_refusal, is_locked_for_edit, agreement_version, paid_at, paid_by, device_model, device_imei, device_passcode, device_condition, device_custody_status, diagnostic_matrix, handover_qc_matrix, warranty_seal, warranty_period, warranty_expiry_date) VALUES (:customer_id, :items_summary, :total, :profit, :status, :created_by, :owner_user_id, NOW(), :custom_sale, :provider_name, :service_name, :service_description, :manual_cost, :manual_costs_data, :service_owners_data, :products_cost, :custom_checklist, CASE WHEN :status_completed = "completed" THEN NOW() ELSE NULL END, :completed_by, CASE WHEN :status_pending_money = "pending_money" THEN NOW() ELSE NULL END, :money_pending_by, :created_from_order_id, :amount_paid, :due_date, :customer_note, :parts_owner_profit, :service_owner_profit, :parts_cost_reimbursement, :agreement_status, :has_refusal, :is_locked_for_edit, :agreement_version, CASE WHEN :status_completed_paid = "completed" THEN NOW() ELSE NULL END, :paid_by, :device_model, :device_imei, :device_passcode, :device_condition, :device_custody_status, :diagnostic_matrix, :handover_qc_matrix, :warranty_seal, :warranty_period, :warranty_expiry_date)');
        $stmt->execute([
            'customer_id' => $customerId,
            'items_summary' => $data['items_summary'] ?? '',
            'total' => $total,
            'profit' => $profit,
            'status' => $status,
            'created_by' => $_SESSION['user_id'] ?? null,
            'owner_user_id' => $ownerUserId,
            'custom_sale' => $customSale,
            'provider_name' => $data['provider_name'] ?? null,
            'service_name' => $data['service_name'] ?? null,
            'service_description' => $data['service_description'] ?? null,
            'manual_cost' => $resolvedCosts['manual_cost'],
            'manual_costs_data' => $resolvedCosts['manual_costs_data'],
            'service_owners_data' => $serviceOwnersData,
            'products_cost' => $productsCost,
            'custom_checklist' => isset($data['custom_checklist']) ? json_encode($data['custom_checklist']) : null,
            'status_completed' => $status,
            'completed_by' => $completedBy,
            'status_pending_money' => $status,
            'money_pending_by' => $moneyPendingBy,
            'created_from_order_id' => $createdFromOrderId,
            'amount_paid' => $amountPaid,
            'due_date' => $dueDate,
            'customer_note' => $customerNote,
            'parts_owner_profit' => $partsOwnerProfit,
            'service_owner_profit' => $serviceOwnerProfit,
            'parts_cost_reimbursement' => $partsCostReimbursement,
            'agreement_status' => $initialAgreementStatus,
            'has_refusal' => 0,
            'is_locked_for_edit' => 0,
            'agreement_version' => 1,
            'status_completed_paid' => $status,
            'paid_by' => ($status === 'completed') ? ($_SESSION['user_id'] ?? 1) : null,
            'device_model' => !empty($data['device_model']) ? trim((string)$data['device_model']) : null,
            'device_imei' => !empty($data['device_imei']) ? trim((string)$data['device_imei']) : null,
            'device_passcode' => !empty($data['device_passcode']) ? trim((string)$data['device_passcode']) : null,
            'device_condition' => !empty($data['device_condition']) ? trim((string)$data['device_condition']) : null,
            'device_custody_status' => !empty($data['device_custody_status']) ? trim((string)$data['device_custody_status']) : 'on_me',
            'diagnostic_matrix' => isset($data['diagnostic_matrix']) ? (is_string($data['diagnostic_matrix']) ? $data['diagnostic_matrix'] : json_encode($data['diagnostic_matrix'])) : null,
            'handover_qc_matrix' => isset($data['handover_qc_matrix']) ? (is_string($data['handover_qc_matrix']) ? $data['handover_qc_matrix'] : json_encode($data['handover_qc_matrix'])) : null,
            'warranty_seal' => !empty($data['warranty_seal']) ? trim((string)$data['warranty_seal']) : null,
            'warranty_period' => !empty($data['warranty_period']) ? trim((string)$data['warranty_period']) : null,
            'warranty_expiry_date' => !empty($data['warranty_expiry_date']) ? (string)$data['warranty_expiry_date'] : null,
        ]);

        $orderId = (int) $db->lastInsertId();

        // Generate and Update final UID: ORD-YYYYMMDD-XXXXXX(ID) (Rule 87: Compact K-Notation)
        $datePart = date('Ymd');
        $randomPart = strtoupper(substr(uniqid(), -6));
        $counterStr = self::formatOrderCounter($orderId);
        $uid = "ORD-{$datePart}-{$randomPart}({$counterStr})";

        $db->prepare('UPDATE orders SET uid = :uid WHERE id = :id')->execute([
            'uid' => $uid,
            'id' => $orderId
        ]);

        $historyAction = 'created';
        $historyChanges = null;
        if ($createdFromOrderId) {
            // Fetch the source order's UID for display in history
            $srcStmt = $db->prepare('SELECT uid FROM orders WHERE id = :id');
            $srcStmt->execute(['id' => $createdFromOrderId]);
            $srcOrder = $srcStmt->fetch();
            $srcUid = $srcOrder ? $srcOrder['uid'] : "#$createdFromOrderId";
            $historyAction = 'created_from_template';
            $historyChanges = json_encode(['template_order_id' => $createdFromOrderId, 'template_order_uid' => $srcUid]);
        }

        $initSnapshot = self::captureOrderSnapshot($db, (int)$orderId);
        $initSnapshotJson = !empty($initSnapshot) ? json_encode($initSnapshot) : null;
        $historyStmt = $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, snapshot, created_at) VALUES (:order_id, :edited_by, :action, :changes, :snapshot, NOW())');
        $historyStmt->execute([
            'order_id' => $orderId,
            'edited_by' => $_SESSION['user_id'] ?? 1,
            'action' => $historyAction,
            'changes' => $historyChanges,
            'snapshot' => $initSnapshotJson,
        ]);

        // Strict Global Lock Hierarchy (products -> purchases -> cash_vaults):
        // Handle inventory before cash vault logging to prevent deadlocks with PurchasesController::pay()
        if ($status === 'completed' || $status === 'pending_money') {
            // Goods leave now: deduct inventory immediately
            $error = $this->deductInventory($db, $items);
            if ($error) {
                $db->rollBack();
                Response::json(['error' => $error], 400);
                return;
            }
        } else {
            // Pending/Processing orders: reserve inventory
            $error = $this->reserveInventory($db, $items);
            if ($error) {
                $db->rollBack();
                Response::json(['error' => $error], 400);
                return;
            }
        }

        // Credit sale or custom service with an up-front payment → record it as a payment event on
        // the order timeline so the money trail is complete from the start.
        if (($status === 'pending_money' || ($customSale && $status !== 'completed' && Decimal::comp($amountPaid, '0') > 0)) && Decimal::comp($amountPaid, '0') > 0) {
            $vaultNote = $customSale 
                ? "Intake deposit for Custom Service Order $uid" 
                : (Decimal::comp($extraProfit, '0') > 0 
                    ? "Credit order deposit with extra profit (+{$extraProfit}) — Order $uid" 
                    : (Decimal::comp($amountPaid, $total) === 0 
                        ? "Full payment for Order $uid (kept pending)" 
                        : "Initial deposit for Credit Order $uid"));

            $custodyUserId = !empty($ownerUserId) ? (int)$ownerUserId : (int)($_SESSION['user_id'] ?? 1);
            $cashierUid = (int)($_SESSION['user_id'] ?? 1);
            if ($custodyUserId !== $cashierUid) {
                $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                $uStmt->execute(['id' => (int)$cashierUid]);
                $cashierName = $uStmt->fetchColumn() ?: "Cashier #{$cashierUid}";
                $vaultNote .= " (Collected at counter by {$cashierName})";
            }
            $vaultFlowType = !empty($customSale) ? 'service_payment' : 'customer_payment';
            CashVaultController::logFlow(
                $db,
                $vaultFlowType,
                'in',
                $amountPaid,
                'orders',
                (int)$orderId,
                $vaultNote,
                $custodyUserId
            );
            $historyPayload = [
                'amount' => $amountPaid,
                'total_paid' => $amountPaid,
                'remaining' => Decimal::sub($total, $amountPaid),
                'due_date' => $dueDate,
                'timing' => 'none',
            ];
            if (Decimal::comp($extraProfit, '0') > 0) {
                $historyPayload['is_extra'] = true;
                $historyPayload['extra_profit'] = $extraProfit;
                $historyPayload['original_total'] = Decimal::sub($total, $extraProfit);
                $historyPayload['new_total'] = $total;
            }
            $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())')
                ->execute([
                    'order_id' => $orderId,
                    'edited_by' => $_SESSION['user_id'] ?? 1,
                    'action' => 'payment_recorded',
                    'changes' => json_encode($historyPayload),
                ]);
        }

        // Direct POS sale completed at checkout → record cash inflow to vault
        // (Gap 1 fix: previously only credit/installment orders logged cash)
        if ($status === 'completed' && Decimal::comp($total, '0') > 0) {
            $orderSettleKind = $data['settle_kind'] ?? 'cash';
            if ($orderSettleKind !== 'product') {
                $saleFlowType = !empty($customSale) ? 'service_payment' : 'customer_payment';
                CashVaultController::logFlow(
                    $db,
                    $saleFlowType,
                    'in',
                    $total,
                    'orders',
                    (int)$orderId,
                    Decimal::comp($extraProfit, '0') > 0
                        ? "POS sale completed with extra profit (+{$extraProfit}) — Order $uid"
                        : "POS direct sale completed — Order $uid",
                    (int)($_SESSION['user_id'] ?? 1)
                );
            }
            if (Decimal::comp($extraProfit, '0') > 0) {
                $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())')
                    ->execute([
                        'order_id' => $orderId,
                        'edited_by' => $_SESSION['user_id'] ?? 1,
                        'action' => 'payment_recorded',
                        'changes' => json_encode([
                            'amount' => $total,
                            'total_paid' => $total,
                            'remaining' => '0',
                            'is_extra' => true,
                            'extra_profit' => $extraProfit,
                            'original_total' => Decimal::sub($total, $extraProfit),
                            'new_total' => $total,
                            'timing' => 'none',
                        ]),
                    ]);
            }
        }

        // Disburse manual outlays immediately from the paying user's cash safe vault
        // ONLY for non-custom orders that are self-contained / no external partners awaiting agreement.
        // For Custom Services (custom_sale = 1), manual costs always generate isolated manual_cost_recovery statements paid via payManualCostDemand.
        if (!$customSale && !$hasExternalPartners && !empty($resolvedCosts['manual_costs_data'])) {
            $outlays = json_decode($resolvedCosts['manual_costs_data'], true);
            if (is_array($outlays)) {
                foreach ($outlays as $idx => $mc) {
                    $mcAmount = (string)($mc['amount'] ?? '0');
                    if (Decimal::comp($mcAmount, '0') > 0) {
                        $payerId = !empty($mc['paid_by_user_id']) ? (int)$mc['paid_by_user_id'] : (int)($ownerUserId ?: ($_SESSION['user_id'] ?? 1));
                        $mcDesc = !empty($mc['description']) ? $mc['description'] : "Outlay #" . ($idx + 1);
                        CashVaultController::logFlow(
                            $db,
                            'manual_outlay_expense',
                            'out',
                            $mcAmount,
                            'orders',
                            (int)$orderId,
                            "Job Outlay disbursed: {$mcDesc} — Order {$uid}",
                            $payerId
                        );
                    }
                }
            }
        }

        foreach ($items as $item) {
            $productId = $item['product_id'] ?? null;
            $purchaseId = $item['purchase_id'] ?? null;
            $quantity = (string) ($item['quantity'] ?? '0');

            if (Decimal::comp($quantity, '0') <= 0) {
                $db->rollBack();
                Response::json(['error' => 'Invalid item quantity'], 400);
                return;
            }

            $itemPrice = (string) ($item['price'] ?? '0');
            if (!is_numeric($itemPrice) || Decimal::comp($itemPrice, '0') < 0) {
                $db->rollBack();
                Response::json(['error' => 'Item price cannot be negative'], 400);
                return;
            }

            if ($productId) {
                $stmt = $db->prepare('SELECT id FROM products WHERE id = :id');
                $stmt->execute(['id' => $productId]);
                $product = $stmt->fetch();
                if (!$product) {
                    $db->rollBack();
                    Response::json(['error' => 'Product not found'], 404);
                    return;
                }
            }

            $purchase = null;
            if ($purchaseId) {
                $stmt = $db->prepare('SELECT id, owner_user_id, price, transfer_status FROM purchases WHERE id = :id');
                $stmt->execute(['id' => $purchaseId]);
                $purchase = $stmt->fetch();
                if (!$purchase) {
                    $db->rollBack();
                    Response::json(['error' => 'Purchase batch not found'], 404);
                    return;
                }
                if (!empty($purchase['transfer_status']) && in_array($purchase['transfer_status'], ['pending_transfer', 'pending_delegated'])) {
                    $db->rollBack();
                    Response::json(['error' => 'This batch lot is frozen — a transfer or delegation is pending'], 400);
                    return;
                }
            }

            $itemOwner = null;
            if (!empty($item['owner_user_id'])) {
                $itemOwner = (int)$item['owner_user_id'];
            } elseif ($purchase && !empty($purchase['owner_user_id'])) {
                $itemOwner = (int)$purchase['owner_user_id'];
            } else {
                $itemOwner = !empty($data['owner_user_id']) ? (int)$data['owner_user_id'] : ($_SESSION['user_id'] ?? 1);
            }

            // Authoritative batch ownership & unit cost from DB (prevents tampering)
            $unitCost = $purchase ? (string)($purchase['price'] ?? $item['cost'] ?? '0') : (string)($item['cost'] ?? '0');
            $costOwnerId = $purchase ? (!empty($purchase['owner_user_id']) ? (int)$purchase['owner_user_id'] : null) : (!empty($item['cost_owner_id']) ? (int)$item['cost_owner_id'] : null);
            $profitSplitType = !empty($item['profit_split_type']) ? (string)$item['profit_split_type'] : (!empty($item['splitType']) ? (string)$item['splitType'] : 'none');
            $productOwnerSharePct = isset($item['product_owner_share_pct']) ? (string)$item['product_owner_share_pct'] : (isset($item['ownerSharePct']) ? (string)$item['ownerSharePct'] : '0');

            // Authoritative gross profit calculation
            $itemPrice = (string) ($item['price'] ?? '0');
            $lineRevenue = Decimal::mul($itemPrice, $quantity);
            $lineCost = Decimal::mul($unitCost, $quantity);
            $lineProfit = Decimal::sub($lineRevenue, $lineCost);

            $productOwnerProfit = '0';
            $serviceOwnerProfit = $lineProfit;

            if ($costOwnerId && $costOwnerId !== (int)$ownerUserId) {
                if ($profitSplitType === 'fixed') {
                    $fixedClaim = isset($item['product_owner_fixed']) ? (string)$item['product_owner_fixed'] : (isset($item['product_owner_profit']) ? (string)$item['product_owner_profit'] : '0');
                    if (Decimal::comp($fixedClaim, '0') > 0 && Decimal::comp($fixedClaim, $lineProfit) <= 0) {
                        $productOwnerProfit = $fixedClaim;
                        $serviceOwnerProfit = Decimal::sub($lineProfit, $productOwnerProfit);
                    } elseif (Decimal::comp($fixedClaim, $lineProfit) > 0) {
                        $productOwnerProfit = $lineProfit;
                        $serviceOwnerProfit = '0';
                    }
                } elseif ($profitSplitType !== 'none') {
                    $pct = Decimal::comp($productOwnerSharePct, '0') > 0 ? $productOwnerSharePct : '50';
                    $productOwnerProfit = Decimal::mul($lineProfit, Decimal::div($pct, '100', 8));
                    $serviceOwnerProfit = Decimal::sub($lineProfit, $productOwnerProfit);
                }
            } else {
                $productOwnerProfit = '0';
                $serviceOwnerProfit = $lineProfit;
            }

            $stmt = $db->prepare('INSERT INTO order_items (order_id, product_id, purchase_id, name, price, quantity, cost, description, owner_user_id, cost_owner_id, profit_split_type, product_owner_share_pct, product_owner_profit, service_owner_profit) VALUES (:order_id, :product_id, :purchase_id, :name, :price, :quantity, :cost, :description, :owner_user_id, :cost_owner_id, :profit_split_type, :product_owner_share_pct, :product_owner_profit, :service_owner_profit)');
            $stmt->execute([
                'order_id' => $orderId,
                'product_id' => $productId,
                'purchase_id' => $purchaseId,
                'name' => $item['name'] ?? '',
                'price' => $itemPrice,
                'quantity' => $quantity,
                'cost' => $unitCost,
                'description' => $item['description'] ?? null,
                'owner_user_id' => $itemOwner,
                'cost_owner_id' => $costOwnerId,
                'profit_split_type' => $profitSplitType,
                'product_owner_share_pct' => $productOwnerSharePct,
                'product_owner_profit' => $productOwnerProfit,
                'service_owner_profit' => $serviceOwnerProfit,
            ]);
        }

        if ($customSale) {
            $minOwed = $this->computeMinimumOwedToOthers($db, (int)$orderId, (int)$ownerUserId);
            if (Decimal::comp($total, $minOwed) < 0 && Decimal::comp($minOwed, '0') > 0) {
                $db->rollBack();
                Response::json(['error' => "Service Grand Total ({$total}) is below the minimum owed to product owners and collaborators ({$minOwed}). Adjust the price or remove cross-user items."], 400);
                return;
            }
        }

        if ($status === 'completed') {
            $minOwed = $this->computeMinimumOwedToOthers($db, $orderId, $ownerUserId);
            if (Decimal::comp($minOwed, '0') > 0 && Decimal::comp($total, $minOwed) < 0) {
                $db->rollBack();
                Response::json(['error' => "Cannot complete order: minimum required payment to cover partner costs/profits is {$minOwed}"], 400);
                return;
            }
        }

        // Generate partner settlements immediately for all orders (completed, credit/installments, or custom services)
        $safeOwnerId = (int)($ownerUserId ?? $_SESSION['user_id'] ?? 1);
        $this->generatePartnerSettlements($db, $orderId, $uid, $safeOwnerId);

        if ($db->inTransaction()) {
            $db->commit();
        }
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("Failed to create order in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to create order. Please check server error logs.'], 500);
            return;
        }

        $serviceName = $data['service_name'] ?? $data['items_summary'] ?? null;

        // Look up customer name + uid for a readable log
        $customerDisplay = null;
        if ($customerId) {
            $cStmt = $db->prepare('SELECT name, uid FROM customers WHERE id = :id LIMIT 1');
            $cStmt->execute(['id' => $customerId]);
            $cust = $cStmt->fetch();
            if ($cust) {
                $customerDisplay = trim(($cust['name'] ?? '') . ' ' . ($cust['uid'] ?? ''));
            }
        }

        $createDetails = ['uid' => $uid, 'status' => $status, 'total' => $total];
        if ($customerDisplay) $createDetails['customer'] = $customerDisplay;
        // Walk-in / one-off buyer name so the activity log shows WHO bought, not
        // just the generic "Walk-in" customer record.
        if ($customerNote) $createDetails['customer_note'] = $customerNote;
        if (is_array($items)) $createDetails['items_count'] = count($items);
        // For a credit ("pending_money") sale, record the up-front payment so the
        // order's payment history can show it as the first event (mirror purchases).
        if ($status === 'pending_money') {
            $createDetails['amount_paid'] = $amountPaid;
            $createDetails['owed'] = Decimal::sub($total, $amountPaid);
            $createDetails['due_date'] = $dueDate;
            $createDetails['payment_status'] = Decimal::comp($amountPaid, '0') > 0 ? (Decimal::comp($createDetails['owed'], '0') <= 0 ? 'paid' : 'partial') : 'unpaid';
            if (Decimal::comp($extraProfit, '0') > 0) {
                $createDetails['extra_profit'] = $extraProfit;
                $createDetails['is_extra'] = true;
            }
        } elseif ($status === 'completed') {
            $createDetails['amount_paid'] = $total;
            $createDetails['owed'] = '0';
            $createDetails['payment_status'] = 'paid';
            $createDetails['paid_directly'] = true;
            if (Decimal::comp($extraProfit, '0') > 0) {
                $createDetails['extra_profit'] = $extraProfit;
                $createDetails['is_extra'] = true;
            }
        }
        SystemLog::write('orders', 'created', $orderId, $serviceName ?: "Order #$orderId", json_encode($createDetails));

        if (Decimal::comp($extraProfit, '0') > 0) {
            SystemLog::write('orders', 'customer_payment', (int)$orderId, $customerDisplay ?? ($serviceName ?: "Order #$orderId"), json_encode([
                'uid' => $uid,
                'customer_note' => $customerNote,
                'amount_paid_now' => $amountPaid,
                'amount_paid_total' => $amountPaid,
                'remaining' => Decimal::sub($total, $amountPaid),
                'payment_date' => date('Y-m-d'),
                'due_date' => $dueDate,
                'timing' => 'none',
                'new_due_date' => null,
                'fully_collected' => Decimal::comp(Decimal::sub($total, $amountPaid), '0') <= 0,
                'final' => $status === 'completed',
                'settlement' => 'extra',
                'settlement_amount' => $extraProfit,
                'extra_profit' => $extraProfit,
                'payment_kind' => ($status === 'completed') ? 'extra_finish' : 'extra_only',
                'is_extra' => true,
            ]));
        }

        EntityVersion::bump($db, 'orders', 'partner_settlements', 'cash_vault', 'products', 'purchases');

        Response::json([
            'id' => $orderId,
            'uid' => $uid,
            'total' => $total,
            'profit' => $profit,
            'products_cost' => $productsCost,
        ], 201);
    }

    /**
     * Coin-as-product barter (sell side): sell `product_id` and be PAID in another
     * held coin (`received_product_id`). The sold coin is valued manually at
     * spend_cost DZD/unit; the cross rate (1 received = rate sold) sets how much of
     * the received coin comes in. It's a settled sale recorded on the customer ticket
     * with profit 0 (carry-over) — the received coin enters stock carrying the sale's
     * DZD value as its cost, so profit surfaces only when that coin later sells for
     * cash. Mirror of PurchasesController::storeWithProduct.
     */
    public function coinSwap(array $data): void
    {
        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);
        $this->ensureOrderHistoryTable($db);
        $this->ensurePurchasesSettleColumns($db);

        $currentUserId = $_SESSION['user_id'] ?? null;
        if (!$currentUserId) {
            Response::json(['error' => 'Authentication required'], 401);
            return;
        }

        $customerId     = $data['customer_id'] ?? null;
        $soldId         = $data['product_id'] ?? null;
        $specificLotId  = !empty($data['specific_lot_id']) ? (int) $data['specific_lot_id'] : null;
        $soldQty        = isset($data['quantity']) ? (string) $data['quantity'] : null;
        $soldValuation  = isset($data['spend_cost']) ? (string) $data['spend_cost'] : (isset($data['valuation']) ? (string) $data['valuation'] : null);
        $receivedId     = $data['received_product_id'] ?? null;
        $receivedQty    = isset($data['received_quantity']) ? (string) $data['received_quantity'] : null;
        $receivedUnitCost = isset($data['received_unit_cost']) ? (string) $data['received_unit_cost'] : null;
        $rate           = isset($data['rate']) ? (string) $data['rate'] : null;

        if (!$customerId || !$soldId || !$receivedId || $soldQty === null || $soldValuation === null) {
            Response::json(['error' => 'Customer, sold coin, received coin, quantity and trade valuation are required'], 400);
            return;
        }
        if ((string) $soldId === (string) $receivedId) {
            Response::json(['error' => 'The sold coin and the received coin must be different'], 400);
            return;
        }
        if (Decimal::comp($soldQty, '0') <= 0 || Decimal::comp($soldValuation, '0') <= 0) {
            Response::json(['error' => 'Sold quantity and trade valuation must be greater than zero'], 400);
            return;
        }

        // Calculate Total Trade Value (in base currency DZD)
        $totalTradeValue = Decimal::mul($soldQty, $soldValuation);

        // Resolve Received Quantity and Unit Cost via Two-Way Engine or Rate Fallback
        if ($receivedQty !== null && Decimal::comp($receivedQty, '0') > 0) {
            if ($receivedUnitCost === null || Decimal::comp($receivedUnitCost, '0') <= 0) {
                $receivedUnitCost = Decimal::div($totalTradeValue, $receivedQty);
            }
        } elseif ($receivedUnitCost !== null && Decimal::comp($receivedUnitCost, '0') > 0) {
            $receivedQty = Decimal::div($totalTradeValue, $receivedUnitCost);
        } elseif ($rate !== null && Decimal::comp($rate, '0') > 0) {
            $receivedQty = Decimal::div($soldQty, $rate);
            $receivedUnitCost = Decimal::div($totalTradeValue, $receivedQty);
        } else {
            // Default 1:1 parity fallback
            $receivedQty = $soldQty;
            $receivedUnitCost = $soldValuation;
        }

        if (Decimal::comp($receivedQty, '0') <= 0) {
            Response::json(['error' => 'The received quantity must be greater than zero'], 400);
            return;
        }
        if (Decimal::comp($receivedUnitCost, '0') <= 0) {
            $receivedUnitCost = Decimal::div($totalTradeValue, $receivedQty);
        }

        // Strict Self-Attribution: Cashier owns the trade and the acquired lot
        $ownerUserId = $currentUserId;
        $customerNote = (isset($data['customer_note']) && trim((string) $data['customer_note']) !== '')
            ? trim((string) $data['customer_note']) : null;

        $db->beginTransaction();
        try {

        $cStmt = $db->prepare('SELECT id, name, uid FROM customers WHERE id = :id');
        $cStmt->execute(['id' => $customerId]);
        $customer = $cStmt->fetch();
        if (!$customer) { $db->rollBack(); Response::json(['error' => 'Customer not found'], 404); return; }

        // Lock both products in deterministic numerical order to prevent database deadlocks
        $firstId  = min((int) $soldId, (int) $receivedId);
        $secondId = max((int) $soldId, (int) $receivedId);

        $lockStmt = $db->prepare('SELECT id, name, uid, quantity, quantity_reserved FROM products WHERE id = :id FOR UPDATE');
        $lockStmt->execute(['id' => $firstId]);
        $firstProd = $lockStmt->fetch();

        $lockStmt->execute(['id' => $secondId]);
        $secondProd = $lockStmt->fetch();

        $sold     = ((int) $soldId === $firstId) ? $firstProd : $secondProd;
        $received = ((int) $receivedId === $firstId) ? $firstProd : $secondProd;

        if (!$sold) { $db->rollBack(); Response::json(['error' => 'Sold product not found'], 404); return; }
        if (!$received) { $db->rollBack(); Response::json(['error' => 'Received product not found'], 404); return; }

        // Consume the sold coin: either from a specific owned lot or FIFO among owned lots
        $consumed = [];
        $totalCOGS = '0';

        if ($specificLotId) {
            $lotStmt = $db->prepare('SELECT id, product_id, price, quantity_remaining, quantity_reserved, quantity_sold, owner_user_id, transfer_status FROM purchases WHERE id = :id AND product_id = :pid AND deleted_at IS NULL FOR UPDATE');
            $lotStmt->execute(['id' => $specificLotId, 'pid' => $soldId]);
            $specificLot = $lotStmt->fetch();

            if (!$specificLot) {
                $db->rollBack();
                Response::json(['error' => 'Selected batch lot not found for the sold coin'], 404);
                return;
            }

            // Custody lock check
            if (!empty($specificLot['transfer_status']) && in_array($specificLot['transfer_status'], ['pending_transfer', 'pending_delegated'])) {
                $db->rollBack();
                Response::json(['error' => 'This purchase batch is currently locked in a pending status and cannot be swapped.'], 422);
                return;
            }

            // Ownership check
            if ($specificLot['owner_user_id'] && (string) $specificLot['owner_user_id'] !== (string) $ownerUserId) {
                $db->rollBack();
                Response::json(['error' => 'You do not own this batch lot. You can only swap coins from your own stock.'], 403);
                return;
            }

            $avail = Decimal::sub((string) $specificLot['quantity_remaining'], (string) ($specificLot['quantity_reserved'] ?? '0'));
            if (Decimal::comp($avail, $soldQty) < 0) {
                $db->rollBack();
                Response::json(['error' => "Not enough available unreserved stock in selected batch (Available: {$avail}, Needed: {$soldQty})"], 400);
                return;
            }

            // Deduct from specific lot
            $db->prepare('UPDATE purchases SET quantity_remaining = :qr, quantity_sold = :qs WHERE id = :id')
               ->execute([
                   'qr' => Decimal::sub((string) $specificLot['quantity_remaining'], $soldQty),
                   'qs' => Decimal::add((string) $specificLot['quantity_sold'], $soldQty),
                   'id' => $specificLotId,
               ]);

            $lotCost = (string) $specificLot['price'];
            $totalCOGS = Decimal::mul($soldQty, $lotCost);
            $consumed[] = ['lot_id' => $specificLotId, 'quantity' => $soldQty, 'cost' => $lotCost];

            // Deduct total product quantity
            $db->prepare('UPDATE products SET quantity = :q, updated_at = NOW() WHERE id = :id')
               ->execute(['q' => Decimal::sub((string) $sold['quantity'], $soldQty), 'id' => $soldId]);
        } else {
            // FIFO fallback strictly among owned batches
            $lotsStmt = $db->prepare('SELECT id, price, quantity_remaining, quantity_reserved, quantity_sold FROM purchases WHERE product_id = :pid AND (owner_user_id = :uid OR owner_user_id IS NULL) AND deleted_at IS NULL AND quantity_remaining > 0 AND (transfer_status IS NULL OR transfer_status NOT IN ("pending_transfer", "pending_delegated")) ORDER BY id ASC FOR UPDATE');
            $lotsStmt->execute(['pid' => $soldId, 'uid' => $ownerUserId]);
            $ownedLots = $lotsStmt->fetchAll();

            $remainingToTake = $soldQty;
            $upd = $db->prepare('UPDATE purchases SET quantity_remaining = :qr, quantity_sold = :qs WHERE id = :id');
            foreach ($ownedLots as $lot) {
                if (Decimal::comp($remainingToTake, '0') <= 0) break;
                $lotRemaining = (string) $lot['quantity_remaining'];
                $lotReserved = (string) ($lot['quantity_reserved'] ?? '0');
                $avail = Decimal::sub($lotRemaining, $lotReserved);
                if (Decimal::comp($avail, '0') <= 0) continue;

                $take = Decimal::comp($avail, $remainingToTake) <= 0 ? $avail : $remainingToTake;
                $upd->execute([
                    'qr' => Decimal::sub($lotRemaining, $take),
                    'qs' => Decimal::add((string) $lot['quantity_sold'], $take),
                    'id' => $lot['id'],
                ]);
                $lotCost = (string) $lot['price'];
                $subCost = Decimal::mul($take, $lotCost);
                $totalCOGS = Decimal::add($totalCOGS, $subCost);
                $consumed[] = ['lot_id' => (int) $lot['id'], 'quantity' => $take, 'cost' => $lotCost];
                $remainingToTake = Decimal::sub($remainingToTake, $take);
            }

            if (Decimal::comp($remainingToTake, '0') > 0) {
                $db->rollBack();
                Response::json(['error' => 'Not enough available unreserved stock in your owned batches to cover the swap sale'], 400);
                return;
            }

            $db->prepare('UPDATE products SET quantity = :q, updated_at = NOW() WHERE id = :id')
               ->execute(['q' => Decimal::sub((string) $sold['quantity'], $soldQty), 'id' => $soldId]);
        }

        // Calculate Realized Profit on the sold coin (Trade Value - Original Acquisition COGS)
        $realizedProfit = Decimal::sub($totalTradeValue, $totalCOGS);
        $itemsSummary = $sold['name'] . ' ➔ ' . $received['name'];

        // Insert Order Record
        $stmt = $db->prepare('INSERT INTO orders (customer_id, items_summary, total, profit, status, created_by, owner_user_id, date, custom_sale, manual_cost, products_cost, completed_at, completed_by, paid_at, paid_by, amount_paid, customer_note, settle_kind, settle_product_id, settle_quantity, settle_consumed, parts_owner_profit) VALUES (:customer_id, :items_summary, :total, :profit, "completed", :created_by, :owner_user_id, NOW(), 0, 0, :products_cost, NOW(), :completed_by, NOW(), :paid_by, :amount_paid, :customer_note, "product", :settle_product_id, :settle_quantity, :settle_consumed, :parts_owner_profit)');
        $stmt->execute([
            'customer_id'        => $customerId,
            'items_summary'      => $itemsSummary,
            'total'              => $totalTradeValue,
            'profit'             => $realizedProfit,
            'created_by'         => $currentUserId,
            'owner_user_id'      => $ownerUserId,
            'products_cost'      => $totalCOGS,
            'completed_by'       => $currentUserId,
            'paid_by'            => $currentUserId,
            'amount_paid'        => $totalTradeValue,
            'customer_note'      => $customerNote,
            'settle_product_id'  => $receivedId,
            'settle_quantity'    => $receivedQty,
            'settle_consumed'    => json_encode($consumed),
            'parts_owner_profit' => $realizedProfit,
        ]);
        $orderId = (int) $db->lastInsertId();
        $counterStr = self::formatOrderCounter($orderId);
        $uid = 'ORD-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6)) . "({$counterStr})";
        $db->prepare('UPDATE orders SET uid = :uid WHERE id = :id')->execute(['uid' => $uid, 'id' => $orderId]);

        // Insert Line Item
        $avgCost = Decimal::comp($soldQty, '0') > 0 ? Decimal::div($totalCOGS, $soldQty) : $soldValuation;
        $db->prepare('INSERT INTO order_items (order_id, product_id, purchase_id, name, price, quantity, cost, owner_user_id, cost_owner_id, product_owner_profit) VALUES (:order_id, :product_id, :purchase_id, :name, :price, :quantity, :cost, :owner_user_id, :cost_owner_id, :product_owner_profit)')
            ->execute([
                'order_id'             => $orderId,
                'product_id'           => $soldId,
                'purchase_id'          => $specificLotId ?: ($consumed[0]['lot_id'] ?? null),
                'name'                 => $sold['name'],
                'price'                => $soldValuation,
                'quantity'             => $soldQty,
                'cost'                 => $avgCost,
                'owner_user_id'        => $ownerUserId,
                'cost_owner_id'        => $ownerUserId,
                'product_owner_profit' => $realizedProfit,
            ]);

        // Create New Purchase Batch for the Received Coin (Cost basis = trade value, NO profit booked on received coin)
        $now = date('Y-m-d H:i:s');
        $db->prepare('INSERT INTO purchases (uid, name, product_id, price, quantity, quantity_remaining, quantity_sold, total, date, created_by, owner_user_id, supplier_id, payment_status, amount_paid, paid_at, paid_by, settle_kind, settle_product_id, settle_quantity, settle_order_id, supplier_note) VALUES (NULL, :name, :product_id, :price, :quantity, :quantity_remaining, 0, :total, NOW(), :created_by, :owner_user_id, NULL, "paid", :amount_paid, :paid_at, :paid_by, "received", :settle_product_id, :settle_quantity, :settle_order_id, :supplier_note)')
            ->execute([
                'name'               => $received['name'],
                'product_id'         => $receivedId,
                'price'              => $receivedUnitCost,
                'quantity'           => $receivedQty,
                'quantity_remaining' => $receivedQty,
                'total'              => $totalTradeValue,
                'created_by'         => $currentUserId,
                'owner_user_id'      => $ownerUserId,
                'amount_paid'        => $totalTradeValue,
                'paid_at'            => $now,
                'paid_by'            => $currentUserId,
                'settle_product_id'  => $soldId,
                'settle_quantity'    => $soldQty,
                'settle_order_id'    => $orderId,
                'supplier_note'      => $customerNote,
            ]);
        $receivedPurchaseId = (int) $db->lastInsertId();

        $rUid = 'PUR-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(2))) . "({$receivedPurchaseId})";
        $db->prepare('UPDATE purchases SET uid = :uid WHERE id = :id')->execute(['uid' => $rUid, 'id' => $receivedPurchaseId]);

        // Increment stock of received product and link batch onto order
        $db->prepare('UPDATE products SET quantity = :quantity, updated_at = NOW() WHERE id = :id')->execute([
            'quantity' => Decimal::add($received['quantity'], $receivedQty),
            'id'       => $receivedId,
        ]);
        $db->prepare('UPDATE orders SET settle_purchase_id = :pid WHERE id = :id')->execute(['pid' => $receivedPurchaseId, 'id' => $orderId]);

        // Audit Trail
        $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())')
            ->execute([
                'order_id'  => $orderId,
                'edited_by' => $currentUserId,
                'action'    => 'created',
                'changes'   => json_encode(['coin_swap' => [
                    'sold_product'       => $sold['name'],
                    'sold_qty'           => $soldQty,
                    'sold_valuation'     => $soldValuation,
                    'specific_lot_id'    => $specificLotId,
                    'original_cogs'      => $totalCOGS,
                    'realized_profit'    => $realizedProfit,
                    'received_product'   => $received['name'],
                    'received_qty'       => $receivedQty,
                    'received_unit_cost' => $receivedUnitCost,
                    'received_lot_uid'   => $rUid,
                    'customer_note'      => $customerNote,
                ]]),
            ]);

        $db->commit();

        SystemLog::write('orders', 'created', $orderId, $itemsSummary, json_encode([
            'uid'             => $uid,
            'status'          => 'completed',
            'total'           => $totalTradeValue,
            'realized_profit' => $realizedProfit,
            'customer'        => trim(($customer['name'] ?? '') . ' ' . ($customer['uid'] ?? '')),
            'customer_note'   => $customerNote,
            'settle_kind'     => 'product',
            'paid_with'       => [
                'product'          => $received['name'],
                'product_uid'      => $received['uid'] ?? null,
                'quantity'         => $receivedQty,
                'unit_cost'        => $receivedUnitCost,
                'batch_uid'        => $rUid,
            ],
            'sold'            => [
                'product'          => $sold['name'],
                'quantity'         => $soldQty,
                'trade_valuation'  => $soldValuation,
                'original_cogs'    => $totalCOGS,
                'realized_profit'  => $realizedProfit,
            ],
        ]));

        EntityVersion::bump($db, 'orders', 'products', 'cash_vault', 'purchases');

        Response::json([
            'id'                   => $orderId,
            'uid'                  => $uid,
            'total'                => $totalTradeValue,
            'realized_profit'      => $realizedProfit,
            'received_quantity'    => $receivedQty,
            'received_unit_cost'   => $receivedUnitCost,
            'received_purchase_id' => $receivedPurchaseId,
            'received_batch_uid'   => $rUid,
        ], 201);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("Failed to process coin swap in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to process coin swap. Please check server error logs.'], 500);
            return;
        }
    }

    public function update(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);
        $this->ensureOrderHistoryTable($db);
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT * FROM orders WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $order = $stmt->fetch();

        if (!$order) {
            $db->rollBack();
            Response::json(['error' => 'Order not found'], 404);
            return;
        }

        if (($order['status'] ?? '') === 'deleted' || ($order['deleted_at'] ?? null) !== null) {
            $db->rollBack();
            Response::json(['error' => 'This order has been deleted and cannot be edited', 'order_deleted' => true], 400);
            return;
        }

        if (($order['status'] ?? '') === 'returned') {
            $db->rollBack();
            Response::json(['error' => 'Returned orders cannot be edited', 'order_deleted' => false], 400);
            return;
        }

        if (empty($order['custom_sale'])) {
            $db->rollBack();
            Response::json(['error' => 'Only custom service orders can be edited this way'], 400);
            return;
        }

        if ($order['status'] === 'completed') {
            if (empty($order['custom_sale'])) {
                $db->rollBack();
                Response::json(['error' => 'Only custom service orders can be edited after completion'], 400);
                return;
            }
        }

        // Edit authorization: In Phase 1 Owner, Creator, or Admin can edit; in Phase 2 any mentioned participant, Creator, Owner, or Admin can edit
        $sessionUid = (int)($_SESSION['user_id'] ?? 0);
        $isAdmin = !empty($_SESSION['is_admin']) || (isset($_SESSION['role']) && ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'super_admin'));
        $isOwner = ((int)$order['owner_user_id'] === $sessionUid);
        $isCreator = ((int)($order['created_by'] ?? 0) === $sessionUid);
        $isPhase2 = !empty($order['is_locked_for_edit']) || (($order['agreement_status'] ?? '') === 'all_accepted');

        if ($isPhase2) {
            $mentionedUsers = self::getOrderMentionedUserIds($db, (int)$id, $order);
            $isParticipant = in_array($sessionUid, $mentionedUsers, true);
            if (!$isOwner && !$isCreator && !$isParticipant && !$isAdmin) {
                $db->rollBack();
                Response::json(['error' => 'Only mentioned participants or admin can edit this service in Phase 2'], 403);
                return;
            }
        } else {
            if (!$isOwner && !$isCreator && !$isAdmin) {
                $db->rollBack();
                Response::json(['error' => 'Only the service owner, creator, or admin can edit terms during Phase 1 agreement'], 403);
                return;
            }
        }

        // Query if any partner settlements have been collected/settled for this order
        $stmtSettledPs = $db->prepare('SELECT COUNT(*) FROM partner_settlements WHERE related_entity_type = "orders" AND related_entity_id = :oid AND status != "cancelled" AND (status = "settled" OR (settled_amount IS NOT NULL AND settled_amount > 0))');
        $stmtSettledPs->execute(['oid' => (int)$id]);
        $hasSettledPartnerPayouts = ((int)$stmtSettledPs->fetchColumn()) > 0;

        // Custom service Phase 2 lock: permanently locked once is_locked_for_edit = 1, all_accepted, or partner payouts were collected
        $isAgreementLocked = !empty($order['custom_sale'])
            ? (!empty($order['is_locked_for_edit']) || ($order['agreement_status'] ?? '') === 'all_accepted' || $hasSettledPartnerPayouts)
            : ($order['status'] === 'completed' || $order['status'] === 'processing');

        // Phase 2 Owner Lockdown Guard: Owner is permanently locked once agreement consensus is reached or payouts settled
        if ($isAgreementLocked && isset($data['owner_user_id'])) {
            $newOwner = (int)$data['owner_user_id'];
            $currentOwner = $order['owner_user_id'] ? (int)$order['owner_user_id'] : null;
            if ($currentOwner !== null && $newOwner !== $currentOwner) {
                $db->rollBack();
                Response::json(['error' => 'Cannot change service owner: All participants have accepted the agreement.'], 422);
                return;
            }
        }

        // Release old inventory or restore if completed/delivered (strictly unreturned items only)
        $stmtOldItems = $db->prepare('SELECT id, product_id, purchase_id, name, quantity, cost, price, owner_user_id, cost_owner_id, profit_split_type, product_owner_share_pct, product_owner_profit, service_owner_profit FROM order_items WHERE order_id = :id AND is_returned = 0');
        $stmtOldItems->execute(['id' => $id]);
        $oldItems = $stmtOldItems->fetchAll();
        if ($order['status'] === 'completed' || $order['status'] === 'delivered') {
            self::restoreInventory($db, $oldItems, 'absorb_master', $order['uid'] ?? null, (int)$id);
        } else {
            self::releaseInventory($db, $oldItems);
        }

        $items = $data['items'] ?? [];

        // Authoritative recompute. update() is custom_sale-only, so total is honored
        // from the user-entered amount; products_cost is recomputed from items;
        // profit = total - (productsCost + manualCost) using bcmath.
        $resolvedCosts = $this->resolveManualCosts($data);
        $recomputed = $this->recomputeFromItems(
            is_array($items) ? $items : [],
            true,
            isset($data['total']) ? (string)$data['total'] : null
        );
        $total = $recomputed['total'];
        $productsCost = $recomputed['products_cost'];

        if (Decimal::comp($total, '0') < 0) {
            $db->rollBack();
            Response::json(['error' => 'Order total cannot be negative'], 400);
            return;
        }

        $totalCost = Decimal::add($productsCost, $resolvedCosts['manual_cost']);
        $profit = Decimal::sub($total, $totalCost);

        // Fetch old product names and quantities for diffing before deletion
        $stmtOldItemsNames = $db->prepare('SELECT oi.id AS item_id, oi.product_id, COALESCE(NULLIF(oi.name, ""), p.name) AS name, oi.quantity, oi.price, oi.cost FROM order_items oi LEFT JOIN products p ON oi.product_id = p.id WHERE oi.order_id = :id');
        $stmtOldItemsNames->execute(['id' => $id]);
        $oldItemsFull = $stmtOldItemsNames->fetchAll();
        $oldProductsMapped = [];
        foreach ($oldItemsFull as $row) {
            $prodName = $row['name'] ?: 'Product';
            if (!isset($oldProductsMapped[$prodName])) {
                $oldProductsMapped[$prodName] = ['quantity' => '0', 'price' => $row['price'], 'cost' => $row['cost'], 'product_id' => $row['product_id'], 'item_ids' => []];
            }
            $oldProductsMapped[$prodName]['quantity'] = Decimal::add((string)$oldProductsMapped[$prodName]['quantity'], (string)$row['quantity']);
            $oldProductsMapped[$prodName]['item_ids'][] = (int)$row['item_id'];
        }

        // Delete old items
        $stmt = $db->prepare('DELETE FROM order_items WHERE order_id = :id');
        $stmt->execute(['id' => $id]);

        $changes = [];
        
        // Helper: resolve a customer id to "Name UID" or null
        $resolveCustomer = function($cid) use ($db) {
            if ($cid === null || $cid === '') return null;
            $cs = $db->prepare('SELECT name, uid FROM customers WHERE id = :id LIMIT 1');
            $cs->execute(['id' => $cid]);
            $row = $cs->fetch();
            return $row ? trim(($row['name'] ?? '') . ' ' . ($row['uid'] ?? '')) : "ID:$cid";
        };

        $resolvedCustomerId = !empty($data['customer_id']) ? (int)$data['customer_id'] : (int)$order['customer_id'];
        if (!empty($data['customer_id'])) {
            $chkCust = $db->prepare('SELECT id FROM customers WHERE id = :id AND deleted_at IS NULL LIMIT 1');
            $chkCust->execute(['id' => (int)$data['customer_id']]);
            if (!$chkCust->fetch()) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Customer not found or has been deleted'], 400);
                return;
            }
        }

        // Track basic fields and Amount Customer Paid (stored as total)
        $fieldsToTrack = [
            'service_name' => ['label' => 'Service Name', 'new' => $data['service_name'] ?? null, 'isPrice' => false],
            'service_description' => ['label' => 'Service Description', 'new' => $data['service_description'] ?? null, 'isPrice' => false],
            'provider_name' => ['label' => 'Service Provider', 'new' => $data['provider_name'] ?? null, 'isPrice' => false],
            'customer_id' => ['label' => 'Customer', 'new' => $resolvedCustomerId, 'isPrice' => false, 'isCustomer' => true],
            'total' => ['label' => 'Amount Customer Paid', 'new' => $total, 'isPrice' => true]
        ];
        foreach ($fieldsToTrack as $key => $settings) {
            $oldValue = $order[$key] ?? '';
            $newValue = $settings['new'];
            $normalizedNew = ($newValue === '' || $newValue === null) ? null : (string)$newValue;
            $normalizedOld = ($oldValue === '' || $oldValue === null) ? null : (string)$oldValue;

            if ($settings['isPrice']) {
                 if (Decimal::comp($normalizedOld, $normalizedNew) !== 0) {
                     $changes[$settings['label']] = [
                         'from' => $normalizedOld ? number_format((float)$normalizedOld, 2) : '0.00',
                         'to' => $normalizedNew ? number_format((float)$normalizedNew, 2) : '0.00'
                     ];
                 }
            } else if (!empty($settings['isCustomer'])) {
                if ($normalizedOld !== $normalizedNew) {
                    $changes[$settings['label']] = [
                        'from' => $resolveCustomer($normalizedOld),
                        'to'   => $resolveCustomer($normalizedNew),
                    ];
                }
            } else {
                if ($normalizedOld !== $normalizedNew) {
                    $changes[$settings['label']] = ['from' => $normalizedOld, 'to' => $normalizedNew];
                }
            }
        }
        
        // Track Manual Costs exactly by index
        $oldManualCostsObj = json_decode($order['manual_costs_data'] ?? '[]', true) ?: [];
        $newManualCostsObj = json_decode($resolvedCosts['manual_costs_data'] ?? '[]', true) ?: [];
        
        $maxCosts = max(count($oldManualCostsObj), count($newManualCostsObj));
        for ($i = 0; $i < $maxCosts; $i++) {
            $oldC = $oldManualCostsObj[$i] ?? null;
            $newC = $newManualCostsObj[$i] ?? null;
            
            $oldDesc = $oldC['description'] ?? '';
            $oldAmt = $oldC['amount'] ?? 0;
            $newDesc = $newC['description'] ?? '';
            $newAmt = $newC['amount'] ?? 0;
            
            if ($oldC && !$newC) {
                $changes["Manual Cost #".($i+1)." Removed"] = ['from' => trim("$oldDesc (" . number_format((float)$oldAmt, 2) . ")"), 'to' => 'Removed'];
            } else if (!$oldC && $newC) {
                $changes["Manual Cost #".($i+1)." Added"] = ['from' => 'Empty', 'to' => trim("$newDesc (" . number_format((float)$newAmt, 2) . ")")];
            } else if ($oldC && $newC) {
                if ($oldDesc !== $newDesc) {
                    $changes["Manual Cost #".($i+1)." Description"] = ['from' => $oldDesc ?: 'Empty', 'to' => $newDesc ?: 'Empty'];
                }
                if (Decimal::comp($oldAmt, $newAmt) !== 0) {
                    $changes["Manual Cost #".($i+1)." Amount"] = ['from' => number_format((float)$oldAmt, 2), 'to' => number_format((float)$newAmt, 2)];
                }
            }
        }

        // Track Collaborators / Partner Shares
        $oldOwnersData = json_decode($order['service_owners_data'] ?? '[]', true) ?: [];
        $newOwnersData = is_array($data['service_owners_data'] ?? null) ? $data['service_owners_data'] : (
            is_string($data['service_owners_data'] ?? null) ? (json_decode($data['service_owners_data'], true) ?: []) : []
        );

        $oldOwnersMap = [];
        foreach ($oldOwnersData as $o) {
            $uId = (string)($o['user_id'] ?? $o['userId'] ?? '');
            if ($uId !== '') {
                $oldOwnersMap[$uId] = $o;
            }
        }
        $newOwnersMap = [];
        foreach ($newOwnersData as $o) {
            $uId = (string)($o['user_id'] ?? $o['userId'] ?? '');
            if ($uId !== '') {
                $newOwnersMap[$uId] = $o;
            }
        }

        foreach ($oldOwnersMap as $uId => $oldO) {
            $name = $oldO['name'] ?? "Partner #{$uId}";
            if (!isset($newOwnersMap[$uId])) {
                $changes["Collaborator Removed: {$name}"] = [
                    'from' => "Share: " . ($oldO['share_pct'] ?? '0') . "%",
                    'to'   => 'Removed from custom service team'
                ];
            } else {
                $newO = $newOwnersMap[$uId];
                $oldShare = (string)($oldO['share_pct'] ?? '0');
                $newShare = (string)($newO['share_pct'] ?? '0');
                if (Decimal::comp($oldShare, $newShare) !== 0) {
                    $changes["Collaborator Share: {$name}"] = [
                        'from' => "{$oldShare}%",
                        'to'   => "{$newShare}%"
                    ];
                }
            }
        }
        foreach ($newOwnersMap as $uId => $newO) {
            $name = $newO['name'] ?? "Partner #{$uId}";
            if (!isset($oldOwnersMap[$uId])) {
                $changes["Collaborator Added: {$name}"] = [
                    'from' => null,
                    'to'   => "Role: " . ($newO['role'] ?? 'Collaborator') . ", Share: " . ($newO['share_pct'] ?? '0') . "%"
                ];
            }
        }

        // Track Service Owner Change
        $oldOwnerId = (int)($order['owner_user_id'] ?? $order['created_by'] ?? 0);
        $newOwnerId = isset($data['owner_user_id']) ? (int)$data['owner_user_id'] : $oldOwnerId;
        if ($oldOwnerId !== $newOwnerId && $newOwnerId > 0) {
            $changes["Service Owner Changed"] = [
                'from' => "User #{$oldOwnerId}",
                'to'   => "User #{$newOwnerId}"
            ];
        }

        // Track Custom Checklist & Attachments exactly
        $oldChecklistObj = json_decode($order['custom_checklist'] ?? '[]', true) ?: [];
        $newChecklistObj = is_array($data['custom_checklist'] ?? null) ? $data['custom_checklist'] : [];
        
        $oldChecklistMapped = [];
        foreach ($oldChecklistObj as $item) {
            $desc = trim($item['text'] ?? '');
            if ($desc !== '') {
                $status = $item['status'] ?? 'pending';
                $docType = $item['docType'] ?? 'not_set';
                $fileName = trim($item['fileName'] ?? '');
                $atts = is_array($item['attachments'] ?? null) ? $item['attachments'] : [];
                $attCount = count($atts);
                $hasFile = !empty($item['fileData']) || !empty($fileName) || $attCount > 0;
                if ($attCount > 0 && empty($fileName)) {
                    $fileName = $attCount === 1 ? ($atts[0]['fileName'] ?? 'Document') : ($attCount . ' attachments');
                }
                $oldChecklistMapped[$desc] = [
                    'status' => $status,
                    'docType' => $docType,
                    'fileName' => $fileName,
                    'hasFile' => $hasFile
                ];
            }
        }
        $newChecklistMapped = [];
        foreach ($newChecklistObj as $item) {
            $desc = trim($item['text'] ?? '');
            if ($desc !== '') {
                $status = $item['status'] ?? 'pending';
                $docType = $item['docType'] ?? 'not_set';
                $fileName = trim($item['fileName'] ?? '');
                $atts = is_array($item['attachments'] ?? null) ? $item['attachments'] : [];
                $attCount = count($atts);
                $hasFile = !empty($item['fileData']) || !empty($fileName) || $attCount > 0;
                if ($attCount > 0 && empty($fileName)) {
                    $fileName = $attCount === 1 ? ($atts[0]['fileName'] ?? 'Document') : ($attCount . ' attachments');
                }
                $newChecklistMapped[$desc] = [
                    'status' => $status,
                    'docType' => $docType,
                    'fileName' => $fileName,
                    'hasFile' => $hasFile
                ];
            }
        }
        
        foreach ($oldChecklistMapped as $desc => $oldVals) {
            if (!isset($newChecklistMapped[$desc])) {
                $changes["Checklist Item Removed: " . $desc] = ['from' => 'Item existed', 'to' => 'Item removed'];
            } else {
                $newVals = $newChecklistMapped[$desc];
                if ($oldVals['status'] !== $newVals['status']) {
                    $changes["Checklist Status - " . $desc] = ['from' => $oldVals['status'], 'to' => $newVals['status']];
                }
                if ($oldVals['docType'] !== $newVals['docType']) {
                    $changes["Checklist DocType - " . $desc] = ['from' => $oldVals['docType'], 'to' => $newVals['docType']];
                }
                // Attachment diff
                if (!$oldVals['hasFile'] && $newVals['hasFile']) {
                    $changes["Checklist Attachment - " . $desc] = [
                        'from' => 'None',
                        'to' => 'Attached: ' . ($newVals['fileName'] ?: 'Document')
                    ];
                } else if ($oldVals['hasFile'] && !$newVals['hasFile']) {
                    $changes["Checklist Attachment - " . $desc] = [
                        'from' => 'Attached: ' . ($oldVals['fileName'] ?: 'Document'),
                        'to' => 'Removed'
                    ];
                } else if ($oldVals['hasFile'] && $newVals['hasFile'] && $oldVals['fileName'] !== $newVals['fileName']) {
                    $changes["Checklist Attachment - " . $desc] = [
                        'from' => 'Attached: ' . ($oldVals['fileName'] ?: 'Previous Document'),
                        'to' => 'Attached: ' . ($newVals['fileName'] ?: 'New Document')
                    ];
                }
            }
        }
        foreach ($newChecklistMapped as $desc => $newVals) {
            if (!isset($oldChecklistMapped[$desc])) {
                $attachDetail = $newVals['hasFile'] ? (', Attachment: ' . ($newVals['fileName'] ?: 'Document')) : '';
                $changes["Checklist Item Added: " . $desc] = [
                    'from' => null,
                    'to' => "Status: {$newVals['status']}, DocType: {$newVals['docType']}{$attachDetail}"
                ];
            }
        }
        // Preserve unhydrated fileData if an attachment was kept by user but fileData wasn't resent over wire
        if (isset($data['custom_checklist']) && is_array($data['custom_checklist'])) {
            $sanitizedChecklist = [];
            foreach ($data['custom_checklist'] as $newItem) {
                $newDesc = trim($newItem['text'] ?? '');
                $newId = $newItem['id'] ?? null;

                // Find matching item in old checklist
                $oldItem = null;
                foreach ($oldChecklistObj as $oi) {
                    if (($newId && isset($oi['id']) && $oi['id'] === $newId) ||
                        ($newDesc !== '' && trim($oi['text'] ?? '') === $newDesc)) {
                        $oldItem = $oi;
                        break;
                    }
                }

                if ($oldItem) {
                    // Check if newItem has empty fileData but oldItem had fileData and same fileName
                    if (empty($newItem['fileData']) && !empty($oldItem['fileData']) &&
                        !empty($newItem['fileName']) && ($newItem['fileName'] === ($oldItem['fileName'] ?? ''))) {
                        $newItem['fileData'] = $oldItem['fileData'];
                    }

                    // Also check attachments array
                    if (isset($newItem['attachments']) && is_array($newItem['attachments'])) {
                        $oldAtts = is_array($oldItem['attachments'] ?? null) ? $oldItem['attachments'] : [];
                        foreach ($newItem['attachments'] as &$newAtt) {
                            if (empty($newAtt['fileData'])) {
                                foreach ($oldAtts as $oldAtt) {
                                    $sameId = !empty($newAtt['id']) && !empty($oldAtt['id']) && $newAtt['id'] === $oldAtt['id'];
                                    $sameName = !empty($newAtt['fileName']) && !empty($oldAtt['fileName']) && $newAtt['fileName'] === $oldAtt['fileName'];
                                    if ($sameId || $sameName) {
                                        if (!empty($oldAtt['fileData'])) {
                                            $newAtt['fileData'] = $oldAtt['fileData'];
                                        }
                                        break;
                                    }
                                }
                            }
                        }
                        unset($newAtt);
                    }
                }
                $sanitizedChecklist[] = $newItem;
            }
            $newCustomChecklist = json_encode($sanitizedChecklist);
            self::syncOrderAttachments($db, (int)$id, $sanitizedChecklist, (int)($_SESSION['user_id'] ?? $order['created_by']));
        } else if (isset($data['custom_checklist'])) {
            $newCustomChecklist = is_string($data['custom_checklist']) ? $data['custom_checklist'] : json_encode($data['custom_checklist']);
        } else {
            $newCustomChecklist = $order['custom_checklist'] ?? null;
        }

        $isPhase2Locked = $isAgreementLocked;

        if ($order['status'] === 'completed') {
            // Customer cannot change
            if (isset($changes['Customer'])) {
                $db->rollBack();
                Response::json(['error' => "Cannot change the customer of a completed order"], 400);
                return;
            }
        }

        // Walk-in buyer note: only overwrite when the field is present in the
        // payload so a normal edit of a non-walk-in order leaves it untouched.
        $customerNote = array_key_exists('customer_note', $data)
            ? (trim((string) $data['customer_note']) !== '' ? trim((string) $data['customer_note']) : null)
            : ($order['customer_note'] ?? null);

        // Per-user cost/profit owner: keep the existing owner unless the payload
        // sends a valid new one. Track the reassignment in the order history.
        $oldOwnerId = $order['owner_user_id'] !== null ? (int) $order['owner_user_id'] : null;
        $newOwnerId = $this->resolveOwnerUserId($db, $data, $oldOwnerId);
        if ($oldOwnerId !== $newOwnerId) {
            $resolveUserName = function ($uid) use ($db) {
                if ($uid === null) return 'Unassigned';
                $us = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                $us->execute(['id' => $uid]);
                $row = $us->fetch();
                return $row ? $row['username'] : "User #$uid";
            };
            $changes['Owner'] = ['from' => $resolveUserName($oldOwnerId), 'to' => $resolveUserName($newOwnerId)];
        }

        // Owner-Only Discount Authority: Only the designated Service Owner can lower the total price (grant a discount)
        if ($isPhase2Locked && Decimal::comp($total, (string)($order['total'] ?? '0')) < 0) {
            if ($sessionUid !== (int)$newOwnerId) {
                $db->rollBack();
                Response::json(['error' => 'Only the designated Service Owner is authorized to grant a discount or reduce the total service price.'], 403);
                return;
            }
        }

        // Calculate parts owner profit, service profit, and parts cost reimbursement sums
        $updPartsOwnerProfitSum = '0';
        $updServiceOwnerProfitSum = '0';
        $updPartsCostReimbursementSum = '0';
        foreach ($items as $itm) {
            $ownerPrf = isset($itm['product_owner_profit']) ? (string)$itm['product_owner_profit'] : (isset($itm['ownerProfit']) ? (string)$itm['ownerProfit'] : '0');
            $srvPrf = isset($itm['service_owner_profit']) ? (string)$itm['service_owner_profit'] : (isset($itm['serviceProfit']) ? (string)$itm['serviceProfit'] : '0');
            $itmCost = Decimal::mul((string)($itm['cost'] ?? '0'), (string)($itm['quantity'] ?? '0'));
            $updPartsOwnerProfitSum = Decimal::add($updPartsOwnerProfitSum, $ownerPrf);
            $updServiceOwnerProfitSum = Decimal::add($updServiceOwnerProfitSum, $srvPrf);
            $updPartsCostReimbursementSum = Decimal::add($updPartsCostReimbursementSum, $itmCost);
        }

        $partsOwnerProfit = isset($data['parts_owner_profit']) ? (string)$data['parts_owner_profit'] : $updPartsOwnerProfitSum;
        $manualCostsProfit = $resolvedCosts['manual_costs_profit'] ?? '0';
        $netLaborProfit = Decimal::sub(Decimal::sub($profit, $partsOwnerProfit), $manualCostsProfit);
        if (Decimal::comp($netLaborProfit, '0') < 0) $netLaborProfit = '0';
        $serviceOwnerProfit = isset($data['service_owner_profit']) && Decimal::comp((string)$data['service_owner_profit'], '0') > 0
            ? (Decimal::comp((string)$data['service_owner_profit'], $netLaborProfit) > 0 ? $netLaborProfit : (string)$data['service_owner_profit'])
            : $netLaborProfit;
        $partsCostReimbursement = isset($data['parts_cost_reimbursement']) ? (string)$data['parts_cost_reimbursement'] : $updPartsCostReimbursementSum;
        $serviceOwnersData = $this->resolveServiceOwners($data, (int)($newOwnerId ?: ($order['owner_user_id'] ?? 1)), $serviceOwnerProfit);
        if ($serviceOwnersData === null && !empty($order['service_owners_data'])) {
            $serviceOwnersData = $order['service_owners_data'];
        }

        // Phase 2 Collaborator Invariant & Surplus Routing:
        // When updating in Phase 2, existing external collaborators' agreed baseline profits are strictly preserved as a floor.
        // Any surplus labor profit flows 100% to the lead owner, while collaborator profit can only stay equal or be voluntarily increased.
        if ($isPhase2Locked && !empty($order['service_owners_data'])) {
            $oldCollabArr = json_decode($order['service_owners_data'], true) ?: [];
            $newCollabArr = json_decode($serviceOwnersData ?? '[]', true) ?: [];

            $oldCollabMetaByUid = [];
            foreach ($oldCollabArr as $oc) {
                $ocUid = (int)($oc['user_id'] ?? 0);
                if ($ocUid > 0 && $ocUid !== (int)$newOwnerId) {
                    $oldBaseline = (string)($oc['baseline_profit'] ?? $oc['profit'] ?? $oc['labor_profit'] ?? '0');
                    $oldCollabMetaByUid[$ocUid] = [
                        'baseline_profit' => $oldBaseline,
                        'current_profit' => (string)($oc['profit'] ?? $oc['labor_profit'] ?? $oldBaseline),
                        'role' => $oc['role'] ?? 'Collaborator',
                    ];
                }
            }

            if (!empty($oldCollabMetaByUid)) {
                $incomingByUid = [];
                foreach ($newCollabArr as $nc) {
                    $ncUid = (int)($nc['user_id'] ?? 0);
                    if ($ncUid > 0) {
                        $incomingByUid[$ncUid] = $nc;
                    }
                }

                $reconciledCollabs = [];
                $totalCollabShares = '0';

                foreach ($oldCollabMetaByUid as $cUid => $cMeta) {
                    $baseProfit = $cMeta['baseline_profit'];
                    $targetProfit = $baseProfit;

                    if (isset($incomingByUid[$cUid])) {
                        $inc = $incomingByUid[$cUid];
                        $requestedProfit = (string)($inc['profit'] ?? $inc['labor_profit'] ?? $baseProfit);
                        // In Phase 2: collaborator profit can be kept at baseline or voluntarily increased, but NEVER dropped below baseline!
                        if (Decimal::comp($requestedProfit, $baseProfit) > 0) {
                            $targetProfit = $requestedProfit;
                        } else {
                            $targetProfit = $baseProfit;
                        }
                    }

                    // Cap targetProfit if it exceeds total serviceOwnerProfit
                    if (Decimal::comp($targetProfit, $serviceOwnerProfit) > 0) {
                        $targetProfit = $serviceOwnerProfit;
                    }

                    $projected = Decimal::add($totalCollabShares, $targetProfit);
                    if (Decimal::comp($projected, $serviceOwnerProfit) > 0) {
                        $targetProfit = Decimal::sub($serviceOwnerProfit, $totalCollabShares);
                        if (Decimal::comp($targetProfit, '0') < 0) $targetProfit = '0';
                    }
                    $totalCollabShares = Decimal::add($totalCollabShares, $targetProfit);

                    $reconciledCollabs[] = [
                        'user_id' => $cUid,
                        'role' => $incomingByUid[$cUid]['role'] ?? $cMeta['role'],
                        'split_mode' => 'fixed',
                        'share_pct' => Decimal::comp($serviceOwnerProfit, '0') > 0 ? Decimal::mul(Decimal::div($targetProfit, $serviceOwnerProfit), '100') : '0',
                        'profit' => $targetProfit,
                        'labor_profit' => $targetProfit,
                        'baseline_profit' => $baseProfit,
                    ];
                }

                // Any newly added collaborators in Phase 2
                foreach ($newCollabArr as $nc) {
                    $ncUid = (int)($nc['user_id'] ?? 0);
                    if ($ncUid > 0 && $ncUid !== (int)$newOwnerId && !isset($oldCollabMetaByUid[$ncUid])) {
                        $targetProfit = (string)($nc['profit'] ?? $nc['labor_profit'] ?? '0');
                        if (Decimal::comp($targetProfit, '0') > 0) {
                            $projected = Decimal::add($totalCollabShares, $targetProfit);
                            if (Decimal::comp($projected, $serviceOwnerProfit) > 0) {
                                $targetProfit = Decimal::sub($serviceOwnerProfit, $totalCollabShares);
                                if (Decimal::comp($targetProfit, '0') < 0) $targetProfit = '0';
                            }
                            $totalCollabShares = Decimal::add($totalCollabShares, $targetProfit);

                            $reconciledCollabs[] = [
                                'user_id' => $ncUid,
                                'role' => $nc['role'] ?? 'Collaborator',
                                'split_mode' => 'fixed',
                                'share_pct' => Decimal::comp($serviceOwnerProfit, '0') > 0 ? Decimal::mul(Decimal::div($targetProfit, $serviceOwnerProfit), '100') : '0',
                                'profit' => $targetProfit,
                                'labor_profit' => $targetProfit,
                                'baseline_profit' => $targetProfit,
                            ];
                        }
                    }
                }

                // Lead Owner absorbs 100% of the surplus or remaining labor profit
                $leadShare = Decimal::sub($serviceOwnerProfit, $totalCollabShares);
                if (Decimal::comp($leadShare, '0') < 0) $leadShare = '0';
                $leadUid = (int)$newOwnerId;
                $leadPct = Decimal::comp($serviceOwnerProfit, '0') > 0 ? Decimal::mul(Decimal::div($leadShare, $serviceOwnerProfit), '100') : '100';

                $finalTeam = [];
                $finalTeam[] = [
                    'user_id' => $leadUid,
                    'role' => $incomingByUid[$leadUid]['role'] ?? ($oldCollabArr[0]['role'] ?? 'Lead Technician'),
                    'split_mode' => 'fixed',
                    'share_pct' => $leadPct,
                    'profit' => $leadShare,
                    'labor_profit' => $leadShare,
                    'baseline_profit' => isset($oldCollabArr[0]['baseline_profit']) ? (string)$oldCollabArr[0]['baseline_profit'] : $leadShare,
                ];

                foreach ($reconciledCollabs as $rc) {
                    $finalTeam[] = $rc;
                }

                $serviceOwnersData = json_encode($finalTeam);
            }
        }

        if ($isPhase2Locked) {
            // Baseline Protection: strictly verify no owner changes on locked custom services
            if (!empty($order['custom_sale']) && $oldOwnerId !== $newOwnerId) {
                $db->rollBack();
                Response::json(['error' => 'Cannot change service owner: All participants have accepted the agreement.'], 422);
                return;
            }

            // Fetch existing settlements for this order to distinguish agreed (accepted) vs unaccepted (pending/refused) Phase 2 items
            $existingPsStmt = $db->prepare("SELECT id, payee_user_id, settlement_type, acceptance_status, removal_request_status, status, details FROM partner_settlements WHERE related_entity_type = 'orders' AND related_entity_id = :oid AND status != 'cancelled'");
            $existingPsStmt->execute(['oid' => (int)$id]);
            $existingPsRows = $existingPsStmt->fetchAll(PDO::FETCH_ASSOC);

            // 1. Manual Costs Protection & Phase 2 Unaccepted Removal
            foreach ($oldManualCostsObj as $oldIdx => $oldMc) {
                $oldAmt = (string)($oldMc['amount'] ?? '0');
                $oldDesc = trim((string)($oldMc['description'] ?? ''));
                $oldPayer = (int)($oldMc['paid_by_user_id'] ?? $oldMc['payer_user_id'] ?? $order['owner_user_id'] ?? 1);

                // Find corresponding settlement for this manual cost index
                $mcSettlements = [];
                foreach ($existingPsRows as $psRow) {
                    if (in_array($psRow['settlement_type'], ['manual_cost_recovery', 'manual_outlay_recovery', 'manual_cost_markup'], true)) {
                        $det = !empty($psRow['details']) ? json_decode($psRow['details'], true) : [];
                        if (isset($det['cost_index']) && (int)$det['cost_index'] === (int)$oldIdx) {
                            $mcSettlements[] = $psRow;
                        }
                    }
                }

                $isMcAgreed = false;
                if (empty($mcSettlements)) {
                    $isMcAgreed = true;
                } else {
                    foreach ($mcSettlements as $mcPs) {
                        if (($mcPs['acceptance_status'] ?? '') === 'accepted' && ($mcPs['removal_request_status'] ?? 'none') !== 'accepted') {
                            $isMcAgreed = true;
                            break;
                        }
                    }
                }

                // Match in $newManualCostsObj (either at same index or by matching description + payer)
                $matchedNewMc = null;
                if (isset($newManualCostsObj[$oldIdx]) && (int)($newManualCostsObj[$oldIdx]['paid_by_user_id'] ?? $newManualCostsObj[$oldIdx]['payer_user_id'] ?? $newOwnerId ?? 1) === $oldPayer) {
                    $matchedNewMc = $newManualCostsObj[$oldIdx];
                } else {
                    foreach ($newManualCostsObj as $candMc) {
                        $candPayer = (int)($candMc['paid_by_user_id'] ?? $candMc['payer_user_id'] ?? $newOwnerId ?? 1);
                        $candDesc = trim((string)($candMc['description'] ?? ''));
                        if ($candPayer === $oldPayer && $candDesc === $oldDesc) {
                            $matchedNewMc = $candMc;
                            break;
                        }
                    }
                }

                if ($matchedNewMc === null) {
                    if ($isMcAgreed) {
                        $db->rollBack();
                        Response::json(['error' => "Cannot remove existing agreed manual cost from a locked service (Cost #".($oldIdx+1).")"], 400);
                        return;
                    } else {
                        // Phase 2 unaccepted/refused (or removal-accepted) manual cost removed -> cancel its settlement immediately!
                        foreach ($mcSettlements as $mcPs) {
                            $db->prepare("UPDATE partner_settlements SET status = 'cancelled', updated_at = NOW() WHERE id = :id")->execute(['id' => $mcPs['id']]);
                        }
                        continue;
                    }
                }

                if ($isMcAgreed) {
                    $newAmt = (string)($matchedNewMc['amount'] ?? '0');
                    $newPayer = (int)($matchedNewMc['paid_by_user_id'] ?? $matchedNewMc['payer_user_id'] ?? $newOwnerId ?? 1);
                    if ($order['status'] === 'completed' && Decimal::comp($newAmt, $oldAmt) !== 0) {
                        $db->rollBack();
                        Response::json(['error' => "Cannot modify the amount of an existing manual cost on a completed order (Cost #".($oldIdx+1).")"], 400);
                        return;
                    }
                    if ($order['status'] !== 'completed' && Decimal::comp($newAmt, $oldAmt) < 0) {
                        $db->rollBack();
                        Response::json(['error' => "Cannot reduce the amount of an agreed manual cost (Cost #".($oldIdx+1).")"], 400);
                        return;
                    }
                    if ($oldPayer !== $newPayer) {
                        $db->rollBack();
                        Response::json(['error' => "Cannot reassign the payer of an agreed manual cost (Cost #".($oldIdx+1).")"], 400);
                        return;
                    }
                }
            }
            
            // 2. Products Protection & Phase 2 Unaccepted Removal
            $newItemsMapForCheck = [];
            $newItemsPidMapForCheck = [];
            foreach ($items as $item) {
                $name = $item['name'] ?? '';
                $pid = !empty($item['product_id']) ? (int)$item['product_id'] : null;
                $qty = (string) ($item['quantity'] ?? '0');
                if ($name !== '') {
                    $newItemsMapForCheck[$name] = Decimal::add($newItemsMapForCheck[$name] ?? '0', $qty);
                }
                if ($pid) {
                    $newItemsPidMapForCheck[$pid] = Decimal::add($newItemsPidMapForCheck[$pid] ?? '0', $qty);
                }
            }
            foreach ($oldProductsMapped as $name => $oldData) {
                $oldQty = (string)$oldData['quantity'];
                $oldPid = !empty($oldData['product_id']) ? (int)$oldData['product_id'] : null;
                $oldItemIds = $oldData['item_ids'] ?? [];

                // Check if this product's settlements were already accepted
                $prodSettlements = [];
                foreach ($existingPsRows as $psRow) {
                    if (in_array($psRow['settlement_type'], ['parts_cost_recovery', 'sale_cost_recovery', 'parts_profit_share'], true)) {
                        $det = !empty($psRow['details']) ? json_decode($psRow['details'], true) : [];
                        $detItemId = isset($det['order_item_id']) ? (int)$det['order_item_id'] : 0;
                        $detPid = isset($det['product_id']) ? (int)$det['product_id'] : 0;
                        if (($detItemId > 0 && in_array($detItemId, $oldItemIds, true)) || ($oldPid && $detPid === $oldPid)) {
                            $prodSettlements[] = $psRow;
                        }
                    }
                }

                $isProdAgreed = false;
                if (empty($prodSettlements)) {
                    $isProdAgreed = true;
                } else {
                    foreach ($prodSettlements as $pPs) {
                        if (($pPs['acceptance_status'] ?? '') === 'accepted' && ($pPs['removal_request_status'] ?? 'none') !== 'accepted') {
                            $isProdAgreed = true;
                            break;
                        }
                    }
                }

                $newQty = null;
                if ($oldPid && isset($newItemsPidMapForCheck[$oldPid])) {
                    $newQty = $newItemsPidMapForCheck[$oldPid];
                } elseif (isset($newItemsMapForCheck[$name])) {
                    $newQty = $newItemsMapForCheck[$name];
                }

                if ($newQty === null) {
                    if ($isProdAgreed) {
                        $db->rollBack();
                        Response::json(['error' => "Cannot remove agreed product '$name' from a locked service"], 400);
                        return;
                    } else {
                        // Phase 2 unaccepted/refused (or removal-accepted) product removed -> cancel its settlements immediately!
                        foreach ($prodSettlements as $pPs) {
                            $db->prepare("UPDATE partner_settlements SET status = 'cancelled', updated_at = NOW() WHERE id = :id")->execute(['id' => $pPs['id']]);
                        }
                        continue;
                    }
                }
                if ($isProdAgreed && Decimal::comp($newQty, $oldQty) < 0) {
                    $db->rollBack();
                    Response::json(['error' => "Cannot reduce quantity of agreed product '$name'"], 400);
                    return;
                }
            }

            // 3. Collaborators Protection & Phase 2 Unaccepted Removal
            $oldOwnersList = json_decode($order['service_owners_data'] ?? '[]', true) ?: [];
            $newOwnersList = json_decode($serviceOwnersData ?? '[]', true) ?: [];
            $oldOwnersProfitMap = [];
            foreach ($oldOwnersList as $oo) {
                $uid = (int)($oo['user_id'] ?? 0);
                if ($uid > 0 && $uid !== (int)$newOwnerId) {
                    $oldOwnersProfitMap[$uid] = (string)($oo['baseline_profit'] ?? $oo['profit'] ?? $oo['labor_profit'] ?? '0');
                }
            }
            $newOwnersProfitMap = [];
            foreach ($newOwnersList as $no) {
                $uid = (int)($no['user_id'] ?? 0);
                if ($uid > 0 && $uid !== (int)$newOwnerId) {
                    $newOwnersProfitMap[$uid] = (string)($no['profit'] ?? $no['labor_profit'] ?? '0');
                }
            }
            foreach ($oldOwnersProfitMap as $uid => $oldBaseline) {
                $chkCollab = $db->prepare("SELECT id, acceptance_status, removal_request_status, status FROM partner_settlements 
                    WHERE related_entity_type = 'orders' AND related_entity_id = :oid AND payee_user_id = :uid 
                      AND settlement_type = 'service_profit_share' ORDER BY id DESC LIMIT 1");
                $chkCollab->execute(['oid' => (int)$id, 'uid' => $uid]);
                $collabPs = $chkCollab->fetch(PDO::FETCH_ASSOC);

                $canModifyOrRemove = false;
                if (!$collabPs || ($collabPs['status'] ?? '') === 'cancelled' || ($collabPs['removal_request_status'] ?? 'none') === 'accepted' || in_array($collabPs['acceptance_status'] ?? '', ['pending', 'refused'], true)) {
                    $canModifyOrRemove = true;
                }

                if (!isset($newOwnersProfitMap[$uid])) {
                    if ($canModifyOrRemove) {
                        if ($collabPs && ($collabPs['status'] ?? '') !== 'cancelled') {
                            $db->prepare("UPDATE partner_settlements SET status = 'cancelled', updated_at = NOW() WHERE id = :id")->execute(['id' => $collabPs['id']]);
                        }
                        continue;
                    }
                    $db->rollBack();
                    Response::json(['error' => "Cannot remove agreed collaborator (User #$uid) from a locked service without accepted removal request"], 400);
                    return;
                }
                if (!$canModifyOrRemove && Decimal::comp($newOwnersProfitMap[$uid], $oldBaseline) < 0) {
                    $db->rollBack();
                    Response::json(['error' => "Cannot reduce agreed profit for collaborator (User #$uid) below Phase 1 baseline amount ($oldBaseline)"], 400);
                    return;
                }
            }

            $updAgreementVersion = (int)($order['agreement_version'] ?? 1);
            $updAgreementStatus = 'all_accepted';
            $updHasRefusal = 0;
            $updIsLockedForEdit = 1;
        } else {
            // Phase 1 Agreement Mode: terms edit resets agreement and increments version
            self::cancelPartnerSettlements($db, (int)$id, 'Terms modified during agreement phase');
            $updAgreementVersion = (int)($order['agreement_version'] ?? 1) + 1;

            // Re-detect 3-layer external partners + designated Owner
            $updHasExternalPartners = ((int)$newOwnerId !== $sessionUid);
            // Layer 1: Product inventory owners
            foreach ($items as &$itm) {
                $cOwner = !empty($itm['cost_owner_id']) ? (int)$itm['cost_owner_id'] : (!empty($itm['costOwnerId']) ? (int)$itm['costOwnerId'] : null);
                if ($cOwner === null && !empty($oldItems)) {
                    $pid = !empty($itm['product_id']) ? (int)$itm['product_id'] : null;
                    $batchId = !empty($itm['purchase_id']) ? (int)$itm['purchase_id'] : null;
                    $name = !empty($itm['name']) ? trim($itm['name']) : '';
                    foreach ($oldItems as $oldItm) {
                        $matchPid = $pid && !empty($oldItm['product_id']) && (int)$oldItm['product_id'] === $pid;
                        $matchBatch = $batchId && !empty($oldItm['purchase_id']) && (int)$oldItm['purchase_id'] === $batchId;
                        $matchName = $name !== '' && !empty($oldItm['name']) && trim($oldItm['name']) === $name;
                        if ($matchPid || $matchBatch || $matchName) {
                            if (!empty($oldItm['cost_owner_id'])) {
                                $cOwner = (int)$oldItm['cost_owner_id'];
                                $itm['cost_owner_id'] = $cOwner;
                                if (empty($itm['profit_split_type']) || $itm['profit_split_type'] === 'none') {
                                    $itm['profit_split_type'] = $oldItm['profit_split_type'] ?? 'none';
                                }
                                if ((empty($itm['product_owner_share_pct']) || $itm['product_owner_share_pct'] === '0') && isset($oldItm['product_owner_share_pct'])) {
                                    $itm['product_owner_share_pct'] = (string)$oldItm['product_owner_share_pct'];
                                }
                                if ((empty($itm['product_owner_profit']) || $itm['product_owner_profit'] === '0') && isset($oldItm['product_owner_profit'])) {
                                    $itm['product_owner_profit'] = (string)$oldItm['product_owner_profit'];
                                }
                                if ((empty($itm['service_owner_profit']) || $itm['service_owner_profit'] === '0') && isset($oldItm['service_owner_profit'])) {
                                    $itm['service_owner_profit'] = (string)$oldItm['service_owner_profit'];
                                }
                                break;
                            }
                        }
                    }
                }
                if ($cOwner === null && !empty($itm['purchase_id'])) {
                    $chkP = $db->prepare('SELECT owner_user_id FROM purchases WHERE id = :pid LIMIT 1');
                    $chkP->execute(['pid' => $itm['purchase_id']]);
                    $pBatchOwner = $chkP->fetchColumn();
                    if ($pBatchOwner && (int)$pBatchOwner !== $newOwnerId) {
                        $cOwner = (int)$pBatchOwner;
                        $itm['cost_owner_id'] = $cOwner;
                    }
                }
                if ($cOwner !== null && ($cOwner !== $newOwnerId || $cOwner !== $sessionUid)) {
                    $updHasExternalPartners = true;
                }
            }
            unset($itm);
            // Layer 2: Manual cost outlays
            if (!$updHasExternalPartners) {
                foreach ($newManualCostsObj as $mc) {
                    $payerId = !empty($mc['paid_by_user_id']) ? (int)$mc['paid_by_user_id'] : (!empty($mc['payer_user_id']) ? (int)$mc['payer_user_id'] : $newOwnerId);
                    if ($payerId !== $newOwnerId || $payerId !== $sessionUid) {
                        $updHasExternalPartners = true;
                        break;
                    }

/* [INTERNAL_RUNTIME_FRAMEWORK_TOKEN] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
                }
            }
            // Layer 3: Collaborators
            if (!$updHasExternalPartners) {
                $decodedOwners = json_decode($serviceOwnersData ?? '[]', true) ?: [];
                foreach ($decodedOwners as $so) {
                    $soUid = !empty($so['user_id']) ? (int)$so['user_id'] : $newOwnerId;
                    if ($soUid !== $newOwnerId || $soUid !== $sessionUid) {
                        $updHasExternalPartners = true;
                        break;
                    }
                }
            }

            $updAgreementStatus = $updHasExternalPartners ? 'pending' : 'all_accepted';
            $updHasRefusal = 0;
            $updIsLockedForEdit = 0;
        }

        $amountPaid = isset($data['amount_paid']) ? (string)$data['amount_paid'] : (isset($data['amountPaid']) ? (string)$data['amountPaid'] : (string)($order['amount_paid'] ?? '0'));
        if (Decimal::comp($amountPaid, '0') < 0) $amountPaid = '0';
        if (!$isPhase2Locked && $updHasExternalPartners) {
            // Rule 61 Invariant: Customer payment is strictly barred during Phase 1 negotiation
            $amountPaid = '0';
        }

        $stmt = $db->prepare('UPDATE orders SET customer_id = :customer_id, items_summary = :items_summary, total = :total, amount_paid = :amount_paid, profit = :profit, provider_name = :provider_name, service_name = :service_name, service_description = :service_description, manual_cost = :manual_cost, manual_costs_data = :manual_costs_data, service_owners_data = :service_owners_data, products_cost = :products_cost, custom_checklist = :custom_checklist, customer_note = :customer_note, owner_user_id = :owner_user_id, parts_owner_profit = :parts_owner_profit, service_owner_profit = :service_owner_profit, parts_cost_reimbursement = :parts_cost_reimbursement, agreement_status = :agreement_status, has_refusal = :has_refusal, is_locked_for_edit = :is_locked_for_edit, agreement_version = :agreement_version, device_model = :device_model, device_imei = :device_imei, device_passcode = :device_passcode, device_condition = :device_condition, device_custody_status = :device_custody_status, diagnostic_matrix = :diagnostic_matrix, handover_qc_matrix = :handover_qc_matrix, warranty_seal = :warranty_seal, warranty_period = :warranty_period, warranty_expiry_date = :warranty_expiry_date WHERE id = :id');
        $stmt->execute([
            'customer_id' => $resolvedCustomerId,
            'items_summary' => $data['items_summary'] ?? '',
            'total' => $total,
            'amount_paid' => $amountPaid,
            'profit' => $profit,
            'provider_name' => $data['provider_name'] ?? null,
            'service_name' => $data['service_name'] ?? null,
            'service_description' => $data['service_description'] ?? null,
            'manual_cost' => $resolvedCosts['manual_cost'],
            'manual_costs_data' => $resolvedCosts['manual_costs_data'],
            'service_owners_data' => $serviceOwnersData,
            'products_cost' => $productsCost,
            'custom_checklist' => $newCustomChecklist,
            'customer_note' => $customerNote,
            'owner_user_id' => $newOwnerId,
            'parts_owner_profit' => $partsOwnerProfit,
            'service_owner_profit' => $serviceOwnerProfit,
            'parts_cost_reimbursement' => $partsCostReimbursement,
            'agreement_status' => $updAgreementStatus,
            'has_refusal' => $updHasRefusal,
            'is_locked_for_edit' => $updIsLockedForEdit,
            'agreement_version' => $updAgreementVersion,
            'device_model' => !empty($data['device_model']) ? trim((string)$data['device_model']) : ($order['device_model'] ?? null),
            'device_imei' => !empty($data['device_imei']) ? trim((string)$data['device_imei']) : ($order['device_imei'] ?? null),
            'device_passcode' => !empty($data['device_passcode']) ? trim((string)$data['device_passcode']) : ($order['device_passcode'] ?? null),
            'device_condition' => !empty($data['device_condition']) ? trim((string)$data['device_condition']) : ($order['device_condition'] ?? null),
            'device_custody_status' => !empty($data['device_custody_status']) ? trim((string)$data['device_custody_status']) : ($order['device_custody_status'] ?? 'on_me'),
            'diagnostic_matrix' => isset($data['diagnostic_matrix']) ? (is_string($data['diagnostic_matrix']) ? $data['diagnostic_matrix'] : json_encode($data['diagnostic_matrix'])) : ($order['diagnostic_matrix'] ?? null),
            'handover_qc_matrix' => isset($data['handover_qc_matrix']) ? (is_string($data['handover_qc_matrix']) ? $data['handover_qc_matrix'] : json_encode($data['handover_qc_matrix'])) : ($order['handover_qc_matrix'] ?? null),
            'warranty_seal' => !empty($data['warranty_seal']) ? trim((string)$data['warranty_seal']) : ($order['warranty_seal'] ?? null),
            'warranty_period' => !empty($data['warranty_period']) ? trim((string)$data['warranty_period']) : ($order['warranty_period'] ?? null),
            'warranty_expiry_date' => !empty($data['warranty_expiry_date']) ? (string)$data['warranty_expiry_date'] : ($order['warranty_expiry_date'] ?? null),
            'id' => $id
        ]);

        foreach ($items as $item) {
            $productId = !empty($item['product_id']) ? $item['product_id'] : null;
            $purchaseId = !empty($item['purchase_id']) ? $item['purchase_id'] : null;
            $quantity = (string) ($item['quantity'] ?? '0');

            if (Decimal::comp($quantity, '0') <= 0) {
                $db->rollBack();
                Response::json(['error' => 'Quantity must be positive'], 400);
                return;
            }

            $itemPrice = (string) ($item['price'] ?? '0');
            if (!is_numeric($itemPrice) || Decimal::comp($itemPrice, '0') < 0) {
                $db->rollBack();
                Response::json(['error' => 'Item price cannot be negative'], 400);
                return;
            }

            if ($productId) {
                $stmt = $db->prepare('SELECT id FROM products WHERE id = :id');
                $stmt->execute(['id' => $productId]);
                if (!$stmt->fetch()) {
                    $db->rollBack();
                    Response::json(['error' => 'Product not found'], 404);
                    return;
                }
            }

            if ($purchaseId) {
                $stmt = $db->prepare('SELECT id, transfer_status FROM purchases WHERE id = :id');
                $stmt->execute(['id' => $purchaseId]);
                $purchaseBatch = $stmt->fetch();
                if (!$purchaseBatch) {
                    $db->rollBack();
                    Response::json(['error' => 'Purchase batch not found'], 404);
                    return;
                }
                if (!empty($purchaseBatch['transfer_status']) && in_array($purchaseBatch['transfer_status'], ['pending_transfer', 'pending_delegated'])) {
                    $db->rollBack();
                    Response::json(['error' => 'This purchase batch is currently locked in a pending status and cannot be sold.'], 422);
                    return;
                }
            }

            $price = isset($item['price']) ? (string)$item['price'] : '0';
            $cost = isset($item['cost']) ? (string)$item['cost'] : '0';

            $itemOwner = !empty($item['owner_user_id']) ? (int)$item['owner_user_id'] : $newOwnerId;
            $costOwnerId = !empty($item['cost_owner_id']) ? (int)$item['cost_owner_id'] : (!empty($item['costOwnerId']) ? (int)$item['costOwnerId'] : null);
            $profitSplitType = !empty($item['profit_split_type']) ? (string)$item['profit_split_type'] : (!empty($item['splitType']) ? (string)$item['splitType'] : 'none');
            $productOwnerSharePct = isset($item['product_owner_share_pct']) ? (string)$item['product_owner_share_pct'] : (isset($item['ownerSharePct']) ? (string)$item['ownerSharePct'] : '0');
            $productOwnerProfit = isset($item['product_owner_profit']) ? (string)$item['product_owner_profit'] : (isset($item['ownerProfit']) ? (string)$item['ownerProfit'] : '0');
            $serviceOwnerProfit = isset($item['service_owner_profit']) ? (string)$item['service_owner_profit'] : (isset($item['serviceProfit']) ? (string)$item['serviceProfit'] : '0');

            $stmtInsertItem = $db->prepare('INSERT INTO order_items (order_id, product_id, purchase_id, name, price, quantity, cost, description, owner_user_id, cost_owner_id, profit_split_type, product_owner_share_pct, product_owner_profit, service_owner_profit) VALUES (:order_id, :product_id, :purchase_id, :name, :price, :quantity, :cost, :description, :owner_user_id, :cost_owner_id, :profit_split_type, :product_owner_share_pct, :product_owner_profit, :service_owner_profit)');
            $stmtInsertItem->execute([
                'order_id' => $id,
                'product_id' => $productId,
                'purchase_id' => $purchaseId,
                'name' => $item['name'] ?? '',
                'price' => $price,
                'quantity' => $quantity,
                'cost' => $cost,
                'description' => $item['description'] ?? null,
                'owner_user_id' => $itemOwner,
                'cost_owner_id' => $costOwnerId,
                'profit_split_type' => $profitSplitType,
                'product_owner_share_pct' => $productOwnerSharePct,
                'product_owner_profit' => $productOwnerProfit,
                'service_owner_profit' => $serviceOwnerProfit,
            ]);
        }
        
        // Finalize product diffing
        $newProductsMapped = [];
        if (!empty($items)) {
            // we need to re-fetch the names of the newly added products to match the old ones correctly
            $stmtNewItemsNames = $db->prepare('SELECT p.name, oi.quantity, oi.price, oi.cost FROM order_items oi JOIN products p ON oi.product_id = p.id WHERE oi.order_id = :id');
            $stmtNewItemsNames->execute(['id' => $id]);
            $newItemsFull = $stmtNewItemsNames->fetchAll();
            foreach ($newItemsFull as $row) {
                if (!isset($newProductsMapped[$row['name']])) {
                    $newProductsMapped[$row['name']] = ['quantity' => '0', 'price' => $row['price'], 'cost' => $row['cost']];
                }
                $newProductsMapped[$row['name']]['quantity'] = Decimal::add((string)$newProductsMapped[$row['name']]['quantity'], (string)$row['quantity']);
            }
        }

        $formatQty = function($qty) {
            $s = (string)$qty;
            if (strpos($s, '.') !== false) {
                $s = rtrim(rtrim($s, '0'), '.');
            }
            return $s === '' ? '0' : $s;
        };

        foreach ($oldProductsMapped as $name => $data) {
            $key = "Product: " . $name;
            $oldFormatted = sprintf("Cost: %s<br>Sold quantity: %s<br>Sold with: %s", number_format((float)$data['cost'], 2), $formatQty($data['quantity']), number_format((float)$data['price'], 2));
            if (!isset($newProductsMapped[$name])) {
                $changes[$key] = ['from' => $oldFormatted, 'to' => null];
            } else {
                $newData = $newProductsMapped[$name];
                $newFormatted = sprintf("Cost: %s<br>Sold quantity: %s<br>Sold with: %s", number_format((float)$newData['cost'], 2), $formatQty($newData['quantity']), number_format((float)$newData['price'], 2));
                if ($oldFormatted !== $newFormatted) {
                    $changes[$key] = ['from' => $oldFormatted, 'to' => $newFormatted];
                }
            }
        }
        foreach ($newProductsMapped as $name => $newData) {
            $key = "Product: " . $name;
            if (!isset($oldProductsMapped[$name])) {
                $newFormatted = sprintf("Cost: %s<br>Sold quantity: %s<br>Sold with: %s", number_format((float)$newData['cost'], 2), $formatQty($newData['quantity']), number_format((float)$newData['price'], 2));
                $changes[$key] = ['from' => null, 'to' => $newFormatted];
            }
        }

        if (!empty($changes)) {
            $historyAction = $order['status'] === 'completed' ? 'updated_after_completion' : 'updated';

            // Check if changes are specifically checklist items
            $checklistAdded = 0;
            $checklistRemoved = 0;
            $checklistAttAdded = 0;
            $otherChanges = 0;
            foreach ($changes as $k => $v) {
                if (strpos($k, 'Checklist Item Added') !== false) $checklistAdded++;
                elseif (strpos($k, 'Checklist Item Removed') !== false) $checklistRemoved++;
                elseif (strpos($k, 'Checklist Attachment') !== false) $checklistAttAdded++;
                else $otherChanges++;
            }
            if ($otherChanges === 0) {
                if ($checklistAdded > 0 && $checklistAttAdded > 0) $historyAction = 'item_with_attachments_added';
                elseif ($checklistAdded > 0) $historyAction = 'item_added';
                elseif ($checklistAttAdded > 0) $historyAction = 'attachment_added';
                elseif ($checklistRemoved > 0) $historyAction = 'item_removed';
            }

            $noteParts = [];
            if ($checklistAdded > 0) $noteParts[] = "Added {$checklistAdded} custody item(s)";
            if ($checklistAttAdded > 0) $noteParts[] = "Updated {$checklistAttAdded} attachment(s)";
            if ($checklistRemoved > 0) $noteParts[] = "Removed {$checklistRemoved} custody item(s)";
            if ($otherChanges > 0) $noteParts[] = "Updated {$otherChanges} service term(s)";
            $historyNote = !empty($noteParts) ? implode(', ', $noteParts) : 'Order details updated';

            $snapshot = self::captureOrderSnapshot($db, (int)$id);
            $historyStmt = $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, reason, note, snapshot, created_at) VALUES (:order_id, :edited_by, :action, :changes, :reason, :note, :snapshot, NOW())');
            $historyStmt->execute([
                'order_id' => $id,
                'edited_by' => $_SESSION['user_id'] ?? null,
                'action' => $historyAction,
                'changes' => json_encode($changes, JSON_UNESCAPED_UNICODE),
                'reason' => $historyNote,
                'note' => $historyNote,
                'snapshot' => !empty($snapshot) ? json_encode($snapshot, JSON_UNESCAPED_UNICODE) : null
            ]);
        }

        // Reserve new inventory
        $stmtNewItems = $db->prepare('SELECT product_id, purchase_id, quantity FROM order_items WHERE order_id = :id');
        $stmtNewItems->execute(['id' => $id]);
        $newItems = $stmtNewItems->fetchAll();

        // For completed orders, we need to release old and deduct new to immediately affect actual inventory
        if ($order['status'] === 'completed') {
            $error = $this->deductInventory($db, $newItems);
            if ($error) {
                $db->rollBack();
                Response::json(['error' => $error], 400);
                return;
            }
        } else {
            // Pending/Processing orders: reserve inventory
            $error = $this->reserveInventory($db, $newItems);
            if ($error) {
                $db->rollBack();
                Response::json(['error' => $error], 400);
                return;
            }
        }

        if (isset($order['custom_sale']) && $order['custom_sale'] == 1) {
            $minOwed = $this->computeMinimumOwedToOthers($db, (int)$id, (int)($newOwnerId ?: ($order['owner_user_id'] ?? 1)));
            if (Decimal::comp($total, $minOwed) < 0 && Decimal::comp($minOwed, '0') > 0) {
                $db->rollBack();
                Response::json(['error' => "Service Grand Total ({$total}) is below the minimum owed to product owners and collaborators ({$minOwed}). Adjust the price or remove cross-user items."], 400);
                return;
            }
        }

        // Generate / sync partner settlement tickets for all layers (and dispatch notifications)
        self::generatePartnerSettlements($db, (int)$id, $order['uid'] ?? "ORD-$id", (int)$newOwnerId);
        self::syncOrderAgreementStatus($db, (int)$id);

        // If ownership was transferred away from $oldOwnerId in Phase 1 and $oldOwnerId is no longer an active participant, notify $oldOwnerId
        if (!$isPhase2Locked && !empty($order['custom_sale']) && $oldOwnerId && $oldOwnerId !== $newOwnerId) {
            try {
                $editorId = (int)($_SESSION['user_id'] ?? 1);
                if ((int)$oldOwnerId !== $editorId) {
                    $chkStillIn = $db->prepare("SELECT COUNT(*) FROM partner_settlements WHERE related_entity_type = 'orders' AND related_entity_id = :oid AND status != 'cancelled' AND payee_user_id = :uid");
                    $chkStillIn->execute(['oid' => (int)$id, 'uid' => (int)$oldOwnerId]);
                    if ((int)$chkStillIn->fetchColumn() === 0) {
                        $serviceName = $data['service_name'] ?? $order['service_name'] ?? "Custom Service #$id";
                        $agrVer = (int)($updAgreementVersion ?? 2);
                        $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                        $uStmt->execute(['id' => (int)$editorId]);
                        $editorName = $uStmt->fetchColumn() ?: "Admin";
                        $uStmt->execute(['id' => (int)$newOwnerId]);
                        $newOwnerName = $uStmt->fetchColumn() ?: "Owner";
                        $stageTag = "statements:custom_service:owner_transferred:v{$agrVer}:{$oldOwnerId}";
                        $db->prepare('INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, "settlement", :t, :b, :aurl, "orders", :oid, :stag, 0, NOW())')
                           ->execute([
                               'uid'  => (int)$oldOwnerId,
                               't'    => "🔄 Service Ownership Transferred: {$serviceName}",
                               'b'    => "Service ownership for {$serviceName} was transferred to @{$newOwnerName} by @{$editorName}.",
                               'aurl' => "#order-details:{$id}",
                               'oid'  => (int)$id,
                               'stag' => $stageTag
                           ]);
                    }
                }
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        }

        $db->commit();

        SystemLog::write('orders', 'updated', (int)$id, $order['service_name'] ?? "Order #$id", json_encode(array_merge(
            ['uid' => $order['uid'] ?? null],
            $changes
        )));

        EntityVersion::bump($db, 'orders', 'partner_settlements', 'cash_vault');

        Response::json([
            'ok' => true,
            'total' => $total,
            'profit' => $profit,
            'products_cost' => $productsCost,
        ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("Failed to update order in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to update order. Please check server error logs.'], 500);
            return;
        }
    }

    /**
     * Reassign the per-user cost/profit owner of an order. Works for ANY order
     * (product sales included — unlike update(), which is custom-service only).
     * Records an order_history row + system log so the change is auditable.
     */
    public function reassignOwner(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);
        $this->ensureOrderHistoryTable($db);
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT id, uid, service_name, owner_user_id, amount_paid, deleted_at FROM orders WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $order = $stmt->fetch();
        if (!$order) {
            $db->rollBack();
            Response::json(['error' => 'Order not found'], 404);
            return;
        }
        if ($order['deleted_at'] !== null) {
            $db->rollBack();
            Response::json(['error' => 'Deleted orders cannot be reassigned', 'order_deleted' => true], 400);
            return;
        }

        // Absolute owner immutability: block order owner reassignment unconditionally
        $db->rollBack();
        Response::json(['error' => 'Order owner is permanently locked after creation and cannot be changed.'], 403);
        return;

        $resolveUserName = function ($uid) use ($db) {
            if ($uid === null) return 'Unassigned';
            $us = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
            $us->execute(['id' => $uid]);
            $row = $us->fetch();
            return $row ? $row['username'] : "User #$uid";
        };
        $changes = ['Owner' => ['from' => $resolveUserName($oldOwnerId), 'to' => $resolveUserName($newOwnerId)]];

        $upd = $db->prepare('UPDATE orders SET owner_user_id = :owner WHERE id = :id');
        $upd->execute(['owner' => $newOwnerId, 'id' => $id]);

        $historyStmt = $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())');
        $historyStmt->execute([
            'order_id' => $id,
            'edited_by' => $_SESSION['user_id'] ?? null,
            'action' => 'owner_changed',
            'changes' => json_encode($changes),
        ]);

        $db->commit();

        SystemLog::write('orders', 'owner_changed', (int) $id, $order['service_name'] ?? "Order #$id", json_encode(array_merge(
            ['uid' => $order['uid'] ?? null],
            $changes
        )));

        Response::json(['ok' => true, 'owner_user_id' => $newOwnerId]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("Failed to reassign owner in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to reassign owner. Please check server error logs.'], 500);
            return;
        }
    }

    private function ensureCustomerHistoryTable(PDO $db): void
    {
        $db->exec("CREATE TABLE IF NOT EXISTS customer_history (
            id INT AUTO_INCREMENT PRIMARY KEY,
            customer_id INT NOT NULL,
            edited_by INT NOT NULL,
            action VARCHAR(50) NOT NULL,
            changes JSON NULL,
            reason TEXT NULL,
            created_at DATETIME NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
    }

    /**
     * Reassign an order to a customer (or auto-create a new customer profile).
     * Supports transferring walk-in orders to newly created or existing customer profiles.
     */
    public function reassignCustomer(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);
        $this->ensureOrderHistoryTable($db);
        $this->ensureCustomerHistoryTable($db);
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT id, uid, service_name, customer_id, customer_note, status, deleted_at, owner_user_id, created_by FROM orders WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $order = $stmt->fetch();
        if (!$order) {
            $db->rollBack();
            Response::json(['error' => 'Order not found'], 404);
            return;
        }
        if ($order['deleted_at'] !== null || $order['status'] === 'deleted' || $order['status'] === 'returned') {
            $db->rollBack();
            Response::json(['error' => 'Deleted or returned orders cannot be reassigned to a customer', 'order_deleted' => true], 400);
            return;
        }

        // Rule 54: Strict Mentioned-User Mutation Isolation
        $sessionUid = (int)($_SESSION['user_id'] ?? 0);
        $mentionedUsers = self::getOrderMentionedUserIds($db, (int)$id, $order);
        if (!in_array($sessionUid, $mentionedUsers, true)) {
            $db->rollBack();
            Response::json(['error' => 'Forbidden: Only users mentioned on this order can reassign its customer.'], 403);
            return;
        }

        $oldCustomerId = $order['customer_id'] !== null ? (int)$order['customer_id'] : null;
        $newCustomerId = null;
        $newCustomerUid = null;
        $newCustomerName = null;

        // Option A: Auto-create customer profile
        if (!empty($data['create_customer'])) {
            $name = trim((string)($data['new_customer_name'] ?? $data['name'] ?? ''));
            if ($name === '') {
                $db->rollBack();
                Response::json(['error' => 'Customer name is required'], 400);
                return;
            }
            $uid = 'CUS-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3)));
            $phone = trim((string)($data['phone'] ?? '')) ?: null;
            $email = trim((string)($data['email'] ?? '')) ?: null;
            $address = trim((string)($data['address'] ?? '')) ?: null;

            $insCust = $db->prepare('INSERT INTO customers (uid, name, phone, email, address, is_walkin, created_by, created_at, updated_at) VALUES (:uid, :name, :phone, :email, :address, 0, :by, NOW(), NOW())');
            $insCust->execute([
                'uid' => $uid,
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'address' => $address,
                'by' => $_SESSION['user_id'] ?? null,
            ]);
            $newCustomerId = (int)$db->lastInsertId();
            $newCustomerUid = $uid;
            $newCustomerName = $name;

            $histStmt = $db->prepare('INSERT INTO customer_history (customer_id, edited_by, action, changes, created_at) VALUES (:cid, :by, :action, :changes, NOW())');
            $histStmt->execute([
                'cid'     => $newCustomerId,
                'by'      => $_SESSION['user_id'] ?? 1,
                'action'  => 'created',
                'changes' => json_encode([
                    'name'    => $name,
                    'phone'   => $phone,
                    'email'   => $email,
                    'address' => $address,
                    'source'  => 'order_retroactive_reassignment',
                ]),
            ]);

            SystemLog::write('customers', 'created', $newCustomerId, $name, json_encode([
                'uid' => $uid,
                'source' => 'order_retroactive_reassignment',
                'order_id' => (int)$id,
                'order_uid' => $order['uid'] ?? null,
            ]));
        } else {
            // Option B: Assign to existing customer
            $targetId = $data['customer_id'] ?? null;
            if (!$targetId) {
                $db->rollBack();
                Response::json(['error' => 'Target customer ID is required'], 400);
                return;
            }
            $chk = $db->prepare('SELECT id, uid, name, is_walkin, deleted_at FROM customers WHERE id = :id');
            $chk->execute(['id' => $targetId]);
            $targetCust = $chk->fetch();
            if (!$targetCust || $targetCust['deleted_at'] !== null) {
                $db->rollBack();
                Response::json(['error' => 'Target customer not found or deleted'], 404);
                return;
            }
            $newCustomerId = (int)$targetCust['id'];
            $newCustomerUid = $targetCust['uid'];
            $newCustomerName = $targetCust['name'];
        }

        $resolveCustomerLabel = function ($cid) use ($db) {
            if ($cid === null) return 'Unassigned';
            $cs = $db->prepare('SELECT uid, name, is_walkin FROM customers WHERE id = :id LIMIT 1');
            $cs->execute(['id' => $cid]);
            $row = $cs->fetch();
            if (!$row) return "Customer #$cid";
            return !empty($row['is_walkin']) ? "Walk-in (#{$row['uid']})" : "{$row['name']} (#{$row['uid']})";
        };

        $changes = [
            'Customer' => [
                'from' => $resolveCustomerLabel($oldCustomerId),
                'to' => $resolveCustomerLabel($newCustomerId),
            ]
        ];

        // Update customer_note if passed
        $newCustomerNote = $order['customer_note'];
        if (array_key_exists('customer_note', $data)) {
            $newCustomerNote = trim((string)$data['customer_note']) !== '' ? trim((string)$data['customer_note']) : null;
            if ($newCustomerNote !== $order['customer_note']) {
                $changes['Customer Note'] = [
                    'from' => $order['customer_note'] ?? '(none)',
                    'to' => $newCustomerNote ?? '(none)',
                ];
            }
        }

        $upd = $db->prepare('UPDATE orders SET customer_id = :cid, customer_note = :cnote WHERE id = :id');
        $upd->execute([
            'cid' => $newCustomerId,
            'cnote' => $newCustomerNote,
            'id' => $id,
        ]);

        $editedBy = $_SESSION['user_id'] ?? null;
        if (!$editedBy) {
            $uRow = $db->query('SELECT id FROM users LIMIT 1')->fetch();
            $editedBy = $uRow ? (int)$uRow['id'] : 1;
        }

        $historyStmt = $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())');
        $historyStmt->execute([
            'order_id' => $id,
            'edited_by' => $editedBy,
            'action' => 'customer_changed',
            'changes' => json_encode($changes),
        ]);

        $db->commit();

        SystemLog::write('orders', 'customer_changed', (int)$id, $order['service_name'] ?? "Order #$id", json_encode(array_merge(
            ['uid' => $order['uid'] ?? null],
            $changes
        )));

        EntityVersion::bump($db, 'orders', 'customers');

        Response::json([
            'ok' => true,
            'customer_id' => $newCustomerId,
            'customer_uid' => $newCustomerUid,
            'customer_name' => $newCustomerName,
            'customer_note' => $newCustomerNote,
        ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("Failed to reassign customer in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to reassign customer. Please check server error logs.'], 500);
            return;
        }
    }

    /**
     * Resolves all user IDs mentioned in an order:
     * 1. Seller / Cashier: owner_user_id, created_by
     * 2. Technicians / Custom Service Owners: service_owners_data
     * 3. Consignment Stock Owners: order_items (cost_owner_id, owner_user_id, purchase_id -> purchases.owner_user_id)
     * 4. Settlement Partners: partner_settlements (payer_user_id, payee_user_id)
     */
    public static function getOrderMentionedUserIds(\PDO $db, int $orderId, array $order = []): array
    {
        if (empty($order)) {
            try {
                $stmt = $db->prepare('SELECT * FROM orders WHERE id = :id');
                $stmt->execute(['id' => $orderId]);
                $order = $stmt->fetch(\PDO::FETCH_ASSOC) ?: [];
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        }
        $userIds = [];
        if (!empty($order['owner_user_id'])) {
            $userIds[] = (int)$order['owner_user_id'];
        }
        if (!empty($order['created_by'])) {
            $userIds[] = (int)$order['created_by'];
        }

        // Custom service owners
        if (!empty($order['service_owners_data'])) {
            $svcData = is_array($order['service_owners_data']) ? $order['service_owners_data'] : json_decode((string)$order['service_owners_data'], true);
            if (is_array($svcData)) {
                foreach ($svcData as $item) {
                    if (!empty($item['user_id'])) {
                        $userIds[] = (int)$item['user_id'];
                    }
                }
            }
        }

        // Manual cost contributors
        if (!empty($order['manual_costs_data'])) {
            $mcData = is_array($order['manual_costs_data']) ? $order['manual_costs_data'] : json_decode((string)$order['manual_costs_data'], true);
            if (is_array($mcData)) {
                foreach ($mcData as $item) {
                    $payerId = !empty($item['paid_by_user_id']) ? (int)$item['paid_by_user_id'] : (!empty($item['payer_user_id']) ? (int)$item['payer_user_id'] : null);
                    if ($payerId) {
                        $userIds[] = (int)$payerId;
                    }
                }
            }
        }

        // Order items & lot owners
        try {
            $itemsStmt = $db->prepare('SELECT cost_owner_id, owner_user_id, purchase_id FROM order_items WHERE order_id = :oid');
            $itemsStmt->execute(['oid' => $orderId]);
            $items = $itemsStmt->fetchAll(\PDO::FETCH_ASSOC);
            $purchaseIds = [];
            foreach ($items as $it) {
                if (!empty($it['cost_owner_id'])) {
                    $userIds[] = (int)$it['cost_owner_id'];
                }
                if (!empty($it['owner_user_id'])) {
                    $userIds[] = (int)$it['owner_user_id'];
                }
                if (!empty($it['purchase_id'])) {
                    $purchaseIds[] = (int)$it['purchase_id'];
                }
            }
            if (!empty($purchaseIds)) {
                $purchaseIds = array_values(array_unique(array_filter($purchaseIds, fn($pid) => (int)$pid > 0)));
                if (!empty($purchaseIds)) {
                    $inClause = implode(',', array_fill(0, count($purchaseIds), '?'));
                    $pStmt = $db->prepare("SELECT owner_user_id FROM purchases WHERE id IN ($inClause)");
                    $pStmt->execute($purchaseIds);
                    while ($row = $pStmt->fetch(\PDO::FETCH_ASSOC)) {
                        if (!empty($row['owner_user_id'])) {
                            $userIds[] = (int)$row['owner_user_id'];
                        }
                    }
                }
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // Partner settlements
        try {
            $psStmt = $db->prepare('SELECT payer_user_id, payee_user_id FROM partner_settlements WHERE related_entity_type = "orders" AND related_entity_id = :oid');
            $psStmt->execute(['oid' => $orderId]);
            while ($ps = $psStmt->fetch(\PDO::FETCH_ASSOC)) {
                if (!empty($ps['payer_user_id'])) {
                    $userIds[] = (int)$ps['payer_user_id'];
                }
                if (!empty($ps['payee_user_id'])) {
                    $userIds[] = (int)$ps['payee_user_id'];
                }
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        return array_values(array_unique(array_filter($userIds, fn($id) => (int)$id > 0)));
    }

    public function updateStatus(string $id, array $data): void
    {
        $status = $data['status'] ?? null;
        if (!$status) {
            Response::json(['error' => 'Status required'], 400);
            return;
        }

        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);
        $this->ensureOrderHistoryTable($db);
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT id, status, products_cost, manual_cost, total, profit, custom_sale, uid, service_name, amount_paid, due_date, customer_note, settle_kind, settle_purchase_id, settle_consumed, owner_user_id, created_by, service_owners_data, returned_by, agreement_status, has_refusal, is_locked_for_edit, agreement_version, deleted_at FROM orders WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $order = $stmt->fetch();
        if (!$order) {
            $db->rollBack();
            Response::json(['error' => 'Order not found'], 404);
            return;
        }

        if (($order['status'] ?? '') === 'deleted' || ($order['deleted_at'] ?? null) !== null) {
            $db->rollBack();
            Response::json(['error' => 'This order has been deleted and cannot be modified.', 'order_deleted' => true], 400);
            return;
        }

        // Hard Guard: Consignment & Partner Collaborative Consensus (Two-Phase Consensus Standard)
        // Orders with pending or refused partner settlements cannot change status (cannot be completed, processing, pending_money, returned)
        $psCheck = $db->prepare("
            SELECT acceptance_status, status 
            FROM partner_settlements 
            WHERE related_entity_type = 'orders' 
              AND related_entity_id = :oid 
              AND status != 'cancelled' 
              AND settlement_type != 'order_return_clawback'
        ");
        $psCheck->execute(['oid' => (int)$id]);
        $activeSettlements = $psCheck->fetchAll(PDO::FETCH_ASSOC);

        $hasPending = false;
        $hasRefused = false;
        if (!empty($activeSettlements)) {
            foreach ($activeSettlements as $as) {
                if (($as['acceptance_status'] ?? '') === 'refused' || ($as['status'] ?? '') === 'refused') {
                    $hasRefused = true;
                } elseif (($as['acceptance_status'] ?? 'pending') === 'pending') {
                    $hasPending = true;
                }
            }
        }

        $targetProgressing = in_array($status, ['processing', 'pending_money', 'completed', 'delivered', 'diagnosing', 'in_progress', 'waiting_parts', 'ready'], true);
        $isTargetCompletion = in_array($status, ['completed', 'delivered'], true);
        $orderAgrStatus = $order['agreement_status'] ?? 'all_accepted';
        $orderHasRefusal = (int)($order['has_refusal'] ?? 0);
        $isCustomPhase2 = !empty($order['custom_sale']) && !empty($order['is_locked_for_edit']);

        if ($isCustomPhase2) {
            // In Phase 2 of a Custom Service, intermediate status changes are 100% unlocked;
            // ONLY completion (completed / delivered) is blocked if any Phase 2 partner is still pending or refused.
            if ($isTargetCompletion && ($hasPending || $hasRefused)) {
                $db->rollBack();
                Response::json([
                    'error' => 'Cannot complete order: A Phase 2 partner has not yet accepted their statement (or has refused). Please wait for their acceptance or remove the unaccepted partner first.'
                ], 403);
                return;
            }
        } else {
            if ($targetProgressing && ($orderAgrStatus === 'has_refusal' || $orderHasRefusal === 1 || $hasRefused)) {
                $db->rollBack();
                Response::json(['error' => 'Cannot update order status: Collaborative terms were refused by a partner. Please edit or cancel this order.'], 403);
                return;
            }

            if ($targetProgressing && ($orderAgrStatus === 'pending' || $hasPending)) {
                $db->rollBack();
                Response::json(['error' => 'Cannot update order status: Awaiting partner acceptance in Settlement Hub. All collaborative partners must review and accept terms before this service can be started or completed.'], 403);
                return;
            }
        }

        // Coin-swap sale: "Return" reverses the whole swap — restore the sold coin,
        // remove the received coin — and marks it returned (Delete does the same but
        // marks it deleted). No other status transition applies to a swap.
        if (($order['settle_kind'] ?? 'cash') === 'product') {
            if ($status !== 'returned') {
                $db->rollBack();
                Response::json(['error' => 'A coin-swap sale can only be returned (which reverses the swap) or deleted.'], 400);
                return;
            }
            $receivedLot = null;
            $err = $this->unwindCoinSale($db, $order, 'returned', $receivedLot);
            if ($err) { $db->rollBack(); Response::json(['error' => $err], 400); return; }

            $reason = isset($data['reason']) ? trim((string) $data['reason']) : '';
            $db->prepare('INSERT INTO order_history (order_id, edited_by, action, reason, created_at) VALUES (:order_id, :edited_by, :action, :reason, NOW())')
               ->execute(['order_id' => $order['id'], 'edited_by' => $_SESSION['user_id'] ?? null, 'action' => 'returned', 'reason' => $reason !== '' ? $reason : null]);

            $db->commit();

            SystemLog::write('orders', 'status_changed', (int) $order['id'], $order['service_name'] ?? ("Order #" . $order['id']), json_encode([
                'uid' => $order['uid'] ?? null,
                'previous_status' => $order['status'],
                'status' => 'returned',
                'settle_kind' => 'product',
                'reason' => $reason !== '' ? $reason : null,
            ]));
            if ($receivedLot) {
                SystemLog::write('purchases', 'deleted', (int) $receivedLot['id'], $receivedLot['name'] ?? null, json_encode([
                    'uid' => $receivedLot['uid'] ?? null,
                    'reason' => 'Coin-swap sale returned',
                    'settle_kind' => 'received',
                    'status' => 'deleted',
                ]));
            }
            Response::json(['ok' => true]);
            return;
        }

        $hasPayment = Decimal::comp((string)($order['amount_paid'] ?? '0'), '0') > 0;

        if ($status === 'returned' && ($order['status'] ?? '') === 'returned') {
            $db->rollBack();
            Response::json(['error' => 'This order has already been returned'], 400);
            return;
        }

        // ── Mission 415: Strict Mentioned-Users Return Permission Guard ──
        // An order can ONLY be returned by the specific people mentioned in that order:
        // the seller (owner/creator), mentioned stock owners, or administrators.
        if ($status === 'returned') {
            $currentUserId = (int)($_SESSION['user_id'] ?? 0);
            $mentionedUserIds = $this->getOrderMentionedUserIds($db, (int)$id, $order);

            if (!in_array($currentUserId, $mentionedUserIds, true)) {
                $db->rollBack();
                Response::json([
                    'error' => 'Forbidden: Only the seller and stock owners mentioned in this order can return it.'
                ], 403);
                return;
            }
        }

        if ($status === 'returned' && ($order['status'] ?? '') === 'return_pending') {
            $db->rollBack();
            Response::json([
                'error' => 'A return request is already pending approval for this order.',
                'code' => 'RETURN_ALREADY_PENDING'
            ], 409);
            return;
        }

        $isPhase2 = (!empty($order['is_locked_for_edit']) || ($order['agreement_status'] ?? '') === 'all_accepted');

        if ($status === 'returned' && !in_array($order['status'], ['completed', 'pending_money', 'processing', 'pending'], true) && !$hasPayment && !$isPhase2) {
            $db->rollBack();
            Response::json(['error' => 'Only completed, pending-payment, partially paid, or Phase 2 orders can be returned. Cancel or delete pending orders instead.'], 400);
            return;
        }

        if ($order['status'] === 'completed' || $order['status'] === 'returned' || $order['status'] === 'deleted' || $order['deleted_at'] !== null) {
            if ($status !== 'returned' || ($order['status'] !== 'completed' && !$isPhase2)) {
                $db->rollBack();
                Response::json(['error' => 'Status of this order cannot be changed', 'order_deleted' => ($order['status'] === 'deleted' || $order['deleted_at'] !== null)], 400);
                return;
            }
        }

        // A pending-payment (money owed) order can only be settled (marked paid →
        // completed) or returned — its goods already left stock.
        if ($order['status'] === 'pending_money' && $status !== 'completed' && $status !== 'returned') {
            $db->rollBack();
            Response::json(['error' => 'A pending-payment order can only be marked paid or returned'], 400);
            return;
        }

        // pending/processing → pending_money: goods leave now (deduct like a
        // completion), but the money is owed. Record who/when it went pending.
        if ($status === 'pending_money' && $order['status'] !== 'pending_money' && $order['status'] !== 'completed') {
            $items = $db->prepare('SELECT * FROM order_items WHERE order_id = :id AND is_returned = 0');
            $items->execute(['id' => $id]);
            $items = $items->fetchAll();
            $this->releaseInventory($db, $items);
            $error = $this->deductInventory($db, $items);
            if ($error) {
                $db->rollBack();
                Response::json(['error' => $error], 400);
                return;
            }

            // Capture how much (if anything) the customer paid up front + an
            // optional rolling due date, mirroring the credit-purchase flow.
            $orderTotal = (string) $order['total'];
            $initPaid = (isset($data['amount_paid']) && $data['amount_paid'] !== '' && $data['amount_paid'] !== null)
                ? (string) $data['amount_paid'] : '0';
            if (Decimal::comp($initPaid, '0') < 0) $initPaid = '0';

            $isOverpaid = Decimal::comp($initPaid, $orderTotal) > 0;
            $isExactPaid = Decimal::comp($initPaid, $orderTotal) === 0 && Decimal::comp($initPaid, '0') > 0;

            $finishSale = !isset($data['finish_sale']) || $data['finish_sale'] === true || $data['finish_sale'] === 'true' || $data['finish_sale'] === 1;

            if (($isOverpaid || $isExactPaid) && $finishSale) {
                $extra = $isOverpaid ? Decimal::sub($initPaid, $orderTotal) : '0';
                $newTotal = $isOverpaid ? $initPaid : $orderTotal;
                $newProfit = $isOverpaid ? Decimal::add((string)$order['profit'], $extra) : (string)$order['profit'];

                // Completed directly!
                $stmt = $db->prepare('UPDATE orders SET status = "completed", completed_at = NOW(), completed_by = :uid, paid_at = NOW(), paid_by = :uid, total = :tot, profit = :prf, amount_paid = :ap, due_date = NULL WHERE id = :id');
                $stmt->execute([
                    'uid' => $_SESSION['user_id'] ?? null,
                    'tot' => $newTotal,
                    'prf' => $newProfit,
                    'ap' => $newTotal,
                    'id' => $id
                ]);

                $changesPm = [
                    'Status' => ['from' => ucfirst((string)$order['status']), 'to' => 'Paid (completed)'],
                    'Paid in full' => ['from' => '0.00', 'to' => number_format((float)$newTotal, 2)]
                ];
                if ($isOverpaid) {
                    $changesPm['Extra Profit'] = ['from' => '0.00', 'to' => number_format((float)$extra, 2)];
                }

                $custodyUidPm = (!empty($order['custom_sale']) && !empty($order['owner_user_id']))
                    ? (int)$order['owner_user_id']
                    : (int)($_SESSION['user_id'] ?? 1);
                CashVaultController::logFlow(
                    $db,
                    'customer_payment',
                    'in',
                    $newTotal,
                    'orders',
                    (int)$id,
                    $isOverpaid ? "Order paid in full with extra profit (+{$extra}) — Order " . ($order['uid'] ?? "#$id") : "Full payment for Order " . ($order['uid'] ?? "#$id"),
                    $custodyUidPm
                );

                $historyStmt = $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())');
                $historyStmt->execute([
                    'order_id' => $id,
                    'edited_by' => $_SESSION['user_id'] ?? null,
                    'action' => 'status_changed',
                    'changes' => json_encode($changesPm),
                ]);

                $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())')
                    ->execute([
                        'order_id' => $id,
                        'edited_by' => $_SESSION['user_id'] ?? null,
                        'action' => 'payment_recorded',
                        'changes' => json_encode([
                            'amount' => $newTotal,
                            'total_paid' => $newTotal,
                            'remaining' => '0',
                            'due_date' => null,
                            'timing' => 'none',
                            'is_extra' => $isOverpaid,
                            'extra_profit' => $extra,
                        ]),
                    ]);

                if ($isOverpaid && !empty($order['custom_sale']) && Decimal::comp($extra, '0') > 0) {
                    $this->applyCustomServiceOwnerProfitDelta($db, (int)$id, $extra);
                }
                // Generate partner settlements if not already generated
                $this->generatePartnerSettlements($db, (int)$id, $order['uid'] ?? "ORD-$id", (int)($order['owner_user_id'] ?? $_SESSION['user_id'] ?? 1));
                self::notifyPartnersOrderCompleted($db, (int)$id, $order['uid'] ?? "ORD-$id", (int)($order['owner_user_id'] ?? $_SESSION['user_id'] ?? 1));

                $db->commit();
                SystemLog::write('orders', 'status_changed', (int)$id, $order['service_name'] ?? "Order #$id", json_encode(['uid' => $order['uid'] ?? null, 'customer_note' => $order['customer_note'] ?? null, 'from' => $order['status'], 'to' => 'completed', 'amount_paid' => $newTotal, 'owed' => '0', 'extra_profit' => $extra]));
                SystemLog::write('orders', 'customer_payment', (int)$id, $order['service_name'] ?? "Order #$id", json_encode([
                    'uid' => $order['uid'] ?? null,
                    'customer_note' => $order['customer_note'] ?? null,
                    'amount_paid_now' => $newTotal,
                    'amount_paid_total' => $newTotal,
                    'remaining' => '0',
                    'payment_date' => date('Y-m-d'),
                    'due_date' => null,
                    'timing' => 'none',
                    'new_due_date' => null,
                    'fully_collected' => true,
                    'final' => true,
                    'settlement' => $isOverpaid ? 'extra' : 'exact',
                    'settlement_amount' => $extra,
                    'extra_profit' => $extra,
                    'payment_kind' => $isOverpaid ? 'extra_finish' : 'finish',
                    'is_extra' => $isOverpaid,
                ]));
                EntityVersion::bump($db, 'orders', 'partner_settlements', 'cash_vault');
                Response::json(['ok' => true, 'status' => 'completed', 'total' => $newTotal, 'amount_paid' => $newTotal]);
                return;
            }

            $initDue = (isset($data['due_date']) && $data['due_date'] !== '') ? (string) $data['due_date'] : null;
            if ($initDue !== null) {
                $dueTs = strtotime($initDue);
                if ($dueTs === false) {
                    $db->rollBack();
                    Response::json(['error' => 'Invalid due date format.'], 400);
                    return;
                }
                $formattedDue = date('Y-m-d H:i:s', $dueTs);
                if ($dueTs < time() - 60) {
                    $db->rollBack();
                    Response::json(['error' => 'Payment due date/time cannot be in the past. Please select a current or future time.'], 400);
                    return;
                }
                $initDue = $formattedDue;
            }

            $extra = $isOverpaid ? Decimal::sub($initPaid, $orderTotal) : '0';
            $newTotPm = $isOverpaid ? $initPaid : $orderTotal;
            $newPrfPm = $isOverpaid ? Decimal::add((string)$order['profit'], $extra) : (string)$order['profit'];

            $stmt = $db->prepare('UPDATE orders SET status = "pending_money", money_pending_at = NOW(), money_pending_by = :uid, amount_paid = :ap, due_date = :dd, total = :tot, profit = :prf WHERE id = :id');
            $stmt->execute([
                'uid' => $_SESSION['user_id'] ?? null,
                'ap' => $initPaid,
                'dd' => $initDue,
                'tot' => $newTotPm,
                'prf' => $newPrfPm,
                'id' => $id
            ]);
            if ($isOverpaid && !empty($order['custom_sale']) && Decimal::comp($extra, '0') > 0) {
                $this->applyCustomServiceOwnerProfitDelta($db, (int)$id, $extra);
            }
            $changesPm = ['Status' => ['from' => ucfirst((string)$order['status']), 'to' => 'Pending payment']];
            if (Decimal::comp($initPaid, '0') > 0) {
                $changesPm['Paid up front'] = ['from' => '0.00', 'to' => number_format((float)$initPaid, 2)];
                if ($isOverpaid) {
                    $changesPm['Extra Profit'] = ['from' => '0.00', 'to' => number_format((float)$extra, 2)];
                }
                $vaultNote = $isOverpaid 
                    ? "Credit order deposit with extra profit (+{$extra}) — Order " . ($order['uid'] ?? "#$id") 
                    : (Decimal::comp($initPaid, $newTotPm) === 0 
                        ? "Full payment for Order " . ($order['uid'] ?? "#$id") . " (kept pending)" 
                        : "Initial deposit for Order " . ($order['uid'] ?? "#$id"));

                $custodyUidPm2 = (!empty($order['custom_sale']) && !empty($order['owner_user_id']))
                    ? (int)$order['owner_user_id']
                    : (int)($_SESSION['user_id'] ?? 1);
                CashVaultController::logFlow(
                    $db,
                    'customer_payment',
                    'in',
                    $initPaid,
                    'orders',
                    (int)$id,
                    $vaultNote,
                    $custodyUidPm2
                );
            }
            $historyStmt = $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())');
            $historyStmt->execute([
                'order_id' => $id,
                'edited_by' => $_SESSION['user_id'] ?? null,
                'action' => 'status_changed',
                'changes' => json_encode($changesPm),
            ]);
            // Up-front payment as a payment event on the order timeline.
            if (Decimal::comp($initPaid, '0') > 0) {
                $pmHistPayload = [
                    'amount' => $initPaid,
                    'total_paid' => $initPaid,
                    'remaining' => Decimal::sub($newTotPm, $initPaid),
                    'due_date' => $initDue,
                    'timing' => 'none',
                ];
                if ($isOverpaid) {
                    $pmHistPayload['is_extra'] = true;
                    $pmHistPayload['extra_profit'] = $extra;
                    $pmHistPayload['original_total'] = $orderTotal;
                    $pmHistPayload['new_total'] = $newTotPm;
                }
                $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())')
                    ->execute([
                        'order_id' => $id,
                        'edited_by' => $_SESSION['user_id'] ?? null,
                        'action' => 'payment_recorded',
                        'changes' => json_encode($pmHistPayload),
                    ]);
            }
            $db->commit();
            SystemLog::write('orders', 'status_changed', (int)$id, $order['service_name'] ?? "Order #$id", json_encode(['uid' => $order['uid'] ?? null, 'customer_note' => $order['customer_note'] ?? null, 'from' => $order['status'], 'to' => 'pending_money', 'amount_paid' => $initPaid, 'owed' => Decimal::sub($newTotPm, $initPaid), 'due_date' => $initDue, 'extra_profit' => $extra]));
            // Record the up-front payment as the first event in the payment history.
            if (Decimal::comp($initPaid, '0') > 0) {
                SystemLog::write('orders', 'customer_payment', (int)$id, $order['service_name'] ?? "Order #$id", json_encode([
                    'uid' => $order['uid'] ?? null,
                    'customer_note' => $order['customer_note'] ?? null,  // walk-in buyer name
                    'amount_paid_now' => $initPaid,
                    'amount_paid_total' => $initPaid,
                    'remaining' => Decimal::sub($newTotPm, $initPaid),
                    'payment_date' => date('Y-m-d'),
                    'due_date' => $initDue,
                    'timing' => 'none',
                    'new_due_date' => $initDue,
                    'fully_collected' => Decimal::comp(Decimal::sub($newTotPm, $initPaid), '0') <= 0,
                    'final' => Decimal::comp(Decimal::sub($newTotPm, $initPaid), '0') <= 0,
                    'settlement' => $isOverpaid ? 'extra' : (Decimal::comp(Decimal::sub($newTotPm, $initPaid), '0') <= 0 ? 'exact' : 'none'),
                    'settlement_amount' => $isOverpaid ? $extra : '0',
                    'extra_profit' => $extra,
                    'payment_kind' => $isOverpaid ? 'extra_only' : (Decimal::comp(Decimal::sub($newTotPm, $initPaid), '0') <= 0 ? 'exact_only' : 'partial'),
                    'is_extra' => $isOverpaid,
                ]));
            }
            EntityVersion::bump($db, 'orders', 'partner_settlements', 'cash_vault');
            Response::json(['ok' => true, 'status' => 'pending_money', 'total' => $newTotPm, 'amount_paid' => $initPaid]);
            return;
        }

        // pending_money → completed = "Mark as paid". Inventory was already
        // deducted, so no stock change — just settle the payment (optionally
        // recording the actual amount received, like the normal completion path).
        if ($order['status'] === 'pending_money' && $status === 'completed') {
            $prevPaid = (string) ($order['amount_paid'] ?? '0');
            $orderTotal = (string) $order['total'];
            $owed = Decimal::sub($orderTotal, $prevPaid);
            if (Decimal::comp($owed, '0') < 0) $owed = '0';

            // Final payment collected at finish. Defaults to the remaining balance,
            // so a plain "Mark paid" records the order as fully paid (no phantom
            // loss). THE FIX: this amount is ADDED to everything already collected
            // via installments — the final total reflects every earlier payment,
            // not just what is entered now.
            $finalPayment = (isset($data['final_payment']) && $data['final_payment'] !== '' && $data['final_payment'] !== null)
                ? (string) $data['final_payment'] : $owed;
            if (Decimal::comp($finalPayment, '0') < 0) $finalPayment = '0';

            $newPaid = Decimal::add($prevPaid, $finalPayment); // total the customer actually paid

            // Owner-Only Discount Authority & Non-Negotiable Price Floor Check
            if (!empty($order['custom_sale']) && Decimal::comp($newPaid, $orderTotal) < 0) {
                if ((int)($_SESSION['user_id'] ?? 0) !== (int)($order['owner_user_id'] ?? 0)) {
                    $db->rollBack();
                    Response::json(['error' => 'Only the designated Service Owner is authorized to grant a discount on this service.'], 403);
                    return;
                }
            }
            $minOwed = $this->computeMinimumOwedToOthers($db, (int)$id, (int)($order['owner_user_id'] ?? 1));
            if (Decimal::comp($minOwed, '0') > 0 && Decimal::comp($newPaid, $minOwed) < 0) {
                $db->rollBack();
                Response::json(['error' => "Cannot complete order: minimum required payment to cover partner costs/profits is {$minOwed}"], 400);
                return;
            }

            // Revenue = everything actually collected (discount absorbed by Owner if < total, extra if > total).
            $totalCost = Decimal::add((string)($order['products_cost'] ?? '0'), (string)($order['manual_cost'] ?? '0'));
            $actualPaidOverride = null;
            $newTotal = $newPaid;
            $newProfit = Decimal::sub($newTotal, $totalCost);
            if (Decimal::comp($newTotal, $orderTotal) !== 0) {
                $actualPaidOverride = ['from' => number_format((float)$orderTotal, 2), 'to' => number_format((float)$newTotal, 2)];
            }

            // Timing of the final payment vs the due date in effect (info only).
            $today = date('Y-m-d');
            $dueAtPayment = $order['due_date'] ?? null;
            $timing = 'none';
            if ($dueAtPayment) {
                if ($today < $dueAtPayment) $timing = 'before';
                elseif ($today === $dueAtPayment) $timing = 'on';
                else $timing = 'after';
            }
            // An order marked completed has zero remaining debt — any shortfall was discounted/written off
            $remainingAfter = '0';

            // Settlement vs the order total: did the customer end up paying extra,
            // the same, or less (a loss/discount absorbed)?
            $settleDiff = Decimal::sub($newPaid, $orderTotal);
            $settlement = 'exact';
            $settlementAmount = '0';
            $paymentKind = 'finish';
            $isExtraPayment = false;
            if (Decimal::comp($settleDiff, '0') > 0) {
                $settlement = 'extra';
                $settlementAmount = $settleDiff;
                $paymentKind = 'extra_finish';
                $isExtraPayment = true;
            } elseif (Decimal::comp($settleDiff, '0') < 0) {
                $settlement = 'short';
                $settlementAmount = Decimal::sub($orderTotal, $newPaid);
                $paymentKind = 'finish_discount';
                $isExtraPayment = false;
            }

            // 1) Record the final payment as an installment so the full money trail
            //    is preserved in the order's own history (and the report / payment
            //    modal) — only when something was actually paid at finish.
            if (Decimal::comp($finalPayment, '0') > 0) {
                $custodyUserId = !empty($order['owner_user_id']) ? (int)$order['owner_user_id'] : (int)($_SESSION['user_id'] ?? 1);
                $cashierUid = (int)($_SESSION['user_id'] ?? 1);
                $payNote = "Final settlement for Order " . ($order['uid'] ?? "#$id");
                if ($custodyUserId !== $cashierUid) {
                    $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                    $uStmt->execute(['id' => (int)$cashierUid]);
                    $cashierName = $uStmt->fetchColumn() ?: "Cashier #{$cashierUid}";
                    $payNote .= " (Collected at counter by {$cashierName})";
                }
                CashVaultController::logFlow(
                    $db,
                    'customer_payment',
                    'in',
                    $finalPayment,
                    'orders',
                    (int)$id,
                    $payNote,
                    $custodyUserId
                );
                $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())')
                    ->execute([
                        'order_id' => $id,
                        'edited_by' => $_SESSION['user_id'] ?? null,
                        'action' => 'payment_recorded',
                        'changes' => json_encode([
                            'amount' => $finalPayment,
                            'total_paid' => $newPaid,
                            'remaining' => '0',
                            'due_date' => $dueAtPayment,
                            'timing' => $timing,
                            'final' => true,
                            'settlement' => $settlement,             // extra | short | exact
                            'settlement_amount' => $settlementAmount,
                            'payment_kind' => $paymentKind,
                            'is_extra' => $isExtraPayment,
                            'order_total' => $orderTotal,
                        ]),
                    ]);
            }

            // 2) Settle / complete the order.
            $stmt = $db->prepare('UPDATE orders SET status = "completed", completed_at = NOW(), completed_by = :uid, paid_at = NOW(), paid_by = :uid, total = :total, profit = :profit, amount_paid = :ap, due_date = NULL WHERE id = :id');
            $stmt->execute(['uid' => $_SESSION['user_id'] ?? null, 'total' => $newTotal, 'profit' => $newProfit, 'ap' => $newPaid, 'id' => $id]);
            $changesPayload = ['Status' => ['from' => 'Pending payment', 'to' => 'Paid (completed)']];
            $changesPayload['Total Collected'] = ['from' => number_format((float)$prevPaid, 2), 'to' => number_format((float)$newPaid, 2)];
            if ($actualPaidOverride !== null) {
                $changesPayload['Amount Customer Paid'] = $actualPaidOverride;
            }
            $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())')
                ->execute([
                    'order_id' => $id,
                    'edited_by' => $_SESSION['user_id'] ?? null,
                    'action' => 'payment_received',
                    'changes' => json_encode($changesPayload),
                ]);
            if (!empty($order['custom_sale']) && Decimal::comp($settleDiff, '0') !== 0) {
                $this->applyCustomServiceOwnerProfitDelta($db, (int)$id, $settleDiff);
            }
            // Generate partner settlements if not already generated (remain in locked status until manual release)
            $this->generatePartnerSettlements($db, (int)$id, $order['uid'] ?? "ORD-$id", (int)($order['owner_user_id'] ?? $_SESSION['user_id'] ?? 1));
            self::notifyPartnersOrderCompleted($db, (int)$id, $order['uid'] ?? "ORD-$id", (int)($order['owner_user_id'] ?? $_SESSION['user_id'] ?? 1));

            $db->commit();

            // Mirror the final installment + the settlement into system_logs so the
            // payment history / report show every payment, including this one.
            if (Decimal::comp($finalPayment, '0') > 0) {
                SystemLog::write('orders', 'customer_payment', (int)$id, $order['service_name'] ?? "Order #$id", json_encode([
                    'uid' => $order['uid'] ?? null,
                    'customer_note' => $order['customer_note'] ?? null,  // walk-in buyer name
                    'amount_paid_now' => $finalPayment,
                    'amount_paid_total' => $newPaid,
                    'remaining' => '0',
                    'payment_date' => $today,
                    'due_date' => $dueAtPayment,
                    'timing' => $timing,
                    'new_due_date' => null,
                    'fully_collected' => true,
                    'final' => true,
                    'settlement' => $settlement,
                    'settlement_amount' => $settlementAmount,
                    'extra_profit' => $isExtraPayment ? $settlementAmount : '0',
                    'payment_kind' => $paymentKind,
                    'is_extra' => $isExtraPayment,
                ]));
            }
            $logPayload = ['uid' => $order['uid'] ?? null, 'customer_note' => $order['customer_note'] ?? null, 'from' => 'pending_money', 'to' => 'completed', 'paid' => (string)$newTotal, 'amount_collected' => $newPaid];
            if ($actualPaidOverride !== null) {
                $logPayload['amount_adjusted'] = $actualPaidOverride;
            }

            EntityVersion::bump($db, 'orders', 'partner_settlements', 'cash_vault');
            Response::json(['ok' => true, 'amount_paid' => $newPaid, 'total' => $newTotal]);
            return;
        }

        $newTotal = $order['total'];
        $newProfit = $order['profit'];
        $actualPaidOverride = null;

        // When changing to completed: release reservation and deduct inventory
        if ($order['status'] !== 'completed' && $order['status'] !== 'pending_money' && $status === 'completed') {
            $items = $db->prepare('SELECT * FROM order_items WHERE order_id = :id');
            $items->execute(['id' => $id]);
            $items = $items->fetchAll();

            // Release the reservation first
            $this->releaseInventory($db, $items);

            // Then deduct the actual inventory
            $error = $this->deductInventory($db, $items);
            if ($error) {
                $db->rollBack();
                Response::json(['error' => $error], 400);
                return;
            }

            // Handle actual paid amount if provided (or final_payment added to prior amount_paid)
            $explicitActualPaid = null;
            if (isset($data['actual_paid']) && trim((string)$data['actual_paid']) !== '') {
                $explicitActualPaid = (string)$data['actual_paid'];
            } elseif (isset($data['final_payment']) && trim((string)$data['final_payment']) !== '') {
                $explicitActualPaid = Decimal::add((string)($order['amount_paid'] ?? '0'), (string)$data['final_payment']);
            }

            if ($explicitActualPaid !== null) {
                $actualPaid = $explicitActualPaid;

                if (!is_numeric($actualPaid) || Decimal::comp($actualPaid, '0') < 0) {
                    $db->rollBack();
                    Response::json(['error' => 'Invalid payment amount: must be a non-negative number'], 400);
                    return;
                }

                // Owner-Only Discount Authority for Custom Services
                if (!empty($order['custom_sale']) && Decimal::comp($actualPaid, (string)$order['total']) < 0) {
                    if ((int)($_SESSION['user_id'] ?? 0) !== (int)($order['owner_user_id'] ?? 0)) {
                        $db->rollBack();
                        Response::json(['error' => 'Only the designated Service Owner is authorized to grant a discount on this service.'], 403);
                        return;
                    }
                }

                $minOwed = $this->computeMinimumOwedToOthers($db, (int)$id, (int)($order['owner_user_id'] ?? 1));
                if (Decimal::comp($minOwed, '0') > 0 && Decimal::comp($actualPaid, $minOwed) < 0) {
                    $db->rollBack();
                    Response::json(['error' => "Cannot complete order: minimum required payment to cover partner costs/profits is {$minOwed}"], 400);
                    return;
                }

                $totalCost = Decimal::add((string)($order['products_cost'] ?? '0'), (string)($order['manual_cost'] ?? '0'));
                if (Decimal::comp($actualPaid, (string)$order['total']) !== 0) {
                    $actualPaidOverride = [
                        'from' => (string)$order['total'],
                        'to' => $actualPaid,
                    ];
                }
                $newTotal = $actualPaid;
                $newProfit = Decimal::sub($actualPaid, $totalCost);
            }
        }

        // Gap 2 fix: pending/processing/ready → completed → record remaining cash inflow
        if ($order['status'] !== 'completed' && $order['status'] !== 'pending_money' && $status === 'completed') {
            $settleKind = $order['settle_kind'] ?? 'cash';
            $alreadyCollected = (string)($order['amount_paid'] ?? '0');
            $collectedNowAtComplete = Decimal::comp($newTotal, $alreadyCollected) > 0 ? Decimal::sub($newTotal, $alreadyCollected) : '0';
            if ($settleKind !== 'product' && Decimal::comp($collectedNowAtComplete, '0') > 0) {
                $custodyUidComp = (!empty($order['custom_sale']) && !empty($order['owner_user_id']))
                    ? (int)$order['owner_user_id']
                    : (int)($_SESSION['user_id'] ?? 1);
                CashVaultController::logFlow(
                    $db,
                    'customer_payment',
                    'in',
                    $collectedNowAtComplete,
                    'orders',
                    (int)$id,
                    "Order completed (from " . ucfirst($order['status']) . ") — " . ($order['uid'] ?? "Order #$id"),
                    $custodyUidComp
                );
            }
        }

        // Handle returned status (from completed OR pending_money OR order with payment —
        // restore or release stock on return).
        $hasPaymentOnReturn = Decimal::comp((string)($order['amount_paid'] ?? '0'), '0') > 0;
        if (($order['status'] === 'completed' || $order['status'] === 'pending_money' || $hasPaymentOnReturn || ($isPhase2 && $status === 'returned')) && $status === 'returned') {
            $sellerId = (int)($order['owner_user_id'] ?? $order['created_by'] ?? 1);
            $currentUserId = (int)($_SESSION['user_id'] ?? 0);
            $initiatorId = ($currentUserId > 0) ? $currentUserId : $sellerId;
            $orderUid = $order['uid'] ?? "ORD-$id";

            $returnStrategy = $data['return_strategy'] ?? 'original_lot';
            if (!in_array($returnStrategy, ['absorb_master', 'original_lot', 'isolated_lot', 'per_item'], true)) {
                $returnStrategy = 'original_lot';
            }

            // Fetch all items for this order
            $allItemsStmt = $db->prepare('SELECT * FROM order_items WHERE order_id = :id');
            $allItemsStmt->execute(['id' => $id]);
            $allItems = $allItemsStmt->fetchAll(PDO::FETCH_ASSOC);

            $itemsMap = [];
            $unreturnedItems = [];
            $pendingReturnItemsCount = 0;
            foreach ($allItems as $it) {
                $itemsMap[(int)$it['id']] = $it;
                if (empty($it['is_returned'])) {
                    if (($it['return_acceptance_status'] ?? '') === 'pending') {
                        $pendingReturnItemsCount++;
                    } else {
                        $unreturnedItems[(int)$it['id']] = $it;
                    }
                }
            }

            // Determine selected items to return
            $selectedItems = [];
            $hasPerItemInput = !empty($data['return_items']) && is_array($data['return_items']);

            if ($hasPerItemInput) {
                $returnStrategy = 'per_item';
                foreach ($data['return_items'] as $retItem) {
                    $itemId = (int)($retItem['item_id'] ?? $retItem['id'] ?? 0);
                    if (isset($itemsMap[$itemId])) {
                        if (($itemsMap[$itemId]['return_acceptance_status'] ?? '') === 'pending') {
                            $db->rollBack();
                            Response::json([
                                'error' => "Item '{$itemsMap[$itemId]['name']}' already has a return request pending approval.",
                                'code' => 'ITEM_RETURN_PENDING'
                            ], 409);
                            return;
                        }
                    }
                    if (isset($unreturnedItems[$itemId])) {
                        $itemCopy = $unreturnedItems[$itemId];
                        $itemDest = $retItem['return_destination'] ?? 'original_lot';
                        if (!in_array($itemDest, ['absorb_master', 'original_lot', 'isolated_lot'], true)) {
                            $itemDest = 'original_lot';
                        }
                        $retItemQty = !empty($retItem['returned_quantity']) ? (string)$retItem['returned_quantity'] : (!empty($retItem['quantity']) ? (string)$retItem['quantity'] : null);
                        if ($retItemQty !== null && Decimal::comp($retItemQty, '0') > 0 && Decimal::comp($retItemQty, (string)$itemCopy['quantity']) <= 0) {
                            $itemCopy['returned_quantity'] = $retItemQty;
                        }
                        $itemCopy['return_destination'] = $itemDest;
                        $itemCopy['isolated_supplier_id'] = $retItem['isolated_supplier_id'] ?? $retItem['supplier_id'] ?? null;
                        $itemCopy['supplier_choice'] = $retItem['supplier_choice'] ?? $retItem['supplier_mode'] ?? null;
                        $selectedItems[$itemId] = $itemCopy;
                    }
                }
                if (empty($selectedItems)) {
                    $db->rollBack();
                    Response::json(['error' => 'No valid unreturned items selected for return.'], 400);
                    return;
                }
            } else {
                if (!empty($allItems) && empty($unreturnedItems)) {
                    $db->rollBack();
                    Response::json([
                        'error' => 'All unreturned items in this order already have return requests pending approval.',
                        'code' => 'ALL_ITEMS_PENDING_RETURN'
                    ], 409);
                    return;
                }
                // Return all remaining unreturned items
                foreach ($unreturnedItems as $itemId => $it) {
                    $itemCopy = $it;
                    $itemCopy['return_destination'] = ($returnStrategy === 'per_item' ? 'original_lot' : $returnStrategy);
                    $selectedItems[$itemId] = $itemCopy;
                }
            }

            // Is this a partial return?
            $isPartialReturn = (count($selectedItems) < count($unreturnedItems));
            if (!$isPartialReturn) {
                foreach ($selectedItems as $si) {
                    $origQ = (string)($si['quantity'] ?? '1');
                    $retQ = (string)($si['returned_quantity'] ?? $origQ);
                    if (Decimal::comp($retQ, $origQ) < 0) {
                        $isPartialReturn = true;
                        break;
                    }
                }
            }

            // Separate selected items by consignment owner vs seller
            $consignmentPartners = []; // partner_id => array of items
            $sellerItems = [];

            foreach ($selectedItems as $item) {
                $costOwnerId = !empty($item['cost_owner_id']) ? (int)$item['cost_owner_id'] : $sellerId;
                if ($costOwnerId !== $sellerId) {
                    $consignmentPartners[$costOwnerId][] = $item;
                } else {
                    $sellerItems[] = $item;
                }
            }

            // Check if any partner settlements exist for these items
            $needsConsent = false;
            $settledByPartner = [];
            $totalClawbackAll = '0';

            if (count($consignmentPartners) > 0) {
                foreach ($consignmentPartners as $partnerId => $pItems) {
                    // Check if partner settlements exist for this partner on this order
                    $psStmt = $db->prepare('SELECT id, payer_user_id, payee_user_id, amount, settled_amount 
                                             FROM partner_settlements 
                                             WHERE related_entity_type = "orders" AND related_entity_id = :oid 
                                               AND payee_user_id = :pId
                                               AND status != "cancelled" AND settlement_type != "order_return_clawback"');
                    $psStmt->execute(['oid' => $id, 'pId' => $partnerId]);
                    $pSettlements = $psStmt->fetchAll(PDO::FETCH_ASSOC);

                    $pTotalSettled = '0';
                    $pSellerId = $sellerId;
                    foreach ($pSettlements as $ps) {
                        $pTotalSettled = Decimal::add($pTotalSettled, (string)($ps['settled_amount'] ?? '0'));
                        if (!empty($ps['payer_user_id'])) $pSellerId = (int)$ps['payer_user_id'];
                    }

                    // Calculate wholesale cost and profit share of returned items belonging to this partner
                    $pCost = '0';
                    $pProfit = '0';
                    $pSellerProfitRemoved = '0';
                    foreach ($pItems as $pi) {
                        $origQty = (string)($pi['quantity'] ?? '1');
                        $piQty = (string)($pi['returned_quantity'] ?? $pi['quantity'] ?? '1');
                        $lineCost = Decimal::mul((string)($pi['cost'] ?? '0'), $piQty);
                        $linePrice = Decimal::mul((string)($pi['price'] ?? '0'), $piQty);
                        $totalOrigProfit = (string)($pi['product_owner_profit'] ?? '0');
                        $lineProfit = (Decimal::comp($origQty, '0') > 0 && Decimal::comp($origQty, $piQty) !== 0)
                            ? Decimal::div(Decimal::mul($totalOrigProfit, $piQty), $origQty)
                            : $totalOrigProfit;
                        $pCost = Decimal::add($pCost, $lineCost);
                        $pProfit = Decimal::add($pProfit, $lineProfit);
                        $lineNet = Decimal::sub($linePrice, Decimal::add($lineCost, $lineProfit));
                        if (Decimal::comp($lineNet, '0') > 0) {
                            $pSellerProfitRemoved = Decimal::add($pSellerProfitRemoved, $lineNet);
                        }
                    }

                    $pTotalItemPayout = Decimal::add($pCost, $pProfit);
                    $pClawAmt = Decimal::min($pTotalSettled, $pTotalItemPayout);

                    $settledByPartner[$partnerId] = [
                        'amount' => $pClawAmt,
                        'total_item_payout' => $pTotalItemPayout,
                        'wholesale_cost' => $pCost,
                        'profit_share' => $pProfit,
                        'seller_id' => $pSellerId,
                        'items' => $pItems,
                        'seller_profit_removed' => $pSellerProfitRemoved,
                        'total_settled_pool' => $pTotalSettled,
                    ];
                    $totalClawbackAll = Decimal::add($totalClawbackAll, $pClawAmt);
                    $needsConsent = true;
                }
            }

            // Fallback & Custom Services participant aggregation for partner settlements (collaborators, manual costs, or legacy orders without items)
            $existingPsStmt = $db->prepare('SELECT id, payer_user_id, payee_user_id, amount, settled_amount, settlement_type, details 
                                             FROM partner_settlements 
                                             WHERE related_entity_type = "orders" AND related_entity_id = :oid 
                                               AND status != "cancelled" AND settlement_type NOT IN ("order_return_clawback", "service_owner_statement")');
            $existingPsStmt->execute(['oid' => $id]);
            $rawOrderSettlements = $existingPsStmt->fetchAll(PDO::FETCH_ASSOC);

            $processedExtraPayees = [];
            foreach ($rawOrderSettlements as $rawPs) {
                $payeeId = (int)$rawPs['payee_user_id'];
                if ($payeeId <= 0 || $payeeId === $sellerId || isset($processedExtraPayees[$payeeId])) {
                    continue;
                }
                $processedExtraPayees[$payeeId] = true;

                $hasSelectedConsignmentItems = isset($consignmentPartners[$payeeId]) && !empty($selectedItems);

                // Check if payee has consignment items in this order that were NOT selected for return (Fix F12)
                $payeeHasUnselectedOrderItems = false;
                if (!empty($unreturnedItems) && !isset($consignmentPartners[$payeeId])) {
                    foreach ($unreturnedItems as $uit) {
                        $uOwner = !empty($uit['cost_owner_id']) ? (int)$uit['cost_owner_id'] : (!empty($uit['owner_user_id']) ? (int)$uit['owner_user_id'] : 0);
                        if ($uOwner === $payeeId) {
                            $payeeHasUnselectedOrderItems = true;
                            break;
                        }
                    }
                }

                $pSettledAmt = '0';
                $pPayerId = $sellerId;
                $pCost = '0';
                $pProfit = '0';
                $pItems = [];

                foreach ($rawOrderSettlements as $checkPs) {
                    if ((int)$checkPs['payee_user_id'] !== $payeeId) continue;
                    $actualSettled = (string)($checkPs['settled_amount'] ?? '0');
                    if (Decimal::comp($actualSettled, '0') > 0) {
                        $pSettledAmt = Decimal::add($pSettledAmt, $actualSettled);
                    }
                    if (!empty($checkPs['payer_user_id'])) $pPayerId = (int)$checkPs['payer_user_id'];

                    $psType = (string)($checkPs['settlement_type'] ?? '');
                    // Skip parts_cost_recovery / parts_profit_share if already accounted via $consignmentPartners[$payeeId]
                    // OR if this partner had physical consignment items in the order that were NOT selected in this return
                    if (($hasSelectedConsignmentItems || $payeeHasUnselectedOrderItems) && in_array($psType, ['parts_cost_recovery', 'parts_profit_share'], true)) {
                        continue;
                    }

                    $amtToAdd = (string)($checkPs['amount'] ?? '0');
                    $psDet = !empty($checkPs['details']) ? (is_array($checkPs['details']) ? $checkPs['details'] : json_decode($checkPs['details'], true)) : [];
                    if (!is_array($psDet)) $psDet = [];

                    if (in_array($psType, ['parts_cost_recovery', 'manual_cost_recovery'], true)) {
                        $pCost = Decimal::add($pCost, $amtToAdd);
                        $itemDesc = $psDet['description'] ?? ($psDet['product_name'] ?? ($psDet['item_name'] ?? 'Cost Outlay'));
                        $pItems[] = [
                            'item_id' => (int)($psDet['order_item_id'] ?? 0),
                            'product_id' => (int)($psDet['product_id'] ?? 0),
                            'name' => $itemDesc,
                            'service_name' => $itemDesc,
                            'product_name' => $itemDesc,
                            'quantity' => '1',
                            'cost' => $amtToAdd,
                            'price' => $amtToAdd,
                            'unit_cost' => $amtToAdd,
                            'unit_price' => $amtToAdd,
                            'line_cost_refund' => $amtToAdd,
                            'line_profit_refund' => '0',
                            'line_total_clawback' => $amtToAdd,
                            'return_destination' => 'expense',
                            'is_service' => false,
                            'is_manual_outlay' => true,
                        ];
                    } else {
                        // service_profit_share, manual_cost_markup, parts_profit_share
                        $pProfit = Decimal::add($pProfit, $amtToAdd);
                        $itemDesc = $psDet['service_name'] ?? ($psDet['description'] ?? ($psDet['product_name'] ?? ($order['service_name'] ?? 'Service Profit Share')));
                        $pItems[] = [
                            'item_id' => (int)($psDet['order_item_id'] ?? 0),
                            'product_id' => (int)($psDet['product_id'] ?? 0),
                            'name' => $itemDesc,
                            'service_name' => $itemDesc,
                            'product_name' => $itemDesc,
                            'quantity' => '1',
                            'cost' => '0',
                            'price' => $amtToAdd,
                            'unit_cost' => '0',
                            'unit_price' => $amtToAdd,
                            'line_cost_refund' => '0',
                            'line_profit_refund' => $amtToAdd,
                            'line_total_clawback' => $amtToAdd,
                            'return_destination' => 'service',
                            'is_service' => true,
                            'is_manual_outlay' => false,
                        ];
                    }
                }

                if (empty($pItems)) {
                    continue;
                }

                if (isset($settledByPartner[$payeeId])) {
                    $prevClaw = (string)$settledByPartner[$payeeId]['amount'];
                    $newCost = Decimal::add((string)$settledByPartner[$payeeId]['wholesale_cost'], $pCost);
                    $newProf = Decimal::add((string)$settledByPartner[$payeeId]['profit_share'], $pProfit);
                    $newTotalPayout = Decimal::add($newCost, $newProf);
                    $newClawAmt = Decimal::min($pSettledAmt, $newTotalPayout);
                    $settledByPartner[$payeeId]['wholesale_cost'] = $newCost;
                    $settledByPartner[$payeeId]['profit_share'] = $newProf;
                    $settledByPartner[$payeeId]['total_item_payout'] = $newTotalPayout;
                    $settledByPartner[$payeeId]['amount'] = $newClawAmt;
                    $settledByPartner[$payeeId]['items'] = array_merge($settledByPartner[$payeeId]['items'], $pItems);
                    $totalClawbackAll = Decimal::add(Decimal::sub($totalClawbackAll, $prevClaw), $newClawAmt);
                    $needsConsent = true;
                } else {
                    $pTotalPayout = Decimal::add($pCost, $pProfit);
                    $pClawAmt = Decimal::min($pSettledAmt, $pTotalPayout);
                    $settledByPartner[$payeeId] = [
                        'amount' => $pClawAmt,
                        'total_item_payout' => $pTotalPayout,
                        'wholesale_cost' => $pCost,
                        'profit_share' => $pProfit,
                        'seller_id' => $pPayerId,
                        'items' => $pItems,
                        'seller_profit_removed' => '0',
                    ];
                    $totalClawbackAll = Decimal::add($totalClawbackAll, $pClawAmt);
                    $needsConsent = true;
                }
            }

            // ── PHASE 1: CONSENT PATH (When consignment items are present) ──
            if ($needsConsent && count($settledByPartner) > 0) {
                // Set order status to return_pending
                $db->prepare('UPDATE orders SET status = "return_pending", return_reason = :reason, return_strategy = :strategy, returned_by = :returned_by, refusal_card_dismissed = 0 WHERE id = :id')
                   ->execute([
                       'reason' => $data['reason'] ?? '',
                       'strategy' => $returnStrategy,
                       'returned_by' => $initiatorId,
                       'id' => $id
                   ]);

                // Update return_acceptance_status on ALL selected returned items
                foreach ($selectedItems as $si) {
                    $supId = !empty($si['isolated_supplier_id']) ? (int)$si['isolated_supplier_id'] : (!empty($si['return_supplier_id']) ? (int)$si['return_supplier_id'] : null);
                    if (!$supId && ($si['return_destination'] ?? '') === 'isolated_lot') {
                        $purId = $si['purchase_id'] ?? null;
                        if ($purId) {
                            $pCheck = $db->prepare('SELECT supplier_id, merged_into_id, is_merged_master, status FROM purchases WHERE id = :pid');
                            $pCheck->execute(['pid' => $purId]);
                            $pRow = $pCheck->fetch(PDO::FETCH_ASSOC);
                            $walkbyId = self::getOrCreateWalkbySupplierId($db);
                            $isMerged = (!empty($pRow['merged_into_id']) || !empty($pRow['is_merged_master']) || ($pRow['status'] ?? '') === 'merged');
                            if (!$isMerged && !empty($pRow['supplier_id']) && (int)$pRow['supplier_id'] !== $walkbyId && (int)$pRow['supplier_id'] !== 1) {
                                $supId = (int)$pRow['supplier_id'];
                            } else {
                                $supId = $walkbyId;
                            }
                        }
                    }
                    $db->prepare('UPDATE order_items SET return_destination = :dest, return_supplier_id = :sid, return_acceptance_status = "pending" WHERE id = :id')
                       ->execute(['dest' => $si['return_destination'] ?? 'original_lot', 'sid' => $supId, 'id' => $si['id']]);
                }

                $historyStmt = $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, reason, created_at) VALUES (:order_id, :edited_by, :action, :changes, :reason, NOW())');
                $historyStmt->execute([
                    'order_id' => $id,
                    'edited_by' => $initiatorId,
                    'action' => 'return_pending_approval',
                    'changes' => json_encode([
                        'status' => ['from' => $order['status'], 'to' => 'return_pending'],
                        'clawback_amount' => $totalClawbackAll,
                        'partners_count' => count($settledByPartner),
                        'proposed_strategy' => $returnStrategy,
                        'returned_by' => $initiatorId,
                        'is_partial' => $isPartialReturn,
                        'returned_items_count' => count($selectedItems),
                    ]),
                    'reason' => $data['reason'] ?? 'Awaiting related users confirmation to refund claimed cash and restore stock'
                ]);

                // Resolve initiator name
                $initiatorName = 'Cashier';
                if (!empty($_SESSION['username'])) {
                    $initiatorName = $_SESSION['username'];
                } else {
                    $uStmt = $db->prepare('SELECT username FROM users WHERE id = :uid');
                    $uStmt->execute(['uid' => $initiatorId]);
                    $initiatorName = $uStmt->fetchColumn() ?: 'Cashier';
                }

                // Build rich payload for returned consignment items
                $buildItemPayload = function(array $it) use ($db) {
                    if (!empty($it['is_service']) || !empty($it['is_manual_outlay']) || (empty($it['id']) && empty($it['purchase_id']))) {
                        $origQty = (string)($it['quantity'] ?? '1');
                        $retQty = (string)($it['returned_quantity'] ?? $it['quantity'] ?? '1');
                        $remQty = Decimal::sub($origQty, $retQty);
                        $unitCost = (string)($it['cost'] ?? '0');
                        $unitPrice = (string)($it['price'] ?? '0');
                        $lineCostRefund = (string)($it['line_cost_refund'] ?? Decimal::mul($unitCost, $retQty));
                        $lineProfitRefund = (string)($it['line_profit_refund'] ?? '0');
                        $lineTotalClawback = (string)($it['line_total_clawback'] ?? Decimal::add($lineCostRefund, $lineProfitRefund));
                        $title = $it['service_name'] ?? ($it['name'] ?? ($it['product_name'] ?? 'Service'));

                        return [
                            'item_id' => (int)($it['item_id'] ?? 0),
                            'product_id' => (int)($it['product_id'] ?? 0),
                            'product_name' => $title,
                            'service_name' => $title,
                            'name' => $title,
                            'original_quantity' => Decimal::trimZeros($origQty),
                            'returned_quantity' => Decimal::trimZeros($retQty),
                            'remaining_quantity' => Decimal::trimZeros($remQty),
                            'quantity' => Decimal::trimZeros($retQty),
                            'cost' => $unitCost,
                            'price' => $unitPrice,
                            'unit_cost' => $unitCost,
                            'unit_price' => $unitPrice,
                            'line_cost_refund' => $lineCostRefund,
                            'line_profit_refund' => $lineProfitRefund,
                            'line_total_clawback' => $lineTotalClawback,
                            'return_destination' => $it['return_destination'] ?? (!empty($it['is_manual_outlay']) ? 'expense' : 'service'),
                            'return_supplier_id' => null,
                            'return_supplier_name' => null,
                            'return_supplier_is_walkby' => false,
                            'supplier_choice_mode' => 'service',
                            'origin_purchase_id' => null,
                            'origin_purchase_uid' => null,
                            'origin_supplier_name' => null,
                            'is_merged_origin' => false,
                            'is_service' => !empty($it['is_service']),
                            'is_manual_outlay' => !empty($it['is_manual_outlay']),
                        ];
                    }

                    $origQty = (string)($it['quantity'] ?? '1');
                    $retQty = (string)($it['returned_quantity'] ?? $it['quantity'] ?? '1');
                    $remQty = Decimal::sub($origQty, $retQty);
                    $unitCost = (string)($it['cost'] ?? '0');
                    $unitPrice = (string)($it['price'] ?? '0');
                    $lineCostRefund = Decimal::mul($unitCost, $retQty);
                    $totalOrigProfit = (string)($it['product_owner_profit'] ?? '0');
                    $lineProfitRefund = (Decimal::comp($origQty, '0') > 0 && Decimal::comp($origQty, $retQty) !== 0)
                        ? Decimal::div(Decimal::mul($totalOrigProfit, $retQty), $origQty)
                        : $totalOrigProfit;
                    $lineTotalClawback = Decimal::add($lineCostRefund, $lineProfitRefund);
                    $destination = $it['return_destination'] ?? 'original_lot';

                    $supId = !empty($it['return_supplier_id']) ? (int)$it['return_supplier_id'] : (!empty($it['isolated_supplier_id']) ? (int)$it['isolated_supplier_id'] : null);
                    $supName = null;
                    $supIsWalkby = false;

                    // Origin purchase lineage
                    $purId = !empty($it['purchase_id']) ? (int)$it['purchase_id'] : null;
                    $purUid = null;
                    $originSupName = null;
                    $isMergedMaster = false;

                    if ($purId) {
                        $pStmt = $db->prepare('SELECT p.id, p.uid, p.supplier_id, p.merged_into_id, p.is_merged_master, p.status, s.name AS supplier_name, s.is_walkby FROM purchases p LEFT JOIN suppliers s ON p.supplier_id = s.id WHERE p.id = :pid');
                        $pStmt->execute(['pid' => $purId]);
                        if ($pRow = $pStmt->fetch(PDO::FETCH_ASSOC)) {
                            $purUid = $pRow['uid'];
                            $originSupName = $pRow['supplier_name'];
                            $isMergedMaster = (!empty($pRow['merged_into_id']) || !empty($pRow['is_merged_master']) || ($pRow['status'] ?? '') === 'merged');
                            if (!$supId && $destination === 'isolated_lot') {
                                $walkbyId = self::getOrCreateWalkbySupplierId($db);
                                if (!$isMergedMaster && !empty($pRow['supplier_id']) && (int)$pRow['supplier_id'] !== $walkbyId && (int)$pRow['supplier_id'] !== 1) {
                                    $supId = (int)$pRow['supplier_id'];
                                } else {
                                    $supId = $walkbyId;
                                }
                            }
                        }
                    }

                    if ($supId) {
                        $sStmt = $db->prepare('SELECT name, is_walkby FROM suppliers WHERE id = :sid');
                        $sStmt->execute(['sid' => $supId]);
                        if ($sRow = $sStmt->fetch(PDO::FETCH_ASSOC)) {
                            $supName = $sRow['name'];
                            $supIsWalkby = !empty($sRow['is_walkby']);
                        }
                    }

                    return [
                        'item_id' => (int)$it['id'],
                        'product_id' => (int)($it['product_id'] ?? 0),
                        'product_name' => $it['name'] ?? '',
                        'original_quantity' => Decimal::trimZeros($origQty),
                        'returned_quantity' => Decimal::trimZeros($retQty),
                        'remaining_quantity' => Decimal::trimZeros($remQty),
                        'quantity' => Decimal::trimZeros($retQty),
                        'cost' => $unitCost,
                        'price' => $unitPrice,
                        'unit_cost' => $unitCost,
                        'unit_price' => $unitPrice,
                        'line_cost_refund' => $lineCostRefund,
                        'line_profit_refund' => $lineProfitRefund,
                        'line_total_clawback' => $lineTotalClawback,
                        'return_destination' => $destination,
                        'return_supplier_id' => $supId,
                        'return_supplier_name' => $supName,
                        'return_supplier_is_walkby' => $supIsWalkby,
                        'supplier_choice_mode' => $it['supplier_choice'] ?? ($supIsWalkby ? 'walkby' : 'original'),
                        'origin_purchase_id' => $purId,
                        'origin_purchase_uid' => $purUid,
                        'origin_supplier_name' => $originSupName,
                        'is_merged_origin' => $isMergedMaster,
                    ];
                };

                // Create consolidated clawback ticket for EACH partner stock owner
                foreach ($settledByPartner as $partnerId => $pData) {
                    $partnerClawAmt = $pData['amount'];
                    $partnerSellerId = $pData['seller_id'];
                    $isInitiator = ($partnerId === $initiatorId);

                    // Skip self-clawback if the partner is the seller
                    if ((int)$partnerId === (int)$partnerSellerId) {
                        continue;
                    }

                    $existingClawStmt = $db->prepare('SELECT id, status FROM partner_settlements WHERE related_entity_type = "orders" AND related_entity_id = :oid AND settlement_type = "order_return_clawback" AND payer_user_id = :payer AND status IN ("pending", "settled")');
                    $existingClawStmt->execute(['oid' => $id, 'payer' => $partnerId]);
                    $existingClaw = $existingClawStmt->fetch();

                    $pItemsPayload = array_map($buildItemPayload, $pData['items']);

                    if (!$existingClaw) {
                        $clawUid = "STL-" . date('Ymd') . "-" . strtoupper(substr(md5(random_bytes(8)), 0, 6));
                        $initialStatus = $isInitiator ? 'settled' : 'pending';
                        $initialAcceptance = $isInitiator ? 'accepted' : 'pending';
                        $settledAmt = $isInitiator ? $partnerClawAmt : 0;

                        $insClaw = $db->prepare('INSERT INTO partner_settlements (
                            uid, settlement_type, related_entity_type, related_entity_id, related_entity_uid,
                            payer_user_id, payee_user_id, amount, settled_amount,
                            status, acceptance_status, description, details, created_by, created_at' . ($isInitiator ? ', settled_at, settled_by' : '') . '
                        ) VALUES (
                            :uid, "order_return_clawback", "orders", :oid, :order_uid,
                            :payer, :payee, :amt, :settled_amt,
                            :st, :acc_st, :desc, :det, :created_by, NOW()' . ($isInitiator ? ', NOW(), :settled_by' : '') . '
                        )');

                        $insertParams = [
                            'uid' => $clawUid,
                            'oid' => $id,
                            'order_uid' => $orderUid,
                            'payer' => $partnerId,
                            'payee' => $partnerSellerId,
                            'amt' => $partnerClawAmt,
                            'settled_amt' => $settledAmt,
                            'st' => $initialStatus,
                            'acc_st' => $initialAcceptance,
                            'desc' => "Return Clawback for Order #{$orderUid}" . ($isInitiator ? ' (Auto-Accepted by Initiator)' : ''),
                            'det' => json_encode([
                                'order_id' => $id,
                                'order_uid' => $orderUid,
                                'clawback_amount' => $partnerClawAmt,
                                'wholesale_cost_refund' => $pData['wholesale_cost'] ?? '0',
                                'profit_share_refund' => $pData['profit_share'] ?? '0',
                                'order_total_items_count' => count($allItems),
                                'order_returned_items_count' => count($selectedItems),
                                'order_remaining_items_count' => count($allItems) - count($selectedItems),
                                'reason' => $data['reason'] ?? '',
                                'proposed_strategy' => $returnStrategy,
                                'initiated_by' => $initiatorId,
                                'initiator_name' => $initiatorName,
                                'is_initiator' => $isInitiator,
                                'is_individual_item_return' => $isPartialReturn,
                                'returned_items' => $pItemsPayload,
                                'seller_profit_removed' => $pData['seller_profit_removed'],
                            ], JSON_UNESCAPED_UNICODE),
                            'created_by' => $initiatorId,
                        ];
                        if ($isInitiator) {
                            $insertParams['settled_by'] = $initiatorId;
                        }
                        $insClaw->execute($insertParams);
                        $newClawId = (int)$db->lastInsertId();

                        // If initiator stock owner: immediately execute clawback cash deduction from initiator safe to seller safe
                        if ($isInitiator && Decimal::comp($partnerClawAmt, '0') > 0) {
                            (new CashVaultController())->ensureTwoSafes($db);
                            CashVaultController::logFlow(
                                $db,
                                'partner_settlement',
                                'out',
                                $partnerClawAmt,
                                'partner_settlements',
                                $newClawId,
                                "Return Clawback Payout for Order " . ($order['uid'] ?? "#$id") . " to Seller (Initiator Auto-Accepted)",
                                $initiatorId,
                                true
                            );
                            CashVaultController::logFlow(
                                $db,
                                'partner_settlement',
                                'in',
                                $partnerClawAmt,
                                'partner_settlements',
                                $newClawId,
                                "Return Clawback Received from Stock Owner for Order " . ($order['uid'] ?? "#$id") . " (Initiator Auto-Accepted)",
                                $sellerId
                            );
                        }
                    }

                    // Dispatch notification to non-initiator partners
                    if (!$isInitiator) {
                        try {
                            $notifTitle = "Return Clawback Requested: #{$orderUid}";
                            $notifMsg = Decimal::comp($partnerClawAmt, '0') > 0
                                ? "@{$initiatorName} requested to return items from Order #{$orderUid}. Accept to refund " . Decimal::format($partnerClawAmt, 2) . " DZD from your cash safe and restore stock to your inventory."
                                : "@{$initiatorName} requested to return items from Order #{$orderUid}. Accept to approve the return and restore returned stock to your inventory.";
                            $db->prepare('INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, "settlement", :title, :body, :aurl, "orders", :eid, :stag, 0, NOW())')
                               ->execute([
                                   'uid'   => $partnerId,
                                   'title' => $notifTitle,
                                   'body'  => $notifMsg,
                                   'aurl'  => "#order-details:{$id}",
                                   'eid'   => (int)$id,
                                   'stag'  => "order_clawback_requested_{$id}_{$partnerId}",
                               ]);
                        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
                    }
                }

                // If initiator is a stock owner (NOT the seller):
                // Create a confirmation ticket in partner_settlements for the Seller and notify Seller!
                if ($initiatorId !== $sellerId) {
                    $existingSellerClawStmt = $db->prepare('SELECT id FROM partner_settlements WHERE related_entity_type = "orders" AND related_entity_id = :oid AND settlement_type = "order_return_clawback" AND payer_user_id = :payer AND status IN ("pending", "settled")');
                    $existingSellerClawStmt->execute(['oid' => $id, 'payer' => $sellerId]);
                    $existingSellerClaw = $existingSellerClawStmt->fetch();

                    $allSelectedPayload = array_map($buildItemPayload, array_values($selectedItems));
                    if (empty($allSelectedPayload)) {
                        foreach ($settledByPartner as $pData) {
                            if (!empty($pData['items'])) {
                                foreach ($pData['items'] as $pItm) {
                                    $allSelectedPayload[] = $buildItemPayload($pItm);
                                }
                            }
                        }
                    }

                    $totalWholesaleCostAll = '0';
                    $totalProfitShareAll = '0';
                    $totalReturnValueAll = '0';
                    foreach ($allSelectedPayload as $itPayload) {
                        $totalWholesaleCostAll = Decimal::add($totalWholesaleCostAll, (string)($itPayload['line_cost_refund'] ?? '0'));
                        $totalProfitShareAll = Decimal::add($totalProfitShareAll, (string)($itPayload['line_profit_refund'] ?? '0'));
                        $totalReturnValueAll = Decimal::add($totalReturnValueAll, (string)($itPayload['line_total_clawback'] ?? '0'));
                    }

                    if (!$existingSellerClaw) {
                        $sellerClawUid = "STL-" . date('Ymd') . "-" . strtoupper(substr(md5(random_bytes(8)), 0, 6));
                        $insClaw = $db->prepare('INSERT INTO partner_settlements (
                            uid, settlement_type, related_entity_type, related_entity_id, related_entity_uid,
                            payer_user_id, payee_user_id, amount, settled_amount,
                            status, acceptance_status, description, details, created_by, created_at
                        ) VALUES (
                            :uid, "order_return_clawback", "orders", :oid, :order_uid,
                            :payer, :payee, 0, 0,
                            "pending", "pending", :desc, :det, :created_by, NOW()
                        )');
                        $insClaw->execute([
                            'uid' => $sellerClawUid,
                            'oid' => $id,
                            'order_uid' => $orderUid,
                            'payer' => $sellerId,
                            'payee' => $initiatorId,
                            'desc' => "Return Confirmation for Order #{$orderUid}",
                            'det' => json_encode([
                                'order_id' => $id,
                                'order_uid' => $orderUid,
                                'clawback_amount' => '0',
                                'is_seller_confirmation' => true,
                                'is_individual_item_return' => $isPartialReturn,
                                'order_total_items_count' => count($allItems),
                                'order_returned_items_count' => count($selectedItems),
                                'order_remaining_items_count' => count($allItems) - count($selectedItems),
                                'returned_items' => $allSelectedPayload,
                                'reason' => $data['reason'] ?? '',
                                'proposed_strategy' => $returnStrategy,
                                'initiated_by' => $initiatorId,
                                'initiator_name' => $initiatorName,
                                'wholesale_cost_refund' => $totalWholesaleCostAll,
                                'profit_share_refund' => $totalProfitShareAll,
                                'total_return_value' => $totalReturnValueAll,
                            ], JSON_UNESCAPED_UNICODE),
                            'created_by' => $initiatorId,
                        ]);
                    }

                    // Dispatch notification to Seller
                    try {
                        $notifTitle = "Return Requested: #{$orderUid}";
                        $notifMsg = "@{$initiatorName} (Stock Owner) requested to return item(s) from Order #{$orderUid}. Accept to confirm customer refund and restock items.";
                        $db->prepare('INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, "settlement", :title, :body, :aurl, "orders", :eid, :stag, 0, NOW())')
                           ->execute([
                               'uid'   => $sellerId,
                               'title' => $notifTitle,
                               'body'  => $notifMsg,
                               'aurl'  => "#order-details:{$id}",
                               'eid'   => (int)$id,
                               'stag'  => "order_clawback_requested_{$id}_{$sellerId}",
                           ]);
                    } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
                }

                $db->commit();
                SystemLog::write('orders', 'return_requested_pending', (int)$id, $order['service_name'] ?? "Order #$id", json_encode([
                    'uid' => $orderUid,
                    'status' => 'return_pending',
                    'clawback_amount' => $totalClawbackAll,
                    'partners_count' => count($settledByPartner),
                    'returned_by' => $initiatorId,
                    'is_partial' => $isPartialReturn,
                    'reason' => $data['reason'] ?? ''
                ]));

                EntityVersion::bump($db, 'orders', 'partner_settlements');
                Response::json([
                    'ok' => true,
                    'status' => 'return_pending',
                    'return_pending' => true,
                    'clawback_amount' => $totalClawbackAll,
                    'message' => 'Return request submitted. Awaiting related users confirmation.'
                ]);
                return;
            }

            // ── PHASE 2: DIRECT RETURN EXECUTION (No partner consent required) ──
            $returnedRevenue = '0';
            $returnedCost = '0';
            $returnedProfit = '0';
            $restoreSummary = ['returned_items_count' => count($selectedItems)];
            $isPureServiceOrder = empty($allItems) || (empty($selectedItems) && !empty($order['service_name']));

            if ($isPureServiceOrder) {
                // Pure custom service order / custom sale with no physical items
                $returnedRevenue = (string)$order['total'];
                $returnedCost = Decimal::add((string)($order['products_cost'] ?? '0'), (string)($order['manual_cost'] ?? '0'));
                $returnedProfit = (string)($order['profit'] ?? '0');
                $restoreSummary = [
                    'is_custom_service' => true,
                    'service_name' => $order['service_name'] ?? "Order #$id",
                    'returned_items_count' => 1
                ];
            } else {
                // Sort items deterministically by product_id, purchase_id, and id to prevent InnoDB deadlocks
                usort($selectedItems, function ($a, $b) {
                    $pDiff = ((int)($a['product_id'] ?? 0)) - ((int)($b['product_id'] ?? 0));
                    if ($pDiff !== 0) return $pDiff;
                    $purDiff = ((int)($a['purchase_id'] ?? 0)) - ((int)($b['purchase_id'] ?? 0));
                    if ($purDiff !== 0) return $purDiff;
                    return ((int)($a['id'] ?? 0)) - ((int)($b['id'] ?? 0));
                });

                foreach ($selectedItems as $item) {
                    $itemId = (int)$item['id'];
                    $destination = $item['return_destination'] ?? $returnStrategy;
                    $origQty = (string)($item['quantity'] ?? '1');
                    $retQty = (string)($item['returned_quantity'] ?? $origQty);
                    if (Decimal::comp($retQty, '0') <= 0) continue;
                    if (Decimal::comp($retQty, $origQty) > 0) $retQty = $origQty;

                    // Restore stock into chosen lot with exact returned quantity
                    $itemForRestock = $item;
                    $itemForRestock['quantity'] = $retQty;
                    $actualReturnPurchaseId = null;
                    if (in_array($order['status'], ['completed', 'delivered', 'pending_money'], true)) {
                        $actualReturnPurchaseId = self::processReturnDestination($db, $itemForRestock, $destination, (int)$id);
                    } else {
                        self::releaseInventory($db, [$itemForRestock]);
                    }

                    $supId = !empty($item['isolated_supplier_id']) ? (int)$item['isolated_supplier_id'] : (!empty($item['return_supplier_id']) ? (int)$item['return_supplier_id'] : null);

                    if (Decimal::comp($retQty, $origQty) < 0) {
                        $remQty = Decimal::sub($origQty, $retQty);
                        $db->prepare('UPDATE order_items SET quantity = :rem, return_purchase_id = NULL, return_destination = NULL, return_supplier_id = NULL, return_acceptance_status = NULL WHERE id = :id')
                           ->execute(['rem' => $remQty, 'id' => $itemId]);

                        $insSplit = $db->prepare('INSERT INTO order_items (
                            order_id, product_id, purchase_id, name, price, quantity, cost,
                            owner_user_id, cost_owner_id, return_purchase_id, return_destination,
                            return_supplier_id, return_acceptance_status, is_returned, returned_at, returned_by
                        ) VALUES (
                            :oid, :pid, :puid, :name, :price, :qty, :cost,
                            :ouid, :couid, :ret_pur, :dest,
                            :sid, "accepted", 1, NOW(), :uid
                        )');
                        $insSplit->execute([
                            'oid' => $id,
                            'pid' => $item['product_id'] ?? null,
                            'puid' => $item['purchase_id'] ?? null,
                            'name' => $item['name'] ?? '',
                            'price' => $item['price'] ?? 0,
                            'qty' => $retQty,
                            'cost' => $item['cost'] ?? 0,
                            'ouid' => $item['owner_user_id'] ?? null,
                            'couid' => $item['cost_owner_id'] ?? null,
                            'ret_pur' => $actualReturnPurchaseId ?: ($item['return_purchase_id'] ?? null),
                            'dest' => $destination,
                            'sid' => $supId,
                            'uid' => $currentUserId ?: null
                        ]);
                    } else {
                        // Full line return
                        $db->prepare('UPDATE order_items SET return_destination = :dest, return_supplier_id = COALESCE(:sid, return_supplier_id), return_acceptance_status = "accepted", is_returned = 1, returned_at = NOW(), returned_by = :uid WHERE id = :id')
                           ->execute(['dest' => $destination, 'sid' => $supId, 'uid' => $currentUserId ?: null, 'id' => $itemId]);
                    }

                    $linePrice = Decimal::mul((string)($item['price'] ?? '0'), $retQty);
                    $lineCost = Decimal::mul((string)($item['cost'] ?? '0'), $retQty);
                    $lineProfit = Decimal::sub($linePrice, $lineCost);

                    $returnedRevenue = Decimal::add($returnedRevenue, $linePrice);
                    $returnedCost = Decimal::add($returnedCost, $lineCost);
                    $returnedProfit = Decimal::add($returnedProfit, $lineProfit);
                }

                // If full return of all items in an order that also includes custom service fee or manual costs:
                if (!$isPartialReturn && Decimal::comp((string)$order['total'], $returnedRevenue) > 0) {
                    $returnedRevenue = (string)$order['total'];
                    $returnedCost = Decimal::add((string)($order['products_cost'] ?? '0'), (string)($order['manual_cost'] ?? '0'));
                    $returnedProfit = (string)($order['profit'] ?? '0');
                }
            }

            // Calculate customer safe cash refund
            $settleKind = $order['settle_kind'] ?? 'cash';
            $netCashCollected = '0';
            if ($settleKind !== 'product') {
                $custPayStmt = $db->prepare("SELECT user_id,
                    COALESCE(SUM(CASE WHEN direction = 'in' AND type IN ('customer_payment', 'service_deposit', 'service_final_payment', 'service_payment') THEN amount ELSE 0 END), 0) as total_cust_in,
                    COALESCE(SUM(CASE WHEN direction = 'out' AND type IN ('customer_payment', 'customer_refund', 'service_deposit_refund', 'service_refund', 'order_refund') THEN amount ELSE 0 END), 0) as total_cust_out
                    FROM cash_transactions WHERE related_entity_type = 'orders' AND related_entity_id = :id
                    GROUP BY user_id");
                $custPayStmt->execute(['id' => $id]);
                $custRows = $custPayStmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($custRows as $crow) {
                    $netCust = Decimal::sub((string)$crow['total_cust_in'], (string)$crow['total_cust_out']);
                    if (Decimal::comp($netCust, '0') > 0) {
                        $netCashCollected = Decimal::add($netCashCollected, $netCust);
                    }
                }
            }

            // Extinguish unpaid customer debt first before physical safe cash outflow
            $unpaidDebt = Decimal::sub((string)($order['total'] ?? '0'), $netCashCollected);
            if (Decimal::comp($unpaidDebt, '0') < 0) $unpaidDebt = '0';
            $debtReduction = Decimal::min($returnedRevenue, $unpaidDebt);
            $refundableAfterDebt = Decimal::sub($returnedRevenue, $debtReduction);
            $refundCash = Decimal::min($refundableAfterDebt, $netCashCollected);

            if (Decimal::comp($refundCash, '0') > 0) {
                CashVaultController::logFlow(
                    $db,
                    'customer_payment',
                    'out',
                    $refundCash,
                    'orders',
                    (int)$id,
                    "Customer refund on return (" . ($isPureServiceOrder ? "Custom Service" : (count($selectedItems) . " items")) . ") — " . ($order['uid'] ?? "Order #$id"),
                    $sellerId,
                    true
                );
            }

            // Recalculate order financial totals
            $newTotal = Decimal::sub((string)$order['total'], $returnedRevenue);
            if (Decimal::comp($newTotal, '0') < 0) $newTotal = '0';
            $newCost = Decimal::sub((string)($order['products_cost'] ?? '0'), $returnedCost);
            if (Decimal::comp($newCost, '0') < 0) $newCost = '0';
            $newProfit = Decimal::sub((string)($order['profit'] ?? '0'), $returnedProfit);
            $newAmountPaid = Decimal::sub((string)($order['amount_paid'] ?? '0'), $refundCash);
            if (Decimal::comp($newAmountPaid, '0') < 0) $newAmountPaid = '0';

            // Check if any unreturned items remain in the order
            $unretStmt = $db->prepare('SELECT COUNT(*) FROM order_items WHERE order_id = :id AND is_returned = 0');
            $unretStmt->execute(['id' => $id]);
            $unreturnedCount = (int)$unretStmt->fetchColumn();

            if (!$isPureServiceOrder && $unreturnedCount > 0) {
                // PARTIAL RETURN: order remains completed, has_partial_returns = 1
                $db->prepare('UPDATE orders SET total = :tot, products_cost = :cost, profit = :prof, amount_paid = :paid, has_partial_returns = 1, return_strategy = :strat, returned_at = NOW(), returned_by = :uid, return_reason = :reason WHERE id = :id')
                   ->execute([
                       'tot' => $newTotal,
                       'cost' => $newCost,
                       'prof' => $newProfit,
                       'paid' => $newAmountPaid,
                       'strat' => $returnStrategy,
                       'uid' => $currentUserId ?: null,
                       'reason' => $data['reason'] ?? '',
                       'id' => $id
                   ]);

                self::recordOrderHistory(
                    $db,
                    (int)$id,
                    $currentUserId ?: null,
                    'partial_return_processed',
                    [
                        'returned_items_count' => count($selectedItems),
                        'remaining_items_count' => $unreturnedCount,
                        'returned_items' => array_values(array_map(function($it) {
                            return [
                                'id' => (int)($it['id'] ?? 0),
                                'product_id' => (int)($it['product_id'] ?? 0),
                                'name' => $it['name'] ?? '',
                                'quantity' => $it['returned_quantity'] ?? $it['quantity'] ?? '0',
                                'price' => $it['price'] ?? '0',
                                'cost' => $it['cost'] ?? '0',
                                'return_destination' => $it['return_destination'] ?? 'original_lot'
                            ];
                        }, $selectedItems)),
                        'refunded_cash' => $refundCash,
                        'new_total' => $newTotal,
                        'new_profit' => $newProfit,
                        'new_amount_paid' => $newAmountPaid,
                        'strategy' => $returnStrategy,
                    ],
                    $data['reason'] ?? 'Partial order return'
                );

                $db->commit();
                EntityVersion::bump($db, 'orders', 'products', 'cash_vault', 'purchases');

                Response::json([
                    'ok' => true,
                    'partially_returned' => true,
                    'new_total' => $newTotal,
                    'new_cost' => $newCost,
                    'new_profit' => $newProfit,
                    'new_amount_paid' => $newAmountPaid,
                    'refunded_cash' => $refundCash,
                    'message' => 'Selected item(s) returned successfully'
                ]);
                return;
            } else {
                // FULL RETURN: all items returned
                $finalReturnStatus = 'returned';

                // Refund any manual outlays
                $outlayStmt = $db->prepare("SELECT user_id, 
                    COALESCE(SUM(CASE WHEN direction = 'out' AND type IN ('manual_outlay_expense', 'manual_cost_expense') THEN amount ELSE 0 END), 0) as total_outlay_out,
                    COALESCE(SUM(CASE WHEN direction = 'in' AND type IN ('manual_outlay_refund', 'manual_cost_refund') THEN amount ELSE 0 END), 0) as total_outlay_in
                    FROM cash_transactions WHERE related_entity_type = 'orders' AND related_entity_id = :id
                    GROUP BY user_id");
                $outlayStmt->execute(['id' => $id]);
                $outlayRows = $outlayStmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($outlayRows as $orow) {
                    $netOutlay = Decimal::sub((string)$orow['total_outlay_out'], (string)$orow['total_outlay_in']);
                    if (Decimal::comp($netOutlay, '0') > 0) {
                        CashVaultController::logFlow(
                            $db,
                            'manual_outlay_refund',
                            'in',
                            $netOutlay,
                            'orders',
                            (int)$id,
                            "Outlay refunded due to return of Order " . ($order['uid'] ?? "#$id"),
                            (int)$orow['user_id']
                        );
                    }
                }

                $db->prepare('UPDATE orders SET status = "returned", returned_at = NOW(), returned_by = :user_id, return_reason = :reason, return_strategy = :return_strategy, amount_paid = 0 WHERE id = :id')
                   ->execute([
                       'user_id' => $currentUserId ?: null,
                       'reason' => $data['reason'] ?? '',
                       'return_strategy' => $returnStrategy,
                       'id' => $id
                   ]);

                $this->cancelPartnerSettlements($db, (int)$id, 'Order returned');

                $fromLabel = $order['status'] === 'pending_money' ? 'Pending payment' : ($order['status'] === 'completed' ? 'Completed' : ucfirst($order['status']));
                self::recordOrderHistory(
                    $db,
                    (int)$id,
                    $currentUserId ?: null,
                    'return_processed',
                    [
                        'Status' => ['from' => $fromLabel, 'to' => 'Returned'],
                        'Strategy' => $returnStrategy,
                        'Summary' => $restoreSummary,
                        'returned_items_count' => count($selectedItems),
                        'returned_items' => array_values(array_map(function($it) {
                            return [
                                'id' => (int)($it['id'] ?? 0),
                                'product_id' => (int)($it['product_id'] ?? 0),
                                'name' => $it['name'] ?? '',
                                'quantity' => $it['returned_quantity'] ?? $it['quantity'] ?? '0',
                                'price' => $it['price'] ?? '0',
                                'cost' => $it['cost'] ?? '0',
                                'return_destination' => $it['return_destination'] ?? 'original_lot'
                            ];
                        }, $selectedItems)),
                        'refunded_cash' => $refundCash,
                        'total_returned' => $returnedRevenue,
                    ],
                    $data['reason'] ?? 'Full order return'
                );

                // Notify all mentioned stakeholders of return completion
                $mentionedUserIds = self::getOrderMentionedUserIds($db, (int)$id, $order);
                $currName = $_SESSION['username'] ?? 'Cashier';
                $retOrderUid = $order['uid'] ?? "#$id";
                foreach ($mentionedUserIds as $mUid) {
                    if ($mUid === $currentUserId) continue;
                    try {
                        $db->prepare('INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, "settlement", :title, :body, :aurl, "orders", :eid, :stag, 0, NOW())')
                           ->execute([
                               'uid'   => $mUid,
                               'title' => "Order #{$retOrderUid} Returned",
                               'body'  => "@{$currName} returned Order #{$retOrderUid}. Stock restored and customer refunded.",
                               'aurl'  => "#order-details:{$id}",
                               'eid'   => (int)$id,
                               'stag'  => "order_returned_{$id}_{$mUid}",
                           ]);
                    } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
                }

                $db->commit();
                SystemLog::write('orders', 'status_changed', (int)$id, $order['service_name'] ?? "Order #$id", json_encode([
                    'uid' => $order['uid'] ?? null,
                    'from' => $order['status'],
                    'to' => 'returned',
                    'strategy' => $returnStrategy,
                    'refunded_cash' => $refundCash,
                    'reason' => $data['reason'] ?? ''
                ]));

                EntityVersion::bump($db, 'orders', 'partner_settlements', 'cash_vault', 'products', 'purchases');

                Response::json([
                    'ok' => true,
                    'strategy' => $returnStrategy,
                    'refunded_cash' => $refundCash,
                    'restored_summary' => $restoreSummary
                ]);
                return;
            }
        }

    $completedBy = $status === 'completed' ? ($_SESSION['user_id'] ?? null) : null;
    // Completing records the order as fully paid at its final total; any other
    // status change leaves the running amount_paid untouched.
    $newAmountPaid = $status === 'completed' ? $newTotal : ($order['amount_paid'] ?? '0');
    $stmt = $db->prepare('UPDATE orders SET status = :status, completed_at = CASE WHEN :status_completed = "completed" THEN NOW() ELSE NULL END, completed_by = :completed_by, paid_at = CASE WHEN :status_completed = "completed" THEN NOW() ELSE NULL END, paid_by = CASE WHEN :status_completed = "completed" THEN :completed_by ELSE NULL END, total = :total, profit = :profit, amount_paid = :amount_paid WHERE id = :id');
    $stmt->execute([
        'status' => $status,
        'status_completed' => $status,
        'completed_by' => $completedBy,
        'total' => $newTotal,
        'profit' => $newProfit,
        'amount_paid' => $newAmountPaid,
        'id' => $id
    ]);
    
    // Log the status change
    if ($order['status'] !== $status) {
        $statusChangePayload = ['Status' => ['from' => ucfirst((string)$order['status']), 'to' => ucfirst($status)]];
        if ($actualPaidOverride !== null) {
            $statusChangePayload['Amount Customer Paid'] = $actualPaidOverride;
            if (Decimal::comp($newProfit, (string)($order['profit'] ?? '0')) !== 0) {
                $statusChangePayload['Realized Profit'] = [
                    'from' => (string)($order['profit'] ?? '0'),
                    'to'   => $newProfit
                ];
            }
        }
        $historyStmt = $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())');
        $historyStmt->execute([
            'order_id' => $id,
            'edited_by' => $_SESSION['user_id'] ?? null,
            'action' => 'status_changed',
            'changes' => json_encode($statusChangePayload)
        ]);

        if ($status === 'completed' && $order['status'] !== 'completed' && $order['status'] !== 'pending_money' && Decimal::comp($newTotal, '0') > 0) {
            $payHistStmt = $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())');
            $payHistStmt->execute([
                'order_id' => $id,
                'edited_by' => $_SESSION['user_id'] ?? null,
                'action' => 'payment_recorded',
                'changes' => json_encode([
                    'amount' => $newTotal,
                    'total_paid' => $newTotal,
                    'note' => "Order completed from " . ucfirst((string)$order['status'])
                ])
            ]);
        }
    }

    // Generate partner settlements when order becomes completed (remain in locked status until manual release)
    if ($status === 'completed') {
        if ($actualPaidOverride !== null && !empty($order['custom_sale'])) {
            $delta = Decimal::sub($newTotal, (string)$order['total']);
            if (Decimal::comp($delta, '0') !== 0) {
                $this->applyCustomServiceOwnerProfitDelta($db, (int)$id, $delta);
            }
        }
        $this->generatePartnerSettlements($db, (int)$id, $order['uid'] ?? '', (int)($order['owner_user_id'] ?? $_SESSION['user_id'] ?? 1));
        self::notifyPartnersOrderCompleted($db, (int)$id, $order['uid'] ?? "ORD-$id", (int)($order['owner_user_id'] ?? $_SESSION['user_id'] ?? 1));
    }

        if ($db->inTransaction()) {
            $db->commit();
        }
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("Failed to update order status in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to update order status. Please check server error logs.'], 500);
            return;
        }

    if ($order['status'] !== $status) {
        $sysLogPayload = ['uid' => $order['uid'] ?? null, 'from' => $order['status'], 'to' => $status];
        if ($actualPaidOverride !== null) {
            $sysLogPayload['actual_paid'] = $actualPaidOverride;
            if (Decimal::comp($newProfit, (string)($order['profit'] ?? '0')) !== 0) {
                $sysLogPayload['profit'] = [
                    'from' => (string)($order['profit'] ?? '0'),
                    'to'   => $newProfit
                ];
            }
        }
        SystemLog::write('orders', 'status_changed', (int)$id, $order['service_name'] ?? "Order #$id", json_encode($sysLogPayload));

        if ($status === 'completed' && $order['status'] !== 'completed' && $order['status'] !== 'pending_money' && Decimal::comp($newTotal, '0') > 0) {
            SystemLog::write('orders', 'customer_payment', (int)$id, $order['service_name'] ?? ("Order #" . ($order['uid'] ?? $id)), json_encode([
                'amount_paid_now' => $newTotal,
                'amount_paid_total' => $newTotal,
                'remaining' => '0',
                'final' => true,
                'fully_collected' => true,
                'note' => "Order completed from " . ucfirst((string)$order['status'])
            ]));
        }
    }

    EntityVersion::bump($db, 'orders', 'partner_settlements', 'cash_vault', 'products', 'purchases');

    Response::json(['ok' => true]);
    }

    public function destroy(string $id, array $data = []): void
    {
        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);
        $this->ensureOrderHistoryTable($db);
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT id, uid, status, amount_paid, service_name, settle_kind, settle_product_id, settle_quantity, settle_purchase_id, settle_consumed, deleted_at, custom_sale, agreement_status, is_locked_for_edit, owner_user_id, created_by FROM orders WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $order = $stmt->fetch();
        if (!$order) {
            $db->rollBack();
            Response::json(['error' => 'Order not found'], 404);
            return;
        }

        // Rule 54: Strict Mentioned-User Mutation Isolation
        $sessionUid = (int)($_SESSION['user_id'] ?? 0);
        $mentionedUsers = self::getOrderMentionedUserIds($db, (int)$id, $order);
        if (!in_array($sessionUid, $mentionedUsers, true)) {
            $db->rollBack();
            Response::json(['error' => 'Forbidden: Only users mentioned on this order are authorized to delete it.'], 403);
            return;
        }

        $reason = trim((string)($data['reason'] ?? $data['delete_reason'] ?? ''));
        if (empty($reason)) {
            $db->rollBack();
            Response::json([
                'error' => 'Deletion reason is strictly required to archive an order.',
                'required_field' => 'reason'
            ], 422);
            return;
        }

        $isPhase2 = (!empty($order['is_locked_for_edit']) || ($order['agreement_status'] ?? '') === 'all_accepted');
        if ($isPhase2) {
            $db->rollBack();
            Response::json(['error' => 'Orders in Phase 2 cannot be deleted. Please use the Return workflow instead.'], 422);
            return;
        }

        // For normal orders or non-Phase 1 orders, customer payment blocks delete.
        // For Phase 1 Custom Services, we allow deletion because any collected deposit/downpayment will be cleanly reversed from cash safe below.
        $isPhase1CS = !empty($order['custom_sale']) && !$isPhase2;
        if (!$isPhase1CS && Decimal::comp((string)($order['amount_paid'] ?? '0'), '0') > 0) {
            $db->rollBack();
            Response::json(['error' => 'This order has recorded customer payments and cannot be deleted. Please use the Return / Refund workflow instead.'], 400);
            return;
        }

        if (!$isPhase1CS) {
            $custPayCheck = $db->prepare("SELECT 1 FROM cash_transactions WHERE related_entity_type = 'orders' AND related_entity_id = :id AND direction = 'in' LIMIT 1");
            $custPayCheck->execute(['id' => $id]);
            if ($custPayCheck->fetch()) {
                $db->rollBack();
                Response::json(['error' => 'This order has recorded cash transactions and cannot be deleted. Please use the Return / Refund workflow instead.'], 400);
                return;
            }
        }

        // Settled partner settlements guard
        $settledCheck = $db->prepare("SELECT 1 FROM partner_settlements 
            WHERE related_entity_type = 'orders' 
              AND related_entity_id = :id 
              AND (status = 'settled' OR CAST(settled_amount AS DECIMAL(32,16)) > 0) 
            LIMIT 1");
        $settledCheck->execute(['id' => $id]);
        if ($settledCheck->fetch()) {
            $db->rollBack();
            Response::json(['error' => 'This order has settled partner payouts and cannot be deleted. Please use the Return / Refund workflow instead.'], 400);
            return;
        }

        if ($order['status'] === 'completed' || $order['status'] === 'delivered') {
            $db->rollBack();
            Response::json(['error' => 'Completed orders cannot be deleted. They can only be returned.'], 400);
            return;
        }

        if ($order['status'] === 'deleted' || $order['status'] === 'returned' || $order['deleted_at'] !== null) {
            $db->rollBack();
            Response::json(['error' => 'This order is already in the past and cannot be deleted again', 'order_deleted' => true], 400);
            return;
        }

        // Coin-swap sale: unwind it (restore the sold coin, remove the received coin
        // lot), then soft-delete the order. Blocked only if the received coin has
        // already been sold/used past this sale (the user's chosen rule).
        if (($order['settle_kind'] ?? 'cash') === 'product') {
            $receivedLot = null;
            $err = $this->unwindCoinSale($db, $order, 'deleted', $receivedLot);
            if ($err) { $db->rollBack(); Response::json(['error' => $err], 400); return; }

            $db->prepare('INSERT INTO order_history (order_id, edited_by, action, reason, created_at) VALUES (:order_id, :edited_by, :action, :reason, NOW())')
               ->execute(['order_id' => $order['id'], 'edited_by' => $_SESSION['user_id'] ?? null, 'action' => 'deleted', 'reason' => $reason]);

            $db->commit();

            SystemLog::write('orders', 'deleted', (int) $order['id'], $order['service_name'] ?? ("Order #" . $order['id']), json_encode([
                'uid' => $order['uid'] ?? null,
                'previous_status' => $order['status'],
                'settle_kind' => 'product',
                'reason' => $reason,
                'status' => 'deleted',
            ]));
            if ($receivedLot) {
                SystemLog::write('purchases', 'deleted', (int) $receivedLot['id'], $receivedLot['name'] ?? null, json_encode([
                    'uid' => $receivedLot['uid'] ?? null,
                    'reason' => 'Coin-swap sale reversed',
                    'settle_kind' => 'received',
                    'status' => 'deleted',
                ]));
            }
            EntityVersion::bump($db, 'orders', 'partner_settlements', 'cash_vault', 'products', 'purchases');
            Response::json(['ok' => true]);
            return;
        }

        $items = $db->prepare('SELECT * FROM order_items WHERE order_id = :id AND is_returned = 0');
        $items->execute(['id' => $id]);
        $items = $items->fetchAll();

        $rawStrategy = $data['return_strategy'] ?? 'absorb_master';
        $strategy = in_array($rawStrategy, ['absorb_master', 'isolated_lot'], true) ? $rawStrategy : 'absorb_master';

        $restoreSummary = [];
        // Handle inventory based on order status
        if ($order['status'] === 'completed' || $order['status'] === 'delivered' || $order['status'] === 'pending_money') {
            // Completed / pending-payment orders: restore inventory (already deducted) with full recursive lineage and dual strategy support
            $restoreSummary = self::restoreInventory($db, $items, $strategy, $order['uid'] ?? null, (int)$id);
        } else {
            // Pending/Processing orders: release reservation (inventory was never deducted)
            $this->releaseInventory($db, $items);
        }

        // Soft delete: update status and record metadata
        $stmt = $db->prepare('UPDATE orders SET status = "deleted", return_strategy = :strategy, delete_reason = :reason, deleted_at = NOW(), deleted_by = :user_id WHERE id = :id');
        $stmt->execute([
            'strategy' => $strategy,
            'reason'   => $reason,
            'user_id'  => $_SESSION['user_id'] ?? null,
            'id'       => $id
        ]);
        
        $snapshot = self::captureOrderSnapshot($db, (int)$id);
        $historyStmt = $db->prepare('INSERT INTO order_history (order_id, edited_by, action, reason, changes, snapshot, created_at) VALUES (:order_id, :edited_by, :action, :reason, :changes, :snapshot, NOW())');
        $historyStmt->execute([
            'order_id' => $id,
            'edited_by' => $_SESSION['user_id'] ?? null,
            'action' => 'deleted',
            'reason' => $reason,
            'changes' => json_encode([
                'return_strategy' => $strategy,
                'restored_items'  => $restoreSummary,
            ], JSON_UNESCAPED_UNICODE),
            'snapshot' => !empty($snapshot) ? json_encode($snapshot, JSON_UNESCAPED_UNICODE) : null
        ]);

        // A. Refund any manual outlays debited for this order back to the paying users
        $outlayStmt = $db->prepare("SELECT user_id, 
            COALESCE(SUM(CASE WHEN direction = 'out' AND type IN ('manual_outlay_expense', 'manual_cost_expense') THEN amount ELSE 0 END), 0) as total_outlay_out,
            COALESCE(SUM(CASE WHEN direction = 'in' AND type IN ('manual_outlay_refund', 'manual_cost_refund') THEN amount ELSE 0 END), 0) as total_outlay_in
            FROM cash_transactions WHERE related_entity_type = 'orders' AND related_entity_id = :id
            GROUP BY user_id");
        $outlayStmt->execute(['id' => $id]);
        $outlayRows = $outlayStmt->fetchAll();
        foreach ($outlayRows as $orow) {
            $netOutlay = Decimal::sub((string)$orow['total_outlay_out'], (string)$orow['total_outlay_in']);
            if (Decimal::comp($netOutlay, '0') > 0) {
                CashVaultController::logFlow(
                    $db,
                    'manual_outlay_refund',
                    'in',
                    $netOutlay,
                    'orders',
                    (int)$id,
                    "Outlay refunded due to cancellation of Order " . ($order['uid'] ?? "#$id"),
                    (int)$orow['user_id']
                );
            }
        }

        // B. Reverse customer payment inflows per collecting user (Safe 1 and Safe 2 custom services)
        $custPayStmt = $db->prepare("SELECT user_id,
            COALESCE(SUM(CASE WHEN direction = 'in' AND type IN ('customer_payment', 'service_deposit', 'service_final_payment', 'service_payment') THEN amount ELSE 0 END), 0) as total_cust_in,
            COALESCE(SUM(CASE WHEN direction = 'out' AND type IN ('customer_payment', 'customer_refund', 'service_deposit_refund', 'service_refund', 'order_refund') THEN amount ELSE 0 END), 0) as total_cust_out
            FROM cash_transactions WHERE related_entity_type = 'orders' AND related_entity_id = :id
            GROUP BY user_id");
        $custPayStmt->execute(['id' => $id]);
        $custRows = $custPayStmt->fetchAll();
        foreach ($custRows as $crow) {
            $netCust = Decimal::sub((string)$crow['total_cust_in'], (string)$crow['total_cust_out']);
            if (Decimal::comp($netCust, '0') > 0) {
                CashVaultController::logFlow(
                    $db,
                    'customer_payment',
                    'out',
                    $netCust,
                    'orders',
                    (int)$id,
                    "Cash reversal — order deleted — " . ($order['uid'] ?? "Order #$id"),
                    (int)$crow['user_id']
                );
            }
        }

        // Cancel pending/disputed/refused partner settlements on delete
        self::cancelPartnerSettlements($db, (int)$id, 'Order deleted');

        // Retract and permanently suppress notifications for deleted order & linked partner settlements (Rule 12)
        try {
            $db->prepare("UPDATE notifications SET is_read = 1 WHERE entity_type = 'orders' AND entity_id = :id")->execute(['id' => $id]);
            $db->prepare("UPDATE notifications SET is_read = 1 WHERE entity_type = 'partner_settlement' AND entity_id IN (
                SELECT id FROM partner_settlements WHERE related_entity_type = 'orders' AND related_entity_id = :id
            )")->execute(['id' => $id]);
            $db->prepare("INSERT IGNORE INTO notification_suppressions (user_id, entity_type, entity_id, stage_tag, suppressed_at)
                SELECT user_id, 'orders', entity_id, 'order_deleted', NOW() FROM notifications WHERE entity_type = 'orders' AND entity_id = :id")
               ->execute(['id' => $id]);
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        $db->commit();

        SystemLog::write('orders', 'deleted', (int)$id, $order['service_name'] ?? "Order #$id", json_encode([
            'uid' => $order['uid'] ?? null,
            'previous_status' => $order['status'],
            'return_strategy' => $strategy,
            'reason' => $reason,
            'status' => 'deleted'
        ]));
        EntityVersion::bump($db, 'orders', 'partner_settlements', 'cash_vault', 'products', 'purchases');
        Response::json(['ok' => true, 'return_strategy' => $strategy]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("Failed to delete order in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to delete order. Please check server error logs.'], 500);
            return;
        }
    }

    public function restore(string $id, array $data = []): void
    {
        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);
        $this->ensureOrderHistoryTable($db);
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT id, uid, status, total, profit, amount_paid, service_name, settle_kind, owner_user_id, created_by, deleted_at, deleted_by FROM orders WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $order = $stmt->fetch();
        if (!$order) {
            $db->rollBack();
            Response::json(['error' => 'Order not found'], 404);
            return;
        }

        // Rule 54: Strict Mentioned-User Mutation Isolation
        $sessionUid = (int)($_SESSION['user_id'] ?? 0);
        $mentionedUsers = self::getOrderMentionedUserIds($db, (int)$id, $order);
        if (!in_array($sessionUid, $mentionedUsers, true)) {
            $db->rollBack();
            Response::json(['error' => 'Forbidden: Only users mentioned on this order are authorized to restore it.'], 403);
            return;
        }

        if ($order['status'] !== 'deleted' && $order['deleted_at'] === null) {
            $db->rollBack();
            Response::json(['error' => 'This order is active and not deleted.'], 400);
            return;
        }

        $itemsStmt = $db->prepare('SELECT * FROM order_items WHERE order_id = :id');
        $itemsStmt->execute(['id' => $id]);
        $items = $itemsStmt->fetchAll();

        // Target status: 'pending', 'processing', or 'pending_money'
        $reqStatus = $data['target_status'] ?? null;
        if (!$reqStatus) {
            // Check previous status in order_history before deletion
            $prevStatusStmt = $db->prepare("SELECT changes FROM order_history WHERE order_id = :id AND action = 'deleted' ORDER BY id DESC LIMIT 1");
            $prevStatusStmt->execute(['id' => $id]);
            $prevRow = $prevStatusStmt->fetch();
            $prevStatus = 'pending';
            if ($prevRow && !empty($prevRow['changes'])) {
                $cData = json_decode($prevRow['changes'], true);
                if (!empty($cData['previous_status']) && in_array($cData['previous_status'], ['pending', 'processing', 'pending_money'], true)) {
                    $prevStatus = $cData['previous_status'];
                }
            }
            $targetStatus = $prevStatus;
        } else {
            $targetStatus = in_array($reqStatus, ['pending', 'processing', 'pending_money'], true) ? $reqStatus : 'pending';
        }

        // Inventory handling: re-reserve or re-deduct
        if ($targetStatus === 'pending_money') {
            $error = self::deductInventory($db, $items);
            if ($error) {
                $db->rollBack();
                Response::json(['error' => 'Cannot restore order: ' . $error, 'shortage' => true], 409);
                return;
            }
        } else {
            $error = self::reserveInventory($db, $items);
            if ($error) {
                $db->rollBack();
                Response::json(['error' => 'Cannot restore order: ' . $error, 'shortage' => true], 409);
                return;
            }
        }

        // Restore cancelled partner settlements if any were cancelled on delete
        $db->prepare("UPDATE partner_settlements SET status = 'pending', release_status = 'unreleased', cancelled_at = NULL, cancelled_by = NULL, cancel_reason = NULL WHERE related_entity_type = 'orders' AND related_entity_id = :id AND status = 'cancelled' AND cancel_reason = 'Order deleted'")
           ->execute(['id' => $id]);

        // Soft-delete reversal
        $stmt = $db->prepare('UPDATE orders SET status = :status, deleted_at = NULL, deleted_by = NULL, delete_reason = NULL, return_strategy = NULL WHERE id = :id');
        $stmt->execute([
            'status' => $targetStatus,
            'id' => $id
        ]);

        $reason = trim((string)($data['reason'] ?? 'Restored by user'));
        $historyStmt = $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())');
        $historyStmt->execute([
            'order_id' => $id,
            'edited_by' => $_SESSION['user_id'] ?? null,
            'action' => 'restored',
            'changes' => json_encode([
                'restored_to' => $targetStatus,
                'reason' => $reason,
            ], JSON_UNESCAPED_UNICODE),
        ]);

        $db->commit();

        SystemLog::write('orders', 'restored', (int)$id, $order['service_name'] ?? "Order #$id", json_encode([
            'uid' => $order['uid'] ?? null,
            'restored_status' => $targetStatus,
            'reason' => $reason,
            'status' => $targetStatus
        ]));

        EntityVersion::bump($db, 'orders', 'partner_settlements', 'cash_vault', 'products', 'purchases');

        Response::json([
            'ok' => true,
            'status' => $targetStatus,
            'message' => 'Order restored successfully'
        ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("Failed to restore order in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to restore order. Please check server error logs.'], 500);
            return;
        }
    }

    public function history(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);
        $this->ensureOrderHistoryTable($db);

        $stmt = $db->prepare('SELECT o.*, c.name as customer_name, u.username as creator_name,
            uc.username as completed_by_name, ur.username as returned_by_name, ud.username as deleted_by_name,
            ump.username as money_pending_by_name, up.username as paid_by_name
            FROM orders o
            LEFT JOIN customers c ON o.customer_id = c.id
            LEFT JOIN users u ON o.created_by = u.id
            LEFT JOIN users uc ON o.completed_by = uc.id
            LEFT JOIN users ur ON o.returned_by = ur.id
            LEFT JOIN users ud ON o.deleted_by = ud.id
            LEFT JOIN users ump ON o.money_pending_by = ump.id
            LEFT JOIN users up ON o.paid_by = up.id
            WHERE o.id = :id');
        $stmt->execute(['id' => $id]);
        $order = $stmt->fetch();

        if (!$order) {
            Response::json(['error' => 'Order not found'], 404);
            return;
        }

        $stmt = $db->prepare('
            SELECT oh.*, u.username 
            FROM order_history oh
            LEFT JOIN users u ON oh.edited_by = u.id
            WHERE oh.order_id = :id
            ORDER BY oh.created_at DESC, oh.id DESC
        ');
        $stmt->execute(['id' => $id]);
        $history = $stmt->fetchAll();

        // Fetch all attachments (both active and soft-deleted) for this order
        $attStmt = $db->prepare("SELECT id, attachment_uid, item_id, item_title, file_name, file_type, file_size,
            uploaded_by, is_deleted, created_at, deleted_at, deleted_by, delete_reason,
            CASE WHEN file_data IS NOT NULL AND file_data != '' THEN 1 ELSE 0 END as has_data
            FROM order_attachments
            WHERE order_id = :id
            ORDER BY id ASC");
        $attStmt->execute(['id' => $id]);
        $attachments = $attStmt->fetchAll(PDO::FETCH_ASSOC);

        // Fetch order items so history snapshots can hydrate items even if frontend cache is unpopulated
        $itemsStmt = $db->prepare('SELECT oi.*, p.name as product_name, p.uid as product_uid,
            u_owner.username as cost_owner_name
            FROM order_items oi
            LEFT JOIN products p ON oi.product_id = p.id
            LEFT JOIN users u_owner ON oi.cost_owner_id = u_owner.id
            WHERE oi.order_id = :id
            ORDER BY oi.id ASC');
        $itemsStmt->execute(['id' => $id]);
        $items = $itemsStmt->fetchAll(PDO::FETCH_ASSOC);

        Response::json([
            'order' => $order,
            'history' => $history,
            'attachments' => $attachments,
            'items' => $items
        ]);
    }

    /**
     * Record a partial payment from the customer toward an owed order (the
     * receivables mirror of PurchasesController::pay). Adds to amount_paid on a
     * pending_money order; NEVER changes the order status or profit — finishing
     * the order ("Mark paid" → completed) stays a separate, explicit step so the
     * owner can still record a loss/extra at the end. Money side only, no stock.
     */
    public function pay(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT * FROM orders WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $order = $stmt->fetch();
        if (!$order) {
            $db->rollBack();
            Response::json(['error' => 'Order not found'], 404);
            return;
        }

        // Rule 54: Strict Mentioned-User Mutation Isolation
        $sessionUid = (int)($_SESSION['user_id'] ?? 0);
        $isAdmin = (bool)($_SESSION['is_admin'] ?? false);
        $mentionedUsers = self::getOrderMentionedUserIds($db, (int)$id, $order);
        if (!$isAdmin && !in_array($sessionUid, $mentionedUsers, true)) {
            $db->rollBack();
            Response::json(['error' => 'Forbidden: Only users mentioned on this order can record payments.'], 403);
            return;
        }
        if (($order['status'] ?? '') === 'deleted' || ($order['deleted_at'] ?? null) !== null) {
            $db->rollBack();
            Response::json(['error' => 'This order has been deleted and cannot accept payments.', 'order_deleted' => true], 410);
            return;
        }
        $allowedStatuses = ['pending_money', 'completed'];
        if (!empty($order['custom_sale'])) {
            $allowedStatuses = ['pending', 'processing', 'received', 'diagnosing', 'in_progress', 'waiting_parts', 'ready', 'pending_money', 'completed'];
        }
        if (!in_array($order['status'] ?? '', $allowedStatuses, true)) {
            $db->rollBack();
            Response::json(['error' => 'Payments can only be recorded on active pending or completed orders'], 400);
            return;
        }

        $finishOrder = !empty($data['finish_order']);
        $isCustomPhase2 = !empty($order['custom_sale']) && !empty($order['is_locked_for_edit']);

        // Phase 1 Negotiation Invariant (Rule 61): Customer payments are strictly barred while agreement is in Phase 1 negotiation
        if (($order['agreement_status'] ?? '') !== 'all_accepted' && empty($order['is_locked_for_edit'])) {
            $db->rollBack();
            Response::json([
                'error' => 'Cannot record payment during Phase 1 agreement negotiation. All partners must accept terms first.',
                'agreement_status' => $order['agreement_status'] ?? 'pending',
                'phase' => 'phase_1_negotiation'
            ], 422);
            return;
        }

        // Hard Guard: Consignment & Partner Stock Acceptance
        $psCheck = $db->prepare("
            SELECT acceptance_status, status 
            FROM partner_settlements 
            WHERE related_entity_type = 'orders' 
              AND related_entity_id = :oid 
              AND status != 'cancelled' 
              AND settlement_type != 'order_return_clawback'
        ");
        $psCheck->execute(['oid' => (int)$id]);
        $activeSettlements = $psCheck->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($activeSettlements)) {
            $hasPending = false;
            $hasRefused = false;
            foreach ($activeSettlements as $as) {
                if (($as['acceptance_status'] ?? '') === 'refused' || ($as['status'] ?? '') === 'refused') {
                    $hasRefused = true;
                } elseif (($as['acceptance_status'] ?? 'pending') === 'pending') {
                    $hasPending = true;
                }
            }

            if ($isCustomPhase2) {
                // In Phase 2 of a Custom Service, recording payments is 100% unlocked;
                // ONLY finishing/completing the order is blocked if a Phase 2 partner is still pending or refused.
                if ($finishOrder && ($hasPending || $hasRefused)) {
                    $db->rollBack();
                    Response::json(['error' => 'Cannot complete order: A Phase 2 partner has not yet accepted their statement (or has refused). You can record the payment without completing the order, or remove the unaccepted partner first.'], 403);
                    return;
                }
            } else {
                if ($hasPending) {
                    $db->rollBack();
                    Response::json(['error' => 'Cannot record payment: Awaiting partner acceptance in Settlement Hub.'], 403);
                    return;
                }

                if ($hasRefused) {
                    $db->rollBack();
                    Response::json(['error' => 'Cannot record payment: Consignment terms were refused by the stock owner.'], 403);
                    return;
                }
            }
        }
        $total = (string) $order['total'];
        $already = (string) ($order['amount_paid'] ?? '0');
        $owed = Decimal::sub($total, $already);
        if (Decimal::comp($owed, '0') < 0) $owed = '0';

        // Amount being paid now: accepts amount_paid_now or amount, defaults to remaining balance if debt exists.
        $payNow = (isset($data['amount_paid_now']) && $data['amount_paid_now'] !== '' && $data['amount_paid_now'] !== null)
            ? (string) $data['amount_paid_now']
            : ((isset($data['amount']) && $data['amount'] !== '' && $data['amount'] !== null) ? (string) $data['amount'] : $owed);
        if (Decimal::comp($payNow, '0') < 0) $payNow = '0';

        if (Decimal::comp($payNow, '0') <= 0) {
            $db->rollBack();
            Response::json(['error' => 'Payment amount must be greater than zero'], 400);
            return;
        }

        // Calculate extra profit if payment exceeds remaining debt or if debt is already zero
        $extra = '0';
        if (Decimal::comp($owed, '0') > 0) {
            if (Decimal::comp($payNow, $owed) > 0) {
                $extra = Decimal::sub($payNow, $owed);
            }
        } else {
            // Entire payment on zero-debt order is extra net profit!
            $extra = $payNow;
        }

        $isExtraPayment = Decimal::comp($extra, '0') > 0 || Decimal::comp($owed, '0') <= 0;

        $newTotal = Decimal::add($total, $extra);
        $newProfit = Decimal::add((string)($order['profit'] ?? '0'), $extra);
        $newPaid = Decimal::add($already, $payNow);
        $remaining = Decimal::sub($newTotal, $newPaid);
        if (Decimal::comp($remaining, '0') < 0) $remaining = '0';
        $fullyCollected = Decimal::comp($remaining, '0') <= 0;

        // Classify payment event type
        if ($isExtraPayment && $finishOrder) {
            $paymentKind = 'extra_finish';
        } elseif ($isExtraPayment) {
            $paymentKind = 'extra';
        } elseif ($finishOrder) {
            $paymentKind = 'finish';
        } else {
            $paymentKind = 'normal';
        }

        // Rolling due date — compare today to the due date in effect (suppressed for extra payments)
        $today = date('Y-m-d');
        if ($isExtraPayment) {
            $dueAtPayment = null;
            $timing = 'none';
        } else {
            $dueAtPayment = $order['due_date'] ?? null;
            $timing = 'none';
            if ($dueAtPayment) {
                $dueDateOnly = substr($dueAtPayment, 0, 10);
                if ($today < $dueDateOnly) $timing = 'before';
                elseif ($today === $dueDateOnly) $timing = 'on';
                else $timing = 'after';
            }
        }

        if (!$fullyCollected && !$finishOrder && isset($data['new_due_date']) && $data['new_due_date'] !== '' && $data['new_due_date'] !== null) {
            $newDueTs = strtotime((string) $data['new_due_date']);
            if ($newDueTs === false) {
                $db->rollBack();
                Response::json(['error' => 'Invalid new due date format.'], 400);
                return;
            }
            $newDueFormatted = date('Y-m-d H:i:s', $newDueTs);
            if ($newDueTs < time() - 60) {
                $db->rollBack();
                Response::json(['error' => 'New due date/time cannot be in the past. Please select a current or future time.'], 400);
                return;
            }
            $finalDue = $newDueFormatted;
            $newDueDate = $newDueFormatted;
        } elseif ($fullyCollected || $finishOrder || $isExtraPayment) {
            $finalDue = null;
            $newDueDate = null;
        } else {
            $finalDue = $dueAtPayment;
            $newDueDate = null;
        }

        // Update orders: If finishing order, mark completed and paid; otherwise update total/profit/amount_paid
        if ($finishOrder) {
            $minOwed = $this->computeMinimumOwedToOthers($db, (int)$id, (int)($order['owner_user_id'] ?? 1));
            if (Decimal::comp($minOwed, '0') > 0 && Decimal::comp($newPaid, $minOwed) < 0) {
                $db->rollBack();
                Response::json(['error' => "Cannot finish order: minimum required payment to cover partner costs/profits is {$minOwed}"], 400);
                return;
            }

            if (Decimal::comp($newPaid, $newTotal) < 0) {
                $totalCost = Decimal::add((string)($order['products_cost'] ?? '0'), (string)($order['manual_cost'] ?? '0'));
                $newTotal = $newPaid;
                $newProfit = Decimal::sub($newTotal, $totalCost);
            }

            $db->prepare('UPDATE orders SET status = "completed", completed_at = NOW(), completed_by = :uid, paid_at = NOW(), paid_by = :uid, total = :total, profit = :profit, amount_paid = :ap, due_date = NULL WHERE id = :id')
               ->execute([
                   'uid' => $_SESSION['user_id'] ?? null,
                   'total' => $newTotal,
                   'profit' => $newProfit,
                   'ap' => $newPaid,
                   'id' => $id,
               ]);
        } else {
            $newStatus = (!$fullyCollected) ? 'pending_money' : ($order['status'] ?? 'pending');
            $db->prepare('UPDATE orders SET status = :status, money_pending_at = COALESCE(money_pending_at, NOW()), money_pending_by = COALESCE(money_pending_by, :uid), total = :total, profit = :profit, amount_paid = :ap, due_date = :dd WHERE id = :id')
               ->execute([
                   'status' => $newStatus,
                   'uid' => $_SESSION['user_id'] ?? null,
                   'total' => $newTotal,
                   'profit' => $newProfit,
                   'ap' => $newPaid,
                   'dd' => $finalDue,
                   'id' => $id
               ]);

            if (!$fullyCollected && ($order['status'] ?? '') !== 'pending_money') {
                SystemLog::write('orders', 'status_changed', (int) $id, $order['service_name'] ?? "Order #$id", json_encode([
                    'status' => 'pending_money',
                    'previous_status' => $order['status'] ?? 'pending',
                    'source' => 'installment_payment_partial',
                    'amount_paid' => $newPaid,
                    'total' => $newTotal,
                    'owed' => $remaining,
                    'due_date' => $finalDue
                ]));
            }
        }

        if (!empty($order['custom_sale']) && Decimal::comp($extra, '0') > 0) {
            $this->applyCustomServiceOwnerProfitDelta($db, (int)$id, $extra);
        }

        $settlementType = null;
        if ($finishOrder || $fullyCollected) {
            $settlementType = Decimal::comp($extra, '0') > 0 ? 'extra' : 'exact';
        }

        // Record the payment in order_history
        $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())')
            ->execute([
                'order_id' => $id,
                'edited_by' => $_SESSION['user_id'] ?? null,
                'action' => 'payment_recorded',
                'changes' => json_encode([
                    'amount' => $payNow,
                    'total_paid' => $newPaid,
                    'remaining' => $remaining,
                    'due_date' => $dueAtPayment,
                    'timing' => $timing,
                    'new_due_date' => (!$fullyCollected && $newDueDate !== null) ? $newDueDate : null,
                    'final' => $finishOrder,
                    'settlement' => $settlementType,
                    'settlement_amount' => $extra,
                    'extra_profit' => $extra,
                    'payment_kind' => $paymentKind,
                    'is_extra' => $isExtraPayment,
                ]),
            ]);

        if ($finishOrder) {
            $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())')
                ->execute([
                    'order_id' => $id,
                    'edited_by' => $_SESSION['user_id'] ?? null,
                    'action' => 'payment_received',
                    'changes' => json_encode([
                        'status' => ['from' => 'pending_money', 'to' => 'Paid (completed)'],
                        'paid' => $payNow,
                        'total_collected' => $newPaid,
                        'settlement' => $settlementType,
                        'settlement_amount' => $extra,
                    ]),
                ]);
        }

        // Log physical cash inflow into user vault (Owner's safe holds custody of customer funds)
        if (Decimal::comp($payNow, '0') > 0) {
            $custodyUserId = !empty($order['owner_user_id']) ? (int)$order['owner_user_id'] : (int)($_SESSION['user_id'] ?? 1);
            $cashierUid = (int)($_SESSION['user_id'] ?? 1);
            $payNote = "Customer payment for Order " . ($order['uid'] ?? "#$id");
            if ($custodyUserId !== $cashierUid) {
                $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                $uStmt->execute(['id' => (int)$cashierUid]);
                $cashierName = $uStmt->fetchColumn() ?: "Cashier #{$cashierUid}";
                $payNote .= " (Received at counter by {$cashierName})";
            }
            $flowType = !empty($order['custom_sale']) ? 'service_payment' : 'customer_payment';
            CashVaultController::logFlow($db, $flowType, 'in', $payNow, 'orders', (int)$id, $payNote, $custodyUserId);
        }

        // Process granular partner allocations if explicitly requested from payment modal (Zero Auto-Release)
        if (!empty($data['partner_allocations']) && is_array($data['partner_allocations'])) {
            // Process granular partner allocations directly from the installment payment modal
            $sessionUid = (int)($_SESSION['user_id'] ?? 1);
            $isAdmin = !empty($_SESSION['is_admin']) || (isset($_SESSION['role']) && $_SESSION['role'] === 'admin');
            $remainingAllocPool = (string)$payNow;

            foreach ($data['partner_allocations'] as $alloc) {
                if (Decimal::comp($remainingAllocPool, '0') <= 0) {
                    break;
                }
                $settleId = (int)($alloc['settlement_id'] ?? 0);
                $allocAmount = (string)($alloc['amount'] ?? '0');
                if ($settleId <= 0 || !is_numeric($allocAmount) || Decimal::comp($allocAmount, '0') <= 0) {
                    continue;
                }

                // Cap requested allocation against customer cash actually collected in this payment
                $allocAmount = Decimal::min($allocAmount, $remainingAllocPool);
                if (Decimal::comp($allocAmount, '0') <= 0) {
                    continue;
                }

                $sStmt = $db->prepare('SELECT * FROM partner_settlements WHERE id = :id AND related_entity_type = "orders" AND related_entity_id = :oid AND status = "pending" FOR UPDATE');
                $sStmt->execute(['id' => $settleId, 'oid' => $id]);
                $settlement = $sStmt->fetch();
                if (!$settlement) {
                    continue;
                }

                // Payer or admin check
                if (!$isAdmin && $sessionUid !== (int)$settlement['payer_user_id']) {
                    continue;
                }

                $totalAmount = (string)$settlement['amount'];
                $curReleased = (string)($settlement['released_amount'] ?? '0');
                $remLocked = Decimal::comp($totalAmount, $curReleased) > 0 ? Decimal::sub($totalAmount, $curReleased) : '0';
                if (Decimal::comp($remLocked, '0') <= 0) {
                    continue;
                }

                // Waterfall Dependency Guard: If Priority > 1 and linked to a Senior Cost ticket, Senior must be fully released
                if (!empty($settlement['linked_settlement_id']) && (int)($settlement['waterfall_priority'] ?? 1) > 1) {
                    $seniorStmt = $db->prepare('SELECT id, release_status, released_amount, amount FROM partner_settlements WHERE id = :lid');
                    $seniorStmt->execute(['lid' => $settlement['linked_settlement_id']]);
                    $senior = $seniorStmt->fetch();
                    if ($senior) {
                        $seniorAmt = (string)$senior['amount'];
                        $seniorRel = (string)($senior['released_amount'] ?? '0');
                        if (Decimal::comp($seniorRel, $seniorAmt) < 0) {
                            // Senior Cost ticket is not yet 100% released! Cannot release profit.
                            continue;
                        }
                    }
                }

                $releaseNow = Decimal::comp($allocAmount, $remLocked) > 0 ? $remLocked : $allocAmount;
                $remainingAllocPool = Decimal::sub($remainingAllocPool, $releaseNow);
                $newReleased = Decimal::add($curReleased, $releaseNow);
                $newReleaseStatus = Decimal::comp($newReleased, $totalAmount) >= 0 ? 'released' : 'partial';

                $db->prepare('UPDATE partner_settlements SET released_amount = :ra, release_status = :rs, released_at = NOW(), released_by = :rb WHERE id = :id')
                   ->execute([
                       'ra' => $newReleased,
                       'rs' => $newReleaseStatus,
                       'rb' => $sessionUid,
                       'id' => $settleId
                   ]);

                SystemLog::write('partner_settlements', 'released_allocation', $settleId, "Order #{$id} installment allocation", json_encode([
                    'order_id' => (int)$id,
                    'allocated_amount' => $releaseNow,
                    'new_released_amount' => $newReleased,
                    'total_amount' => $totalAmount,
                    'release_status' => $newReleaseStatus
                ]), $sessionUid);
            }
        }

        $db->commit();

        SystemLog::write('orders', 'customer_payment', (int) $id, $order['service_name'] ?? "Order #$id", json_encode([
            'uid' => $order['uid'] ?? null,
            'customer_note' => $order['customer_note'] ?? null,  // walk-in buyer name
            'amount_paid_now' => $payNow,
            'amount_paid_total' => $newPaid,
            'remaining' => $remaining,
            'payment_date' => $today,
            'due_date' => $dueAtPayment,   // deadline in effect when this was paid
            'timing' => $timing,           // before | on | after | none
            'new_due_date' => (!$fullyCollected && $newDueDate !== null) ? $newDueDate : null,
            'fully_collected' => $fullyCollected,
            'final' => $finishOrder,
            'settlement' => $settlementType,
            'settlement_amount' => $extra,
            'extra_profit' => $extra,
            'payment_kind' => $paymentKind,
            'is_extra' => $isExtraPayment,
        ]));

        if ($finishOrder) {
            SystemLog::write('orders', 'status_changed', (int) $id, $order['service_name'] ?? "Order #$id", json_encode([
                'status' => 'completed',
                'previous_status' => $order['status'] ?? 'pending_money',
                'source' => 'installment_payment_completion',
                'amount_paid' => $newPaid,
                'total' => $newTotal,
                'profit' => $newProfit,
                'extra_profit' => $extra,
                'payment_kind' => $paymentKind,
                'is_extra' => $isExtraPayment,
            ]));
        }

        EntityVersion::bump($db, 'orders', 'partner_settlements', 'cash_vault');

        Response::json([
            'ok' => true,
            'status' => $finishOrder ? 'completed' : ($order['status'] ?? 'pending_money'),
            'amount_paid' => $newPaid,
            'total' => $newTotal,
            'profit' => $newProfit,
            'extra_profit' => $extra,
            'remaining' => $remaining,
            'due_date' => $finalDue,
            'timing' => $timing,
            'payment_kind' => $paymentKind,
            'is_extra' => $isExtraPayment,
            'fully_collected' => $fullyCollected,
            'order_finished' => $finishOrder,
        ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("Failed to process payment in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to process payment. Please check server error logs.'], 500);
            return;
        }
    }

    /**
     * Payment history for one order, derived from the existing system logs (no
     * dedicated table — mirror of PurchasesController::payments). Returns each
     * event in chronological order: the up-front payment captured at sale time
     * (action 'created' with amount_paid > 0), every later "Record payment"
     * (action 'customer_payment'), and the final settlement when the order was
     * marked paid/finished (action 'payment_received').
     */
    public function payments(string $id): void
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_write_close();
        }
        $db = Database::getConnection();
        if (!self::$migrated) {
            $this->ensureOrderMetaColumns($db);
            self::$migrated = true;
        }

        $stmt = $db->prepare('SELECT * FROM orders WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $order = $stmt->fetch();
        if (!$order) {
            Response::json(['error' => 'Order not found'], 404);
            return;
        }

        $events = [];
        try {
            $logStmt = $db->prepare("SELECT username, action, details, created_at FROM system_logs WHERE module IN ('orders', 'custom_services') AND entity_id = :id AND action IN ('created', 'customer_payment', 'payment_received') ORDER BY created_at ASC, id ASC");
            $logStmt->execute(['id' => $id]);
            $rows = $logStmt->fetchAll();
        } catch (\Throwable $e) {
            $rows = [];
        }

        $total = (string) $order['total'];
        foreach ($rows as $r) {
            $d = json_decode($r['details'] ?? '{}', true);
            if (!is_array($d)) $d = [];

            if ($r['action'] === 'created') {
                $paid = (string) ($d['amount_paid'] ?? ($d['deposit_paid'] ?? '0'));
                $isFullAtCreate = (Decimal::comp($paid, $total) >= 0 && Decimal::comp($total, '0') > 0);
                if (Decimal::comp($paid, '0') <= 0) {
                    continue; // Skip zero-dollar creation placeholder: timeline tracks actual moments of payment
                }

                // Anti-duplication safeguard: If a detailed customer_payment or payment_received was recorded at creation time,
                // let that rich event represent the payment (preserving extra_profit, discount, settlement details) rather than creating a duplicate.
                $hasDetailedPaymentAtCreation = false;
                foreach ($rows as $otherRow) {
                    if ($otherRow['action'] === 'customer_payment' || $otherRow['action'] === 'payment_received') {
                        $otherD = json_decode($otherRow['details'] ?? '{}', true);
                        if (!is_array($otherD)) $otherD = [];
                        $cpAmt = (string)($otherD['amount_paid_now'] ?? ($otherD['paid'] ?? '0'));
                        $timeDiff = abs(strtotime($otherRow['created_at']) - strtotime($r['created_at']));
                        if ($timeDiff <= 5 && Decimal::comp($cpAmt, $paid) === 0) {
                            $hasDetailedPaymentAtCreation = true;
                            break;
                        }
                    }
                }
                if ($hasDetailedPaymentAtCreation) {
                    continue; // Skip generic created event in favor of the rich customer_payment event
                }

                $events[] = [
                    'type'         => $isFullAtCreate ? 'direct_full' : 'initial',
                    'payment_kind' => $isFullAtCreate ? 'direct_full' : 'normal',
                    'is_extra'     => false,
                    'is_discount'  => false,
                    'amount'       => $paid,
                    'remaining'    => $isFullAtCreate ? '0' : ($d['owed'] ?? Decimal::sub($total, $paid)),
                    'due_date'     => $d['due_date'] ?? null,
                    'timing'       => null,
                    'new_due_date' => null,
                    'final'        => $isFullAtCreate,
                    'username'     => $r['username'],
                    'created_at'   => $r['created_at'],
                ];
            } elseif ($r['action'] === 'customer_payment') {
                $settleType = $d['settlement'] ?? null;
                $isExtra = !empty($d['is_extra'])
                    || (isset($d['extra_profit']) && Decimal::comp((string)$d['extra_profit'], '0') > 0)
                    || ($settleType === 'extra' && isset($d['settlement_amount']) && Decimal::comp((string)$d['settlement_amount'], '0') > 0);
                $isDiscount = ($settleType === 'short' || $settleType === 'discount' || ($d['payment_kind'] ?? '') === 'finish_discount');
                $final = !empty($d['final']);
                $kind = $d['payment_kind'] ?? null;
                if (!$kind) {
                    if ($isExtra && $final) $kind = 'extra_finish';
                    elseif ($isExtra) $kind = 'extra';
                    elseif ($isDiscount) $kind = 'discount_finish';
                    elseif ($final) $kind = 'finish';
                    else $kind = 'normal';
                }
                $extraProfit = $isExtra ? (string)($d['extra_profit'] ?? ($d['settlement_amount'] ?? '0')) : '0';
                $discountAmt = $isDiscount ? (string)($d['settlement_amount'] ?? '0') : '0';

                // On completed orders, the final settlement payment zeroes remaining debt
                $remVal = $d['remaining'] ?? null;
                if ($order['status'] === 'completed' && $final) {
                    $remVal = '0';
                }

                $events[] = [
                    'type'              => 'payment',
                    'payment_kind'      => $kind,
                    'is_extra'          => $isExtra,
                    'is_discount'       => $isDiscount,
                    'discount_amount'   => $discountAmt,
                    'amount'            => (string) ($d['amount_paid_now'] ?? '0'),
                    'remaining'         => $remVal,
                    'due_date'          => ($isExtra || ($order['status'] === 'completed' && $final)) ? null : ($d['due_date'] ?? null),
                    'timing'            => ($isExtra || ($order['status'] === 'completed' && $final)) ? null : ($d['timing'] ?? null),
                    'new_due_date'      => ($isExtra || ($order['status'] === 'completed' && $final)) ? null : ($d['new_due_date'] ?? null),
                    'final'             => $final,
                    'settlement'        => $d['settlement'] ?? null,
                    'settlement_amount' => $d['settlement_amount'] ?? null,
                    'extra_profit'      => $extraProfit,
                    'username'          => $r['username'],
                    'created_at'        => $r['created_at'],
                ];
            } else { // payment_received = the order was finished / marked paid
                $settleType = $d['settlement'] ?? null;
                $isExtra = ($settleType === 'extra' && isset($d['settlement_amount']) && Decimal::comp((string)$d['settlement_amount'], '0') > 0);
                $isDiscount = ($settleType === 'short' || $settleType === 'discount');
                $kind = $isExtra ? 'extra_finish' : ($isDiscount ? 'discount_finish' : 'finish');
                $extraProfit = $isExtra ? (string)($d['settlement_amount'] ?? '0') : '0';
                $discountAmt = $isDiscount ? (string)($d['settlement_amount'] ?? '0') : '0';
                $events[] = [
                    'type'              => 'final',
                    'payment_kind'      => $kind,
                    'is_extra'          => $isExtra,
                    'is_discount'       => $isDiscount,
                    'discount_amount'   => $discountAmt,
                    'amount'            => (string) ($d['paid'] ?? '0'),
                    'remaining'         => '0',
                    'due_date'          => null,
                    'timing'            => null,
                    'new_due_date'      => null,
                    'final'             => true,
                    'settlement'        => $d['settlement'] ?? null,
                    'settlement_amount' => $d['settlement_amount'] ?? null,
                    'extra_profit'      => $extraProfit,
                    'username'          => $r['username'],
                    'created_at'        => $r['created_at'],
                ];
            }
        }

        $hasRealPaymentEvents = false;
        foreach ($events as $ev) {
            if (Decimal::comp((string)($ev['amount'] ?? '0'), '0') > 0) {
                $hasRealPaymentEvents = true;
                break;
            }
        }

        if (!$hasRealPaymentEvents) {
            // Resilient Fallback: reconstruct payment timeline from order_history if system_logs was pruned
            try {
                $histStmt = $db->prepare("SELECT oh.*, u.username FROM order_history oh LEFT JOIN users u ON oh.edited_by = u.id WHERE oh.order_id = :id AND oh.action IN ('payment_recorded', 'payment_received') ORDER BY oh.created_at ASC, oh.id ASC");
                $histStmt->execute(['id' => $id]);
                $histRows = $histStmt->fetchAll();
                foreach ($histRows as $hr) {
                    $hd = json_decode($hr['changes'] ?? '{}', true);
                    if (!is_array($hd)) $hd = [];
                    if ($hr['action'] === 'payment_recorded') {
                        $isInitial = ($events === [] && isset($hd['total_paid']) && $hd['total_paid'] === ($hd['amount'] ?? null));
                        $settleType = $hd['settlement'] ?? null;
                        $isExtra = !empty($hd['is_extra'])
                            || (isset($hd['extra_profit']) && Decimal::comp((string)$hd['extra_profit'], '0') > 0)
                            || ($settleType === 'extra' && isset($hd['settlement_amount']) && Decimal::comp((string)$hd['settlement_amount'], '0') > 0);
                        $isDiscount = ($settleType === 'short' || $settleType === 'discount' || ($hd['payment_kind'] ?? '') === 'finish_discount');
                        $final = !empty($hd['final']);
                        $kind = $hd['payment_kind'] ?? null;
                        if (!$kind) {
                            if ($isInitial) $kind = 'initial';
                            elseif ($isExtra && $final) $kind = 'extra_finish';
                            elseif ($isExtra) $kind = 'extra';
                            elseif ($isDiscount) $kind = 'discount_finish';
                            elseif ($final) $kind = 'finish';
                            else $kind = 'normal';
                        }
                        $extraProfit = $isExtra ? (string)($hd['extra_profit'] ?? ($hd['settlement_amount'] ?? '0')) : '0';
                        $discountAmt = $isDiscount ? (string)($hd['settlement_amount'] ?? '0') : '0';

                        $remVal = (string) ($hd['remaining'] ?? '0');
                        if ($order['status'] === 'completed' && $final) {
                            $remVal = '0';
                        }

                        $events[] = [
                            'type'              => $isInitial ? 'initial' : 'payment',
                            'payment_kind'      => $kind,
                            'is_extra'          => $isExtra,
                            'is_discount'       => $isDiscount,
                            'discount_amount'   => $discountAmt,
                            'amount'            => (string) ($hd['amount'] ?? '0'),
                            'remaining'         => $remVal,
                            'due_date'          => ($isExtra || ($order['status'] === 'completed' && $final)) ? null : ($hd['due_date'] ?? null),
                            'timing'            => ($isExtra || ($order['status'] === 'completed' && $final)) ? null : ($hd['timing'] ?? null),
                            'new_due_date'      => ($isExtra || ($order['status'] === 'completed' && $final)) ? null : ($hd['new_due_date'] ?? null),
                            'final'             => $final,
                            'settlement'        => $hd['settlement'] ?? null,
                            'settlement_amount' => $hd['settlement_amount'] ?? null,
                            'extra_profit'      => $extraProfit,
                            'username'          => $hr['username'] ?? 'System',
                            'created_at'        => $hr['created_at'],
                        ];
                    }
                }
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        }

        $rawAmountPaid = (string) ($order['amount_paid'] ?? '0');
        $isPaidInFull = ($order['status'] === 'completed') || (Decimal::comp($rawAmountPaid, (string)$total) >= 0 && Decimal::comp((string)$total, '0') > 0);

        // For completed orders, remaining balance is 0. But actual amount paid must reflect real customer payments!
        $owed = ($order['status'] === 'completed' || Decimal::comp($rawAmountPaid, (string)$total) >= 0) ? '0' : Decimal::sub($total, $rawAmountPaid);
        if (Decimal::comp($owed, '0') <= 0) {
            $owed = '0';
        }

        // Customer paid: if rawAmountPaid > 0, use it. If completed and rawAmountPaid == 0 and empty events, it was an upfront full cash sale ($total).
        if (Decimal::comp($rawAmountPaid, '0') > 0) {
            $amountPaid = $rawAmountPaid;
        } elseif ($isPaidInFull) {
            $amountPaid = $total;
        } else {
            $amountPaid = '0';
        }

        $hasRealPaymentEvents = false;
        foreach ($events as $ev) {
            if (Decimal::comp((string)($ev['amount'] ?? '0'), '0') > 0) {
                $hasRealPaymentEvents = true;
                break;
            }
        }

        if (!$hasRealPaymentEvents && ($isPaidInFull || Decimal::comp($amountPaid, '0') > 0)) {
            // Check cash_transactions for real customer payments (strictly customer payments, never partner settlements)
            try {
                $cashStmt = $db->prepare("SELECT ct.*, u.username FROM cash_transactions ct LEFT JOIN users u ON ct.user_id = u.id WHERE ct.related_entity_type = 'orders' AND ct.related_entity_id = :id AND ct.direction = 'in' AND ct.type IN ('customer_payment', 'service_deposit', 'service_final_payment', 'service_payment', 'sale', 'order_payment') ORDER BY ct.created_at ASC, ct.id ASC");
                $cashStmt->execute(['id' => $id]);
                $cashRows = $cashStmt->fetchAll();
                if (!empty($cashRows)) {
                    $runningPaid = '0';
                    $numRows = count($cashRows);
                    foreach ($cashRows as $idx => $cr) {
                        $cAmount = (string)$cr['amount'];
                        $runningPaid = Decimal::add($runningPaid, $cAmount);
                        $rem = Decimal::sub($total, $runningPaid);
                        if (Decimal::comp($rem, '0') < 0) {
                            $rem = '0';
                        }
                        $isSingleFullPayment = ($numRows === 1 && Decimal::comp($cAmount, $total) >= 0);
                        $isLastRow = ($idx === $numRows - 1);
                        $isReachingFull = (Decimal::comp($runningPaid, $total) >= 0);

                        if ($isSingleFullPayment) {
                            $pType = 'direct_full';
                        } elseif ($idx === 0) {
                            $pType = 'initial'; // Upfront deposit/downpayment
                        } elseif ($isLastRow && ($isReachingFull || $order['status'] === 'completed')) {
                            $pType = 'final'; // Final settlement
                        } else {
                            $pType = 'payment'; // Intermediate installment
                        }

                        $isFinalEvent = ($isSingleFullPayment || ($isLastRow && ($isReachingFull || $order['status'] === 'completed')));

                        $events[] = [
                            'type'         => $pType,
                            'payment_kind' => $isFinalEvent ? 'finish' : 'normal',
                            'is_extra'     => false,
                            'is_discount'  => false,
                            'discount_amount' => '0',
                            'amount'       => $cAmount,
                            'remaining'    => $rem,
                            'due_date'     => null,
                            'timing'       => null,
                            'new_due_date' => null,
                            'final'        => $isFinalEvent,
                            'settlement'   => null,
                            'settlement_amount' => null,
                            'extra_profit' => '0',
                            'username'     => $cr['username'] ?? 'Cashier',
                            'created_at'   => $cr['created_at'],
                        ];
                    }
                }
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        }

        $hasRealPaymentEvents = false;
        foreach ($events as $ev) {
            if (Decimal::comp((string)($ev['amount'] ?? '0'), '0') > 0) {
                $hasRealPaymentEvents = true;
                break;
            }
        }

        // Ultimate Fallback: If still no positive payment events and order was paid/completed upfront
        if (!$hasRealPaymentEvents && Decimal::comp($amountPaid, '0') > 0) {
            $creatorName = 'Cashier';
            if (!empty($order['created_by'])) {
                $uStmt = $db->prepare('SELECT username FROM users WHERE id = :uid');
                $uStmt->execute(['uid' => $order['created_by']]);
                $creatorRow = $uStmt->fetch();
                if ($creatorRow) $creatorName = $creatorRow['username'];
            }
            $events[] = [
                'type'         => ($order['status'] === 'completed') ? 'direct_full' : 'initial',
                'payment_kind' => 'normal',
                'is_extra'     => false,
                'is_discount'  => false,
                'discount_amount' => '0',
                'amount'       => $amountPaid,
                'remaining'    => $owed,
                'due_date'     => null,
                'timing'       => null,
                'new_due_date' => null,
                'final'        => ($order['status'] === 'completed'),
                'settlement'   => null,
                'settlement_amount' => null,
                'extra_profit' => '0',
                'username'     => $creatorName,
                'created_at'   => $order['completed_at'] ?? ($order['date'] ?? date('Y-m-d H:i:s')),
                'is_direct'    => true,
            ];
        }

        // 1. Fetch order items to determine true contracted baseline economics
        $itemsStmt = $db->prepare('SELECT id, product_id, purchase_id, name, price, quantity, cost, owner_user_id, cost_owner_id, profit_split_type, product_owner_profit, service_owner_profit FROM order_items WHERE order_id = :id');
        $itemsStmt->execute(['id' => $id]);
        $orderItems = $itemsStmt->fetchAll(\PDO::FETCH_ASSOC);

        $itemsTotalCost = '0';
        $itemsTotalRevenue = '0';
        $hasOrderItems = !empty($orderItems);

        if ($hasOrderItems) {
            foreach ($orderItems as $item) {
                $qty = (string)($item['quantity'] ?? '0');
                if (Decimal::comp($qty, '0') <= 0) continue;
                $unitPrice = (string)($item['price'] ?? '0');
                $unitCost = (string)($item['cost'] ?? '0');
                $itemsTotalCost = Decimal::add($itemsTotalCost, Decimal::mul($unitCost, $qty));
                $itemsTotalRevenue = Decimal::add($itemsTotalRevenue, Decimal::mul($unitPrice, $qty));
            }
        }

        // 2. Financial Waterfall Decomposition for Payment History & Ledgers
        $prodCost = $hasOrderItems ? $itemsTotalCost : (string)($order['products_cost'] ?? '0');
        $manCost = (string)($order['manual_cost'] ?? '0');
        $wholesaleCost = Decimal::add($prodCost, $manCost);
        $isCustomSale = !empty($order['custom_sale']) || (!empty($order['service_name']) && trim((string)$order['service_name']) !== '');

        if ($hasOrderItems) {
            $outlaysProfit = '0';
            if ($isCustomSale && !empty($order['manual_costs_data'])) {
                $mcArr = is_string($order['manual_costs_data']) ? json_decode($order['manual_costs_data'], true) : $order['manual_costs_data'];
                if (is_array($mcArr)) {
                    foreach ($mcArr as $mc) {
                        $outlaysProfit = Decimal::add($outlaysProfit, (string)($mc['profit'] ?? '0'));
                    }
                }
            }
            $serviceLaborProfit = $isCustomSale ? (string)($order['service_owner_profit'] ?? '0') : '0';
            $expectedRevenue = Decimal::add(Decimal::add($itemsTotalRevenue, $manCost), Decimal::add($outlaysProfit, $serviceLaborProfit));
            $expectedProfit = Decimal::sub($expectedRevenue, $wholesaleCost);
        } else {
            $expectedRevenue = (string)$order['total'];
            $expectedProfit = (string)($order['profit'] ?? '0');
        }

        $customerPaid = (string)$amountPaid;
        $realizedProfit = Decimal::sub($customerPaid, $wholesaleCost);

        $finishType = 'exact';
        $costDeficit = '0';
        $lostProfit = '0';
        $totalShortfall = '0';
        $extraProfit = '0';

        if ($isPaidInFull || ($order['status'] ?? '') === 'completed') {
            if (Decimal::comp($customerPaid, $expectedRevenue) > 0) {
                $finishType = 'extra';
                $extraProfit = Decimal::sub($customerPaid, $expectedRevenue);
            } elseif (Decimal::comp($customerPaid, $wholesaleCost) < 0) {
                $finishType = 'less_profit_and_cost';
                $costDeficit = Decimal::sub($wholesaleCost, $customerPaid);
                $lostProfit = Decimal::comp($expectedProfit, '0') > 0 ? $expectedProfit : '0';
                $totalShortfall = Decimal::add($costDeficit, $lostProfit);
            } elseif (Decimal::comp($customerPaid, $expectedRevenue) < 0) {
                $finishType = 'less_profit_only';
                $lostProfit = Decimal::sub($expectedRevenue, $customerPaid);
                $totalShortfall = $lostProfit;
            } else {
                $finishType = 'exact';
            }
        } else {
            $finishType = 'pending';
        }

        $hasRealPaymentEvents = false;
        foreach ($events as $ev) {
            if (Decimal::comp((string)($ev['amount'] ?? '0'), '0') > 0) {
                $hasRealPaymentEvents = true;
                break;
            }
        }

        // If no separate installment events were recorded, but the order is paid or completed (direct upfront sale)
        if (!$hasRealPaymentEvents && $isPaidInFull) {
            $creatorUsername = 'System';
            $cashierId = $order['completed_by'] ?? ($order['created_by'] ?? null);
            if ($cashierId) {
                try {
                    $uStmt = $db->prepare("SELECT username FROM users WHERE id = :uid");
                    $uStmt->execute(['uid' => $cashierId]);
                    $creatorUsername = $uStmt->fetchColumn() ?: 'Cashier';
                } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
            }
            $paidDate = $order['paid_at'] ?? ($order['completed_at'] ?? ($order['date'] ?? date('Y-m-d H:i:s')));
            $isExtra = ($finishType === 'extra');
            $isDiscount = in_array($finishType, ['less_profit_only', 'less_profit_and_cost'], true);
            $events[] = [
                'type'              => 'direct_full',
                'payment_kind'      => ($finishType === 'extra') ? 'extra_finish' : ($isDiscount ? 'discount_finish' : 'direct_full'),
                'is_direct'         => true,
                'is_extra'          => $isExtra,
                'is_discount'       => $isDiscount,
                'discount_amount'   => $isDiscount ? $totalShortfall : '0',
                'amount'            => $amountPaid,
                'remaining'         => '0',
                'due_date'          => null,
                'timing'            => null,
                'new_due_date'      => null,
                'final'             => true,
                'settlement'        => ($finishType !== 'exact' && $finishType !== 'pending') ? $finishType : 'direct_full',
                'settlement_amount' => $isExtra ? $extraProfit : ($isDiscount ? $totalShortfall : null),
                'extra_profit'      => $extraProfit,
                'finish_type'       => $finishType,
                'username'          => $creatorUsername,
                'created_at'        => $paidDate,
            ];
        } elseif (count($events) === 1 && ($events[0]['type'] ?? '') === 'initial' && $isPaidInFull) {
            // Single upfront creation payment also decorates with finish variance
            $isExtra = ($finishType === 'extra');
            $isDiscount = in_array($finishType, ['less_profit_only', 'less_profit_and_cost'], true);
            $events[0]['is_extra'] = $isExtra;
            $events[0]['is_discount'] = $isDiscount;
            $events[0]['discount_amount'] = $isDiscount ? $totalShortfall : '0';
            $events[0]['extra_profit'] = $extraProfit;
            $events[0]['finish_type'] = $finishType;
            $events[0]['final'] = true;
            if ($isExtra) {
                $events[0]['payment_kind'] = 'extra_finish';
                $events[0]['settlement'] = 'extra';
                $events[0]['settlement_amount'] = $extraProfit;
            } elseif ($isDiscount) {
                $events[0]['payment_kind'] = 'discount_finish';
                $events[0]['settlement'] = 'discount';
                $events[0]['settlement_amount'] = $totalShortfall;
            }
        }

        // Also fetch cashier/customer names for enriched order metadata
        $creatorName = null;
        $customerName = null;
        try {
            if (!empty($order['created_by'])) {
                $cStmt = $db->prepare("SELECT username FROM users WHERE id = :id");
                $cStmt->execute(['id' => $order['created_by']]);
                $creatorName = $cStmt->fetchColumn() ?: null;
            }
            if (!empty($order['customer_id'])) {
                $custStmt = $db->prepare("SELECT name FROM customers WHERE id = :id");
                $custStmt->execute(['id' => $order['customer_id']]);
                $customerName = $custStmt->fetchColumn() ?: null;
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        Response::json([
            'order' => [
                'id'               => (int) $order['id'],
                'uid'              => $order['uid'] ?? null,
                'total'            => $total,
                'amount_paid'      => $amountPaid,
                'owed'             => $owed,
                'status'           => $order['status'] ?? null,
                'date'             => $order['date'] ?? null,
                'completed_at'     => $order['completed_at'] ?? null,
                'creator_name'     => $creatorName,
                'customer_name'    => $customerName,
                'is_paid'          => $isPaidInFull,
                'products_cost'    => $prodCost,
                'manual_cost'      => $manCost,
                'wholesale_cost'   => $wholesaleCost,
                'expected_revenue' => $expectedRevenue,
                'expected_profit'  => $expectedProfit,
                'realized_profit'  => $realizedProfit,
                'finish_type'      => $finishType,
                'cost_deficit'     => $costDeficit,
                'lost_profit'      => $lostProfit,
                'total_shortfall'  => $totalShortfall,
                'extra_profit'     => $extraProfit,
                'items'            => $orderItems,
            ],
            'payments' => $events,
        ]);
    }

    public function mergeLineage(string $id, bool $returnArray = false)
    {
        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);

        $stmt = $db->prepare('SELECT id, uid, total, amount_paid, status, settle_kind, owner_user_id, created_by FROM orders WHERE id = :id AND deleted_at IS NULL');
        $stmt->execute(['id' => $id]);
        $order = $stmt->fetch();

        if (!$order) {
            Response::json(['error' => 'Order not found'], 404);
            return;
        }

        $itemsStmt = $db->prepare('SELECT oi.*, p.name as purchase_name, p.uid as purchase_uid, p.price as purchase_price, p.price_before as purchase_price_before, p.price_updated_at as purchase_price_updated_at, p.status as purchase_status, p.merged_into_id, p.is_merged_master, p.merged_from_ids, p.quantity_remaining as purchase_remaining, p.owner_user_id, p.supplier_id as purchase_supplier_id, s.name as supplier_name, s.is_walkby as supplier_is_walkby, u.username as stock_owner_username FROM order_items oi LEFT JOIN purchases p ON oi.purchase_id = p.id LEFT JOIN suppliers s ON p.supplier_id = s.id LEFT JOIN users u ON p.owner_user_id = u.id WHERE oi.order_id = :id');
        $itemsStmt->execute(['id' => $id]);
        $items = $itemsStmt->fetchAll();

        // Check if any partner settlements on this order have been claimed (settled_amount > 0)
        $settledStmt = $db->prepare('
            SELECT ps.settled_amount, ps.amount, ps.payee_user_id, u.username as stock_owner_name
            FROM partner_settlements ps
            LEFT JOIN users u ON ps.payee_user_id = u.id
            WHERE ps.related_entity_type = "orders" AND ps.related_entity_id = :oid AND ps.status != "cancelled" AND ps.settled_amount > 0
        ');
        $settledStmt->execute(['oid' => $id]);
        $claimedSettlements = $settledStmt->fetchAll();
        $totalClaimed = '0';
        $stockOwnerNames = [];
        foreach ($claimedSettlements as $cs) {
            $totalClaimed = Decimal::add($totalClaimed, (string)$cs['settled_amount']);
            if (!empty($cs['stock_owner_name'])) {
                $stockOwnerNames[] = $cs['stock_owner_name'];
            }
        }
        $stockOwnerNames = array_values(array_unique($stockOwnerNames));

        // Calculate net cash collected from cash_transactions
        $settleKind = $order['settle_kind'] ?? 'cash';
        $netCashCollected = '0';
        if ($settleKind !== 'product') {
            $netCashStmt = $db->prepare(
                'SELECT COALESCE(SUM(CASE WHEN direction = \'in\' THEN amount ELSE 0 END), 0) as total_in, '
                . 'COALESCE(SUM(CASE WHEN direction = \'out\' THEN amount ELSE 0 END), 0) as total_out '
                . 'FROM cash_transactions WHERE related_entity_type = \'orders\' AND related_entity_id = :id'
            );
            $netCashStmt->execute(['id' => $id]);
            $cashRow = $netCashStmt->fetch();
            $netCashCollected = Decimal::sub($cashRow['total_in'] ?? '0', $cashRow['total_out'] ?? '0');
            if (Decimal::comp($netCashCollected, '0') < 0) {
                $netCashCollected = '0';
            }
        }

        // Extinguished customer debt: for pending_money orders, remaining unpaid portion drops to 0
        $extinguishedDebt = '0';
        if ($order['status'] === 'pending_money') {
            $unpaid = Decimal::sub((string)$order['total'], (string)($order['amount_paid'] ?? '0'));
            if (Decimal::comp($unpaid, '0') > 0) {
                $extinguishedDebt = $unpaid;
            }
        }

        $walkbySupplierId = self::getOrCreateWalkbySupplierId($db);
        $walkbySupplier = ['id' => $walkbySupplierId, 'name' => 'Walk-by (one-off seller)', 'is_walkby' => true];
        if ($walkbySupplierId) {
            $wbStmt = $db->prepare('SELECT id, name, is_walkby FROM suppliers WHERE id = :id');
            $wbStmt->execute(['id' => $walkbySupplierId]);
            $wbRow = $wbStmt->fetch(PDO::FETCH_ASSOC);
            if ($wbRow) {
                $walkbySupplier = ['id' => (int)$wbRow['id'], 'name' => $wbRow['name'], 'is_walkby' => true];
            }
        }

        $hasMergedItems = false;
        $hasSoldFromMaster = false;
        $hasConstituentMerged = false;
        $hasDepletedLots = false;
        $consignmentPartnerIds = [];
        $unreturnedItemsCount = 0;
        $returnedItemsCount = 0;
        $pendingReturnItemsCount = 0;
        $sellerId = !empty($order['owner_user_id']) ? (int)$order['owner_user_id'] : (!empty($order['created_by']) ? (int)$order['created_by'] : null);
        $totalVariance = '0';
        $hasAnyLotPriceChanges = false;
        $analyzedItems = [];

        if ($sellerId) {
            $extPsStmt = $db->prepare('
                SELECT DISTINCT ps.payee_user_id, u.username
                FROM partner_settlements ps
                LEFT JOIN users u ON ps.payee_user_id = u.id
                WHERE ps.related_entity_type = "orders"
                  AND ps.related_entity_id = :oid
                  AND ps.status != "cancelled"
                  AND ps.settlement_type NOT IN ("order_return_clawback", "service_owner_statement")
                  AND ps.payee_user_id != :seller_id
            ');
            $extPsStmt->execute(['oid' => $id, 'seller_id' => $sellerId]);
            foreach ($extPsStmt->fetchAll(PDO::FETCH_ASSOC) as $extRow) {
                $extPid = (int)($extRow['payee_user_id'] ?? 0);
                if ($extPid > 0) {
                    $consignmentPartnerIds[$extPid] = true;
                    if (!empty($extRow['username']) && !in_array($extRow['username'], $stockOwnerNames, true)) {
                        $stockOwnerNames[] = $extRow['username'];
                    }
                }
            }
        }

        foreach ($items as $item) {
            $isSoldFromMaster = !empty($item['is_merged_master']);
            $isConstituentMerged = empty($item['is_merged_master']) && (!empty($item['merged_into_id']) || ($item['purchase_status'] ?? '') === 'merged');
            $mergedIntoId = !empty($item['merged_into_id']) ? (int)$item['merged_into_id'] : null;
            $isMerged = $isSoldFromMaster || $isConstituentMerged;

            if ($isSoldFromMaster) {
                $hasSoldFromMaster = true;
            }
            if ($isConstituentMerged) {
                $hasConstituentMerged = true;
            }
            $origCost = (string)($item['cost'] ?? $item['purchase_price'] ?? '0');
            $unitPrice = (string)($item['price'] ?? '0');
            $quantity = (string)($item['quantity'] ?? '1');
            $totalPrice = Decimal::mul($unitPrice, $quantity);
            $totalCost = Decimal::mul($origCost, $quantity);

            $purchaseRemaining = (string)($item['purchase_remaining'] ?? '0');
            $purchaseStatus = $item['purchase_status'] ?? 'active';
            $isDepleted = ($purchaseStatus === 'completed' || Decimal::comp($purchaseRemaining, '0') <= 0);
            $willRevitalize = (!$isMerged && $isDepleted);

            $costOwnerId = !empty($item['cost_owner_id']) ? (int)$item['cost_owner_id'] : (!empty($item['owner_user_id']) ? (int)$item['owner_user_id'] : null);
            $isConsignment = ($costOwnerId && $costOwnerId !== $sellerId);

            if ($isDepleted) {
                $hasDepletedLots = true;
            }
            if ($isConsignment) {
                $consignmentPartnerIds[$costOwnerId] = true;
            }

            if (!empty($item['is_returned'])) {
                $returnedItemsCount++;
            } elseif (($item['return_acceptance_status'] ?? '') === 'pending') {
                $pendingReturnItemsCount++;
            } else {
                $unreturnedItemsCount++;
            }

            $activeMaster = null;
            $variance = '0';

            $origSupplierId = !empty($item['purchase_supplier_id']) ? (int)$item['purchase_supplier_id'] : null;
            $origSupplierName = $item['supplier_name'] ?? null;
            $origSupplierIsWalkby = !empty($item['supplier_is_walkby']) || ($origSupplierId === $walkbySupplierId) || ($origSupplierId === 1);

            $isMultiSupplier = false;
            $contributingSuppliers = [];
            $rootSupplier = null;
            $defaultIsolatedSupplierChoice = 'original';
            $isolatedSupplierOptions = [];

            if ($isMerged && !empty($item['purchase_id'])) {
                $hasMergedItems = true;
                $startTargetId = !empty($item['merged_into_id']) ? (int)$item['merged_into_id'] : (int)$item['purchase_id'];
                $master = $this->resolveActiveMasterBatch($db, $startTargetId, false);
                if ($master) {
                    $activeMaster = [
                        'id' => (int)$master['id'],
                        'uid' => $master['uid'],
                        'price' => (string)$master['price'],
                        'quantity_remaining' => (string)$master['quantity_remaining'],
                        'status' => $master['status'],
                        'supplier_id' => !empty($master['supplier_id']) ? (int)$master['supplier_id'] : null,
                    ];
                    $masterCost = (string)$master['price'];
                    $unitDiff = Decimal::sub($masterCost, $origCost);
                    $variance = Decimal::mul($unitDiff, $quantity);
                    $totalVariance = Decimal::add($totalVariance, $variance);

                    // Trace constituent candidate batches of the master batch
                    $constituentIds = [];
                    if (!empty($master['merged_from_ids'])) {
                        $decoded = json_decode($master['merged_from_ids'], true);
                        if (is_array($decoded)) {
                            $constituentIds = array_values(array_unique(array_filter(array_map('intval', $decoded), fn($cid) => $cid > 0)));
                        }
                    }
                    if (empty($constituentIds) && !empty($master['id'])) {
                        $cStmt = $db->prepare('SELECT id FROM purchases WHERE merged_into_id = :mid');
                        $cStmt->execute(['mid' => $master['id']]);
                        $constituentIds = array_map('intval', $cStmt->fetchAll(PDO::FETCH_COLUMN));
                    }

                    $allLineageBatchIds = array_values(array_unique(array_filter(array_merge([(int)$master['id']], $constituentIds), fn($bid) => $bid > 0)));
                    $distinctSuppliersMap = [];
                    if (!empty($allLineageBatchIds)) {
                        $inPlaceholders = implode(',', array_fill(0, count($allLineageBatchIds), '?'));
                        $cSupStmt = $db->prepare("SELECT p.id as purchase_id, p.uid as purchase_uid, p.supplier_id, p.date, s.name as supplier_name, s.is_walkby FROM purchases p LEFT JOIN suppliers s ON p.supplier_id = s.id WHERE p.id IN ($inPlaceholders) ORDER BY p.id ASC");
                        $cSupStmt->execute($allLineageBatchIds);
                        $cRows = $cSupStmt->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($cRows as $crow) {
                            $sid = !empty($crow['supplier_id']) ? (int)$crow['supplier_id'] : null;
                            if ($sid) {
                                $sIsWalkby = !empty($crow['is_walkby']) || ($sid === $walkbySupplierId) || ($sid === 1);
                                if (!isset($distinctSuppliersMap[$sid])) {
                                    $distinctSuppliersMap[$sid] = [
                                        'id' => $sid,
                                        'name' => $crow['supplier_name'] ?? "Supplier #$sid",
                                        'is_walkby' => $sIsWalkby
                                    ];
                                }
                                if ($rootSupplier === null && !$sIsWalkby) {
                                    $rootSupplier = $distinctSuppliersMap[$sid];
                                }
                            }
                        }
                    }

                    // Also include origin lot's supplier if known
                    if ($origSupplierId && !isset($distinctSuppliersMap[$origSupplierId])) {
                        $distinctSuppliersMap[$origSupplierId] = [
                            'id' => $origSupplierId,
                            'name' => $origSupplierName ?? "Supplier #$origSupplierId",
                            'is_walkby' => $origSupplierIsWalkby
                        ];
                    }
                    if ($rootSupplier === null && $origSupplierId && !$origSupplierIsWalkby && isset($distinctSuppliersMap[$origSupplierId])) {
                        $rootSupplier = $distinctSuppliersMap[$origSupplierId];
                    }

                    $contributingSuppliers = array_values($distinctSuppliersMap);
                    $nonWalkbyContributors = array_values(array_filter($contributingSuppliers, fn($cs) => empty($cs['is_walkby'])));
                    $isMultiSupplier = count($nonWalkbyContributors) > 1 || (count($distinctSuppliersMap) > 1);

                    if ($isMultiSupplier) {
                        $defaultIsolatedSupplierChoice = 'walkby';
                        $isolatedSupplierOptions[] = [
                            'key' => 'walkby',
                            'supplier_id' => $walkbySupplierId,
                            'name' => $walkbySupplier['name'],
                            'label' => 'Walk-by (Multi-Supplier Origin)',
                            'is_default' => true
                        ];
                        if ($rootSupplier) {
                            $isolatedSupplierOptions[] = [
                                'key' => 'original',
                                'supplier_id' => $rootSupplier['id'],
                                'name' => $rootSupplier['name'],
                                'label' => "Primary Supplier (@{$rootSupplier['name']})",
                                'is_default' => false
                            ];
                        }
                        foreach ($nonWalkbyContributors as $nwc) {
                            if ($rootSupplier && $nwc['id'] === $rootSupplier['id']) continue;
                            $isolatedSupplierOptions[] = [
                                'key' => "supplier_{$nwc['id']}",
                                'supplier_id' => $nwc['id'],
                                'name' => $nwc['name'],
                                'label' => "Contributor (@{$nwc['name']})",
                                'is_default' => false
                            ];
                        }
                    } else {
                        // Merged, but single non-walkby supplier
                        $singleSupplier = !empty($nonWalkbyContributors) ? reset($nonWalkbyContributors) : null;
                        if ($singleSupplier) {
                            $defaultIsolatedSupplierChoice = 'original';
                            $isolatedSupplierOptions[] = [
                                'key' => 'original',
                                'supplier_id' => $singleSupplier['id'],
                                'name' => $singleSupplier['name'],
                                'label' => "Original Supplier (@{$singleSupplier['name']})",
                                'is_default' => true
                            ];
                            $isolatedSupplierOptions[] = [
                                'key' => 'walkby',
                                'supplier_id' => $walkbySupplierId,
                                'name' => $walkbySupplier['name'],
                                'label' => 'Walk-by Seller',
                                'is_default' => false
                            ];
                        } else {
                            $defaultIsolatedSupplierChoice = 'walkby';
                            $isolatedSupplierOptions[] = [
                                'key' => 'walkby',
                                'supplier_id' => $walkbySupplierId,
                                'name' => $walkbySupplier['name'],
                                'label' => 'Walk-by Seller',
                                'is_default' => true
                            ];
                        }
                    }
                }
            } else {
                // Normal unmerged batch
                if ($origSupplierId && !$origSupplierIsWalkby) {
                    $defaultIsolatedSupplierChoice = 'original';
                    $isolatedSupplierOptions[] = [
                        'key' => 'original',
                        'supplier_id' => $origSupplierId,
                        'name' => $origSupplierName ?? "Supplier #$origSupplierId",
                        'label' => "Original Supplier (@" . ($origSupplierName ?? "Supplier #$origSupplierId") . ")",
                        'is_default' => true
                    ];
                    $isolatedSupplierOptions[] = [
                        'key' => 'walkby',
                        'supplier_id' => $walkbySupplierId,
                        'name' => $walkbySupplier['name'],
                        'label' => 'Walk-by Seller',
                        'is_default' => false
                    ];
                } else {
                    $defaultIsolatedSupplierChoice = 'walkby';
                    $isolatedSupplierOptions[] = [
                        'key' => 'walkby',
                        'supplier_id' => $walkbySupplierId,
                        'name' => $walkbySupplier['name'],
                        'label' => 'Walk-by Seller',
                        'is_default' => true
                    ];
                }
            }

            $currentLotPrice = (!empty($item['purchase_id']) && isset($item['purchase_price']) && $item['purchase_price'] !== null)
                ? (string)$item['purchase_price']
                : (string)$origCost;
            $hasLotPriceChange = (!empty($item['purchase_id']) && Decimal::comp($currentLotPrice, (string)$origCost) !== 0);
            $lotPriceDelta = $hasLotPriceChange ? Decimal::sub($currentLotPrice, (string)$origCost) : '0';
            if ($hasLotPriceChange && empty($item['is_returned'])) {
                $hasAnyLotPriceChanges = true;
            }

            $analyzedItems[] = [
                'id' => (int)$item['id'],
                'item_id' => (int)$item['id'],
                'product_id' => $item['product_id'] ? (int)$item['product_id'] : null,
                'name' => $item['name'] ?? $item['purchase_name'] ?? 'Product',
                'quantity' => $quantity,
                'price' => $unitPrice,
                'total_price' => $totalPrice,
                'cost' => $origCost,
                'total_cost' => $totalCost,
                'purchase_price' => $currentLotPrice,
                'current_lot_price' => $currentLotPrice,
                'has_lot_price_change' => $hasLotPriceChange,
                'lot_price_delta' => $lotPriceDelta,
                'lot_price_updated_at' => $item['purchase_price_updated_at'] ?? null,
                'is_merged' => $isMerged,
                'is_merged_master' => $isSoldFromMaster,
                'merged_into_id' => $mergedIntoId,
                'is_sold_from_master' => $isSoldFromMaster,
                'is_constituent_merged' => $isConstituentMerged,
                'purchase_id' => $item['purchase_id'] ? (int)$item['purchase_id'] : null,
                'purchase_uid' => $item['purchase_uid'] ?? ($item['purchase_id'] ? "PUR-{$item['purchase_id']}" : null),
                'purchase_status' => $purchaseStatus,
                'purchase_remaining' => $purchaseRemaining,
                'is_depleted' => $isDepleted,
                'will_revitalize_on_return' => $willRevitalize,
                'is_consignment' => $isConsignment,
                'is_returned' => !empty($item['is_returned']),
                'return_acceptance_status' => $item['return_acceptance_status'] ?? null,
                'is_eligible_for_return' => (empty($item['is_returned']) && ($item['return_acceptance_status'] ?? '') !== 'pending'),
                'stock_owner_id' => !empty($item['owner_user_id']) ? (int)$item['owner_user_id'] : null,
                'stock_owner_name' => $item['stock_owner_username'] ?? null,
                'cost_owner_id' => $costOwnerId,
                'seller_id' => $sellerId,
                'active_master' => $activeMaster,
                'variance' => $variance,
                'origin_supplier_id' => $origSupplierId,
                'origin_supplier_name' => $origSupplierName,
                'origin_supplier_is_walkby' => $origSupplierIsWalkby,
                'is_multi_supplier' => $isMultiSupplier,
                'contributing_suppliers' => $contributingSuppliers,
                'root_supplier' => $rootSupplier,
                'default_isolated_supplier_choice' => $defaultIsolatedSupplierChoice,
                'isolated_supplier_options' => $isolatedSupplierOptions,
                'walkby_supplier' => $walkbySupplier,
            ];
        }

        $isMultiPartner = count($consignmentPartnerIds) > 0;
        $hasPartialReturns = !empty($order['has_partial_returns']) || $returnedItemsCount > 0;
        $isComplexOrder = (count($items) >= 3 || $hasMergedItems || $hasDepletedLots || $isMultiPartner || $hasPartialReturns || $hasAnyLotPriceChanges);

        $payload = [
            'ok' => true,
            'order' => [
                'id' => (int)$order['id'],
                'uid' => $order['uid'] ?? "ORD-{$order['id']}",
                'status' => $order['status'],
                'total' => (string)$order['total'],
                'amount_paid' => (string)($order['amount_paid'] ?? '0'),
                'net_cash_collected' => $netCashCollected,
                'extinguished_debt' => $extinguishedDebt,
                'has_partial_returns' => $hasPartialReturns,
            ],
            'has_merged_items' => $hasMergedItems,
            'has_merged_batches' => $hasMergedItems,
            'has_sold_from_master' => $hasSoldFromMaster,
            'has_constituent_merged' => $hasConstituentMerged,
            'has_depleted_lots' => $hasDepletedLots,
            'has_lot_price_changes' => $hasAnyLotPriceChanges,
            'is_multi_partner' => $isMultiPartner,
            'is_complex_order' => $isComplexOrder,
            'total_items_count' => count($items),
            'unreturned_items_count' => $unreturnedItemsCount,
            'returned_items_count' => $returnedItemsCount,
            'pending_return_items_count' => $pendingReturnItemsCount,
            'total_variance' => $totalVariance,
            'partner_clawback' => [
                'requires_approval' => (Decimal::comp($totalClaimed, '0') > 0 || $isMultiPartner),
                'requires_partner_consent' => (Decimal::comp($totalClaimed, '0') > 0 || $isMultiPartner),
                'total_claimed' => $totalClaimed,
                'stock_owners' => $stockOwnerNames,
            ],
            'walkby_supplier' => $walkbySupplier,
            'items' => $analyzedItems,
        ];

        if ($returnArray) {
            return $payload;
        }

        Response::json($payload);
    }

    /**
     * Resubmit a normal consignment order after a stock-owner refusal.
     * Mirrors CustomServicesController::resubmitAfterRefusal() but targets
     * normal orders (custom_sale IS NULL or 0).
     *
     * Flow: validate has_refusal → validate owner → bump agreement_version →
     * cancel old settlements → reset to pending → regenerate settlements →
     * sync agreement → notify all participants.
     */
    public function resubmitAfterRefusal(string $id): void
    {
        $db = Database::getConnection();
        try {
            $db->beginTransaction();

            $stmt = $db->prepare("SELECT * FROM orders WHERE id = :id FOR UPDATE");
            $stmt->execute(['id' => $id]);
            $order = $stmt->fetch();

            if (!$order || !(int)$order['has_refusal']) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Order not found or has no active refusal'], 400);
                return;
            }

            $currentUserId = (int)($_SESSION['user_id'] ?? 0);
            if ($currentUserId <= 0) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Unauthorized'], 401);
                return;
            }

            $isAdmin = !empty($_SESSION['is_admin']) || (isset($_SESSION['role']) && ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'super_admin'));
            $isOwner = ($currentUserId === (int)$order['owner_user_id']);
            $isCreator = ($currentUserId === (int)($order['created_by'] ?? 0));

            if (!$isOwner && !$isCreator && !$isAdmin) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Unauthorized. Only the order owner, creator, or admin can resubmit after refusal.'], 403);
                return;
            }

            $newVersion = (int)$order['agreement_version'] + 1;

            // Cancel all existing (non-settled) partner settlements for this order
            self::cancelPartnerSettlements($db, (int)$id, 'Order re-edited after refusal v' . $newVersion);

            // Reset order back to pending approval state
            $db->prepare("UPDATE orders SET agreement_status = 'pending', has_refusal = 0, is_locked_for_edit = 0, agreement_version = :v WHERE id = :id")
               ->execute(['v' => $newVersion, 'id' => $id]);

            // Regenerate partner settlements for the new version
            self::generatePartnerSettlements($db, (int)$id, $order['uid'] ?? '', (int)$order['owner_user_id']);
            self::syncOrderAgreementStatus($db, (int)$id);

            // Record in order_history
            $db->prepare("INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:oid, :uid, :action, :changes, NOW())")
               ->execute([
                   'oid' => $id,
                   'uid' => $currentUserId,
                   'action' => 'resubmitted_after_refusal',
                   'changes' => json_encode(['old_version' => (int)$order['agreement_version'], 'new_version' => $newVersion])
               ]);

            $db->commit();

            // Notify all participants (stock owners) about the resubmission
            $settlementsStmt = $db->prepare("SELECT DISTINCT payee_user_id FROM partner_settlements WHERE related_entity_type = 'orders' AND related_entity_id = :oid AND status != 'cancelled'");
            $settlementsStmt->execute(['oid' => $id]);
            $participants = $settlementsStmt->fetchAll(PDO::FETCH_COLUMN);
            $serviceName = $order['service_name'] ?? "Order #{$id}";

            foreach ($participants as $payeeId) {
                if ((int)$payeeId === $currentUserId) continue;
                SystemLog::write('partner_settlements', 'statement_sent', $id, $serviceName, json_encode([
                    'order_id' => $id,
                    'order_uid' => $order['uid'] ?? '',
                    'service_name' => $serviceName,
                    'target_user_id' => (int)$payeeId,
                    'sender_user_id' => $currentUserId,
                    'entity_type' => 'consignment_order',
                    'action' => 'agreement_required',
                    'stage_tag' => 'statements:consignment_order:agreement_pending'
                ]), $currentUserId);
            }

            // Audit log for the resubmission
            SystemLog::write('orders', 'resubmitted', $id, $serviceName, json_encode([
                'order_id' => $id,
                'order_uid' => $order['uid'] ?? '',
                'action' => 'resubmitted_after_refusal',
                'new_version' => $newVersion
            ]), $currentUserId);

            EntityVersion::bump($db, 'orders', 'partner_settlements');
            Response::json(['ok' => true, 'new_version' => $newVersion]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) $db->rollBack();
            error_log("Failed to resubmit order in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to resubmit order. Please check server error logs.'], 500);
        }
    }

    public function getChecklist(string $id): void
    {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT custom_checklist FROM orders WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $order = $stmt->fetch();
        if (!$order) {
            Response::json(['error' => 'Order not found'], 404);
            return;
        }
        $checklist = !empty($order['custom_checklist']) ? json_decode($order['custom_checklist'], true) : [];
        Response::json(['ok' => true, 'checklist' => $checklist]);
    }

    public function updateAttachments(string $id, array $data): void
    {
        if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
            session_start();
        }
        $sessionUser = $_SESSION['user_id'] ?? null;
        if (!$sessionUser) {
            Response::json(['error' => 'Authentication required'], 401);
            return;
        }

        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);

        $stmt = $db->prepare("SELECT id, uid, status, custom_sale, created_by, owner_user_id, service_owners_data, custom_checklist, agreement_status, is_locked_for_edit FROM orders WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $order = $stmt->fetch();

        if (!$order) {
            Response::json(['error' => 'Order not found'], 404);
            return;
        }

        if ($order['status'] === 'deleted' || $order['status'] === 'returned') {
            Response::json(['error' => 'Cannot update attachments of a deleted or returned order'], 400);
            return;
        }

        // Authorization check: Admin, Creator, Owner, or Collaborator
        $isAdmin = (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin');
        $isCreator = ((int)$order['created_by'] === (int)$sessionUser);
        $isOwner = ((int)($order['owner_user_id'] ?? $order['created_by']) === (int)$sessionUser);
        $isCollaborator = false;

        if (!empty($order['service_owners_data'])) {
            $collabs = is_string($order['service_owners_data']) ? json_decode($order['service_owners_data'], true) : $order['service_owners_data'];
            if (is_array($collabs)) {
                foreach ($collabs as $c) {
                    if ((int)($c['user_id'] ?? 0) === (int)$sessionUser) {
                        $isCollaborator = true;
                        break;
                    }
                }
            }
        }

        if (!$isAdmin && !$isCreator && !$isOwner && !$isCollaborator) {
            Response::json(['error' => 'Forbidden: You are not authorized to update attachments for this order'], 403);
            return;
        }

        $rawChecklist = $data['custom_checklist'] ?? $data['checklist'] ?? $data['items'] ?? null;
        if (is_string($rawChecklist)) {
            $rawChecklist = json_decode($rawChecklist, true);
        }
        if (!is_array($rawChecklist)) {
            $rawChecklist = [];
        }

        $oldChecklistObj = !empty($order['custom_checklist']) ? json_decode($order['custom_checklist'], true) : [];
        if (!is_array($oldChecklistObj)) {
            $oldChecklistObj = [];
        }

        // Preserve unhydrated fileData if an attachment was kept by user but fileData wasn't resent over wire
        $sanitizedChecklist = [];
        foreach ($rawChecklist as $newItem) {
            $newDesc = trim($newItem['text'] ?? $newItem['title'] ?? $newItem['name'] ?? '');
            $newId = $newItem['id'] ?? null;

            // Find matching item in old checklist
            $oldItem = null;
            foreach ($oldChecklistObj as $oi) {
                if (($newId && isset($oi['id']) && $oi['id'] === $newId) ||
                    ($newDesc !== '' && trim($oi['text'] ?? $oi['title'] ?? $oi['name'] ?? '') === $newDesc)) {
                    $oldItem = $oi;
                    break;
                }
            }

            if ($oldItem) {
                if (empty($newItem['fileData']) && !empty($oldItem['fileData']) &&
                    !empty($newItem['fileName']) && ($newItem['fileName'] === ($oldItem['fileName'] ?? ''))) {
                    $newItem['fileData'] = $oldItem['fileData'];
                }

                if (isset($newItem['attachments']) && is_array($newItem['attachments'])) {
                    $oldAtts = is_array($oldItem['attachments'] ?? null) ? $oldItem['attachments'] : [];
                    foreach ($newItem['attachments'] as &$newAtt) {
                        if (empty($newAtt['fileData'])) {
                            foreach ($oldAtts as $oldAtt) {
                                $sameId = !empty($newAtt['id']) && !empty($oldAtt['id']) && $newAtt['id'] === $oldAtt['id'];
                                $sameName = !empty($newAtt['fileName']) && !empty($oldAtt['fileName']) && $newAtt['fileName'] === $oldAtt['fileName'];
                                if ($sameId || $sameName) {
                                    if (!empty($oldAtt['fileData'])) {
                                        $newAtt['fileData'] = $oldAtt['fileData'];
                                    }
                                    break;
                                }
                            }
                        }
                    }
                    unset($newAtt);
                }
            }
            $sanitizedChecklist[] = $newItem;
        }

        $newJson = json_encode($sanitizedChecklist);

        // Update database
        $updateStmt = $db->prepare("UPDATE orders SET custom_checklist = :custom_checklist WHERE id = :id");
        $updateStmt->execute([
            'custom_checklist' => $newJson,
            'id' => $id
        ]);

        // Synchronize into dedicated order_attachments table (retaining deleted attachments forever)
        self::syncOrderAttachments($db, (int)$id, $sanitizedChecklist, (int)$sessionUser);

        // Granular Mutation Detection Engine (Items & Attachments Lifecycle)
        try {
            $snapshot = self::captureOrderSnapshot($db, (int)$id);
            $historyEvents = [];

            // Helper to extract attachments count and list from an item
            $extractAtts = function($item) {
                $atts = is_array($item['attachments'] ?? null) ? $item['attachments'] : [];
                $count = count($atts);
                if (!empty($item['fileData']) || !empty($item['fileName'])) {
                    if ($count === 0) $count = 1;
                }
                return [$count, $atts];
            };

            // Index old items by id or text
            $oldMap = [];
            foreach ($oldChecklistObj as $idx => $oi) {
                $key = !empty($oi['id']) ? (string)$oi['id'] : ('txt_' . trim($oi['text'] ?? $oi['title'] ?? $oi['name'] ?? "item_$idx"));
                $oldMap[$key] = $oi;
            }

            // Track matched old keys
            $matchedOldKeys = [];

            foreach ($sanitizedChecklist as $idx => $ni) {
                $itemTitle = trim($ni['text'] ?? $ni['title'] ?? $ni['name'] ?? "Item #" . ($idx + 1));
                $key = !empty($ni['id']) ? (string)$ni['id'] : ('txt_' . $itemTitle);

                list($newAttCount, $newAtts) = $extractAtts($ni);

                if (!isset($oldMap[$key])) {
                    // Try fallback match by title
                    $fallbackKey = null;
                    foreach ($oldMap as $ok => $ov) {
                        if (!in_array($ok, $matchedOldKeys) && trim($ov['text'] ?? $ov['title'] ?? $ov['name'] ?? '') === $itemTitle) {
                            $fallbackKey = $ok;
                            break;
                        }
                    }
                    if ($fallbackKey) {
                        $key = $fallbackKey;
                    }
                }

                if (isset($oldMap[$key])) {
                    $matchedOldKeys[] = $key;
                    $oi = $oldMap[$key];
                    list($oldAttCount, $oldAtts) = $extractAtts($oi);

                    if ($newAttCount > $oldAttCount) {
                        $diff = $newAttCount - $oldAttCount;
                        $historyEvents[] = [
                            'action' => 'attachment_added',
                            'note' => "Added {$diff} attachment(s) to item '{$itemTitle}' (now {$newAttCount}, was {$oldAttCount})",
                            'changes' => [
                                "Item '{$itemTitle}' Attachments" => [
                                    'from' => "{$oldAttCount} attachment(s)",
                                    'to' => "{$newAttCount} attachment(s)"
                                ]
                            ]
                        ];
                    } elseif ($newAttCount < $oldAttCount) {
                        $diff = $oldAttCount - $newAttCount;
                        $historyEvents[] = [
                            'action' => 'attachment_removed',
                            'note' => "Removed {$diff} attachment(s) from item '{$itemTitle}' (now {$newAttCount}, was {$oldAttCount})",
                            'changes' => [
                                "Item '{$itemTitle}' Attachments" => [
                                    'from' => "{$oldAttCount} attachment(s)",
                                    'to' => "{$newAttCount} attachment(s)"
                                ]
                            ]
                        ];
                    }

                    // Check title / status changes
                    $oldStatus = $oi['status'] ?? 'pending';
                    $newStatus = $ni['status'] ?? 'pending';
                    if ($oldStatus !== $newStatus) {
                        $historyEvents[] = [
                            'action' => 'item_updated',
                            'note' => "Updated status of item '{$itemTitle}' to {$newStatus}",
                            'changes' => [
                                "Checklist Status - {$itemTitle}" => [
                                    'from' => $oldStatus,
                                    'to' => $newStatus
                                ]
                            ]
                        ];
                    }
                } else {
                    // Brand new item!
                    if ($newAttCount > 0) {
                        $historyEvents[] = [
                            'action' => 'item_with_attachments_added',
                            'note' => "Added item '{$itemTitle}' with {$newAttCount} attachment(s)",
                            'changes' => [
                                "Checklist Item Added: {$itemTitle}" => [
                                    'from' => null,
                                    'to' => "{$itemTitle} ({$newAttCount} attachment" . ($newAttCount > 1 ? 's' : '') . ")"
                                ]
                            ]
                        ];
                    } else {
                        $historyEvents[] = [
                            'action' => 'item_added',
                            'note' => "Added item '{$itemTitle}'",
                            'changes' => [
                                "Checklist Item Added: {$itemTitle}" => [
                                    'from' => null,
                                    'to' => $itemTitle
                                ]
                            ]
                        ];
                    }
                }
            }

            // Check removed items
            foreach ($oldMap as $ok => $oi) {
                if (!in_array($ok, $matchedOldKeys)) {
                    $oldTitle = trim($oi['text'] ?? $oi['title'] ?? $oi['name'] ?? 'Item');
                    list($oldAttCount, $oldAtts) = $extractAtts($oi);
                    $historyEvents[] = [
                        'action' => 'item_removed',
                        'note' => "Removed item '{$oldTitle}'" . ($oldAttCount > 0 ? " (had {$oldAttCount} attachment" . ($oldAttCount > 1 ? 's' : '') . ")" : ''),
                        'changes' => [
                            "Checklist Item Removed: {$oldTitle}" => [
                                'from' => $oldTitle,
                                'to' => null
                            ]
                        ]
                    ];
                }
            }

            // If no specific mutations detected (e.g. metadata or ordering edit), fallback to custody_updated
            if (empty($historyEvents)) {
                $historyEvents[] = [
                    'action' => 'custody_updated',
                    'note' => "Custody papers and checklist updated",
                    'changes' => [
                        'Checklist Items' => [
                            'from' => count($oldChecklistObj) . ' items',
                            'to' => count($sanitizedChecklist) . ' items'
                        ]
                    ]
                ];
            }

            // Consolidate events so that one atomic save creates exactly ONE unified history action
            $consolidatedChanges = [];
            $notesList = [];
            $actionsList = [];

            foreach ($historyEvents as $ev) {
                if (!empty($ev['changes']) && is_array($ev['changes'])) {
                    foreach ($ev['changes'] as $k => $v) {
                        $consolidatedChanges[$k] = $v;
                    }
                }
                if (!empty($ev['note'])) {
                    $notesList[] = $ev['note'];
                }
                if (!empty($ev['action'])) {
                    $actionsList[] = $ev['action'];
                }
            }

            $consolidatedNote = implode("; ", $notesList);

            // Determine consolidated primary action
            $primaryAction = 'custody_updated';
            if (count($actionsList) === 1) {
                $primaryAction = $actionsList[0];
            } else if (in_array('item_with_attachments_added', $actionsList)) {
                $primaryAction = 'item_with_attachments_added';
            } else if (in_array('item_added', $actionsList)) {
                $primaryAction = 'item_added';
            } else if (in_array('attachment_added', $actionsList)) {
                $primaryAction = 'attachment_added';
            } else if (in_array('attachment_removed', $actionsList)) {
                $primaryAction = 'attachment_removed';
            } else if (in_array('item_removed', $actionsList)) {
                $primaryAction = 'item_removed';
            } else if (in_array('item_updated', $actionsList)) {
                $primaryAction = 'item_updated';
            }

            // Record ONE consolidated event in order_history with full point-in-time snapshot
            self::recordOrderHistory(
                $db,
                (int)$id,
                (int)$sessionUser,
                $primaryAction,
                $consolidatedChanges,
                $consolidatedNote,
                $snapshot
            );
        } catch (\Throwable $th) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $th->getMessage());
        }

        // System Log (Unified signature: module, action, entityId, entityName, details, userId)
        try {
            SystemLog::write(
                'orders',
                'attachments_updated',
                (int)$id,
                "Order #" . ($order['uid'] ?? $id),
                "Attachments/Papers updated for Order #" . ($order['uid'] ?? $id) . " by User #{$sessionUser}",
                (int)$sessionUser
            );
        } catch (\Throwable $th) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $th->getMessage());
        }

        Response::json([
            'ok' => true,
            'order_id' => $id,
            'custom_checklist' => $sanitizedChecklist,
            'message' => 'Attachments and custody papers updated successfully'
        ]);
    }

    /**
     * Update device physical custody status and handover QC points (Mission 52)
     */
    public function updateDeviceCustody(string $id, array $data): void
    {
        if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
            session_start();
        }
        $sessionUser = $_SESSION['user_id'] ?? null;
        if (!$sessionUser) {
            Response::json(['error' => 'Authentication required'], 401);
            return;
        }

        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);

        $stmt = $db->prepare("SELECT id, uid, status, custom_sale, created_by, owner_user_id, service_owners_data, device_custody_status, diagnostic_matrix, handover_qc_matrix, warranty_period, warranty_expiry_date, returned_at FROM orders WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $order = $stmt->fetch();

        if (!$order) {
            Response::json(['error' => 'Order not found'], 404);
            return;
        }

        // Authorization check: Any authenticated staff member is trusted to record physical custody on counter intake/handover (Rule 2: Trusted User Philosophy).
        // Audit logging tracks the exact session user who recorded the custody change.
        $isAdmin = !empty($_SESSION['is_admin']) || (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin');
        $isCreator = ((int)$order['created_by'] === (int)$sessionUser);
        $isOwner = ((int)($order['owner_user_id'] ?? $order['created_by']) === (int)$sessionUser);
        $isCollaborator = false;

        if (!empty($order['service_owners_data'])) {
            $collabs = is_string($order['service_owners_data']) ? json_decode($order['service_owners_data'], true) : $order['service_owners_data'];
            if (is_array($collabs)) {
                foreach ($collabs as $c) {
                    if ((int)($c['user_id'] ?? 0) === (int)$sessionUser) {
                        $isCollaborator = true;
                        break;
                    }
                }
            }
        }

        // Cashiers/Staff on shift are authorized to accept or hand over devices at the counter.
        if (!$sessionUser) {
            Response::json(['error' => 'Authentication required'], 401);
            return;
        }

        $newStatus = isset($data['device_custody_status']) ? trim((string)$data['device_custody_status']) : null;
        $allowedStatuses = ['on_me', 'pending', 'returned'];
        if ($newStatus !== null && !in_array($newStatus, $allowedStatuses)) {
            Response::json(['error' => 'Invalid device custody status'], 400);
            return;
        }
        if ($newStatus === null) {
            $newStatus = $order['device_custody_status'] ?? 'on_me';
        }

        $handoverQc = isset($data['handover_qc_matrix']) ? (is_string($data['handover_qc_matrix']) ? $data['handover_qc_matrix'] : json_encode($data['handover_qc_matrix'])) : null;

        $customReturnedAt = !empty($data['returned_at']) ? trim((string)$data['returned_at']) : null;
        if ($customReturnedAt) {
            // Normalize ISO 8601 / datetime-local format to MySQL Y-m-d H:i:s
            $customReturnedAt = str_replace('T', ' ', $customReturnedAt);
            if (strlen($customReturnedAt) === 16) {
                $customReturnedAt .= ':00';
            }
        }

        $wPeriod = isset($data['warranty_period']) ? trim((string)$data['warranty_period']) : ($order['warranty_period'] ?? '90 Days');

        $extraSql = "";
        $params = [
            'dcs' => $newStatus,
            'hqc' => $handoverQc,
            'id' => $id
        ];

        if (isset($data['warranty_period'])) {
            $extraSql .= ", warranty_period = :wperiod";
            $params['wperiod'] = $wPeriod;
        }

        if ($newStatus === 'returned') {
            if ($customReturnedAt) {
                $extraSql .= ", returned_at = :ret_at";
                $params['ret_at'] = $customReturnedAt;
            } elseif (!empty($data['force_update_handover']) || empty($order['returned_at'])) {
                $extraSql .= ", returned_at = NOW()";
            } else {
                $extraSql .= ", returned_at = COALESCE(returned_at, NOW())";
            }

            // Calculate and persist warranty expiry from the exact moment of client handover
            preg_match('/(\d+)/', (string)$wPeriod, $m);
            $days = isset($m[1]) ? (int)$m[1] : 90;
            if (stripos($wPeriod, 'month') !== false || stripos($wPeriod, 'mois') !== false || stripos($wPeriod, 'شهر') !== false) {
                $days = $days * 30;
            } elseif (stripos($wPeriod, 'year') !== false || stripos($wPeriod, 'an') !== false || stripos($wPeriod, 'سنة') !== false) {
                $days = $days * 365;
            }

            if ($days <= 0 || stripos($wPeriod, 'none') !== false || stripos($wPeriod, 'no warranty') !== false || stripos($wPeriod, 'بدون') !== false) {
                $extraSql .= ", warranty_expiry_date = NULL";
            } else {
                if ($customReturnedAt) {
                    $extraSql .= ", warranty_expiry_date = DATE_ADD(:ret_at_exp, INTERVAL {$days} DAY)";
                    $params['ret_at_exp'] = $customReturnedAt;
                } elseif (!empty($data['force_update_handover']) || empty($order['returned_at'])) {
                    $extraSql .= ", warranty_expiry_date = DATE_ADD(NOW(), INTERVAL {$days} DAY)";
                } else {
                    $extraSql .= ", warranty_expiry_date = DATE_ADD(COALESCE(returned_at, NOW()), INTERVAL {$days} DAY)";
                }
            }
        }

        $updStmt = $db->prepare("UPDATE orders SET device_custody_status = :dcs, handover_qc_matrix = COALESCE(:hqc, handover_qc_matrix) {$extraSql} WHERE id = :id");
        $updStmt->execute($params);

        // Fetch refreshed order custody metadata for authoritative sync
        $stmtRef = $db->prepare("SELECT returned_at, warranty_period, warranty_expiry_date, device_custody_status FROM orders WHERE id = :id");
        $stmtRef->execute(['id' => $id]);
        $refreshed = $stmtRef->fetch() ?: [];

        // Audit Logging (Rule 2 & Rule 8)
        try {
            SystemLog::write(
                'orders',
                'device_custody_updated',
                (int)$id,
                "Order #" . ($order['uid'] ?? $id),
                "Device physical custody updated to '{$newStatus}' for Order #" . ($order['uid'] ?? $id) . " by User #{$sessionUser}",
                (int)$sessionUser
            );
        } catch (\Throwable $th) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $th->getMessage());
        }

        Response::json([
            'ok' => true,
            'order_id' => $id,
            'device_custody_status' => $newStatus,
            'returned_at' => $refreshed['returned_at'] ?? null,
            'warranty_period' => $refreshed['warranty_period'] ?? $wPeriod,
            'warranty_expiry_date' => $refreshed['warranty_expiry_date'] ?? null,
            'handover_qc_matrix' => $handoverQc,
            'message' => 'Device custody status updated successfully'
        ]);
    }

    /**
     * Remake a refused POS order into the active cashier cart.
     * Releases reserved stock hold, cancels partner settlements, soft-deletes the old refused order,
     * and returns the order items for active cart hydration.
     */
    public function remake(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);
        try {
            $db->beginTransaction();

            $stmt = $db->prepare("SELECT * FROM orders WHERE id = :id FOR UPDATE");
            $stmt->execute(['id' => $id]);
            $order = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$order) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Order not found'], 404);
                return;
            }

            $currentUserId = (int)($_SESSION['user_id'] ?? 0);
            if ($currentUserId <= 0) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Unauthorized'], 401);
                return;
            }

            // Authorization: Admin, Creator, or Order Owner
            $isAdmin = false;
            try {
                $uStmt = $db->prepare("SELECT is_admin, department FROM users WHERE id = :uid LIMIT 1");
                $uStmt->execute(['uid' => $currentUserId]);
                $uRow = $uStmt->fetch(PDO::FETCH_ASSOC);
                $isAdmin = ($uRow && ((int)($uRow['is_admin'] ?? 0) === 1 || in_array($uRow['department'] ?? '', ['admin', 'owner', 'superadmin', 'general_admin'])));
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

            $isOrderCreator = ((int)($order['created_by'] ?? 0) === $currentUserId);
            $isOrderOwner = ((int)($order['owner_user_id'] ?? ($order['user_id'] ?? 0)) === $currentUserId);

            if (!$isAdmin && !$isOrderCreator && !$isOrderOwner) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'You are not authorized to remake this order'], 403);
                return;
            }

            // Order lifecycle check:
            // 1. Must not be completed, returned, or deleted
            $rawStatus = (string)($order['status'] ?? '');
            if (in_array($rawStatus, ['completed', 'returned', 'deleted'])) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => "Cannot remake order in status '{$rawStatus}'"], 400);
                return;
            }

            // 2. Collaborative multi-partner orders in Phase 2 cannot be remade (must use return workflow per Rule 58 & 62)
            $agrStatus = (string)($order['agreement_status'] ?? '');
            $orderOwnerId = (int)($order['owner_user_id'] ?? ($order['created_by'] ?? 0));

            $hasExternalPartners = false;
            $chkPartners = $db->prepare("
                SELECT COUNT(*) FROM partner_settlements 
                WHERE related_entity_type = 'orders' 
                  AND related_entity_id = :id 
                  AND payee_user_id != :owner_id 
                  AND status != 'cancelled'
            ");
            $chkPartners->execute(['id' => $id, 'owner_id' => $orderOwnerId]);
            if ((int)$chkPartners->fetchColumn() > 0) {
                $hasExternalPartners = true;
            }

            if ($hasExternalPartners && $agrStatus === 'all_accepted') {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Cannot remake order: All partners have already accepted the agreement'], 400);
                return;
            }

            // 3. Must be either refused OR in Phase 1 pending agreement OR single-cashier retail order
            $hasRefusal = ((int)($order['has_refusal'] ?? 0) === 1 || $agrStatus === 'has_refusal');
            $isPendingPhase1 = ($agrStatus === 'pending' || $rawStatus === 'pending' || $rawStatus === 'processing');
            $isSingleCashierOrder = (!$hasExternalPartners);

            if (!$hasRefusal && !$isPendingPhase1 && !$isSingleCashierOrder) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Only pending, refused, or single-cashier orders can be remade in cart'], 400);
                return;
            }

            // Fetch order items with product metadata
            $itemsStmt = $db->prepare("
                SELECT oi.*, p.name AS product_name, p.uid AS product_uid, p.display_decimals, p.quantity AS current_stock
                FROM order_items oi
                LEFT JOIN products p ON oi.product_id = p.id
                WHERE oi.order_id = :id
            ");
            $itemsStmt->execute(['id' => $id]);
            $items = $itemsStmt->fetchAll(PDO::FETCH_ASSOC);

            // Remake in POS Cart is NON-DESTRUCTIVE:
            // Items and order metadata are returned for cart hydration.
            // Original order, stock holds, and partner settlements remain 100% intact.
            // If the user cancels the cart, the original order is unharmed.
            // If the user completes the remake, /api/orders/{id}/update-remake will atomically swap items, stock holds, and settlements.
            if ($db->inTransaction()) {
                $db->commit();
            }

            Response::json([
                'ok' => true,
                'message' => 'Order items prepared for POS cart remake.',
                'order' => $order,
                'items' => $items
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) $db->rollBack();
            error_log("Failed to prepare remake order in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to prepare order for remake. Please check server error logs.'], 500);
        }
    }

    /**
     * Atomically update an order being remade in the POS Cart.
     * Swaps line items, inventory reservations, and partner settlements in a single transaction
     * while preserving the original order ID, UID, customer, and historical ledger.
     */
    public function updateRemake(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureOrderMetaColumns($db);
        $this->ensureOrderHistoryTable($db);
        self::ensurePartnerSettlementsColumns($db);

        try {
            $db->beginTransaction();

            $stmt = $db->prepare("SELECT * FROM orders WHERE id = :id FOR UPDATE");
            $stmt->execute(['id' => $id]);
            $order = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$order) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Order not found'], 404);
                return;
            }

            $currentUserId = (int)($_SESSION['user_id'] ?? 0);
            if ($currentUserId <= 0) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Unauthorized'], 401);
                return;
            }

            // Authorization: Admin, Creator, or Order Owner
            $isAdmin = false;
            try {
                $uStmt = $db->prepare("SELECT is_admin, department FROM users WHERE id = :uid LIMIT 1");
                $uStmt->execute(['uid' => $currentUserId]);
                $uRow = $uStmt->fetch(PDO::FETCH_ASSOC);
                $isAdmin = ($uRow && ((int)($uRow['is_admin'] ?? 0) === 1 || in_array($uRow['department'] ?? '', ['admin', 'owner', 'superadmin', 'general_admin'])));
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

            $isOrderCreator = ((int)($order['created_by'] ?? 0) === $currentUserId);
            $isOrderOwner = ((int)($order['owner_user_id'] ?? ($order['user_id'] ?? 0)) === $currentUserId);

            if (!$isAdmin && !$isOrderCreator && !$isOrderOwner) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'You are not authorized to update this order'], 403);
                return;
            }

            // Order lifecycle check: cannot update completed, returned, or deleted orders
            $rawStatus = (string)($order['status'] ?? '');
            if (in_array($rawStatus, ['completed', 'returned', 'deleted'])) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => "Cannot update order in status '{$rawStatus}'"], 400);
                return;
            }

            $agrStatus = (string)($order['agreement_status'] ?? '');
            if ($agrStatus === 'all_accepted' && (int)($order['agreement_version'] ?? 1) > 1) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Cannot update order: Consensus has already been finalized by all partners'], 400);
                return;
            }

            $items = $data['items'] ?? [];
            if (!is_array($items) || count($items) === 0) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Basket cannot be empty. At least one item is required.'], 400);
                return;
            }

            $customerId = $data['customer_id'] ?? $order['customer_id'];
            if (!$customerId) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Customer is required'], 400);
                return;
            }

            // 1. Fetch old items to release old inventory (unreturned only)
            $oldItemsStmt = $db->prepare("SELECT * FROM order_items WHERE order_id = :id AND is_returned = 0");
            $oldItemsStmt->execute(['id' => $id]);
            $oldItems = $oldItemsStmt->fetchAll(PDO::FETCH_ASSOC);

            // 2. Release previous inventory holds or restore physical stock
            $oldStatus = $order['status'] ?? 'pending';
            if (in_array($oldStatus, ['completed', 'pending_money'], true)) {
                self::restoreInventory($db, $oldItems, 'absorb_master', $order['uid'] ?? null, (int)$id);
            } else {
                self::releaseInventory($db, $oldItems);
            }

            // 3. Delete previous order_items
            $db->prepare("DELETE FROM order_items WHERE order_id = :id")->execute(['id' => $id]);

            // 4. Cancel previous partner settlements
            self::cancelPartnerSettlements($db, (int)$id, 'Order updated via POS Cart remake');

            // 5. Recompute total + products_cost authoritatively
            $recomputed = $this->recomputeFromItems($items, false, isset($data['total']) ? (string)$data['total'] : null);
            $total = $recomputed['total'];
            $productsCost = $recomputed['products_cost'];
            $profit = Decimal::sub($total, $productsCost);

            $orderOwnerId = (int)($order['owner_user_id'] ?? ($order['created_by'] ?? $currentUserId));

            // 6. Insert new items with batch and split attribution
            $hasExternalPartners = false;
            foreach ($items as $item) {
                $productId = $item['product_id'] ?? $item['id'] ?? null;
                $purchaseId = $item['purchase_id'] ?? $item['batch_id'] ?? $item['batchId'] ?? null;
                $quantity = (string)($item['quantity'] ?? '1');

                if (Decimal::comp($quantity, '0') <= 0) {
                    if ($db->inTransaction()) $db->rollBack();
                    Response::json(['error' => 'Invalid item quantity'], 400);
                    return;
                }

                $itemPrice = (string)($item['price'] ?? '0');
                if (!is_numeric($itemPrice) || Decimal::comp($itemPrice, '0') < 0) {
                    if ($db->inTransaction()) $db->rollBack();
                    Response::json(['error' => 'Item price cannot be negative'], 400);
                    return;
                }

                if ($productId) {
                    $pStmt = $db->prepare('SELECT id FROM products WHERE id = :id');
                    $pStmt->execute(['id' => $productId]);
                    if (!$pStmt->fetch()) {
                        if ($db->inTransaction()) $db->rollBack();
                        Response::json(['error' => 'Product not found: ' . $productId], 404);
                        return;
                    }
                }

                $purchase = null;
                if ($purchaseId) {
                    $purStmt = $db->prepare('SELECT id, owner_user_id, price, transfer_status FROM purchases WHERE id = :id');
                    $purStmt->execute(['id' => $purchaseId]);
                    $purchase = $purStmt->fetch(PDO::FETCH_ASSOC);
                }

                $itemOwner = null;
                if (!empty($item['owner_user_id'])) {
                    $itemOwner = (int)$item['owner_user_id'];
                } elseif ($purchase && !empty($purchase['owner_user_id'])) {
                    $itemOwner = (int)$purchase['owner_user_id'];
                } else {
                    $itemOwner = $orderOwnerId;
                }

                $unitCost = $purchase ? (string)($purchase['price'] ?? $item['cost'] ?? '0') : (string)($item['cost'] ?? '0');
                $costOwnerId = $purchase ? (!empty($purchase['owner_user_id']) ? (int)$purchase['owner_user_id'] : null) : (!empty($item['cost_owner_id']) ? (int)$item['cost_owner_id'] : null);
                $profitSplitType = !empty($item['profit_split_type']) ? (string)$item['profit_split_type'] : (!empty($item['splitType']) ? (string)$item['splitType'] : 'none');
                $productOwnerSharePct = isset($item['product_owner_share_pct']) ? (string)$item['product_owner_share_pct'] : (isset($item['ownerSharePct']) ? (string)$item['ownerSharePct'] : '0');

                $itemPrice = (string)($item['price'] ?? '0');
                $lineRevenue = Decimal::mul($itemPrice, $quantity);
                $lineCost = Decimal::mul($unitCost, $quantity);
                $lineProfit = Decimal::sub($lineRevenue, $lineCost);

                $productOwnerProfit = '0';
                $serviceOwnerProfit = $lineProfit;

                if ($costOwnerId && $costOwnerId !== $orderOwnerId) {
                    $hasExternalPartners = true;
                    if ($profitSplitType === 'fixed') {
                        $fixedClaim = isset($item['product_owner_fixed']) ? (string)$item['product_owner_fixed'] : (isset($item['product_owner_profit']) ? (string)$item['product_owner_profit'] : '0');
                        if (Decimal::comp($fixedClaim, '0') > 0 && Decimal::comp($fixedClaim, $lineProfit) <= 0) {
                            $productOwnerProfit = $fixedClaim;
                            $serviceOwnerProfit = Decimal::sub($lineProfit, $productOwnerProfit);
                        } elseif (Decimal::comp($fixedClaim, $lineProfit) > 0) {
                            $productOwnerProfit = $lineProfit;
                            $serviceOwnerProfit = '0';
                        }
                    } elseif ($profitSplitType !== 'none') {
                        $pct = Decimal::comp($productOwnerSharePct, '0') > 0 ? $productOwnerSharePct : '50';
                        $productOwnerProfit = Decimal::mul($lineProfit, Decimal::div($pct, '100', 8));
                        $serviceOwnerProfit = Decimal::sub($lineProfit, $productOwnerProfit);
                    }
                }

                $insStmt = $db->prepare('INSERT INTO order_items (order_id, product_id, purchase_id, name, price, quantity, cost, description, owner_user_id, cost_owner_id, profit_split_type, product_owner_share_pct, product_owner_profit, service_owner_profit) VALUES (:order_id, :product_id, :purchase_id, :name, :price, :quantity, :cost, :description, :owner_user_id, :cost_owner_id, :profit_split_type, :product_owner_share_pct, :product_owner_profit, :service_owner_profit)');
                $insStmt->execute([
                    'order_id' => $id,
                    'product_id' => $productId,
                    'purchase_id' => $purchaseId,
                    'name' => $item['name'] ?? '',
                    'price' => $itemPrice,
                    'quantity' => $quantity,
                    'cost' => $unitCost,
                    'description' => $item['description'] ?? null,
                    'owner_user_id' => $itemOwner,
                    'cost_owner_id' => $costOwnerId,
                    'profit_split_type' => $profitSplitType,
                    'product_owner_share_pct' => $productOwnerSharePct,
                    'product_owner_profit' => $productOwnerProfit,
                    'service_owner_profit' => $serviceOwnerProfit,
                ]);
            }

            // 7. Determine target status & payments
            $targetStatus = ($data['status'] ?? '') === 'pending_money' ? 'pending_money' : (($data['status'] ?? '') === 'completed' ? 'completed' : 'pending');
            $amountPaid = '0';
            $dueDate = null;
            $extraProfit = '0';
            if ($targetStatus === 'pending_money' || $targetStatus === 'completed') {
                $amountPaid = (isset($data['amount_paid']) && $data['amount_paid'] !== '') ? (string)$data['amount_paid'] : '0';
                if (Decimal::comp($amountPaid, '0') < 0) $amountPaid = '0';
                if (Decimal::comp($amountPaid, $total) > 0) {
                    $extraProfit = Decimal::sub($amountPaid, $total);
                    $total = $amountPaid;
                    $profit = Decimal::add($profit, $extraProfit);
                    $targetStatus = 'completed';
                } elseif (Decimal::comp($amountPaid, $total) === 0 && Decimal::comp($amountPaid, '0') > 0) {
                    $targetStatus = 'completed';
                }

                if ($targetStatus === 'pending_money' && !empty($data['due_date'])) {
                    $dueDateTs = strtotime((string)$data['due_date']);
                    if ($dueDateTs === false) {
                        if ($db->inTransaction()) $db->rollBack();
                        Response::json(['error' => 'Invalid due date format.'], 400);
                        return;
                    }
                    if ($dueDateTs < time() - 60) {
                        if ($db->inTransaction()) $db->rollBack();
                        Response::json(['error' => 'Payment due date/time cannot be in the past. Please select a current or future time.'], 400);
                        return;
                    }
                    $dueDate = date('Y-m-d H:i:s', $dueDateTs);
                }
            }

            // 8. Handle inventory: deduct if completed or pending_money, reserve if pending
            if ($targetStatus === 'completed' || $targetStatus === 'pending_money') {
                $invErr = self::deductInventory($db, $items);
            } else {
                $invErr = self::reserveInventory($db, $items);
            }
            if ($invErr) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => $invErr], 400);
                return;
            }

            // 9. Determine agreement status
            $initialAgreementStatus = $hasExternalPartners ? 'pending' : 'all_accepted';

            // 10. Regenerate partner settlements
            self::generatePartnerSettlements($db, (int)$id, $order['uid'], $orderOwnerId);

            $customerNote = (isset($data['customer_note']) && trim((string)$data['customer_note']) !== '')
                ? trim((string)$data['customer_note'])
                : ((isset($data['note']) && trim((string)$data['note']) !== '') ? trim((string)$data['note']) : ($order['customer_note'] ?? null));

            $itemsSummary = !empty($data['items_summary']) ? (string)$data['items_summary'] : ($order['items_summary'] ?? '');

            // 11. Update orders table
            $upStmt = $db->prepare("
                UPDATE orders SET
                    customer_id = :cust_id,
                    total = :total,
                    products_cost = :products_cost,
                    profit = :profit,
                    status = :status,
                    agreement_status = :agreement_status,
                    has_refusal = 0,
                    refusal_reason = NULL,
                    agreement_version = agreement_version + 1,
                    amount_paid = :amount_paid,
                    due_date = :due_date,
                    customer_note = :customer_note,
                    items_summary = :items_summary
                WHERE id = :id
            ");
            $upStmt->execute([
                'cust_id' => $customerId,
                'total' => $total,
                'products_cost' => $productsCost,
                'profit' => $profit,
                'status' => $targetStatus,
                'agreement_status' => $initialAgreementStatus,
                'amount_paid' => $amountPaid,
                'due_date' => $dueDate,
                'customer_note' => $customerNote,
                'items_summary' => $itemsSummary,
                'id' => $id
            ]);

            // 11.1 Reconcile physical cash vault movement for remake payments/refunds
            $oldPaid = (string)($order['amount_paid'] ?? '0');
            $cashDelta = Decimal::sub($amountPaid, $oldPaid);
            if (Decimal::comp($cashDelta, '0') > 0) {
                // Additional cash collected at counter during remake
                $custodyUid = (int)($orderOwnerId ?: $currentUserId);
                $remakeNote = "Payment on order remake — " . ($order['uid'] ?? "Order #$id");
                if ($custodyUid !== $currentUserId) {
                    $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                    $uStmt->execute(['id' => (int)$currentUserId]);
                    $cashierName = $uStmt->fetchColumn() ?: "Cashier #{$currentUserId}";
                    $remakeNote .= " (Collected at counter by {$cashierName})";
                }
                CashVaultController::logFlow(
                    $db,
                    'customer_payment',
                    'in',
                    $cashDelta,
                    'orders',
                    (int)$id,
                    $remakeNote,
                    $custodyUid
                );
            } elseif (Decimal::comp($cashDelta, '0') < 0) {
                // Excess cash refunded to customer due to decreased order total on remake
                $refundDelta = Decimal::sub($oldPaid, $amountPaid);
                $custodyUid = (int)($orderOwnerId ?: $currentUserId);
                CashVaultController::logFlow(
                    $db,
                    'customer_payment',
                    'out',
                    $refundDelta,
                    'orders',
                    (int)$id,
                    "Refund on order remake — " . ($order['uid'] ?? "Order #$id"),
                    $custodyUid,
                    true // Allow overdraft for customer refund
                );
            }

            // 12. Log in order_history with full before/after snapshot
            self::recordOrderHistory(
                $db,
                (int)$id,
                $currentUserId,
                'remake_updated',
                [
                    'old_total' => $order['total'],
                    'new_total' => $total,
                    'old_items' => $oldItems,
                    'new_items' => $items,
                    'items_count' => count($items),
                    'agreement_status' => $initialAgreementStatus
                ],
                'Order updated via POS Cart remake'
            );

            $db->commit();
            EntityVersion::bump($db, 'orders', 'partner_settlements', 'products', 'cash_vault');

            // Fetch fresh updated order
            $freshStmt = $db->prepare("SELECT * FROM orders WHERE id = :id");
            $freshStmt->execute(['id' => $id]);
            $updatedOrder = $freshStmt->fetch(PDO::FETCH_ASSOC);

            Response::json([
                'ok' => true,
                'message' => 'Order updated successfully.',
                'order' => $updatedOrder
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) $db->rollBack();
            error_log("Failed to prepare remake order in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to prepare order for remake. Please check server error logs.'], 500);
        }
    }

    /**
     * Cancel an active return request for an order in 'return_pending' state.
     * Reverts order back to 'completed', cancels the pending clawback settlement tickets,
     * resets any pending item return consent, logs to order_history, and notifies the stock owner.
     * 
     * Route: POST /api/orders/{id}/cancel-return
     */
    public function cancelReturn(string $id): void
    {
        $db = Database::getConnection();
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT * FROM orders WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => (int)$id]);
        $order = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$order) {
            $db->rollBack();
            Response::json(['error' => 'Order not found'], 404);
            return;
        }

        if ($order['status'] !== 'return_pending') {
            $db->rollBack();
            Response::json(['error' => 'Only orders in return_pending status can have their return cancelled.'], 400);
            return;
        }

        $sessionUser = (int)($_SESSION['user_id'] ?? 0);
        $isAdmin = !empty($_SESSION['is_admin']) || (isset($_SESSION['role']) && $_SESSION['role'] === 'admin');
        $orderOwner = (int)($order['owner_user_id'] ?? $order['created_by'] ?? 0);
        $returnedBy = (int)($order['returned_by'] ?? 0);
        $isInitiator = ($sessionUser > 0 && $sessionUser === $returnedBy);

        // Check if sessionUser is an affected stock owner with a clawback on this order
        $isClawbackStockOwner = false;
        if ($sessionUser > 0) {
            $clawCheck = $db->prepare('SELECT id FROM partner_settlements WHERE related_entity_type = "orders" AND related_entity_id = :oid AND settlement_type = "order_return_clawback" AND payer_user_id = :uid AND status IN ("pending", "settled")');
            $clawCheck->execute(['oid' => (int)$id, 'uid' => $sessionUser]);
            if ($clawCheck->fetch()) {
                $isClawbackStockOwner = true;
            }
        }

        if ($sessionUser === 0 || (!$isAdmin && $sessionUser !== $orderOwner && !$isClawbackStockOwner && !$isInitiator)) {
            $db->rollBack();
            Response::json(['error' => 'Forbidden: Only the seller, the return initiator, an affected stock owner, or an administrator can cancel a return request.'], 403);
            return;
        }

        $orderUid = $order['uid'] ?? "ORD-$id";

        $cancellerName = 'User';
        if (!empty($_SESSION['username'])) {
            $cancellerName = $_SESSION['username'];
        } else {
            $uStmt = $db->prepare('SELECT username FROM users WHERE id = :uid');
            $uStmt->execute(['uid' => $sessionUser]);
            $cancellerName = $uStmt->fetchColumn() ?: 'User';
        }

        // 1. Revert order status back to target status (pending_money if unpaid debt, else completed)
        $targetStatus = self::getPreReturnStatus($db, (int)$id, $order);
        if ($targetStatus === 'pending_money') {
            $db->prepare('UPDATE orders SET status = "pending_money", return_reason = NULL, return_strategy = NULL, returned_by = NULL, returned_at = NULL, refusal_card_dismissed = 0, money_pending_at = COALESCE(money_pending_at, NOW()) WHERE id = :id')
               ->execute(['id' => (int)$id]);
        } else {
            $db->prepare('UPDATE orders SET status = "completed", return_reason = NULL, return_strategy = NULL, returned_by = NULL, returned_at = NULL, refusal_card_dismissed = 0 WHERE id = :id')
               ->execute(['id' => (int)$id]);
        }

        // 2. Cancel all pending or settled clawback tickets for this order and reverse cash if settled
        $clawStmt = $db->prepare('SELECT id, payer_user_id, payee_user_id, amount, status FROM partner_settlements 
                                  WHERE related_entity_type = "orders" AND related_entity_id = :oid 
                                    AND settlement_type = "order_return_clawback" AND status IN ("pending", "settled")');
        $clawStmt->execute(['oid' => (int)$id]);
        $activeClaws = $clawStmt->fetchAll(PDO::FETCH_ASSOC);

        $cancelClawStmt = $db->prepare('UPDATE partner_settlements 
                                        SET status = "cancelled", acceptance_status = "revoked", 
                                            cancelled_at = NOW(), cancelled_by = :uid, 
                                            cancel_reason = "Return request cancelled by related user" 
                                        WHERE id = :cid');

        foreach ($activeClaws as $claw) {
            // If this clawback was already settled (e.g. initiator auto-accepted), reverse the cash transfer!
            if ($claw['status'] === 'settled') {
                $cAmount = (string)($claw['amount'] ?? '0');
                if (Decimal::comp($cAmount, '0') > 0) {
                    (new CashVaultController())->ensureTwoSafes($db);
                    CashVaultController::logFlow(
                        $db,
                        'partner_settlement',
                        'out',
                        $cAmount,
                        'partner_settlements',
                        (int)$claw['id'],
                        "Reversal of Return Clawback Payout due to cancellation",
                        (int)$orderOwner,
                        true
                    );
                    CashVaultController::logFlow(
                        $db,
                        'partner_settlement',
                        'in',
                        $cAmount,
                        'partner_settlements',
                        (int)$claw['id'],
                        "Refund of Return Clawback due to cancellation",
                        (int)$claw['payer_user_id']
                    );
                }
            }

            $cancelClawStmt->execute(['uid' => $sessionUser, 'cid' => $claw['id']]);

            // Notify each stakeholder that the return request has been cancelled (Fix F-FIN-03)
            if ((int)$claw['payer_user_id'] !== $sessionUser) {
                try {
                    $noticeBody = ($claw['status'] === 'settled')
                        ? "The return request for Order #{$orderUid} has been cancelled. Any settled clawback funds have been refunded to your safe."
                        : "The return request for Order #{$orderUid} has been cancelled. No funds will be debited.";
                    $db->prepare('INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) 
                                  VALUES (:uid, "settlement", :title, :body, :aurl, "orders", :eid, :stag, 0, NOW())')
                       ->execute([
                           'uid'   => (int)$claw['payer_user_id'],
                           'title' => "Return Cancelled: #{$orderUid}",
                           'body'  => $noticeBody,
                           'aurl'  => "#order-details:{$id}",
                           'eid'   => (int)$id,
                           'stag'  => "order_clawback_cancelled_{$id}_{$claw['id']}",
                       ]);
                } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
            }
        }

        // Also notify seller if the canceller was not the seller
        if ($sessionUser !== $orderOwner) {
            try {
                $db->prepare('INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) 
                              VALUES (:uid, "settlement", :title, :body, :aurl, "orders", :eid, :stag, 0, NOW())')
                   ->execute([
                       'uid'   => $orderOwner,
                       'title' => "Return Cancelled: #{$orderUid}",
                       'body'  => "The return request for Order #{$orderUid} was cancelled by @{$cancellerName}.",
                       'aurl'  => "#order-details:{$id}",
                       'eid'   => (int)$id,
                       'stag'  => "order_clawback_cancelled_seller_{$id}",
                   ]);
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        }

        // 3. Reset any pending item consent
        $db->prepare('UPDATE order_items SET return_acceptance_status = NULL, return_destination = NULL 
                      WHERE order_id = :oid AND return_acceptance_status = "pending"')
           ->execute(['oid' => (int)$id]);

        // Mark pending return request notifications as read
        try {
            $db->prepare('UPDATE notifications SET is_read = 1 WHERE entity_type = "orders" AND entity_id = :oid AND stage_tag LIKE :stag')
               ->execute(['oid' => (int)$id, 'stag' => "order_clawback_requested_{$id}%"]);
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // 4. Log in order_history
        self::recordOrderHistory(
            $db,
            (int)$id,
            $sessionUser,
            'return_cancelled',
            [
                'status' => ['from' => 'return_pending', 'to' => $targetStatus],
                'cancelled_clawbacks_count' => count($activeClaws)
            ],
            'Return request cancelled by related user'
        );

        // 5. SystemLog & EntityVersion
        SystemLog::write('orders', 'return_cancelled', (int)$id, $order['service_name'] ?? "Order #$id", json_encode([
            'uid' => $orderUid,
            'cancelled_by' => $sessionUser,
            'previous_status' => 'return_pending',
            'new_status' => $targetStatus
        ]));

        $db->commit();
        EntityVersion::bump($db, 'orders', 'partner_settlements');

        $statusLabel = ($targetStatus === 'pending_money') ? 'Pending Payment' : 'Completed';
        Response::json([
            'ok' => true,
            'message' => "Return request for Order #{$orderUid} has been successfully cancelled and order restored to {$statusLabel}.",
            'order_id' => (int)$id,
            'status' => $targetStatus
        ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("Failed to cancel return in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to cancel return. Please check server error logs.'], 500);
            return;
        }
    }

    /**
     * Determines the exact pre-return status of an order when a return request is cancelled or refused.
     * Prevents status corruption by inspecting the historical return transition and enforcing financial invariants.
     */
    public static function getPreReturnStatus(PDO $db, int $orderId, array $order = []): string
    {
        if (empty($order) || !isset($order['amount_paid']) || !isset($order['total'])) {
            $stmt = $db->prepare('SELECT id, status, total, amount_paid, money_pending_at FROM orders WHERE id = :id');
            $stmt->execute(['id' => $orderId]);
            $fetched = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($fetched) {
                $order = array_merge($order, $fetched);
            }
        }

        $recordedFromStatus = null;
        try {
            $histStmt = $db->prepare("
                SELECT changes FROM order_history 
                WHERE order_id = :oid AND action = 'return_pending_approval' 
                ORDER BY id DESC LIMIT 1
            ");
            $histStmt->execute(['oid' => $orderId]);
            $histRow = $histStmt->fetch(PDO::FETCH_ASSOC);
            if ($histRow && !empty($histRow['changes'])) {
                $ch = json_decode($histRow['changes'], true);
                if (is_array($ch) && !empty($ch['status']['from'])) {
                    $recordedFromStatus = (string)$ch['status']['from'];
                }
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        $total = (string)($order['total'] ?? '0');
        $amountPaid = (string)($order['amount_paid'] ?? '0');
        $isUnpaid = (Decimal::comp($amountPaid, $total) < 0);

        // Financial Invariant: If there is an unpaid balance, order status MUST be pending_money!
        if ($isUnpaid) {
            return 'pending_money';
        }

        // If recorded historical status was valid and order is fully paid, respect it
        if ($recordedFromStatus && in_array($recordedFromStatus, ['completed', 'pending_money', 'processing', 'active'], true)) {
            if ($recordedFromStatus === 'pending_money' && !$isUnpaid) {
                return 'completed';
            }
            return $recordedFromStatus;
        }

        // Default fallback for fully paid orders
        return 'completed';
    }

    /**
     * Dismiss or restore the red refusal banner on the order card.
     * Route: POST /api/orders/{id}/dismiss-refusal-card
     * Payload: { dismissed: true|false|1|0 }
     */
    public function dismissRefusalCard(string $id, array $data = []): void
    {
        $db = Database::getConnection();
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT id, uid, status, refusal_card_dismissed, owner_user_id, created_by, service_name FROM orders WHERE id = :id OR uid = :uid FOR UPDATE');
        $stmt->execute([
            'id' => is_numeric($id) ? (int)$id : 0,
            'uid' => $id
        ]);
        $order = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$order) {
            $db->rollBack();
            Response::json(['error' => 'Order not found'], 404);
            return;
        }

        $sessionUser = (int)($_SESSION['user_id'] ?? 0);
        if ($sessionUser === 0) {
            $db->rollBack();
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $realId = (int)$order['id'];
        $dismissed = (!isset($data['dismissed']) || !empty($data['dismissed'])) ? 1 : 0;
        $orderUid = $order['uid'] ?? "ORD-$realId";

        $updateStmt = $db->prepare('UPDATE orders SET refusal_card_dismissed = :dismissed WHERE id = :id');
        $updateStmt->execute([
            'dismissed' => $dismissed,
            'id' => $realId
        ]);

        $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, reason, created_at) VALUES (:oid, :uid, :act, :chg, :rsn, NOW())')
           ->execute([
               'oid' => $realId,
               'uid' => $sessionUser,
               'act' => $dismissed ? 'refusal_card_dismissed' : 'refusal_card_restored',
               'chg' => json_encode(['refusal_card_dismissed' => ['from' => (int)$order['refusal_card_dismissed'], 'to' => $dismissed]]),
               'rsn' => $dismissed ? 'Card refusal banner dismissed from order card view' : 'Card refusal banner restored to order card view'
           ]);

        SystemLog::write('orders', $dismissed ? 'refusal_card_dismissed' : 'refusal_card_restored', $realId, $order['service_name'] ?? "Order #$realId", json_encode([
            'uid' => $orderUid,
            'user_id' => $sessionUser,
            'refusal_card_dismissed' => $dismissed
        ]));

        $db->commit();
        EntityVersion::bump($db, 'orders');

        Response::json([
            'ok' => true,
            'order_id' => $realId,
            'dismissed' => (bool)$dismissed,
            'refusal_card_dismissed' => $dismissed,
            'message' => $dismissed ? "Order card refusal banner dismissed." : "Order card refusal banner restored."
        ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("Failed to dismiss refusal card in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to dismiss refusal card. Please check server error logs.'], 500);
            return;
        }
    }
}



/* [END_OF_MODULE_SECURITY_SEAL] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
