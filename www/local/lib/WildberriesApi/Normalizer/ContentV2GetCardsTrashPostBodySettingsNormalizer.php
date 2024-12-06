<?php

namespace Placestart\WildberriesApi\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Placestart\WildberriesApi\Runtime\Normalizer\CheckArray;
use Placestart\WildberriesApi\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ContentV2GetCardsTrashPostBodySettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettings::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettings::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettings();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sort', $data)) {
                $object->setSort($this->denormalizer->denormalize($data['sort'], \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsSort::class, 'json', $context));
                unset($data['sort']);
            }
            if (\array_key_exists('cursor', $data)) {
                $object->setCursor($this->denormalizer->denormalize($data['cursor'], \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsCursor::class, 'json', $context));
                unset($data['cursor']);
            }
            if (\array_key_exists('filter', $data)) {
                $object->setFilter($this->denormalizer->denormalize($data['filter'], \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsFilter::class, 'json', $context));
                unset($data['filter']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $data['sort'] = $this->normalizer->normalize($object->getSort(), 'json', $context);
            }
            if ($object->isInitialized('cursor') && null !== $object->getCursor()) {
                $data['cursor'] = $this->normalizer->normalize($object->getCursor(), 'json', $context);
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $this->normalizer->normalize($object->getFilter(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettings::class => false];
        }
    }
} else {
    class ContentV2GetCardsTrashPostBodySettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettings::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettings::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettings();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sort', $data)) {
                $object->setSort($this->denormalizer->denormalize($data['sort'], \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsSort::class, 'json', $context));
                unset($data['sort']);
            }
            if (\array_key_exists('cursor', $data)) {
                $object->setCursor($this->denormalizer->denormalize($data['cursor'], \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsCursor::class, 'json', $context));
                unset($data['cursor']);
            }
            if (\array_key_exists('filter', $data)) {
                $object->setFilter($this->denormalizer->denormalize($data['filter'], \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsFilter::class, 'json', $context));
                unset($data['filter']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $data['sort'] = $this->normalizer->normalize($object->getSort(), 'json', $context);
            }
            if ($object->isInitialized('cursor') && null !== $object->getCursor()) {
                $data['cursor'] = $this->normalizer->normalize($object->getCursor(), 'json', $context);
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $this->normalizer->normalize($object->getFilter(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettings::class => false];
        }
    }
}