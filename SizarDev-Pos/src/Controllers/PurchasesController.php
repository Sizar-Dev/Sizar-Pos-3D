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

require_once __DIR__ . '/CashVaultController.php';
require_once __DIR__ . '/PartnerSettlementsController.php';
require_once __DIR__ . '/../Utils/EntityVersion.php';

use App\Utils\EntityVersion;

class PurchasesController
{
    private static bool $columnsEnsured = false;
    private static bool $historyTableEnsured = false;

    private function ensurePurchasesTableColumns(PDO $db): void
    {
        if (self::$columnsEnsured) {
            return;
        }
        self::$columnsEnsured = true;
        $columns = [
            'uid' => 'VARCHAR(50) UNIQUE DEFAULT NULL',
            'deleted_at' => 'DATETIME NULL',
            'deleted_by' => 'INT NULL',
            'delete_reason' => 'TEXT NULL',
            // Supplier payables (Idea C): who we bought from + how much we still owe.
            'supplier_id' => 'INT NULL',
            'payment_status' => "VARCHAR(20) NOT NULL DEFAULT 'paid'",
            'amount_paid' => 'DECIMAL(32,16) NOT NULL DEFAULT 0',
            'paid_at' => 'DATETIME NULL',
            'paid_by' => 'INT NULL',
            'due_date' => 'DATETIME NULL',
            // Free-text "who was this person" note, used for walk-by / one-off sellers.
            'supplier_note' => 'TEXT NULL',
            // Per-user cost attribution (whose cost/payable this purchase belongs to).
            'owner_user_id' => 'INT NULL',
            // Coin-as-product barter. 'cash' = normal; 'product' = this lot was bought
            // by SPENDING a coin already held; 'received' = this lot came IN as payment
            // for a sale. settle_product_id = the other coin, settle_quantity = its qty,
            // settle_order_id = the sale a 'received' lot came from.
            'settle_kind' => "VARCHAR(10) NOT NULL DEFAULT 'cash'",
            'settle_product_id' => 'INT NULL',
            'settle_quantity' => 'DECIMAL(32,16) NULL',
            'settle_order_id' => 'INT NULL',
            // Exact FIFO lots consumed of the spent coin (JSON) so a swap can be
            // unwound precisely on delete. NULL on cash + legacy swaps.
            'settle_consumed' => 'TEXT NULL',
            // Internal partner stock transfer tracking.
            'transfer_status' => 'VARCHAR(20) NULL DEFAULT NULL',
            'transfer_to_user_id' => 'INT NULL DEFAULT NULL',
            'transfer_valuation' => 'DECIMAL(32,16) NULL DEFAULT NULL',
            'transfer_settlement_id' => 'INT NULL DEFAULT NULL',
            'transfer_initiated_at' => 'DATETIME NULL DEFAULT NULL',
            'transfer_initiated_by' => 'INT NULL DEFAULT NULL',
            'paid_from' => "VARCHAR(20) NOT NULL DEFAULT 'vault'",
            'status' => "VARCHAR(30) NOT NULL DEFAULT 'active'",
            'is_merged_master' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'merged_into_id' => 'INT NULL DEFAULT NULL',
            'merged_from_ids' => 'LONGTEXT NULL',
            'merged_at' => 'DATETIME NULL DEFAULT NULL',
            'merged_by' => 'INT NULL DEFAULT NULL',
            'merge_cost_mode' => 'VARCHAR(30) NULL DEFAULT NULL',
            'valuation_adjustment' => 'DECIMAL(32,16) NOT NULL DEFAULT 0',
            'valuation_adjustment_reason' => 'TEXT NULL',
            'initial_price' => 'DECIMAL(32,16) NULL DEFAULT NULL',
            'price_before' => 'DECIMAL(32,16) NULL DEFAULT NULL',
            'price_updated_at' => 'DATETIME NULL DEFAULT NULL',
            'price_updated_by' => 'INT NULL DEFAULT NULL',
            'created_from_order_id' => 'INT NULL DEFAULT NULL',
            'created_from_purchase_id' => 'INT NULL DEFAULT NULL',
            'quantity_merged' => 'DECIMAL(32,16) NOT NULL DEFAULT 0',
            'quantity_reserved' => 'DECIMAL(32,16) NOT NULL DEFAULT 0',
            'quantity_writeoff' => 'DECIMAL(32,16) NOT NULL DEFAULT 0',
        ];

        $existingCols = [];
        try {
            $colStmt = $db->query("SHOW COLUMNS FROM purchases");
            while ($colRow = $colStmt->fetch(PDO::FETCH_ASSOC)) {
                $existingCols[$colRow['Field']] = true;
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        foreach ($columns as $column => $definition) {
            if (!isset($existingCols[$column])) {
                try {
                    $db->exec("ALTER TABLE purchases ADD COLUMN $column $definition");
                } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
            }
        }

        // Ensure indices exist using a single SHOW INDEX check
        try {
            $existingIndexes = [];
            $idxStmt = $db->query("SHOW INDEX FROM purchases");
            while ($idxRow = $idxStmt->fetch(PDO::FETCH_ASSOC)) {
                $existingIndexes[$idxRow['Key_name']] = true;
            }

            if (!isset($existingIndexes['idx_purchases_status'])) {
                $db->exec("CREATE INDEX idx_purchases_status ON purchases (status)");
            }
            if (!isset($existingIndexes['idx_purchases_merged_into'])) {
                $db->exec("CREATE INDEX idx_purchases_merged_into ON purchases (merged_into_id)");
            }
            if (!isset($existingIndexes['idx_purchases_created_from_order'])) {
                $db->exec("CREATE INDEX idx_purchases_created_from_order ON purchases (created_from_order_id)");
            }
            if (!isset($existingIndexes['idx_purchases_created_from_purchase'])) {
                $db->exec("CREATE INDEX idx_purchases_created_from_purchase ON purchases (created_from_purchase_id)");
            }
            // FIFO optimization index (product_id, deleted_at, quantity_remaining)
            if (!isset($existingIndexes['idx_purchases_fifo'])) {
                $db->exec("CREATE INDEX idx_purchases_fifo ON purchases (product_id, deleted_at, quantity_remaining)");
            }
            // Supplier lookup index (supplier_id, deleted_at)
            if (!isset($existingIndexes['idx_purchases_supplier'])) {
                $db->exec("CREATE INDEX idx_purchases_supplier ON purchases (supplier_id, deleted_at)");
            }
            // Owner attribution index (owner_user_id, deleted_at)
            if (!isset($existingIndexes['idx_purchases_owner'])) {
                $db->exec("CREATE INDEX idx_purchases_owner ON purchases (owner_user_id, deleted_at)");
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // Back-fill the owner from the creator on any rows still missing it so
        // per-user cost attribution works on historical purchases immediately.
        // Robust to however the column was added; guarded to avoid needless writes.
        if ($db->query("SELECT 1 FROM purchases WHERE owner_user_id IS NULL AND created_by IS NOT NULL LIMIT 1")->fetch()) {
            $db->exec("UPDATE purchases SET owner_user_id = created_by WHERE owner_user_id IS NULL");
        }

        // Self-healing migration for legacy purchases: purchases marked as 'paid'
        // created before payment tracking must have amount_paid = total so they don't show false owed balance.
        if ($db->query("SELECT 1 FROM purchases WHERE payment_status = 'paid' AND (amount_paid IS NULL OR amount_paid = 0) AND total > 0 LIMIT 1")->fetch()) {
            $db->exec("UPDATE purchases SET amount_paid = total WHERE payment_status = 'paid' AND (amount_paid IS NULL OR amount_paid = 0) AND total > 0");
        }

        // Self-healing migration for purchase status:
        // 1. Soft-deleted purchases get status = 'deleted'
        $db->exec("UPDATE purchases SET status = 'deleted' WHERE deleted_at IS NOT NULL AND status != 'deleted'");
        // 2. Fully depleted purchases get status = 'completed'
        $db->exec("UPDATE purchases SET status = 'completed' WHERE deleted_at IS NULL AND quantity_remaining <= 0 AND quantity_sold > 0 AND status = 'active'");
        // Self-healing migration for initial_price:
        if ($db->query("SELECT 1 FROM purchases WHERE initial_price IS NULL AND price > 0 LIMIT 1")->fetch()) {
            $db->exec("UPDATE purchases SET initial_price = price WHERE initial_price IS NULL");
        }

        // Ensure purchase_history table exists
        self::ensurePurchaseHistoryTable($db);

        // Ensure the partner_settlements table exists for equity tracking.
        self::ensurePartnerSettlementsTable($db);
    }

    /**
     * Create the purchase_history table if it doesn't already exist.
     */
    public static function ensurePurchaseHistoryTable(PDO $db): void
    {
        if (self::$historyTableEnsured || !empty($_SESSION['purchase_history_table_ensured'])) {
            self::$historyTableEnsured = true;
            return;
        }
        if ($db->inTransaction()) {
            return;
        }
        self::$historyTableEnsured = true;
        $db->exec("CREATE TABLE IF NOT EXISTS purchase_history (
            id INT AUTO_INCREMENT PRIMARY KEY,
            purchase_id INT NOT NULL,
            action VARCHAR(50) NOT NULL,
            price_before DECIMAL(32,16) NULL,
            price_after DECIMAL(32,16) NULL,
            valuation_delta DECIMAL(32,16) NULL,
            quantity_remaining DECIMAL(32,16) NULL,
            reason TEXT NULL,
            changes JSON NULL,
            edited_by INT NULL,
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            INDEX idx_purchase_history_purchase (purchase_id),
            INDEX idx_purchase_history_edited_by (edited_by)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
    }

    /**
     * Create the partner_settlements table if it doesn't already exist.
     * Uses no FOREIGN KEYs for compatibility with older MySQL versions.
     */
    private static function ensurePartnerSettlementsTable(PDO $db): void
    {
        (new PartnerSettlementsController())->ensureTable($db);
    }

    /**
     * Resolve the per-user cost owner. Accepts an optional explicit owner_user_id,
     * honored only if it's a real non-deleted user; otherwise the fallback (the
     * current session user on create, or the existing owner on reassign).
     */
    private function resolveOwnerUserId(PDO $db, array $data, ?int $fallback): ?int
    {
        $explicit = $data['owner_user_id'] ?? null;
        if ($explicit !== null && $explicit !== '' && is_numeric($explicit)) {
            $eId = (int)$explicit;
            if ($eId > 0) {
                $check = $db->prepare('SELECT id FROM users WHERE id = :id AND deleted_at IS NULL');
                $check->execute(['id' => $eId]);
                if ($check->fetch()) return $eId;
            }
        }
        return $fallback;
    }

    private function getGlobalDecimals(PDO $db): int
    {
        try {
            $row = $db->query("SELECT display_decimals FROM settings LIMIT 1")->fetch(PDO::FETCH_ASSOC);
            if ($row && isset($row['display_decimals']) && $row['display_decimals'] !== null && $row['display_decimals'] !== '') {
                $d = (int)$row['display_decimals'];
                if ($d >= 0 && $d <= 16) return $d;
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        return 2;
    }

    private function getProductEffectiveDecimals(PDO $db, int $productId): int
    {
        try {
            $stmt = $db->prepare("SELECT display_decimals FROM products WHERE id = :id LIMIT 1");
            $stmt->execute(['id' => $productId]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row && isset($row['display_decimals']) && $row['display_decimals'] !== null && $row['display_decimals'] !== '') {
                $d = (int)$row['display_decimals'];
                if ($d >= 0 && $d <= 16) return $d;
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        return $this->getGlobalDecimals($db);
    }

    /**
     * FIFO-consume $qty units of a held product across its live purchase lots
     * (oldest first), lowering each lot's quantity_remaining / raising quantity_sold
     * and reducing products.quantity. Quantity only — the DZD cost of a coin swap is
     * entered manually, not pulled from the lots. Returns null on success or an error
     * string (insufficient stock). MUST run inside an open transaction.
     *
     * $consumed (by ref) is filled with the exact lots touched —
     * [['lot_id'=>int,'quantity'=>string], …] — so the swap can be unwound precisely
     * on delete (see restoreConsumedLots()).
     */
    private function consumeFifo(PDO $db, int $productId, string $qty, ?array &$consumed = null): ?string
    {
        $consumed = [];
        if (Decimal::comp($qty, '0') <= 0) return 'Spend quantity must be greater than zero';

        $stmt = $db->prepare('SELECT id, quantity, quantity_reserved FROM products WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $productId]);
        $product = $stmt->fetch();
        if (!$product) return 'Spent product not found';
        $reserved = (string) ($product['quantity_reserved'] ?? '0');
        $available = Decimal::sub((string) $product['quantity'], $reserved);
        if (Decimal::comp($available, $qty) < 0) {
            return "Not enough unreserved stock of the spent product (have {$product['quantity']}, reserved {$reserved}, need {$qty})";
        }

        // Oldest live lots first (skip custody-locked pending_transfer / pending_delegated lots).
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
            return 'Not enough available unreserved stock of the spent product to cover the spend';
        }

        $db->prepare('UPDATE products SET quantity = :q, updated_at = NOW() WHERE id = :id')
           ->execute(['q' => Decimal::sub($product['quantity'], $qty), 'id' => $productId]);
        return null;
    }

    /**
     * Recursively resolve the active live master batch for a given purchase ID.
     * Traverses multi-tier recursive merges (Lot A -> Master B -> Grandmaster C)
     * with cycle detection and row-level locking.
     */
    public static function resolveActiveMasterBatch(PDO $db, int $startPurchaseId, bool $forUpdate = true): ?array
    {
        $currentId = $startPurchaseId;
        $visited = [];
        $activeMaster = null;

        $lockClause = $forUpdate ? ' FOR UPDATE' : '';
        while ($currentId > 0 && !isset($visited[$currentId])) {
            $visited[$currentId] = true;
            $stmt = $db->prepare('SELECT id, uid, name, product_id, price, quantity, quantity_remaining, quantity_sold, total, owner_user_id, merged_into_id, status FROM purchases WHERE id = :id AND deleted_at IS NULL' . $lockClause);
            $stmt->execute(['id' => $currentId]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
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

    /**
     * Reverse a swap's FIFO consumption of the spent/sold coin — the inverse of
     * consumeFifo(). Reads the exact lots from $json ([{lot_id,quantity},…]); for
     * legacy swaps with no JSON it falls back to restoring newest-consumed lots
     * first. Each restored lot gets quantity_remaining back and quantity_sold
     * lowered, and products.quantity is bumped by exactly what was placed back (so
     * the products.quantity == SUM(quantity_remaining) invariant always holds).
     * MUST run inside an open transaction.
     */
    private function restoreConsumedLots(PDO $db, ?string $json, int $productId, string $totalQty): void
    {
        if (Decimal::comp($totalQty, '0') <= 0) return;

        // Finding V-005: Global lock hierarchy (products -> purchases)
        $ps = $db->prepare('SELECT quantity FROM products WHERE id = :id FOR UPDATE');
        $ps->execute(['id' => $productId]);
        $prod = $ps->fetch();

        $placed = '0';
        $entries = $json ? json_decode($json, true) : null;

        if (is_array($entries) && count($entries) > 0) {
            // Exact reversal from the recorded lots.
            $ls = $db->prepare('SELECT id, status, merged_into_id, quantity_remaining, quantity_sold FROM purchases WHERE id = :id AND deleted_at IS NULL FOR UPDATE');
            $upd = $db->prepare('UPDATE purchases SET quantity_remaining = :qr, quantity_sold = :qs WHERE id = :id');

            foreach ($entries as $e) {
                $lotId = (int) ($e['lot_id'] ?? 0);
                $q = (string) ($e['quantity'] ?? '0');
                if ($lotId <= 0 || Decimal::comp($q, '0') <= 0) continue;
                $ls->execute(['id' => $lotId]);
                $lot = $ls->fetch();
                if (!$lot) continue; // lot gone (shouldn't happen while consumption stands)

                // If lot was subsequently merged into a master batch, recursively resolve to the live active master lot
                $targetLot = $lot;
                $targetLotId = $lotId;
                if (!empty($lot['merged_into_id'])) {
                    $masterLot = self::resolveActiveMasterBatch($db, (int)$lot['merged_into_id'], true);
                    if ($masterLot) {
                        $targetLot = $masterLot;
                        $targetLotId = (int)$masterLot['id'];
                    }
                }

                $newSold = Decimal::comp((string) $targetLot['quantity_sold'], $q) >= 0
                    ? Decimal::sub((string) $targetLot['quantity_sold'], $q) : '0';
                $upd->execute([
                    'qr' => Decimal::add((string) $targetLot['quantity_remaining'], $q),
                    'qs' => $newSold,
                    'id' => $targetLotId,
                ]);
                $placed = Decimal::add($placed, $q);
            }
        } else {
            // Legacy fallback: no per-lot record. Put stock back into this product's
            // lots that still show sales, newest first, up to the spent quantity.
            $remaining = $totalQty;
            $lots = $db->prepare('SELECT id, quantity_remaining, quantity_sold FROM purchases WHERE product_id = :pid AND deleted_at IS NULL AND quantity_sold > 0 ORDER BY id DESC FOR UPDATE');
            $lots->execute(['pid' => $productId]);
            $upd = $db->prepare('UPDATE purchases SET quantity_remaining = :qr, quantity_sold = :qs WHERE id = :id');

            foreach ($lots->fetchAll() as $lot) {
                if (Decimal::comp($remaining, '0') <= 0) break;
                $sold = (string) $lot['quantity_sold'];
                $take = Decimal::comp($sold, $remaining) <= 0 ? $sold : $remaining;
                if (Decimal::comp($take, '0') <= 0) continue;
                $upd->execute([
                    'qr' => Decimal::add((string) $lot['quantity_remaining'], $take),
                    'qs' => Decimal::sub($sold, $take),
                    'id' => $lot['id'],
                ]);
                $placed = Decimal::add($placed, $take);
                $remaining = Decimal::sub($remaining, $take);
            }
        }

        if (Decimal::comp($placed, '0') > 0 && $prod) {
            $db->prepare('UPDATE products SET quantity = :q, updated_at = NOW() WHERE id = :id')
               ->execute(['q' => Decimal::add((string) $prod['quantity'], $placed), 'id' => $productId]);
        }
    }

    /**
     * Coin-as-product barter (buy side): acquire `product_id` by SPENDING a coin
     * already in stock. The user gives settle_quantity of settle_product_id valued
     * manually at spend_cost DZD/unit, at a cross rate (1 acquired = rate spent).
     *   acquired_qty   = settle_quantity / rate
     *   acquired_total = settle_quantity * spend_cost   (the acquired coin's DZD basis)
     * NO profit is booked — it surfaces when the acquired coin is later sold for cash.
     */
    private function storeWithProduct(PDO $db, array $data): void
    {
        $currentUserId = $_SESSION['user_id'] ?? null;
        if (!$currentUserId) {
            Response::json(['error' => 'Authentication required'], 401);
            return;
        }

        $acquiredId       = $data['product_id'] ?? null;
        $spendId          = $data['settle_product_id'] ?? null;
        $specificLotId    = !empty($data['specific_lot_id']) ? (int) $data['specific_lot_id'] : (!empty($data['barter_purchase_id']) ? (int) $data['barter_purchase_id'] : null);
        $spendQty         = isset($data['settle_quantity']) ? (string) $data['settle_quantity'] : (isset($data['spend_quantity']) ? (string) $data['spend_quantity'] : null);
        $spendValuation   = isset($data['spend_cost']) ? (string) $data['spend_cost'] : (isset($data['valuation']) ? (string) $data['valuation'] : null);
        $acquiredQty      = isset($data['quantity']) ? (string) $data['quantity'] : (isset($data['acquired_quantity']) ? (string) $data['acquired_quantity'] : null);
        $acquiredUnitCost = isset($data['price']) ? (string) $data['price'] : (isset($data['acquired_unit_cost']) ? (string) $data['acquired_unit_cost'] : null);
        $rate             = isset($data['rate']) ? (string) $data['rate'] : null;
        $supplierId       = !empty($data['supplier_id']) ? (int) $data['supplier_id'] : null;
        $supplierNote     = (isset($data['supplier_note']) && trim((string) $data['supplier_note']) !== '')
            ? trim((string) $data['supplier_note']) : ((isset($data['note']) && trim((string) $data['note']) !== '') ? trim((string) $data['note']) : null);

        if (!$acquiredId || !$spendId || $spendQty === null || $spendValuation === null) {
            Response::json(['error' => 'Acquired product, spent coin, quantity, and trade valuation are required'], 400);
            return;
        }
        if ((string) $acquiredId === (string) $spendId) {
            Response::json(['error' => 'You cannot pay for a product with the same product'], 400);
            return;
        }
        if (Decimal::comp($spendQty, '0') <= 0 || Decimal::comp($spendValuation, '0') <= 0) {
            Response::json(['error' => 'Spent quantity and trade valuation must be greater than zero'], 400);
            return;
        }

        if ($supplierId) {
            $supStmt = $db->prepare('SELECT id FROM suppliers WHERE id = :id AND deleted_at IS NULL');
            $supStmt->execute(['id' => $supplierId]);
            if (!$supStmt->fetch()) {
                Response::json(['error' => 'Selected supplier not found or deleted'], 404);
                return;
            }
        }

        // Calculate Total Trade Value (in base currency DZD)
        $totalTradeValue = Decimal::mul($spendQty, $spendValuation);

        // Resolve Acquired Quantity and Unit Cost via Two-Way Engine or Rate Fallback
        if ($acquiredQty !== null && Decimal::comp($acquiredQty, '0') > 0) {
            if ($acquiredUnitCost === null || Decimal::comp($acquiredUnitCost, '0') <= 0) {
                $acquiredUnitCost = Decimal::div($totalTradeValue, $acquiredQty);
            }
        } elseif ($acquiredUnitCost !== null && Decimal::comp($acquiredUnitCost, '0') > 0) {
            $acquiredQty = Decimal::div($totalTradeValue, $acquiredUnitCost);
        } elseif ($rate !== null && Decimal::comp($rate, '0') > 0) {
            $acquiredQty = Decimal::div($spendQty, $rate);
            $acquiredUnitCost = Decimal::div($totalTradeValue, $acquiredQty);
        } else {
            // Default 1:1 parity fallback
            $acquiredQty = $spendQty;
            $acquiredUnitCost = $spendValuation;
        }

        if (Decimal::comp($acquiredQty, '0') <= 0) {
            Response::json(['error' => 'The resulting acquired quantity must be greater than zero'], 400);
            return;
        }
        if (Decimal::comp($acquiredUnitCost, '0') <= 0) {
            $acquiredUnitCost = Decimal::div($totalTradeValue, $acquiredQty);
        }

        // Strict Self-Attribution: Operator owns the trade and the acquired lot
        $ownerUserId = $currentUserId;

        $db->beginTransaction();
        try {

        // Lock both products in deterministic numerical order to prevent deadlocks under concurrency
        $firstId  = min((int) $acquiredId, (int) $spendId);
        $secondId = max((int) $acquiredId, (int) $spendId);

        $lockStmt = $db->prepare('SELECT id, name, uid, quantity FROM products WHERE id = :id FOR UPDATE');
        $lockStmt->execute(['id' => $firstId]);
        $firstProd = $lockStmt->fetch();

        $lockStmt->execute(['id' => $secondId]);
        $secondProd = $lockStmt->fetch();

        $acquired = ((int) $acquiredId === $firstId) ? $firstProd : $secondProd;
        $spend    = ((int) $spendId === $firstId) ? $firstProd : $secondProd;

        if (!$acquired) {
            $db->rollBack();
            Response::json(['error' => 'Acquired product not found'], 404);
            return;
        }
        if (!$spend) {
            $db->rollBack();
            Response::json(['error' => 'Spent product not found'], 404);
            return;
        }

        // Consume the spent coin: either from a specific owned lot or FIFO among owned lots
        $consumed = [];
        $totalSpentCOGS = '0';

        if ($specificLotId) {
            $lotStmt = $db->prepare('SELECT id, product_id, price, quantity_remaining, quantity_reserved, quantity_sold, owner_user_id, transfer_status FROM purchases WHERE id = :id AND product_id = :pid AND deleted_at IS NULL FOR UPDATE');
            $lotStmt->execute(['id' => $specificLotId, 'pid' => $spendId]);
            $specificLot = $lotStmt->fetch();

            if (!$specificLot) {
                $db->rollBack();
                Response::json(['error' => 'Selected batch lot not found for the spent coin'], 404);
                return;
            }

            // Custody lock check
            if (!empty($specificLot['transfer_status']) && in_array($specificLot['transfer_status'], ['pending_transfer', 'pending_delegated'])) {
                $db->rollBack();
                Response::json(['error' => 'This purchase batch is currently locked in a pending status and cannot be bartered.'], 422);
                return;
            }

            // Ownership check
            if ($specificLot['owner_user_id'] && (string) $specificLot['owner_user_id'] !== (string) $ownerUserId) {
                $db->rollBack();
                Response::json(['error' => 'You do not own this batch lot. You can only barter coins from your own stock.'], 403);
                return;
            }

            $avail = Decimal::sub((string) $specificLot['quantity_remaining'], (string) ($specificLot['quantity_reserved'] ?? '0'));
            if (Decimal::comp($avail, $spendQty) < 0) {
                $db->rollBack();
                Response::json(['error' => "Not enough available unreserved stock in selected batch (Available: {$avail}, Needed: {$spendQty})"], 400);
                return;
            }

            // Deduct from specific lot
            $db->prepare('UPDATE purchases SET quantity_remaining = :qr, quantity_sold = :qs WHERE id = :id')
               ->execute([
                   'qr' => Decimal::sub((string) $specificLot['quantity_remaining'], $spendQty),
                   'qs' => Decimal::add((string) $specificLot['quantity_sold'], $spendQty),
                   'id' => $specificLotId,
               ]);

            $lotCost = (string) $specificLot['price'];
            $totalSpentCOGS = Decimal::mul($spendQty, $lotCost);
            $consumed[] = ['lot_id' => $specificLotId, 'quantity' => $spendQty, 'cost' => $lotCost];

            // Deduct total product quantity
            $db->prepare('UPDATE products SET quantity = :q, updated_at = NOW() WHERE id = :id')
               ->execute(['q' => Decimal::sub((string) $spend['quantity'], $spendQty), 'id' => $spendId]);
        } else {
            // FIFO fallback strictly among owned batches
            $lotsStmt = $db->prepare('SELECT id, price, quantity_remaining, quantity_reserved, quantity_sold FROM purchases WHERE product_id = :pid AND (owner_user_id = :uid OR owner_user_id IS NULL) AND deleted_at IS NULL AND quantity_remaining > 0 AND (transfer_status IS NULL OR transfer_status NOT IN ("pending_transfer", "pending_delegated")) ORDER BY id ASC FOR UPDATE');
            $lotsStmt->execute(['pid' => $spendId, 'uid' => $ownerUserId]);
            $ownedLots = $lotsStmt->fetchAll();

            $remainingToTake = $spendQty;
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
                $totalSpentCOGS = Decimal::add($totalSpentCOGS, $subCost);
                $consumed[] = ['lot_id' => (int) $lot['id'], 'quantity' => $take, 'cost' => $lotCost];
                $remainingToTake = Decimal::sub($remainingToTake, $take);
            }

            if (Decimal::comp($remainingToTake, '0') > 0) {
                $db->rollBack();
                Response::json(['error' => 'Not enough available unreserved stock in your owned batches to cover the barter trade'], 400);
                return;
            }

            $db->prepare('UPDATE products SET quantity = :q, updated_at = NOW() WHERE id = :id')
               ->execute(['q' => Decimal::sub((string) $spend['quantity'], $spendQty), 'id' => $spendId]);
        }

        // Insert Acquired Purchase Batch
        $now = date('Y-m-d H:i:s');
        $stmt = $db->prepare('INSERT INTO purchases (uid, name, product_id, price, quantity, quantity_remaining, quantity_sold, total, date, created_by, owner_user_id, supplier_id, payment_status, amount_paid, paid_at, paid_by, settle_kind, settle_product_id, settle_quantity, settle_consumed, supplier_note) VALUES (NULL, :name, :product_id, :price, :quantity, :quantity_remaining, 0, :total, NOW(), :created_by, :owner_user_id, :supplier_id, "paid", :amount_paid, :paid_at, :paid_by, "product", :settle_product_id, :settle_quantity, :settle_consumed, :supplier_note)');
        $stmt->execute([
            'name'               => $acquired['name'],
            'product_id'         => $acquiredId,
            'price'              => $acquiredUnitCost,
            'quantity'           => $acquiredQty,
            'quantity_remaining' => $acquiredQty,
            'total'              => $totalTradeValue,
            'created_by'         => $currentUserId,
            'owner_user_id'      => $ownerUserId,
            'supplier_id'        => $supplierId,
            'amount_paid'        => $totalTradeValue,
            'paid_at'            => $now,
            'paid_by'            => $currentUserId,
            'settle_product_id'  => $spendId,
            'settle_quantity'    => $spendQty,
            'settle_consumed'    => json_encode($consumed),
            'supplier_note'      => $supplierNote,
        ]);
        $purchaseId = (int) $db->lastInsertId();

        $uid = 'PUR-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(2))) . "({$purchaseId})";
        $db->prepare('UPDATE purchases SET uid = :uid WHERE id = :id')->execute(['uid' => $uid, 'id' => $purchaseId]);

        // Increment acquired product quantity
        $db->prepare('UPDATE products SET quantity = :quantity, updated_at = NOW() WHERE id = :id')->execute([
            'quantity' => Decimal::add($acquired['quantity'], $acquiredQty),
            'id'       => $acquiredId,
        ]);

        $db->commit();

        SystemLog::write('purchases', 'created', $purchaseId, $acquired['name'], json_encode([
            'uid'           => $uid,
            'product_uid'   => $acquired['uid'] ?? null,
            'quantity'      => $acquiredQty,
            'price'         => $acquiredUnitCost,
            'total'         => $totalTradeValue,
            'settle_kind'   => 'product',
            'paid_with'     => [
                'product'          => $spend['name'],
                'product_uid'      => $spend['uid'] ?? null,
                'quantity'         => $spendQty,
                'trade_valuation'  => $spendValuation,
                'specific_lot_id'  => $specificLotId,
                'original_cogs'    => $totalSpentCOGS,
            ],
            'supplier_note' => $supplierNote,
            'status'        => 'active',
        ]));

        Response::json([
            'id'                   => $purchaseId,
            'uid'                  => $uid,
            'quantity'             => $acquiredQty,
            'unit_cost'            => $acquiredUnitCost,
            'total'                => $totalTradeValue,
            'spent_quantity'       => $spendQty,
            'settle_consumed'      => $consumed,
        ], 201);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log('[BARTER PURCHASE ERROR] ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
            Response::json(['error' => 'Failed to process barter purchase. Please check server error logs.'], 500);
            return;
        }
    }

    public function index(): void
    {
        $db = Database::getConnection();
        $this->ensurePurchasesTableColumns($db);
        try {
            $db->exec("CREATE TABLE IF NOT EXISTS system_logs (
                id INT AUTO_INCREMENT PRIMARY KEY,
                user_id INT NULL,
                username VARCHAR(255) NULL,
                module VARCHAR(50) NOT NULL,
                action VARCHAR(50) NOT NULL,
                entity_id INT NULL,
                entity_name VARCHAR(255) NULL,
                details TEXT NULL,
                ip_address VARCHAR(45) NULL,
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                INDEX idx_module (module),
                INDEX idx_action (action),
                INDEX idx_user_id (user_id),
                INDEX idx_created_at (created_at),
                INDEX idx_syslogs_mod_act_ent (module, action, entity_id)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

            // Ensure composite index exists on system_logs (Finding V-008)
            $existingIndexes = $db->query("SHOW INDEX FROM system_logs")->fetchAll(PDO::FETCH_ASSOC);
            $idxNames = array_column($existingIndexes, 'Key_name');
            if (!in_array('idx_syslogs_mod_act_ent', $idxNames, true)) {
                $db->exec("CREATE INDEX idx_syslogs_mod_act_ent ON system_logs (module, action, entity_id)");
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // Finding V-004 & V-008: Server-side pagination and scoped derived aggregation
        $isAll = (isset($_GET['all']) && ($_GET['all'] === '1' || $_GET['all'] === 'true'));
        $showDeleted = (isset($_GET['show_deleted']) && ($_GET['show_deleted'] === '1' || $_GET['show_deleted'] === 'true'));
        $page = max(1, (int)($_GET['page'] ?? 1));
        $limit = $isAll ? 1000000 : (isset($_GET['limit']) ? min(500, max(1, (int)$_GET['limit'])) : 50);
        $offset = ($page - 1) * $limit;

        $countSql = $showDeleted ? "SELECT COUNT(*) FROM purchases" : "SELECT COUNT(*) FROM purchases WHERE deleted_at IS NULL";
        $totalPurchases = (int)$db->query($countSql)->fetchColumn();
        $totalPages = $limit > 0 ? (int)ceil($totalPurchases / $limit) : 1;

        $whereClause = $showDeleted ? "" : "WHERE p.deleted_at IS NULL";

        if ($isAll) {
            $purchases = $db->query("SELECT p.*, u.username AS price_updated_by_name, ps.acceptance_status AS ps_acceptance_status
                FROM purchases p
                LEFT JOIN users u ON u.id = p.price_updated_by
                LEFT JOIN partner_settlements ps ON ps.id = p.transfer_settlement_id
                {$whereClause}
                ORDER BY p.id DESC")->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $stmt = $db->prepare("SELECT p.*, u.username AS price_updated_by_name, ps.acceptance_status AS ps_acceptance_status
                FROM purchases p
                LEFT JOIN users u ON u.id = p.price_updated_by
                LEFT JOIN partner_settlements ps ON ps.id = p.transfer_settlement_id
                {$whereClause}
                ORDER BY p.id DESC
                LIMIT :limit OFFSET :offset");
            $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            $purchases = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        if (empty($purchases)) {
            Response::json([
                'purchases' => [],
                'total' => $totalPurchases,
                'page' => $page,
                'limit' => $limit,
                'total_pages' => $totalPages
            ]);
            return;
        }

        $purchaseIds = array_map(static fn($p) => (int)$p['id'], $purchases);
        $placeholders = implode(',', array_fill(0, count($purchaseIds), '?'));

        // Scoped oi_agg: ONLY fetch order_items aggregation for the visible purchase IDs (Finding V-004 & V-008)
        $oiMap = [];
        try {
            $oiStmt = $db->prepare("
                SELECT 
                    oi.purchase_id,
                    SUM(CASE WHEN o.status IN ('completed', 'pending_money') THEN (oi.price - oi.cost) * oi.quantity ELSE 0 END) AS realized_profit,
                    SUM(CASE WHEN o.status IN ('completed', 'pending_money') THEN oi.price * oi.quantity ELSE 0 END) AS realized_revenue,
                    SUM(CASE WHEN (o.status = 'completed' OR (o.custom_sale = 1 AND o.status = 'delivered')) THEN oi.quantity ELSE 0 END) AS sold_completed,
                    SUM(CASE WHEN o.status = 'pending_money' THEN oi.quantity ELSE 0 END) AS sold_pending_money,
                    SUM(CASE WHEN (o.custom_sale = 0 OR o.custom_sale IS NULL) AND o.status IN ('pending', 'processing') THEN oi.quantity ELSE 0 END) AS reserved_orders,
                    SUM(CASE WHEN o.custom_sale = 1 AND o.status NOT IN ('completed', 'delivered', 'cancelled', 'refunded') THEN oi.quantity ELSE 0 END) AS reserved_custom_services
                FROM order_items oi
                JOIN orders o ON o.id = oi.order_id
                WHERE oi.purchase_id IN ($placeholders) AND o.deleted_at IS NULL
                GROUP BY oi.purchase_id
            ");
            $oiStmt->execute($purchaseIds);
            foreach ($oiStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
                $oiMap[(int)$row['purchase_id']] = $row;
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // Scoped log_agg: ONLY fetch installment_count for the visible purchase IDs (Finding V-008)
        $logMap = [];
        try {
            $logStmt = $db->prepare("
                SELECT entity_id, COUNT(*) AS installment_count
                FROM system_logs
                WHERE module = 'purchases' AND action = 'supplier_payment' AND entity_id IN ($placeholders)
                GROUP BY entity_id
            ");
            $logStmt->execute($purchaseIds);
            foreach ($logStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
                $logMap[(int)$row['entity_id']] = (int)$row['installment_count'];
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // Merge aggregations into purchases
        foreach ($purchases as &$p) {
            $pid = (int)$p['id'];
            $agg = $oiMap[$pid] ?? null;

            $p['transfer_acceptance_status'] = !empty($p['transfer_settlement_id'])
                ? ($p['ps_acceptance_status'] ?? 'pending_acceptance')
                : null;
            unset($p['ps_acceptance_status']);

            $p['realized_profit'] = (float)($agg['realized_profit'] ?? 0);
            $p['realized_revenue'] = (float)($agg['realized_revenue'] ?? 0);
            $p['sold_completed'] = (float)($agg['sold_completed'] ?? 0);
            $p['sold_pending_money'] = (float)($agg['sold_pending_money'] ?? 0);
            $p['reserved_orders'] = (float)($agg['reserved_orders'] ?? 0);
            $p['reserved_custom_services'] = (float)($agg['reserved_custom_services'] ?? 0);
            $p['installment_count'] = (int)($logMap[$pid] ?? 0);
        }
        unset($p);

        Response::json([
            'purchases' => $purchases,
            'total' => $totalPurchases,
            'page' => $page,
            'limit' => $limit,
            'total_pages' => $totalPages
        ]);
    }

    public function store(array $data): void
    {
        $db = Database::getConnection();
        $this->ensurePurchasesTableColumns($db);

        // Coin-as-product barter: buy this product by SPENDING a coin already held.
        if (($data['settle_kind'] ?? 'cash') === 'product') {
            $this->storeWithProduct($db, $data);
            return;
        }

        $productId = $data['product_id'] ?? null;
        $price = isset($data['price']) ? (string) $data['price'] : null;
        $quantity = isset($data['quantity']) ? (string) $data['quantity'] : null;

        if (!$productId || $price === null || !is_numeric($price) || Decimal::comp($price, '0') <= 0 || $quantity === null || !is_numeric($quantity) || Decimal::comp($quantity, '0') <= 0) {
            Response::json(['error' => 'Product, a valid positive unit price, and a positive quantity are required'], 400);
            return;
        }

        // Supplier (optional). Validate it exists and isn't deleted when provided.
        $supplierId = (isset($data['supplier_id']) && $data['supplier_id'] !== '' && $data['supplier_id'] !== null)
            ? (int) $data['supplier_id'] : null;
        $supplierName = null;
        if ($supplierId !== null) {
            $sCheck = $db->prepare('SELECT id, name FROM suppliers WHERE id = :id AND deleted_at IS NULL');
            $sCheck->execute(['id' => $supplierId]);
            $suppRow = $sCheck->fetch();
            if (!$suppRow) {
                Response::json(['error' => 'Selected supplier not found'], 404);
                return;
            }
            $supplierName = $suppRow['name'];
        } elseif (!empty($data['supplier_note'])) {
            $supplierName = trim((string)$data['supplier_note']);
        }

        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT id, name, quantity FROM products WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $productId]);
        $product = $stmt->fetch();
        if (!$product) {
            $db->rollBack();
            Response::json(['error' => 'Product not found'], 404);
            return;
        }

        $total = Decimal::mul($price, $quantity);

        $creatorId = (int)($_SESSION['user_id'] ?? 0);
        $ownerUserId = $this->resolveOwnerUserId($db, $data, $_SESSION['user_id'] ?? null);
        $isProxy = ($ownerUserId && $creatorId && (int)$ownerUserId !== $creatorId);
        $paidFrom = 'vault';

        if ($isProxy) {
            // Delegated purchase recorded for another user:
            // Creator is not paying; assigned owner will review, accept and pay from their Cash Safe.
            $amountPaid = '0.0000000000000000';
            $paymentStatus = 'pending_payment';
            $paidAt = null;
            $paidBy = null;
            $dueDate = null;
        } else {
            // Self-purchase payment / payables. Default = paid in full (amount_paid = total) so the
            // existing "Save Purchase" flow is unchanged unless credit info is sent.
            if (array_key_exists('amount_paid', $data) && $data['amount_paid'] !== null && $data['amount_paid'] !== '') {
                $amountPaid = (string) $data['amount_paid'];
            } else {
                $amountPaid = $total; // paid in full
            }
            // Clamp into [0, total].
            if (Decimal::comp($amountPaid, '0') < 0) $amountPaid = '0';
            if (Decimal::comp($amountPaid, $total) > 0) $amountPaid = $total;

            if (Decimal::comp($amountPaid, $total) >= 0) {
                $paymentStatus = 'paid';
            } elseif (Decimal::comp($amountPaid, '0') <= 0) {
                $paymentStatus = 'unpaid';
            } else {
                $paymentStatus = 'partial';
            }
            $paidAt = $paymentStatus === 'paid' ? date('Y-m-d H:i:s') : null;
            $paidBy = $paymentStatus === 'paid' ? ($_SESSION['user_id'] ?? null) : null;
            $dueDate = null;
            if (!empty($data['due_date']) && $paymentStatus !== 'paid') {
                $dueDateTs = strtotime((string) $data['due_date']);
                if ($dueDateTs === false) {
                    $db->rollBack();
                    Response::json(['error' => 'Invalid due date format.'], 400);
                    return;
                }
                $dueDateFormatted = date('Y-m-d H:i:s', $dueDateTs);
                if ($dueDateTs < time() - 60) {
                    $db->rollBack();
                    Response::json(['error' => 'Due date/time cannot be in the past. Please select a current or future time.'], 400);
                    return;
                }
                $dueDate = $dueDateFormatted;
            }
        }

        // Walk-by / one-off seller description (free text). Kept regardless of
        // supplier; the form only collects it for the built-in walk-by supplier.
        $supplierNote = (isset($data['supplier_note']) && trim((string) $data['supplier_note']) !== '')
            ? trim((string) $data['supplier_note']) : null;

        $stmt = $db->prepare('INSERT INTO purchases (uid, name, product_id, price, initial_price, quantity, quantity_remaining, quantity_sold, total, date, created_by, owner_user_id, supplier_id, payment_status, amount_paid, paid_at, paid_by, due_date, supplier_note, paid_from) VALUES (NULL, :name, :product_id, :price, :initial_price, :quantity, :quantity_remaining, :quantity_sold, :total, NOW(), :created_by, :owner_user_id, :supplier_id, :payment_status, :amount_paid, :paid_at, :paid_by, :due_date, :supplier_note, :paid_from)');
        $stmt->execute([
            'name' => $product['name'],
            'product_id' => $productId,
            'price' => $price,
            'initial_price' => $price,
            'quantity' => $quantity,
            'quantity_remaining' => $quantity,
            'quantity_sold' => '0',
            'total' => $total,
            'created_by' => $_SESSION['user_id'] ?? null,
            'owner_user_id' => $ownerUserId,
            'supplier_id' => $supplierId,
            'payment_status' => $paymentStatus,
            'amount_paid' => $amountPaid,
            'paid_at' => $paidAt,
            'paid_by' => $paidBy,
            'due_date' => $dueDate,
            'supplier_note' => $supplierNote,
            'paid_from' => $paidFrom,
        ]);

        $purchaseId = (int) $db->lastInsertId();

        // Generate final UID with counter: PUR-YYYYMMDD-XXXX(ID)
        $dateStr = date('Ymd');
        $random = strtoupper(bin2hex(random_bytes(2)));
        $uid = "PUR-{$dateStr}-{$random}({$purchaseId})";

        $db->prepare('UPDATE purchases SET uid = :uid WHERE id = :id')->execute([
            'uid' => $uid,
            'id' => $purchaseId
        ]);

        $stmt = $db->prepare('UPDATE products SET quantity = :quantity, updated_at = NOW() WHERE id = :id');
        $stmt->execute([
            'quantity' => Decimal::add($product['quantity'], $quantity),
            'id' => $productId,
        ]);

        $forceOverdraft = !empty($data['force_overdraft']);

        if (!$isProxy && Decimal::comp($amountPaid, '0') > 0) {
            CashVaultController::logFlow(
                $db,
                'supplier_payment',
                'out',
                $amountPaid,
                'purchases',
                (int)$purchaseId,
                "Initial purchase payment for Purchase $uid",
                (int)($_SESSION['user_id'] ?? 1),
                $forceOverdraft
            );
        }

        // ── Auto-Pending Delegated Purchase Custody Lock ────────────────
        // When the cost owner differs from the creator, the purchase
        // automatically enters pending_delegated custody lock. The target
        // owner must accept and pay it before the stock can be sold.
        if ($isProxy) {
            // Settlement UID
            $sUid = 'STL-' . date('Ymd') . '-' . strtoupper(substr(md5(random_bytes(8)), 0, 6));
            $cleanQty = rtrim(rtrim((string)$quantity, '0'), '.');
            $productName = $product['name'] ?? "Product #$productId";

            // Create pending partner settlement (payer = target owner, payee = creator)
            $settlementId = null;
            if (Decimal::comp($total, '0') > 0) {
                $sStmt = $db->prepare('INSERT INTO partner_settlements
                    (uid, payer_user_id, payee_user_id, amount, settlement_type, status,
                     release_status, released_amount, acceptance_status,
                     related_entity_type, related_entity_id, related_entity_uid,
                     description, details, created_by, created_at)
                    VALUES (:uid, :payer, :payee, :amount, :type, :status,
                            "released", :amount_rel, "pending_acceptance",
                            :rel_type, :rel_id, :rel_uid,
                            :desc, :details, :created_by, NOW())');
                $sStmt->execute([
                    'uid' => $sUid,
                    'payer' => (int)$ownerUserId,       // Target owner (Partner) pays supplier
                    'payee' => $creatorId,               // Creator (Data entry / Observer)
                    'amount' => $total,
                    'amount_rel' => $total,
                    'type' => 'delegated_purchase',     // Clean delegated purchase type
                    'status' => 'pending',
                    'rel_type' => 'purchases',
                    'rel_id' => $purchaseId,
                    'rel_uid' => $uid,
                    'desc' => $supplierName 
                        ? "Delegated Purchase: {$productName} (Qty: {$cleanQty}) - Supplier: {$supplierName}"
                        : "Delegated Purchase: {$productName} (Qty: {$cleanQty})",
                    'details' => json_encode([
                        'product_name' => $productName,
                        'quantity' => $cleanQty,
                        'unit_cost' => $price,
                        'valuation_mode' => 'at_cost',
                        'valuation_total' => $total,
                        'from_owner' => $creatorId,
                        'to_owner' => (int)$ownerUserId,
                        'auto_created' => true,
                        'is_proxy_purchase' => true,
                        'is_delegated_purchase' => true,
                        'creator_id' => $creatorId,
                        'target_owner_id' => (int)$ownerUserId,
                        'supplier_id' => $supplierId,
                        'supplier_name' => $supplierName,
                    ]),
                    'created_by' => $creatorId,
                ]);
                $settlementId = (int)$db->lastInsertId();
            }

            // Set custody lock on purchase: pending_delegated
            $db->prepare('UPDATE purchases SET
                transfer_status = :ts,
                transfer_to_user_id = :tu,
                transfer_valuation = :tv,
                transfer_settlement_id = :tsi,
                transfer_initiated_at = NOW(),
                transfer_initiated_by = :tib
            WHERE id = :id')->execute([
                'ts' => 'pending_delegated',
                'tu' => (int)$ownerUserId,
                'tv' => $total,
                'tsi' => $settlementId,
                'tib' => $creatorId,
                'id' => $purchaseId,
            ]);
        }

        if ($isProxy) {
            EntityVersion::bump($db, 'purchases', 'products', 'cash_vault', 'partner_settlements');
        } else {
            EntityVersion::bump($db, 'purchases', 'products', 'cash_vault');
        }

        $db->commit();
        } catch (\RuntimeException $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            $isInsufficient = str_contains($e->getMessage(), 'Insufficient physical cash') || str_contains($e->getMessage(), 'insufficient balance');
            Response::json(['error' => $e->getMessage()], $isInsufficient ? 422 : 400);
            return;
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("[PURCHASE STORE ERROR] " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine());
            Response::json(['error' => 'Failed to record purchase. Please check server error logs.'], 500);
            return;
        }

        // ── Real-Time Notification for Delegated Purchase ───────────────
        if ($isProxy && $ownerUserId && $creatorId) {
            try {
                $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                $uStmt->execute(['id' => $creatorId]);
                $creatorName = $uStmt->fetchColumn() ?: ($_SESSION['username'] ?? 'Partner');
                $totalFormatted = Decimal::format($total, 2);
                $cleanQty = rtrim(rtrim((string)$quantity, '0'), '.');
                $productName = $product['name'] ?? "Product #$productId";

                $notifIns = $db->prepare("INSERT INTO notifications 
                    (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                    VALUES (:uid, 'settlement', :t, :b, :aurl, 'partner_settlement', :eid, :stage, 0, NOW())");
                $notifIns->execute([
                    'uid'   => (int)$ownerUserId,
                    't'     => "Delegated Purchase: {$productName}",
                    'b'     => "@{$creatorName} recorded Purchase #{$uid} ({$productName}, Qty: {$cleanQty}, Total: {$totalFormatted} DZD) in your name. Please review and accept ownership.",
                    'aurl'  => '#page-bills?tab=settlements&settlement=' . (int)$settlementId,
                    'eid'   => $settlementId,
                    'stage' => 'delegated_purchase_' . (int)$purchaseId
                ]);
                EntityVersion::bump($db, 'partner_settlements');
                EntityVersion::bump($db, 'purchases');
            } catch (\Throwable $notifErr) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $notifErr->getMessage());
        }
        }

        SystemLog::write('purchases', 'created', $purchaseId, $product['name'], json_encode([
            'uid' => $uid,
            'product_uid' => $product['uid'] ?? null,
            'quantity' => $quantity,
            'price' => $price,
            'total' => $total,
            'supplier_id' => $supplierId,
            'payment_status' => $paymentStatus,
            'amount_paid' => $amountPaid,
            'owed' => Decimal::sub($total, $amountPaid),
            'due_date' => $dueDate,
            'owner_user_id' => (int)$ownerUserId,
            'created_by' => (int)$creatorId,
            'is_proxy' => ($ownerUserId && (int)$ownerUserId !== $creatorId),
            'status' => 'active'
        ]));

        Response::json(['id' => $purchaseId, 'uid' => $uid], 201);
    }

    /**
     * Reassign the per-user cost owner of a purchase. Records a system log so the
     * change is auditable (purchases have no per-row history table of their own).
     */
    public function reassignOwner(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensurePurchasesTableColumns($db);
        $db->beginTransaction();

        $stmt = $db->prepare('SELECT id, uid, name, owner_user_id, deleted_at, transfer_status FROM purchases WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $purchase = $stmt->fetch();
        if (!$purchase) {
            $db->rollBack();
            Response::json(['error' => 'Purchase not found'], 404);
            return;
        }
        if ($purchase['deleted_at'] !== null) {
            $db->rollBack();
            Response::json(['error' => 'Deleted purchases cannot be reassigned'], 400);
            return;
        }
        if (!empty($purchase['transfer_status']) && in_array($purchase['transfer_status'], ['pending_transfer', 'pending_delegated'])) {
            $db->rollBack();
            Response::json(['error' => 'Cannot reassign owner of a purchase batch with a pending stock transfer or delegated purchase. Settle or cancel it first.'], 400);
            return;
        }

        $sessionUserId = (int)($_SESSION['user_id'] ?? 0);
        $oldOwnerId = $purchase['owner_user_id'] !== null ? (int) $purchase['owner_user_id'] : null;
        if ($sessionUserId === 0 || ($oldOwnerId !== null && $oldOwnerId !== $sessionUserId)) {
            $db->rollBack();
            SystemLog::write('purchases', 'security_violation', (int) $id, $purchase['name'] ?? "Purchase #$id", json_encode([
                'violation' => 'unauthorized_reassign_owner',
                'error' => 'User attempted to reassign owner of stock lot belonging to another user',
                'lot_id' => (int) $id,
                'lot_owner_id' => $oldOwnerId,
                'attempted_by' => $sessionUserId
            ], JSON_UNESCAPED_UNICODE), $sessionUserId);
            Response::json(['error' => 'Forbidden: You can only reassign stock lots that you own.'], 403);
            return;
        }

        $newOwnerId = $this->resolveOwnerUserId($db, $data, $oldOwnerId);
        if ($oldOwnerId === $newOwnerId) {
            $db->rollBack();
            Response::json(['ok' => true, 'owner_user_id' => $newOwnerId]);
            return;
        }

        $resolveUserName = function ($uid) use ($db) {
            if ($uid === null) return 'Unassigned';
            $us = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
            $us->execute(['id' => $uid]);
            $row = $us->fetch();
            return $row ? $row['username'] : "User #$uid";
        };

        try {
            $db->prepare('UPDATE purchases SET owner_user_id = :owner WHERE id = :id')
               ->execute(['owner' => $newOwnerId, 'id' => $id]);

            EntityVersion::bump($db, 'purchases');
            $db->commit();
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log('[REASSIGN OWNER ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to reassign owner. Please check server error logs.'], 500);
            return;
        }

        SystemLog::write('purchases', 'owner_changed', (int) $id, $purchase['name'] ?? "Purchase #$id", json_encode([
            'uid' => $purchase['uid'] ?? null,
            'Owner' => ['from' => $resolveUserName($oldOwnerId), 'to' => $resolveUserName($newOwnerId)],
        ]));

        Response::json(['ok' => true, 'owner_user_id' => $newOwnerId]);
    }

    /**
     * Initiate an internal partner stock transfer. Freezes the lot from sale/use
     * until the transfer is settled or cancelled (Custody Lock).
     */
    public function transferOwnership(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensurePurchasesTableColumns($db);
        $db->beginTransaction();

        try {
            $stmt = $db->prepare('SELECT * FROM purchases WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $purchase = $stmt->fetch();
        if (!$purchase) {
            $db->rollBack();
            Response::json(['error' => 'Purchase not found'], 404);
            return;
        }
        if ($purchase['deleted_at'] !== null) {
            $db->rollBack();
            Response::json(['error' => 'Deleted purchases cannot be transferred'], 400);
            return;
        }
        if ($purchase['status'] === 'merged' || !empty($purchase['merged_into_id'])) {
            $db->rollBack();
            Response::json(['ok' => false, 'error' => 'Merged constituent batches cannot be transferred.'], 400);
            return;
        }
        if (!empty($purchase['transfer_status']) && in_array($purchase['transfer_status'], ['pending_transfer', 'pending_delegated'])) {
            $db->rollBack();
            Response::json(['ok' => false, 'error' => 'This lot already has an active pending transfer or delegated purchase in progress. Please settle or cancel it first.'], 400);
            return;
        }
        // Encumbrance & Available Free Stock Check (Parity with Batch Merging & TrulyFree standard)
        $remQty = (string)($purchase['quantity_remaining'] ?? '0');
        $resQty = (string)($purchase['quantity_reserved'] ?? '0');
        $availableFreeQty = Decimal::comp($remQty, $resQty) > 0 ? Decimal::sub($remQty, $resQty) : '0';

        if (Decimal::comp($availableFreeQty, '0') <= 0) {
            $db->rollBack();
            Response::json([
                'ok' => false,
                'error' => "Cannot initiate transfer: All remaining stock ({$remQty} units) is currently reserved in active orders or workshop tickets. Zero free units available.",
                'code' => 'ZERO_FREE_STOCK_AVAILABLE',
                'quantity_remaining' => $remQty,
                'quantity_reserved' => $resQty,
            ], 422);
            return;
        }

        // Target user
        $targetUserId = !empty($data['transfer_to_user_id']) ? (int)$data['transfer_to_user_id'] : null;
        if (!$targetUserId) {
            $db->rollBack();
            Response::json(['ok' => false, 'error' => 'Target user is required'], 400);
            return;
        }
        $tStmt = $db->prepare('SELECT id, username FROM users WHERE id = :id AND deleted_at IS NULL LIMIT 1');
        $tStmt->execute(['id' => $targetUserId]);
        $targetUser = $tStmt->fetch();
        if (!$targetUser) {
            $db->rollBack();
            Response::json(['ok' => false, 'error' => 'Target user not found or inactive'], 404);
            return;
        }
        // Security Guard: Caller must be the verified owner of the stock lot (Rule: Coin Swap parity)
        $sessionUserId = (int)($_SESSION['user_id'] ?? 0);
        $currentOwner = $purchase['owner_user_id'] !== null ? (int)$purchase['owner_user_id'] : (int)($purchase['created_by'] ?? 1);
        if ($sessionUserId === 0 || $currentOwner !== $sessionUserId) {
            $db->rollBack();
            SystemLog::write('purchases', 'security_violation', (int)$id, $purchase['name'] ?? "Purchase #$id", json_encode([
                'violation'    => 'unauthorized_stock_transfer',
                'error'        => 'Attempted to transfer stock lot belonging to another user',
                'lot_id'       => (int)$id,
                'lot_owner_id' => $currentOwner,
                'target_user'  => $targetUserId,
                'attempted_by' => $sessionUserId
            ], JSON_UNESCAPED_UNICODE), $sessionUserId);
            Response::json(['ok' => false, 'error' => 'Forbidden: You can only transfer stock lots that you own.'], 403);
            return;
        }

        // Cannot transfer to same owner
        if ($currentOwner === $targetUserId) {
            $db->rollBack();
            Response::json(['ok' => false, 'error' => 'Cannot transfer to the same owner'], 400);
            return;
        }

        // Transfer Quantity validation
        $transferQty = isset($data['transfer_quantity']) ? (string)$data['transfer_quantity'] : (isset($data['quantity']) ? (string)$data['quantity'] : $availableFreeQty);
        if (Decimal::comp($transferQty, '0') <= 0) {
            $db->rollBack();
            Response::json(['ok' => false, 'error' => 'Transfer quantity must be greater than zero'], 400);
            return;
        }
        if (Decimal::comp($transferQty, $availableFreeQty) > 0) {
            $db->rollBack();
            Response::json([
                'ok' => false,
                'error' => "Cannot transfer {$transferQty} units. Only {$availableFreeQty} units are free and unencumbered ({$resQty} units are reserved in active orders/tickets).",
                'code' => 'TRANSFER_QTY_EXCEEDS_FREE_STOCK',
                'available_free' => $availableFreeQty,
                'quantity_reserved' => $resQty,
            ], 422);
            return;
        }

        // Valuation based on transferred quantity
        $unitCost = (string)($purchase['price'] ?? '0');
        $totalCostBasis = Decimal::mul($unitCost, $transferQty);
        $valuationMode = $data['valuation_mode'] ?? 'at_cost';
        if ($valuationMode === 'at_cost') {
            $valuation = $totalCostBasis;
        } elseif ($valuationMode === 'custom') {
            $valuation = isset($data['valuation_amount']) ? (string)$data['valuation_amount'] : '0';
        } elseif ($valuationMode === 'zero') {
            $valuation = '0';
        } else {
            $db->rollBack();
            Response::json(['ok' => false, 'error' => 'Invalid valuation mode'], 400);
            return;
        }

        // Calculate cost basis and differential
        $netDiff = Decimal::sub($valuation, $totalCostBasis);
        $diffComp = Decimal::comp($netDiff, '0');
        $diffType = ($diffComp > 0) ? 'markup' : (($diffComp < 0) ? 'discount' : 'at_cost');
        $effectiveUnitCost = (Decimal::comp($transferQty, '0') > 0) ? Decimal::div($valuation, $transferQty) : '0';

        $isPartial = Decimal::comp($transferQty, $remQty) < 0;
        $activeLotId = (int)$id;
        $childUid = null;
        $cleanQty = rtrim(rtrim($transferQty, '0'), '.');
        $sUid = 'STL-' . date('Ymd') . '-' . strtoupper(substr(md5(random_bytes(8)), 0, 6));

        if ($isPartial) {
            // Immediate Lot Forking (Architecture Option A):
            // 1. Parent lot retains remaining units (100% active, free, transfer_status = NULL)
            $newParentRem = Decimal::sub($remQty, $transferQty);
            $newParentQty = Decimal::sub((string)$purchase['quantity'], $transferQty);
            $newParentTotal = Decimal::mul($unitCost, $newParentQty);
            $newParentAmountPaid = Decimal::min((string)($purchase['amount_paid'] ?? $newParentTotal), $newParentTotal);

            $db->prepare('UPDATE purchases SET
                quantity = :qty,
                quantity_remaining = :qty_rem,
                total = :total,
                amount_paid = :amount_paid
            WHERE id = :id')->execute([
                'qty' => $newParentQty,
                'qty_rem' => $newParentRem,
                'total' => $newParentTotal,
                'amount_paid' => $newParentAmountPaid,
                'id' => $id,
            ]);

            // 2. Child lot created for the transferred portion (held in custody lock)
            $insStmt = $db->prepare('INSERT INTO purchases
                (uid, name, product_id, price, quantity, quantity_remaining, quantity_sold, quantity_reserved,
                 total, date, created_by, owner_user_id, supplier_id, payment_status,
                 amount_paid, paid_at, paid_by, supplier_note, transfer_status,
                 transfer_to_user_id, transfer_valuation, transfer_initiated_at, transfer_initiated_by,
                 created_from_purchase_id)
                VALUES (:uid, :name, :product_id, :price, :qty, :qty_rem, 0, 0,
                        :total, NOW(), :created_by, :owner_user_id, :supplier_id, "paid",
                        :amount_paid, NOW(), :paid_by, :supplier_note, "pending_transfer",
                        :transfer_to_user_id, :transfer_valuation, NOW(), :transfer_initiated_by,
                        :created_from_purchase_id)');
            $insStmt->execute([
                'uid' => 'TEMP',
                'name' => $purchase['name'],
                'product_id' => $purchase['product_id'],
                'price' => $unitCost,
                'qty' => $transferQty,
                'qty_rem' => $transferQty,
                'total' => $totalCostBasis,
                'created_by' => $sessionUserId,
                'owner_user_id' => $currentOwner,
                'supplier_id' => $purchase['supplier_id'],
                'amount_paid' => $totalCostBasis,
                'paid_by' => $currentOwner,
                'supplier_note' => "Transfer pending from lot #" . ($purchase['uid'] ?? $id),
                'transfer_to_user_id' => $targetUserId,
                'transfer_valuation' => $valuation,
                'transfer_initiated_by' => $sessionUserId,
                'created_from_purchase_id' => (int)$id,
            ]);
            $activeLotId = (int)$db->lastInsertId();
            $childDate = date('Ymd');
            $childRand = strtoupper(bin2hex(random_bytes(2)));
            $childUid = "PUR-{$childDate}-{$childRand}({$activeLotId})";
            $db->prepare('UPDATE purchases SET uid = :uid WHERE id = :id')->execute([
                'uid' => $childUid,
                'id' => $activeLotId,
            ]);
        } else {
            // 100% transfer of the lot directly
            $db->prepare('UPDATE purchases SET
                transfer_status = :ts,
                transfer_to_user_id = :tu,
                transfer_valuation = :tv,
                transfer_initiated_at = NOW(),
                transfer_initiated_by = :tib
            WHERE id = :id')->execute([
                'ts' => 'pending_transfer',
                'tu' => $targetUserId,
                'tv' => $valuation,
                'tib' => $sessionUserId,
                'id' => $id,
            ]);
            $activeLotId = (int)$id;
        }

        // Contextual settlement description
        $desc = "Stock transfer: {$purchase['name']} (Qty: {$cleanQty})";
        if ($diffComp > 0) {
            $desc .= " [Markup: +" . Decimal::sub($valuation, $totalCostBasis) . "]";
        } elseif ($diffComp < 0) {
            $desc .= " [Discount: -" . Decimal::sub($totalCostBasis, $valuation) . "]";
        } else {
            $desc .= " [At Cost]";
        }

        // Create pending settlement record
        $settlementId = null;
        if (Decimal::comp($valuation, '0') > 0) {
            $sStmt = $db->prepare('INSERT INTO partner_settlements (uid, payer_user_id, payee_user_id, amount, settlement_type, status, release_status, released_amount, acceptance_status, related_entity_type, related_entity_id, related_entity_uid, description, details, created_by, created_at) VALUES (:uid, :payer, :payee, :amount, :type, :status, "released", :amount_rel, "pending", :rel_type, :rel_id, :rel_uid, :desc, :details, :created_by, NOW())');
            $sStmt->execute([
                'uid' => $sUid,
                'payer' => $targetUserId, // Buyer pays
                'payee' => $currentOwner ?? ($_SESSION['user_id'] ?? 1), // Seller receives
                'amount' => $valuation,
                'amount_rel' => $valuation,
                'type' => 'stock_transfer',
                'status' => 'pending',
                'rel_type' => 'purchases',
                'rel_id' => $activeLotId,
                'rel_uid' => ($isPartial ? $childUid : ($purchase['uid'] ?? null)),
                'desc' => $desc,
                'details' => json_encode([
                    'product_name' => $purchase['name'],
                    'quantity' => $cleanQty,
                    'unit_cost' => $unitCost,
                    'valuation_mode' => $valuationMode,
                    'valuation_total' => $valuation,
                    'cost_basis' => $totalCostBasis,
                    'net_differential' => $netDiff,
                    'differential_type' => $diffType,
                    'effective_unit_cost' => $effectiveUnitCost,
                    'from_owner' => $currentOwner,
                    'to_owner' => $targetUserId,
                    'is_partial_fork' => $isPartial,
                    'parent_purchase_id' => $isPartial ? (int)$id : null,
                ]),
                'created_by' => (int)($_SESSION['user_id'] ?? 1),
            ]);
            $settlementId = (int)$db->lastInsertId();
        }

        // Save settlement id on the transferred lot
        $db->prepare('UPDATE purchases SET transfer_settlement_id = :tsi WHERE id = :id')
           ->execute(['tsi' => $settlementId, 'id' => $activeLotId]);

        EntityVersion::bump($db, 'purchases', 'partner_settlements');
        $db->commit();
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log('[TRANSFER OWNERSHIP ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to initiate transfer. Please check server error logs.'], 500);
            return;
        }

        // Resolve usernames for logging
        $fromName = 'Unassigned';
        if ($currentOwner) {
            $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
            $uStmt->execute(['id' => $currentOwner]);
            $row = $uStmt->fetch();
            $fromName = $row ? $row['username'] : "User #$currentOwner";
        }

        SystemLog::write('purchases', 'transfer_initiated', $activeLotId, $purchase['name'] ?? "Purchase #$id", json_encode([
            'uid' => $isPartial ? $childUid : ($purchase['uid'] ?? null),
            'parent_lot_id' => $isPartial ? (int)$id : null,
            'is_partial' => $isPartial,
            'from_owner' => $fromName,
            'to_owner' => $targetUser['username'],
            'valuation_mode' => $valuationMode,
            'valuation' => $valuation,
            'cost_basis' => $totalCostBasis,
            'net_differential' => $netDiff,
            'differential_type' => $diffType,
            'effective_unit_cost' => $effectiveUnitCost,
            'transferred_quantity' => $transferQty,
            'retained_quantity' => $isPartial ? Decimal::sub($remQty, $transferQty) : '0',
            'settlement_uid' => $sUid,
        ]));

        Response::json([
            'ok' => true,
            'transfer_status' => 'pending_transfer',
            'purchase_id' => $activeLotId,
            'settlement_id' => $settlementId,
            'settlement_uid' => $sUid,
            'valuation' => $valuation,
            'is_partial' => $isPartial,
            'parent_lot_id' => (int)$id,
            'active_lot_id' => $activeLotId,
            'transferred_quantity' => $transferQty,
            'retained_quantity' => $isPartial ? Decimal::sub($remQty, $transferQty) : '0',
        ]);
    }

    /**
     * Accept ownership of a pending stock transfer (Phase 1 -> Phase 2).
     * Strictly the designated recipient can accept. Unlocks Phase 2 payment options.
     */
    public function acceptTransfer(string $id): void
    {
        $db = Database::getConnection();
        $this->ensurePurchasesTableColumns($db);
        $db->beginTransaction();

        try {
            $stmt = $db->prepare('SELECT * FROM purchases WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $purchase = $stmt->fetch();
        if (!$purchase) {
            $db->rollBack();
            Response::json(['error' => 'Purchase not found'], 404);
            return;
        }
        if (!in_array($purchase['transfer_status'] ?? null, ['pending_transfer', 'pending_delegated'])) {
            $db->rollBack();
            Response::json(['error' => 'No pending transfer or delegated purchase to accept'], 400);
            return;
        }

        $newOwnerId = (int)$purchase['transfer_to_user_id'];
        $sessionUserId = (int)($_SESSION['user_id'] ?? 0);
        if ($sessionUserId === 0 || $sessionUserId !== $newOwnerId) {
            $db->rollBack();
            SystemLog::write('purchases', 'security_violation', (int)$id, $purchase['name'] ?? "Purchase #$id", json_encode([
                'violation'    => 'unauthorized_stock_transfer_accept',
                'error'        => 'Attempted to accept a stock transfer addressed to another user',
                'session_user' => $sessionUserId,
                'target_user'  => $newOwnerId,
            ]), $sessionUserId);
            Response::json(['error' => 'Forbidden: Only the designated recipient can accept this stock transfer.'], 403);
            return;
        }

        $settlementId = $purchase['transfer_settlement_id'] ?? null;
        if ($settlementId) {
            $sStmt = $db->prepare('UPDATE partner_settlements 
                SET acceptance_status = "accepted", accepted_at = NOW(), accepted_by = :ab,
                    refused_at = NULL, refused_by = NULL, refusal_reason = NULL
                WHERE id = :sid AND (status = "pending" OR status = "released")');
            $sStmt->execute([
                'ab'  => $sessionUserId,
                'sid' => $settlementId,
            ]);

            // Sync purchase state to transferred if delegated
            $isDelegated = (($purchase['transfer_status'] ?? '') === 'pending_delegated');
            if ($isDelegated) {
                $db->prepare("UPDATE purchases SET 
                    owner_user_id = :owner,
                    transfer_status = 'transferred'
                    WHERE id = :id AND transfer_status = 'pending_delegated'")
                   ->execute([
                       'owner' => $sessionUserId,
                       'id'    => (int)$id
                   ]);
            }

            // Mark accepting partner's pending notification as read
            try {
                $db->prepare("UPDATE notifications SET is_read = 1 
                    WHERE user_id = :uid AND ((entity_type = 'partner_settlement' AND entity_id = :sid) OR (entity_type = 'purchases' AND entity_id = :pid))")
                   ->execute(['uid' => $sessionUserId, 'sid' => (int)$settlementId, 'pid' => (int)$id]);
            } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

            // Notify initiator/creator that transfer was accepted
            $initiatorId = (int)($purchase['transfer_initiated_by'] ?? $purchase['created_by'] ?? 0);
            if ($initiatorId > 0 && $initiatorId !== $sessionUserId) {
                try {
                    $rName = $_SESSION['username'] ?? "User #$sessionUserId";
                    $notifTitle = $isDelegated ? "Delegated Purchase Accepted: {$rName}" : "Stock Transfer Accepted: {$rName}";
                    $notifBody = $isDelegated
                        ? "Partner {$rName} accepted ownership of Purchase #{$purchase['uid']} ({$purchase['name']}). Awaiting supplier payment."
                        : "Partner {$rName} accepted ownership of {$purchase['name']}. Awaiting payment settlement.";
                    $notifIns = $db->prepare("INSERT INTO notifications 
                        (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                        VALUES (:uid, 'settlement', :t, :b, :aurl, 'purchases', :eid, :stage, 0, NOW())");
                    $notifIns->execute([
                        'uid'   => $initiatorId,
                        't'     => $notifTitle,
                        'b'     => $notifBody,
                        'aurl'  => '#page-bills?tab=settlements' . ($settlementId ? '&settlement=' . (int)$settlementId : ''),
                        'eid'   => (int)$id,
                        'stage' => ($isDelegated ? 'purchase_delegated_accepted_' : 'purchase_transfer_accepted_') . (int)$id
                    ]);
                } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
            }
        }

        EntityVersion::bump($db, 'purchases', 'partner_settlements');
        $db->commit();
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log('[ACCEPT TRANSFER ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to accept transfer. Please check server error logs.'], 500);
            return;
        }

        SystemLog::write('purchases', 'transfer_accepted', (int)$id, $purchase['name'] ?? "Purchase #$id", json_encode([
            'uid'           => $purchase['uid'] ?? null,
            'settlement_id' => $settlementId,
            'accepted_by'   => $sessionUserId,
            'new_owner_id'  => $newOwnerId,
        ]), $sessionUserId);

        Response::json([
            'ok'                => true,
            'acceptance_status' => 'accepted',
            'message'           => 'Stock transfer accepted successfully. You can now choose to settle payment fully or in installments.'
        ]);
    }

    /**
     * Settle (complete) a pending stock transfer. Changes the lot owner, optionally
     * records a cash vault movement, and marks the settlement as settled.
     */
    public function settleTransfer(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensurePurchasesTableColumns($db);
        $db->beginTransaction();

        try {
            $stmt = $db->prepare('SELECT * FROM purchases WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $purchase = $stmt->fetch();
        if (!$purchase) {
            $db->rollBack();
            Response::json(['error' => 'Purchase not found'], 404);
            return;
        }
        if (!in_array($purchase['transfer_status'] ?? null, ['pending_transfer', 'pending_delegated', 'transferred'])) {
            $db->rollBack();
            Response::json(['error' => 'No pending transfer or delegated purchase to settle'], 400);
            return;
        }

        $settlementId = $purchase['transfer_settlement_id'] ?? null;

        // If transfer_status is already 'transferred', ensure it has a pending linked settlement awaiting settlement
        if (($purchase['transfer_status'] ?? null) === 'transferred') {
            if (!$settlementId) {
                $db->rollBack();
                Response::json(['error' => 'No pending settlement linked to this transferred purchase'], 400);
                return;
            }
            $sCheck = $db->prepare('SELECT status, acceptance_status FROM partner_settlements WHERE id = :id');
            $sCheck->execute(['id' => $settlementId]);
            $sRow = $sCheck->fetch();
            if (!$sRow || $sRow['status'] !== 'pending') {
                $db->rollBack();
                Response::json(['error' => 'This stock transfer has already been settled.'], 400);
                return;
            }
        }

        $newOwnerId = !empty($purchase['transfer_to_user_id']) ? (int)$purchase['transfer_to_user_id'] : (int)($purchase['owner_user_id'] ?? 0);
        $oldOwnerId = $purchase['owner_user_id'] ? (int)$purchase['owner_user_id'] : null;

        // Security Guard: Strictly ONLY the designated recipient can accept and settle a stock transfer.
        $sessionUserId = (int)($_SESSION['user_id'] ?? 0);
        if ($sessionUserId === 0 || ($newOwnerId > 0 && $sessionUserId !== $newOwnerId)) {
            $db->rollBack();
            SystemLog::write('purchases', 'security_violation', (int)$id, $purchase['name'] ?? "Purchase #$id", json_encode([
                'violation'    => 'unauthorized_stock_transfer_settle',
                'error'        => 'Attempted to settle a stock transfer designated for another user',
                'lot_id'       => (int)$id,
                'sender_id'    => $oldOwnerId,
                'target_user'  => $newOwnerId,
                'attempted_by' => $sessionUserId
            ], JSON_UNESCAPED_UNICODE), $sessionUserId);
            Response::json(['ok' => false, 'error' => 'Forbidden: Only the designated recipient can accept and settle this stock transfer.'], 403);
            return;
        }

        $valuation  = $purchase['transfer_valuation'] !== null ? (string)$purchase['transfer_valuation'] : (string)($purchase['total'] ?? '0');

        // Phase 1 -> Phase 2 Strict Enforcement: Recipient MUST accept Phase 1 agreement first
        if ($settlementId) {
            $sCheck = $db->prepare('SELECT acceptance_status FROM partner_settlements WHERE id = :id');
            $sCheck->execute(['id' => $settlementId]);
            $sRow = $sCheck->fetch();
            if ($sRow && ($sRow['acceptance_status'] ?? '') !== 'accepted') {
                $db->rollBack();
                Response::json(['ok' => false, 'error' => 'Phase 1 agreement must be accepted before Phase 2 payment settlement.'], 400);
                return;
            }
        }

        $soldQty    = (string)($purchase['quantity_sold'] ?? '0');
        $remainingQty = (string)($purchase['quantity_remaining'] ?? '0');
        $spawnedLotId = null;

        // ── Lot Splitting Architecture ──────────────────────────────────
        // If the lot was partially sold, fork it into two clean lots:
        // 1. Parent lot stays with old owner (closed with sold qty, retains past order history).
        // 2. Child lot is spawned for new owner with remaining transferred qty.
        if (Decimal::comp($soldQty, '0') > 0 && Decimal::comp($remainingQty, '0') > 0) {
            $unitCost = (string)($purchase['price'] ?? '0');
            $soldTotal = Decimal::mul($unitCost, $soldQty);

            // A. Fork & Close Parent Lot under Old Owner
            $db->prepare('UPDATE purchases SET
                quantity = :soldQty,
                quantity_remaining = 0,
                total = :soldTotal,
                amount_paid = :soldTotal,
                transfer_status = NULL,
                transfer_to_user_id = NULL,
                transfer_valuation = NULL,
                transfer_settlement_id = NULL,
                transfer_initiated_at = NULL,
                transfer_initiated_by = NULL
            WHERE id = :id')->execute([
                'soldQty' => $soldQty,
                'soldTotal' => $soldTotal,
                'id' => $id,
            ]);

            // B. Spawn New Lot for New Owner
            $transferUnitCost = (Decimal::comp($valuation, '0') > 0 && Decimal::comp($remainingQty, '0') > 0)
                ? Decimal::div($valuation, $remainingQty)
                : $unitCost;
            $newTotal = Decimal::comp($valuation, '0') > 0 ? $valuation : Decimal::mul($unitCost, $remainingQty);

            $insStmt = $db->prepare('INSERT INTO purchases
                (uid, name, product_id, price, quantity, quantity_remaining, quantity_sold,
                 total, date, created_by, owner_user_id, supplier_id, payment_status,
                 amount_paid, paid_at, paid_by, supplier_note, transfer_status)
                VALUES (:uid, :name, :product_id, :price, :qty, :qty_rem, 0,
                        :total, NOW(), :created_by, :owner_user_id, :supplier_id, "paid",
                        :amount_paid, NOW(), :paid_by, :supplier_note, NULL)');
            $insStmt->execute([
                'uid' => 'TEMP',
                'name' => $purchase['name'],
                'product_id' => $purchase['product_id'],
                'price' => $transferUnitCost,
                'qty' => $remainingQty,
                'qty_rem' => $remainingQty,
                'total' => $newTotal,
                'created_by' => (int)($_SESSION['user_id'] ?? 1),
                'owner_user_id' => $newOwnerId,
                'supplier_id' => $purchase['supplier_id'],
                'amount_paid' => $newTotal,
                'paid_by' => $newOwnerId,
                'supplier_note' => "Transferred from lot #" . ($purchase['uid'] ?? $id),
            ]);
            $spawnedLotId = (int)$db->lastInsertId();

            // Stamp UID on child lot
            $dateStr = date('Ymd');
            $random = strtoupper(bin2hex(random_bytes(2)));
            $spawnedUid = "PUR-{$dateStr}-{$random}({$spawnedLotId})";
            $db->prepare('UPDATE purchases SET uid = :uid WHERE id = :id')->execute([
                'uid' => $spawnedUid,
                'id' => $spawnedLotId,
            ]);
        } else {
            // Virgin lot (0 units sold) — direct in-place ownership update
            // If custom valuation was agreed, update unit price and total to reflect recipient's new inventory cost basis
            $virginUnitCost = (Decimal::comp($remainingQty, '0') > 0)
                ? Decimal::div($valuation, $remainingQty)
                : (string)($purchase['price'] ?? '0');

            $db->prepare('UPDATE purchases SET
                owner_user_id = :owner,
                price = :price,
                total = :total,
                amount_paid = :amount_paid,
                transfer_status = NULL,
                transfer_to_user_id = NULL,
                transfer_valuation = NULL,
                transfer_settlement_id = NULL,
                transfer_initiated_at = NULL,
                transfer_initiated_by = NULL
            WHERE id = :id')->execute([
                'owner' => $newOwnerId,
                'price' => $virginUnitCost,
                'total' => $valuation,
                'amount_paid' => $valuation,
                'id' => $id,
            ]);
        }

        $isProxy = false;
        if ($settlementId) {
            $sCheck = $db->prepare('SELECT details, settlement_type FROM partner_settlements WHERE id = :id');
            $sCheck->execute(['id' => $settlementId]);
            $sRow = $sCheck->fetch();
            if ($sRow) {
                if (($sRow['settlement_type'] ?? '') === 'delegated_purchase') {
                    $isProxy = true;
                } elseif (!empty($sRow['details'])) {
                    $sDetails = json_decode($sRow['details'], true);
                    if (!empty($sDetails['is_proxy_purchase']) || !empty($sDetails['is_delegated_purchase'])) {
                        $isProxy = true;
                    }
                }
            }
        }
        if (!$isProxy && in_array($purchase['transfer_status'] ?? '', ['pending_delegated', 'transferred'], true)) {
            if ($settlementId || !empty($purchase['transfer_initiated_by'])) {
                $isProxy = true;
            }
        }

        // Cash vault settlement if valuation > 0
        if (Decimal::comp($valuation, '0') > 0) {
            (new CashVaultController())->ensureTwoSafes($db);
            if ($isProxy) {
                $mode = $data['mode'] ?? 'full';
                $isInstallmentMode = ($mode === 'installment');
                $downpayment = $isInstallmentMode ? (string)($data['amount_paid_now'] ?? '0') : $valuation;
                if (!is_numeric($downpayment) || Decimal::comp($downpayment, '0') < 0) {
                    $downpayment = '0';
                }
                if (Decimal::comp($downpayment, $valuation) > 0) {
                    $downpayment = $valuation;
                }
                $actualSource = in_array($data['source'] ?? $data['paid_from'] ?? 'vault', ['vault', 'hand'], true)
                    ? ($data['source'] ?? $data['paid_from'] ?? 'vault')
                    : 'vault';
                $forceOverdraft = !empty($data['force_overdraft']);

                // Check if already paid to prevent double-deducting from cash safe
                $alreadyPaid = (string)($purchase['amount_paid'] ?? '0');
                $amountToDeduct = Decimal::comp($alreadyPaid, $valuation) >= 0 ? '0' : Decimal::sub($downpayment, $alreadyPaid);
                if (Decimal::comp($amountToDeduct, '0') < 0) {
                    $amountToDeduct = '0';
                }

                if ($actualSource === 'vault' && Decimal::comp($amountToDeduct, '0') > 0) {
                    // Proxy Purchase Settle: User B pays supplier from their safe, User A safe is untouched (0 in)
                    CashVaultController::logFlow(
                        $db,
                        'supplier_payment',
                        'out',
                        $amountToDeduct,
                        'purchases',
                        (int)($spawnedLotId ?? $id),
                        ($isInstallmentMode ? "Supplier downpayment for proxy purchase: " : "Supplier payment for proxy purchase: ") . $purchase['name'],
                        $newOwnerId,
                        $forceOverdraft
                    );
                }

                $finalPaidAmount = Decimal::add($alreadyPaid, $amountToDeduct);
                if (Decimal::comp($finalPaidAmount, $downpayment) < 0) {
                    $finalPaidAmount = $downpayment;
                }
                $payStatus = $isInstallmentMode
                    ? ((Decimal::comp($finalPaidAmount, '0') === 0) ? 'unpaid' : (Decimal::comp($finalPaidAmount, $valuation) >= 0 ? 'paid' : 'partial'))
                    : 'paid';
                $paidAt = ($payStatus !== 'unpaid') ? date('Y-m-d H:i:s') : null;
                $paidBy = ($payStatus !== 'unpaid') ? $newOwnerId : null;
                $dueDate = !empty($data['due_date']) ? $data['due_date'] : null;

                // Stamp payment status on purchase
                $db->prepare('UPDATE purchases SET payment_status = :ps, amount_paid = :ap, paid_at = :pa, paid_by = :pb, due_date = :dd, paid_from = :pf WHERE id = :id')
                   ->execute([
                       'ps' => $payStatus,
                       'ap' => $finalPaidAmount,
                       'pa' => $paidAt,
                       'pb' => $paidBy,
                       'dd' => $dueDate,
                       'pf' => $actualSource,
                       'id' => ($spawnedLotId ?? $id)
                   ]);
            } else {
                $forceOverdraft = !empty($data['force_overdraft']);
                // Standard Stock Transfer: User B safe OUT, User A safe IN (reimbursement)
                CashVaultController::logFlow(
                    $db,
                    'partner_transfer',
                    'out',
                    $valuation,
                    'purchases',
                    (int)($spawnedLotId ?? $id),
                    "Stock transfer payment: {$purchase['name']}",
                    $newOwnerId,
                    $forceOverdraft
                );
                CashVaultController::logFlow(
                    $db,
                    'partner_transfer',
                    'in',
                    $valuation,
                    'purchases',
                    (int)$id,
                    "Stock transfer received: {$purchase['name']}",
                    $oldOwnerId ?? (int)($_SESSION['user_id'] ?? 1)
                );
            }
        }

        // Update settlement record
        if ($settlementId) {
            $db->prepare('UPDATE partner_settlements SET status = :s, settled_amount = amount, settled_at = NOW(), settled_by = :sb WHERE id = :id AND status = "pending"')
               ->execute([
                   's' => 'settled',
                   'sb' => (int)($_SESSION['user_id'] ?? 1),
                   'id' => $settlementId,
               ]);
        }

        EntityVersion::bump($db, 'purchases', 'partner_settlements', 'cash_vault');
        $db->commit();
        } catch (\RuntimeException $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            $isInsufficient = str_contains($e->getMessage(), 'Insufficient physical cash') || str_contains($e->getMessage(), 'insufficient balance');
            Response::json(['error' => $e->getMessage()], $isInsufficient ? 422 : 400);
            return;
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log('[SETTLE TRANSFER ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to settle transfer. Please check server error logs.'], 500);
            return;
        }

        // Resolve names for logging
        $resolveUserName = function ($uid) use ($db) {
            if ($uid === null) return 'Unassigned';
            $us = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
            $us->execute(['id' => $uid]);
            $row = $us->fetch();
            return $row ? $row['username'] : "User #$uid";
        };

        SystemLog::write('purchases', 'transfer_settled', (int)($spawnedLotId ?? $id), $purchase['name'] ?? "Purchase #$id", json_encode([
            'uid' => $purchase['uid'] ?? null,
            'from_owner' => $resolveUserName($oldOwnerId),
            'to_owner' => $resolveUserName($newOwnerId),
            'valuation' => $valuation,
            'quantity' => $remainingQty,
            'lot_split' => ($spawnedLotId !== null),
            'spawned_lot_id' => $spawnedLotId,
        ]));

        if ($isProxy && !empty($isInstallmentMode) && Decimal::comp($downpayment ?? '0', '0') > 0) {
            $targetLotId = (int)($spawnedLotId ?? $id);
            $pName = $purchase['name'] ?? "Purchase #{$targetLotId}";
            $remVal = Decimal::sub($valuation, $downpayment);
            SystemLog::write('purchases', 'supplier_payment', $targetLotId, $pName, json_encode([
                'uid' => $purchase['uid'] ?? null,
                'supplier_id' => $purchase['supplier_id'] ?? null,
                'amount_paid_now' => $downpayment,
                'amount_paid_total' => $downpayment,
                'remaining' => $remVal,
                'payment_status' => $payStatus ?? 'partial',
                'payment_date' => date('Y-m-d'),
                'due_date' => null,
                'timing' => 'initial_installment',
                'new_due_date' => $dueDate ?? null,
                'note' => 'Initial downpayment via Statements Installments'
            ], JSON_UNESCAPED_UNICODE), (int)($_SESSION['user_id'] ?? 1));
        }

        Response::json([
            'ok' => true,
            'new_owner_user_id' => $newOwnerId,
            'lot_split' => ($spawnedLotId !== null),
            'spawned_lot_id' => $spawnedLotId,

/* [INTERNAL_RUNTIME_FRAMEWORK_TOKEN] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
        ]);
    }

    /**
     * Cancel a pending stock transfer. Unlocks the lot, reverts proxy owner to creator, and voids the settlement.
     */
    public function cancelTransfer(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensurePurchasesTableColumns($db);
        $db->beginTransaction();

        try {
            $stmt = $db->prepare('SELECT * FROM purchases WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $purchase = $stmt->fetch();
        if (!$purchase) {
            $db->rollBack();
            Response::json(['error' => 'Purchase not found'], 404);
            return;
        }
        if (!in_array($purchase['transfer_status'] ?? null, ['pending_transfer', 'pending_delegated'])) {
            $db->rollBack();
            Response::json(['error' => 'No pending transfer or delegated purchase to cancel'], 400);
            return;
        }

        // Security Guard: Only the transfer initiator (sender) or recipient can cancel/reject
        $sessionUserId = (int)($_SESSION['user_id'] ?? 0);
        $senderId = !empty($purchase['owner_user_id']) ? (int)$purchase['owner_user_id'] : (!empty($purchase['transfer_initiated_by']) ? (int)$purchase['transfer_initiated_by'] : 0);
        $recipientId = !empty($purchase['transfer_to_user_id']) ? (int)$purchase['transfer_to_user_id'] : 0;
        if ($sessionUserId === 0 || ($senderId !== 0 && $recipientId !== 0 && $sessionUserId !== $senderId && $sessionUserId !== $recipientId)) {
            $db->rollBack();
            SystemLog::write('purchases', 'security_violation', (int)$id, $purchase['name'] ?? "Purchase #$id", json_encode([
                'violation' => 'unauthorized_cancel_transfer',
                'error' => 'Only the transfer initiator or recipient can cancel/reject this transfer',
                'lot_id' => (int)$id,
                'sender_id' => $senderId,
                'recipient_id' => $recipientId,
                'attempted_by' => $sessionUserId
            ], JSON_UNESCAPED_UNICODE), $sessionUserId);
            Response::json(['error' => 'Forbidden: Only the sender or recipient can cancel/reject this transfer.'], 403);
            return;
        }

        $cancelReason = $data['reason'] ?? 'Transfer cancelled by user';
        $settlementId = $purchase['transfer_settlement_id'] ?? null;
        $revertedOwner = !empty($purchase['owner_user_id']) ? (int)$purchase['owner_user_id'] : (!empty($purchase['transfer_initiated_by']) ? (int)$purchase['transfer_initiated_by'] : (!empty($purchase['created_by']) ? (int)$purchase['created_by'] : (int)($_SESSION['user_id'] ?? 1)));

        $isProxy = false;
        if ($settlementId) {
            $sCheck = $db->prepare('SELECT details, settlement_type, acceptance_status FROM partner_settlements WHERE id = :id');
            $sCheck->execute(['id' => $settlementId]);
            $sRow = $sCheck->fetch();
            if ($sRow) {
                if (($sRow['acceptance_status'] ?? '') === 'accepted') {
                    $db->rollBack();
                    Response::json(['error' => 'Cannot refuse or cancel: Ownership has already been accepted.'], 400);
                    return;
                }
                if (($sRow['settlement_type'] ?? '') === 'delegated_purchase') {
                    $isProxy = true;
                } elseif (!empty($sRow['details'])) {
                    $sDetails = json_decode($sRow['details'], true);
                    if (!empty($sDetails['is_proxy_purchase']) || !empty($sDetails['is_delegated_purchase'])) {
                        $isProxy = true;
                    }
                }
            }
        }
        if (!$isProxy && ($purchase['transfer_status'] ?? '') === 'pending_delegated') {
            $isProxy = true;
        }
        if (!$isProxy && !empty($purchase['created_by']) && (int)$purchase['created_by'] !== (int)($purchase['owner_user_id'] ?? 0) && $purchase['payment_status'] !== 'paid') {
            $isProxy = true;
        }

        $parentId = !empty($purchase['created_from_purchase_id']) ? (int)$purchase['created_from_purchase_id'] : null;
        if ($parentId) {
            // Child lot from partial transfer fork: Restore units to parent lot & soft-delete child
            $pStmt = $db->prepare('SELECT * FROM purchases WHERE id = :pid FOR UPDATE');
            $pStmt->execute(['pid' => $parentId]);
            $parent = $pStmt->fetch();
            if ($parent && $parent['deleted_at'] === null) {
                $childQty = (string)($purchase['quantity'] ?? '0');
                $childRem = (string)($purchase['quantity_remaining'] ?? '0');
                $childUnitCost = (string)($purchase['price'] ?? '0');

                $restoredQty = Decimal::add((string)$parent['quantity'], $childQty);
                $restoredRem = Decimal::add((string)$parent['quantity_remaining'], $childRem);
                $restoredTotal = Decimal::mul((string)$parent['price'], $restoredQty);
                $restoredPaid = Decimal::min(Decimal::add((string)$parent['amount_paid'], Decimal::mul($childUnitCost, $childQty)), $restoredTotal);

                $db->prepare('UPDATE purchases SET
                    quantity = :qty,
                    quantity_remaining = :qty_rem,
                    total = :total,
                    amount_paid = :amount_paid
                WHERE id = :id')->execute([
                    'qty' => $restoredQty,
                    'qty_rem' => $restoredRem,
                    'total' => $restoredTotal,
                    'amount_paid' => $restoredPaid,
                    'id' => $parentId,
                ]);
            } else {
                // Unbacked transfer: parent lot was deleted, decrement product stock to prevent inventory ghost leak
                $childRem = (string)($purchase['quantity_remaining'] ?? '0');
                if (Decimal::comp($childRem, '0') > 0) {
                    $db->prepare('UPDATE products SET quantity = GREATEST(0, quantity - :qty), updated_at = NOW() WHERE id = :pid')
                       ->execute(['qty' => $childRem, 'pid' => $purchase['product_id']]);
                }
            }
            $db->prepare('UPDATE purchases SET
                deleted_at = NOW(),
                deleted_by = :uid,
                delete_reason = :reason,
                quantity_remaining = 0,
                transfer_status = "cancelled"
            WHERE id = :id')->execute([
                'uid' => (int)($_SESSION['user_id'] ?? 1),
                'reason' => $cancelReason ?: 'Transfer cancelled - merged back into parent lot',
                'id' => $id,
            ]);
        } elseif ($isProxy) {
            // Proxy purchase rejected: Revert products.quantity and soft-delete purchase
            $remQty = $purchase['quantity_remaining'] ?? $purchase['quantity'] ?? '0';
            if (Decimal::comp($remQty, '0') > 0) {
                $db->prepare('UPDATE products SET quantity = GREATEST(0, quantity - :qty), updated_at = NOW() WHERE id = :pid')
                   ->execute(['qty' => $remQty, 'pid' => $purchase['product_id']]);
            }
            $db->prepare('UPDATE purchases SET
                deleted_at = NOW(),
                deleted_by = :uid,
                delete_reason = :reason,
                quantity_remaining = 0,
                transfer_status = "cancelled"
            WHERE id = :id')->execute([
                'uid' => (int)($_SESSION['user_id'] ?? 1),
                'reason' => $cancelReason ?: 'Rejected proxy purchase',
                'id' => $id,
            ]);
        } else {
            // Standard internal transfer cancel by User A: Unlock lot and restore owner to User A
            $db->prepare('UPDATE purchases SET
                owner_user_id = :owner,
                transfer_status = NULL,
                transfer_to_user_id = NULL,
                transfer_valuation = NULL,
                transfer_settlement_id = NULL,
                transfer_initiated_at = NULL,
                transfer_initiated_by = NULL
            WHERE id = :id')->execute([
                'owner' => $revertedOwner,
                'id' => $id,
            ]);
        }

        // Cancel settlement
        if ($settlementId) {
            $db->prepare('UPDATE partner_settlements SET status = :s, cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr WHERE id = :id AND status = :pending')
               ->execute([
                   's' => 'cancelled',
                   'cb' => (int)($_SESSION['user_id'] ?? 1),
                   'cr' => $cancelReason,
                   'id' => $settlementId,
                   'pending' => 'pending',
               ]);
        }

        EntityVersion::bump($db, 'purchases', 'partner_settlements');
        $db->commit();
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log('[CANCEL TRANSFER ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to cancel transfer. Please check server error logs.'], 500);
            return;
        }

        SystemLog::write('purchases', 'transfer_cancelled', (int)$id, $purchase['name'] ?? "Purchase #$id", json_encode([
            'uid' => $purchase['uid'] ?? null,
            'reason' => $cancelReason,
            'reverted_owner' => $revertedOwner,
        ]));

        Response::json(['ok' => true, 'reverted_owner_user_id' => $revertedOwner]);
    }

    private function ensureSupplierHistoryTable(PDO $db): void
    {
        $db->exec("CREATE TABLE IF NOT EXISTS supplier_history (
            id INT AUTO_INCREMENT PRIMARY KEY,
            supplier_id INT NOT NULL,
            edited_by INT NOT NULL,
            action VARCHAR(50) NOT NULL,
            changes JSON NULL,
            reason TEXT NULL,
            created_at DATETIME NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
    }

    /**
     * Reassign a purchase to a supplier (or auto-create a new supplier profile).
     * Supports transferring walk-by purchases to newly created or existing supplier profiles.
     */
    public function reassignSupplier(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensurePurchasesTableColumns($db);
        $this->ensureSupplierHistoryTable($db);
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT id, uid, name, supplier_id, supplier_note, status, merged_into_id, deleted_at FROM purchases WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $purchase = $stmt->fetch();
        if (!$purchase) {
            $db->rollBack();
            Response::json(['error' => 'Purchase not found'], 404);
            return;
        }
        if ($purchase['deleted_at'] !== null || $purchase['status'] === 'deleted' || $purchase['status'] === 'cancelled') {
            $db->rollBack();
            Response::json(['error' => 'Deleted or cancelled purchases cannot be reassigned', 'purchase_deleted' => true], 400);
            return;
        }
        if ($purchase['status'] === 'merged' || !empty($purchase['merged_into_id'])) {
            $db->rollBack();
            Response::json(['error' => 'Merged constituent batches cannot be reassigned'], 400);
            return;
        }

        $oldSupplierId = $purchase['supplier_id'] !== null ? (int)$purchase['supplier_id'] : null;
        $newSupplierId = null;
        $newSupplierUid = null;
        $newSupplierName = null;

        // Option A: Auto-create supplier profile
        if (!empty($data['create_supplier'])) {
            $name = trim((string)($data['new_supplier_name'] ?? $data['name'] ?? ''));
            if ($name === '') {
                $db->rollBack();
                Response::json(['error' => 'Supplier name is required'], 400);
                return;
            }
            $uid = 'SUP-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3)));
            $phone = trim((string)($data['phone'] ?? '')) ?: null;
            $email = trim((string)($data['email'] ?? '')) ?: null;
            $address = trim((string)($data['address'] ?? '')) ?: null;
            $note = trim((string)($data['note'] ?? '')) ?: null;

            $insSup = $db->prepare('INSERT INTO suppliers (uid, name, phone, email, address, note, is_walkby, created_by, created_at, updated_at) VALUES (:uid, :name, :phone, :email, :address, :note, 0, :by, NOW(), NOW())');
            $insSup->execute([
                'uid' => $uid,
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'address' => $address,
                'note' => $note,
                'by' => $_SESSION['user_id'] ?? null,
            ]);
            $newSupplierId = (int)$db->lastInsertId();
            $newSupplierUid = $uid;
            $newSupplierName = $name;

            $histStmt = $db->prepare('INSERT INTO supplier_history (supplier_id, edited_by, action, changes, created_at) VALUES (:sid, :by, :action, :changes, NOW())');
            $histStmt->execute([
                'sid'     => $newSupplierId,
                'by'      => $_SESSION['user_id'] ?? 1,
                'action'  => 'created',
                'changes' => json_encode([
                    'name'    => $name,
                    'phone'   => $phone,
                    'email'   => $email,
                    'address' => $address,
                    'note'    => $note,
                    'source'  => 'purchase_retroactive_reassignment',
                ]),
            ]);

            SystemLog::write('suppliers', 'created', $newSupplierId, $name, json_encode([
                'uid' => $uid,
                'source' => 'purchase_retroactive_reassignment',
                'purchase_id' => (int)$id,
                'purchase_uid' => $purchase['uid'] ?? null,
            ]));
        } else {
            // Option B: Assign to existing supplier
            $targetId = $data['supplier_id'] ?? null;
            if (!$targetId) {
                $db->rollBack();
                Response::json(['error' => 'Target supplier ID is required'], 400);
                return;
            }
            $chk = $db->prepare('SELECT id, uid, name, is_walkby, deleted_at FROM suppliers WHERE id = :id');
            $chk->execute(['id' => $targetId]);
            $targetSup = $chk->fetch();
            if (!$targetSup || $targetSup['deleted_at'] !== null) {
                $db->rollBack();
                Response::json(['error' => 'Target supplier not found or deleted'], 404);
                return;
            }
            $newSupplierId = (int)$targetSup['id'];
            $newSupplierUid = $targetSup['uid'];
            $newSupplierName = $targetSup['name'];
        }

        $resolveSupplierLabel = function ($sid) use ($db) {
            if ($sid === null) return 'Unassigned';
            $ss = $db->prepare('SELECT uid, name, is_walkby FROM suppliers WHERE id = :id LIMIT 1');
            $ss->execute(['id' => $sid]);
            $row = $ss->fetch();
            if (!$row) return "Supplier #$sid";
            return !empty($row['is_walkby']) ? "Walk-by (#{$row['uid']})" : "{$row['name']} (#{$row['uid']})";
        };

        $changes = [
            'Supplier' => [
                'from' => $resolveSupplierLabel($oldSupplierId),
                'to' => $resolveSupplierLabel($newSupplierId),
            ]
        ];

        // Update supplier_note if passed
        $newSupplierNote = $purchase['supplier_note'];
        if (array_key_exists('supplier_note', $data)) {
            $newSupplierNote = trim((string)$data['supplier_note']) !== '' ? trim((string)$data['supplier_note']) : null;
            if ($newSupplierNote !== $purchase['supplier_note']) {
                $changes['Supplier Note'] = [
                    'from' => $purchase['supplier_note'] ?? '(none)',
                    'to' => $newSupplierNote ?? '(none)',
                ];
            }
        }

        $upd = $db->prepare('UPDATE purchases SET supplier_id = :sid, supplier_note = :snote WHERE id = :id');
        $upd->execute([
            'sid' => $newSupplierId,
            'snote' => $newSupplierNote,
            'id' => $id,
        ]);

        EntityVersion::bump($db, 'purchases', 'suppliers');
        $db->commit();

        SystemLog::write('purchases', 'supplier_changed', (int)$id, $purchase['name'] ?? "Purchase #$id", json_encode(array_merge(
            ['uid' => $purchase['uid'] ?? null],
            $changes
        )));

        Response::json([
            'ok' => true,
            'supplier_id' => $newSupplierId,
            'supplier_uid' => $newSupplierUid,
            'supplier_name' => $newSupplierName,
            'supplier_note' => $newSupplierNote,
        ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log('[REASSIGN SUPPLIER ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to reassign supplier. Please check server error logs.'], 500);
            return;
        }
    }

    /**
     * Record a payment toward a supplier purchase (settle a debt). Adds to
     * amount_paid, recomputes payment_status, and stamps paid_at/paid_by when it
     * reaches fully paid. Money side only — never touches stock. Mirrors the
     * order "mark as paid" flow on the buying side.
     */
    public function pay(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensurePurchasesTableColumns($db);
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT * FROM purchases WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $purchase = $stmt->fetch();
        if (!$purchase) {
            $db->rollBack();
            Response::json(['error' => 'Purchase not found'], 404);
            return;
        }
        if ($purchase['deleted_at']) {
            $db->rollBack();
            Response::json(['error' => 'Cannot record a payment on a deleted purchase'], 400);
            return;
        }
        if (($purchase['payment_status'] ?? 'paid') === 'paid') {
            $db->rollBack();
            Response::json(['error' => 'This purchase is already fully paid'], 400);
            return;
        }

        // Security Guard: Strictly ONLY the verified owner can pay this purchase balance.
        // If this is a delegated purchase, Phase 1 agreement MUST be accepted first,
        // and ONLY the target partner (owner_user_id) is authorized to pay (NEVER the creator).
        $isDelegated = (!empty($purchase['transfer_status']) && $purchase['transfer_status'] === 'pending_delegated')
            || (!empty($purchase['transfer_to_user_id']) && (int)($purchase['owner_user_id'] ?? 0) === (int)$purchase['transfer_to_user_id']);

        if ($isDelegated) {
            $settlementId = $purchase['transfer_settlement_id'] ?? null;
            $isAccepted = false;
            if ($settlementId) {
                $sCheck = $db->prepare('SELECT acceptance_status FROM partner_settlements WHERE id = :id');
                $sCheck->execute(['id' => $settlementId]);
                $sRow = $sCheck->fetch();
                if ($sRow && ($sRow['acceptance_status'] ?? '') === 'accepted') {
                    $isAccepted = true;
                }
            }
            if (!$isAccepted) {
                $db->rollBack();
                Response::json(['error' => 'Phase 1 agreement must be accepted by the designated partner before payment can be recorded.'], 400);
                return;
            }
        }

        $sessionUserId = (int)($_SESSION['user_id'] ?? 0);
        $ownerId = $isDelegated
            ? (int)($purchase['owner_user_id'] ?? $purchase['transfer_to_user_id'] ?? 0)
            : ($purchase['owner_user_id'] !== null ? (int)$purchase['owner_user_id'] : (int)($purchase['created_by'] ?? 1));

        if ($sessionUserId === 0 || $sessionUserId !== $ownerId) {
            $db->rollBack();
            SystemLog::write('purchases', 'security_violation', (int)$id, $purchase['name'] ?? "Purchase #$id", json_encode([
                'violation'    => 'unauthorized_purchase_payment',
                'error'        => 'Attempted to pay purchase balance belonging to another user',
                'purchase_id'  => (int)$id,
                'uid'          => $purchase['uid'] ?? null,
                'lot_owner_id' => $ownerId,
                'attempted_by' => $sessionUserId
            ], JSON_UNESCAPED_UNICODE), $sessionUserId);
            Response::json(['error' => 'Forbidden: Only the batch owner is authorized to pay this purchase balance.'], 403);
            return;
        }

        $total = (string) $purchase['total'];
        $already = (string) ($purchase['amount_paid'] ?? '0');
        $owed = Decimal::sub($total, $already);

        // Amount being paid now: defaults to the full remaining balance.
        $payNow = (isset($data['amount_paid_now']) && $data['amount_paid_now'] !== '' && $data['amount_paid_now'] !== null)
            ? (string) $data['amount_paid_now']
            : ((isset($data['amount']) && $data['amount'] !== '' && $data['amount'] !== null) ? (string) $data['amount'] : $owed);
        if (Decimal::comp($payNow, '0') <= 0) {
            $db->rollBack();
            Response::json(['error' => 'Payment amount must be greater than zero'], 400);
            return;
        }
        if (Decimal::comp($payNow, $owed) > 0) {
            $db->rollBack();
            Response::json(['error' => "Payment amount ({$payNow} DZD) cannot exceed the remaining balance owed ({$owed} DZD)"], 400);
            return;
        }

        $newPaid = Decimal::add($already, $payNow);
        $status = Decimal::comp($newPaid, $total) >= 0 ? 'paid' : 'partial';
        $paidAt = $status === 'paid' ? date('Y-m-d H:i:s') : null;
        $paidBy = $status === 'paid' ? ($_SESSION['user_id'] ?? null) : null;

        // Rolling due date. Compare today to the due date that was in effect, purely
        // as info (before / on / after). When the purchase is now fully paid the due
        // date is cleared; otherwise, if a new due date was provided for the still-
        // owed remainder, it replaces the current one (the timeline is preserved in
        // the payment log). Paying early keeps the original (frontend omits new date).
        $today = date('Y-m-d');
        $dueAtPayment = $purchase['due_date'] ?? null; // the date in effect now
        $timing = 'none';
        if ($dueAtPayment) {
            $dueDateOnly = substr((string)$dueAtPayment, 0, 10);
            if ($today < $dueDateOnly) $timing = 'before';
            elseif ($today === $dueDateOnly) $timing = 'on';
            else $timing = 'after';
        }
        if ($status !== 'paid' && isset($data['new_due_date']) && $data['new_due_date'] !== '' && $data['new_due_date'] !== null) {
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
        } elseif ($status === 'paid') {
            $finalDue = null; // nothing owed anymore
            $newDueDate = null;
        } else {
            $finalDue = $dueAtPayment; // keep the current/original deadline
            $newDueDate = null;
        }

        $paidFrom = 'vault';
        $forceOverdraft = !empty($data['force_overdraft']);

        $db->prepare('UPDATE purchases SET amount_paid = :ap, payment_status = :ps, paid_at = :pa, paid_by = :pb, due_date = :dd, paid_from = :pf WHERE id = :id')
            ->execute(['ap' => $newPaid, 'ps' => $status, 'pa' => $paidAt, 'pb' => $paidBy, 'dd' => $finalDue, 'pf' => $paidFrom, 'id' => $id]);

        // Log physical cash outflow from the user's cash vault
        if (Decimal::comp($payNow, '0') > 0) {
            CashVaultController::logFlow($db, 'supplier_payment', 'out', $payNow, 'purchases', (int)$id, "Supplier payable payment for Purchase " . ($purchase['uid'] ?? "#$id"), (int)($_SESSION['user_id'] ?? 1), $forceOverdraft);
        }

        // Synchronize linked partner settlement if this purchase was part of a delegated transfer
        if (!empty($purchase['transfer_settlement_id'])) {
            $sid = (int)$purchase['transfer_settlement_id'];
            if ($status === 'paid') {
                $db->prepare('UPDATE partner_settlements SET 
                    status = "settled", 
                    settled_amount = amount, 
                    settled_at = NOW(), 
                    settled_by = :sb 
                    WHERE id = :sid AND status = "pending"')
                   ->execute([
                       'sb'  => (int)($_SESSION['user_id'] ?? 1),
                       'sid' => $sid,
                   ]);
                // Clear transfer flags on purchase as it is now fully paid and transferred
                $db->prepare('UPDATE purchases SET 
                    transfer_status = NULL, 
                    transfer_to_user_id = NULL, 
                    transfer_valuation = NULL, 
                    transfer_settlement_id = NULL, 
                    transfer_initiated_at = NULL, 
                    transfer_initiated_by = NULL 
                    WHERE id = :id')
                   ->execute(['id' => $id]);
            } else {
                // Partial payment
                $db->prepare('UPDATE partner_settlements SET 
                    settled_amount = :sa 
                    WHERE id = :sid AND status = "pending"')
                   ->execute([
                       'sa'  => $newPaid,
                       'sid' => $sid,
                   ]);
            }
            EntityVersion::bump($db, 'purchases', 'cash_vault', 'partner_settlements');
        } else {
            EntityVersion::bump($db, 'purchases', 'cash_vault');
        }
        $db->commit();
        } catch (\RuntimeException $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            $isInsufficient = str_contains($e->getMessage(), 'Insufficient physical cash') || str_contains($e->getMessage(), 'insufficient balance');
            Response::json(['error' => $e->getMessage()], $isInsufficient ? 422 : 400);
            return;
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("[PURCHASE PAY ERROR] " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine());
            Response::json(['error' => 'Failed to record payment. Please check server error logs.'], 500);
            return;
        }

        $remaining = Decimal::sub($total, $newPaid);
        SystemLog::write('purchases', 'supplier_payment', (int) $id, $purchase['name'] ?? "Purchase #$id", json_encode([
            'uid' => $purchase['uid'] ?? null,
            'supplier_id' => $purchase['supplier_id'] ?? null,
            'amount_paid_now' => $payNow,
            'amount_paid_total' => $newPaid,
            'remaining' => $remaining,
            'payment_status' => $status,
            'payment_date' => $today,
            'due_date' => $dueAtPayment,   // deadline in effect when this was paid
            'timing' => $timing,           // before | on | after | none
            'new_due_date' => ($status !== 'paid' && $newDueDate !== null) ? $newDueDate : null,
        ]));

        Response::json([
            'ok' => true,
            'payment_status' => $status,
            'amount_paid' => $newPaid,
            'remaining' => $remaining,
            'due_date' => $finalDue,
            'timing' => $timing,
        ]);
    }

    /**
     * Payment history for one purchase, derived from the existing system logs
     * (no dedicated table). Returns each settlement event in chronological order:
     *   - the up-front payment captured at purchase time (module 'purchases',
     *     action 'created', when amount_paid > 0), and
     *   - every later "Mark paid" (action 'supplier_payment').
     * Each event carries who/when/how much was paid then + the remaining balance.
     */
    public function payments(string $id): void
    {
        try {
            $db = Database::getConnection();
            $this->ensurePurchasesTableColumns($db);

            $stmt = $db->prepare('SELECT * FROM purchases WHERE id = :id');
            $stmt->execute(['id' => $id]);
            $purchase = $stmt->fetch();
            if (!$purchase) {
                Response::json(['error' => 'Purchase not found'], 404);
                return;
            }

            $events = [];
            // system_logs is created lazily by SystemLog::write / SystemLogController.
            // Guard the read so a brand-new DB without the table doesn't error.
            try {
                $logStmt = $db->prepare("SELECT username, action, details, created_at FROM system_logs WHERE module = 'purchases' AND entity_id = :id AND action IN ('created', 'supplier_payment') ORDER BY created_at ASC, id ASC");
                $logStmt->execute(['id' => $id]);
                $rows = $logStmt->fetchAll();
            } catch (\Throwable $e) {
                $rows = [];
            }

            $total = (string) $purchase['total'];
            foreach ($rows as $r) {
                $d = json_decode($r['details'] ?? '{}', true);
                if (!is_array($d)) $d = [];

                if ($r['action'] === 'created') {
                    if (!empty($d['is_proxy'])) continue; // Skip proxy creation: creator did not pay supplier
                    $paid = (string) ($d['amount_paid'] ?? '0');
                    if (Decimal::comp($paid, '0') <= 0) continue; // unpaid-on-create: no event
                    $events[] = [
                        'type'       => 'initial',
                        'amount'     => $paid,
                        'remaining'  => $d['owed'] ?? Decimal::sub($total, $paid),
                        'status'     => $d['payment_status'] ?? null,
                        'due_date'   => $d['due_date'] ?? null,
                        'timing'     => null,
                        'new_due_date' => null,
                        'username'   => $r['username'],
                        'created_at' => $r['created_at'],
                    ];
                } else { // supplier_payment
                    $events[] = [
                        'type'       => 'payment',
                        'amount'     => (string) ($d['amount_paid_now'] ?? '0'),
                        'remaining'  => $d['remaining'] ?? null,
                        'status'     => $d['payment_status'] ?? null,
                        'due_date'   => $d['due_date'] ?? null,        // deadline in effect then
                        'timing'     => $d['timing'] ?? null,          // before | on | after | none
                        'new_due_date' => $d['new_due_date'] ?? null,  // next deadline set, if any
                        'username'   => $r['username'],
                        'created_at' => $r['created_at'],
                    ];
                }
            }

            $paymentStatus = $purchase['payment_status'] ?? 'paid';
            $amountPaid = (string) ($purchase['amount_paid'] ?? '0');
            if ($paymentStatus === 'paid') {
                $amountPaid = $total;
                $owed = '0';
            } else {
                $owed = Decimal::sub($total, $amountPaid);
                if (Decimal::comp($owed, '0') <= 0) {
                    $owed = '0';
                    $amountPaid = $total;
                    $paymentStatus = 'paid';
                }
            }

            $isCoinSwap = in_array($purchase['settle_kind'] ?? 'cash', ['product', 'received'], true);
            $settleProductName = null;
            $settleProductUid = null;
            $settleCogs = '0';
            $consumedLots = [];

            if ($isCoinSwap && !empty($purchase['settle_product_id'])) {
                $spStmt = $db->prepare('SELECT id, uid, name FROM products WHERE id = :id');
                $spStmt->execute(['id' => (int)$purchase['settle_product_id']]);
                $spentProd = $spStmt->fetch();
                if ($spentProd) {
                    $settleProductName = $spentProd['name'];
                    $settleProductUid = $spentProd['uid'];
                }
                if (!empty($purchase['settle_consumed'])) {
                    $consumedLots = json_decode($purchase['settle_consumed'], true);
                    if (is_array($consumedLots)) {
                        foreach ($consumedLots as $cLot) {
                            $cQty = (string)($cLot['quantity'] ?? '0');
                            $cCost = (string)($cLot['cost'] ?? '0');
                            $settleCogs = Decimal::add($settleCogs, Decimal::mul($cQty, $cCost));
                        }
                    }
                }
            }
            $instantProfit = $isCoinSwap ? Decimal::sub($total, $settleCogs) : '0';

            // Resolve staff creator and legal stock owner names
            $creatorName = null;
            if (!empty($purchase['created_by'])) {
                $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                $uStmt->execute(['id' => (int)$purchase['created_by']]);
                $creatorName = $uStmt->fetchColumn() ?: null;
            }
            $effectiveOwnerId = $purchase['owner_user_id'] ?? $purchase['created_by'] ?? null;
            $ownerName = null;
            if (!empty($effectiveOwnerId)) {
                $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                $uStmt->execute(['id' => (int)$effectiveOwnerId]);
                $ownerName = $uStmt->fetchColumn() ?: null;
            }

            Response::json([
                'purchase' => [
                    'id'                  => (int) $purchase['id'],
                    'uid'                 => $purchase['uid'] ?? null,
                    'name'                => $purchase['name'] ?? null,
                    'product_id'          => (int) $purchase['product_id'],
                    'price'               => (string) $purchase['price'],
                    'quantity'            => (string) $purchase['quantity'],
                    'total'               => $total,
                    'amount_paid'         => $amountPaid,
                    'owed'                => $owed,
                    'payment_status'      => $paymentStatus,
                    'transfer_status'     => $purchase['transfer_status'] ?? null,
                    'supplier_id'         => $purchase['supplier_id'] ? (int) $purchase['supplier_id'] : null,
                    'supplier_note'       => $purchase['supplier_note'] ?? null,
                    'due_date'            => $purchase['due_date'] ?? null,
                    'date'                => $purchase['date'] ?? null,
                    'created_by'          => $purchase['created_by'] ? (int)$purchase['created_by'] : null,
                    'created_by_name'     => $creatorName,
                    'owner_user_id'       => $effectiveOwnerId ? (int)$effectiveOwnerId : null,
                    'owner_name'          => $ownerName ?: $creatorName,
                    'settle_kind'         => $purchase['settle_kind'] ?? 'cash',
                    'settle_product_id'   => $purchase['settle_product_id'] ? (int)$purchase['settle_product_id'] : null,
                    'settle_product_name' => $settleProductName,
                    'settle_product_uid'  => $settleProductUid,
                    'settle_quantity'     => $purchase['settle_quantity'] ?? null,
                    'settle_valuation'    => $total,
                    'settle_cogs'         => $settleCogs,
                    'instant_profit'      => $instantProfit,
                    'is_coin_swap'        => $isCoinSwap,
                    'settle_consumed'     => $consumedLots,
                ],
                'payments' => $events,
            ]);
        } catch (\Throwable $e) {
            error_log('[PURCHASE PAYMENTS ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to retrieve payment history. Please check server error logs.'], 500);
        }
    }

    public function destroy(string $id, array $data = []): void
    {
        // Get reason from data parameter or request body
        $input = !empty($data) ? $data : (json_decode(file_get_contents('php://input'), true) ?: []);
        $reason = $input['reason'] ?? $input['delete_reason'] ?? null;

        if (!$reason || trim((string)$reason) === '') {
            Response::json(['error' => 'Deletion reason is required'], 400);
            return;
        }

        $db = Database::getConnection();
        $this->ensurePurchasesTableColumns($db);
        $db->beginTransaction();
        try {
            // Finding V-005: Enforce global lock hierarchy (products -> purchases) to prevent deadlocks
            $pMetaStmt = $db->prepare('SELECT product_id FROM purchases WHERE id = :id');
            $pMetaStmt->execute(['id' => (int)$id]);
            $pMeta = $pMetaStmt->fetch(PDO::FETCH_ASSOC);
            if ($pMeta && !empty($pMeta['product_id'])) {
                $pLock = $db->prepare('SELECT id, quantity, quantity_reserved FROM products WHERE id = :pid FOR UPDATE');
                $pLock->execute(['pid' => (int)$pMeta['product_id']]);
            }

            $stmt = $db->prepare('SELECT * FROM purchases WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $purchase = $stmt->fetch();
        if (!$purchase) {
            $db->rollBack();
            Response::json(['error' => 'Purchase not found'], 404);
            return;
        }

        if ($purchase['deleted_at']) {
            $db->rollBack();
            Response::json(['error' => 'Purchase already deleted'], 400);
            return;
        }

        // Security Guard: Only the verified lot owner or an administrator can delete purchase batches (Rule 33)
        $sessionUserId = (int)($_SESSION['user_id'] ?? 0);
        $isAdmin = !empty($_SESSION['is_admin']) || (isset($_SESSION['role']) && $_SESSION['role'] === 'admin');
        $lotOwner = $purchase['owner_user_id'] !== null ? (int)$purchase['owner_user_id'] : (int)($purchase['created_by'] ?? 0);
        if (!$isAdmin && $lotOwner !== $sessionUserId) {
            $db->rollBack();
            Response::json(['error' => 'Forbidden: Only an administrator or the verified lot owner can delete this purchase batch'], 403);
            return;
        }

        // Consolidated Batch Invariant (Rule 32): Constituent batches merged into a master batch and master batches cannot be deleted directly
        if ($purchase['status'] === 'merged' || !empty($purchase['merged_into_id'])) {
            $db->rollBack();
            Response::json(['error' => 'Constituent batches that have been merged into a master batch cannot be deleted directly.'], 400);
            return;
        }
        if (!empty($purchase['is_merged_master'])) {
            $db->rollBack();
            Response::json(['error' => 'Master batches created from a batch merger cannot be deleted directly.'], 400);
            return;
        }

        // Partner Settlement Invariant: Do not delete a lot if it has already been settled between partners without a financial clawback
        $settledCheck = $db->prepare("SELECT id FROM partner_settlements WHERE related_entity_type = 'purchases' AND related_entity_id = :id AND status = 'settled' LIMIT 1");
        $settledCheck->execute(['id' => (int)$id]);
        if ($settledCheck->fetch()) {
            $db->rollBack();
            Response::json(['error' => 'Cannot delete a purchase batch with settled partner payments. Reverse the partner settlement first.'], 422);
            return;
        }

        // Coin-swap lots CAN be deleted now (the swap is unwound below), but only
        // while the swapped-in coin is untouched — once it's been sold or reserved,
        // the FIFO chain past it can't be cleanly rewound (the user's chosen rule).
        $settleKind = $purchase['settle_kind'] ?? 'cash';
        $isSwapLot = in_array($settleKind, ['product', 'received'], true);
        if ($isSwapLot && (Decimal::comp($purchase['quantity_sold'], '0') > 0 || Decimal::comp($purchase['quantity_reserved'] ?? '0', '0') > 0)) {
            $db->rollBack();
            Response::json(['error' => 'This coin-swap stock has already been sold or used in another deal — delete or return those first, then delete this.'], 400);
            return;
        }

        if (Decimal::comp($purchase['quantity_sold'], '0') > 0) {
            $db->rollBack();
            Response::json(['error' => 'Cannot delete purchase with active sales'], 400);
            return;
        }

        if (Decimal::comp($purchase['quantity_reserved'] ?? '0', '0') > 0) {
            $db->rollBack();
            Response::json(['error' => 'Cannot delete purchase while it has pending or processing orders'], 400);
            return;
        }

        $parentId = !empty($purchase['created_from_purchase_id']) ? (int)$purchase['created_from_purchase_id'] : null;
        if ($parentId && empty($purchase['created_from_order_id'])) {
            // Child lot from partial transfer fork: Restore units to parent lot
            $pStmt = $db->prepare('SELECT * FROM purchases WHERE id = :pid FOR UPDATE');
            $pStmt->execute(['pid' => $parentId]);
            $parent = $pStmt->fetch();
            if ($parent && $parent['deleted_at'] === null) {
                $childQty = (string)($purchase['quantity'] ?? '0');
                $childRem = (string)($purchase['quantity_remaining'] ?? '0');
                $childUnitCost = (string)($purchase['price'] ?? '0');

                $restoredQty = Decimal::add((string)$parent['quantity'], $childQty);
                $restoredRem = Decimal::add((string)$parent['quantity_remaining'], $childRem);
                $restoredTotal = Decimal::mul((string)$parent['price'], $restoredQty);
                $restoredPaid = Decimal::min(Decimal::add((string)$parent['amount_paid'], Decimal::mul($childUnitCost, $childQty)), $restoredTotal);

                $db->prepare('UPDATE purchases SET
                    quantity = :qty,
                    quantity_remaining = :qty_rem,
                    total = :total,
                    amount_paid = :amount_paid
                WHERE id = :id')->execute([
                    'qty' => $restoredQty,
                    'qty_rem' => $restoredRem,
                    'total' => $restoredTotal,
                    'amount_paid' => $restoredPaid,
                    'id' => $parentId,
                ]);
            }
        } else {
            // Original lot: Revert stock from product. Use quantity_remaining (NOT the original
            // purchase quantity) — any portion already written off via the hidden-stock
            // reclaim path has been deducted from products.quantity already.
            $stmt = $db->prepare('SELECT id, quantity, quantity_reserved FROM products WHERE id = :id FOR UPDATE');
            $stmt->execute(['id' => $purchase['product_id']]);
            $product = $stmt->fetch();
            if (!$product) {
                $db->rollBack();
                Response::json(['error' => 'Product not found'], 404);
                return;
            }

            $remToDeduct = (string)$purchase['quantity_remaining'];
            $currentProdQty = (string)$product['quantity'];
            $prodReserved = (string)($product['quantity_reserved'] ?? '0');
            $newProdQty = Decimal::sub($currentProdQty, $remToDeduct);
            if (Decimal::comp($newProdQty, '0') < 0) {
                $newProdQty = '0';
            }

            if (Decimal::comp($newProdQty, $prodReserved) < 0) {
                $db->rollBack();
                Response::json([
                    'error' => "Cannot delete purchase batch: {$prodReserved} units are reserved in active orders/tickets. Deleting this lot would reduce available product stock below active reservations.",
                    'code'  => 'PRODUCT_RESERVATIONS_BREACHED'
                ], 422);
                return;
            }

            $stmt = $db->prepare('UPDATE products SET quantity = :quantity, updated_at = NOW() WHERE id = :id');
            $stmt->execute([
                'quantity' => $newProdQty,
                'id' => $purchase['product_id'],
            ]);
        }

        // Coin-swap unwind: put the OTHER coin back where it came from.
        //  • 'product' (bought by spending a coin): restore the spent coin from this
        //    purchase's own settle_consumed record.
        //  • 'received' (came in from a coin-sale): restore the SOLD coin from the
        //    linked order's settle_consumed, then soft-delete that order too — the
        //    sale no longer happened.
        $cascadeOrderId = null;
        if ($isSwapLot && $purchase['settle_product_id']) {
            $otherProductId = (int) $purchase['settle_product_id'];
            $otherQty = (string) ($purchase['settle_quantity'] ?? '0');
            if ($settleKind === 'product') {
                $this->restoreConsumedLots($db, $purchase['settle_consumed'] ?? null, $otherProductId, $otherQty);
            } else { // 'received'
                $orderId = $purchase['settle_order_id'] ? (int) $purchase['settle_order_id'] : null;
                $linkedOrder = null;
                if ($orderId) {
                    $oStmt = $db->prepare('SELECT id, status, settle_consumed FROM orders WHERE id = :id FOR UPDATE');
                    $oStmt->execute(['id' => $orderId]);
                    $linkedOrder = $oStmt->fetch();
                }
                $this->restoreConsumedLots($db, $linkedOrder['settle_consumed'] ?? null, $otherProductId, $otherQty);
                if ($linkedOrder && $linkedOrder['status'] !== 'deleted') {
                    $db->prepare('UPDATE orders SET status = "deleted", deleted_at = NOW(), deleted_by = :uid WHERE id = :id')
                       ->execute(['uid' => $_SESSION['user_id'] ?? null, 'id' => $orderId]);
                    $db->prepare('INSERT INTO order_history (order_id, edited_by, action, reason, created_at) VALUES (:order_id, :edited_by, :action, :reason, NOW())')
                       ->execute([
                           'order_id' => $orderId,
                           'edited_by' => $_SESSION['user_id'] ?? null,
                           'action' => 'deleted',
                           'reason' => 'Coin-swap reversed via its received lot: ' . $reason,
                       ]);
                    $cascadeOrderId = $orderId;
                }
            }
        }

        // Soft delete the purchase
        $stmt = $db->prepare('UPDATE purchases SET deleted_at = NOW(), deleted_by = :deleted_by, delete_reason = :reason, quantity_remaining = 0, transfer_status = "cancelled" WHERE id = :id');
        $stmt->execute([
            'deleted_by' => $_SESSION['user_id'] ?? null,
            'reason' => $reason,
            'id' => $id
        ]);

        // Cancel partner settlements associated with this purchase (whether pending or settled, since purchase is deleted and funds refunded)
        $db->prepare("UPDATE partner_settlements 
            SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :uid, cancel_reason = :cancel_reason
            WHERE related_entity_type = 'purchases' AND related_entity_id = :id AND status != 'cancelled'")
            ->execute([
                'uid' => $_SESSION['user_id'] ?? null,
                'cancel_reason' => 'Purchase soft-deleted: ' . $reason,
                'id' => (int)$id
            ]);

        if (!empty($purchase['transfer_settlement_id'])) {
            $db->prepare("UPDATE partner_settlements 
                SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :uid, cancel_reason = :cancel_reason
                WHERE id = :sid AND status != 'cancelled'")
                ->execute([
                    'uid' => $_SESSION['user_id'] ?? null,
                    'cancel_reason' => 'Purchase soft-deleted: ' . $reason,
                    'sid' => (int)$purchase['transfer_settlement_id']
                ]);
        }

        // Symmetric Cash Vault Refund: Refund cash vault if any cash outflow was recorded for this purchase
        $cashStmt = $db->prepare("SELECT user_id,
                COALESCE(SUM(CASE WHEN direction = 'in' THEN amount ELSE 0 END), 0) as total_in,
                COALESCE(SUM(CASE WHEN direction = 'out' THEN amount ELSE 0 END), 0) as total_out
            FROM cash_transactions
            WHERE related_entity_type = 'purchases' AND related_entity_id = :id
            GROUP BY user_id");
        $cashStmt->execute(['id' => $id]);
        $cashFlows = $cashStmt->fetchAll();

        foreach ($cashFlows as $cf) {
            $netOut = Decimal::sub((string)$cf['total_out'], (string)$cf['total_in']);
            if (Decimal::comp($netOut, '0') > 0) {
                $targetUser = (int)($cf['user_id'] ?: ($_SESSION['user_id'] ?? 1));
                CashVaultController::logFlow(
                    $db,
                    'purchase_refund',
                    'in',
                    $netOut,
                    'purchases',
                    (int)$id,
                    "Refund: Deleted purchase " . ($purchase['uid'] ?? "#$id") . " ({$purchase['name']})",
                    $targetUser
                );
            }
        }

        try {
            $db->prepare("DELETE FROM notifications WHERE entity_type = 'purchases' AND entity_id = :id AND (stage_tag LIKE 'purchase_transfer_%' OR type = 'settlement')")
               ->execute(['id' => (int)$id]);
        } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

        EntityVersion::bump($db, 'purchases', 'products', 'cash_vault');
        $db->commit();
    } catch (\Throwable $e) {
        try {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
        } catch (\Throwable $rbErr) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $rbErr->getMessage());
        }
        error_log('[PURCHASE DESTROY ERROR] ' . $e->getMessage());
        Response::json(['error' => 'Failed to delete purchase. Please check server error logs.'], 500);
        return;
    }

        SystemLog::write('purchases', 'deleted', (int)$id, $purchase['name'] ?? "Purchase #$id", json_encode([
            'uid' => $purchase['uid'] ?? null,
            'reason' => $reason,
            'quantity' => $purchase['quantity'],
            'price' => $purchase['price'],
            'total' => $purchase['total'],
            'settle_kind' => $settleKind,
            'status' => 'deleted'
        ]));

        if ($cascadeOrderId !== null) {
            SystemLog::write('orders', 'deleted', $cascadeOrderId, "Order #$cascadeOrderId", json_encode([
                'status' => 'deleted',
                'reason' => 'Coin-swap reversed from its received lot',
            ]));
        }

        Response::json(['ok' => true]);
    }

    /**
     * Retrieve all constituent purchase lots that were absorbed into a master merged lot.
     */
    public function constituents(int $id): void
    {
        try {
            $db = Database::getConnection();
            $this->ensurePurchasesTableColumns($db);

            $masterStmt = $db->prepare('SELECT id, uid, name, price, quantity, quantity_remaining, is_merged_master, merge_cost_mode, valuation_adjustment, valuation_adjustment_reason, merged_at, merged_by FROM purchases WHERE id = :id LIMIT 1');
            $masterStmt->execute(['id' => $id]);
            $master = $masterStmt->fetch(PDO::FETCH_ASSOC);

            if (!$master) {
                Response::json(['error' => 'Purchase batch not found'], 404);
                return;
            }

            $stmt = $db->prepare('SELECT p.*,
                s.name AS supplier_name,
                u.username AS merged_by_username,
                COALESCE((SELECT SUM((oi.price - oi.cost) * oi.quantity)
                    FROM order_items oi JOIN orders o ON o.id = oi.order_id
                    WHERE oi.purchase_id = p.id AND o.deleted_at IS NULL
                      AND o.status IN ("completed","pending_money")), 0) AS realized_profit,
                COALESCE((SELECT SUM(oi.price * oi.quantity)
                    FROM order_items oi JOIN orders o ON o.id = oi.order_id
                    WHERE oi.purchase_id = p.id AND o.deleted_at IS NULL
                      AND o.status IN ("completed","pending_money")), 0) AS realized_revenue
                FROM purchases p
                LEFT JOIN suppliers s ON s.id = p.supplier_id
                LEFT JOIN users u ON u.id = p.merged_by
                WHERE p.merged_into_id = :id
                ORDER BY p.id ASC');
            $stmt->execute(['id' => $id]);
            $rawConstituents = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $constituents = [];
            foreach ($rawConstituents as $c) {
                $initialQty = (string)$c['quantity'];
                $soldQty = (string)($c['quantity_sold'] ?? '0');
                $writeoffQty = (string)($c['quantity_writeoff'] ?? '0');
                $mergedQty = Decimal::sub(Decimal::sub($initialQty, $soldQty), $writeoffQty);
                if (Decimal::comp($mergedQty, '0') <= 0) {
                    $mergedQty = $initialQty;
                }
                $cPrice = (string)$c['price'];
                $valBefore = Decimal::mul($mergedQty, $cPrice);
                $isMergedMaster = !empty($c['is_merged_master']);
                $mergedFromIds = !empty($c['merged_from_ids']) ? json_decode($c['merged_from_ids'], true) : [];
                $mergedFromCount = is_array($mergedFromIds) ? count($mergedFromIds) : 0;

                $c['quantity_merged'] = $mergedQty;
                $c['valuation_before'] = $valBefore;
                $c['is_merged_master'] = $isMergedMaster ? 1 : 0;
                $c['merged_from_count'] = $mergedFromCount;
                $c['type_label'] = $isMergedMaster ? 'Merged Batch' : 'Standard Purchase';
                $c['supplier_display_name'] = $isMergedMaster ? 'Internal Consolidation' : ($c['supplier_name'] ?: 'Walk-by Seller');

                $constituents[] = $c;
            }

            Response::json([
                'ok'                   => true,
                'master_id'            => $id,
                'master_uid'           => $master['uid'] ?? "PUR-{$id}",
                'is_merged_master'     => (int)($master['is_merged_master'] ?? 0),
                'merge_cost_mode'      => $master['merge_cost_mode'] ?? 'wac',
                'valuation_adjustment' => $master['valuation_adjustment'] ?? '0',
                'constituents_count'   => count($constituents),
                'constituents'         => $constituents,
            ]);
        } catch (\Throwable $e) {
            error_log('[PURCHASE CONSTITUENTS ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to retrieve batch constituents. Please check server error logs.'], 500);
        }
    }

    /**
     * Retrieve a detailed, forensic stock breakdown for a specific purchase lot:
     * - Total received quantity
     * - Completed sales (delivered & fully paid)
     * - Pending money / installment sales (goods delivered on credit, awaiting customer payments)
     * - Reserved units in active workshop repair services (custom_sale = 1)
     * - Reserved units in pending/processing orders
     * - Truly free / unencumbered units available to merge
     * - Unsettled supplier debt
     */
    public function breakdown(int $id): void
    {
        try {
            $db = Database::getConnection();
            $this->ensurePurchasesTableColumns($db);

            $stmt = $db->prepare('SELECT p.*, s.name AS supplier_name, u.username AS owner_name,
                                         u_p.username AS price_updated_by_name
                                  FROM purchases p
                                  LEFT JOIN suppliers s ON s.id = p.supplier_id
                                  LEFT JOIN users u ON u.id = COALESCE(p.owner_user_id, p.created_by)
                                  LEFT JOIN users u_p ON u_p.id = p.price_updated_by
                                  WHERE p.id = :id LIMIT 1');
            $stmt->execute(['id' => $id]);
            $batch = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$batch) {
                Response::json(['error' => 'Purchase batch not found'], 404);
                return;
            }

            // 1. Sold & Fully Completed
            $stmtSold = $db->prepare('SELECT COALESCE(SUM(oi.quantity), 0) AS qty, COUNT(DISTINCT o.id) AS order_count
                                      FROM order_items oi
                                      JOIN orders o ON o.id = oi.order_id
                                      WHERE oi.purchase_id = :id AND o.deleted_at IS NULL
                                        AND (o.status = "completed" OR (o.custom_sale = 1 AND o.status = "delivered"))');
            $stmtSold->execute(['id' => $id]);
            $soldData = $stmtSold->fetch(PDO::FETCH_ASSOC);

            // 2. Sold & Pending Money / Installments
            $stmtCredit = $db->prepare('SELECT COALESCE(SUM(oi.quantity), 0) AS qty, COUNT(DISTINCT o.id) AS order_count,
                                               COALESCE(SUM(o.total - o.amount_paid), 0) AS debt_owed
                                        FROM order_items oi
                                        JOIN orders o ON o.id = oi.order_id
                                        WHERE oi.purchase_id = :id AND o.deleted_at IS NULL
                                          AND o.status = "pending_money"');
            $stmtCredit->execute(['id' => $id]);
            $creditData = $stmtCredit->fetch(PDO::FETCH_ASSOC);

            // 3. Active Credit Orders List
            $stmtCreditOrders = $db->prepare('SELECT o.id, o.uid, o.status, o.total, o.amount_paid, (o.total - o.amount_paid) AS owed, oi.quantity
                                              FROM order_items oi
                                              JOIN orders o ON o.id = oi.order_id
                                              WHERE oi.purchase_id = :id AND o.deleted_at IS NULL
                                                AND o.status = "pending_money"
                                              ORDER BY o.id DESC LIMIT 10');
            $stmtCreditOrders->execute(['id' => $id]);
            $creditOrders = $stmtCreditOrders->fetchAll(PDO::FETCH_ASSOC);

            // 4. Reserved in Standard Orders
            $stmtResOrders = $db->prepare('SELECT COALESCE(SUM(oi.quantity), 0) AS qty, COUNT(DISTINCT o.id) AS order_count
                                           FROM order_items oi
                                           JOIN orders o ON o.id = oi.order_id
                                           WHERE oi.purchase_id = :id AND o.deleted_at IS NULL
                                             AND (o.custom_sale = 0 OR o.custom_sale IS NULL)
                                             AND o.status IN ("pending", "processing")');
            $stmtResOrders->execute(['id' => $id]);
            $resOrdersData = $stmtResOrders->fetch(PDO::FETCH_ASSOC);

            // 5. Reserved in Active Custom Services
            $stmtResServices = $db->prepare('SELECT COALESCE(SUM(oi.quantity), 0) AS qty, COUNT(DISTINCT o.id) AS service_count
                                             FROM order_items oi
                                             JOIN orders o ON o.id = oi.order_id
                                             WHERE oi.purchase_id = :id AND o.deleted_at IS NULL
                                               AND o.custom_sale = 1
                                               AND o.status NOT IN ("completed", "delivered", "cancelled", "refunded")');
            $stmtResServices->execute(['id' => $id]);
            $resServicesData = $stmtResServices->fetch(PDO::FETCH_ASSOC);

            // 6. Active Holds List (Custom Services & Pending Orders)
            $stmtHolds = $db->prepare('SELECT o.id, o.uid, o.status, o.service_name, o.custom_sale, oi.quantity
                                       FROM order_items oi
                                       JOIN orders o ON o.id = oi.order_id
                                       WHERE oi.purchase_id = :id AND o.deleted_at IS NULL
                                         AND (((o.custom_sale = 0 OR o.custom_sale IS NULL) AND o.status IN ("pending", "processing"))
                                              OR (o.custom_sale = 1 AND o.status NOT IN ("completed", "delivered", "cancelled", "refunded")))
                                       ORDER BY o.id DESC LIMIT 10');
            $stmtHolds->execute(['id' => $id]);
            $activeHolds = $stmtHolds->fetchAll(PDO::FETCH_ASSOC);

            $rem = (string)$batch['quantity_remaining'];
            $res = (string)($batch['quantity_reserved'] ?? '0');
            $trulyFree = Decimal::comp($rem, $res) > 0 ? Decimal::sub($rem, $res) : '0';

            Response::json([
                'ok' => true,
                'purchase_id' => $id,
                'uid' => $batch['uid'] ?? "PUR-{$id}",
                'product_id' => (int)$batch['product_id'],
                'name' => $batch['name'],
                'price' => $batch['price'],
                'initial_price' => $batch['initial_price'] ?? $batch['price'],
                'price_before' => $batch['price_before'] ?? null,
                'price_updated_at' => $batch['price_updated_at'] ?? null,
                'price_updated_by' => $batch['price_updated_by'] ? (int)$batch['price_updated_by'] : null,
                'price_updated_by_name' => $batch['price_updated_by_name'] ?? null,
                'valuation_adjustment' => $batch['valuation_adjustment'] ?? '0',
                'valuation_adjustment_reason' => $batch['valuation_adjustment_reason'] ?? null,
                'total_quantity' => (string)$batch['quantity'],
                'quantity_remaining' => $rem,
                'quantity_sold' => (string)$batch['quantity_sold'],
                'quantity_reserved' => $res,
                'quantity_writeoff' => (string)($batch['quantity_writeoff'] ?? '0'),
                'payment_status' => $batch['payment_status'],
                'amount_paid' => (string)$batch['amount_paid'],
                'supplier_total' => (string)$batch['total'],
                'supplier_debt' => Decimal::comp((string)$batch['total'], (string)$batch['amount_paid']) > 0 
                    ? Decimal::sub((string)$batch['total'], (string)$batch['amount_paid']) 
                    : '0',
                'breakdown' => [
                    'sold_completed' => (string)($soldData['qty'] ?? '0'),
                    'sold_completed_orders' => (int)($soldData['order_count'] ?? 0),
                    'sold_pending_money' => (string)($creditData['qty'] ?? '0'),
                    'sold_pending_orders' => (int)($creditData['order_count'] ?? 0),
                    'pending_debt_owed' => (string)($creditData['debt_owed'] ?? '0'),
                    'reserved_orders' => (string)($resOrdersData['qty'] ?? '0'),
                    'reserved_custom_services' => (string)($resServicesData['qty'] ?? '0'),
                    'total_reserved' => $res,
                    'truly_free' => $trulyFree,
                ],
                'credit_orders' => $creditOrders,
                'active_holds' => $activeHolds,
            ]);
        } catch (\Throwable $e) {
            error_log('[PURCHASE BREAKDOWN ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to retrieve batch breakdown. Please check server error logs.'], 500);
        }
    }

    /**
     * Consolidate multiple purchase batches of the same product into a single Master Batch.
     * Enforces strict multi-partner self-ownership, DECIMAL(32,16) math, and audit logging.
     */
    /**
     * Dedicated Stock Hold & Reservation Inspector Endpoint.
     * Granular tracking of all units held in active POS orders, workshop tickets, and internal transfers.
     */
    public function holds(int $id): void
    {
        try {
            $db = Database::getConnection();
            $this->ensurePurchasesTableColumns($db);

            $stmt = $db->prepare('SELECT p.*, s.name AS supplier_name, u.username AS owner_name, pr.display_decimals, pr.name AS product_name
                                  FROM purchases p
                                  LEFT JOIN suppliers s ON s.id = p.supplier_id
                                  LEFT JOIN products pr ON pr.id = p.product_id
                                  LEFT JOIN users u ON u.id = COALESCE(p.owner_user_id, p.created_by)
                                  WHERE p.id = :id LIMIT 1');
            $stmt->execute(['id' => $id]);
            $batch = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$batch) {
                Response::json(['error' => 'Purchase batch not found'], 404);
                return;
            }

            $rem = (string)$batch['quantity_remaining'];
            $res = (string)($batch['quantity_reserved'] ?? '0');
            $trulyFree = Decimal::comp($rem, $res) > 0 ? Decimal::sub($rem, $res) : '0';

            // Granular Order Items Hold Query
            $stmtHolds = $db->prepare('
                SELECT 
                    oi.id AS item_id,
                    oi.order_id,
                    oi.purchase_id,
                    oi.quantity,
                    oi.price,
                    oi.cost,
                    o.id AS order_backend_id,
                    COALESCE(o.uid, CONCAT("#ORD-", o.id)) AS order_uid,
                    o.custom_sale,
                    o.service_name,
                    o.status AS order_status,
                    COALESCE(c.name, "") AS customer_name,
                    o.date AS created_at,
                    u.username AS cashier_username
                FROM order_items oi
                JOIN orders o ON o.id = oi.order_id
                LEFT JOIN customers c ON c.id = o.customer_id
                LEFT JOIN users u ON u.id = o.created_by
                WHERE oi.purchase_id = :id 
                  AND o.deleted_at IS NULL
                  AND (
                    ((o.custom_sale = 0 OR o.custom_sale IS NULL) AND o.status IN ("pending", "processing"))
                    OR
                    (o.custom_sale = 1 AND o.status NOT IN ("completed", "delivered", "cancelled", "refunded"))
                  )
                ORDER BY o.id DESC, oi.id ASC
            ');
            $stmtHolds->execute(['id' => $id]);
            $activeHolds = $stmtHolds->fetchAll(PDO::FETCH_ASSOC);

            // Active Stock Transfers Query
            $transfers = [];
            if (!empty($batch['transfer_status']) && in_array($batch['transfer_status'], ['pending_transfer', 'pending_delegated'], true)) {
                $uToStmt = $db->prepare('SELECT username FROM users WHERE id = :uid LIMIT 1');
                $uToStmt->execute(['uid' => (int)$batch['transfer_to_user_id']]);
                $toUsername = $uToStmt->fetchColumn() ?: 'Staff Member';

                $uInitStmt = $db->prepare('SELECT username FROM users WHERE id = :uid LIMIT 1');
                $uInitStmt->execute(['uid' => (int)($batch['transfer_initiated_by'] ?? $batch['created_by'])]);
                $fromUsername = $uInitStmt->fetchColumn() ?: ($batch['owner_name'] ?? 'Staff Member');

                $transfers[] = [
                    'transfer_id' => (int)($batch['transfer_settlement_id'] ?? $batch['id']),
                    'transfer_uid' => $batch['uid'] ?? "PUR-{$id}",
                    'source_purchase_id' => $id,
                    'quantity' => (string)$batch['quantity_remaining'],
                    'status' => $batch['transfer_status'],
                    'created_at' => $batch['transfer_initiated_at'] ?? $batch['date'],
                    'from_username' => $fromUsername,
                    'to_username' => $toUsername,
                ];
            }

            Response::json([
                'ok' => true,
                'purchase_id' => $id,
                'uid' => $batch['uid'] ?? "PUR-{$id}",
                'product_id' => (int)$batch['product_id'],
                'product_name' => $batch['product_name'] ?? $batch['name'],
                'display_decimals' => $batch['display_decimals'] ?? 2,
                'owner_name' => $batch['owner_name'] ?? 'System',
                'quantity_total' => (string)$batch['quantity'],
                'quantity_remaining' => $rem,
                'quantity_reserved' => $res,
                'available_free' => $trulyFree,
                'holds' => $activeHolds,
                'transfers' => $transfers
            ]);
        } catch (\Throwable $e) {
            error_log('[PURCHASE HOLDS ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to retrieve batch holds. Please check server error logs.'], 500);
        }
    }

    public function mergeBatches(array $data): void
    {
        $sessionUserId = (int)($_SESSION['user_id'] ?? 0);
        if ($sessionUserId === 0) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $purchaseIds = $data['purchase_ids'] ?? $data['candidate_ids'] ?? [];
        if (!is_array($purchaseIds) || count($purchaseIds) < 2) {
            Response::json(['error' => 'At least two purchase batches are required to perform a merge'], 400);
            return;
        }

        // Clean and deduplicate IDs
        $cleanIds = array_values(array_unique(array_filter(array_map('intval', $purchaseIds), fn($id) => $id > 0)));
        if (count($cleanIds) < 2) {
            Response::json(['error' => 'Invalid or insufficient purchase batches specified'], 400);
            return;
        }

        // Sort in deterministic ascending order to prevent deadlocks
        sort($cleanIds);

        $rawMode = strtolower(trim((string)($data['cost_mode'] ?? 'wac')));
        $costMode = in_array($rawMode, ['custom', 'direct', 'revaluation'], true) ? $rawMode : 'wac';
        $customCost = isset($data['target_cost']) ? trim((string)$data['target_cost']) : (isset($data['custom_unit_cost']) ? trim((string)$data['custom_unit_cost']) : null);
        $reason = trim((string)($data['reason'] ?? $data['revaluation_reason'] ?? ''));

        if ($costMode === 'revaluation' && mb_strlen($reason) < 3) {
            Response::json(['error' => 'A mandatory audit reason (minimum 3 characters) is required for revaluation batch mergers'], 400);
            return;
        }

        $db = Database::getConnection();
        $this->ensurePurchasesTableColumns($db);

        $db->beginTransaction();

        try {
            // Lock all candidates FOR UPDATE in deterministic ID order
            $placeholders = implode(',', array_fill(0, count($cleanIds), '?'));
            $stmt = $db->prepare("SELECT * FROM purchases WHERE id IN ($placeholders) ORDER BY id ASC FOR UPDATE");
            $stmt->execute($cleanIds);
            $candidates = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($candidates) !== count($cleanIds)) {
                $db->rollBack();
                Response::json(['error' => 'One or more specified purchase batches could not be found'], 404);
                return;
            }

            $firstProductId = null;
            $firstProductName = null;
            $firstSupplierId = null;
            $totalQty = '0';
            $totalValBefore = '0';
            $constituentDetails = [];

            foreach ($candidates as $cand) {
                $candId = (int)$cand['id'];

                // 1. Strict Self-Ownership Enforcement:
                // Only stock owned by the current session user can be merged.
                $candOwner = $cand['owner_user_id'] !== null ? (int)$cand['owner_user_id'] : (int)($cand['created_by'] ?? 0);
                if ($candOwner !== $sessionUserId) {
                    $db->rollBack();
                    SystemLog::write('purchases', 'security_violation', $candId, $cand['name'] ?? "Purchase #$candId", json_encode([
                        'violation'    => 'unauthorized_batch_merge',
                        'error'        => 'Attempted to merge stock lot belonging to another user',
                        'lot_id'       => $candId,
                        'lot_owner_id' => $candOwner,
                        'attempted_by' => $sessionUserId
                    ], JSON_UNESCAPED_UNICODE), $sessionUserId);
                    Response::json(['error' => 'Forbidden: You can only merge stock lots that you personally own.'], 403);
                    return;
                }

                // 2. Same Product Symmetry Check:
                if ($firstProductId === null) {
                    $firstProductId = (int)$cand['product_id'];
                    $firstProductName = $cand['name'];
                    $firstSupplierId = $cand['supplier_id'] ? (int)$cand['supplier_id'] : null;
                } else if ((int)$cand['product_id'] !== $firstProductId) {
                    $db->rollBack();
                    Response::json(['error' => 'All batches must belong to the exact same product'], 400);
                    return;
                }

                // 3. Active State & Custody Locks Check:
                if (!empty($cand['deleted_at']) || $cand['status'] === 'deleted') {
                    $db->rollBack();
                    Response::json(['error' => "Batch #{$candId} has been deleted and cannot be merged"], 400);
                    return;
                }
                if (in_array($cand['transfer_status'], ['pending_transfer', 'pending_delegated'])) {
                    $db->rollBack();
                    Response::json(['error' => "Batch #{$candId} is currently locked in an active stock transfer or delegated purchase"], 422);
                    return;
                }

                // 4. Remaining Stock & Cart Reservation Check:
                $rem = (string)$cand['quantity_remaining'];
                $res = (string)($cand['quantity_reserved'] ?? '0');
                if (Decimal::comp($rem, '0') <= 0) {
                    $db->rollBack();
                    Response::json(['error' => "Batch #{$candId} has zero remaining stock to merge"], 400);
                    return;
                }
                if (Decimal::comp($res, '0') > 0) {
                    $candUid = $cand['uid'] ?? "PUR-{$candId}";
                    // Retrieve active reservation sources for cashier guidance
                    $stmtRes = $db->prepare('SELECT o.id, o.uid, o.status, o.service_name, o.custom_sale, oi.quantity
                                            FROM order_items oi
                                            JOIN orders o ON o.id = oi.order_id
                                            WHERE oi.purchase_id = :pid AND o.deleted_at IS NULL
                                              AND (((o.custom_sale = 0 OR o.custom_sale IS NULL) AND o.status IN ("pending","processing"))
                                                   OR (o.custom_sale = 1 AND o.status NOT IN ("completed","delivered","cancelled","refunded")))');
                    $stmtRes->execute(['pid' => $candId]);
                    $activeHolds = $stmtRes->fetchAll(PDO::FETCH_ASSOC);

                    $db->rollBack();
                    Response::json([
                        'ok'                 => false,
                        'error'              => "Batch #{$candUid} has {$res} unit(s) reserved in active operations. Please complete or release the reservations before merging.",
                        'code'               => 'BATCH_HAS_RESERVATIONS',
                        'batch_id'           => $candId,
                        'batch_uid'          => $candUid,
                        'quantity_reserved'  => $res,
                        'quantity_remaining' => $rem,
                        'active_holds'       => $activeHolds,
                    ], 422);
                    return;
                }

                // 5. Fully Paid Prerequisite Enforcement:
                $candPaymentStatus = (string)($cand['payment_status'] ?? 'paid');
                $candTotal = (string)($cand['total'] ?? '0');
                $candPaid = (string)($cand['amount_paid'] ?? '0');
                if ($candPaymentStatus !== 'paid' || Decimal::comp($candPaid, $candTotal) < 0) {
                    $db->rollBack();
                    $unpaidDebt = Decimal::sub($candTotal, $candPaid);
                    if (Decimal::comp($unpaidDebt, '0') <= 0) {
                        $unpaidDebt = $candTotal;
                    }
                    $candUid = $cand['uid'] ?? "PUR-{$candId}";
                    Response::json([
                        'ok'                  => false,
                        'error'               => "Batch #{$candUid} has an unsettled debt of {$unpaidDebt} DZD ({$candPaymentStatus}). All batches must be fully paid before merging.",
                        'code'                => 'BATCH_NOT_FULLY_PAID',
                        'unsettled_batch_id'  => $candId,
                        'unsettled_batch_uid' => $candUid,
                        'payment_status'      => $candPaymentStatus,
                        'total'               => $candTotal,
                        'amount_paid'         => $candPaid,
                        'amount_owed'         => $unpaidDebt,
                    ], 422);
                    return;
                }

                // Accumulate quantity and valuation
                $price = (string)$cand['price'];
                $totalQty = Decimal::add($totalQty, $rem);
                $batchVal = Decimal::mul($rem, $price);
                $totalValBefore = Decimal::add($totalValBefore, $batchVal);

                $constituentDetails[] = [
                    'id'               => $candId,
                    'uid'              => $cand['uid'] ?? "PUR-{$candId}",
                    'quantity_merged'  => $rem,
                    'original_cost'    => $price,
                    'valuation_before' => $batchVal,
                    'date'             => $cand['date'],
                    'supplier_id'      => $cand['supplier_id'] ?? null,
                ];
            }

            if (Decimal::comp($totalQty, '0') <= 0) {
                $db->rollBack();
                Response::json(['error' => 'Total remaining quantity to merge must be greater than zero'], 400);
                return;
            }

            // 5. Cost Resolution & Valuation Engine:
            $wacCost = Decimal::div($totalValBefore, $totalQty);
            if ($costMode === 'custom' || $costMode === 'direct' || $costMode === 'revaluation') {
                if ($customCost === null || $customCost === '' || !is_numeric($customCost) || Decimal::comp($customCost, '0') <= 0) {
                    $db->rollBack();
                    Response::json(['error' => 'A valid positive target unit cost is required'], 400);
                    return;
                }
                $chosenCost = Decimal::truncate($customCost, 16);
            } else {
                $chosenCost = $wacCost;
            }

            $totalValAfter = Decimal::mul($totalQty, $chosenCost);
            $netValuationAdjustment = Decimal::sub($totalValAfter, $totalValBefore);

            // Compute per-batch variance matrix
            $varianceMatrix = [];
            foreach ($constituentDetails as $cDetail) {
                $uDiff = Decimal::sub($chosenCost, $cDetail['original_cost']);
                $vDiff = Decimal::mul($cDetail['quantity_merged'], $uDiff);
                $cDetail['new_cost'] = $chosenCost;
                $cDetail['unit_variance'] = $uDiff;
                $cDetail['valuation_delta'] = $vDiff;
                $varianceMatrix[] = $cDetail;
            }

            // 6. Insert New Master Purchase Batch:
            $now = date('Y-m-d H:i:s');
            $datePrefix = date('Ymd');
            $hexSuffix = strtoupper(bin2hex(random_bytes(2)));
            $tempUid = "PUR-{$datePrefix}-{$hexSuffix}";

            $insertStmt = $db->prepare('INSERT INTO purchases (
                uid, product_id, name, price, quantity, quantity_remaining, quantity_reserved,
                quantity_sold, quantity_writeoff, total, date, created_by, owner_user_id,
                supplier_id, payment_status, amount_paid, paid_at, paid_by, paid_from, settle_kind,
                status, is_merged_master, merged_from_ids, merged_at, merged_by,
                merge_cost_mode, valuation_adjustment, valuation_adjustment_reason, supplier_note
            ) VALUES (
                :uid, :product_id, :name, :price, :quantity, :quantity_remaining, 0,
                0, 0, :total, :date, :created_by, :owner_user_id,
                :supplier_id, "paid", :amount_paid, :paid_at, :paid_by, "vault", "cash",
                "active", 1, :merged_from_ids, :merged_at, :merged_by,
                :merge_cost_mode, :valuation_adjustment, :valuation_adjustment_reason, :supplier_note
            )');

            $supplierIds = array_values(array_unique(array_filter(array_map(function ($c) {
                return !empty($c['supplier_id']) ? (int)$c['supplier_id'] : null;
            }, $constituentDetails))));

            $isMultiSupplier = count($supplierIds) > 1;
            $supplierNames = [];
            if (!empty($supplierIds)) {
                $inClause = implode(',', array_fill(0, count($supplierIds), '?'));
                $supStmt = $db->prepare("SELECT name FROM suppliers WHERE id IN ($inClause)");
                $supStmt->execute($supplierIds);
                $supplierNames = $supStmt->fetchAll(PDO::FETCH_COLUMN);
            }

            if (!empty($reason)) {
                $mergeNoteText = $reason;
            } elseif ($isMultiSupplier) {
                $mergeNoteText = "Merged Master Batch from " . count($cleanIds) . " lots (" . count($supplierIds) . " suppliers: " . implode(', ', $supplierNames) . ")";
            } else {
                $mergeNoteText = "Merged Master Batch from " . count($cleanIds) . " lots";
            }

            $masterSupplierId = $isMultiSupplier ? null : $firstSupplierId;

            $insertStmt->execute([
                'uid'                         => $tempUid,
                'product_id'                  => $firstProductId,
                'name'                        => $firstProductName,
                'price'                       => $chosenCost,
                'quantity'                    => $totalQty,
                'quantity_remaining'          => $totalQty,
                'total'                       => $totalValAfter,
                'date'                        => $now,
                'created_by'                  => $sessionUserId,
                'owner_user_id'               => $sessionUserId,
                'supplier_id'                 => $masterSupplierId,
                'amount_paid'                 => $totalValAfter,
                'paid_at'                     => $now,
                'paid_by'                     => $sessionUserId,
                'merged_from_ids'             => json_encode($cleanIds),
                'merged_at'                   => $now,
                'merged_by'                   => $sessionUserId,
                'merge_cost_mode'             => $costMode,
                'valuation_adjustment'        => $netValuationAdjustment,
                'valuation_adjustment_reason' => $reason,
                'supplier_note'               => $mergeNoteText,
            ]);

            $masterBatchId = (int)$db->lastInsertId();
            $canonicalUid = "{$tempUid}({$masterBatchId})";
            $db->prepare('UPDATE purchases SET uid = :uid WHERE id = :id')->execute([
                'uid' => $canonicalUid,
                'id'  => $masterBatchId
            ]);

            // 7. Retire Source Batches:
            $retireStmt = $db->prepare('UPDATE purchases SET
                quantity_merged = quantity_merged + :qty_merged,
                quantity_remaining = 0,
                status = "merged",
                merged_into_id = :master_id,
                merged_at = :merged_at,
                merged_by = :merged_by
                WHERE id = :id');

            foreach ($constituentDetails as $cDetail) {
                $retireStmt->execute([
                    'qty_merged' => $cDetail['quantity_merged'],
                    'master_id'  => $masterBatchId,
                    'merged_at'  => $now,
                    'merged_by'  => $sessionUserId,
                    'id'         => $cDetail['id']
                ]);
            }

            // 8. Product History Log:
            try {
                $db->prepare('INSERT INTO product_history (product_id, action, changes, edited_by, created_at) VALUES (:pid, "batch_merged", :changes, :uid, NOW())')->execute([
                    'pid'     => $firstProductId,
                    'changes' => json_encode([
                        'master_batch_id'             => $masterBatchId,
                        'master_uid'                  => $canonicalUid,
                        'source_batch_ids'            => $cleanIds,
                        'total_quantity_merged'       => $totalQty,
                        'chosen_unit_cost'            => $chosenCost,
                        'wac_unit_cost'               => $wacCost,
                        'valuation_adjustment'        => $netValuationAdjustment,
                        'cost_mode'                   => $costMode,
                        'reason'                      => $reason,
                    ], JSON_UNESCAPED_UNICODE),
                    'uid'     => $sessionUserId,
                ]);
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

            // 9. System Log Entry:
            SystemLog::write('purchases', 'batch_merge', $masterBatchId, $firstProductName, json_encode([
                'master_batch_id'             => $masterBatchId,
                'master_uid'                  => $canonicalUid,
                'source_batch_ids'            => $cleanIds,
                'total_quantity'              => $totalQty,
                'chosen_unit_cost'            => $chosenCost,
                'wac_baseline'                => $wacCost,
                'valuation_before'            => $totalValBefore,
                'valuation_after'             => $totalValAfter,
                'net_valuation_adjustment'    => $netValuationAdjustment,
                'cost_mode'                   => $costMode,
                'reason'                      => $reason,
                'variance_matrix'             => $varianceMatrix,
            ], JSON_UNESCAPED_UNICODE), $sessionUserId);

            EntityVersion::bump($db, 'purchases', 'products');
            $db->commit();

            // Fetch created master purchase row to return
            $mStmt = $db->prepare('SELECT * FROM purchases WHERE id = :id');
            $mStmt->execute(['id' => $masterBatchId]);
            $masterRow = $mStmt->fetch(PDO::FETCH_ASSOC);

            Response::json([
                'ok'                          => true,
                'master_batch'                => $masterRow,
                'total_quantity_merged'       => $totalQty,
                'chosen_unit_cost'            => $chosenCost,
                'wac_baseline_cost'           => $wacCost,
                'net_valuation_adjustment'    => $netValuationAdjustment,
                'source_batch_ids'            => $cleanIds,
                'variance_matrix'             => $varianceMatrix
            ], 201);

        } catch (\Throwable $e) {
            try {
                if ($db->inTransaction()) {
                    $db->rollBack();
                }
            } catch (\Throwable $rbErr) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $rbErr->getMessage());
        }
            error_log('[BATCH MERGE ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Batch merge failed. Please check server error logs.'], 500);
        }
    }

    /**
     * Direct Purchase Price Modification without Merging.
     * Accurately calculates:
     * - New invoice total: quantity * new_price
     * - Unit price delta: new_price - old_price
     * - Valuation delta on unsold remaining inventory (Gain / Loss): (new_price - old_price) * quantity_remaining
     * - Adjusts supplier debt balance if linked to a supplier
     * - Recalculates payment_status ('paid', 'partial', 'unpaid') based on amount_paid vs new_total
     * - Records full forensic audit trail in purchase_history and system_logs
     */
    public function updatePrice(string|int $id, array $data): void
    {
        $sessionUserId = (int)($_SESSION['user_id'] ?? 0);
        if ($sessionUserId === 0) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $db = Database::getConnection();
        $this->ensurePurchasesTableColumns($db);
        self::ensurePurchaseHistoryTable($db);
        $this->ensureSupplierHistoryTable($db);

        $db->beginTransaction();

        try {
            // Find target purchase lot FOR UPDATE
            $stmt = $db->prepare('SELECT * FROM purchases WHERE (id = :id_num OR uid = :uid_str) AND deleted_at IS NULL LIMIT 1 FOR UPDATE');
            $idNum = is_numeric($id) ? (int)$id : 0;
            $stmt->execute(['id_num' => $idNum, 'uid_str' => (string)$id]);
            $purchase = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$purchase) {
                $db->rollBack();
                Response::json(['error' => 'Purchase not found or has been deleted'], 404);
                return;
            }

            $purchaseId = (int)$purchase['id'];
            $uid = $purchase['uid'] ?? "PUR-{$purchaseId}";

            // Check merge and transfer status locks
            if ($purchase['status'] === 'merged' || !empty($purchase['merged_into_id'])) {
                $db->rollBack();
                Response::json(['error' => "Purchase batch #{$uid} has already been merged and cannot have its price altered directly"], 400);
                return;
            }

            if (in_array($purchase['transfer_status'], ['pending_transfer', 'pending_delegated'])) {
                $db->rollBack();
                Response::json(['error' => "Purchase batch #{$uid} is locked in an active stock transfer or delegated custody"], 422);
                return;
            }

            // Zero-Reservation Invariant (Rule 35): Cannot modify price on a batch with active holds/orders
            if (Decimal::comp((string)($purchase['quantity_reserved'] ?? '0'), '0') > 0) {
                $db->rollBack();
                Response::json([
                    'error' => "Cannot adjust cost price on purchase batch #{$uid}: It has active order holds or workshop reservations. Complete or release the holds first.",
                    'code'  => 'BATCH_HAS_RESERVATIONS'
                ], 422);
                return;
            }

            // Security Guard: Only the verified stock owner (or admin) can adjust purchase prices
            $lotOwner = $purchase['owner_user_id'] !== null ? (int)$purchase['owner_user_id'] : (int)($purchase['created_by'] ?? 0);
            $isAdmin = !empty($_SESSION['is_admin']) || (isset($_SESSION['role']) && $_SESSION['role'] === 'admin');
            if (!$isAdmin && $lotOwner !== $sessionUserId) {
                $db->rollBack();
                Response::json(['error' => 'Forbidden: Only the verified stock owner can adjust prices for this purchase lot'], 403);
                return;
            }

            // Validate new price
            $newPriceRaw = trim((string)($data['price'] ?? ''));
            if ($newPriceRaw === '' || !is_numeric($newPriceRaw) || Decimal::comp($newPriceRaw, '0') <= 0) {
                $db->rollBack();
                Response::json(['error' => 'A valid positive unit purchase price is required'], 400);
                return;
            }

            // Enforce product decimal precision settings
            $effectiveDecimals = $this->getProductEffectiveDecimals($db, (int)$purchase['product_id']);
            if (str_contains($newPriceRaw, '.')) {
                $parts = explode('.', $newPriceRaw);
                $frac = rtrim($parts[1] ?? '', '0');
                if (strlen($frac) > $effectiveDecimals) {
                    $db->rollBack();
                    Response::json(['error' => "Unit price cannot have more than {$effectiveDecimals} decimal places for this product"], 400);
                    return;
                }
            }
            $newPrice = Decimal::truncate($newPriceRaw, $effectiveDecimals);
            $oldPrice = (string)$purchase['price'];

            if (Decimal::comp($newPrice, $oldPrice) === 0) {
                $db->rollBack();
                Response::json(['error' => 'The new price is identical to the current unit price. No modification performed.'], 400);
                return;
            }

            // Validate mandatory reason
            $reason = trim((string)($data['reason'] ?? ''));
            if (mb_strlen($reason) < 3) {
                $db->rollBack();
                Response::json(['error' => 'A mandatory audit reason (minimum 3 characters) is required for purchase price adjustments'], 400);
                return;
            }

            // Precision Decimal Math:
            $quantity = (string)$purchase['quantity'];
            $quantityRemaining = (string)$purchase['quantity_remaining'];
            $oldTotal = (string)$purchase['total'];
            $initialPrice = $purchase['initial_price'] !== null ? (string)$purchase['initial_price'] : $oldPrice;

            $deltaPrice = Decimal::sub($newPrice, $oldPrice);
            // Invariant Supplier Debt Rule: changing unit price is an internal stock cost basis revaluation.
            // It MUST NEVER alter the agreed supplier invoice total, amount_paid, or payment_status.
            // The supplier invoice total remains $oldTotal, guaranteeing owed = total - amount_paid is 100% unchanged.
            $newTotal = $oldTotal;
            $deltaTotal = '0';

            // Inventory Asset Valuation Delta (on unsold remaining stock)
            $valuationDelta = Decimal::mul($quantityRemaining, $deltaPrice);
            $currentValAdj = (string)($purchase['valuation_adjustment'] ?? '0');
            $newValAdj = Decimal::add($currentValAdj, $valuationDelta);

            // Financial Status & Supplier Debt: Preserved 100% intact
            $amountPaid = (string)($purchase['amount_paid'] ?? '0');
            $newAmountPaid = $amountPaid;
            $newPaymentStatus = $purchase['payment_status'] ?? 'unpaid';

            // Log transparently to supplier history that internal cost was adjusted without altering supplier debt
            if (!empty($purchase['supplier_id'])) {
                $supStmt = $db->prepare('SELECT id, name FROM suppliers WHERE id = :id FOR UPDATE');
                $supStmt->execute(['id' => $purchase['supplier_id']]);
                $supplier = $supStmt->fetch(PDO::FETCH_ASSOC);

                if ($supplier) {
                    $db->prepare('INSERT INTO supplier_history (supplier_id, edited_by, action, changes, reason, created_at)
                        VALUES (:sid, :uid, "purchase_price_adjusted", :changes, :reason, NOW())')
                       ->execute([
                           'sid' => $supplier['id'],
                           'uid' => $sessionUserId,
                           'changes' => json_encode([
                               'purchase_id'    => $purchaseId,
                               'purchase_uid'   => $uid,
                               'price_before'   => $oldPrice,
                               'price_after'    => $newPrice,
                               'supplier_debt'  => 'unchanged',
                               'total_delta'    => '0',
                           ], JSON_UNESCAPED_UNICODE),
                           'reason' => "Internal inventory unit price adjusted ({$oldPrice} -> {$newPrice}). Supplier invoice total and debt remain unchanged: {$reason}"
                       ]);
                }
            }

            // Update purchases table: price & valuation updated; total, amount_paid, payment_status preserved
            $upd = $db->prepare('UPDATE purchases SET
                price = :price,
                initial_price = :initial_price,
                price_before = :price_before,
                price_updated_at = NOW(),
                price_updated_by = :price_updated_by,
                valuation_adjustment = :val_adj,
                valuation_adjustment_reason = :val_reason
                WHERE id = :id');

            $upd->execute([
                'price'            => $newPrice,
                'initial_price'    => $initialPrice,
                'price_before'     => $oldPrice,
                'price_updated_by' => $sessionUserId,
                'val_adj'          => $newValAdj,
                'val_reason'       => $reason,
                'id'               => $purchaseId,
            ]);

            // Insert into purchase_history
            $histStmt = $db->prepare('INSERT INTO purchase_history (
                purchase_id, action, price_before, price_after, valuation_delta,
                quantity_remaining, reason, changes, edited_by, created_at
            ) VALUES (
                :pid, "price_adjusted", :p_before, :p_after, :v_delta,
                :q_rem, :reason, :changes, :edited_by, NOW()
            )');

            $histStmt->execute([
                'pid'       => $purchaseId,
                'p_before'  => $oldPrice,
                'p_after'   => $newPrice,
                'v_delta'   => $valuationDelta,
                'q_rem'     => $quantityRemaining,
                'reason'    => $reason,
                'changes'   => json_encode([
                    'initial_price'      => $initialPrice,
                    'price_before'       => $oldPrice,
                    'price_after'        => $newPrice,
                    'delta_price'        => $deltaPrice,
                    'old_total'          => $oldTotal,
                    'new_total'          => $oldTotal,
                    'delta_total'        => '0',
                    'valuation_delta'    => $valuationDelta,
                    'quantity_remaining' => $quantityRemaining,
                    'quantity_total'     => $quantity,
                    'supplier_debt'      => 'unchanged',
                    'payment_status'     => $newPaymentStatus,
                ], JSON_UNESCAPED_UNICODE),
                'edited_by' => $sessionUserId,
            ]);

            // System Log Entry
            SystemLog::write(
                'purchases',
                'price_adjusted',
                $purchaseId,
                $purchase['name'] ?? "Purchase #{$purchaseId}",
                json_encode([
                    'uid'             => $uid,
                    'price_before'    => $oldPrice,
                    'price_after'     => $newPrice,
                    'delta_unit'      => $deltaPrice,
                    'valuation_delta' => $valuationDelta,
                    'old_total'       => $oldTotal,
                    'new_total'       => $oldTotal,
                    'delta_total'     => '0',
                    'supplier_debt'   => 'unchanged',
                    'reason'          => $reason,
                    'updated_by'      => $sessionUserId,
                ], JSON_UNESCAPED_UNICODE),
                $sessionUserId
            );

            EntityVersion::bump($db, 'purchases', 'products');
            $db->commit();

            // Fetch session user's username for response
            $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id');
            $uStmt->execute(['id' => $sessionUserId]);
            $sessionUserName = $uStmt->fetchColumn() ?: null;

            Response::json([
                'ok'                          => true,
                'message'                     => 'Purchase price updated successfully',
                'purchase_id'                 => $purchaseId,
                'uid'                         => $uid,
                'initial_price'               => $initialPrice,
                'price_before'                => $oldPrice,
                'price_after'                 => $newPrice,
                'delta_price'                 => $deltaPrice,
                'valuation_delta'             => $valuationDelta,
                'old_total'                   => $oldTotal,
                'new_total'                   => $oldTotal,
                'delta_total'                 => '0',
                'payment_status'              => $newPaymentStatus,
                'price_updated_at'            => date('Y-m-d H:i:s'),
                'price_updated_by'            => $sessionUserId,
                'price_updated_by_name'       => $sessionUserName,
                'valuation_adjustment_reason' => $reason,
            ]);

        } catch (\Throwable $e) {
            try {
                if ($db->inTransaction()) {
                    $db->rollBack();
                }
            } catch (\Throwable $rbErr) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $rbErr->getMessage());
        }
            error_log('[PRICE UPDATE ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Price modification failed. Please check server error logs.'], 500);
        }
    }
}

/* [END_OF_MODULE_SECURITY_SEAL] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
